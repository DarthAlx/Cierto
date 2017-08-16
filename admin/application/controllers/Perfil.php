<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

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
//Perfiles
	public function boletin($id=NULL)
	{
		$data=array();
		$this->load->model('queries_model');
		$links=$this->queries_model->obtener("cg_boletines","*");
		$data['links']=$links;
		$boletin=$this->queries_model->obtenerfila("cg_boletines","*","id",$id);
		$data['boletin']=$boletin;
		$data['titulo']="Boletín informativo";
		$data['menu']="Boletín";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="4"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('vistaboletin',$data);
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
	public function faqs()
	{
		$data=array();
		$this->load->model('queries_model');

		$data['titulo']="¿Tienes dudas?";
		$data['menu']="Dudas";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="4"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('faqs',$data);
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

	public function trabajador($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$trabajador = $this->queries_model->obtenerfila("cg_trabajadores","*","curp",$id);
		$contrato = $this->queries_model->obtenerfila("trabajadoresxcontrato","*","trabajador",$id);
		$boletines=$this->queries_model->customsql("SELECT * FROM cg_boletines WHERE id = (SELECT MAX(id) FROM cg_boletines) ");
		$data['boletines']=$boletines;
		$comunidad = $this->queries_model->obtenerfila("cg_comunidades","*","nombre_comunidad",$trabajador->comunidad);
		$data['comunidad']=$comunidad;
		$data['files']=NULL;
		$files = get_filenames('uploads/' . $this->session->userdata('email').'/avatar', FALSE);
		$data['files']=$files;
		$boletines=$this->queries_model->customsql("SELECT * FROM cg_boletines WHERE id = (SELECT MAX(id) FROM cg_boletines) ");
		$data['boletines']=$boletines;

		$data['contrato']=$contrato;
		$data['trabajador']=$trabajador;
		$data['titulo']="Trabajador";
		$data['menu']="Perfil";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="4"&&$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('perfiltrabajador',$data);
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

	public function rancho($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$rancho = $this->queries_model->obtenerfila("cg_ranchos","*","id",$id);
		$contratos = $this->queries_model->obtener("cg_cierto_rancho","*","rancho",$id);
		$data['files']=NULL;
		$files = get_filenames('uploads/' . $this->session->userdata('email').'/avatar', FALSE);
		$data['files']=$files;
		$data['rancho']=$rancho;
		$data['contratos']=$contratos;

		$sedes = $this->queries_model->obtener("cg_sedes","*","rancho",$rancho->id);
		$comunidades = $this->queries_model->obtener("cg_comunidades","*","nombre_comunidad",$rancho->comunidad);
		$data['sedes']=$sedes;
		$data['comunidades']=$comunidades;

		$data['titulo']="Rancho";
		$data['menu']="Perfil";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="3"&&$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('perfilrancho',$data);
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

	public function vendedor($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$vendedor = $this->queries_model->obtenerfila("cg_vendedores","*","id",$id);
		$data['files']=NULL;
		$files = get_filenames('uploads/' . $this->session->userdata('email').'/avatar', FALSE);
		$data['files']=$files;
		$data['vendedor']=$vendedor;
		$data['titulo']="Vendedor";
		$data['menu']="Perfil";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="2"||$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('perfilvendedor',$data);
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
	public function integrante($id)
	{
		$data=array();
		$this->load->model('queries_model');
		$integrante = $this->queries_model->obtenerfila("cg_equipo","*","id",$id);
		$data['integrante']=$integrante;
		$data['files']=NULL;
		$files = get_filenames('uploads/' . $this->session->userdata('email').'/avatar', FALSE);
		$data['files']=$files;
		$boletines=$this->queries_model->customsql("SELECT * FROM cg_boletines WHERE id = (SELECT MAX(id) FROM cg_boletines) ");
		$data['boletines']=$boletines;
		$data['error'] = $this->session->flashdata('error');
		$data['titulo']="Integrante";
		$data['menu']="Perfil";

		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"&&$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('perfilcierto',$data);
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

	public function modificarperfilcierto($id)
	{
		$data=array();
		$data['exito']=false;
		$data['id']=$id;

		$this->load->model('queries_model');

		if($this->input->post()){
				$registros = array(

				'perfil' => $this->input->post('perfil'),
				'direccion' => $this->input->post('direccion'),
				'municipio' => $this->input->post('municipio'),
				'estado' => $this->input->post('estado'),
				'pais' => $this->input->post('pais'),
				'cp' => $this->input->post('cp'),
				'telefono' => $this->input->post('telefono'),
				'correo' => $this->input->post('correo'),
				'habilidades' => $this->input->post('habilidades'),

				'contrato' => $this->input->post('contrato')
			);


			if($this->queries_model->guardar("cg_equipo", $registros,"id",$id)){
				$data['exito']=true;
			}

		}
		$integrante = $this->queries_model->obtenerfila("cg_equipo","*","id",$id);
		$data['integrante']=$integrante;






		$data['titulo']="Editar Perfil";
		$data['menu']="Perfil";
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"&&$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('modificarperfilcierto',$data);
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

	public function modificarperfilvendedor($id)
	{
		$data=array();
		$data['exito']=false;
		$data['id']=$id;
		$this->load->model('queries_model');
		if($this->input->post()){
				$registros = array(

				'direccion' => $this->input->post('direccion'),
				'municipio' => $this->input->post('municipio'),
				'estado' => $this->input->post('estado'),
				'pais' => $this->input->post('pais'),
				'cp' => $this->input->post('cp'),
				'comunidad' => $this->input->post('comunidad'),
				'telefono' => $this->input->post('telefono'),
				'correo' => $this->input->post('correo'),
				'web' => $this->input->post('web'),
				'nombrecontacto' => $this->input->post('nombrecontacto'),
				'telefonocontacto' => $this->input->post('telefonocontacto'),
				'cargo' => $this->input->post('cargo')
			);


			if($this->queries_model->guardar("cg_vendedores", $registros,"id",$id)){
				$data['exito']=true;
			}

		}
		$vendedor = $this->queries_model->obtenerfila("cg_vendedores","*","id",$id);
		$data['vendedor']=$vendedor;




		$data['titulo']="Editar Perfil";
		$data['menu']="Perfil";
		$comunidades = $this->queries_model->obtener("cg_comunidades","nombre_comunidad");
		$data['comunidades']=$comunidades;
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="2"&&$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('modificarperfilvendedor',$data);
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

	public function modificarperfilrancho($id)
	{
		$data=array();

		  $data['exito']=false;
		$this->load->model('queries_model');
		if($this->input->post()){
				$registros = array(

				'direccion' => $this->input->post('direccion'),
				'municipio' => $this->input->post('municipio'),
				'estado' => $this->input->post('estado'),
				'pais' => $this->input->post('pais'),
				'codigopostal' => $this->input->post('codigopostal'),
				'comunidad' => $this->input->post('comunidad'),
				'telefonoempresa' => $this->input->post('telefonoempresa'),
				'correoelectronico' => $this->input->post('correoelectronico'),
				'paginaweb' => $this->input->post('paginaweb'),
				'nombrecontacto' => $this->input->post('nombrecontacto'),
				'telefonocontacto' => $this->input->post('telefonocontacto'),
				'cargo' => $this->input->post('cargo'),
				'tipo' => $this->input->post('tipo'),
				'numtrabajadores' => $this->input->post('numtrabajadores'));






			if($this->queries_model->guardar("cg_ranchos", $registros,"id",$id)){
				$data['exito']=true;
			}




		}


		$data['id']=$id;
		$rancho = $this->queries_model->obtenerfila("cg_ranchos","*","id",$id);
		$data['rancho']=$rancho;
		$data['titulo']="Editar perfil";
		$data['menu']="Perfil";
		$comunidades = $this->queries_model->obtener("cg_comunidades","nombre_comunidad");
		$data['comunidades']=$comunidades;
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="3"&&$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('modificarperfilrancho',$data);
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

	public function modificarperfiltrabajador($id)
	{
		$data=array();
		$data['id']=$id;
		$data['exito']=false;
		$this->load->model('queries_model');
        if($this->input->post('correo')){
            
            $registrosuser = array(

				'usuario' => $this->input->post('correo'),
				'email' => $this->input->post('correo')
				);
            $this->queries_model->guardar("cg_usuarios", $registrosuser,"idenlace",$id);
        }
		if($this->input->post()){
				$registros = array(

				'direccion' => $this->input->post('direccion'),
				'municipio' => $this->input->post('municipio'),
				'estado' => $this->input->post('estado'),
				'comunidad' => $this->input->post('comunidad'),

				'telefonopersonal' => $this->input->post('telefonopersonal'),
				'telefonodecaseta' => $this->input->post('telefonodecaseta'),

				'correo' => $this->input->post('correo'),
				'relacion' => $this->input->post('relacion'),
				'nombre_contacto' => $this->input->post('nombre_contacto'),
				'telefonocontacto' => $this->input->post('telefonocontacto')
				);
			if($this->queries_model->guardar("cg_trabajadores", $registros,"curp",$id)){
			$data['exito']=true;
			}

			}
        
        









		$trabajador = $this->queries_model->obtenerfila("cg_trabajadores","*","curp",$id);
		$data['trabajador']=$trabajador;
		$data['titulo']="Trabajador";
		$data['menu']="Perfil";
		$comunidades = $this->queries_model->obtener("cg_comunidades","nombre_comunidad");
		$data['comunidades']=$comunidades;

		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="4"&&$this->session->userdata('idenlace')==$id){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('modificarperfiltrabajador',$data);
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



	public function do_upload()
	    {
					$data = array();

	        $config['upload_path'] = 'uploads/' . $this->session->userdata('email').'/avatar';
	        $config['allowed_types'] = 'jpg|png|bmp';
	        $config['remove_spaces']=TRUE;
	        $config['max_size']    = '2048';
					$config['file_name']    = 'avatar.png';
					$config['overwrite']    = TRUE;


	        $this->load->library('upload', $config);





	    if ( ! $this->upload->do_upload())
	        {
	            $this->session->set_flashdata('error', 'Hubo un error, intente de nuevo.');
							if($this->session->userdata('tipo')==1){
								redirect('perfil/integrante/'.$this->session->userdata('idenlace'));
							}
							if($this->session->userdata('tipo')==2){
								redirect('perfil/vendedor/'.$this->session->userdata('idenlace'));
							}
							if($this->session->userdata('tipo')==3){
								redirect('perfil/rancho/'.$this->session->userdata('idenlace'));
							}
							if($this->session->userdata('tipo')==4){
								redirect('perfil/trabajador/'.$this->session->userdata('idenlace'));
							}

	        }
	        else
	        {
						$this->session->set_flashdata('error', 'Archivo guardado.');
						if($this->session->userdata('tipo')==1){
							redirect('perfil/integrante/'.$this->session->userdata('idenlace'));
						}
						if($this->session->userdata('tipo')==2){
							redirect('perfil/vendedor/'.$this->session->userdata('idenlace'));
						}
						if($this->session->userdata('tipo')==3){
							redirect('perfil/rancho/'.$this->session->userdata('idenlace'));
						}
						if($this->session->userdata('tipo')==4){
							redirect('perfil/trabajador/'.$this->session->userdata('idenlace'));
						}
						}





	   }




}
