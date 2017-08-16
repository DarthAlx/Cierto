<div class="wrapper">
  <?php //echo password_hash("admin123", PASSWORD_BCRYPT);
  /*$hash = '$2y$10$Pw7fQP75ptbzwQoZuhQRfO3jp8pi1lWf.DpSbdT5OZOTYk0A6m6H2';

  if (password_verify('admin123', $hash)) {
      echo '¡La contraseña es válida!';
  } else {
      echo 'La contraseña no es válida.';
  }*/

  ?>

  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <?php if ($error): ?> <p> <?php echo "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>".$error."</div>"; ?> </p> <?php endif; ?>
          <section class="panel">
              <header class="panel-heading">
                  Mis archivos
              </header>

              <div class="panel-body">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" enctype="multipart/form-data"  method="POST" action="<?php echo base_url() ?>index.php/archivos/do_upload">
                          <div class="form-group ">
                              <label for="userfile" class="control-label col-lg-2">Archivo *</label>
                              <div class="col-lg-10 col-md-10 col-sm-10">
                                  <div class="input-group">
                                    <input class=" form-control" id="userfile" name="userfile" type="file" size="20" required/>
                                    <span class="input-group-btn">
                                      <button class="btn btn-primary" type="submit">Subir</button>
                                    </span>
                                  </div>
                                  <span id="helpBlock" class="help-block">Maximo 2Mb (.pdf, .docx, .jpg, .png, .bmp, .zip, .rar) </span>
                              </div>
                          </div>
                      </form>
                  </div>
                  <p>
                    &nbsp;
                  </p>
                  <?php  if($files){?>
                  <div class="adv-table table-responsive">
                  <table class="display table table-bordered table-striped table-hover table-condensed" id="dynamic-table">
                  <thead>
                  <tr>
                      <th>Descargar</th>

                  </tr>
                  </thead>
                  <tbody>


                    <?php foreach($files as $file):?>
                  <tr>
                      <td><?php echo anchor('archivos/downloads/'.$file, $file);?> <a style="float:right" href="<?php echo base_url() ?>index.php/archivos/delete/<?php echo $file?>"<i class="fa fa-minus-circle" aria-hidden="true"></i></a></td>

                  </tr>
                  <?php endforeach; ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Descargar</th>

                  </tr>
                  </tfoot>
                  </table>

                  </div>
                  <?php }?>

              </div>
          </section>

      </div>
  </div>









</div>
