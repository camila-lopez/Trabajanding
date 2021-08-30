<?php
/**
 * Este archivo es el controlador con funciones del trabajador.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajador extends CI_Controller {

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
      $this->load->model("Trabajo_model","trabajosmodel");
      $this->load->model("Servicio_model","serviciosmodel");
      $this->load->model("Calificacion_model","calificacionesmodel");
  }
  /**
  *
  * funcion donde se carga la vista de inicio del trabajador
  *
  */
  public function home()
  {
    $id = $this->session->id;
    $oficio = $this->session->oficio;
    if($id==NULL){
      redirect(base_url());
    }else{
      $data['avisos']= $this->avisosmodel->get_avisos_of($oficio);
      $this->load->view('trabajador/home', $data);
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
        $datos['nota']= $this->calificacionesmodel->get_nota($id);
        $datos['coment']= $this->calificacionesmodel->get_cant_comentarios($id);
        $datos['trabajo']= $this->trabajosmodel->get_mis_trabajos($id);
        $datos['comentario']= $this->calificacionesmodel->get_mis_comentarios($id);
        $this->load->view('trabajador/perfil', $datos);
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
    redirect(base_url("trabajador/perfil"));
  }
  /**
  *
  * funcion donde se carga la vista de agregar nuevo trabajo al perfil
  */
  public function nuevo_trabajo()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
        $data= $this->usuariosmodel->get_user($id);
        $this->load->view('trabajador/agregar_trabajo', $data);
      }
  }
  /**
  *
  * funcion donde se almacenan los datos del nuevo trabajo creado
  */
  public function agregar_trabajo()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $trabajo["id_trabajador"] = $this->session->id;
    $trabajo["titulo"] = $this->input->post("titulo");
    $trabajo["detalles"] = $this->input->post("detalles");

    $this->trabajosmodel->save_trabajo($trabajo);
    redirect(base_url("trabajador/home"));
    }
  }
  /**
  *
  * funcion donde se carga la vista de 'mis servicios' con los datos del servicio hechos por el trabajador
  */
  public function mis_servicios()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
        $data['servicios']= $this->serviciosmodel->get_servicios_trabajador($id);
        $data['activos']= $this->serviciosmodel->get_servicios_activos($id);
        $this->load->view('trabajador/mis_servicios', $data);
      }
  }
  /**
  *
  * funcion para eliminar servicio que hara el trabajador y devuelve la vista de 'mis servicios'
  */
  public function delete_servicio($id)
  {
      $this->serviciosmodel->delete_servicio($id);
      redirect(base_url('trabajador/mis_servicios'));

  }

  public function finalizar($id)
  {
    $data['serv']=$this->serviciosmodel->get_servicio($id);
    $this->load->view('trabajador/finalizar', $data);

  }
  /**
  *
  * funcion para finalizar el servicio y actualizando el estado del servicio
  */
  public function finalizar_servicio()
  {
    $id = $this->input->post("id");
    $this->serviciosmodel->update_estado($id);
    redirect(base_url('trabajador/mis_servicios'));

  }
  /**
  *
  * funcion para actualizar servicio por hacer y devuelve la vista de 'mis servicios'
  */
  public function update_servicio($id)
  {
      $this->serviciosmodel->update_servicio($id);
      redirect(base_url('trabajador/mis_servicios'));
  }
  /**
  *
  * funcion para tomar el id del aviso y mandalro a la vista de agendar servicio
  */
  public function agendar_servicio($id)
  {
    $data['servicio']=$this->avisosmodel->get_aviso($id);
    $this->load->view('trabajador/agendar_servicio', $data);

  }
  /**
  *
  * funcion para tomar los datos del servicio junto con el id del trabajador e id del cliente para eliminarlo del inicio del trabajador
  */
  public function confirmar_servicio()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
    $servicio["id_trabajador"] = $this->session->id;
    $servicio["id_cliente"] = $this->input->post("id_cliente");
    $servicio["oficio"] = $this->input->post("oficio");
    $servicio["fecha"] = $this->input->post("fecha");
    $servicio["titulo"] = $this->input->post("titulo");
    $servicio["nombre"] = $this->input->post("nombre");
    $servicio["direccion"] = $this->input->post("direccion");
    $servicio["telefono"] = $this->input->post("telefono");
    $servicio["email"] = $this->input->post("email");
    $servicio["detalles"] = $this->input->post("detalles");
    $servicio["total"] = $this->input->post("total");
    $servicio["estado"] = 1;
    $id_aviso = $this->input->post("id");

    $this->serviciosmodel->save_servicio($servicio);
    $this->avisosmodel->delete_aviso($id_aviso);
    redirect(base_url("trabajador/home"));
    }
  }
  /**
  *
  * funcion para cargar la vista de ganancias con datos almacenados de pagos
  */
  public function mis_ganancias()
  {
    $id = $this->session->id;
    if($id==NULL){
      redirect(base_url());
    }else{
      $data['servicios']= $this->serviciosmodel->get_servicios_trabajador($id);
      $this->load->view('trabajador/ganancias', $data);
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
    $this->load->view('trabajador/ayuda');
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
    $this->load->view('trabajador/contacto');
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
    $this->load->view('trabajador/nosotros');
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
    $this->load->view('trabajador/privacidad');
    }
  }

}
