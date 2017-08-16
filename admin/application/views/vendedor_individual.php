<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading">
            Detalles del Vendedor
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <?php foreach($vendedores as $vendedor):?>
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
              <td><?php echo $vendedor->fechaderegistro?></td>
          </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $vendedor->nombre?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo $vendedor->direccion?></td>
        </tr>
        <tr>
            <td>Comunidad</td>
            <td><?php echo $vendedor->comunidad?></td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td><?php echo $vendedor->municipio?></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><?php echo $vendedor->estado?></td>
        </tr>
        <tr>
            <td>País</td>
            <td><?php echo $vendedor->pais?></td>
        </tr>
        <tr>
            <td>Código postal</td>
            <td><?php echo $vendedor->cp?></td>
        </tr>

        <tr>
            <td>Teléfono de la empresa</td>
            <td><?php echo $vendedor->telefono?></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><?php echo $vendedor->correo?></td>
        </tr>
        <tr>
            <td>Página web</td>
            <td><?php echo $vendedor->web?></td>
        </tr>
        <tr>
            <td colspan="2"><h4>Persona de Contacto</h4></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $vendedor->nombrecontacto?></td>
        </tr>
        <tr>
            <td>Cargo</td>
            <td><?php echo $vendedor->cargo?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo $vendedor->telefonocontacto?></td>
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
