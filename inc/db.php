<?php
$host     = 'localhost'; // Cambiar si es necesario
$dbname   = 'login_basico_php'; // Nombre de la base de datos
$username = 'root'; // Usuario de la base de datos
$password = 'password'; // Contraseña de la base de datos
$port     = '3306'; // Puerto de la base de datos

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}