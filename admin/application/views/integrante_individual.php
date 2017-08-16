<div class="wrapper">
        <div class="row">
        <div class="col-lg-8 col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
          </ul>
        <section class="panel">
        <header class="panel-heading">
            Detalles del Integrante
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <?php foreach($integrantes as $integrante):?>
        <table  class="display table table-bordered table-striped" >
        <thead>
        <tr>
            <th>Datos</th>
            <th>Detalles</th>

        </tr>
        </thead>
        <tbody>
          <tr>
              <td>Fecha de ingreso</td>
              <td><?php echo $integrante->fechadeingreso?></td>
          </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $integrante->nombre?></td>
        </tr>
        <tr>
            <td>Perfil</td>
            <td><?php echo $integrante->perfil?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo $integrante->direccion?></td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td><?php echo $integrante->municipio?></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><?php echo $integrante->estado?></td>
        </tr>
        <tr>
            <td>País</td>
            <td><?php echo $integrante->pais?></td>
        </tr>
        <tr>
            <td>Código Postal</td>
            <td><?php echo $integrante->cp?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo $integrante->telefono?></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><?php echo $integrante->correo?></td>
        </tr>
        <tr>
            <td>Habilidades</td>
            <td><?php echo $integrante->habilidades?></td>
        </tr>

        <tr>
            <td>Contrato</td>
            <td><?php echo $integrante->contrato?></td>
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
