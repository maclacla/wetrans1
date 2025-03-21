<?php

include_once './bots/father.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfert Expiré</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('./assets/img/fond.png') no-repeat center center/cover;
            backdrop-filter: blur(8px);
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }
        .card {
            background: rgba(255, 255, 255, 0.9);
            width: 320px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            padding: 20px;
        }
        .card video {
            width: 100%;
            border-radius: 10px;
            outline: none;
            border: none;
        }
        .card video:focus, .card video:hover {
            outline: none;
            border: none;
        }
        .card h2 {
            color: #333;
            margin: 15px 0 10px;
            font-weight: 600;
        }
        .card p {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .card a {
            color: #007bff;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            font-weight: 400;
        }
        .button {
            display: block;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 12px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            transition: 0.3s;
        }
        .button:hover {
            background: linear-gradient(135deg, #0056b3, #003f7f);
        }
    </style>
</head>
<body>
    <div class="card">
        <video autoplay muted loop>
            <source src="./assets/img/transfer_expired_2023.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
        <h2>Transfert expiré</h2>
        <p>Ce transfert n'est plus disponible.<br>Contactez l'expéditeur original pour demander l'accès.</p>
        
    </div>
</body>
</html>
