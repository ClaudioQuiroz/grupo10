<h1>Servicios de la Unidad de Inform&aacutetica</h1>

<div>
<p>
El equipo iGLutem y la Unidad de Inform&aacutetica, ofrecen diversos servicios para la Universidad Tecnol&oacutegica Metropolitana, si necesita una integraci&oacuten o soporte para alg&uacuten software OpenSource, Contactenos.
Si necesita la creaci&oacuten de un curso en moodle, o tiene problemas con la wiki, escribanos a Soporte Inform&aacutetica y a la brevedad un integrante de nuestro equipo, solucionar&aacute sus problemas.
Adem&aacutes, La unidad de inform&aacutetica, ofreces a sus estudiantes, tesistas y docentes, cuentas de usuario (Servidor GNU/Linux), para los trabajos personales, memorias y/o investigaci&oacuten, tan s&oacutelo debe llenar el siguiente formulario.
</p>
</div>

<h2>
Caracter&iacutesitcas de los servidores
</h2>

<ul>
Servidores SUN.
</ul>

<ul>
GNU/Linux Ubuntu Server de 64Bits.
</ul>

<ul>
Lenguajes de programaci&oacuten C / C++ / Java / Fortran / PHP / ADA / Prolog / GNU-R / etc..
</ul>

<ul>
Bases de Datos PostgreSQL / MySQL / SQLite / etc...
</ul>

<ul>
Herramientas Subversion / LaTeX / Trac / etc...
</ul>

<ul>
Acceso v&iacutea SSH.
</ul>


<?php
$atributos = array( 'id' => 'miformulario','name'=>'form');
echo form_open_multipart(null,$atributos);
?>

<p>
Rut : 
</p>
<input type="text" name="rut" value = "<?php echo set_value("rut")?>" />
<?php echo form_error('rut'); ?>
<hr />

<P>
Tipo de Usuario :
</p>
<select name="usuario" >
    <option value="estudiante">Estudiante</option>
    <option value="tesista">Tesista</option>
    <option value="Docente">Docente</option>
</select>
<hr />

<p>
Email de Contacto : 
</p>
<input type="text" name="email" value = "<?php echo set_value("email")?>" />
<?php echo form_error('email'); ?>
<hr />


<p>
Requerimientos : 
</p>
<textarea name="requerimientos" cols="30"  rows="5"><?php echo set_value("requerimientos")?> </textarea>
<?php echo form_error('requerimientos'); ?>
<hr/>

<input type="submit" value="Enviar" title="Enviar" />
</form>
