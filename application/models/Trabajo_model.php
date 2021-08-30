<?php
/**
 * Este archivo es el modelo de trabajo con funciones del cliente para acceder a la base de datos.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajo_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }
  /**
  *
  * funcion para almacenar trabajo en la base de datos
  */
  function save_trabajo($trabajo)
  {
    $this->db->insert("trabajo", $trabajo);
    return $this->db->insert_id();
  }
  /**
  *
  * funcion para tomar todos los trabajos de la base de datos segun id del trabajador
  */
  function get_mis_trabajos($id)
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('trabajo');
    $this->db->where('id_trabajador', $id);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para tomar todos los trabajos de la base de datos
  */
  function get_trabajos()
  {
    $this->db->select('*');
    $this->db->from('trabajos');
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para eliminar trabajo segun id del trabajo de la base de datos
  */
  function delete_trabajo($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('trabajo');
  }
}
?>
