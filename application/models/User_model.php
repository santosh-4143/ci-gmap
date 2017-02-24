<?php
class User_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    
    }
   
    
    
    function getplace(){
    $this->db->select('*');
     $query = $this->db->get('place_master');
    return $query->result_array();
     
   
}

function getbus($source,$destination){
    //echo $source; die;
    $sql = "SELECT * FROM bus_master WHERE id IN (select a.bus_id
  from route_master a
  join route_master b on b.bus_id = a.bus_id
where a.place_id = $source
  and b.place_id = $destination)";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    //print_r($result);die;
    return $result;
}
function getmap($source,$destination)
{
    //echo $source.$destination;die;
    $sql = "SELECT latitude,longitude FROM place_master WHERE id IN ($source,$destination)";
   
     $query = $this->db->query($sql);
    $result = $query->result_array();
    //print_r($result);die;
    return $result;
}
function getname($source,$destination)
{
    //echo $source.$destination;die;
    $sql = "SELECT place_name FROM place_master WHERE id IN ($source,$destination)";
   
     $query = $this->db->query($sql);
    $result = $query->result_array();
    //print_r($result);die;
    return $result;
}
}

