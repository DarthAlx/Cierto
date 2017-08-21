<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function usuario_por_nombre_contrasena($usuario, $contraseña){
    $this->db->select('id, usuario, contraseña, tipo');
    $this->db->from('cg_usuarios');
    $this->db->where('usuario', $usuario);
    $this->db->where('contraseña', $contraseña);
    $consulta = $this->db->get();
    $resultado = $consulta->row();
    return $resultado;
  }
  public function eliminarregistro($tabla,$clave, $clave_c){
    $this->db->where($clave, $clave_c);
    $this->db->delete($tabla);
    

  }
}
