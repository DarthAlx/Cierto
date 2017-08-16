<div class="wrapper">
  <div class="row">
  <div class="col-lg-12">


  <?php
  if (date("m")=="01"||date("m")=="02"||date("m")=="03"||date("m")=="04"||date("m")=="05"||date("m")=="06") {
    $semestreactual="I";
    $semestrevacante="1";
  } elseif (date("m")=="07"||date("m")=="08"||date("m")=="09"||date("m")=="10"||date("m")=="11"||date("m")=="12") {
    $semestreactual="II";
    $semestrevacante="2";
  }


  $totaltrabajadoresatendidossinfiltro=0;
  $hombresatendidossinfiltro=0;
  $mujeresatendidassinfiltro=0;
  $lgbttiatendidossinfiltro=0;

  $edad14a19sinfiltro=0;
  $edad20a29sinfiltro=0;
  $edad30a39sinfiltro=0;
  $edad40a49sinfiltro=0;
  $edad50a59sinfiltro=0;
  $edad60sinfiltro=0;

  $sinescolaridadsinfiltro=0;
  $primariasinfiltro=0;
  $secundariasinfiltro=0;
  $tecnicasinfiltro=0;
  $preparatoriasinfiltro=0;
  $universidadsinfiltro=0;
  $posgradosinfiltro=0;
  $otrosestudiossinfiltro=0;

  $experiencianingunasinfiltro=0;
  $experiencia6meses1añosinfiltro=0;
  $experiencia1año3añossinfiltro=0;
  $experienciamasde3sinfiltro=0;



  $totaltrabajadoresatendidos=0;
  $hombresatendidos=0;
  $mujeresatendidas=0;
  $lgbttiatendidos=0;
  $edad14a19=0;
  $edad20a29=0;
  $edad30a39=0;
  $edad40a49=0;
  $edad50a59=0;
  $edad60=0;

  $sinescolaridad=0;
  $primaria=0;
  $secundaria=0;
  $tecnica=0;
  $preparatoria=0;
  $universidad=0;
  $posgrado=0;
  $otrosestudios=0;

  $experiencianinguna=0;
  $experiencia6meses1año=0;
  $experiencia1año3años=0;
  $experienciamasde3=0;

  $ranchosatendidos=0;
  $vacantesregistradas=0;

  $vacantessinescolaridad=0;
  $vacantesprimaria=0;
  $vacantessecundaria=0;
  $vacantestecnica=0;
  $vacantespreparatoria=0;
  $vacantesuniversidad=0;
  $vacantesposgrado=0;

  $vacantesexperiencianinguna=0;
  $vacantesexperiencia6meses1año=0;
  $vacantesexperiencia1año3años=0;
  $vacantesexperienciamasde3=0;

  $microempresa=0;
  $medianaempresa=0;
  $grandeempresa=0;







