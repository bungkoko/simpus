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
      $data['title']="Registrasi Anggota Perpustakaan";
      $data['content']="Register/anggota_view";
      $this->load->view('index',$data);
    }

    function proses_reg(){
      if($this->input->post('submit')):
        $this->load->library('form_validation');
        $this->form_validation->set_rules('anggota_nm','anggota_nm','required');
        //$this->form_validation->set_rules('anggota_email','anggota_email','required|valid_email');
        $this->form_validation->set_rules('anggota_tmplahir','anggota_tmplahir','required');
        $this->form_validation->set_rules('anggota_alamat','anggota_alamat','required');
        $this->form_validation->set_rules('anggota_tgllahir','anggota_tgllahir','required');
        $this->form_validation->set_rules('anggota_jeniskelamin','anggota_jeniskelamin','required');
        if($this->form_validation->run()==TRUE):


          $config['upload_path']='.'.$this->config->item('upload_path_avatar');
          $config['allowed_types']=$this->config->item('allowed_types');
          //$config['max_size']=$this->config->item('max_size');
          $config['encrypt_name']=TRUE;


          $this->load->library('image_lib');
          $this->load->helper('file');


          $this->load->library('upload');

          $this->upload->initialize($config);

          if(!$this->upload->do_upload('anggota_avatar')):
            echo $this->upload->display_errors();
          else:
              $dt_avatar=$this->upload->data();
              $avatar_nm=$dt_avatar['raw_name'];
              $avatar_ext=$dt_avatar['file_ext'];
              $avatar_path=$dt_avatar['file_name'];
              $avatar_fullpath=$dt_avatar['full_path'];

              //Resize Image
              $config['image_library']=$this->config->item('image_library');
              $config['maintain_ratio']=$this->config->item('maintain_ratio');
              $config['width']=163;
              $config['height']=143;

              $config['source_image']=$avatar_fullpath;

              $this->image_lib->initialize($config);
              $this->image_lib->resize();
              $this->image_lib->clear();

              $this->db->set('anggota_kd',$this->getkode_otomatis());
              $this->User_model->insertanggota($avatar_path);

          endif;
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
      $getkode=$this->User_model->getkdanggota();
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
