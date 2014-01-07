<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Titulados extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template');
    }
    
	public function index()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Titulados");
        $this->layout->view('titulados');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
