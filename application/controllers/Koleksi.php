<?php
  /**
   *
   */
  class Koleksi extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('koleksi_model');
      $this->load->model('genre_model');
    }

    function index(){

    }

    function inputkoleksi(){
      $data['title']='Input Data Koleksi';
      $data['content']='Dashboard/Koleksi/InputKoleksi';
      $this->load->view('index',$data);
    }

    function proses_input(){
      if($this->input->post('submit')):
        $this->load->library('form_validation');
        $this->form_validation->set_rules('koleksi_judul','koleksi_judul','required');
        //$this->form_validation->set_rules('anggota_email','anggota_email','required|valid_email');
        $this->form_validation->set_rules('koleksi_tebal','koleksi_tebal','required');
        $this->form_validation->set_rules('koleksi_stok','koleksi_isbn','required');
        $this->form_validation->set_rules('koleksi_dekripsi','koleksi_isbn','required');
        $this->form_validation->set_rules('koleksi_lokasi_rak','koleksi_lokasi_rak)','required');

        if($this->form_validation->run()==TRUE):


          $config['upload_path']='.'.$this->config->item('upload_path_koleksi');
          $config['allowed_types']=$this->config->item('allowed_types');
          //$config['max_size']=$this->config->item('max_size');
          $config['encrypt_name']=TRUE;


          $this->load->library('image_lib');
          $this->load->helper('file');


          $this->load->library('upload');

          $this->upload->initialize($config);

          if(!$this->upload->do_upload('koleksi_cover')):
            echo $this->upload->display_errors();
          else:
              $dt_cover=$this->upload->data();
              $cover_nm=$dt_cover['raw_name'];
              $cover_ext=$dt_cover['file_ext'];
              $cover_path=$dt_cover['file_name'];
              $cover_fullpath=$dt_cover['full_path'];

              //Resize Image
              $config['image_library']=$this->config->item('image_library');
              $config['maintain_ratio']=$this->config->item('maintain_ratio');
              $config['width']=163;
              $config['height']=143;

              $config['source_image']=$cover_fullpath;

              $this->image_lib->initialize($config);
              $this->image_lib->resize();
              $this->image_lib->clear();

              $this->db->set('anggota_kd',$this->getkode_otomatis());
              $this->Anggota_model->insertanggota($avatar_path);

          endif;
        else:
          $data['msg']="Data Anda Belum Lengkap. Silakan Melengkapi Data Anda Kembali";
        endif;
      else:
        echo "Cek Pengaturan Database Anda";
      endif;
    }

    //Uji Coba
    function getkode_otomatis($getkodegenre){
      //$getkodegenre=$this->input->post('simpus_genre_genre_kd');
      $kdkoleksi="";
      $singkatan="";
      $getgenre=$this->genre_model->getgenrebykd($getkodegenre);

      foreach($getgenre->result() as $gtgenre):
        $singkatan=$gtgenre->genre_singkatan;
      endforeach;

      $getkodekoleksi=$this->koleksi_model->getkdkoleksi($singkatan);

      foreach ($getkodekoleksi->result() as $gtkodekoleksi):
        if($gtkodekoleksi->koleksi_kd==NULL):
            $kdkoleksi='0001';
        else:
            $sub_kdkoleksi=substr($gtkodekoleksi->koleksi_kd,4);
            $kdkoleksi=sprintf("%04s",$sub_kdkoleksi + 1);
        endif;
      endforeach;
      print_r($singkatan.'-'.$kdkoleksi);
    }


  }

?>
