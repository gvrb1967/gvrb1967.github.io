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
	<link rel="stylesheet" href="css/contacto.css">
</head>
<body>

	<!-- HEADER -->
	<header>

		<div class="main">
			<div class="container">		
				<div class="row main">
					<!-- COLUMNA DEL LOGOTIPO -->
					<div class="col-sm-2 col-lg-4 logo d-flex align-items-center justify-content-center justify-content-lg-start">
						<span id="consulta" href="index.html" >Consulta</span>
						<span id="mobil" href="index.html" >M<span>o</span>bil</span>
					</div>
					<!-- COLUMNA DE LA BARRA DE BUSQUEDA -->
				</div>
			</div>
		</div>

	</header>

	<main>
		<div class="container">
			<!-- Seccion de Contacto -->
			<div class="row contacto justify-content-center">
				<div class="col-12 col-lg-8">
					<h2 class="titulo">Contacto</h2>
					<form action="database.php" method="POST" class="formulario">
						<div class="form-group row">
							<div class="col-12 col-md-6">
								<input type="text" name="nombre" id="" placeholder="Nombre">
							</div>
							<div class="col-12 col-md-6">
								<input type="email" name="email" id="" placeholder="Correo">
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
	</main>

	<!-- <div class="container">
		<div class="row mt-3">
			<div class="col">
				<button class="btn btn-primary" data-toggle="modal" data-target="#fm-modal">Abrir Modal</button>
				<div class="modal fade" id="fm-modal" tabindex="-1" role="dialog" aria-labelledby="fm-modal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
			
							<div class="modal-header">
								<h5 class="modal-title" id="">Venta de confirmación</h5>
								<button class="close" data-dismiss="modal" aria-label="Cerrar">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-body">
								?php if(!empty($message)): ?>
									<h4>?= $message ?></h4>
								?php endif; ?>                  
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		 -->

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>