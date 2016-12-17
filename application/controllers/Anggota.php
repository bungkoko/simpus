<?php
  /**
   *
   */
  class Anggota extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('User_model');
    }

    function index(){

    }

    function registrasi(){
      $data['title']="Register Anggota Perpustakaan";
      $data['content']="Register/anggota_view";
      $this->load->view('index',$data);
    }

    function proses_reg(){
      if($this->input->post('submit')):
        $this->load->library('form_validation');
        $this->form_validation->set_rules('anggota_nm','anggota_nm','required');
        $this->form_validation->set_rules('anggota_tmplahir','anggota_tmplahir','required');
        $this->form_validation->set_rules('anggota_alamat','anggota_alamat','required');
        $this->form_validation->set_rules('anggota_tgllahir','anggota_tgllahir','required');
        $this->form_validation->set_rules('anggota_jeniskelamin','anggota_jeniskelamin','required');
        if($this->form_validation->run()==TRUE):
          $this->db->set('anggota_kd',$this->getkode_otomatis());
          $this->User_model->insertmember();
          redirect('member/sukses');
        else:
          $data['msg']="Data Anda Belum Lengkap. Silakan Melengkapi Data Anda Kembali";
        endif;
      else:
        echo "Cek Pengaturan Database Anda";
      endif;

    }

    function detail_anggota(){
      $data['content']="Register/anggota_detail_view";
      $data['title']="Detail Anggota Perpustakan Daerah";
      $this->load->view('index',$data);
    }

    function getkode_otomatis(){
      $thndaftar=date('Y');
      $sub_thndaftar=substr($thndaftar,2);
      $getkode=$this->User_model->getkdmember();
      $kdmember="";
      foreach ($getkode->result() as $gtkode):
        if($gtkode->anggota_kd==NULL):
          $kdmember=$sub_thndaftar.'0001';
        else:
          $kdmember=$gtkode->anggota_kd + 1;
        endif;
      endforeach;
      return $kdmember;
    }

    function sukses(){
      echo "Data Masuk Database. Terima Kasih";
    }
  }


?>
