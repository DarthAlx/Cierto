<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Hadouken Dev">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Recuperar contraseña</title>

    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">
  <?php if ($error): ?> <p> <?php echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>".$error."</div>"; ?> </p> <?php endif; ?>

    <form class="form-signin" action="<?php echo base_url() ?>index.php/usuarios/recuperacion" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title"><strong>Recuperación</strong></h1>
            <img src="<?php echo base_url() ?>images/logo.png" alt=""/>
        </div>
        <div class="login-wrap">

            <input type="password" class="form-control" placeholder="Nueva contraseña" name="nuevacontraseña" autofocus required>
            <input type="password" class="form-control" placeholder="Repetir contraseña" name="nuevacontraseña1" required>
            <input type="hidden" class="form-control"  name="userpost" value="<?=$user?>" required>
            <input type="hidden" class="form-control"  name="tokenpost" value="<?=$token?>" required>

            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>

            <!--div class="registration">
                Not a member yet?
                <a class="" href="registration.html">
                    Signup
                </a>
            </div-->


        </div>

    </form>

</div>




<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>js/modernizr.min.js"></script>


</body>
</html>
