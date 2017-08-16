<div class="wrapper">

            <div class="row blog">

                <div class="col-md-8">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="blog-post">
                              <h3><?=$categoria->categoria?></h3>
                              <?php
                              $temas=$this->queries_model->obtener("cg_temas","*","categorialink",$categoria->id);

                              foreach (array_reverse($temas) as $tema) {

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

                            } ?>
                          </div>

                      </div>
                  </div>
                </div>

            </div>

        </div>
