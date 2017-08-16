<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 *  Author: Alexis Morales (alx.morales@hadoukendev.com)
	 */
	public function index()
	{
		$data=array();
		$this->load->model('queries_model');



		$data['titulo']="Inicio";
		$data['menu']="Inicio";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"||$this->session->userdata('tipo')=="4"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('prueba',$data);
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

}
