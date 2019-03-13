<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consulta Mobil</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<!-- HEADER -->
	<header>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-between">
				<!-- COLUMNA DEL LOGOTIPO -->
				<div class="logo">
					<span id="consulta" href="index.html" >Consulta</span>
					<span id="mobil" href="index.html" >M<span>o</span>bil</span>
				</div>
				<!-- COLUMNA DEL TELEFONO -->
				<!-- <div class="telefono">
					<span id="telefono" href="" >+51 952-634-326</span>
				</div> -->
				<!-- DESCARGA DEL PDF -->
				<div class="cotizacion">
					<div class="contenedor-btns d-flex justify-content-center">
						<a id="" href="https://docs.google.com/forms/d/e/1FAIpQLSeEOmST-JZ3BxDZvrP3QC_dpHiIShWx-ND6QlMuDYq8Cq5W1Q/viewform" target="_blank">Solicita una cotización</a>
					</div>
				</div>					
				<!-- <div class="contenedor-btns">
					<a id="txtslider2" href="contacto.php" target="_blank">Contactar</a>
				</div>						
				<div class="cotizacion">					
					<a class="btn btn-outline-primary" href="https://docs.google.com/forms/d/e/1FAIpQLSeEOmST-JZ3BxDZvrP3QC_dpHiIShWx-ND6QlMuDYq8Cq5W1Q/viewform" target="_blank">Solicita una cotización</a>		
				</div>					 -->
			</div>
		</div>
	</header>

	<!-- COLUMNA DEL MENU DE NAVEGACION DERECHO -->

	<section class="main">
		<section class="seccionmenu">		
			<div class="container">
				<div class="row menu_nav d-flex align-items-center justify-content-end">
					<div class="menu">
						<a href="#">INICIO</a>
						<!-- <a href="#">SERVICIOS</a> -->
						<a href="#">PRECIOS</a>
						<a href="#">CONTACTO</a>					
					</div>
				</div>
			</div>
		</section>

		<!---------- SLIDER O CAROUSEL ------------>

		<section class="seccionslider">	
			<div class="container-fluid">			
				<div class="row slider">
					<div class="col-12">
						<div class="carousel slide" id="slider" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slider" data-slide-to="0" class="active"></li>
								<li data-target="#slider" data-slide-to="1"></li>
								<li data-target="#slider" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">

								<div class="carousel-item active">
									<img src="img/aslide1.png" alt="Slide #1" class="img-responsive">
									<div class="header-text1 hidden-xs d-flex justify-content-between">
										<div class="col-auto col-lg-6 d-flex flex-column text-center">
											<span id="S1TT1">NINGÚN NEGOCIO</span>
											<span id="S1TT2">PROSPERA SIN CLIENTES...</span>
										</div>
										<div class="col-auto col-lg-6 d-flex flex-column text-center">
											<span id="S1TT3">¡ ES VITAL SABER QUIENES SON </span>
											<span id="S1TT3">QUÉ PRODUCTOS COMPRAN</span>
											<span id="S1TT3">Y COMO PAGAN !</span>
											<div class="contenedor-btns">
												<a id="txtslider1" href="contacto.php" target="_blank">Contactar</a>
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<img src="img/aslide2.jpg" alt="Slide #2" class="img-responsive">
									<div class="header-text2 hidden-xs d-flex justify-content-between">
										<div class="col-auto col-lg-5 d-flex flex-column text-center">
										</div>										
										<div class="col-auto col-lg-7 d-flex flex-column text-center">
											<span id="S2TT1">¡ AHORA PODRAS VER ¡</span>
											<span id="S2TT3">LA INFORMACION DE LOS CLIENTES DE TU MAYOR COMPETIDOR</span>			
											<span id="S2TT2">DETALLE DE COMPRAS POR PRODUCTO</span>
											<span id="S2TT2">DETALLE DEL COMPORTAMIENTO DE PAGO</span>
											<div class="contenedor-btns">
												<a id="txtslider2" href="contacto.php" target="_blank">Contactar</a>
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<img src="img/aslide3.png" alt="Slide #3" class="img-responsive">
									<div class="header-text3 hidden-xs d-flex justify-content-between">
										<div class="col-auto col-lg-8 d-flex flex-column">
											<span id="S3TT1">¡ AHORA ESTARAS MEJOR PREPARADO ¡</span>	
											<span id="S3TT3">CON LA INFORMACION DE LOS CLIENTES DE TU MAYOR COMPETIDOR</span>
											<div class="col-auto d-flex flex-column">									
												<span id="S3TT2">Sabras cuanto compran por línea de producto</span>
												<span id="S3TT2">Sabras en que condición de venta compran</span>
												<span id="S3TT2">Sabras cual es el precio promedio al que compran</span>
											</div>
											<div class="contenedor-btns d-flex justify-content-center">
												<a id="txtslider3" href="contacto.php" target="_blank">Contactar</a>
											</div>
										</div>
									</div>
								</div>								

								<!-- <div class="carousel-item">
									<img src="img/slide3.jpg" alt="Slide #3" class="img-responsive">
									<div class="header-text3 hidden-xs d-flex justify-content-between">
										<div class="col-auto col-lg-5 d-flex flex-column">
											<span id="S3TT1">...OBTENGA MAYOR CRECIMIENTO</span>
										</div>
										<div class="col-auto col-lg-7 d-flex flex-column text-center">
											<span id="S3TT2">¡COMPITE CON LOS GRANDES!</span>
											<span id="S3TT2">ACCEDE A LA INFORMACION</span>
											<span id="S3TT2">DE TU MAYOR COMPETIDOR</span>
											<div class="contenedor-btns d-flex text-center">
												<a id="txtslider3" href="contacto.php" target="_blank">Contactar</a>
											</div>												
										</div>
									</div>						
								</div> -->
							</div>

							<a href="#slider" class="carousel-control-prev" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
							<a href="#slider" class="carousel-control-next" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Siguiente</span>
							</a>
							
						</div>
					</div>
				</div>					
			</div>
		</section>			

		<section class="secciondashboardgif">
			<div class="container-fluid">	
				<div class="row dashboardgif d-flex flex-column justify-content-center">
					<div class="texto d-flex flex-column text-center">		
						<span id="C3TT1">¡ Tenemos la información que necesitas .!</span>
						<span id="C3TT2">Te aseguramos incrementar tus ventas y reducir tus riesgos.</span>
						<span id="C3TT3">Sabemos que tu tiempo es valioso, por eso lo que lo único que deberás hacer es marcar en un cuestionario la información que deseas obtener y listo! </span>
						<span id="C3TT4">Luego de eso te contactaremos para hacerte saber si tu información ya está lista..</span>			
					</div>
				</div>
				<div class="contenedor-btns d-flex justify-content-center">
					<a id="txtseccion2" href="https://docs.google.com/forms/d/e/1FAIpQLSeEOmST-JZ3BxDZvrP3QC_dpHiIShWx-ND6QlMuDYq8Cq5W1Q/viewform" target="_blank">Cotiza ahora</a>
				</div>									
			</div>				
		</section>
		
		<!-- <section class="seccionfiltro">
			<div class="container-fluid">
				<div class="row filtro d-flex justify-content-center">
					<div class="png">
						<a href="#"><img src="img/filtro12x.png" class="img-fluid" width="1600" height="400" alt=""></a>
					</div>
				</div>
			</div>				
		</section>			

		<section class="seccionprecios">
			<div class="container-fluid">
				<div class="row precios d-flex justify-content-center">
					<div class="png">
						<a href="#"><img src="img/dashboardv2.png" class="responsive" alt=""></a>
					</div>
				</div>
			</div>				
		</section>		 -->
		
		<section class="seccionencuesta">
			<div class="container-fluid d-flex justify-content-center">
				<div class="row">
					<div class="png">
						<img src="img/encuesta.png" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</section>	

		<section class="seccionpagos">
			<div class="container-fluid d-flex justify-content-center">
				<div class="row">
					<div class="png">
						<img src="img/panelpagos.png" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</section>			

		<section class="seccionejemplo">
			<div class="container-fluid">
				<div class="row d-flex justify-content-center">
					<div class="texto d-flex flex-column text-center">		
						<span id="C3TT1">¡ Podras realizar resúmenes como este cuadro de ejemplo !</span>
						<span id="C3TT2">Podrás comparar el rendimiento de tu empresa con la de tu mayor competencia.</span>
					</div>
					<!-- <div class="parrafo d-flex flex-column text-center">
						<h4>De esta manera podrás comparar el rendimiento de tu empresa en comparación de la competencia</h4>
						<h3 class="titulo">PARA QUE TU EMPRESA CREZCA MUCHO MÁS!</h3>
					</div> -->
				</div>
			</div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="png">
						<img src="img/reporte.png" class="img-fluid" alt="">
					</div>
				</div>
			</div>
			<div class="contenedor-btns d-flex justify-content-center">
				<a id="txtseccion2" href="https://docs.google.com/forms/d/e/1FAIpQLSeEOmST-JZ3BxDZvrP3QC_dpHiIShWx-ND6QlMuDYq8Cq5W1Q/viewform" target="_blank">Cotiza ahora</a>
			</div>			
		</section>	

		<!-- <section class="seccionprecios">
			<div class="container-fluid cprecios">
				<div class="row precios">
					<div class="png2">
						<a href="#"><img src="img/dashboardv2.png" class="img-fluid" alt=""></a>
					</div>
				</div>
			</div>
		</section>		 -->
		
		<section class="precios">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="titulo">Precios</h3>
					</div>
				</div>

				<div class="row">
					<div class="precio col-sm-4">
						<div class="plan verde">
							<p class="nombre">Básico</p>
							<p class="precio">S/ 0.90</p>
							<p class="unidad">por registro</p>
							<ul class="caracteristicas">
								<li>Datos de identificación, localización, segmento y más caracteristicas del cliente</li>
								<li>Posibilidad de filtrado</li>
								<li>Ultima actualización febrero 2019</li>
							</ul>
							<a href="#" class="btn">Solicita tú cotización ahora</a>
						</div>
					</div>

					<div class="precio col-sm-4">
						<div class="plan active">
							<p class="nombre">Standard</p>
							<p class="precio">S/ 0.40</p>
							<p class="unidad">por registro</p>
							<ul class="caracteristicas">
								<li>Datos de identificación de clientes con detalle de compras por producto</li>
								<li>Posibilidad de filtrado</li>
								<li>Ultima actualización diciembre 2018</li>
							</ul>
							<a href="#" class="btn">Solicita tú cotización ahora</a>
						</div>
					</div>

					<div class="precio col-sm-4">
						<div class="plan naranja">
							<p class="nombre">Premium</p>
							<p class="precio">S/ 0.30</p>
							<p class="unidad">por registro</p>
							<ul class="caracteristicas">
								<li>Datos de identificación de clientes con detalle de compras por producto y comportamiento de pago</li>
								<li>Posibilidad de filtrado</li>
								<li>Ultima actualización diciembre 2018</li>
							</ul>
							<a href="#" class="btn">Solicita tú cotización ahora</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<footer>
		<section class="contacto">
			<div class="contenedor">
				<h3 class="titulo">Contacto</h3>
				<form class="formulario" action="">
					<input type="text" placeholder="Nombre" name="nombre" required>
					<input type="email" placeholder="Correo" name="correo" required>
					<textarea name="mensaje" placeholder="Mensaje:"></textarea>
					<input class="boton" type="submit" value="Enviar">
				</form>
			</div>
		</section>

		<section class="redes-sociales">
			<div class="contenedor">
				<a class="twitter" href="http://www.twitter.com/falconmasters"><i class="fa fa-twitter"></i></a>
				<a class="facebook" href="http://www.facebook.com/falconmasters"><i class="fa fa-facebook"></i></a>
				<a class="youtube" href="http://www.youtube.com/falconmasters"><i class="fa fa-youtube-play"></i></a>
				<a class="github" href="http://www.github.com/falconmasters"><i class="fa fa-github"></i></a>
				<a class="instagram" href="http://www.instagram.com/falconmasters"><i class="fa fa-instagram"></i></a>
			</div>
		</section>
	</footer>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- <script src="js/scripts.js"></script> -->
</body>
</html>