<div class="wrapper">
        <div class="row">
          <div class="col-lg-8">
            <div class="panel">
              <div class="panel-body">
                <div class="col-sm-4 col-xs-12">
                  <?php foreach($files as $file):?>
                    <div class="profile-pic text-center">
                      <img class="img-circle img-responsive" src="<?=base_url()?>uploads/<?= $this->session->userdata('email')?>/avatar/<?=$file?>?<?php echo time(); ?>" alt="" />
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class="col-sm-8 col-xs-12">
                  <div class="profile-desk">
                    <p>
                      &nbsp;
                    </p>
                    <h1><?php echo $integrante->nombre?></h1>
                    <span class="designation">
                      <?php echo $integrante->perfil?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p>
          &nbsp;
        </p>
        <div class="row">
            <div class="col-lg-8">
                <div class="panel">
                    <header class="panel-heading">
                        Cambiar imagen de perfil
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-up"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body" style="display:none;">
                      <div class="form">
                          <form class="cmxform form-horizontal adminex-form" enctype="multipart/form-data"  method="POST" action="<?php echo base_url() ?>index.php/perfil/do_upload">
                              <div class="form-group ">
                                  <label for="userfile" class="control-label col-lg-2">Archivo *</label>
                                  <div class="col-lg-10 col-md-10 col-sm-10">
                                      <div class="input-group">
                                        <input class=" form-control" id="userfile" name="userfile" type="file" size="20" required/>
                                        <span class="input-group-btn">
                                          <button class="btn btn-primary" type="submit">Subir</button>
                                        </span>
                                      </div>
                                      <span id="helpBlock" class="help-block">Maximo 2Mb (.jpg, .png, .bmp) </span>
                                  </div>
                              </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <p>
          &nbsp;
        </p>
        <div class="row">
        <div class="col-lg-8 col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Detalles del integrante
        </header>
        <div class="panel-body">
        <div class="adv-table">

        <table  class="display table table-bordered table-striped" >
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
          <tr>
              <td>Fecha de ingreso</td>
              <td><?php echo $integrante->fechadeingreso?></td>
          </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $integrante->nombre?></td>
        </tr>
        <tr>
            <td>Perfil</td>
            <td><?php echo $integrante->perfil?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo $integrante->direccion?></td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td><?php echo $integrante->municipio?></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><?php echo $integrante->estado?></td>
        </tr>
        <tr>
            <td>País</td>
            <td><?php echo $integrante->pais?></td>
        </tr>
        <tr>
            <td>Código Postal</td>
            <td><?php echo $integrante->cp?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo $integrante->telefono?></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><?php echo $integrante->correo?></td>
        </tr>
        <tr>
            <td>Habilidades</td>
            <td><?php echo $integrante->habilidades?></td>
        </tr>

        <tr>
            <td>Contrato</td>
            <td><?php echo $integrante->contrato?></td>
        </tr>

        </tbody>
        </table>
        <p>
          <a href="<?php echo base_url() ?>index.php/modificar/cierto/<?php echo $integrante->id?>" style="float: right;">Editar perfil</a>
        </p>

        </div>
        </div>
        </section>

        </div>
        </div>

        
</div>
