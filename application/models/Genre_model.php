<?php
/**
 *
 */
class Genre_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function setgenre(){
    $this->db->set('genre_judul',$this->input->post('genre_judul'));
    $this->db->set('genre_singkatan',$this->input->post('genre_singkatan'));
  }

  function insertgenre(){
    $this->setgenre();
    return $this->db->insert('simpus_genre');
  }

  function getgenre(){
    return $this->db->get('simpus_genre');
  }
  function getgenrebykd($kode){
    $this->db->where('genre_kd',$kode);
    return $this->db->get('simpus_genre');
  }

}

?>
