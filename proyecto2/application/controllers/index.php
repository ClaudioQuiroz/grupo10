<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template');
    }
    
	public function index()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Inicio");
        $this->layout->view('index');
	}

	public function mision()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Misión");
        $this->layout->view('mision');
	}
	public function vision()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Visión");
        $this->layout->view('vision');
	}
	public function historia()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Historia");
        $this->layout->view('historia');
	}
	public function autoridades()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Autoridades");
        $this->layout->view('autoridades');
	}
	public function estudiantes()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Estudiantes");
        $this->layout->view('estudiantes');
	}
	public function nuestras_carreras()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Nuestras Carreras");
        $this->layout->view('nuestras_carreras');
	}
	public function civil()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Ingeniería Civil en Computación mención Informática");
        $this->layout->view('civil');
	}
	public function ingenieria_informatica()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Ingeniería en Informática");
        $this->layout->view('ingenieria_informatica');
	}
	public function titulados()
	{
		//$this->load->view('welcome_message');
        $this->layout->setTitle("Unidad de Informatica y Computación - Titulados");
        $this->layout->view('titulados');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
