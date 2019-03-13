<?php
  $tipoconn = "local";
  if ($tipoconn == "local")
  {
    $server = '127.0.0.1:3306';
    $username = 'root';
    $password = 'master';
    $database = 'consulta_mobil_contactos_database';
  }
  else
  {
    $server = "mysql.cjqempksgznn.us-east-2.rds.amazonaws.com:3306";
    $username = "admin";
    $password = "M1cr0s0ft";
    $database = "consulta_mobil_contactos_database";
  }
    
  try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }

  $message = '';

  if (!empty($_POST['email'])) {
    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':mensaje', $_POST['mensaje']);
    
    if ($stmt->execute()) {
      $message = 'Gracias por visitar nuestro sitio, le contactaremos a la brevedad.';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear tu cuenta o existe el contacto.';
    }
  }
?>