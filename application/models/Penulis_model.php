<?php
  /**
   *
   */
  class Penulis_model extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    function getpenulis(){
      return $this->db->get('simpus_penulis');
    }

    function setpenulis(){
      $this->db->set('penulis_nm',$this->input->post('penulis_nm'));
      $this->db->set('penulis_email',$this->input->post('penulis_email'));
      //return $this->db->get('simpus_penulis');
    }

    function insertpenulis(){
      $this->setpenulis();
      $return this->db->insert('simpus_penulis');
    }

  }

?>
