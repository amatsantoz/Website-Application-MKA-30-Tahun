<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {
	
	public function  __construct() {
		parent::__construct();
		$this->load->model('MForm', 'modal');
		$this->load->library('form_validation');
		
	}

	public function index() {

		$data2['dd_bidang'] = $this->modal->get();

		$template = array(
			'menusidebar' => $this->load->view('template/menu', '', true),
			'judulkonten' => 'Form',
			'konten' => $this->load->view('form/viewdata', $data2, true)
			
		);
		$this->parser->parse('template/halaman', $template);
	}

	
	public function simpan() {
		$nopeg = $this->input->post('nopeg');
		$unit = $this->input->post('unit');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$tanggal = date("d-m-Y");
		$data = array(
			'nopeg' => $nopeg,
			'unit' => $unit,
			'subject' => $subject,
			'message' => $message,
			'date' => $tanggal 
		);
			$this->modal->insert($data);
			$this->session->set_flashdata('suksess', "Data Berhasil Ditambahkan");
			if($this->session->userdata('nama')==='tamu'){
				redirect('home/form');
			}else {
				redirect('form');
			}
	}

	}
?>