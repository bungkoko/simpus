<?php
/**
 *
 */
class User_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function check_user($username,$password){
      $this->db->where('user_name',$username);
      $this->db->where('user_password',$password);
      $this->db->where('user_status','aktif');
      return $this->db->get('simpus_user')->row();
  }


}

?>
