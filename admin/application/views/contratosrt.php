<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      Cosultando Contratos Rancho / Trabajador

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
      <th>ID</th>
      <th>Fecha de emision</th>
      <th>Semestre</th>
      <th>Rancho</th>
      <th>Sedes</th>
      <th>Tipo de contrato</th>

  </tr>
  </thead>
  <tbody>

    <?php foreach($contratos as $contrato):?>
  <tr onclick="location='<?php echo base_url() ?>index.php/contratort/detalle/<?php echo $contrato->id?>'" style="cursor: pointer;">
      <td><?php echo $contrato->id?></td>
      <td><?php echo $contrato->fechadeemision?></td>
      <td><?php echo $contrato->semestre?></td>
      <td><?php
      foreach($ranchos as $rancho):
        if($contrato->rancho==$rancho->id){
          echo $rancho->nombrerancho;
        }
      endforeach;?>

      </td>
      <td><?php echo $contrato->sedes?></td>
      <td><?php echo $contrato->tipocontrato?></td>

  </tr>
  <?php endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>ID</th>
    <th>Fecha de emision</th>
    <th>Semestre</th>
    <th>Rancho</th>
    <th>Sedes</th>
    <th>Tipo de contrato</th>

  </tr>
  </tfoot>
  </table>

  </div>
  </div>
  </section>
  </div>
  </div>
</div>