//trabajadores sin filtro
  $trabajadores = $this->queries_model->obtener("cg_trabajadores","*");
  foreach ($trabajadores as $trabajador) {
    list($diat, $mest, $aniot) = explode("/",$trabajador->fechaderegistro);
    if($aniot==date("Y")&&$semestreactual==$trabajador->semestre) {
      $totaltrabajadoresatendidossinfiltro++;
      if($trabajador->genero=="Hombre"){
        $hombresatendidossinfiltro++;
      }
      elseif ($trabajador->genero=="Mujer") {
        $mujeresatendidassinfiltro++;
      }
      else {
        $lgbttiatendidossinfiltro++;
      }

      //edad
      if($trabajador->edad>=14&&$trabajador->edad<=19){
        $edad14a19sinfiltro++;
      }
      if($trabajador->edad>=20&&$trabajador->edad<=29){
        $edad20a29sinfiltro++;
      }
      if($trabajador->edad>=30&&$trabajador->edad<=39){
        $edad30a39sinfiltro++;
      }
      if($trabajador->edad>=40&&$trabajador->edad<=49){
        $edad40a49sinfiltro++;
      }
      if($trabajador->edad>=50&&$trabajador->edad<=59){
        $edad50a59sinfiltro++;
      }
      if($trabajador->edad>=60){
        $edad60sinfiltro++;
      }
      //grado de estudios
      if($trabajador->escolaridad=="Sin escolaridad"){
        $sinescolaridadsinfiltro++;
      }
      elseif($trabajador->escolaridad=="Primaria"){
        $primariasinfiltro++;
      }
      elseif($trabajador->escolaridad=="Secundaria"){
        $secundariasinfiltro++;
      }
      elseif($trabajador->escolaridad=="Carrera técnica"){
        $tecnicasinfiltro++;
      }
      elseif($trabajador->escolaridad=="Preparatoria / Bachillerato"){
        $preparatoriasinfiltro++;
      }
      elseif($trabajador->escolaridad=="Universidad"){
        $universidadsinfiltro++;
      }
      elseif($trabajador->escolaridad=="Posgrado"){
        $posgradosinfiltro++;
      }
      else{
        $otrosestudiossinfiltro++;
      }
      //experiencia laboral
      if($trabajador->exp11=="Ninguno"){
        $experiencianingunasinfiltro++;
      }
      if($trabajador->exp11=="6 meses a 1 año"){
        $experiencia6meses1añosinfiltro++;
      }
      if($trabajador->exp11=="1 a 3 años"){
        $experiencia1año3añossinfiltro++;
      }
      if($trabajador->exp11=="Más de 3 años"){
        $experienciamasde3sinfiltro++;
      }



    }
  }

  //trabajadores con contrato

  foreach ($contratosrt as $contratort) {
    list($dia, $mes, $anio) = explode("/",$contratort->fechadetermino);
    $datetime1 = date_create(date("Y").'-'.date("m").'-'.date("d"));
    $datetime2 = date_create($anio.'-'.$mes.'-'.$dia);
    $interval = date_diff($datetime1, $datetime2);
    list($dia1, $mes1, $anio1) = explode("/",$contratort->fechadeemision);

    $x = $interval->format('%R%a');
    if( $x > 0 || ($anio1==date("Y")&&$semestreactual==$contratort->semestre)) {
      //echo $interval->format('%R%a'); echo $contratort->id."<br>";

      $trabajadoresdeestecontrato = count($this->queries_model->obtener("trabajadoresxcontrato","*","contrato",$contratort->id));
      $totaltrabajadoresatendidos = $totaltrabajadoresatendidos + $trabajadoresdeestecontrato;

      $trabajadoresconcontratos=$this->queries_model->obtener("trabajadoresxcontrato","*","contrato",$contratort->id);
      foreach ($trabajadoresconcontratos as $trabajadoresconcontrato) {
        $trabajadorindividual=$this->queries_model->obtenerfila("cg_trabajadores","*","curp",$trabajadoresconcontrato->trabajador);
        //genero
        if($trabajadorindividual->genero=="Hombre"){
          $hombresatendidos++;
        }
        elseif ($trabajadorindividual->genero=="Mujer") {
          $mujeresatendidas++;
        }
        else {
          $lgbttiatendidos++;
        }
        //edad
        if($trabajadorindividual->edad>=14&&$trabajadorindividual->edad<=19){
          $edad14a19++;
        }
        if($trabajadorindividual->edad>=20&&$trabajadorindividual->edad<=29){
          $edad20a29++;
        }
        if($trabajadorindividual->edad>=30&&$trabajadorindividual->edad<=39){
          $edad30a39++;
        }
        if($trabajadorindividual->edad>=40&&$trabajadorindividual->edad<=49){
          $edad40a49++;
        }
        if($trabajadorindividual->edad>=50&&$trabajadorindividual->edad<=59){
          $edad50a59++;
        }
        if($trabajadorindividual->edad>=60){
          $edad60++;
        }
        //grado de estudios
        if($trabajadorindividual->escolaridad=="Sin escolaridad"){
          $sinescolaridad++;
        }
        elseif($trabajadorindividual->escolaridad=="Primaria"){
          $primaria++;
        }
        elseif($trabajadorindividual->escolaridad=="Secundaria"){
          $secundaria++;
        }
        elseif($trabajadorindividual->escolaridad=="Carrera técnica"){
          $tecnica++;
        }
        elseif($trabajadorindividual->escolaridad=="Preparatoria / Bachillerato"){
          $preparatoria++;
        }
        elseif($trabajadorindividual->escolaridad=="Universidad"){
          $universidad++;
        }
        elseif($trabajadorindividual->escolaridad=="Posgrado"){
          $posgrado++;
        }
        else{
          $otrosestudios++;
        }
        //experiencia laboral
        if($trabajadorindividual->exp11=="Ninguno"){
          $experiencianinguna++;
        }
        if($trabajadorindividual->exp11=="6 meses a 1 año"){
          $experiencia6meses1año++;
        }
        if($trabajadorindividual->exp11=="1 a 3 años"){
          $experiencia1año3años++;
        }
        if($trabajadorindividual->exp11=="Más de 3 años"){
          $experienciamasde3++;
        }
      }
    }

  }

