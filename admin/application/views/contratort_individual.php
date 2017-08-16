<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading"><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
            Detalles del contrato
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table  table-responsive">
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
            <td>Fecha de emisión</td>
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
            <td>Tipo de contrato</td>
            <td><?php echo $contrato->tipocontrato?></td>
        </tr>
        <tr>
            <td>Temporada</td>
            <td><?php echo $contrato->temporada?></td>
        </tr>

        <tr>
            <td>Tiempo de jornada</td>
            <td><?php echo $contrato->tiempodejornada?></td>
        </tr>
        <tr>
            <td>Horas de trabajo</td>
            <td><?php echo $contrato->horastrabajo?></td>
        </tr>
        <tr>
            <td>Salario</td>
            <td><?php echo $contrato->salario?></td>
        </tr>
        <tr>
            <td>多Ofrece vivienda?</td>
            <td><?php echo $contrato->vivienda?></td>
        </tr>
        <tr>
            <td>多Ofrece alimentos?</td>
            <td><?php echo $contrato->alimentos?></td>
        </tr>

        <tr>
            <td>多Ofrece transporte?</td>
            <td><?php echo $contrato->transporte?></td>
        </tr>
        <tr>
            <td>Tipo de producto</td>
            <td><?php echo $contrato->tipocosecha?></td>
        </tr>


        </tbody>
        </table>
        <?php endforeach; ?>
        <h4 >
            Trabajadores en el contrato
        </h4>

        <table  class="display table table-bordered table-striped" >
        <thead>
        <tr>
            <th>CURP</th>
            <th>Nombre</th>

        </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          foreach($trabajadores as $trabajador):?>
        <tr onclick="location='<?php echo base_url() ?>index.php/trabajador/detalle/<?php echo $trabajador->trabajador?>'" style="cursor: pointer;">
            <td><?php echo $trabajador->trabajador?></td>
            <td><?php echo $nombres[$i][0]->nombre_trabajador; echo $apts[$i][0]->apellido_paterno; $apms[$i][0]->apellido_materno;?> </td>
        </tr>
        <?php
          $i++;
          endforeach; ?>
        </tbody>
        </table>

        </div>
        </div>
        </section>

        </div>
        </div>
        </div>
