<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivos extends CI_Controller {

public function __construct() {
        parent::__construct();

        $this->folder = 'uploads/';

        }

public function index()
    {
			$data = array();
			$data['titulo']="Subir archivos";
			$data['menu']="Archivos";
			$this->load->model('queries_model');
			$files = get_filenames('uploads/' . $this->session->userdata('email').'/archivos', FALSE);
      $data['error'] = $this->session->flashdata('error');
	    if($files){
	        $data['files']=$files;

	        }else{
	            $data['files']=NULL;
	        }
			//proceso de logueado
			if($this->session->userdata('logueado')){
			if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="2"||$this->session->userdata('tipo')=="3"||$this->session->userdata('tipo')=="4"){
				$data['tipo'] = $this->session->userdata('tipo');

				$this->load->view('Templates/header',$data);
				$this->load->view('upload_form',$data);
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

//************ CARGA DE ARCHIVOS  ****************
public function do_upload()
    {
				$data = array();

        $config['upload_path'] = 'uploads/' . $this->session->userdata('email').'/archivos';
        $config['allowed_types'] = 'zip|rar|pdf|docx|txt|jpg|bmp|png';
        $config['remove_spaces']=TRUE;
        $config['max_size']    = '2048';
        $this->load->library('upload', $config);




    if ( ! $this->upload->do_upload())
        {
            $this->session->set_flashdata('error', 'Hubo un error, verifique que el nombre del archivo no contenga caracteres especiales o exceda el peso e intente de nuevo.');
						redirect('archivos/');
        }
        else
        {
					$this->session->set_flashdata('error', 'Archivo guardado.');
          redirect('archivos/');



        }

   }

public function info(){

    $files = get_filenames('uploads/' . $this->session->userdata('email').'/archivos', FALSE);

    if($files){
        $data['files']=$files;

        }else{
            $data['files']=NULL;
        }
   $this->load->view('filenames',$data);

}
//************ DESCARGA DE ARCHIVOS ***********************

public function downloads($name){

       $data = file_get_contents('uploads/' . $this->session->userdata('email').'/'.'archivos/'.$name);
       force_download($name,$data);

}
public function delete($name){

	if(unlink("uploads/" .$this->session->userdata('email').'/'.'archivos/'.$name)) {
    $this->session->set_flashdata('error', 'Archivo borrado. ('.$name.')');
    redirect('archivos/');
}
else {
  $this->session->set_flashdata('error', 'No se pudo borrar. ('.$name.')');
  redirect('archivos/');
}
}

}
