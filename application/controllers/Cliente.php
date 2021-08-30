<?php
/**
 * Este archivo es el controlador con funciones del cliente.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

/**
*
* funcion donde se cargan los modelos y librerias de codeigniter y modelos de user, servicio, calificacion y aviso
*
*/

  public function __construct()
  {
      parent::__construct();
      $this->load->library(array('form_validation', 'session'));
      $this->load->model("User_model","usuariosmodel");
      $this->load->model("Aviso_model","avisosmodel");
      $this->load->model("Servicio_model","serviciosmodel");
      $this->load->model("Calificacion_model","calificacionesmodel");
  }
  /**
  *
  * funcion donde se carga la vista de inicio del cliente
  *
  */
  public function home()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
      $this->load->view('cliente/home');
    }
  }
  /**
  *
  * funcion donde se carga los datos del usuario
  */
  public function mis_datos()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
        $datos['info']= $this->usuariosmodel->get_user($id);
        $datos['aviso']= $this->avisosmodel->get_mis_avisos($id);
        $this->load->view('cliente/perfil', $datos);
      }
  }
  /**
  *
  * funcion donde se toman los datos del formulario y actualiza los datos del cliente
  */
  public function update_user()
  {
    $id = $this->session->id;
    $email = $this->input->post('email');
    $telefono = $this->input->post('telefono');
    $direccion = $this->input->post('direccion');

    $this->usuariosmodel->update_user($id,$email,$telefono,$direccion);
    redirect(base_url("cliente/perfil"));
  }
  /**
  *
  * funcion donde se carga la vista de agendar servicio
  */
  public function agendar()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
        $data= $this->usuariosmodel->get_user($id);
        $this->load->view('cliente/agendar_servicio', $data);
      }
  }
  /**
  *
  * funcion donde se toman los datos del cliente y se envian a la vista de incio
  */
  public function agendar_servicio()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $aviso["id_cliente"] = $this->session->id;
    $aviso["oficio"] = $this->input->post("oficio");
    $aviso["fecha"] = $this->input->post("fecha");
    $aviso["titulo"] = $this->input->post("titulo");
    $aviso["nombre"] = $this->input->post("nombre");
    $aviso["direccion"] = $this->input->post("direccion");
    $aviso["telefono"] = $this->input->post("telefono");
    $aviso["detalles"] = $this->input->post("detalles");

    $this->avisosmodel->save_aviso($aviso);
    redirect(base_url("cliente/home"));
    }
  }
  /**
  *
  * funcion donde se carga la vista de 'mis servicios' con los datos del servicio solicitados del cliente
  */
  public function mis_servicios()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
        $data['servicios']= $this->serviciosmodel->get_servicios_join($id);
        $data['activos']= $this->serviciosmodel->get_servicios_join_activos($id);
        $this->load->view('cliente/mis_servicios', $data);
      }
  }
  /**
  *
  * funcion para eliminar servicio solicitado y devuelve la vista de 'mis servicios'
  */
  public function delete_servicio($id)
  {
      $this->serviciosmodel->delete_servicio($id);
      redirect(base_url('cliente/mis_servicios'));

  }
  /**
  *
  * funcion para actualizar servicio solicitado y devuelve la vista de 'mis servicios'
  */
  public function update_servicio($id)
  {
      $this->serviciosmodel->update_servicio($id);
      redirect(base_url('cliente/mis_servicios'));
  }
  /**
  *
  * funcion para cargar vista de crear comentarios con los datos de trabajador y comentario
  */
  public function calificar($id)
  {
    $data['serv']=$this->serviciosmodel->get_servicio($id);
    $this->load->view('cliente/comentarios', $data);

  }
  /**
  *
  * funcion para  guardar comentario y tomar datos del formulario
  */
  public function save_comentario()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $comentario["id_cliente"] = $this->session->id;
    $comentario["contenido"] = $this->input->post("contenido");
    $comentario["nombre"] = $this->input->post("nombre");
    $comentario["apellido"] = $this->input->post("apellido");
    $comentario["nota"] = $this->input->post("nota");
    $comentario["id_trabajador"] = $this->input->post("id_trabajador");

    $this->calificacionesmodel->save_comentario($comentario);
    redirect(base_url("cliente/home"));
    }
  }
  /**
  *
  * funcion para cargar la vista de pagos con datos almacenados de pagos
  */

  public function mis_pagos()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $data['servicios']= $this->serviciosmodel->get_servicios_join($id);
    $this->load->view('cliente/pagos', $data);
    }
  }
  /**
  *
  * funcion para cargar la vista de ayuda
  */
  public function ayuda()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $this->load->view('cliente/ayuda');
    }
  }
  /**
  *
  * funcion para cargar la vista de contacto
  */
  public function contacto()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $this->load->view('cliente/contacto');
    }
  }
  /**
  *
  * funcion para cargar la vista de sobre nosotros
  */
  public function nosotros()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $this->load->view('cliente/nosotros');
    }
  }
  /**
  *
  * funcion para cargar la vista de privacidad
  */
  public function privacidad()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $this->load->view('cliente/privacidad');
    }
  }




}
