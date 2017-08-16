<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {

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
  public function comunidad()
  {
		$data=array();
		if($this->input->post()){
			$nombre_comunidad= $this->input->post('nombre_comunidad');
			$municipio= $this->input->post('municipio');
			$estado= $this->input->post('estado');
			$pais= $this->input->post('pais');
			$poblacion= $this->input->post('poblacion');
			$servicios_cuenta= $this->input->post('servicios_cuenta');
			$servicios_necesita= $this->input->post('servicios_necesita');
			$caracteristicas= $this->input->post('caracteristicas');
			$mapa= $this->input->post('mapa');
			$nombre_contacto= $this->input->post('nombre_contacto');
			$telefono= $this->input->post('telefono');
			$cargo = $this->input->post('cargo');


			$registros = array(
				'nombre_comunidad' => $nombre_comunidad,
				'municipio' => $municipio,
				'estado' => $estado,
				'pais' => $pais,
				'poblacion' => $poblacion,
				'servicios_cuenta' => $servicios_cuenta,
				'servicios_necesita' => $servicios_necesita,
				'caracteristicas' => $caracteristicas,
				'mapa' => $mapa,
				'nombre_contacto' => $nombre_contacto,
				'telefono' => $telefono,
				'cargo' => $cargo );

			$this->load->model('queries_model');
			if($this->queries_model->guardar("cg_comunidades", $registros)){
				$data['exito']=true;
			}

			//redirect('informes');

		}else{
      $data['exito']=false;
    }

    $data['titulo']="Comunidad";
    $data['menu']="Registro";
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('comunidad',$data);
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

	public function trabajador()
	{
		$data=array();
		$data['existe']=false;
		$this->load->model('queries_model');
		if($this->input->post('curp')&&$this->input->post('nombre_trabajador')&&$this->input->post('apellido_paterno')&&$this->input->post('apellido_materno')){
				$registros = array(
				'nombre_trabajador' => $this->input->post('nombre_trabajador'),
				'apellido_paterno' => $this->input->post('apellido_paterno'),
				'apellido_materno' => $this->input->post('apellido_materno'),
				'curp' => $this->input->post('curp'),
				'direccion' => $this->input->post('direccion'),
				'municipio' => $this->input->post('municipio'),
				'estado' => $this->input->post('estado'),
				'comunidad' => $this->input->post('comunidad'),
				'genero' => $this->input->post('genero'),
				'fechadenacimiento' => $this->input->post('fechadenacimiento'),
				'edad' => $this->input->post('edad'),
				'telefonopersonal' => $this->input->post('telefonopersonal'),
				'telefonodecaseta' => $this->input->post('telefonodecaseta'),
				'escolaridad' => $this->input->post('escolaridad'),
				'idioma' => $this->input->post('idioma1')." ".$this->input->post('idioma2')." ".$this->input->post('idioma3'),
				'fechaderegistro' => $this->input->post('fechaderegistro'),
				'semestre' => '',
				'correo' => $this->input->post('correo'),
				'relacion' => $this->input->post('relacion'),
				'nombre_contacto' => $this->input->post('nombre_contacto'),
				'telefonocontacto' => $this->input->post('telefonocontacto'),
				'exp1' => $this->input->post('exp1'),
				'exp2' => $this->input->post('exp2'),
				'exp3' => $this->input->post('exp3'),
				'exp5' => $this->input->post('exp5'),
				'exp6' => $this->input->post('exp6'),
				'exp7' => $this->input->post('exp7'),
				'exp8' => $this->input->post('exp8'),
                'exp8.5' => $this->input->post('exp8.5'),
				'exp9' => $this->input->post('exp9'),
				'exp10' => $this->input->post('exp10'),
				'exp11' => $this->input->post('exp11'),
				'exp12' => implode(",",$this->input->post('exp12')),
                'exp13' => $this->input->post('exp13'),
                'preferencia' => $this->input->post('preferencia'),
				'contrato' => 'Sin',
				'fechadereinscripcion' => $this->input->post('fechaderegistro'));

				list($dia, $mes, $anio) = explode("/",$this->input->post('fechaderegistro'));
				if ($mes=="01"||$mes=="02"||$mes=="03"||$mes=="04"||$mes=="05"||$mes=="06") {
					$registros['semestre']="I";
				} elseif ($mes=="07"||$mes=="08"||$mes=="09"||$mes=="10"||$mes=="11"||$mes=="12") {
					$registros['semestre']="II";
				}

			$curps = $this->queries_model->obtener("cg_trabajadores","curp");
			foreach($curps as $curp){
				if ($curp->curp==$this->input->post('curp')){
					$data['existe']=true;
					break;
				}
				else{
					$data['existe']=false;
				}
			}
            if($this->input->post('nuevoproducto')!=""){
                    $productos = $this->queries_model->obtener("productos","*");
					$nuevoproducto = array(
					'producto' => ucfirst( $this->input->post('nuevoproducto')));
					foreach($productos as $producto){
						if(ucfirst($this->input->post('nuevoproducto'))==ucfirst($producto->producto)){
							$bandera=true;
							break;
						}else{
							$bandera=false;
						}
	 			 }
				 if(!$bandera){
					$this->queries_model->guardar("productos", $nuevoproducto);
					$registros['exp12']=implode(",",$this->input->post('exp12')) . "," . ucfirst($this->input->post('nuevoproducto'));
				
				}
                                                  }
			if(!$data['existe']){
			if($this->queries_model->guardar("cg_trabajadores", $registros)){
			$data['exito']=true;
			}

			}
			else{
			$data['exito']=false;
			}



		}else{
      $data['exito']=false;
			$data['existe']=false;
    }
		$trabajadores = $this->queries_model->obtener("cg_trabajadores","*");
		$data['trabajadores']=$trabajadores;
		if($this->input->post('trabajador')){
			$actualizar = array('fechadereinscripcion' => $this->input->post('fechadereinscripcion'));
			if($this->queries_model->guardar("cg_trabajadores", $actualizar,'curp',$this->input->post('trabajador'))){
				$data['exito_r']=true;
			}

		}
		else{
		$data['exito_r']=false;
		}


		$data['titulo']="Trabajador";
		$data['menu']="Registro";
		$comunidades = $this->queries_model->obtener("cg_comunidades","nombre_comunidad");
		$data['comunidades']=$comunidades;
        $productos = $this->queries_model->obtener("productos","*");
		$data['productos']=$productos;

		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('trabajador',$data);
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
	public function rancho()
	{
		$data=array();
		$data['existe']=false;
		$this->load->model('queries_model');
		if($this->input->post('fechaderegistro')&&$this->input->post('estado')&&$this->input->post('nombrerancho')&&$this->input->post('direccion')){
				$registros = array(
				'fechaderegistro' => $this->input->post('fechaderegistro'),
				'semestre' => '',
				'nombrerancho' => $this->input->post('nombrerancho'),
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
				'numtrabajadores' => $this->input->post('numtrabajadores'),
				'sedes' => 'No');

				list($dia, $mes, $anio) = explode("/",$this->input->post('fechaderegistro'));
				if ($mes=="01"||$mes=="02"||$mes=="03"||$mes=="04"||$mes=="05"||$mes=="06") {
					$registros['semestre']="I";
				} elseif ($mes=="07"||$mes=="08"||$mes=="09"||$mes=="10"||$mes=="11"||$mes=="12") {
					$registros['semestre']="II";
				}
			$ranchos = $this->queries_model->obtener("cg_ranchos","nombrerancho");
			foreach($ranchos as $rancho){
				if (strtoupper($rancho->nombrerancho)==strtoupper($this->input->post('nombrerancho'))){
					$data['existe']=true;
					break;
				}
				else{
					$data['existe']=false;
				}
			}
			if(!$data['existe']){
			if($this->queries_model->guardar("cg_ranchos", $registros)){
				$data['exito']=true;
			}
			}
			else{
			$data['exito']=false;
			}



		}else{
      $data['exito']=false;
			$data['existe']=false;
    }

		if($this->input->post('rancho')){
			$registrarsede = array(
				'nombre' => $this->input->post('nombre'),
				'municipio' => $this->input->post('municipio'),
				'estado' => $this->input->post('estado'),
				'comunidad' => $this->input->post('comunidad'),
				'rancho' => $this->input->post('rancho')
			);
			$iddelrancho=$this->input->post('rancho');
			if ($this->session->userdata('tipo')=="3") {
				$registrarsede['rancho']=$this->session->userdata('idenlace');
				$iddelrancho=$this->session->userdata('idenlace');
			}
			if($this->queries_model->guardar("cg_sedes", $registrarsede)){
			$actualizar = array('sedes' => 'Si');
			$this->queries_model->guardar("cg_ranchos", $actualizar,'id',$iddelrancho);
				$data['exito_r']=true;
			}

		}
		else{
		$data['exito_r']=false;
		}

		$ranchos = $this->queries_model->obtener("cg_ranchos","*");
		$data['ranchos']=$ranchos;
		$data['titulo']="Rancho";
		$data['menu']="Registro";
		$comunidades = $this->queries_model->obtener("cg_comunidades","nombre_comunidad");
		$data['comunidades']=$comunidades;
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"||$this->session->userdata('tipo')=="3"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('rancho',$data);
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
	public function vendedor()
	{
		$data=array();
		$data['exito']=false;
		$this->load->model('queries_model');
		if($this->input->post('nombre')&&$this->input->post('direccion')&&$this->input->post('municipio')&&$this->input->post('estado')){
				$registros = array(
				'fechaderegistro' => $this->input->post('fechaderegistro'),
				'nombre' => $this->input->post('nombre'),
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


			if($this->queries_model->guardar("cg_vendedores", $registros)){
				$data['exito']=true;
			}

		}




		$data['titulo']="Vendedor";
		$data['menu']="Registro";
		$comunidades = $this->queries_model->obtener("cg_comunidades","nombre_comunidad");
		$data['comunidades']=$comunidades;
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('vendedor',$data);
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
		$data['exito']=false;
		$data['exito_r']=false;
		$this->load->model('queries_model');
		if($this->input->post('nombre')&&$this->input->post('direccion')&&$this->input->post('municipio')&&$this->input->post('estado')&&$this->input->post('perfil')){
				$registros = array(
				'nombre' => $this->input->post('nombre'),
				'perfil' => $this->input->post('perfil'),
				'direccion' => $this->input->post('direccion'),
				'municipio' => $this->input->post('municipio'),
				'estado' => $this->input->post('estado'),
				'pais' => $this->input->post('pais'),
				'cp' => $this->input->post('cp'),
				'telefono' => $this->input->post('telefono'),
				'correo' => $this->input->post('correo'),
				'habilidades' => $this->input->post('habilidades'),
				'fechadeingreso' => $this->input->post('fechadeingreso'),
				'contrato' => $this->input->post('contrato')
			);


			if($this->queries_model->guardar("cg_equipo", $registros)){
				$data['exito']=true;
			}

		}


		if($this->input->post('integrante')){
			$actualizar = array('contrato' => $this->input->post('contrato'));
			if($this->queries_model->guardar("cg_equipo", $actualizar,'id',$this->input->post('integrante'))){
				$data['exito_r']=true;
			}

		}
		else{
		$data['exito_r']=false;
		}

		$integrantes = $this->queries_model->obtener("cg_equipo","*");
		$data['integrantes']=$integrantes;




		$data['titulo']="Equipo";
		$data['menu']="Registro";
		//proceso de logueado
	if($this->session->userdata('logueado')){
		if($this->session->userdata('tipo')=="1"){
			$data['tipo'] = $this->session->userdata('tipo');
			$this->load->view('Templates/header',$data);
			$this->load->view('equipo',$data);
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
