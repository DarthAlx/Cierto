<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      Cosultando Ranchos

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
      <th>Fecha de registro</th>
      <th>Marca Comercial</th>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Municipio</th>
      <th>Estado</th>
      <th>Comunidad</th>
      <th>Persona de contacto</th>
  </tr>
  </thead>
  <tbody>

    <?php foreach($ranchos as $rancho):?>
  <tr onclick="location='<?php echo base_url() ?>index.php/rancho/detalle/<?php echo $rancho->id?>'" style="cursor: pointer;">
      <td><?php echo $rancho->fechaderegistro?></td>
      <td><?php echo $rancho->marca?></td>
      <td><?php echo $rancho->nombrerancho?></td>
      <td><?php echo $rancho->direccion?></td>
      <td><?php echo $rancho->municipio?></td>
      <td><?php echo $rancho->estado?></td>
      <td><?php echo $rancho->comunidad?></td>
      <td><?php echo $rancho->nombrecontacto?></td>
  </tr>
  <?php endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>Fecha de registro</th>
    <th>Marca Comercial</th>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Municipio</th>
    <th>Estado</th>
    <th>Comunidad</th>
    <th>Persona de contacto</th>
  </tr>
  </tfoot>
  </table>

  </div>
  </div>
  </section>
  </div>
  </div>
</div>
