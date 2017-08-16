<div class="wrapper">
  <?php if($exito){
echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Vendedor guardado exitosamente!</div>";
 } ?>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a class="btn btn-default" href='javascript:history.go(-1);'>Regresar</a></li>
        </ul>
          <section class="panel">
              <header class="panel-heading">
                  Editar Perfil
              </header>

              <div class="panel-body">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="nueva_comunidad" name="formguardado" method="POST" action="<?php echo base_url() ?>index.php/modificar/vendedor/<?=$id?>">


                          <div class="form-group ">
                              <label for="direccion" class="control-label col-lg-2">Dirección *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="direccion" name="direccion" type="text" value="<?php echo $vendedor->direccion?>" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="comunidad" class="control-label col-lg-2">Comunidad *</label>
                              <div class="col-lg-10">
                                <select class="selectorcomunidad form-control" name="comunidad" id="comunidad"  required>
                                  <option value="">Elige una comunidad</option>
                                  <?php foreach($comunidades as $comunidad): ?>
                                    <option value="<?php echo $comunidad->nombre_comunidad ?>"><?php echo $comunidad->nombre_comunidad ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <script type='text/javascript'>
                                    document.getElementById('comunidad').value = '<?php echo $vendedor->comunidad?>';
                                </script>

                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="municipio" class="control-label col-lg-2">Municipio *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="municipio" name="municipio" type="text" value="<?php echo $vendedor->municipio?>" required/>
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
                                <script type='text/javascript'>
                                    document.getElementById('estado').value = '<?php echo $vendedor->estado?>';
                                </script>
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
                                <script type='text/javascript'>
                                    document.getElementById('pais').value = '<?php echo $vendedor->pais?>';
                                </script>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="cp" class="control-label col-lg-2">Código postal *</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="cp" name="cp" type="text" value = '<?php echo $vendedor->cp?>' required/>
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="telefono" class="control-label col-lg-2">Teléfono de la empresa *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="telefono" name="telefono" type="tel" value = '<?php echo $vendedor->telefono?>' required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="correo" class="control-label col-lg-2">Correo electrónico *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="correo" name="correo" type="email" value = '<?php echo $vendedor->correo?>' required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="web" class="control-label col-lg-2">Página web</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="web" name="web" type="text" value = '<?php echo $vendedor->web?>'/>
                              </div>
                          </div>

                            <h4 >
                                Datos de Persona de Contacto
                            </h4>
                            <div class="form-group ">
                                <label for="nombrecontacto" class="control-label col-lg-2">Nombre *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="nombrecontacto" name="nombrecontacto" type="text" value = '<?php echo $vendedor->nombrecontacto?>' required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cargo" class="control-label col-lg-2">Cargo *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="cargo" name="cargo" type="text" value = '<?php echo $vendedor->cargo?>' required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="telefonocontacto" class="control-label col-lg-2">Teléfono *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="telefonocontacto" name="telefonocontacto" type="tel" value = '<?php echo $vendedor->telefonocontacto?>' required/>
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
