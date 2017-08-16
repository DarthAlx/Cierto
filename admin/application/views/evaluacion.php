<div class="wrapper">
  <?php if($exito){
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Evaluación guardada exitosamente!</div>";
 } ?>
<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Los apartados de Desempeño, Puntualidad y Productividad son evaluaciones realizadas colectivamente (por grupo o cuadrilla), no individuales.</div>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Evaluar
              </header>

              <div class="panel-body">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="integrante" name="formguardado" method="POST" action="<?php echo base_url() ?>index.php/evaluaciones/evaluacion">
                        <div class="form-group ">
                            <label for="fechadeevaluacion" class="control-label col-lg-2">Fecha de evaluación *</label>
                            <div class="col-lg-10">
                                <input class="fecha form-control" id="fechadeevaluacion" name="fechadeevaluacion" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="trabajador" class="control-label col-lg-2">Trabajador *</label>
                            <div class="col-lg-10">
                              <select class="selectortrabajador form-control" name="trabajador" id="trabajador"  required>
                                <option value="">Elige un trabajador</option>
                                <?php foreach($trabajadores as $trabajador): ?>
                                  <option value="<?php echo $trabajador->curp ?>"><?php echo $trabajador->nombre_trabajador?> <?php echo $trabajador->apellido_paterno?> <?php echo $trabajador->apellido_materno?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group ">
                          <label for="contrato" class="control-label col-lg-2">Contrato *</label>
                          <div class="col-lg-10">
                            <select class="form-control contratoselect" name="contrato" id="contrato"  required>
                              <option value="">Seleccionar Contrato</option>

                            </select>

                          </div>
                        </div>
                          <div class="form-group ">
                              <label for="beneficio" class="control-label col-lg-2">¿Haz obtenido un beneficio de CIERTO?</label>
                              <div class="col-lg-10">
                                <select class="form-control" name="beneficio" id="beneficio">
                                  <option value="">Elige una opción</option>
                                  <option value="Si">Si</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="cual" class="control-label col-lg-2">¿Cuál ha sido el beneficio?</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="cual" name="cual" type="text"/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="desempeño" class="control-label col-lg-2">Desempeño</label>
                              <div class="col-lg-10">
                                  <select class="form-control" name="desempeño" id="desempeño">
                                    <option value="">Elige una calificación</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="productividad" class="control-label col-lg-2">Productividad</label>
                              <div class="col-lg-10">
                                <select class="form-control" name="productividad" id="productividad" >
                                  <option value="">Elige una calificación</option>
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="puntualidad" class="control-label col-lg-2">Puntualidad</label>
                              <div class="col-lg-10">
                                <select class="form-control" name="puntualidad" id="puntualidad">
                                  <option value="">Elige una calificación</option>
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="lider" class="control-label col-lg-2">¿Es líder de cuadrilla? (Especifique)</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="lider" name="lider" type="text"/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="observaciones" class="control-label col-lg-2">Observaciones</label>
                              <div class="col-lg-10">
                                  <textarea class=" form-control" id="observaciones" name="observaciones"> </textarea>
                              </div>
                          </div>


                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <a class="btn btn-primary" data-toggle="modal" href="#verificar">Guardar</a>
                                <button class="btn btn-default" type="submit" id="botonguardar" style="display: none;"></button>
                                  <button class="btn btn-default" type="button">Cancelar</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </section>
      </div>
  </div>
</div>
