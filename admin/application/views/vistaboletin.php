<div class="wrapper">

        <div class="row">
          <?php
        if ($boletin) {?>
          <div class="col-lg-6 col-md-9">
              <div class="panel panel-default">
                  <div class="panel-heading" style="background:#ff9933;">
                      <h3 class="panel-title">Boletín informativo</h3>
                  </div>

                  <div class="panel-body" style="background: #cccccc;">
                    <p class="text-center auth-row">
                        Por: <?=$boletin->publicadopor?>   |   <?=$boletin->fecha?>
                    </p>
                      <?php

                          echo html_entity_decode($boletin->contenido);
                          ?>


                  </div>
              </div>
            </div>
            <?php } ?>
            <?php
              if ($links) {?>
            <div class="col-lg-2 col-md-3">
              <div class="panel">
                  <div class="panel-body">
                      <div class="blog-post">
                          <h3>archivo</h3>
                          <ul>
                            <?php foreach (array_reverse($links) as $link){ ?>
                              <li><a href="<?php echo base_url() ?>index.php/perfil/boletin/<?=$link->id?>"><i class="  fa fa-angle-right"></i><?=$link->fecha?></a></li>
                            <?php } ?>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>
            <?php } ?>
          </div>

        </div>
