<?php
/**
 * Este archivo es el modelo de usuario con funciones del cliente para acceder a la base de datos.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();

  }
  /**
  *
  * funcion para almacenar usuarios en la base de datos
  */
  function usuario_save($usuario)
  {
    $this->db->insert("usuario", $usuario);
    return $this->db->insert_id();
  }
  /**
  *
  * funcion para tomar datos de rut y clave para iniciar sesion
  */
  function login($rut,$clave)
  {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('rut', $rut);
    $this->db->where('clave', $clave);
    $query = $this->db->get();
    return $query->row();

  }
  /**
  *
  * funcion para tomar usuario en la base de datos segun su id
  */
  function get_user()
  {
    $id = $this->session->id;
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row();
  }
  /**
  *
  * funcion para actualizar usuario en la base de datos actualizando email, telefono y direccion segun id de usuario
  */
  function update_user($id,$email,$telefono,$direccion)
  {
    $data = array(
        'id' => $id,
        'email' => $email,
        'telefono' => $telefono,
        'direccion' => $direccion
        );

    $this->db->where('id', $id);
    return $this->db->update('usuario', $data);

  }
  /**
  *
  * funcion para tomar usuarios en la base de datos que sean gasfiter
  */
  function get_gasfiter()
  {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('oficio', 1);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para tomar usuarios en la base de datos que sean electricistas
  */
  function get_electricista()
  {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('oficio', 2);
    $query = $this->db->get();
    return $query->result();
  }
  /**
  *
  * funcion para tomar usuarios en la base de datos que sean cerrajero
  */
  function get_cerrajero()
  {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('oficio', 3);
    $query = $this->db->get();
    return $query->result();
  }


}
?>
