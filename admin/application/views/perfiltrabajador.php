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
              <h1><?php echo $trabajador->nombre_trabajador?> <?php echo $trabajador->apellido_paterno?> <?php echo $trabajador->apellido_materno?></h1>
              <span class="designation">
                Trabajador
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
  <?php
if ($boletines) {?>
<div class="row">
  <div class="col-lg-8">
      <div class="panel panel-default">
          <div class="panel-heading" style="background:#ff9933;">
              <h3 class="panel-title">Boletín informativo</h3>
          </div>

          <div class="panel-body" style="background: #cccccc;">
              <?php
                foreach ($boletines as $boletin) {
                  echo html_entity_decode($boletin->contenido);
                  ?>
                <p class="text-center auth-row">
                    Por: <?=$boletin->publicadopor?>   |   <?=$boletin->fecha?>
                </p>
              <?php
                }
              ?>
          </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <p>
    &nbsp;
  </p>
        <div class="row">
        <div class="col-lg-8 col-sm-12">


        <section class="panel">
        <header class="panel-heading">
            Detalles del trabajador
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-up"></a>
             </span>
        </header>
        <div class="panel-body" style="display: none;">
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
              <td><?php echo $trabajador->fechaderegistro?></td>
          </tr>
          <?php if($trabajador->fechaderegistro!=$trabajador->fechadereinscripcion && $trabajador->fechadereinscripcion!=""){?>
          <tr>
              <td>Fecha de reinscripción</td>
              <td><?php echo $trabajador->fechadereinscripcion?></td>
          </tr>
          <?php }?>
          <tr>
              <td>Semestre</td>
              <td><?php echo $trabajador->semestre?></td>
          </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $trabajador->nombre_trabajador?> <?php echo $trabajador->apellido_paterno?> <?php echo $trabajador->apellido_materno?></td>
        </tr>
        <tr>
            <td>CURP</td>
            <td><?php echo $trabajador->curp?></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento</td>
            <td><?php echo $trabajador->fechadenacimiento?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $trabajador->edad?></td>
        </tr>
        <tr>
            <td>Género</td>
            <td><?php echo $trabajador->genero?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo $trabajador->direccion?></td>
        </tr>

        <tr  onclick="location='<?php echo base_url() ?>index.php/comunidad/detalle/<?php echo $comunidad->id?>'" style="cursor: pointer;">
            <td>Comunidad</td>
            <td><?php echo $trabajador->comunidad?></td>
        </tr>

        <tr>
            <td>Municipio</td>
            <td><?php echo $trabajador->municipio?></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><?php echo $trabajador->estado?></td>
        </tr>

        <tr>
            <td>Telefóno personal</td>
            <td><?php echo $trabajador->telefonopersonal?></td>
        </tr>
        <tr>
            <td>Telefono de caseta</td>
            <td><?php echo $trabajador->telefonodecaseta?></td>
        </tr>
        <tr>
            <td>Escolaridad</td>
            <td><?php echo $trabajador->escolaridad?></td>
        </tr>
        <tr>
            <td>Idioma</td>
            <td><?php echo $trabajador->idioma?></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><?php echo $trabajador->correo?></td>
        </tr>
        <tr>
            <td colspan="2"><h4>Persona de Contacto</h4></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $trabajador->nombre_contacto?></td>
        </tr>
        <tr>
            <td>Relación</td>
            <td><?php echo $trabajador->relacion?></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><?php echo $trabajador->telefonocontacto?></td>
        </tr>

        </tbody>
        </table>
        <p>
          <a href="<?php echo base_url() ?>index.php/modificar/trabajador/<?php echo $trabajador->curp?>" style="float: right;">Editar perfil</a>
        </p>
        </div>
        </div>
        </section>
        <section class="panel">
        <header class="panel-heading">
            Experiencia Laboral
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-up"></a>
             </span>
        </header>
        <div class="panel-body" style="display: none;">
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
              <td>¿Ha ido a EUA con H2A?</td>
              <td><?php echo $trabajador->exp1?></td>
          </tr>
          <tr>
              <td>Si la respuesta es un Si, contesta la siguiente pregunta: ¿Cuánto gasto para llegar a trabajar?</td>
              <td><?php echo $trabajador->exp2?></td>
          </tr>
          <tr>
              <td>¿Ha trabajado en otro estado o país (entre México y EUA)?</td>
              <td><?php echo $trabajador->exp3?></td>
          </tr>
          <tr>
              <td>Si la respuesta es un Si, contesta la siguiente pregunta: ¿En qué país?</td>
              <td><?php echo $trabajador->exp4?></td>
          </tr>
          <tr>
              <td>¿En qué estado?</td>
              <td><?php echo $trabajador->exp5?></td>
          </tr>
          <tr>
              <td>¿Ha pagado por transporte?</td>
              <td><?php echo $trabajador->exp6?></td>
          </tr>
          <tr>
              <td>¿Ha pagado para ser reclutado?</td>
              <td><?php echo $trabajador->exp7?></td>
          </tr>
          <tr>
              <td>¿Ha sido deportado?</td>
              <td><?php echo $trabajador->exp8?></td>
          </tr>
          <tr>
              <td>¿Tiene familiares en EUA?</td>
              <td><?php echo $trabajador->exp9?></td>
          </tr>
          <tr>
              <td>¿Tiene experiencia en el campo?</td>
              <td><?php echo $trabajador->exp10?></td>
          </tr>
          <tr>
              <td>¿De cuántos años es su experiencia en el campo?</td>
              <td><?php echo $trabajador->exp11?></td>
          </tr>
          <tr>
              <td>Tipo de producto(s) que ha cosechado:</td>
              <td><?php echo $trabajador->exp12?></td>
          </tr>
        </tbody>
        </table>

        </div>
        </div>
        </section>
        <section class="panel">
        <header class="panel-heading">
            Contratos / Evaluaciones
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-up"></a>
             </span>
        </header>
        <div class="panel-body" style="display: none;">
        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
          <th>Historial de contratos</th>
        </tr>
        </thead>
        <tbody>

        <tr>

            <td onclick="location='<?php echo base_url() ?>index.php/contratort/detalle/<?php echo $contrato->contrato?>'" style="cursor: pointer;">
              <?php echo $contrato->contrato?>
            </td>
        </tr>

        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>


        </div>
