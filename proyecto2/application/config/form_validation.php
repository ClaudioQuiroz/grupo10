<?php
$config=array
(
    /**
	 * Formulario
	 */
	'servicio'
		=> array(
			
            array('field' => 'rut',						'label' => 'Rut',									'rules' => 'required|numeric|min_length[9]|xss_clean'),
             array('field' => 'email',						'label' => 'Email',									'rules' => 'required|valid_email|xss_clean'),
             array('field' => 'requerimientos',				'label' => 'requerimientos',						'rules' => 'required|min_length[50]|max_length[100]|xss_clean')
		),
        
       
); 