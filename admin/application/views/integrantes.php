<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      Cosultando Integrantes

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
    <th>Fecha de ingreso</th>
      <th>Nombre</th>
      <th>Perfil</th>
      <th>Teléfono</th>
      <th>Correo</th>
      <th>Contrato</th>

  </tr>
  </thead>
  <tbody>

    <?php foreach($integrantes as $integrante):?>
  <tr onclick="location='<?php echo base_url() ?>index.php/equipo/detalle/<?php echo $integrante->id?>'" style="cursor: pointer;">
    <td><?php echo $integrante->fechadeingreso?></td>
      <td><?php echo $integrante->nombre?></td>
      <td><?php echo $integrante->perfil?></td>
      <td><?php echo $integrante->telefono?></td>
      <td><?php echo $integrante->correo?></td>
      <td><?php echo $integrante->contrato?></td>

  </tr>
  <?php endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>Fecha de ingreso</th>
    <th>Nombre</th>
    <th>Perfil</th>
    <th>Teléfono</th>
    <th>Correo</th>
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
