<?php include 'inc/header.php'; ?>

<article class="form">
  <h2>Iniciar sesión</h2>

  <form action="login-procesa.php" method="post">
    <fieldset>
      <label for="email">Correo electrónico</label>
      <input type="email" name="email" id="email" required />
    </fieldset>
    <fieldset>
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" required />
    </fieldset>
    <button type="submit">Iniciar sesión</button>
    <a href="index.php" role="button">Regresar</a>
  </form>
</article>

<?php include 'inc/footer.php'; ?>