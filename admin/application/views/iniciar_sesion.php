<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title> Usuarios </title>
</head>
<body>
  <?php if ($error): ?> <p> <?php echo $error ?> </p> <?php endif; ?>
  <h1> Iniciar sesión </h1>
  <form method="post" action="<?php echo base_url() ?>index.php/usuarios/iniciar_sesion_post">
    <label> Nombre </label> <br />
    <input type="text" name="nombre" /> <br />
    <label> Contraseña </label> <br />
    <input type="password" name="contraseña" /> <br />
    <input type="submit" value="Iniciar sesión" />
  </form>
</body>
</html>
