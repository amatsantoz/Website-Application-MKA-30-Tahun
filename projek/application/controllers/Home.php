<?php

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
	
			$template = array(
				'menusidebar' => $this->load->view('template/menu', '', true),
				'judulkonten' => 'Home',
				'konten' => $this->load->view('template/beranda', '', true)
			);
			$this->parser->parse('template/halaman', $template);
		
	}



	public function form() {
		if($this->session->userdata('nama')==='tamu'){
		$this->load->model('MForm');	
		$data2['dd_bidang'] = $this->MForm->get();
		// $this->load->view('form/viewdata',$data2);

		$template = array(
			'menusidebar' => $this->load->view('template/menu2', '', true),
			'judulkonten' => 'Form',
			'konten' => $this->load->view('form/viewdata', $data2, true)
			
		);
		$this->parser->parse('template/halaman', $template);
		}else{
		    echo "Access Denied";
		}
	
	}


	

}