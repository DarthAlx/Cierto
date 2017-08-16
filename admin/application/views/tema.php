<div class="wrapper">
            <div class="row blog">
                <div class="col-lg-8">
                  <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
                  </ul>
                  <div class="panel">
                      <div class="panel-body">
                          <h1 class="text-center mtop35"><?=$tema->titulo?></h1>
                          <p class="text-center auth-row">
                            Por <a href="#"><?=$tema->publicadopor?></a>   |   <?=$tema->fecha?>   <?php if ($comentarios) {?>| <a href="#comentar"><?=count($comentarios)?> Comentarios</a><?php }?>
                          </p>
                          <hr>
                          <p>
                              <?=$tema->contenido?>
                          </p>
                      </div>
                  </div>

                </div>
              </div>
              <?php if ($comentarios) {?>
              <div class="row">
                <div class="col-lg-8">
                  <div class="panel">
                      <div class="panel-body">
                          <h1 class="text-center cmnt-head"><?=count($comentarios)?> Comentarios</h1>
                          <?php foreach (array_reverse($comentarios) as $comentario) {?>
                            <div class="media blog-cmnt">
                              <a href="javascript:;" class="pull-left">
                                  <img alt="" src="<?=base_url()?>uploads/<?=$comentario->email?>/avatar/avatar.png" class="media-object">
                              </a>
                              <div class="media-body">
                                  <h4 class="media-heading">
                                      <a href="#"><?=$comentario->alias?></a>
                                  </h4>
                                  <div class="bl-status">
                                      <span class="pull-left"><?=$comentario->horafecha?></span>
                                      <a href="#comentar" onclick="javascript:document.getElementById('respuesta').value='<?=$comentario->id?>'" class="pull-right reply">Responder</a>
                                  </div>
                                  <p class="mp-less">
                                      <?=$comentario->comentario?>
                                  </p>
                                  <?php $respuestas=$this->queries_model->obtener("cg_respuestas","*","comentario",$comentario->id);?>
                                  <?php foreach ($respuestas as $respuesta) {?>
                                  <div class="media blog-cmnt hidden-xs">
                                      <a href="javascript:;" class="pull-left">
                                          <img alt="" src="<?=base_url()?>uploads/<?=$respuesta->email?>/avatar/avatar.png" class="media-object-child">
                                      </a>
                                      <div class="media-body">
                                          <h4 class="media-heading">
                                              <a href="#"><?=$respuesta->alias?></a>
                                          </h4>
                                          <div class="bl-status">
                                              <span class="pull-left"><?=$respuesta->horafecha?></span>

                                          </div>
                                          <p class="mp-less">
                                              <?=$respuesta->respuesta?>
                                          </p>
                                        </div>
                                  </div>

                              <?php }?>

                          </div>


                          <?php foreach ($respuestas as $respuesta) {?>
                          <div class="media blog-cmnt visible-xs">
                              <a href="javascript:;" class="pull-left">
                                  <img alt="" src="<?=base_url()?>uploads/<?=$respuesta->email?>/avatar/avatar.png" class="media-object-child">
                              </a>
                              <div class="media-body">
                                  <h4 class="media-heading">
                                      <a href="#"><?=$respuesta->alias?></a>
                                  </h4>
                                  <div class="bl-status">
                                      <span class="pull-left"><?=$respuesta->horafecha?></span>

                                  </div>
                                  <p class="mp-less">
                                      <?=$respuesta->respuesta?>
                                  </p>
                                </div>
                          </div>

                      <?php }?>

                          <?php }?>

                      </div>
                  </div>

                </div>

              </div>
            </div>

              <?php }?>
              <div class="row">
                <div class="col-lg-8">
                  <div class="panel" id="comentar">
                      <div class="panel-body">
                          <h1 class="text-center cmnt-head ">Deja un comentario</h1>


                          <form role="form" method="post" class="form-horizontal leave-cmnt" action="<?php echo base_url() ?>index.php/foro/tema/<?=$id?>">
                              <div class="form-group">
                                  <div class="col-lg-12">
                                      <input type="hidden" class="col-lg-12 form-control" id="respuesta" name="respuesta" value="No">
                                      <input type="hidden" class="col-lg-12 form-control" name="alias" value="<?=$this->session->userdata('aliasuser')?>" placeholder="Name *">
                                      <input type="hidden" class="col-lg-12 form-control" name="tema" value="<?=$id?>">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-lg-12">
                                      <input type="hidden" class="col-lg-12 form-control" name="email" value="<?=$this->session->userdata('email')?>" placeholder="Email *">
                                  </div>

                              </div>
                              <div class="form-group">
                                  <div class="col-lg-12">
                                      <textarea class=" form-control" rows="8" name="comentario" placeholder="Comentario"></textarea>
                                  </div>
                              </div>
                              <p>
                                  <button class="btn btn-primary pull-right" type="submit">Publicar comentario</button>
                              </p>
                          </form>
                      </div>
                  </div>
                </div>
              </div>
</div>
