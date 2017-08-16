<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading">
            Detalles de la evaluación
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <?php foreach($evaluaciones as $evaluacion):?>
        <table  class="display table table-bordered table-striped" >
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Fecha de evaluación</td>
            <td><?php echo $evaluacion->fechadeevaluacion?></td>
        </tr>
        <tr onclick="location='<?php echo base_url() ?>index.php/trabajador/detalle/<?php echo $evaluacion->trabajador?>'" style="cursor: pointer;">
            <td>Trabajador</td>
            <td><?php echo $evaluacion->trabajador?></td>
        </tr>
        <tr onclick="location='<?php echo base_url() ?>index.php/contratort/detalle/<?php echo $evaluacion->contrato?>'" style="cursor: pointer;">
            <td>Contrato</td>
            <td><?php echo $evaluacion->contrato?></td>
        </tr>
        <tr>
            <td>¿Ha obtenido un beneficio de CIERTO?</td>
            <td><?php echo $evaluacion->beneficio?></td>
        </tr>
        <tr>
            <td>¿Cuál ha sido el beneficio?</td>
            <td><?php echo $evaluacion->cual?></td>
        </tr>
        <tr>
            <td>Desempeño</td>
            <td><?php echo $evaluacion->desempeño?></td>
        </tr>
        <tr>
            <td>Productividad</td>
            <td><?php echo $evaluacion->productividad?></td>
        </tr>
        <tr>
            <td>Puntualidad</td>
            <td><?php echo $evaluacion->puntualidad?></td>
        </tr>
        <tr>
            <td>¿Es líder de cuadrilla? </td>
            <td><?php echo $evaluacion->lider?></td>
        </tr>
        <tr>
            <td>Observaciones</td>
            <td><?php echo $evaluacion->observaciones?></td>
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
