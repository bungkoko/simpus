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

  function setanggota(){
    $this->db->set('anggota_nm',$this->input->post('anggota_nm'));
    $this->db->set('anggota_email',$this->input->post('anggota_email'));
    $this->db->set('anggota_notelpon',$this->input->post('anggota_notelpon'));
    $this->db->set('anggota_tmplahir',$this->input->post('anggota_tmplahir'));
    $this->db->set('anggota_tgllahir',$this->input->post('anggota_tgllahir'));
    $this->db->set('anggota_jeniskelamin',$this->input->post('anggota_jeniskelamin'));
    $this->db->set('anggota_tgldaftar',date('Y-m-d'));
    $this->db->set('anggota_alamat',$this->input->post('anggota_alamat'));
    $this->db->set('anggota_status',$this->input->post('anggota_status'));
  }

  function insertanggota($avatar){
    $this->setanggota();
    $this->db->set('anggota_avatar',$this->config->item('upload_path_avatar').$avatar);
    return $this->db->insert('simpus_anggota');
  }

  function getkdanggota(){
      $this->db->select_max('anggota_kd');
      return $this->db->get('simpus_anggota');
    }


}

?>
