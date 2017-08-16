<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foro extends CI_Controller {

	/**
	 *  Author: Alexis Morales (alx.morales@hadoukendev.com)
	 */
	 public function index()
 	{

 	}

	public function categorias()
	{
		$data=array();
		$this->load->model('queries_model');
        
        if($this->input->post('categoria')){
			$registros = array(
				'categoria' => ucfirst($this->input->post('categoria'))

			);
			$this->load->model('queries_model');
			if($this->queries_model->guardar("cg_categorias", $registros)){
				$data['exito']=true;
			}
		}else{
			$data['exito']=false;
		}

		if($this->input->post()){
			$registros = array(
				'titulo' => ucfirst($this->input->post('titulo')),
				'categorialink' => $this->input->post('categorialink'),
				'contenido' => $this->input->post('contenido'),
				'publicadopor' => $this->input->post('publicadopor'),
				'fecha' => date("d") . "/" . date("m") . "/" . date("Y")

			);
			$this->load->model('queries_model');
			if($this->queries_model->guardar("cg_temas", $registros)){
				$data['exito_t']=true;
			}
		}else{
			$data['exito_t']=false;
		}
		$categorias=$this->queries_model->obtener("cg_categorias","*");
		$data['categorias']=$categorias;

		$data['titulo']="Temas de discusión";
		$data['menu']="Foro";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="4"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('foro',$data);
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

	public function tema($id=null)
	{
		date_default_timezone_set("America/Mexico_City");
		$data=array();
		$this->load->model('queries_model');

		$tema=$this->queries_model->obtenerfila("cg_temas","*","id",$id);
		$data['tema']=$tema;
		$data['id']=$id;



		if($this->input->post()){
			if($this->input->post('respuesta')=="No"){
				$registros = array(
					'tema' => $id,
					'alias' => $this->input->post('alias'),
					'email' => $this->input->post('email'),
					'comentario' => $this->input->post('comentario'),
					'horafecha' => date("H").":".date("i")." - ".  date("d") . "/" . date("m") . "/" . date("Y")
				);

				if($this->queries_model->guardar("cg_comentarios", $registros)){
					$data['exito']=true;
				}
		}
		elseif($this->input->post('respuesta')!="No"){
			$registros = array(
				'comentario' => $this->input->post('respuesta'),
				'alias' => $this->input->post('alias'),
				'email' => $this->input->post('email'),
				'respuesta' => $this->input->post('comentario'),
				'horafecha' => date("H").":".date("i")." - ".  date("d") . "/" . date("m") . "/" . date("Y")
			);

			if($this->queries_model->guardar("cg_respuestas", $registros)){
				$data['exito']=true;
			}
		}
		}
		else {
			$data['exito']=false;
		}
		$comentarios=$this->queries_model->obtener("cg_comentarios","*","tema",$id);
		$data['comentarios']=$comentarios;






		$data['titulo']="Tema";
		$data['menu']="Foro";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="4"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('tema',$data);
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

	public function categoria($id=null)
	{
		$data=array();
		$this->load->model('queries_model');

		$categoria=$this->queries_model->obtenerfila("cg_categorias","*","id",$id);
		$data['categoria']=$categoria;



		$data['titulo']="Categoría";
		$data['menu']="Foro";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('categoria',$data);
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





	public function foroeditor()
	{
		$data=array();
		$this->load->model('queries_model');

		if($this->input->post('categoria')){
			$registros = array(
				'categoria' => ucfirst($this->input->post('categoria'))

			);
			$this->load->model('queries_model');
			if($this->queries_model->guardar("cg_categorias", $registros)){
				$data['exito']=true;
			}
		}else{
			$data['exito']=false;
		}
		$categorias=$this->queries_model->obtener("cg_categorias","*");
		$data['categorias']=$categorias;


		if($this->input->post('titulo')){
			$registros = array(
				'titulo' => ucfirst($this->input->post('titulo')),
				'contenido' => $this->input->post('contenido'),
				'publicadopor' => $this->input->post('publicadopor'),
				'fecha' => date("d") . "/" . date("m") . "/" . date("Y")

			);
			$this->load->model('queries_model');
			if($this->queries_model->guardar("cg_temas", $registros)){
				$data['exito_t']=true;
			}
		}else{
			$data['exito_t']=false;
		}



		$data['titulo']="Foro editor";
		$data['menu']="Contenidos";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('foroeditor',$data);
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

	        $config['upload_path'] = 'uploads/boletines';
	        $config['allowed_types'] = 'zip|rar|pdf|docx|txt|jpg|bmp|png';
	        $config['remove_spaces']=TRUE;
	        $config['max_size']    = '2048';
	        $this->load->library('upload', $config);




	    if ( ! $this->upload->do_upload())
	        {
	            $this->session->set_flashdata('error', 'Hubo un error, verifique que el nombre del archivo no contenga caracteres especiales o exceda el peso e intente de nuevo.');
							redirect('contenidos/boletin');
	        }
	        else
	        {
						$this->session->set_flashdata('error', 'Archivo guardado.');
	          redirect('contenidos/boletin');



	        }

	   }
		 public function downloads($name){

		        $data = file_get_contents('uploads/boletines/'.$name);
		        force_download($name,$data);

		 }
		 public function delete($name){

		 	if(unlink("uploads/boletines/".$name)) {
		     $this->session->set_flashdata('error', 'Archivo borrado. ('.$name.')');
		     redirect('contenidos/boletin');
		 }
		 else {
		   $this->session->set_flashdata('error', 'No se pudo borrar. ('.$name.')');
		   redirect('contenidos/boletin');
		 }
		 }

}
