<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      Cosultando Evaluaciones

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
    <th>Fecha de Evaluación</th>
      <th>Trabajador</th>
      <th>Contrato</th>


  </tr>
  </thead>
  <tbody>

    <?php foreach($evaluaciones as $evaluacion):?>
  <tr onclick="location='<?php echo base_url() ?>index.php/evaluacion/detalle/<?php echo $evaluacion->id?>'" style="cursor: pointer;">
    <td><?php echo $evaluacion->fechadeevaluacion?></td>
      <td><?php echo $evaluacion->trabajador?></td>
      <td><?php echo $evaluacion->contrato?></td>

  </tr>
  <?php endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>Fecha de Evaluación</th>
    <th>Trabajador</th>
    <th>Contrato</th>

  </tr>
  </tfoot>
  </table>

  </div>
  </div>
  </section>
  </div>
  </div>
</div>
