<?php
class Login_model extends CI_Model{

  function validate($nama){
    $this->db->where('nama',$nama);
    $result = $this->db->get('unit',1);
    return $result;
  }

}
