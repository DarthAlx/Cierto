<div class="wrapper">
  <?php if($exito){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Categoría guardada exitosamente!</div>";
 }

 if($exito_t){
   echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Tema publicado exitosamente!</div>";
}
 ?>
            <div class="row">
                <div class="col-lg-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Crear categoría
                            <span class="tools pull-right">
                               <a class="fa fa-chevron-up" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body" style="display: none;">
                            <div class="form">
                                <form action="<?php echo base_url() ?>index.php/contenidos/foroeditor" method="post" class="form-horizontal">
                                  <div class="form-group ">
                                      <label for="nombre_contacto" class="control-label col-lg-2">Categoría</label>
                                      <div class="col-lg-10">
                                          <input class=" form-control" name="categoria" type="text" required/>
                                      </div>
                                  </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">

                                          <button class="btn btn-primary" type="submit"  style="float:left;">Guardar</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <?php if ($categorias) {?>
            <div class="row">
                <div class="col-lg-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Crear tema de discusión
                            <span class="tools pull-right">
                               <a class="fa fa-chevron-up" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body" style="display: none;">
                            <div class="form">
                                <form action="<?php echo base_url() ?>index.php/foro/categorias" method="post" class="form-horizontal">
                                  <div class="form-group ">
                                      <label for="categorialink" class="control-label col-lg-2">Categoría</label>
                                      <div class="col-lg-10">
                                        <select class="selectorcategoria form-control" name="categorialink" id="categorialink" required>
                                          <option value="">Elige una categoría</option>
                                          <?php foreach($categorias as $categoria): ?>
                                            <option value="<?php echo $categoria->id?>"><?php echo $categoria->categoria ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label  class="control-label col-lg-2">Titulo</label>
                                      <div class="col-lg-10">
                                          <input class=" form-control" name="titulo" type="text" required/>
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="nombre_contacto" class="control-label col-lg-2">Contenido</label>
                                      <div class="col-lg-10">
                                          <textarea class="form-control" name="contenido" rows="9"></textarea>
                                          <input type="hidden" name="publicadopor" value="<?=$this->session->userdata('aliasuser')?>">
                                      </div>
                                  </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                          <button class="btn btn-primary" type="submit"  style="float:left;">Publicar</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <?php } ?>
        </div>