//ranchos
  $ranchos = $this->queries_model->obtener("cg_ranchos","*");
  foreach ($ranchos as $rancho) {
    list($diat, $mest, $aniot) = explode("/",$rancho->fechaderegistro);
    if($aniot==date("Y")&&$semestreactual==$rancho->semestre) {

      $contratos=$this->queries_model->obtener("cg_cierto_rancho","*","rancho",$rancho->id);
      if ($contratos) {
        $ranchosatendidos++;
        if ($rancho->tipo=="Micro/Pequeña") {
          $microempresa++;
        }
        elseif ($rancho->tipo=="Mediana") {
          $medianaempresa++;
        }
        elseif ($rancho->tipo=="Grande") {
          $grandeempresa++;
        }
      }

      }
      }



        foreach ($contratoscr as $contrato) {
          list($dia, $mes, $anio) = explode("/",$contrato->fechadetermino);
          $datetime1 = date_create(date("Y").'-'.date("m").'-'.date("d"));
          $datetime2 = date_create($anio.'-'.$mes.'-'.$dia);
          $interval = date_diff($datetime1, $datetime2);
          list($dia1, $mes1, $anio1) = explode("/",$contrato->fechadeemision);

          $x = $interval->format('%R%a');
          if( $x > 0 || ($anio1==date("Y")&&$semestreactual==$contrato->semestre)) {


        $vacantes=$this->queries_model->obtener("vacantesxcontrato","*","contrato",$contrato->id);


      foreach ($vacantes as $vacante) {
        $vacantesregistradas=$vacantesregistradas+$vacante->numvacantes;
        //grado de estudios
        $vacantessinescolaridad=$vacantessinescolaridad+$vacante->sinescolaridad;
        $vacantesprimaria=$vacantesprimaria+$vacante->primaria;
        $vacantessecundaria=$vacantessecundaria+$vacante->secundaria;
        $vacantestecnica=$vacantestecnica+$vacante->tecnica;
        $vacantespreparatoria=$vacantespreparatoria+$vacante->preparatoria;
        $vacantesuniversidad= $vacantesuniversidad+$vacante->universidad;
        $vacantesposgrado=$vacantesposgrado+$vacante->posgrado;

        $vacantesexperiencianinguna=$vacantesexperiencianinguna+$vacante->ninguna;
        $vacantesexperiencia6meses1año=$vacantesexperiencia6meses1año+$vacante->seisaunaño;
        $vacantesexperiencia1año3años=$vacantesexperiencia1año3años+$vacante->unoatresaños;
        $vacantesexperienciamasde3=$vacantesexperienciamasde3+$vacante->mastresaños;



      }
      }
      }









