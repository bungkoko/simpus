<?php
/**
 *
 */
class Penulis extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('penulis_model');
  }

  function index(){

  }

  function insertpenulis(){
    $data['title']='Input Data Penulis';
    $data['content']='Dashboard/Penulis/Inputpenulis';
    $this->load->view('index',$data);
  }

  function proses_insert(){
    if($this->input->post('submit')):
      $this->penulis_model->insertpenulis();
    else:
      $data['error']="Cek Kembali Database anda";
    endif;
  }
}

?>
