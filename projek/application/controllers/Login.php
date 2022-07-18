<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  function index(){
    $this->load->view('login_view');
  }

  function auth(){
    $nama    = $this->input->post('nama',TRUE);
    $validate = $this->login_model->validate($nama);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $nama  = $data['nama'];
        $PIC  = $data['PIC'];
       
        $sesdata = array(
            'nama'  => $nama,
            'PIC'  => $PIC,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($nama === 'tamu'){
          redirect('home/form');
      }else {
          redirect('home');
      }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

}
