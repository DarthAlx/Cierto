<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading">
            Detalles del trabajador
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <?php foreach($trabajadores as $trabajador):?>
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
        <?php foreach($comunidades as $comunidad):?>
        <tr  onclick="location='<?php echo base_url() ?>index.php/comunidad/detalle/<?php echo $comunidad->id?>'" style="cursor: pointer;">
            <td>Comunidad</td>
            <td><?php echo $trabajador->comunidad?></td>
        </tr>
        <?php endforeach; ?>
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
        <?php endforeach; ?>
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
        <?php foreach($trabajadores as $trabajador):?>
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
              <td>Si la respuesta es Si, ¿Cuánto gastó para llegar?</td>
              <td><?php echo $trabajador->exp2?></td>
          </tr>
            <tr>
              <td>¿Ha ido a Canadá con Permiso de Trabajo Temporal al Campo?</td>
              <td><?php echo $trabajador->exp9?></td>
          </tr>
          <tr>
              <td>Si la respuesta es Si, ¿Cuánto gastó para llegar?</td>
              <td><?php echo $trabajador->exp13?></td>
          </tr>
          <tr>
              <td>¿Has trabajado en México?</td>
              <td><?php echo $trabajador->exp3?></td>
          </tr>

          <tr>
              <td>¿En qué estado?</td>
              <td><?php echo $trabajador->exp5?></td>
          </tr>
          <tr>
              <td>¿Has pagado por transporte?</td>
              <td><?php echo $trabajador->exp6?></td>
          </tr>
          <tr>
              <td>¿Has pagado para ser reclutado?</td>
              <td><?php echo $trabajador->exp7?></td>
          </tr>
          <tr>
              <td>¿Has sido deportado?</td>
              <td><?php echo $trabajador->exp8?></td>
          </tr>
            <tr>
              <td>¿Ha permanecido más de 1 año en EU, sin documentos?</td>
              <td><?php echo $trabajador->exp8_5?></td>
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
          <tr>
              <td>Vacante de preferencia</td>
              <td><?php echo $trabajador->preferencia?></td>
          </tr>
        </tbody>
        </table>
        <?php endforeach; ?>
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
          <?php foreach($contratos as $contrato):?>
        <tr>

            <td onclick="location='<?php echo base_url() ?>index.php/contratort/detalle/<?php echo $contrato->contrato?>'" style="cursor: pointer;">
              <?php echo $contrato->contrato?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
