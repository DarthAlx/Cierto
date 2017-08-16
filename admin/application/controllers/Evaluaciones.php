<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluaciones extends CI_Controller {

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
//Evaluaciones

	public function evaluacion()
	{
		$data=array();
		$data['exito']=false;
		$this->load->model('queries_model');
		if($this->input->post('trabajador')&&$this->input->post('contrato')&&$this->input->post('productividad')&&$this->input->post('desempeño')&&$this->input->post('puntualidad')){
				$registros = array(
					'fechadeevaluacion' => $this->input->post('fechadeevaluacion'),
				'trabajador' => $this->input->post('trabajador'),
				'contrato' => $this->input->post('contrato'),
				'beneficio' => $this->input->post('beneficio'),
				'cual' => $this->input->post('cual'),
				'desempeño' => $this->input->post('desempeño'),
				'productividad' => $this->input->post('productividad'),
				'puntualidad' => $this->input->post('puntualidad'),
				'lider' => $this->input->post('lider'),
				'observaciones' => $this->input->post('observaciones')

			);


			if($this->queries_model->guardar("cg_evaluaciones", $registros)){
				$data['exito']=true;
			}

		}



		$trabajadores = $this->queries_model->obtener("cg_trabajadores","*");
		$data['trabajadores']=$trabajadores;
		$data['titulo']="Evaluación";
		$data['menu']="Evaluaciones";
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('evaluacion',$data);
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
	public function llena_contrato()
	 {
		$this->load->model('queries_model');
		 $options = "";
		 if($this->input->post('trabajador'))
		 {
			 $trabajador = $this->input->post('trabajador');
			 $contratos = $this->queries_model->obtener("trabajadoresxcontrato","*","trabajador",$trabajador);
			 foreach($contratos as $contrato)
			 {
				 ?>
				 <option value="<?=$contrato->contrato ?>"><?=$contrato->contrato ?></option>
				 <?php

			 }
		}
	}
}
