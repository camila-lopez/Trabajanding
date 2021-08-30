<?php
/**
 * Este archivo es el modelo de servicio con funciones del cliente para acceder a la base de datos.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }
  /**
  *
  * funcion para almacenar servicios en la base de datos
  */
  function save_servicio($servicio)
  {
    $this->db->insert("servicio", $servicio);
    return $this->db->insert_id();
  }
  /**
  *
  * funcion para tomar avisos segun id del servicio
  */
  function get_servicio($id)
  {
    $this->db->select('*');
    $this->db->from('servicio');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }
  /**
  *
  * funcion para tomar servicio segun id del trabajador de la base de datos
  */
  function get_servicios_trabajador($id)
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('servicio');
    $this->db->where('id_trabajador', $id);
    $this->db->order_by('fecha','DESC');
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para tomar servicio segun id del cliente de la base de datos
  */
  function get_servicios_cliente($id)
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('servicio');
    $this->db->where('id_cliente', $id);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para eliminar servicio segun id del servicio de la base de datos
  */
  function delete_servicio($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('servicio');
  }
  /**
  *
  * funcion para actualizar servicio segun su id de la base de datos
  */
  function update_servicio($id)
  {
    $titulo = $this->input->post('titulo');
    $detalles = $this->input->post('detalles');
    $fecha = $this->input->post('fecha');
    $direccion = $this->input->post('direccion');
    $nombre = $this->input->post('nombre');

    $data = array(
        'id' => $id,
        'titulo' => $email,
        'detalles' => $detalles,
        'fecha' => $fecha,
        'direccion' => $direccion,
        'nombre' => $nombre
        );

    $this->db->where('id', $id);
    return $this->db->update('servicio', $data);

  }
  /**
  *
  * funcion para actualizar el estado del servicio de publicado a realizado por un trabajador
  */
  function update_estado($id)
  {
    $data = array(
        'estado' => 2
        );

    $this->db->where('id', $id);
    return $this->db->update('servicio', $data);
  }
  /**
  *
  * funcion para mostrar todos los servicios hechos segun id de trabajador hacia un id cliente
  */
  function get_servicios_join($id)
  {
    $id = $this->session->id;
    $this->db->select('u.id as id_trabajador, u.nombre, u.apellido_paterno, s.id, s.titulo, s.detalles, s.fecha, s.total');
    $this->db->from('usuario as u');
    $this->db->join('servicio as s', 's.id_trabajador = u.id', 'inner');
    $this->db->where('id_cliente', $id);
    $this->db->order_by('s.fecha','DESC');
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para mostrar todos servicios activos segun estado=1
  */
  function get_servicios_activos($id)
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('servicio');
    $this->db->where('estado', 1);
    $this->db->where('id_trabajador', $id);
    $this->db->order_by('fecha','DESC');
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para mostrar todos servicios activos segun estado=1 entre un trabajador y un cliente
  */
  function get_servicios_join_activos($id)
  {
    $id = $this->session->id;
    $this->db->select('u.id as id_trabajador, u.nombre, u.apellido_paterno, s.id, s.titulo, s.detalles, s.fecha, s.total');
    $this->db->from('usuario as u');
    $this->db->join('servicio as s', 's.id_trabajador = u.id', 'inner');
    $this->db->where('estado', 1);
    $this->db->where('id_cliente', $id);
    $this->db->order_by('s.fecha','DESC');
    $query = $this->db->get();
    return $query->result();
  }
}
?>
