<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dataform extends CI_Controller {
	
	public function  __construct() {
		parent::__construct();
		$this->load->model('MDataform', 'modal');
		$this->load->library('form_validation');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    
	}

	public function index() {
		$template = array(
			'menusidebar' => $this->load->view('template/menu', '', true),
			'judulkonten' => 'Data Masukan',
			'konten' => $this->load->view('dataform/viewdata', '', true),
			'datalaporan' => $this->modal->getData()
		);
		$this->parser->parse('template/halaman', $template);
	}


	}
?>