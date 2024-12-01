<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include 'inc/db.php';

  $mensaje = $_POST['mensaje'];
  $id      = $_SESSION['user']['id'];

  $sql  = "UPDATE usuarios SET mensaje = :mensaje WHERE id = :id";
  $stmt = $pdo->prepare($sql);

  $stmt->execute([
    ':mensaje' => $mensaje,
    ':id' => $id
  ]);

  $_SESSION['user']['mensaje'] = $mensaje;
}
header('Location: dashboard.php');