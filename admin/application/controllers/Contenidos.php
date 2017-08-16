<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenidos extends CI_Controller {

	/**
	 *  Author: Alexis Morales (alx.morales@hadoukendev.com)
	 */
	 public function index()
 	{

 	}

	public function boletin()
	{
		$data=array();
		$this->load->model('queries_model');

		if($this->input->post()){

			$publicadopor= $this->input->post('publicadopor');
			$contenido= htmlentities($this->input->post('contenido'));




			$registros = array(
				'publicadopor' => $publicadopor,
				'contenido' => $contenido,
				'fecha' => date("d") . "/" . date("m") . "/" . date("Y")
				);

			$this->load->model('queries_model');
			if($this->queries_model->guardar("cg_boletines", $registros)){
				$data['exito']=true;
			}

			//redirect('informes');

		}else{
      $data['exito']=false;
    }

		$boletines=$this->queries_model->customsql("SELECT * FROM cg_boletines WHERE id = (SELECT MAX(id) FROM cg_boletines) ");
		$data['boletines']=$boletines;
		$files = get_filenames('uploads/boletines', FALSE);
if($files){
				$data['files']=$files;

				}else{
						$data['files']=NULL;
				}




		$data['titulo']="Boletín";
		$data['menu']="Contenidos";
		//proceso de logueado
		if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('editor',$data);
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
