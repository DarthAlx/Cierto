<div class="wrapper">
  <?php if($exito){
    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Contrato creado exitosamente!</div>";
 }
 if($exito_v){
   echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Cerrar'><span aria-hidden='true'>&times;</span></button>Vacante agregada exitosamente!</div>";
 }
 if($visible){
   ?>
   <script type="text/javascript">
     $(document).ready(function() {

           document.getElementById('panelvacantes').style.display="block";

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
                  Contrato CIERTO con Rancho
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-up"></a>
                   </span>
              </header>

              <div class="panel-body" style="display: none;">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="nuevo_rancho" name="formguardado" method="POST" action="<?php echo base_url() ?>index.php/contratos/contratocr">
                        <div class="form-group ">
                            <label for="fechadeemision" class="control-label col-lg-2">Fecha de firma del contrato *</label>
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
                            <select class="form-control" id="rancho" name="rancho" onchange="darvalor('rancho','nombrerancho')" required>
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
                        <div class="form-group row">

                          <label for="temporada" class="control-label col-lg-2">Temporada  (Actividad o producto correspondiente) *</label>
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


                          <div class="form-group ">
                              <label for="capacidadesrequeridas" class="control-label col-lg-2">¿Qué habilidades y características requiere el trabajador?</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" placeholder="Habilidades y/o características de trabajo" id="capacidadesrequeridas" name="capacidadesrequeridas" type="text"/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="requerimientosespeciales" class="control-label col-lg-2">Requerimientos especiales del Rancho</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="requerimientosespeciales" name="requerimientosespeciales" type="text"/>
                              </div>
                          </div>
                          <div class="form-group ">
                              <label for="transporte" class="control-label col-lg-2">Características del  transporte al medio de trabajo</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="transporte" name="transporte" type="text"/>
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


                          <div class="form-group ">
                              <label for="tipotrabajadores" class="control-label col-lg-2">Tipo de trabajadores *</label>
                              <div class="col-lg-10">
                                <select class="form-control" name="tipotrabajadores" id="tipotrabajadores" required>
                                  <option value="">Seleccionar Tipo</option>
                                <?php foreach($tipotrabajadores as $tipotrabajador):?>
                                  <option value="<?php echo $tipotrabajador->tipotrabajadores?>"><?php echo $tipotrabajador->tipotrabajadores?></option>
                                <?php endforeach; ?>
                                <option value="otro">Otro</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="nuevotipotrabajadores" class="control-label col-lg-2">Agregar nuevo tipo de trabajadores: </label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="nuevotipotrabajadores" name="nuevotipotrabajadores" placeholder="Si no está registrada, escribe aquí su nombre." type="text"/>
                              </div>
                          </div>
                          <h4 >
                              Lugar de procedencia de los trabajadores
                          </h4>

                        <div class="form-group ">
                          <label for="estadoprocedencia" class="control-label col-lg-2">Estado / Departamento *</label>
                          <div class="col-lg-10">
                            <select class="form-control pro1-multiple" id="estadoprocedencia1"  multiple="multiple"  onchange="select('#estadoprocedencia1','estadoprocedencia');" >
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
                            <input type="hidden" name="estadoprocedencia" id="estadoprocedencia" required>
                          </div>
                        </div>




                        <div class="form-group ">
                          <label for="comunidadprocedencia" class="control-label col-lg-2">Comunidad / Población *</label>
                          <div class="col-lg-10">
                            <select class="form-control pro2-multiple" id="comunidadprocedencia1"  multiple="multiple"  onchange="select('#comunidadprocedencia1','comunidadprocedencia');">
                              <option value="">Elige una comunidad</option>
                                  <?php foreach($comunidades as $comunidad): ?>
                                    <option value="<?php echo $comunidad->nombre_comunidad ?>"><?php echo $comunidad->nombre_comunidad ?></option>
                                  <?php endforeach; ?>

                            </select>
                            <input type="hidden" name="comunidadprocedencia" id="comunidadprocedencia">
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
                  Agregar vacante a contrato
                  <span class="tools pull-right">
                      <a href="javascript:;" class="fa fa-chevron-up"></a>
                   </span>
              </header>

              <div class="panel-body" id="panelvacantes" style="display: none;">
                  <div class="form">
                      <form class="cmxform form-horizontal adminex-form" id="vacantesxcontrato" method="POST" action="<?php echo base_url() ?>index.php/contratos/contratocr">
                        <div class="form-group ">
                          <label for="contrato" class="control-label col-lg-2">Contrato * </label>
                          <div class="col-lg-10">
                            
                            <select class="form-control contratoselect" name="contrato" id="contrato" required>
                            <option value="">Seleccionar contrato</option>
                            <?php foreach($contratos as $contrato):?>
                              <option value="<?php echo $contrato->id?>"><?php echo $contrato->id?></option>
                            <?php endforeach; ?>
                            </select>


                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="vacante" class="control-label col-lg-2">Tipo de vacante:  *</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="vacante" id="vacante" required>
                              <option value="">Seleccionar vacante</option>
                            <?php foreach($tipovacantes as $tipovacante):?>
                              <option value="<?php echo $tipovacante->tipovacante?>"><?php echo $tipovacante->tipovacante?></option>
                            <?php endforeach; ?>
                            <option value="otra">Otra</option>
                            </select>

                          </div>
                        </div>
                        <div class="form-group">
                            <label for="nuevotipovacante" class="control-label col-lg-2">Agregar nuevo tipo de vacante: </label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nuevotipovacante" name="nuevotipovacante" placeholder="Si no está registrada, escribe aquí su nombre." type="text"/>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="numvacantes" class="control-label col-lg-2">Número de vacantes *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="numvacantes" name="numvacantes" type="number" required/>
                            </div>
                        </div>
                        <h4 >
                            Vacantes solicitadas según la experiencia laboral
                        </h4>
                        <div class="form-group ">
                            <label for="ninguna" class="control-label col-lg-2">Ninguna *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="ninguna" name="ninguna" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="6-1año" class="control-label col-lg-2">6 meses a 1 año *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="6-1año" name="seisaunaño" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="1-3años" class="control-label col-lg-2">1 a 3 años *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="1-3años" name="unoatresaños" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="+3años" class="control-label col-lg-2">Más de 3 años *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="+3años" name="mastresaños" type="number" required/>
                            </div>
                        </div>
                        <h4 >
                            Vacantes solicitadas según su grado de estudios
                        </h4>
                        <div class="form-group ">
                            <label for="sinescolaridad" class="control-label col-lg-2">Sin escolaridad *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="sinescolaridad" name="sinescolaridad" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="primaria" class="control-label col-lg-2">Primaria *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="primaria" name="primaria" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="secundaria" class="control-label col-lg-2">Secundaria *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="secundaria" name="secundaria" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="tecnica" class="control-label col-lg-2">Carrera técnica *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="tecnica" name="tecnica" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="preparatoria" class="control-label col-lg-2">Preparatoria *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="preparatoria" name="preparatoria" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="universidad" class="control-label col-lg-2">Universidad *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="universidad" name="universidad" type="number" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="posgrado" class="control-label col-lg-2">Posgrado *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="posgrado" name="posgrado" type="number" required/>
                            </div>
                        </div>


                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                  <button class="btn btn-primary" type="submit">Agregar</button>
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
