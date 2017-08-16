<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      Cosultando Vendedores

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
    <th>Fecha de registro</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Correo</th>
      <th>Web</th>
      <th>Persona de contacto</th>
  </tr>
  </thead>
  <tbody>

    <?php foreach($vendedores as $vendedor):?>
  <tr onclick="location='<?php echo base_url() ?>index.php/vendedor/detalle/<?php echo $vendedor->id?>'" style="cursor: pointer;">
      <td><?php echo $vendedor->fechaderegistro?></td>
      <td><?php echo $vendedor->nombre?></td>
      <td><?php echo $vendedor->telefono?></td>
      <td><?php echo $vendedor->correo?></td>
      <td><a href="<?php echo $vendedor->web?>"></a><?php echo $vendedor->web?></td>
      <td><?php echo $vendedor->nombrecontacto?></td>
  </tr>
  <?php endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>Fecha de registro</th>
    <th>Nombre</th>
    <th>Teléfono</th>
    <th>Correo</th>
    <th>Web</th>
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
