<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading">
            Detalles de la comunidad
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <?php foreach($comunidades as $comunidad):?>
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
            <td><?php echo $comunidad->nombre_comunidad?></td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td><?php echo $comunidad->municipio?></td>
        </tr>
        <tr>
            <td>Estado / Departamento</td>
            <td><?php echo $comunidad->estado?></td>
        </tr>
        <tr>
            <td>País</td>
            <td><?php echo $comunidad->pais?></td>
        </tr>
        <tr>
            <td>Población aproximada</td>
            <td><?php echo $comunidad->poblacion?></td>
        </tr>
        <tr>
            <td>Servicios activos</td>
            <td><?php echo $comunidad->servicios_cuenta?></td>
        </tr>
        <tr>
            <td>Servicios necesarios</td>
            <td><?php echo $comunidad->servicios_necesita?></td>
        </tr>
        <tr>
            <td>Características específicas</td>
            <td><?php echo $comunidad->caracteristicas?></td>
        </tr>
        <tr>
            <td>Croquis</td>
            <td><?php echo $comunidad->mapa?></td>
        </tr>
        <tr>
            <td colspan="2"><h4>Persona de Contacto</h4></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $comunidad->nombre_contacto?></td>
        </tr>
        <tr>
            <td>Cargo</td>
            <td><?php echo $comunidad->cargo?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo $comunidad->telefono?></td>
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
