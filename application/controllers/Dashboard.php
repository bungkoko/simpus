<?php
/**
 * Penulis : Purwanto, Joko
 * Sistem Perpustakaan
 */
class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    if($this->session->userdata('logged')==FALSE):
      redirect('dashboard/signin');
    endif;
  }

  function index(){
      $data['title']="Dashboard - Sistem Manajemen Perpustakaan";
      $data['content']="Dashboard/home";
      $this->load->view('index',$data);
  }
  function signin(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','username','required');
    $this->form_validation->set_rules('password','password','required');

    /*check User*/
    if($this->form_validation->run()==TRUE):
      $username=$this->input->post('username');
      $password=md5($this->input->post('password'));

      /*check user dari database*/
      $query=$this->user_model->check_user($username,$password);
      if(count($query)):
        $user_data=array('username'=>$query->user_name,
                          'namalengkap'=>$query->user_namalengkap,
                          'email'=>$query->user_email,
                          'rule'=>$query->user_rule,
                          'logged'=>TRUE
        );
        $this->session->set_userdata($user_data);
        redirect('dashboard');
      else:
        $data['error']="Username atau Password Tidak sesuai dengan database";
      endif;
    else:
      $data['error']=validation_errors();
    endif;
    $data['title']="Sistem Manajemen Perpustakaan";
    $data['content']="signin";
    $this->load->view('index',$data);
  }

  function signout(){
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('namalengkap');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('rule');
    $this->session->unset_userdata('logged');
  }


}


?>
