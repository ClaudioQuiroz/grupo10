<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laboral extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template');
       // $this->load->model('personas_model'); //este llamado serÃ­a para todos los mÃ©todos de la clase
    }
    
	public function index()
	{
		//$this->load->model('personas_model'); acÃ¡ serÃ­a un llamado de tipo local sÃ³lo para el mÃ©todo
//        $datos=$this->personas_model->getPersonas();
  //      $this->layout->view('index',compact("datos"));
  		$datos=$this->laboral_model->getLaboral();
  		$this->layout->setTitle("Unidad de Informatica y Computación - Inicio");
        $this->layout->view('laboral', compact("datos"));
	}
/*	public function usando_result_array()
	{
		//$this->load->model('personas_model'); acÃ¡ serÃ­a un llamado de tipo local sÃ³lo para el mÃ©todo
        $datos=$this->personas_model->getPersonas2();
        $this->layout->view('usando_result_array',compact("datos"));
	}
    public function usando_where($id=null)
	{
		//$this->load->model('personas_model'); acÃ¡ serÃ­a un llamado de tipo local sÃ³lo para el mÃ©todo
        $datos=$this->personas_model->getPersonasPorId($id);
        $this->layout->view('usando_where',compact("datos"));
	}*/
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
