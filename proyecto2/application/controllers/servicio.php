<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicio extends CI_Controller
{
    	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('template');
        }
        public function index()
        {
            //ambiente con post
                if ( $this->input->post() )
 		         {
 		            if ($this->form_validation->run('servicio'))
 		            {
 		            	echo "entro a las validaciones";exit;
 		            }
 		            
 		         }
            
            //ambiente sin post
	    $this->layout->setTitle("Unidad de Informatica y Computación - Servicio");
            $this->layout->view('servicio');
        }
}
