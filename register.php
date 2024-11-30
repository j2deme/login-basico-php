<?php include 'inc/header.php'; ?>

<article class="form">
  <h2>Registro de usuario</h2>

  <form action="register-procesa.php" method="post">
    <fieldset>
      <label for="email">Correo electrónico</label>
      <input type="email" name="email" id="email" required />
    </fieldset>
    <fieldset>
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" required />
    </fieldset>
    <fieldset>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" required />
    </fieldset>
    <fieldset>
      <label for="apellidos">Apellidos</label>
      <input type="text" name="apellidos" id="apellidos" required />
    </fieldset>
    <button type="submit">Registrarse</button>
    <a href="index.php" role="button">Regresar</a>
  </form>
</article>

<?php include 'inc/footer.php'; ?>