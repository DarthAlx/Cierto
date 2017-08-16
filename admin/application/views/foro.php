<div class="wrapper">
    
    
<?php
if (!count($categorias)&&$this->session->userdata('tipo')=="1"){
    echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Aún no has agregado ninguna categoría! <a href='".base_url()."index.php/contenidos/foroeditor'>Agregar</a></div>";
  }
    
 if($exito){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Categoría guardada exitosamente!</div>";
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
                                <form action="<?php echo base_url() ?>index.php/foro/categorias" method="post" class="form-horizontal">
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
    
    <?php
   
   if ($categorias) {?>
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
            <div class="row blog">
              <?php foreach (array_reverse($categorias) as $categoria) {?>
                <div class="col-md-4">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="blog-post">
                              <h3><?=$categoria->categoria?></h3>
                              <?php
                              $temas=$this->queries_model->obtener("cg_temas","*","categorialink",$categoria->id);
                              $contador=0;
                              foreach (array_reverse($temas) as $tema) {
                                if ($contador<3) {
                                ?>
                              <div class="media">
                                <a href="<?php echo base_url() ?>index.php/foro/tema/<?=$tema->id?>" class="pull-left text-center">
                                    <i class="fa fa-comments" aria-hidden="true"></i> <br>Participar
                                </a>
                                  <div class="media-body">
                                      <h5 class="media-heading"><a href="<?php echo base_url() ?>index.php/foro/tema/<?=$tema->id?>"><?=$tema->fecha?> </a></h5>
                                      <p>
                                          <?=$tema->titulo?>
                                      </p>
                                      <p>
                                          Por: <?=$tema->publicadopor?>
                                      </p>
                                  </div>
                              </div>
                              <hr>
                              <?php
                              }
                                $contador++;
                            } ?>
                          </div>
                          <a href="<?php echo base_url() ?>index.php/foro/categoria/<?=$categoria->id?>" class="more">Ver todo</a>
                      </div>
                  </div>
                </div>
                  <?php } ?>
            </div>

        </div>
