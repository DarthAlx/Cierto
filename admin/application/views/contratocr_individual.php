<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading">
            Detalles del contrato
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="table-responsive">
        <?php foreach($contratos as $contrato):?>
        <table  class="display table table-bordered table-striped" >
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>ID</td>
            <td><?php echo $contrato->id?> </td>
        </tr>
        <tr>
            <td>Fecha de firma del contrato</td>
            <td><?php echo $contrato->fechadeemision?></td>
        </tr>
        <tr>
            <td>Fecha de termino</td>
            <td><?php echo $contrato->fechadetermino?></td>
        </tr>
        <tr>
            <td>Semestre</td>
            <td><?php echo $contrato->semestre?></td>
        </tr>
        <?php foreach($ranchos as $rancho):?>
        <tr  onclick="location='<?php echo base_url() ?>index.php/rancho/detalle/<?php echo $rancho->id?>'" style="cursor: pointer;">
            <td>Rancho</td>
            <td><?php echo $rancho->nombrerancho?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td>Sede(s)</td>
            <td><?php echo $contrato->sedes?></td>
        </tr>
        <tr>
            <td>Temporada</td>
            <td><?php echo $contrato->temporada?></td>
        </tr>

        <tr>
            <td>¿Qué habilidades y características requiere el trabajador?</td>
            <td><?php echo $contrato->capacidadesrequeridas?></td>
        </tr>
        <tr>
            <td>Requerimientos especiales del Rancho</td>
            <td><?php echo $contrato->requerimientosespeciales?></td>
        </tr>
        <tr>
            <td>Características del transporte al medio de trabajo</td>
            <td><?php echo $contrato->transporte?></td>
        </tr>
        <tr>
            <td>Tipo de contrato</td>
            <td><?php echo $contrato->tipocontrato?></td>
        </tr>
        <tr>
            <td>Tipo de trabajadores</td>
            <td><?php echo $contrato->tipotrabajadores?></td>
        </tr>
        <tr>
            <td>Estado / Departamento de procedencia de los trabajadores</td>
            <td><?php echo $contrato->estadoprocedencia?></td>
        </tr>
        <?php foreach($comunidades as $comunidad):?>
        <tr onclick="location='<?php echo base_url() ?>index.php/comunidad/detalle/<?php echo $comunidad->id?>'" style="cursor: pointer;">
            <td>Comunidad / Población de procedencia de los trabajadores</td>
            <td><?php echo $contrato->comunidadprocedencia?></td>
        </tr>
        <?php endforeach; ?>



        </tbody>
        </table>
        <?php endforeach; ?>
        <h4 >
            Vacantes en el contrato
        </h4>
        <?php foreach($vacantes as $vacante):?>
        <table  class="display table table-bordered table-striped" >
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tipo de vacante</td>
            <td><?php echo $vacante->vacante?> </td>
        </tr>
        <tr>
            <td>Número de vacantes</td>
            <td><?php echo $vacante->numvacantes?></td>
        </tr>
        <tr>
            <td colspan="2"><h4>Vacantes según experiencia laboral</h4></td>
        </tr>
        <tr>
            <td>Ninguna</td>
            <td><?php echo $vacante->ninguna?></td>
        </tr>
        <tr>
            <td>6 meses a 1 año</td>
            <td><?php echo $vacante->seisaunaño?></td>
        </tr>
        <tr>
            <td>1 a 3 años</td>
            <td><?php echo $vacante->unoatresaños?></td>
        </tr>
        <tr>
            <td>Más de 3 años</td>
            <td><?php echo $vacante->mastresaños?></td>
        </tr>

        <tr>
            <td colspan="2"><h4>Vacantes según grado de estudios</h4></td>
        </tr>
        <tr>
            <td>Sin escolaridad</td>
            <td><?php echo $vacante->sinescolaridad?></td>
        </tr>
        <tr>
            <td>Primaria</td>
            <td><?php echo $vacante->primaria?></td>
        </tr>
        <tr>
            <td>Secundaria</td>
            <td><?php echo $vacante->secundaria?></td>
        </tr>
        <tr>
            <td>Carrera técnica / comercial</td>
            <td><?php echo $vacante->tecnica?></td>
        </tr>
        <tr>
            <td>Preparatoria</td>
            <td><?php echo $vacante->preparatoria?></td>
        </tr>
        <tr>
            <td>Universidad</td>
            <td><?php echo $vacante->universidad?></td>
        </tr>
        <tr>
            <td>Posgrado</td>
            <td><?php echo $vacante->posgrado?></td>
        </tr>


        </tbody>
        </table>
        <?php endforeach; ?>
        </div>
        </div>
        </section>

        </div>
        </div>
        </div>
