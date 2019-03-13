<?php
  $tipoconn = "remoto";
  if ($tipoconn == "local")
  {
    $server = '127.0.0.1:3306';
    $username = 'root';
    $password = 'master';
    $database = 'consulta_mobil_contactos_database';
  }
  else
  {
    $server = "consultamobil.cyqwjwtsjjc2.us-east-2.rds.amazonaws.com:3306";
    $username = "admin";
    $password = "M1cr0$0ft2214";
    $database = "consulta_mobil_contactos_database";
  }
    
  try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }

  $message = '';

  if (!empty($_POST['email'])) {
    $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje) VALUES (:nombre, :email, :telefono, :mensaje)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    $stmt->bindParam(':mensaje', $_POST['mensaje']);
    
    if ($stmt->execute()) {
      $message = 'Gracias por visitar nuestro sitio, le contactaremos a la brevedad.';
      header('Location:index.php');
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta o existe el contacto.';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">	
</head>
<body>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>