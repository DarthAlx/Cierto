<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading"><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
      Cosultando Comunidades

  </header>
  <div class="panel-body">
  <div class="adv-table table-responsive">
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
      <th>Nombre</th>
      <th>Municipio</th>
      <th>Estado / Departamento</th>
      <th>Población</th>
      <th>Croquis</th>
      <th>Persona de contacto</th>
  </tr>
  </thead>
  <tbody>

    <?php foreach($comunidades as $comunidad):?>
  <tr onclick="location='<?php echo base_url() ?>index.php/comunidad/detalle/<?php echo $comunidad->id?>'" style="cursor: pointer;">
      <td><?php echo $comunidad->nombre_comunidad?></td>
      <td><?php echo $comunidad->municipio?></td>
      <td><?php echo $comunidad->estado?></td>
      <td><?php echo $comunidad->poblacion?></td>
      <td><a href="<?php echo $comunidad->mapa?>"><?php echo $comunidad->mapa?></a></td>
      <td><?php echo $comunidad->nombre_contacto?></td>
  </tr>
  <?php endforeach; ?>

  </tbody>
  <tfoot>
  <tr>
    <th>Nombre</th>
    <th>Municipio</th>
    <th>Estado / Departamento</th>
    <th>Población</th>
    <th>Croquis</th>
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
