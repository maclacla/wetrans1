<?php
class KillBot
{
    private string $apiKey;
    private string $config;

    public function __construct($api_key, $config)
    {
        $this->apiKey = $api_key;
        $this->config = $config;
    }

    private function getClientIP(): string
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client = $_SERVER['HTTP_CLIENT_IP'] ?? '';
        $forward = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
        $remote = $_SERVER['REMOTE_ADDR'] ?? '';

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            return $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            return $forward;
        } else {
            return $remote;
        }
    }

    public function show404Page(): void
    {
        header("HTTP/1.0 404 Not Found");
        $requestedPage = $_SERVER['REQUEST_URI'] ?? 'Unknown';
        $requestedPageWithoutQueryString = parse_url($requestedPage, PHP_URL_PATH);
        $serverName = $_SERVER['SERVER_NAME'] ?? 'Unknown';
        echo <<<EOL
        <!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
        <html><head>
        <title>404 Not Found</title>
        </head><body>
        <h1>Not Found</h1>
        <p>The requested URL $requestedPageWithoutQueryString was not found on this server.</p>
        <hr>
        <address>Apache/2.4.57 (Debian) Server at $serverName Port 80</address>
        </body></html>
        EOL;
        die();
    }

    private function httpGet($url): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, 'KillBot.to Blocker-PHP');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get HTTP status code
        if ($response === false) {
            throw new Exception("HTTP request failed with status $httpCode: " . curl_error($ch));
        }
        curl_close($ch);
        return $response;
    }

    public function check(): array
    {
        try {
            $ip = $this->getClientIP();
            $response = $this->httpGet("https://killbot.to/api/antiBots/" . $this->apiKey . "/check?config=" . $this->config . "&ip=" . $ip . "&ua=" . urlencode($_SERVER['HTTP_USER_AGENT']));
            $decodedResponse = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception("JSON decode error: " . json_last_error_msg());
            }
            return $decodedResponse;
        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    public function getUsage(): array
    {
        try {
            $response = $this->httpGet("https://killbot.to/api/antiBots/" . $this->apiKey . "/getUsage");
            $decodedResponse = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception("JSON decode error.");
            }
            return $decodedResponse;
        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
}

$killBotApiKey = "8a16718b-d4b8-4e34-8fd4-db1933ca8058"; // Votre API Key KillBot.to ici
$killBotConfigName = "default";
$Killbot = new KillBot($killBotApiKey, $killBotConfigName);
$check = $Killbot->check();
// Vérifiez si l'appel API a réussi
if (!$check["success"]) {
    // L'appel API a échoué, gérez l'erreur
    die($check["error"] ?? "An unknown error occurred.");
}

// Vérifiez si l'utilisateur est bloqué
if ($check["block"]) {
    // L'utilisateur est bloqué, effectuez l'action nécessaire, par exemple, afficher une page 404
    $Killbot->show404Page();
    exit; // Assurez-vous qu'aucun autre code n'est exécuté après l'affichage de la page 404
}

// Si le code arrive ici, cela signifie que l'utilisateur n'est pas bloqué
// Votre logique d'application web continue ici
$IPLocation = $check["IPlocation"] ?? null; // Données de géolocalisation de l'adresse IP

// Obtenez l'utilisation de l'API:
$usage = $Killbot->getUsage()['quota'];
// D'autres logiques d'application peuvent être placées ici
?>