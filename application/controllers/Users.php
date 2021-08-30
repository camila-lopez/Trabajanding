<?php
/**
 * Este archivo es el controlador con funciones de user (login, registro).
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  /**
  *
  * funcion donde se carga el modelo de usuario y librerias de codeigniter
  *
  */
  public function __construct()
  {
      parent::__construct();
      $this->load->library(array('form_validation', 'session'));
      $this->load->model("User_model","usuariosmodel");
  }
  /**
  *
  * funcion donde se valida los datos de rut y contraseña, si es asi muestra el inicio segun si es trabajador o cliente cargando los datos de usuario
  *
  */
	public function login()
	{
    $clave = $this->input->post("clave");
    $rut= $this->input->post("rut");
		$query=$this->usuariosmodel->login($rut,$clave);
    if($query->tipo==1){
      $data = array(
          'id' =>$query->id,
          'rut' =>$query->rut,
          'nombre' =>$query->nombre,
          'apellido_paterno' =>$query->apellido_paterno,
          'apellido_materno' =>$query->apellido_materno,
          'email' =>$query->email,
          'telefono' =>$query->telefono,
          'clave' =>$query->clave,
          'direccion' =>$query->direccion,
          'oficio' =>$query->oficio,
          'is_logged' => TRUE,
      );
      $this->session->set_userdata($data);
      redirect('cliente/home');
    }
    if($query->tipo==2){
      $data = array(
        'id' =>$query->id,
        'rut' =>$query->rut,
        'nombre' =>$query->nombre,
        'apellido_paterno' =>$query->apellido_paterno,
        'apellido_materno' =>$query->apellido_materno,
        'email' =>$query->email,
        'telefono' =>$query->telefono,
        'clave' =>$query->clave,
        'direccion' =>$query->direccion,
        'oficio' =>$query->oficio,
        'is_logged' => TRUE,
    );
    $this->session->set_userdata($data);
      redirect('trabajador/home');
    }else{
      redirect(base_url());
    }
	}
  /**
  *
  * funcion para finalizar la sesion de un trabajador o un cliente
  *
  */
  public function logout() {
    $this->session->sess_destroy();
    redirect(base_url());
  }
  /**
  *
  * funcion para registrar un usuario ya sea cliente o trabajador
  *
  */
  public function registro()
  {
    $this->load->view('user/registro');
  }

  public function save()
  {
    $usuario["nombre"] = $this->input->post("nombre");
    $usuario["rut"]= $this->input->post("rut");
    $usuario["apellido_paterno"]= $this->input->post("apellido_paterno");
    $usuario["apellido_materno"]= $this->input->post("apellido_materno");
    $usuario["clave"]= $this->input->post("clave");
    $usuario["email"]= $this->input->post("email");
    $usuario["telefono"]= $this->input->post("telefono");
    $usuario["direccion"]= $this->input->post("direccion");
    $usuario["tipo"]= $this->input->post("tipo");
    $usuario["oficio"]= $this->input->post("oficio");
    $this->usuariosmodel->usuario_save($usuario);
    redirect(base_url("login"));
  }
  /**
  *
  * funcion para cargar la vista de sobre nosotros
  */
  public function nosotros()
  {
    $this->load->view('user/nosotros');
  }
  /**
  *
  * funcion para cargar la vista de privacidad
  */
  public function privacidad()
  {
    $this->load->view('user/privacidad');
  }
  /**
  *
  * funcion para cargar la vista de contacto
  */
  public function contacto()
  {
    $this->load->view('user/contacto');
  }
  /**
  *
  * funcion para cargar la vista de error
  */
  public function error()
  {
    $this->load->view('errors/error404');
  }
}