?>

  <div class="container" id="html-content-holder" style="background-color: #fff;">
      <div class="col-xs-12">
        <hr style="border-top: 3px double #8c8b8b;">
        <div class="col-xs-3">
          <img src="<?=base_url()?>/images/mex.png" class="img-responsive" />
          <div class="text-center">
            SECRETARIA DEL TRABAJO Y PREVISION SOCIAL
          </div>
        </div>
        <div class="col-xs-1">
          &nbsp;
        </div>
        <div class="col-xs-6 text-center">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <h4><strong>SUBSECRETARIA DE EMPLEO Y POLITICA LABORAL COORDINACION GENERAL DE EMPLEO</strong></h4><br>
          <h5>
            <strong>Formato AC- 8<br>
            “Informe sobre la participación en el mercado de trabajo
            de las Agencias de Colocación”</strong>
          </h5>
        </div>

      </div>
      <div class="col-xs-12">
        <div class="col-xs-offset-9 col-xs-3 text-center">
          <h5><strong>Número de Autorización y Registro o Registro</strong>
            </h5>
          <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$tecnica?>">
        </div>
      </div>
      <p>&nbsp;</p>
      <div class="col-xs-12">
        <div class="col-xs-12">
          <h5><strong>Nombre, denominación o razón social de la agencia de colocación de trabajadores</strong>
            </h5>
            <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$tecnica?>">
        </div>
        <div class="col-xs-offset-6 col-xs-3 text-center" style="padding-right: 0px;">
          <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="Con fines de lucro ( )" style="margin-right: 0px !important;">
        </div>
        <div class="col-xs-3 text-center"  style="padding-left: 0px;">
          <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="Sin fines de lucro ( )" style="margin-left: 0px !important;">
        </div>
      </div>
      <p>&nbsp;</p>
      <div class="col-xs-12">
        <div class="col-xs-4 ">
          <h5><strong>Area de Influencia</strong>
            </h5>
        </div>
        <div class="col-xs-4 text-center" style="padding-left: 0px; padding-right: 0px;">
          <textarea class="form-control" name="name"  style="border: 1px solid #000; border-radius: 0px; margin-right: 0px !important;">Municipio o Delegación Política</textarea>
        </div>
        <div class="col-xs-4 text-center" style="padding-left: 0px;">
          <textarea class="form-control" name="name" style="border: 1px solid #000; border-radius: 0px; margin-left: 0px !important;">Entidad federativa</textarea>
        </div>
      </div>
      <p>&nbsp;</p>
      <div class="col-xs-12">
        <div class="col-xs-4 ">
          <h5><strong>Periodo que se informa</strong></h5>
        </div>
        <div class="col-xs-8 text-center">
          al
        </div>
      </div>
      <p>&nbsp;</p>
      <div class="col-xs-12 " style="border: 1px solid #000;">
        <p>&nbsp;</p>
        <div class="col-xs-12 text-center">
            <h4><strong>INFORMACION DE LOS SOLICITANTES DE EMPLEO ATENDIDOS</strong>
            </h4>
        </div>

        <p>&nbsp;</p>
          <div class="col-xs-6">
            <div class="row">
              <div class="col-xs-6">
                <h5><strong>Número solicitantes</strong></h5>
              </div>
              <div class="col-xs-6">

                <div class="col-xs-6 col-xs-offset-6 text-center">
                  <h5><strong>%</strong></h5>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Hombres</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$hombresatendidossinfiltro?>">
                </div>
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($hombresatendidossinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Mujeres</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$mujeresatendidassinfiltro?>">
                </div>
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($mujeresatendidassinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>LGBTTI</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$lgbttiatendidossinfiltro?>">
                </div>
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($lgbttiatendidossinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6">
                <h5>Total</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidossinfiltro?>">
                </div>
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
                </div>
              </div>
            </div>
            <p>&nbsp;</p>
            <div class="row">
              <div class="col-xs-6">
                <h5><strong>Grado de estudios</strong></h5>
              </div>
              <div class="col-xs-6">

                <div class="col-xs-6 col-xs-offset-6 text-center">
                  <h5><strong>%</strong></h5>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Sin escolaridad</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$sinescolaridadsinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($sinescolaridadsinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6">
                <h5>Primaria</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$primariasinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($primariasinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Secundaria</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$secundariasinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($secundariasinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Carrera comercial y técnica</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$tecnicasinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($tecnicasinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Preparatoria</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$preparatoriasinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($preparatoriasinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Profesional</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$universidadsinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($universidadsinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Posgrado</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$posgradosinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($posgradosinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Total</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidossinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
                </div>
              </div>
            </div>


          </div>
          <div class="col-xs-6">
            <div class="row">
              <div class="col-xs-6">
                <h5><strong>Rango de edad</strong></h5>
              </div>
              <div class="col-xs-6">

                <div class="col-xs-6 col-xs-offset-6 text-center">
                  <h5><strong>%</strong></h5>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>De 14 a 19 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad14a19sinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad14a19sinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>De 20 a 29 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad20a29sinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad20a29sinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>De 30 a 39 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad30a39sinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad30a39sinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>De 40 a 49 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad40a49sinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad40a49sinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>De 50 a 59 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad50a59sinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad50a59sinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Mayores de 60 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad60sinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad60sinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Total</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidossinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
                </div>
              </div>
            </div>
            <p>&nbsp;</p>
            <div class="row">
              <div class="col-xs-6">
                <h5><strong>Experiencia laboral</strong></h5>
              </div>
              <div class="col-xs-6">

                <div class="col-xs-6 col-xs-offset-6 text-center">
                  <h5><strong>%</strong></h5>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Ninguna</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experiencianingunasinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experiencianingunasinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>6 meses-1 año</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experiencia6meses1añosinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experiencia6meses1añosinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>1 a 3 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experiencia1año3añossinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experiencia1año3añossinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Más de 3 años</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experienciamasde3sinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experienciamasde3sinfiltro/$totaltrabajadoresatendidossinfiltro)*100, 2)?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <h5>Total</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidossinfiltro?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
                </div>
              </div>
            </div>

          </div>
          <p>&nbsp;</p>
      </div>



      </div>
      <div class="container" id="html-content-holder2" style="background-color: #fff;">
        <hr style="border-top: 3px double #8c8b8b;">


      <div class="col-xs-12 " style="border: 1px solid #000; page-break-before: always;">
        <p>&nbsp;</p>
        <div class="col-xs-12 text-center">
            <h4><strong>INFORMACION DE LOS SOLICITANTES DE EMPLEO COLOCADOS</strong>
            </h4>
        </div>

        <p>&nbsp;</p>
        <div class="col-xs-6">
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Número solicitantes</strong></h5>
            </div>
            <div class="col-xs-6">

              <div class="col-xs-6 col-xs-offset-6 text-center">
                <h5><strong>%</strong></h5>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Hombres</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$hombresatendidos?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($hombresatendidos/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Mujeres</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$mujeresatendidas?>">
              </div>
              <div class="col-xs-6 " style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($mujeresatendidas/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>LGBTTI</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$lgbttiatendidos?>">
              </div>
              <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($lgbttiatendidos/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Total</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidos?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
              </div>
            </div>
          </div>
          <p>&nbsp;</p>
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Grado de estudios</strong></h5>
            </div>
            <div class="col-xs-6">

              <div class="col-xs-6 col-xs-offset-6 text-center">
                <h5><strong>%</strong></h5>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Sin escolaridad</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6"  style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$sinescolaridad?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($sinescolaridad/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Primaria</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$primaria?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($primaria/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Secundaria</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$secundaria?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($secundaria/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Carrera comercial y técnica</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$tecnica?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($tecnica/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Preparatoria</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$preparatoria?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($preparatoria/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Profesional</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$universidad?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($universidad/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Posgrado</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$posgrado?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($posgrado/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Total</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidos?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Rango de edad</strong></h5>
            </div>
            <div class="col-xs-6">

              <div class="col-xs-6 col-xs-offset-6 text-center">
                <h5><strong>%</strong></h5>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>De 14 a 19 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad14a19?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad14a19/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>De 20 a 29 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad20a29?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad20a29/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>De 30 a 39 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad30a39?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad30a39/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>De 40 a 49 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad40a49?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad40a49/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>De 50 a 59 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad50a59?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad50a59/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Mayores de 60 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$edad60?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($edad60/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Total</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidos?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
              </div>
            </div>
          </div>
          <p>&nbsp;</p>
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Experiencia laboral</strong></h5>
            </div>
            <div class="col-xs-6">

              <div class="col-xs-6 col-xs-offset-6 text-center">
                <h5><strong>%</strong></h5>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Ninguna</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experiencianinguna?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experiencianinguna/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>6 meses-1 año</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experiencia6meses1año?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experiencia6meses1año/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>1 a 3 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experiencia1año3años?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experiencia1año3años/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Más de 3 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$experienciamasde3?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($experienciamasde3/$totaltrabajadoresatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Total</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$totaltrabajadoresatendidos?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
              </div>
            </div>
          </div>
        </div>
        <p>&nbsp;</p>
      </div>

      <p>&nbsp;</p>
      <div class="col-xs-12 " style="border: 1px solid #000;">
        <p>&nbsp;</p>
        <div class="col-xs-12 text-center">
            <h4><strong>INFORMACION DE LAS EMPRESAS ATENDIDAS Y VACANTES REGISTRADAS</strong>
            </h4>
        </div>
        <p>&nbsp;</p>
        <div class="col-xs-6">
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Total de empresas atendidas</strong></h5>
            </div>
            <div class="col-xs-6">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$ranchosatendidos?>">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Total de vacantes registradas</strong></h5>
            </div>
            <div class="col-xs-6">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesregistradas?>">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Grado de estudios requerido</strong></h5>
            </div>
            <div class="col-xs-6">

              <div class="col-xs-6 col-xs-offset-6 text-center">
                <h5><strong>%</strong></h5>
              </div>

            </div>
          </div>

            <div class="row">
              <div class="col-xs-6">
                <h5>Sin escolaridad</h5>
              </div>
              <div class="col-xs-6">
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantessinescolaridad?>">
                </div>
                <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                  <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantessinescolaridad/$vacantesregistradas)*100, 2)?>">
                </div>
              </div>
            </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Primaria</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesprimaria?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantesprimaria/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Secundaria</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantessecundaria?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantessecundaria/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Carrera comercial y técnica</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantestecnica?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantestecnica/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Preparatoria</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantespreparatoria?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantespreparatoria/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Profesional</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesuniversidad?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantesuniversidad/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Posgrado</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesposgrado?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantesposgrado/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Total</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesregistradas?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Experiencia laboral requerida</strong></h5>
            </div>
            <div class="col-xs-6">

              <div class="col-xs-6 col-xs-offset-6 text-center">
                <h5><strong>%</strong></h5>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Ninguna</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesexperiencianinguna?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantesexperiencianinguna/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>6 meses-1 año</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesexperiencia6meses1año?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantesexperiencia6meses1año/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>1 a 3 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesexperiencia1año3años?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantesexperiencia1año3años/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Más de 3 años</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesexperienciamasde3?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($vacantesexperienciamasde3/$vacantesregistradas)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Total</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$vacantesregistradas?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5><strong>Empresas atendidas según su tamaño</strong></h5>
            </div>
            <div class="col-xs-6">

              <div class="col-xs-6 col-xs-offset-6 text-center">
                <h5><strong>%</strong></h5>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Micro/pequeña</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$microempresa?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($microempresa/$ranchosatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Mediana</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$medianaempresa?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($medianaempresa/$ranchosatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Grande</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$grandeempresa?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=round(($grandeempresa/$ranchosatendidos)*100, 2)?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <h5>Total</h5>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="<?=$ranchosatendidos?>">
              </div>
              <div class="col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                <input style="border: 1px solid #000; border-radius: 0px;" type="text" class="form-control" name="name" value="100">
              </div>
            </div>
          </div>


        </div>
        <p>&nbsp;</p>
      </div>
    <?php $vacantesmasdemandadas = $this->queries_model->customsql("SELECT * FROM vacantesxcontrato WHERE contrato LIKE '%".date("Y").$semestrevacante."%' ORDER BY numvacantes DESC;");
    ?>
      <p>&nbsp;</p>
      <div class="col-xs-12 text-center">
          <h4><strong>INFORMACION DE LAS OCUPACIONES CON MAYOR DEMANDA Y OFERTA</strong>
          </h4>
      </div>
      <p>&nbsp;</p>
      <div class="col-xs-12 ">
        <table class="table table-bordered">
          <tr>
            <td colspan="2">
              <h5><strong>Ocupaciones más demandadas (VACANTES)</strong></h5>
            </td>
            <td colspan="2">
              <h5><strong>Ocupaciones más solicitadas (SOLICITANTES)</strong></h5>
            </td>
          </tr>
          <tr>
            <td>
              <h5><strong>Número</strong></h5>
            </td>
            <td>
              <h5><strong>%</strong></h5>
            </td>
            <td>
              <h5><strong>Número</strong></h5>
            </td>
            <td>
              <h5><strong>%</strong></h5>
            </td>
          </tr>
          <?php $diez=0;
          foreach ($vacantesmasdemandadas as $vacantemasdemandada):
            if ($diez<10) {
            ?>
            <tr>
              <td>
                <?=$vacantemasdemandada->vacante?>
                <span style="float: right;"><?=$vacantemasdemandada->numvacantes?></span>
              </td>
              <td>
                <?=round(($vacantemasdemandada->numvacantes/$vacantesregistradas)*100, 2)?>
              </td>
              <td>
                &nbsp;
              </td>
              <td>
                &nbsp;
              </td>
            </tr>
          <?php
            $diez++;
          }
        endforeach; ?>


          </tr>
        </table>
      </div>

      <div class="col-xs-12">
        <h5>La Secretaría del Trabajo y Previsión Social podrá difundir y publicar la información contenida en la
presente solicitud en los términos de la Ley Federal de Transparencia y Acceso a la Información Pública
Gubernamental.</h5>
      </div>

      <div class="col-xs-12 ">
        <table class="table table-bordered">
          <tr>
            <td valign="top" align="center" style="width:50%">
              NOMBRE DEL REPRESENTANTE
              <p>
                &nbsp;
              </p>
              <p>
                &nbsp;
              </p>
            </td>
            <td valign="top" align="center" style="width:50%">
              FIRMA
              <p>
                &nbsp;
              </p>
              <p>
                &nbsp;
              </p>
            </td>
          </tr>
        </table>
      </div>




  </div>







</div>

<p>
  &nbsp;
</p>
<div class="container text-center">
  <input class="btn btn-primary" id="btn-Preview-Image" type="button" value="Página 1" />
  <a class="btn btn-primary" id="btn-Convert-Html2Image"  style="display:none">Descargar</a>
  <input class="btn btn-primary" id="btn-Preview-Image2" type="button" value="Página 2"/>
  <a class="btn btn-primary" id="btn-Convert-Html2Image2"style="display:none">Descargar</a>

</div>
<p>
  &nbsp;
</p>
<p>
  &nbsp;
</p>
