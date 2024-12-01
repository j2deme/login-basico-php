<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login en PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.green.min.css">
  <link rel="stylesheet" href="assets/css/app.css" />
</head>

<body>
  <header class="container">
    <nav>
      <a href="index.php">
        <h1>Login en PHP</h1>
      </a>
      <ul>
        <?php if (isset($_SESSION['user'])): ?>
          <li><a href="dashboard.php">Editar mensaje</a></li>
          <li><a href="logout.php">Cerrar sesión</a></li>
        <?php else: ?>
          <li><a href="login.php">Iniciar sesión</a></li>
          <li><a href="register.php">Registrarse</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <main class="container">