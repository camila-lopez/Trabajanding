<?php
/**
 * Este archivo es el modelo calificaciones con funciones del cliente para acceder a la base de datos.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificacion_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();

  }
  /**
  *
  * funcion para almacenar comentario en la base de datos
  */
  function save_comentario($comentario)
  {
    $this->db->insert("comentario", $comentario);
    return $this->db->insert_id();
  }
  /**
  *
  * funcion para tomar comentarios en la base de datos segun id del trabajador
  */
  function get_mis_comentarios($id)
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('comentario');
    $this->db->where('id_trabajador', $id);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para mostrar todos los comentarios hechos segun id de cliente hacia un id trabajador
  */
  function get_comentarios_join($id)
  {
    $id = $this->session->id;
    $this->db->select('u.id as id_cliente, u.nombre, u.apellido_paterno, c.id, c.contenido, c.nota');
    $this->db->from('usuario as u');
    $this->db->join('comentario as c', 'c.id_cliente = u.id', 'inner');
    $this->db->where('id_trabajador', $id);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para mostrar nota hacia un trabajador segun su id
  */
  function get_nota($id)
  {
    $id = $this->session->id;
    $this->db->select('AVG(nota) as avg_nota');
    $this->db->from('comentario');
    $this->db->where('id_trabajador', $id);
    $query = $this->db->get();
    return $query->row()->avg_nota;
  }
  /**
  *
  * funcion para mostrar comentario segun id de trabajador, lo cual despues sirve para tomar cantidad de comentarios segun trabajador
  */
  function get_cant_comentarios($id)
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('comentario');
    $this->db->where('id_trabajador', $id);
    $query = $this->db->get();
    $count=$query->result();
    return count($count);

  }

}
?>
