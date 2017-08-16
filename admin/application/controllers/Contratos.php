<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contratos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	}
//Registro
	public function contratocr()
	{
		$data=array();
		$this->load->model('queries_model');
		$data['exito']=false;
		$data['exito_v']=false;
		$data['visible']=false;
		$bandera=false;
		$temporadas = $this->queries_model->obtener("temporadas","*");
		$tipocontratos = $this->queries_model->obtener("tipocontratos","*");
		$tipotrabajadores = $this->queries_model->obtener("tipotrabajadores","*");
		$tipovacantes = $this->queries_model->obtener("tipovacantes","*");


		if($this->input->post('rancho')&&$this->input->post('sedes')&&$this->input->post('temporada')&&$this->input->post('fechadeemision')){
			list($dia, $mes, $anio) = explode("/",$this->input->post('fechadeemision'));
			if ($mes=="01"||$mes=="02"||$mes=="03"||$mes=="04"||$mes=="05"||$mes=="06") {
				$semestreactual="1";
			} elseif ($mes=="07"||$mes=="08"||$mes=="09"||$mes=="10"||$mes=="11"||$mes=="12") {
				$semestreactual="2";
			}
			$ranchoseleccionado = $this->queries_model->obtener("cg_ranchos","*","id",$this->input->post('rancho'));
			$traercontratos =$this->queries_model->obtener("cg_cierto_rancho","*");
			$numcontratos= count($traercontratos)+1;
			foreach ($ranchoseleccionado as $nombre) {
				$nombrenormalizado=$this->normaliza($nombre->nombrerancho);
				if($this->input->post('tipocontrato')=="otro"&&$this->input->post('nuevotipocontrato')!=""){
				$contratonormalizado=$this->normaliza($this->input->post('nuevotipocontrato'));
				}
				else{
						$contratonormalizado=$this->normaliza($this->input->post('tipocontrato'));
				}
				$nombrelisto=str_replace(' ', '', 	$nombrenormalizado);

				$nuevoid="Contrato-CR-" . $numcontratos . "-" . ucfirst($nombrelisto) . "-" . str_replace(' ', '',$contratonormalizado) . "-" . $dia . "-" . $mes . "-" . $anio.$semestreactual;
			}


				$registros = array(
				'id' => $nuevoid,
				'rancho' => $this->input->post('rancho'),
				'sedes' => $this->input->post('sedes'),
				'temporada' => $this->input->post('temporada'),
				'fechadeemision' => $this->input->post('fechadeemision'),
				'fechadetermino' => $this->input->post('fechadetermino'),
				'semestre' => '',
				'capacidadesrequeridas' => $this->input->post('capacidadesrequeridas'),
				'requerimientosespeciales' => $this->input->post('requerimientosespeciales'),
				'transporte' => $this->input->post('transporte'),
				'estadoprocedencia' => $this->input->post('estadoprocedencia'),
				'comunidadprocedencia' => $this->input->post('comunidadprocedencia'),
				'tipocontrato' => $this->input->post('tipocontrato'),
				'tipotrabajadores' => $this->input->post('tipotrabajadores'));
				list($dia, $mes, $anio) = explode("/",$this->input->post('fechadeemision'));
				if ($mes=="01"||$mes=="02"||$mes=="03"||$mes=="04"||$mes=="05"||$mes=="06") {
					$registros['semestre']="I";
				} elseif ($mes=="07"||$mes=="08"||$mes=="09"||$mes=="10"||$mes=="11"||$mes=="12") {
					$registros['semestre']="II";
				}
				if($this->input->post('temporada')=="otra"&&$this->input->post('nuevatemporada')!=""){
					$nuevatemporada = array(
					'temporada' => ucfirst($this->input->post('nuevatemporada')));
					foreach($temporadas as $temporada){
						if(ucfirst($this->input->post('nuevatemporada'))==ucfirst($temporada->temporada)){
							$bandera=true;
							break;
						}else{
							$bandera=false;
						}
	 			 }
				 if(!$bandera){
					$this->queries_model->guardar("temporadas", $nuevatemporada);
					$registros['temporada']=ucfirst($this->input->post('nuevatemporada'));
				}
				}
				if($this->input->post('tipocontrato')=="otro"&&$this->input->post('nuevotipocontrato')!=""){
					$nuevotipocontrato = array(
					'tipocontrato' =>ucfirst( $this->input->post('nuevotipocontrato')));
					foreach($tipocontratos as $tipocontrato){
						if(ucfirst($this->input->post('nuevotipocontrato'))==ucfirst($tipocontrato->tipocontrato)){
							$bandera=true;
							break;
						}else{
							$bandera=false;
						}
	 			 }
				 if(!$bandera){
					$this->queries_model->guardar("tipocontratos", $nuevotipocontrato);
					$registros['tipocontrato']=ucfirst($this->input->post('nuevotipocontrato'));
				}
				}
				if($this->input->post('tipotrabajadores')=="otro"&&$this->input->post('nuevotipotrabajadores')!=""){
					$nuevotipotrabajadores = array(
					'tipotrabajadores' =>ucfirst( $this->input->post('nuevotipotrabajadores')));
					foreach($tipotrabajadores as $tipotrabajador){
						if(ucfirst($this->input->post('nuevotipotrabajadores'))==ucfirst($tipotrabajador->tipotrabajadores)){
							$bandera=true;
							break;
						}else{
							$bandera=false;
						}
	 			 }
				 if(!$bandera){
					$this->queries_model->guardar("tipotrabajadores", $nuevotipotrabajadores);
					$registros['tipotrabajadores']=ucfirst($this->input->post('nuevotipotrabajadores'));
				}
				}

			if($this->queries_model->guardar("cg_cierto_rancho", $registros)){
				$data['visible']=true;
				$data['exito']=true;
			}

}
$contratos = $this->queries_model->obtener("cg_cierto_rancho","*");
if($this->input->post('contrato')&&$this->input->post('vacante')&&$this->input->post('numvacantes')){
	$registros = array(
	'contrato' => $this->input->post('contrato'),
	'vacante' => ucfirst($this->input->post('vacante')),
	'numvacantes' => $this->input->post('numvacantes'),
	'ninguna' => $this->input->post('ninguna'),
	'seisaunaño' => $this->input->post('seisaunaño'),
	'unoatresaños' => $this->input->post('unoatresaños'),
	'mastresaños' => $this->input->post('mastresaños'),
	'sinescolaridad' => $this->input->post('sinescolaridad'),
	'primaria' => $this->input->post('primaria'),
	'secundaria' => $this->input->post('secundaria'),
	'tecnica' => $this->input->post('tecnica'),
	'preparatoria' => $this->input->post('preparatoria'),
	'universidad' => $this->input->post('universidad'),
	'posgrado' => $this->input->post('posgrado')
	);
	if($this->input->post('vacante')=="otra"&&$this->input->post('nuevotipovacante')!=""){
		$nuevavacante = array(
		'tipovacante' => ucfirst($this->input->post('nuevotipovacante')));
		foreach($tipovacantes as $vacante){
			if(ucfirst($this->input->post('nuevotipovacante'))==ucfirst($vacante->tipovacante)){
				$bandera=true;
				break;
			}else{
				$bandera=false;
			}
	 }
	 if(!$bandera){
		$this->queries_model->guardar("tipovacantes", $nuevavacante);
		$registros['vacante']=ucfirst($this->input->post('nuevotipovacante'));
	}
	}
	 if($this->queries_model->guardar("vacantesxcontrato", $registros)){
		 $data['exito_v']=true;
	 }


}


		$ranchos = $this->queries_model->obtener("cg_ranchos","*");
		$sedes = $this->queries_model->obtener("cg_sedes","*");
		$comunidades = $this->queries_model->obtener("cg_comunidades","nombre_comunidad");

		$data['ranchos']=$ranchos;
		$data['sedes']=$sedes;
		$data['comunidades']=$comunidades;
		$data['temporadas']=$temporadas;
		$data['tipocontratos']=$tipocontratos;
		$data['tipotrabajadores']=$tipotrabajadores;
		$data['tipovacantes']=$tipovacantes;
		$data['contratos']=$contratos;
		$data['titulo']="Contrato CIERTO / Rancho";
		$data['menu']="Contratos";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('contratocr',$data);
			$this->load->view('Templates/footer',$data);
		}
		else{
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('usuariosinpermiso',$data);
			$this->load->view('Templates/footer',$data);
		}
	}
	else{
		redirect('usuarios/iniciar_sesion');
	}
	//termina proceso de logueado

	}





	public function contratort()
	{
		$data=array();
		$this->load->model('queries_model');
		$data['exito']=false;
		$data['exito_t']=false;
		$data['visible']=false;
		$bandera=false;
		$temporadas = $this->queries_model->obtener("temporadas","*");
		$tipocontratos = $this->queries_model->obtener("tipocontratos","*");
		$tipovacantes = $this->queries_model->obtener("tipovacantes","*");
		$tipocosechas = $this->queries_model->obtener("tipocosechas","*");


		if($this->input->post('rancho')&&$this->input->post('sedes')&&$this->input->post('temporada')&&$this->input->post('fechadeemision')){
			list($dia, $mes, $anio) = explode("/",$this->input->post('fechadeemision'));
			if ($mes=="01"||$mes=="02"||$mes=="03"||$mes=="04"||$mes=="05"||$mes=="06") {
				$semestreactual="1";
			} elseif ($mes=="07"||$mes=="08"||$mes=="09"||$mes=="10"||$mes=="11"||$mes=="12") {
				$semestreactual="2";
			}
			$ranchoseleccionado = $this->queries_model->obtener("cg_ranchos","*","id",$this->input->post('rancho'));
			foreach($ranchoseleccionado as $nombre):
				$nombrenormalizado=$this->normaliza($nombre->nombrerancho);
				$traercontratos =$this->queries_model->obtener("cg_cierto_rancho","*");
				$numcontratos= count($traercontratos)+1;
				if($this->input->post('tipocontrato')=="otro"&&$this->input->post('nuevotipocontrato')!=""){
				$contratonormalizado=$this->normaliza($this->input->post('nuevotipocontrato'));
				}
				else{
						$contratonormalizado=$this->normaliza($this->input->post('tipocontrato'));
				}
				$nombrelisto=str_replace(' ', '', 	$nombrenormalizado);
				$nuevoid = "Contrato-RT-" . $numcontratos . "-" . ucfirst($nombrelisto) . "-" . str_replace(' ', '',$contratonormalizado) . "-" . $dia . "-" . $mes . "-" . $anio.$semestreactual;
			endforeach;


				$registros = array(
				'id' => $nuevoid,
				'rancho' => $this->input->post('rancho'),
				'sedes' => $this->input->post('sedes'),
				'tipocontrato' => $this->input->post('tipocontrato'),
				'temporada' => $this->input->post('temporada'),
				'fechadeemision' => $this->input->post('fechadeemision'),
				'fechadetermino' => $this->input->post('fechadetermino'),
				'semestre' => '',
				'tiempodejornada' => $this->input->post('tiempodejornada'),
				'horastrabajo' => $this->input->post('horastrabajo'),
				'salario' => $this->input->post('salario'),
				'vivienda' => $this->input->post('vivienda'),
				'alimentos' => $this->input->post('alimentos'),
				'transporte' => $this->input->post('transporte'),
				'tipocosecha' => $this->input->post('tipocosecha'));
				list($dia, $mes, $anio) = explode("/",$this->input->post('fechadeemision'));
				if ($mes=="01"||$mes=="02"||$mes=="03"||$mes=="04"||$mes=="05"||$mes=="06") {
					$registros['semestre']="I";
				} elseif ($mes=="07"||$mes=="08"||$mes=="09"||$mes=="10"||$mes=="11"||$mes=="12") {
					$registros['semestre']="II";
				}
				if($this->input->post('temporada')=="otra"&&$this->input->post('nuevatemporada')!=""){
					$nuevatemporada = array(
					'temporada' => ucfirst($this->input->post('nuevatemporada')));
					foreach($temporadas as $temporada){
						if(ucfirst($this->input->post('nuevatemporada'))==ucfirst($temporada->temporada)){
							$bandera=true;
							break;
						}else{
							$bandera=false;
						}
	 			 }
				 if(!$bandera){
					$this->queries_model->guardar("temporadas", $nuevatemporada);
					$registros['temporada']=ucfirst($this->input->post('nuevatemporada'));
				}
				}
				if($this->input->post('tipocontrato')=="otro"&&$this->input->post('nuevotipocontrato')!=""){
					$nuevotipocontrato = array(
					'tipocontrato' =>ucfirst( $this->input->post('nuevotipocontrato')));
					foreach($tipocontratos as $tipocontrato){
						if(ucfirst($this->input->post('nuevotipocontrato'))==ucfirst($tipocontrato->tipocontrato)){
							$bandera=true;
							break;
						}else{
							$bandera=false;
						}
	 			 }
				 if(!$bandera){
					$this->queries_model->guardar("tipocontratos", $nuevotipocontrato);
					$registros['tipocontrato']=ucfirst($this->input->post('nuevotipocontrato'));
				}
				}
				if($this->input->post('tipocosecha')=="otra"&&$this->input->post('nuevacosecha')!=""){
					$nuevacosecha = array(
					'tipocosecha' =>ucfirst( $this->input->post('nuevacosecha')));
					foreach($tipocosechas as $tipocosecha){
						if(ucfirst($this->input->post('nuevacosecha'))==ucfirst($tipocosecha->tipocosecha)){
							$bandera=true;
							break;
						}else{
							$bandera=false;
						}
	 			 }
				 if(!$bandera){
					$this->queries_model->guardar("tipocosechas", $nuevacosecha);
					$registros['tipocosecha']=ucfirst($this->input->post('nuevacosecha'));
				}
				}
			if($this->queries_model->guardar("cg_rancho_trabajador", $registros)){
				$data['exito']=true;
			}

			$data['visible']=true;
}
$contratos = $this->queries_model->obtener("cg_rancho_trabajador","*");
if($this->input->post('contrato')&&$this->input->post('count')){
	$total=$this->input->post('count');
	$x=0;
	for($i=0;$i<$total;$i++){
		$x=$i+1;
		if (null!==$this->input->post('trabajador' . $x)){


			$registro=array(
				'contrato' => $this->input->post('contrato'),
				'trabajador' => $this->input->post('trabajador' . $x)
			);
			if($this->queries_model->guardar("trabajadoresxcontrato", $registro)){
				$data['exito_t']=true;
			}
		}
	}

}
if($this->input->post('año')||$this->input->post('semestre')){
	if($this->input->post('año')&&$this->input->post('semestre')!=""){
		$año=$this->input->post('año');
		$semestre=$this->input->post('semestre');
		$sql="select * from cg_trabajadores where fechaderegistro like '%" . $año . "' and semestre='" . $semestre . "'";
		$trabajadores=$this->queries_model->customsql($sql);
		$data['trabajadores']=$trabajadores;
		$data['visible']=true;
	}
	elseif ($this->input->post('año')) {
		$año=$this->input->post('año');
		$sql="select * from cg_trabajadores where fechaderegistro like '%" . $año . "'";
		$trabajadores=$this->queries_model->customsql($sql);
		$data['trabajadores']=$trabajadores;
		$data['visible']=true;
	}
	elseif ($this->input->post('semestre')!="") {
		$semestre=$this->input->post('semestre');
		$sql="select * from cg_trabajadores where semestre='" . $semestre . "'";
		$trabajadores=$this->queries_model->customsql($sql);
		$data['trabajadores']=$trabajadores;
		$data['visible']=true;
	}
}
else {
	$trabajadores = $this->queries_model->obtener("cg_trabajadores","*");
	$data['trabajadores']=$trabajadores;
}

if($this->input->post('contrato')&&$this->input->post('trabajador')&&$this->input->post('numvacantes')&&$this->input->post('requerimientosespeciales')){
	$registros = array(
	'contrato' => $this->input->post('contrato'),
	'vacante' => ucfirst($this->input->post('vacante')),
	'numvacantes' => $this->input->post('numvacantes'),
	'ninguna' => $this->input->post('ninguna'),
	'6-1año' => $this->input->post('6-1año'),
	'1-3años' => $this->input->post('1-3años'),
	'+3años' => $this->input->post('+3años'),
	'sinescolaridad' => $this->input->post('sinescolaridad'),
	'primaria' => $this->input->post('primaria'),
	'secundaria' => $this->input->post('secundaria'),
	'tecnica' => $this->input->post('tecnica'),
	'preparatoria' => $this->input->post('preparatoria'),
	'universidad' => $this->input->post('universidad'),
	'posgrado' => $this->input->post('posgrado'),
	'requerimientosespeciales' => $this->input->post('requerimientosespeciales'));
	if($this->input->post('vacante')=="otra"&&$this->input->post('nuevotipovacante')!=""){
		$nuevavacante = array(
		'tipovacante' => ucfirst($this->input->post('nuevotipovacante')));
		foreach($tipovacantes as $vacante){
			if(ucfirst($this->input->post('nuevotipovacante'))==ucfirst($vacante->tipovacante)){
				$bandera=true;
				break;
			}else{
				$bandera=false;
			}
	 }
	 if(!$bandera){
		$this->queries_model->guardar("tipovacantes", $nuevavacante);
		$registros['vacante']=ucfirst($this->input->post('nuevotipovacante'));
	}
	}
	 if($this->queries_model->guardar("vacantesxcontrato", $registros)){
		 $data['exito_v']=true;
	 }


}


		$ranchos = $this->queries_model->obtener("cg_ranchos","*");
		$sedes = $this->queries_model->obtener("cg_sedes","*");


		$data['ranchos']=$ranchos;
		$data['sedes']=$sedes;
		$data['temporadas']=$temporadas;
		$data['tipocontratos']=$tipocontratos;
		$data['tipovacantes']=$tipovacantes;
		$data['tipocosechas']=$tipocosechas;
		$data['contratos']=$contratos;
		$data['titulo']="Contrato Rancho / Trabajador";
		$data['menu']="Contratos";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('contratort',$data);
			$this->load->view('Templates/footer',$data);
		}
		else{
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('usuariosinpermiso',$data);
			$this->load->view('Templates/footer',$data);
		}
		}
		else{
		redirect('usuarios/iniciar_sesion');
		}
		//termina proceso de logueado

	}



	public function llena_sedes()
	 {
		$this->load->model('queries_model');
		 $options = "";
		 if($this->input->post('rancho'))
		 {
			 $rancho = $this->input->post('rancho');
			 $sedes = $this->queries_model->obtener("cg_sedes","*","rancho",$rancho);
			 foreach($sedes as $sede)
			 {
				 ?>
				 <option value="<?=$sede->nombre ?>"><?=$sede->nombre ?></option>
				 <?php

			 }
	 	}
 	}
	public function normaliza ($cadena){
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕñúüù,';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
bsaaaaaaaceeeeiiiidnoooooouuuyybyRrnuuu-';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    $cadena = strtolower($cadena);
    return utf8_encode($cadena);
}
 }
