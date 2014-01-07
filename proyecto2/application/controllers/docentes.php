<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Docentes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template');
    }
    
    public function index()
    {
		//$this->load->view('welcome_message');
    $this->layout->setTitle("Unidad de Informatica y Computación - Docentes");
    $this->layout->view('docentes');
    }

	public function jornada_completa()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Jornada Completa");
        $this->layout->view('jornada_completa');
	}
	public function media_jornada()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Media Jornada");
        $this->layout->view('media_jornada');
	}
	public function jornada_parcial()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Jornada Parcial");
        $this->layout->view('jornada_parcial');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
