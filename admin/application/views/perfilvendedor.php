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
              <h1><?php echo $vendedor->nombre?></h1>
              <span class="designation">
                Vendedor
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
            Detalles del Vendedor
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
          <tr>
              <td>Fecha de registro</td>
              <td><?php echo $vendedor->fechaderegistro?></td>
          </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $vendedor->nombre?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo $vendedor->direccion?></td>
        </tr>
        <tr>
            <td>Comunidad</td>
            <td><?php echo $vendedor->comunidad?></td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td><?php echo $vendedor->municipio?></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><?php echo $vendedor->estado?></td>
        </tr>
        <tr>
            <td>País</td>
            <td><?php echo $vendedor->pais?></td>
        </tr>
        <tr>
            <td>Código postal</td>
            <td><?php echo $vendedor->cp?></td>
        </tr>

        <tr>
            <td>Teléfono de la empresa</td>
            <td><?php echo $vendedor->telefono?></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><?php echo $vendedor->correo?></td>
        </tr>
        <tr>
            <td>Página web</td>
            <td><?php echo $vendedor->web?></td>
        </tr>
        <tr>
            <td colspan="2"><h4>Persona de Contacto</h4></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $vendedor->nombrecontacto?></td>
        </tr>
        <tr>
            <td>Cargo</td>
            <td><?php echo $vendedor->cargo?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo $vendedor->telefonocontacto?></td>
        </tr>


        </tbody>
        </table>
        <p>
          <a href="<?php echo base_url() ?>index.php/modificar/vendedor/<?php echo $vendedor->id?>" style="float: right;">Editar perfil</a>
        </p>
        </div>
        </div>
        </section>

        </div>
        </div>
        </div>
