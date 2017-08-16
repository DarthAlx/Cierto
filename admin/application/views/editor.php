<div class="wrapper">
  <?php if($exito){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Boletín publicado exitosamente!</div>";
 }
 ?>
            <div class="row">
                <div class="col-lg-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Publicar boletín

                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form action="<?php echo base_url() ?>index.php/contenidos/boletin" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea class="form-control ckeditor" name="contenido" rows="25"></textarea>
                                            <input type="hidden" name="publicadopor" value="<?=$this->session->userdata('aliasuser')?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class=" col-lg-12 text-right">

                                          <button class="btn btn-primary" type="submit" id="botonguardar" style="float:left;">Publicar</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>



            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <section class="panel">
                        <header class="panel-heading">
                            Subir archivos
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-up"></a>
                             </span>
                        </header>

                        <div class="panel-body" style="display: none;">
                            <div class="form">
                                <form class="cmxform form-horizontal adminex-form" enctype="multipart/form-data"  method="POST" action="<?php echo base_url() ?>index.php/contenidos/do_upload">
                                    <div class="form-group ">
                                        <label for="userfile" class="control-label col-lg-2">Archivo *</label>
                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                            <div class="input-group">
                                              <input class=" form-control" id="userfile" name="userfile" type="file" size="20" required/>
                                              <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">Subir</button>
                                              </span>
                                            </div>
                                            <span id="helpBlock" class="help-block">Maximo 2Mb (.pdf, .docx, .jpg, .png, .bmp, .zip, .rar) </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p>
                              &nbsp;
                            </p>
                            <?php  if($files){?>
                            <div class="adv-table table-responsive">
                            <table class="display table table-bordered table-striped table-hover" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>Vista</th>
                                <th>
                                  URL
                                </th>
                                <th>

                                </th>

                            </tr>
                            </thead>
                            <tbody>


                              <?php foreach($files as $file):?>
                            <tr>
                                <td>
                                  <a href="http://ciertoglobal.org/admin/uploads/boletines/<?=$file?>" class="thumbnail" target="_blank">
                                    <img src="http://ciertoglobal.org/admin/uploads/boletines/<?=$file?>" alt="..." style="max-width: 70px;">
                                  </a>
                                </td>
                                <td><?php echo anchor('archivos/downloads/'.$file, "http://ciertoglobal.org/admin/uploads/boletines/".$file);?> </td>
                                <td>
                                  <a style="float:right" href="<?php echo base_url() ?>index.php/contenidos/delete/<?php echo $file?>"<i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Vista</th>
                              <th>
                                URL
                              </th>
                              <th>

                              </th>

                            </tr>
                            </tfoot>
                            </table>

                            </div>
                            <?php }?>

                        </div>
                    </section>

                </div>
            </div>

            <?php
          if ($boletines) {?>
          <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background:#ff9933;">
                        <h3 class="panel-title">Boletín informativo</h3>
                    </div>

                    <div class="panel-body" style="background: #cccccc;">
                    <?php
                          foreach ($boletines as $boletin) {?>
                      <p class="text-center auth-row">
                          Por: <?=$boletin->publicadopor?>   |   <?=$boletin->fecha?>
                      </p>
                        <?php
                            echo html_entity_decode($boletin->contenido);
                            ?>

                        <?php
                          }
                        ?>
                    </div>
                </div>
              </div>
            </div>
            <?php } ?>

        </div>
