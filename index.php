<?php require_once 'inc/db.php'; ?>
<?php include 'inc/header.php'; ?>

<h1>Muro de mensajes</h1>

<section class="messages">
  <?php
  $sql  = "SELECT * FROM usuarios WHERE mensaje IS NOT NULL";
  $stmt = $pdo->query($sql);

  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "<article class='message'>";
      echo "<p>{$row['mensaje']}</p>";
      echo "<small>{$row['nombre']} {$row['apellidos']}</small>";
      echo "</article>";
    }
  } else {
    echo "<article>No hay mensajes para mostrar.</article>";
  }
  ?>
</section>

<?php include 'inc/footer.php'; ?>