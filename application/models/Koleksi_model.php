<?php
/**
 *
 */
class Koleksi_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function setkoleksi(){
    $this->db->set('koleksi_judul',$this->input->post('koleksi_judul'));
    $this->db->set('koleksi_tebal',$this->input->post('koleksi_tebal'));
    $this->db->set('koleksi_isbn',$this->input->post('koleksi_isbn'));
    $this->db->set('koleksi_dekripsi',$this->input->post('koleksi_dekripsi'));
    $this->db->set('koleksi_lokasi_rak',$this->input->post('koleksi_lokasi_rak'));
    $this->db->set('koleksi_stok',$this->input->post('koleksi_stok'));
    $this->db->set('simpus_genre_genre_kd',$this->input->post('simpus_genre_genre_kd'));
    $this->db->set('simpus_penerbit_penerbit_kd',$this->input->post('simpus_penerbit_penerbit_kd'));
    $this->db->set('simpus_penulis_penulis_kd',$this->input->post('simpus_penulis_penulis_kd'));
  }

  function insertkoleksi($cover){
    $this->setkoleksi();
    $this->db->set('koleksi_cover',$this->config->item('upload_path_koleksi').$cover);
    return $this->db->insert('simpus_koleksi');
  }

  function getkdkoleksi($singkatan){
    $this->db->select_max('koleksi_kd');
    $this->db->like('koleksi_kd',$singkatan);
    return $this->db->get('simpus_koleksi');
  }




}

?>
