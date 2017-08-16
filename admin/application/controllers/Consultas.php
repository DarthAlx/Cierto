<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {

	public function __construct()
	    {
	        parent::__construct();
	        //cargamos la libreria html2pdf


	    }
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
//Consultas
	public function articulo12(){

		$data=array();
		$this->load->model('queries_model');

		$contratosrt = $this->queries_model->obtener("cg_rancho_trabajador","*");
		$data['contratosrt']=$contratosrt;

		$contratoscr = $this->queries_model->obtener("cg_cierto_rancho","*");
		$data['contratoscr']=$contratoscr;

		$data['titulo']="Articulo 12";
		$data['menu']="Consultas";

		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('art12',$data);
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
	//funcion que ejecuta la descarga del pdf
    public function downloadPdf()
    {
			$carpeta ='uploads/pdf';
				if(file_exists($carpeta))
        {
            //ruta completa al archivo
            $route = base_url($carpeta."/test.pdf");
            //nombre del archivo
            $filename = "test.pdf";
            //si existe el archivo empezamos la descarga del pdf
            if(file_exists($carpeta."/".$filename))
            {
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header('Content-disposition: attachment; filename='.basename($route));
                header("Content-Type: application/pdf");
                header("Content-Transfer-Encoding: binary");
                header('Content-Length: '. filesize($route));
                readfile($route);
            }
        }
    }


    //esta función muestra el pdf en el navegador siempre que existan
    //tanto la carpeta como el archivo pdf
    public function show()
    {
			$carpeta ='uploads/pdf';
        if(file_exists($carpeta))
        {
            $filename = "test.pdf";
            $route = base_url($carpeta."/test.pdf");
            if(file_exists($carpeta."/".$filename))
            {
                header('Content-type: application/pdf');
                readfile($route);
            }
        }
    }




  public function comunidades()
  {
		$data=array();
		$this->load->model('queries_model');
		$comunidades = $this->queries_model->obtener("cg_comunidades","*");
		$data['comunidades']=$comunidades;
		$data['titulo']="Comunidades";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('comunidades',$data);
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

	public function trabajadores()
	{
		$data=array();
		if($this->input->post()){
				$data['opc_contrato']=$this->input->post('opc_contrato');
			}
			else{
				$data['opc_contrato']="";
			}

		$this->load->model('queries_model');
		$trabajadores = $this->queries_model->obtener("cg_trabajadores","*");
		$data['trabajadores']=$trabajadores;
		$data['titulo']="Trabajadores";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('trabajadores',$data);
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
	public function ranchos()
	{
		$data=array();
		$this->load->model('queries_model');
		$ranchos = $this->queries_model->obtener("cg_ranchos","*");
		$data['ranchos']=$ranchos;
		$data['titulo']="Ranchos";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('ranchos',$data);
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
	public function contratosrt()
  {
		$data=array();
		$this->load->model('queries_model');
		$contratos = $this->queries_model->obtener("cg_rancho_trabajador","*");
		$ranchos = $this->queries_model->obtener("cg_ranchos","*");
		$data['ranchos']=$ranchos;
		$data['contratos']=$contratos;
		$data['titulo']="Contratos Rancho / Trabajador";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('contratosrt',$data);
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
	public function contratoscr()
  {
		$data=array();
		$this->load->model('queries_model');
		$contratos = $this->queries_model->obtener("cg_cierto_rancho","*");
		$ranchos = $this->queries_model->obtener("cg_ranchos","*");
		$data['ranchos']=$ranchos;
		$data['contratos']=$contratos;
		$data['titulo']="Contratos CIERTO / Rancho";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('contratoscr',$data);
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
	public function vendedores()
	{
		$data=array();
		$this->load->model('queries_model');
		$vendedores = $this->queries_model->obtener("cg_vendedores","*");
		$data['vendedores']=$vendedores;
		$data['titulo']="Vendedores";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('vendedores',$data);
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
	public function equipo()
	{
		$data=array();
		$this->load->model('queries_model');
		$integrantes = $this->queries_model->obtener("cg_equipo","*");
		$data['integrantes']=$integrantes;
		$data['titulo']="Integrantes";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('integrantes',$data);
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
	public function evaluaciones()
	{
		$data=array();
		$this->load->model('queries_model');
		$evaluaciones = $this->queries_model->obtener("cg_evaluaciones","*");
		$data['evaluaciones']=$evaluaciones;
		$data['titulo']="Evaluaciones";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('evaluaciones',$data);
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
	public function trabajador_individual($curp)
	{
		$data=array();
		$this->load->model('queries_model');
		$trabajadores = $this->queries_model->obtener("cg_trabajadores","*","curp",$curp);
		$contratos = $this->queries_model->obtener("trabajadoresxcontrato","*","trabajador",$curp);
		foreach($trabajadores as $trabajador):
		$comunidades = $this->queries_model->obtener("cg_comunidades","*","nombre_comunidad",$trabajador->comunidad);
		$data['comunidades']=$comunidades;
		endforeach;
		$data['contratos']=$contratos;
		$data['trabajadores']=$trabajadores;
		$data['titulo']="Trabajador";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('trabajador_individual',$data);
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
	public function comunidad_individual($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$comunidades = $this->queries_model->obtener("cg_comunidades","*","id",$id);
		$data['comunidades']=$comunidades;
		$data['titulo']="Comunidad";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('comunidad_individual',$data);
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
	public function rancho_individual($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$ranchos = $this->queries_model->obtener("cg_ranchos","*","id",$id);
		$contratos = $this->queries_model->obtener("cg_cierto_rancho","*","rancho",$id);
		$data['ranchos']=$ranchos;
		$data['contratos']=$contratos;
		foreach($ranchos as $rancho):
		$sedes = $this->queries_model->obtener("cg_sedes","*","rancho",$rancho->id);
		$comunidades = $this->queries_model->obtener("cg_comunidades","*","nombre_comunidad",$rancho->comunidad);
		$data['sedes']=$sedes;
		$data['comunidades']=$comunidades;
		endforeach;
		$data['titulo']="Rancho";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('rancho_individual',$data);
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
	public function contratocr_individual($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$contratos = $this->queries_model->obtener("cg_cierto_rancho","*","id",$id);
		$vacantes = $this->queries_model->obtener("vacantesxcontrato","*","contrato",$id);
		foreach($contratos as $contrato):
		$ranchos = $this->queries_model->obtener("cg_ranchos","*","id",$contrato->rancho);
		$data['ranchos']=$ranchos;
		endforeach;
		foreach($contratos as $contrato):
		$comunidades = $this->queries_model->obtener("cg_comunidades","*","nombre_comunidad",$contrato->comunidadprocedencia);
		$data['comunidades']=$comunidades;
		endforeach;
		$data['contratos']=$contratos;
		$data['vacantes']=$vacantes;
		$data['titulo']="Contrato CIERTO / Rancho";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('contratocr_individual',$data);
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
	public function contratort_individual($id)
	{
		$data=array();
		$nombres=array();
		$apts=array();
		$apms=array();
		$i=0;
		$this->load->model('queries_model');
		$contratos = $this->queries_model->obtener("cg_rancho_trabajador","*","id",$id);
		$trabajadores = $this->queries_model->obtener("trabajadoresxcontrato","*","contrato",$id);
		foreach($trabajadores as $trabajador):
		$nombres[$i] = $this->queries_model->obtener("cg_trabajadores","nombre_trabajador","curp",$trabajador->trabajador);
		$apts[$i] = $this->queries_model->obtener("cg_trabajadores","apellido_paterno","curp",$trabajador->trabajador);
		$apms[$i] = $this->queries_model->obtener("cg_trabajadores","apellido_materno","curp",$trabajador->trabajador);
		$i++;
		endforeach;
		$data['nombres']=$nombres;
		$data['apts']=$apts;
		$data['apms']=$apms;
		foreach($contratos as $contrato):
		$ranchos = $this->queries_model->obtener("cg_ranchos","*","id",$contrato->rancho);
		$data['ranchos']=$ranchos;
		endforeach;
		$data['contratos']=$contratos;
		$data['trabajadores']=$trabajadores;
		$data['titulo']="Contrato Rancho / Trabajador";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('contratort_individual',$data);
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
	public function vendedor_individual($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$vendedores = $this->queries_model->obtener("cg_vendedores","*","id",$id);
		$data['vendedores']=$vendedores;
		$data['titulo']="Vendedor";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('vendedor_individual',$data);
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
	public function equipo_individual($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$integrantes = $this->queries_model->obtener("cg_equipo","*","id",$id);
		$data['integrantes']=$integrantes;
		$data['titulo']="Integrante";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('integrante_individual',$data);
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
	public function evaluacion_individual($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$evaluaciones = $this->queries_model->obtener("cg_evaluaciones","*","id",$id);
		$data['evaluaciones']=$evaluaciones;
		$data['titulo']="Evaluación";
		$data['menu']="Consultas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('evaluacion_individual',$data);
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
