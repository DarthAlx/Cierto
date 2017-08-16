<div class="wrapper">
  <?php if($exito_u){
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Usuario creado exitosamente!</div>";
 } ?>
 <?php if($exito_u_retorno){
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Usuario creado exitosamente! <a href='javascript:history.go(-1);'>Regresar</a></div>";
} ?>


  <?php if ($error): ?> <p> <?php echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>".$error."</div>"; ?> </p> <?php endif; ?>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Crear usuario
              </header>

              <div class="panel-body">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" name="formguardado" action="<?php echo base_url() ?>index.php/usuarios/registrar" method="post">

                          <div class="form-group ">
                              <label for="pais" class="control-label col-lg-2">Tipo de usuario *</label>
                              <div class="col-lg-10">
                                <select class="form-control tipouser" name="tipouser" id="tipouser" style="margin-bottom: 15px !important;" required>
                                  <option value="">Tipo de usuario</option>
                                  <option value="1">Administrador</option>
                                  <option value="2">Vendedor</option>
                                  <option value="3">Rancho</option>
                                  <option value="4">Trabajador</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="idenlace" class="control-label col-lg-2">Asociado *</label>
                              <div class="col-lg-10">
                                <select class="selectorenlace form-control" name="idenlace" id="idenlace" style="margin-bottom: 15px !important;" required>
                                  <option value="">Seleccionar...</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="email" class="control-label col-lg-2">Correo electrónico *</label>
                              <div class="col-lg-10">
                                  <input type="email" class="form-control" name="email" required>
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="contraseña" class="control-label col-lg-2">Contraseña *</label>
                              <div class="col-lg-10">
                                  <input type="password" class="form-control" name="contraseña" required>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="repetir" class="control-label col-lg-2">Repetir contraseña *</label>
                              <div class="col-lg-10">
                                  <input type="password" class="form-control" name="contraseña1" required>
                              </div>
                          </div>


                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <a class="btn btn-primary" data-toggle="modal" href="#verificar">Guardar</a>
                                <button class="btn btn-default" type="submit" id="botonguardar" style="display: none;"></button>
                                  <button class="btn btn-default" type="button">Cancelar</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </section>
      </div>
  </div>
<?php if ($usuarios) {?>

  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      Cosultando Usuarios

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Tipo</th>

  </tr>
  </thead>
  <tbody>

    <?php foreach($usuarios as $usuario):?>
  <tr>
      <td>
        <?php if($usuario->tipo==1){$asociado=$this->queries_model->obtenerfila("cg_equipo","*","id",$usuario->idenlace); echo $asociado->nombre;}?>
        <?php if($usuario->tipo==2){$asociado=$this->queries_model->obtenerfila("cg_vendedores","*","id",$usuario->idenlace); echo $asociado->nombre;}?>
        <?php if($usuario->tipo==3){$asociado=$this->queries_model->obtenerfila("cg_ranchos","*","id",$usuario->idenlace); echo $asociado->nombrerancho;}?>
        <?php if($usuario->tipo==4){$asociado=$this->queries_model->obtenerfila("cg_trabajadores","*","curp",$usuario->idenlace); echo $asociado->nombre_trabajador." ".$asociado->apellido_paterno." ".$asociado->apellido_materno;}?>
      </td>
      <td><?php echo $usuario->usuario?></td>
      <td><?php if($usuario->tipo==1){echo "Administrador";}if($usuario->tipo==2){echo "Vendedor";}if($usuario->tipo==3){echo "Rancho";}if($usuario->tipo==4){echo "Trabajador";}?></td>

  </tr>
  <?php endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>Nombre</th>
    <th>Email</th>
    <th>Tipo</th>

  </tr>
  </tfoot>
  </table>

  </div>
  </div>
  </section>
  </div>
  </div>
  <?php } ?>
</div>
