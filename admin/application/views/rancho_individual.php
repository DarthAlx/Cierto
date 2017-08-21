<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading">
            Detalles del rancho
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <?php foreach($ranchos as $rancho):?>
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Fecha de registro</td>
            <td><?php echo $rancho->fechaderegistro?></td>
        </tr>
        <tr>
            <td>Semestre</td>
            <td><?php echo $rancho->semestre?></td>
        </tr>
        <tr>
            <td>Marca comercial</td>
            <td><?php echo $rancho->marca?></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $rancho->nombrerancho?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo $rancho->direccion?></td>
        </tr>
        <?php foreach($comunidades as $comunidad):?>
        <tr  onclick="location='<?php echo base_url() ?>index.php/comunidad/detalle/<?php echo $comunidad->id?>'" style="cursor: pointer;">
            <td>Comunidad</td>
            <td><?php echo $rancho->comunidad?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td>Municipio</td>
            <td><?php echo $rancho->municipio?></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><?php echo $rancho->estado?></td>
        </tr>
        <tr>
            <td>País</td>
            <td><?php echo $rancho->pais?></td>
        </tr>
        <tr>
            <td>Código Postal</td>
            <td><?php echo $rancho->codigopostal?></td>
        </tr>

        <tr>
            <td>Teléfono de la empresa</td>
            <td><?php echo $rancho->telefonoempresa?></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><?php echo $rancho->correoelectronico?></td>
        </tr>
        <tr>
            <td>Página web</td>
            <td><?php echo $rancho->paginaweb?></td>
        </tr>
        <tr>
            <td>Tipo de empresa</td>
            <td><?php echo $rancho->tipo?></td>
        </tr>
        <tr>
            <td>Número de trabajadores agricolas</td>
            <td><?php echo $rancho->numtrabajadores?></td>
        </tr>
        <tr>
            <td colspan="2"><h4>Persona de Contacto</h4></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $rancho->nombrecontacto?></td>
        </tr>
        <tr>
            <td>Cargo</td>
            <td><?php echo $rancho->cargo?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo $rancho->telefonocontacto?></td>
        </tr>


        </tbody>
        </table>
        <?php endforeach; ?>
        </div>
        </div>
        </section>

        </div>
        </div>
<?php if($sedes){?>
        <div class="row">
        <div class="col-lg-8 col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Sedes del rancho
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <?php foreach($sedes as $sede):?>
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nombre</td>
            <td><?php echo $sede->nombre?></td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td><?php echo $sede->municipio?></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><?php echo $sede->estado?></td>
        </tr>
        <tr>
            <td>Comunidad</td>
            <td><?php echo $sede->comunidad?></td>
        </tr>
        </tbody>
        </table>
        <?php endforeach; ?>
        </div>
        </div>
        </section>

        <section class="panel">
        <header class="panel-heading">
            Contratos
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-up"></a>
             </span>
        </header>
        <div class="panel-body" style="display: none;">
        <div class="adv-table">

        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
          <th>Historial de contratos</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($contratos as $contrato):?>
        <tr>

            <td onclick="location='<?php echo base_url() ?>index.php/contratocr/detalle/<?php echo $contrato->id?>'" style="cursor: pointer;">
              <?php echo $contrato->id?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>

        </div>
        </div>
        </section>

        </div>
        </div>
        </div>
<?php }?>
