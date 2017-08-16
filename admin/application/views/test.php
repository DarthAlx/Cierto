<div class="wrapper">
  <?php //echo password_hash("admin123", PASSWORD_BCRYPT);
  /*$hash = '$2y$10$Pw7fQP75ptbzwQoZuhQRfO3jp8pi1lWf.DpSbdT5OZOTYk0A6m6H2';

  if (password_verify('admin123', $hash)) {
      echo '¡La contraseña es válida!';
  } else {
      echo 'La contraseña no es válida.';
  }*/

  if($files){
       echo heading('Archivo(s) disponible(s) para descargar', 3);

        foreach($files as $file){

            echo anchor('archivos/downloads/'.$file, $file).br(1);

        }

   }
  ?>

  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Agregar Comunidad
              </header>

              <div class="panel-body">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form"  method="POST" action="<?php echo base_url() ?>index.php/archivos/do_upload">
                          <div class="form-group ">
                              <label for="userfile" class="control-label col-lg-2">Nombre *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="userfile" name="userfile" type="file" size="20" required/>
                              </div>
                          </div>


                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">

                                  <button class="btn btn-default" type="submit">Subir</button>
                                  <button class="btn btn-default" type="button">Cancelar</button>
                              </div>
                          </div>
                      </form>
                  </div>
                  <h5><?=br(1).anchor('files/info', 'Listado de archivos para descargar'); ?></h5>
              </div>
          </section>
      </div>
  </div>





</div>
