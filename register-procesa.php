<?php
include 'inc/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email     = $_POST['email'];
  $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $nombre    = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];

  $sql  = "INSERT INTO usuarios (email, password, nombre, apellidos) VALUES (:email, :password, :nombre, :apellidos)";
  $stmt = $pdo->prepare($sql);

  $stmt->execute([
    ':email' => $email,
    ':password' => $password,
    ':nombre' => $nombre,
    ':apellidos' => $apellidos
  ]);

  header('Location: login.php');
}