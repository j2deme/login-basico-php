<?php
session_start();
include 'inc/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email    = $_POST['email'];
  $password = $_POST['password'];

  $sql  = "SELECT * FROM usuarios WHERE email = :email";
  $stmt = $pdo->prepare($sql);

  $stmt->execute([':email' => $email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user;
    header('Location: dashboard.php');
  } else {
    header('Location: login.php');
  }
}