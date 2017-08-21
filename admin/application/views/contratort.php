<div class="wrapper">
  <?php if($exito){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Contrato creado exitosamente!</div>";
 }
 if($exito_t){
   echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Trabajadores agragados al contrato exitosamente!</div>";
}

if($visible){
  ?>
  <script type="text/javascript">
    $(document).ready(function() {

          document.getElementById('paneltrabajadores').style.display="block";

      });
  </script>
  <?php
}
 if (!count($ranchos)){
    echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Aún no has agregado ningun rancho! <a href='".base_url()."index.php/registros/rancho'>Agregar</a></div>";
  }
  else{
         ?>

  <div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>IMPORTANTE: Si deseas agregar un Nuevo tipo de contrato, temporada o cosecha, selecciona la opción 'Otra' según corresponda y escribe el nuevo nombre en 'Agregar nuevo tipo de...'. Esto con la finalidad de que los datos se guarden correctamente en la base de datos.</div>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Contrato Rancho con trabajador
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-up"></a>
                   </span>
              </header>

              <div class="panel-body" style="display: none;">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="nuevo_rancho" method="POST" name="formguardado" action="<?php echo base_url() ?>index.php/contratos/contratort">
                        <div class="form-group ">
                            <label for="fechadeemision" class="control-label col-lg-2">Fecha de emisión del contrato *</label>
                            <div class="col-lg-10">
                                <input class="fecha form-control" id="fechadeemision" name="fechadeemision" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="fechadetermino" class="control-label col-lg-2">Fecha de termino del contrato *</label>
                            <div class="col-lg-10">
                                <input class="fecha form-control" id="fechadetermino" name="fechadetermino" type="text" required/>
                            </div>
                        </div>

                        <div class="form-group ">
                          <label for="rancho" class="control-label col-lg-2">Rancho *</label>
                          <div class="col-lg-10">
                            <select class="form-control" id="rancho" name="rancho" required>
                              <option value="">Seleccionar Rancho</option>
                            <?php foreach($ranchos as $rancho):?>
                              <option value="<?php echo $rancho->id?>"><?php echo $rancho->nombrerancho?></option>

                            <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="sedes" class="control-label col-lg-2">Sedes</label>
                          <div class="col-lg-10">
                            <select class="form-control sede-multiple" id="sedes"  multiple="multiple"  onchange="select('#sedes','sedes1');" >
                              <option value="">Seleccionar Sedes</option>

                            </select>
                            <input type="hidden" name="sedes" id="sedes1" value="Sin sedes">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tipocontrato" class="control-label col-lg-2">Tipo de contrato *</label>
                          <div class="col-lg-10">
                            <select class="form-control" id="tipocontrato" name="tipocontrato" required>
                              <option value="">Seleccionar Tipo</option>
                            <?php foreach($tipocontratos as $tipocontrato):?>
                              <option value="<?php echo $tipocontrato->tipocontrato?>"><?php echo $tipocontrato->tipocontrato?></option>
                            <?php endforeach; ?>
                            <option value="otro">Otro</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="nuevotipocontrato" class="control-label col-lg-2">Agregar nuevo tipo de contrato: </label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nuevotipocontrato" name="nuevotipocontrato" placeholder="Si no está registrada, escribe aquí su nombre." type="text"/>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="asignacioncontrato" class="control-label col-lg-2">Asignación de contrato *</label>
                          <div class="col-lg-10">
                            <select class="form-control" id="asignacioncontrato" name="asignacioncontrato" required>
                              <option value="">Seleccionar Tipo</option>
                              <option value="Contrato H2A">Contrato H2A</option>
                              <option value="Contrato interno">Contrato interno</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">

                          <label for="temporada" class="control-label col-lg-2">Temporada *</label>
                          <div class="col-lg-10">
                            <select class="form-control" id="temporada" name="temporada" required>
                              <option value="">Seleccionar Temporada</option>
                            <?php foreach($temporadas as $temporada):?>
                              <option value="<?php echo $temporada->temporada?>"><?php echo $temporada->temporada?></option>
                            <?php endforeach; ?>
                            <option value="otra">Otra</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">

                            <label for="nuevatemporada" class="control-label col-lg-2">Agregar nuevo tipo de temporada: </label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nuevatemporada" name="nuevatemporada"  placeholder="Si no está registrada, escribe aquí su nombre." type="text"/>
                            </div>
                        </div>


                          <div class="form-group">

                              <label for="tiempodejornada" class="control-label col-lg-2">Tiempo de jornada * </label>
                              <div class="col-lg-10">
                                <select class="form-control" name="tiempodejornada" id="tiempodejornada" required>
                                  <option value="">Selecciona</option>
                                  <option value="Completo">Completo</option>
                                  <option value="Medio tiempo">Medio tiempo</option>
                                  <option value="Otro">Otro</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group">

                              <label for="horastrabajo" class="control-label col-lg-2">Horas de trabajo * </label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="horastrabajo" name="horastrabajo" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group">

                              <label for="salario" class="control-label col-lg-2">Salario * </label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="salario" name="salario" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group">

                              <label for="vivienda" class="control-label col-lg-2">¿Ofrece vivienda? * </label>
                              <div class="col-lg-10">
                                <select class="form-control" name="vivienda" id="vivienda" required>
                                  <option value="">Selecciona</option>
                                  <option value="Si">Si</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group">

                              <label for="alimentos" class="control-label col-lg-2">¿Ofrece alimentos? * </label>
                              <div class="col-lg-10">
                                <select class="form-control" name="alimentos" id="alimentos" required>
                                  <option value="">Selecciona</option>
                                  <option value="Si">Si</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group">

                              <label for="transporte" class="control-label col-lg-2">¿Ofrece transporte? * </label>
                              <div class="col-lg-10">
                                <select class="form-control" name="transporte" id="transporte" required>
                                  <option value="">Selecciona</option>
                                  <option value="Si">Si</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group row">

                            <label for="tipocosecha" class="control-label col-lg-2">Tipo de producto *</label>
                            <div class="col-lg-10">
                              <select class="form-control cosecha" id="tipocosecha" name="tipocosecha" required>
                                <option value="">Seleccionar producto</option>
                              <?php foreach($tipocosechas as $tipocosecha):?>
                                <option value="<?php echo $tipocosecha->tipocosecha?>"><?php echo $tipocosecha->tipocosecha?></option>
                              <?php endforeach; ?>
                              <option value="otra">Otra</option>
                              </select>

                            </div>
                          </div>
                          <div class="form-group">

                              <label for="nuevacosecha" class="control-label col-lg-2">Agregar nuevo tipo de producto: </label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="nuevacosecha" name="nuevacosecha"  placeholder="Si no está registrada, escribe aquí su nombre." type="text"/>
                              </div>
                          </div>



                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <a class="btn btn-primary" data-toggle="modal" href="#verificar">Guardar</a>
                                <button class="btn btn-default" type="submit" id="botonguardar" style="display: none;"></button>
                                  <button class="btn btn-default" type="reset">Cancelar</button>
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
                  Agregar trabajadores a contrato
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-up"></a>
                   </span>
              </header>


              <div class="panel-body" id="paneltrabajadores" style="display: none;">


                <form class="form-inline" action="<?php echo base_url() ?>index.php/contratos/contratort" method="post">
                  <div class="col-lg-10 col-lg-offset-2" style="    padding-left: 0px;">
                    <div class="form-group">

                        <input class="form-control" placeholder="Año (aaaa)"id="año" name="año" type="text"/>
                        <select class="form-control" id="semestre" name="semestre" class="form-control btn-default">
                          <option value="">Seleccionar semestre</option>
                          <option value="I">I</option>
                          <option value="II">II</option>
                        </select>

                        <input type="submit" class="btn btn-default" name="name" value="Filtrar">

                    </div>



                  </div>
                </form>



<hr><br>

                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="nuevo_rancho" method="POST" action="<?php echo base_url() ?>index.php/contratos/contratort">
                        <div class="form-group ">
                          <label for="contrato" class="control-label col-lg-2">Contrato * </label>
                          <div class="col-lg-10">
                            <input type="hidden" name="count" value="<?php echo count($trabajadores);?>">
                            <select class="form-control contratoselect" name="contrato" id="contrato" required>
                            <option value="">Seleccionar contrato</option>
                            <?php foreach($contratos as $contrato):?>
                              <option value="<?php echo $contrato->id?>"><?php echo $contrato->id?></option>
                            <?php endforeach; ?>
                            </select>

                            </div>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="trabajador" class="control-label col-lg-2">Seleccione trabajadores * </label>
                          <div class="col-lg-10">

                        <div class="adv-table table-responsive">

                        <table class="display table table-bordered table-striped table-hover" >
                        <thead>
                        <tr>
                            <th><i class="fa fa-check-square-o" aria-hidden="true"></i></th>
                            <th>Fecha de Registro</th>
                            <th>Semestre</th>
                            <th>Nombre</th>
                            <th>CURP</th>
                            <th>Género</th>


                        </tr>
                        </thead>
                        <tbody>
                          <?php
                          $contador=1;
                          foreach($trabajadores as $trabajador): ?>
                          <tr class="gradeX">
                            <td><input type="checkbox" name="trabajador<?php echo $contador?>" value="<?php echo $trabajador->curp?>"></td>
                            <td><?php echo $trabajador->fechaderegistro?></td>
                            <td><?php echo 'Semestre ' . $trabajador->semestre?></td>
                            <td><?php echo $trabajador->nombre_trabajador?> <?php echo $trabajador->apellido_paterno?> <?php echo $trabajador->apellido_materno?></td>
                            <td><?php echo $trabajador->curp?></td>
                            <td><?php echo $trabajador->genero?></td>

                          </tr>

                          <?php $contador++;
                        endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th><i class="fa fa-check-square-o" aria-hidden="true"></i></th>
                          <th>Fecha de Registro</th>
                          <th>Semestre</th>
                          <th>Nombre</th>
                          <th>CURP</th>
                          <th>Género</th>

                        </tr>
                        </tfoot>
                        </table>

                        </div>
                      </div>
                    </div>



                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                  <button class="btn btn-primary" type="submit">Guardar</button>
                                  <button class="btn btn-default" type="reset">Cancelar</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </section>
      </div>
  </div>




  <?php
}  ?>
</div>
