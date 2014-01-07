<h1>Ofertas Laborales</h1>
<div><p>La bolsa labora de la Escuela de Inform&aacutetica, es un medio de comunicaci&oacuten entre nuestros egresados y el mercado laboral. Hasta el d&iacutea de hoy hemos ofrecido 436 ofertas laborales.
</p></div>

<div>
<ul>
    <?php
    foreach($datos as $dato)
    {
        ?>
        
		<p>

        <li>
            Nombre Empresa: <?php echo $dato->Empresa?>
            <br />
            Tipo Trabajo : <?php echo $dato->Tipo_job?>
            <br />
            Contacto : <?php echo $dato->Contacto?>
            <br />
            Fecha : <?php echo $dato->fecha?>
        </li>
        </p>
        <?php
    }
    ?>
</ul>
</div>
