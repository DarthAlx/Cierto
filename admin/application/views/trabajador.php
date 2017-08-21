<div class="wrapper">
  <?php if($exito){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Trabajador guardado exitosamente!</div>";
 }

 if($exito_r){
   echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Trabajador actualizado exitosamente!</div>";
}


 if($existe){
   echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>El trabajador ya se encuentra registrado. <a href='javascript:history.go(-1);'>Regresar</a></div>";
 }
 else{
 if (!count($comunidades)){
    echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Aún no has agregado ninguna comunidad! <a href='".base_url()."index.php/registros/comunidad'>Agregar</a></div>";
  }
  else{
      ?>
  <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Agregar Trabajador
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-down"></a>
                   </span>
              </header>

              <div class="panel-body" >
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="nuevo_trabajador" name="formguardado" method="POST" action="<?php echo base_url() ?>index.php/registros/trabajador">
                          <div class="form-group ">
                              <label for="fechaderegistro" class="control-label col-lg-2">Fecha de registro *</label>
                              <div class="col-lg-10">
                                  <input class="fecha form-control" id="fechaderegistro" name="fechaderegistro" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="nombre_trabajador" class="control-label col-lg-2">Nombre *</label>
                              <div class="col-lg-4">
                                  <input class=" form-control" id="nombre_trabajador" name="nombre_trabajador" placeholder="Nombre(s)" type="text" required/>
                              </div>
                              <div class="col-lg-3">
                                  <input class=" form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" type="text" required/>
                              </div>
                              <div class="col-lg-3">
                                  <input class=" form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group " id="curpgroup">
                              <label for="curp" class="control-label col-lg-2">CURP *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="curp" name="curp" type="text" style="text-transform:uppercase;" onblur="javascript:this.value=this.value.toUpperCase();" required />
                                  <p class="help-block">No conoces el CURP?, <a href="https://consultas.curp.gob.mx/CurpSP/" target="_blank">Buscar.</a></p>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="fechadenacimiento" class="control-label col-lg-2">Fecha de nacimiento *</label>
                              <div class="col-lg-10">
                                  <input class="fecha form-control" id="fechadenacimiento" name="fechadenacimiento" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="edad" class="control-label col-lg-2">Edad *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="edad" name="edad" type="number" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="genero" class="control-label col-lg-2">Género *</label>
                              <div class="col-lg-10">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="genero" id="mujer" value="Mujer" required>
                                    Mujer
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="genero" id="hombre" value="Hombre" required>
                                    Hombre
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="genero" id="lgbtti" value="LGBTTI" required>
                                    LGBTTI
                                  </label>
                                </div>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="direccion" class="control-label col-lg-2">Dirección *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="direccion" name="direccion" type="text" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="comunidad" class="control-label col-lg-2">Comunidad *</label>
                              <div class="col-lg-10">
                                <select class="selectorcomunidad form-control" name="comunidad" id="comunidad" required>
                                  <option value="">Elige una comunidad</option>
                                  <?php foreach($comunidades as $comunidad): ?>
                                    <option value="<?php echo $comunidad->nombre_comunidad ?>"><?php echo $comunidad->nombre_comunidad ?></option>
                                  <?php endforeach; ?>
                                </select>
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
                                <select class="selectorestado form-control" name="estado" id="estado" required>
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
                              <label for="telefonopersonal" class="control-label col-lg-2" *>Teléfono personal</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="telefonopersonal" name="telefonopersonal" type="tel" required/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="telefonodecaseta" class="control-label col-lg-2">Teléfono de caseta</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="telefonodecaseta" name="telefonodecaseta" type="tel"/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="escolaridad" class="control-label col-lg-2" *>Escolaridad</label>
                              <div class="col-lg-10">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="sinescolaridad" value="Sin escolaridad" required>
                                    Sin escolaridad
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="primaria" value="Primaria" required>
                                    Primaria
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="secundaria" value="Secundaria" required>
                                    Secundaria
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="tecnica" value="Carrera técnica" required>
                                    Carrera técnica
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="preparatoria" value="Preparatoria / Bachillerato" required>
                                    Preparatoria / Bachillerato
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="universidad" value="Universidad" required>
                                    Universidad
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="posgrado" value="Posgrado" required>
                                    Posgrado
                                  </label>
                                </div>
                                <!--div class="radio">
                                  <label>
                                    <input type="radio" name="escolaridad" id="otro" onclick="document.getElementById('otro').value = document.getElementById('otro_text').value;"> Otro (especifique)
                                    <input type="text" id="otro_text" onblur="document.getElementById('otro').value = document.getElementById('otro_text').value; document.getElementById('otro').checked=true;">
                                  </label>
                                </div-->

                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="idioma" class="control-label col-lg-2">Idioma</label>
                              <div class="col-lg-10">
                                <div class="radio">
                                  <label>
                                    <input type="checkbox" name="idioma1" id="español" value="Español">
                                    Español
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="checkbox" name="idioma2" id="ingles" value="Inglés">
                                    Inglés
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="checkbox" name="idioma3" id="lenguaindigena" value="Lengua Indígena">
                                    Lengua Indígena
                                  </label>
                                </div>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="correo" class="control-label col-lg-2">Correo electrónico *</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="correo" name="correo" type="email" required/>
                                  <p class="help-block"><a href="https://accounts.google.com/SignUp?service=mail&hl=es&continue=http%3A%2F%2Fmail.google.com%2Fmail%2F%3Fpc%3Dtopnav-about-es" target="_blank">Crear una cuenta</a></p>
                              </div>
                          </div>
                            <h4 >
                                Persona de Contacto
                            </h4>
                            <div class="form-group ">
                                <label for="nombre_contacto" class="control-label col-lg-2">Nombre *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="nombre_contacto" name="nombre_contacto" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="relacion" class="control-label col-lg-2">Relación *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="relacion" name="relacion" type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="telefonocontacto" class="control-label col-lg-2">Teléfono *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="telefonocontacto" name="telefonocontacto" type="tel" required/>
                                </div>
                            </div>
                            <h4 >
                                Experiencia Laboral
                            </h4>
                            <div class="form-group ">
                                <label for="exp1" class="control-label col-lg-4">¿Ha ido a EUA con H2A? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp1" id="exp1" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="exp2" class="control-label col-lg-4">Si la respuesta es un Si, ¿Cuánto gasto para llegar a trabajar? </label>
                                <div class="col-lg-8">
                                    <input class=" form-control" id="exp2" name="exp2" type="text"/>
                                </div>
                            </div>
                          <div class="form-group ">
                                <label for="exp9" class="control-label col-lg-4">¿Ha ido a Canadá con Permiso de Trabajo Temporal al Campo? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp9" id="exp9" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>
                          <div class="form-group ">
                                <label for="exp13" class="control-label col-lg-4">Si la respuesta es Si, ¿Cuánto gastó para llegar?</label>
                                <div class="col-lg-8">
                                  <input class=" form-control" name="exp13" id="exp13" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="exp3" class="control-label col-lg-4">¿Has trabajado en México? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp3" id="exp3" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="exp5" class="control-label col-lg-4">¿En qué estado? </label>
                                <div class="col-lg-8">
                                  <select class="selectorestado form-control" name="exp5" id="exp5">
                                    <option value="">Elige un estado</option>

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


                                  </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="exp6" class="control-label col-lg-4">¿Ha pagado por transporte? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp6" id="exp6" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="exp7" class="control-label col-lg-4">¿Ha pagado para ser reclutado? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp7" id="exp7" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="exp8" class="control-label col-lg-4">¿Ha sido deportado? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp8" id="exp8" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>
                          <div class="form-group ">
                                <label for="exp8.5" class="control-label col-lg-4">¿Ha permanecido más de 1 año en EU, sin documentos? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp8_5" id="exp8_5" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="exp10" class="control-label col-lg-4">¿Tiene experiencia  en el campo? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp10" id="exp10" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="exp11" class="control-label col-lg-4">¿De cuántos años es su experiencia en el campo? *</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="exp11" id="exp11" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Ninguno">Ninguno</option>
                                    <option value="6 meses a 1 año">6 meses a 1 año</option>
                                    <option value="1 a 3 años">1 a 3 años</option>
                                    <option value="Más de 3 años">Más de 3 años</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="exp12" class="control-label col-lg-4">Tipo de producto(s) que ha cosechado:</label>
                                <div class="col-lg-8">
                                    <div class="checkbox">
                                        <?php foreach($productos as $producto): ?>
                                            <label><input type='checkbox' class="recurrentes" name="exp12[]"  value="<?php echo $producto->producto ?>"><?php echo $producto->producto ?></label><br>
                                        <?php endforeach; ?>

                                           </div>

                                </div>
                            </div>
                          <div class="form-group">

                            <label for="nuevoproducto" class="control-label col-lg-2">Agregar nuevo tipo de producto: </label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nuevoproducto" name="nuevoproducto"  placeholder="Si no está registrada, escribe aquí su nombre." type="text"/>
                            </div>
                        </div>
                            <div class="form-group ">
                                <label for="preferencia" class="control-label col-lg-4">Vacante de preferencia</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="preferencia" id="preferencia" required>
                                    <option value="">Elige una opción</option>
                                    <option value="Siembra">Siembra</option>
                                    <option value="Cosecha">Cosecha</option>
                                    <option value="Empaque">Empaque</option>
                                  </select>
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

  <!--div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  Reinscribir Trabajador
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-up"></a>
                   </span>
              </header>

              <div class="panel-body" style="display: none;">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="reinscripcion_trabajador" method="POST" action="<?php echo base_url() ?>index.php/registros/trabajador">
                          <div class="form-group ">
                            <div class="col-lg-6">
                              <select class="form-control" id="trabajador" name="trabajador" required>
                                <option value="">Seleccionar trabajador *</option>
                              <?php foreach($trabajadores as $trabajador):?>
                                <option value="<?php echo $trabajador->curp?>"><?php echo $trabajador->curp?> - <?php echo $trabajador->nombre_trabajador?> <?php echo $trabajador->apellido_paterno?> <?php echo $trabajador->apellido_materno?></option>
                              <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group ">
                              <label for="fechadereinscripcion" class="control-label col-lg-2">Fecha de reinscripción *</label>
                              <div class="col-lg-10">
                                  <input class="fecha form-control" id="fechadereinscripcion" name="fechadereinscripcion" type="text" required/>
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
  </div-->
  <?php if ($this->session->userdata('tipo')=="1") { ?>
  <!--div class="row">
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
  </div-->

  <?php } ?>
  <?php }
}     ?>
</div>
