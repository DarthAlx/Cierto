<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
  <section class="panel">
  <header class="panel-heading">
      Cosultando Trabajadores

  </header>
  <div class="panel-body">

  <div class="adv-table table-responsive">
    <form class="form-horizontal" action="<?php echo base_url() ?>index.php/consultas/trabajadores" method="post">
      <div class="col-lg-3" style="    padding-left: 0px;">
        <div class="input-group">
        <select class="form-control" id="opc_contrato" name="opc_contrato" class="form-control btn-default">
          <option value="">Todos</option>
          <option value="Con">Con contrato</option>
          <option value="Sin">Sin contrato</option>
        </select>
        <?php
        if($opc_contrato!=""){
        echo ("<script type='text/javascript'>
          document.getElementById('opc_contrato').value = '$opc_contrato';
        </script>");
        }?>
        <span class="input-group-btn">
        <input type="submit" class="btn btn-default" name="name" value="Filtrar">
        </span>
      </div>
      </div>
    </form>
  <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
  <thead>
  <tr>
      <th>Fecha de Registro</th>
      <th>Semestre</th>
      <th>Nombre</th>
      <th>CURP</th>
      <th>Género</th>
      <th>Estado</th>
      <th>Comunidad</th>
<th>Experiencia</th>

  </tr>
  </thead>
  <tbody>
    <?php
    if($opc_contrato!=""){

    foreach($trabajadores as $trabajador):
    if($opc_contrato==$trabajador->contrato){?>

    <tr class="gradeA" onclick="location='<?php echo base_url() ?>index.php/trabajador/detalle/<?php echo $trabajador->curp?>'" style="cursor: pointer;">

      <td><?php echo $trabajador->fechaderegistro?></td>
      <td><?php echo 'Semestre ' . $trabajador->semestre?></td>
      <td><?php echo $trabajador->nombre_trabajador?> <?php echo $trabajador->apellido_paterno?> <?php echo $trabajador->apellido_materno?></td>
      <td><?php echo $trabajador->curp?></td>
      <td><?php echo $trabajador->genero?></td>
      <td><?php echo $trabajador->estado?></td>
      <td><?php echo $trabajador->comunidad?></td>
<td><?php echo $trabajador->exp12?></td>

    </tr>

    <?php }
      endforeach;

    }
    else {
    foreach($trabajadores as $trabajador):?>

    <tr class="gradeX" onclick="location='<?php echo base_url() ?>index.php/trabajador/detalle/<?php echo $trabajador->curp?>'" style="cursor: pointer;">
      <td><?php echo $trabajador->fechaderegistro?></td>
      <td><?php echo 'Semestre ' . $trabajador->semestre?></td>
      <td><?php echo $trabajador->nombre_trabajador?> <?php echo $trabajador->apellido_paterno?> <?php echo $trabajador->apellido_materno?></td>
      <td><?php echo $trabajador->curp?></td>
      <td><?php echo $trabajador->genero?></td>
      <td><?php echo $trabajador->estado?></td>
      <td><?php echo $trabajador->comunidad?></td>
<td><?php echo $trabajador->exp12?></td>
    </tr>

    <?php endforeach;
    } ?>



  </tbody>
  <tfoot>
  <tr>
    <th>Fecha de Registro</th>
    <th>Semestre</th>
    <th>Nombre</th>
    <th>CURP</th>
    <th>Género</th>
    <th>Estado</th>
    <th>Comunidad</th>
<th>Experiencia</th>

  </tr>
  </tfoot>
  </table>

  </div>
  </div>
  </section>
  </div>
  </div>
</div>
