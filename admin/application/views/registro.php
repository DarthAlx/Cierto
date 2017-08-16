<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Hadouken Dev">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Registro</title>

    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/style-responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
    .select2-container {
      margin-bottom: 15px;
    }
    </style>
</head>

<body class="login-body">

<div class="container">
  <?php if ($error): ?> <p> <?php echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>".$error."</div>"; ?> </p> <?php endif; ?>

    <form class="form-signin" action="<?php echo base_url() ?>index.php/usuarios/registrar" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Registro</h1>
            <img src="<?php echo base_url() ?>images/logo.png" alt=""/>
        </div>
        <div class="login-wrap">

            <input type="text" class="form-control" placeholder="Alias" name="alias" autofocus>
            <input type="text" class="form-control" placeholder="Email" name="email">
            <select class="form-control tipouser" name="tipouser" id="tipouser" style="margin-bottom: 15px !important;">
              <option value="">Tipo de usuario</option>
              <option value="1">Administrador</option>
              <option value="2">Vendedor</option>
              <option value="3">Rancho</option>
              <option value="4">Trabajador</option>
            </select>
            <select class="selectorenlace form-control" name="idenlace" id="idenlace" style="margin-bottom: 15px !important;">
              <option value="">Seleccionar...</option>
            </select>
            <input type="password" class="form-control" placeholder="Contraseña" name="contraseña">
            <input type="password" class="form-control" placeholder="Repetir contraseña" name="contraseña1">



            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>




        </div>



    </form>


</div>




<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->

<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>js/modernizr.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

  $(".selectorenlace").select2({
    placeholder: "Selecciona...",
    allowClear: true
  });

  $(".tipouser").select2({
  minimumResultsForSearch: Infinity
});

  });

  $(document).ready(function() {
    $("#tipouser").change(function() {
      $("#tipouser option:selected").each(function() {
        tipouser = $('#tipouser').val();
        $.post("<?php echo base_url() ?>index.php/usuarios/llena_usuario", {
        tipouser : tipouser
        }, function(data) {
          $("#idenlace").html(data);
        });
      });
    })
  });

</script>

</body>
</html>
