<?php
/**
 * Este archivo es el modelo de aviso con funciones del cliente para acceder a la base de datos.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aviso_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();

  }
  /**
  *
  * funcion para almacenar aviso en la base de datos
  */
  function save_aviso($aviso)
  {
    $this->db->insert("aviso", $aviso);
    return $this->db->insert_id();
  }
  /**
  *
  * funcion para tomar todos los avisos segun el id del cliente de la base de datos
  */
  function get_mis_avisos($id)
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('aviso');
    $this->db->where('id_cliente', $id);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para tomar todos los avisos de la base de datos
  */
  function get_avisos()
  {
    $this->db->select('*');
    $this->db->from('aviso');
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para tomar todos los avisos segun el oficio de la base de datos
  */
  function get_avisos_of($oficio)
  {
    $this->db->select('*');
    $this->db->from('aviso');
    $this->db->where('oficio', $oficio);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para eliminar el aviso de la base de datos segun su id
  */
  function delete_aviso($id_aviso)
  {
    $this->db->where('id', $id_aviso);
    return $this->db->delete('aviso');
  }
  /**
  *
  * funcion para tomar el aviso de la base de datos segun su id
  */
  function get_aviso($id)
  {
    $this->db->select('*');
    $this->db->from('aviso');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }




}
?>
