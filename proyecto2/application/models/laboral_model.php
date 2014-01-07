<?php
class laboral_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    public function getLaboral()
    {
        $query=$this->db
        ->select("Empresa,Tipo_job,Contacto,Empresa,fecha")
        ->from("ofer_trabajo")
        ->order_by("id_job","desc")
        ->get();
        return $query->result();
    }
/*    public function getPersonas2()
    {
        $query=$this->db
        ->select("id,nombre,correo,telefono as tel,fecha")
        ->from("personas")
        ->order_by("id","desc")
        ->get();
        return $query->result_array();
    }
    public function getPersonasPorId($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
        ->select("id,nombre,correo,telefono as tel,fecha")
        ->from("personas")
        ->where($where)
        ->get();
        //echo $this->db->last_query();
        return $query->row();
    }*/
}