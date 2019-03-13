<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consulta Mobil</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<meta name="keywords" content=", , ">
	<meta name="descriptión" content="">
	<meta name="owner" content="">
	<meta name="author" content="">
	<meta name="robots" content="index, follow">    
</head>
<body>
	<!-- HEADER -->
	<header>
		<div class="container">
			<div class="row rounded-top align-items-strech justify-content-between">
				<!-- COLUMNA DEL LOGOTIPO -->
				<div class="logo col-md-12 col-lg d-flex align-items-center justify-content-center justify-content-lg-start">
					<span id="consulta" href="index.php" >Consulta</span>
					<span id="mobil" href="index.php" >M<span>o</span>bil</span>
				</div>
				<!-- COLUMNA DEL TELEFONO -->
				<div class="celular col-md-12 col-lg d-flex align-items-center justify-content-center justify-content-lg-center">
					<span id="telefono" href="" >+51 932-404-373</span>
				</div>
				<!-- SOLICITA COTIZACION -->
				<div class="cotizacion col-md-12 col-lg d-flex align-items-center justify-content-center justify-content-lg-end">
					<div class="contenedor-btns d-flex justify-content-center">
						<a id="" href="https://docs.google.com/forms/d/e/1FAIpQLSc5f_TyUc6G5O4LzAD2jvSy6eYGoGXdUPArx234YIJVhvGjcA/viewform" target="_blank">Solicita una cotización</a>
					</div>
				</div>					
			</div>
		</div>
	</header>

	<!-- COLUMNA DEL MENU DE NAVEGACION DERECHO -->

	<section class="main">
		<section class="seccionmenu">		
			<div class="container">
				<div class="row menu_nav d-flex align-items-center justify-content-center justify-content-lg-end">
					<nav class="menu">
						<a href="#inicio">INICIO</a>
						<a href="#precios">PRECIOS</a>
						<a href="#contacto" >CONTACTO</a>					
					</nav>
				</div>
			</div>
		</section>

		<!---------- SLIDER O CAROUSEL ------------>

		<section class="seccionslider">	
			<div class="container-fluid slider">			
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
										<a id="txtslider1" href="#contacto">Contactar</a>
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
										<a id="txtslider2" href="#contacto">Contactar</a>
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
									<span id="S3TT2">Sabras cuanto compran por línea de producto</span>
									<span id="S3TT2">Sabras en que condición de venta compran</span>
									<span id="S3TT2">Sabras cual es el precio promedio al que compran</span>
									<div class="contenedor-btns d-flex justify-content-center">
										<a id="txtslider3" href="#contacto">Contactar</a>
									</div>
								</div>
							</div>
						</div>								
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
		</section>

		<section class="seccioninformacion">
			<div class="container-fluid">	
				<div class="txtdatainfo d-flex flex-column text-center">		
					<span id="C3TT1">¡ Tenemos la información que necesitas .!</span>
					<span id="C3TT2">Te aseguramos incrementar tus ventas y reducir tus riesgos.</span>
					<span id="C3TT3">Sabemos que tu tiempo es valioso, lo único que deberás hacer es marcar en un cuestionario la información que deseas obtener y listo! </span>
					<span id="C3TT4">Luego de eso te contactaremos para hacerte saber si tu información ya está lista..</span>			
				</div>
				<div class="contenedor-btns d-flex justify-content-center">
					<a id="txtseccion2" href="https://docs.google.com/forms/d/e/1FAIpQLSc5f_TyUc6G5O4LzAD2jvSy6eYGoGXdUPArx234YIJVhvGjcA/viewform" target="_blank">Cotiza ahora</a>
				</div>									
			</div>				
		</section>
		
		<section class="seccionencuesta">
			<div class="container-fluid d-flex justify-content-center">
				<div class="png">
					<img src="img/encuesta.png" class="img-fluid" alt="">
				</div>
			</div>
		</section>
		
		<section class="secciontestimonio">
			<div class="container-fluid">
				<div class="png">
					<img src="img/testimonio2.png" class="img-fluid" alt="">
				</div>
			</div>			
		</section>	

		<section class="seccionejemplo">
			<div class="container-fluid">
				<div class="png">
					<img src="img/testimonio1.png" class="img-fluid" alt="">
				</div>
			</div>			
		</section>	

		<section class="precios" id="precios">
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
							<a href="https://docs.google.com/forms/d/e/1FAIpQLSc5f_TyUc6G5O4LzAD2jvSy6eYGoGXdUPArx234YIJVhvGjcA/viewform" class="btn" target="_blank">Solicita tú cotización ahora</a>
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
							<a href="https://docs.google.com/forms/d/e/1FAIpQLSc5f_TyUc6G5O4LzAD2jvSy6eYGoGXdUPArx234YIJVhvGjcA/viewform" class="btn" target="_blank">Solicita tú cotización ahora</a>
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
							<a href="https://docs.google.com/forms/d/e/1FAIpQLSc5f_TyUc6G5O4LzAD2jvSy6eYGoGXdUPArx234YIJVhvGjcA/viewform" class="btn" target="_blank">Solicita tú cotización ahora</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</section>

	<footer>

		<!---------- SECCION CONTACTO ------------>

		<section class="seccioncontacto" id="contacto">
			<div class="container">
				<div class="row contacto justify-content-center">
					<div class="col-12 col-lg-10">
						<h2 class="titulo">Contacto</h2>
						<form action="database.php" method="POST" class="formulario">
							<div class="form-group row">
								<div class="col-12 col-md-6">
									<input type="text" name="nombre" id="" placeholder="Nombre">
								</div>
								<div class="col-12 col-md-6">
									<input type="email" name="email" id="" placeholder="Correo">
								</div>
								<div class="col-12 col-md-6">
									<input type="text" name="telefono" id="" placeholder="Teléfono">
								</div>
							</div>
							<textarea name="mensaje" id="" placeholder="Mensaje"></textarea>
							<div class="form-group d-flex justify-content-center">
								<input type="submit" class="boton" value="Enviar">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</footer>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>