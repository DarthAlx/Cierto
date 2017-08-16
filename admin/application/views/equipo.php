<div class="wrapper">
  <?php


  if($exito_r){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Integrante actualizado exitosamente!</div>";
  }

  if($exito){
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Integrante guardado exitosamente!</div>";
 } ?>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Agregar Integrante
              </header>

              <div class="panel-body">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="integrante" method="POST" name="formguardado" action="<?php echo base_url() ?>index.php/registros/equipo">
                        <div class="form-group ">
                            <label for="fechadeingreso" class="control-label col-lg-2">Fecha de ingreso *</label>
                            <div class="col-lg-10">
                                <input class="fecha form-control" id="fechadeingreso" name="fechadeingreso" type="text" required/>
                            </div>
                        </div>
                          <div class="form-group ">
                              <label for="nombre" class="control-label col-lg-2">Nombre completo *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="nombre" name="nombre" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="perfil" class="control-label col-lg-2">Perfil *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="perfil" name="perfil" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="direccion" class="control-label col-lg-2">Dirección *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="direccion" name="direccion" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="municipio" class="control-label col-lg-2">Municipio *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="municipio" name="municipio" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="estado" class="control-label col-lg-2">Estado *</label>
                              <div class="col-lg-10">
                                <select class="js-example-basic-single form-control" name="estado" id="estado" required>
                                  <option value="">Elige un estado</option>
                                  <optgroup label="México">
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="México">México</option>
                                    <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo León">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Querétaro">Querétaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                    <option value="Yucatán">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                  </optgroup>
                                  <optgroup label="Estados Unidos">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Carolina del Norte">Carolina del Norte</option>
                                    <option value="Carolina del Sur">Carolina del Sur</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Dakota del Norte">Dakota del Norte</option>
                                    <option value="Dakota del Sur">Dakota del Sur</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawái">Hawái</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Lowa">Lowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="kentucky">kentucky</option>
                                    <option value="Luisiana">Luisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Míchigan">Míchigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Misisipi">Misisipi</option>
                                    <option value="Misuri">Misuri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="Nueva Jersey">Nueva Jersey</option>
                                    <option value="Nueva York">Nueva York</option>
                                    <option value="Nuevo Hampshire">Nuevo Hampshire</option>
                                    <option value="Nuevo México">Nuevo México</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregón">Oregón</option>
                                    <option value="Pensilvania">Pensilvania</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Virginia Occidental">Virginia Occidental</option>
                                    <option value="Washington">Washington</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                  </optgroup>
                                </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="pais" class="control-label col-lg-2">País *</label>
                              <div class="col-lg-10">
                                <select class="form-control" name="pais" id="pais" required>
                                  <option value="">Elige un país</option>
                                  <option value="México">México</option>
                                  <option value="Estados Unidos">Estados Unidos</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="cp" class="control-label col-lg-2">Código Postal *</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="cp" name="cp" type="text" required/>
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="telefono" class="control-label col-lg-2">Teléfono *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="telefono" name="telefono" type="tel" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="correo" class="control-label col-lg-2">Correo electrónico *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="correo" name="correo" type="email" required/>
                              </div>
                          </div>
                            <div class="form-group ">
                                <label for="habilidades" class="control-label col-lg-2">Habilidades *</label>
                                <div class="col-lg-10">
                                    <textarea class=" form-control" id="habilidades" name="habilidades" required></textarea>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="contrato" class="control-label col-lg-2">Contrato *</label>
                                <div class="col-lg-10">
                                  <select class="form-control" name="contrato" id="contrato" required>
                                    <option value="">Selecciona</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                  </select>
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



  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Dar de baja
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-up"></a>
                   </span>
              </header>

              <div class="panel-body" style="display: none;">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="reinscripcion_trabajador" method="POST" action="<?php echo base_url() ?>index.php/registros/equipo">
                          <div class="form-group ">
                            <label for="fechaderegistro" class="control-label col-lg-2">Integrante *</label>
                            <div class="col-lg-10">
                              <select class="form-control selectorintegrante" id="integrante" name="integrante" required>
                                <option value="">Seleccionar integrante *</option>
                              <?php foreach($integrantes as $integrante):?>
                                <option value="<?php echo $integrante->id?>"><?php echo $integrante->perfil?> - <?php echo $integrante->nombre?></option>
                              <?php endforeach; ?>
                              </select>

                            </div>
                          </div>
                          <div class="form-group ">
                              <label for="fechaderegistro" class="control-label col-lg-2">Contrato *</label>
                              <div class="col-lg-10">
                                <select class="form-control" id="contrato" name="contrato" required>
                                  <option value="">Selecciona...</option>

                                  <option value="Activo">Activo</option>
                                  <option value="Inactivo">Inactivo</option>
                                </select>
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
<?php if ($this->session->userdata('tipo')=="1") { ?>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Crear usuario
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-up"></a>
                   </span>
              </header>

              <div class="panel-body" style="display: none;">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" name="formguardado" action="<?php echo base_url() ?>index.php/usuarios/registrar?Return=True" method="post">
                        <div class="form-group ">
                            <label for="pais" class="control-label col-lg-2">Tipo de usuario *</label>
                            <div class="col-lg-10">
                              <select class="form-control tipouser" name="tipouser" id="tipouser" style="margin-bottom: 15px !important;" required>
                                <option value="">Tipo de usuario</option>
                                <option value="1">Administrador</option>
                                <option value="2">Vendedor</option>
                                <option value="3">Rancho</option>
                                <option value="4">Trabajador</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="idenlace" class="control-label col-lg-2">Asociado *</label>
                            <div class="col-lg-10">
                              <select class="selectorenlace form-control" name="idenlace" id="idenlace" style="margin-bottom: 15px !important;" required>
                                <option value="">Seleccionar...</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">Correo electrónico *</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="contraseña" class="control-label col-lg-2">Contraseña *</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" name="contraseña" required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="repetir" class="control-label col-lg-2">Repetir contraseña *</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" name="contraseña1" required>
                            </div>
                        </div>


                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">

                                <button class="btn btn-default" type="submit">Guardar</button>
                                  <button class="btn btn-default" type="button">Cancelar</button>
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
