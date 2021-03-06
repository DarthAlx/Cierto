<div class="wrapper">
  <?php if($exito){
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Comunidad guardada exitosamente!</div>";
 } ?>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Agregar Comunidad
              </header>

              <div class="panel-body">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" name="formguardado" id="formguardado" method="POST" action="<?php echo base_url() ?>index.php/registros/comunidad">
                          <div class="form-group ">
                              <label for="nombre_comunidad" class="control-label col-lg-2">Nombre *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="nombre_comunidad" name="nombre_comunidad" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="municipio" class="control-label col-lg-2">Municipio *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="municipio" name="municipio" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="estado" class="control-label col-lg-2">Estado / Departamento *</label>
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
                              <label for="poblacion" class="control-label col-lg-2">Población aproximada</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="poblacion" name="poblacion" type="number"/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="servicios_cuenta" class="control-label col-lg-2">Servicios activos</label>
                              <div class="col-lg-10">
                                  <textarea class=" form-control" id="servicios_cuenta" name="servicios_cuenta"/></textarea>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="servicios_necesita" class="control-label col-lg-2">Servicios necesarios</label>
                              <div class="col-lg-10">
                                  <textarea class=" form-control" id="servicios_necesita" name="servicios_necesita"/></textarea>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="caracteristicas" class="control-label col-lg-2">Características específicas</label>
                              <div class="col-lg-10">
                                  <textarea class=" form-control" id="caracteristicas" name="caracteristicas"/></textarea>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="mapa" class="control-label col-lg-2">Croquis *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="mapa" name="mapa" type="url"/>
                                  <p class="help-block"><a href="https://maps.google.com" target="_blank">Consultar Google Maps.</a></p>
                              </div>
                          </div>

                            <h4 >
                                Datos de Persona de Contacto
                            </h4>
                            <div class="form-group ">
                                <label for="nombre_contacto" class="control-label col-lg-2">Nombre</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="nombre_contacto" name="nombre_contacto" type="text"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cargo" class="control-label col-lg-2">Cargo</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="cargo" name="cargo" type="text"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="telefono" class="control-label col-lg-2">Teléfono</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="telefono" name="telefono" type="tel"/>
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
