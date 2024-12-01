<?php session_start(); ?>
<?php include 'inc/header.php'; ?>

<article class="form">
  <h2>Bienvenido, <?= $_SESSION['user']['nombre'] ?> <?= $_SESSION['user']['apellidos'] ?></h2>

  <form action="save-msg.php" method="post">
    <fieldset>
      <label for="mensaje">Mensaje</label>
      <textarea name="mensaje" id="mensaje" required><?= $_SESSION['user']['mensaje'] ?? "" ?></textarea>
    </fieldset>
    <button type="submit">Guardar mensaje</button>
  </form>
</article>

<?php include 'inc/footer.php'; ?>