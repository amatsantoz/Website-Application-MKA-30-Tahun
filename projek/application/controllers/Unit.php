<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Unit extends CI_Controller {
	
	public function  __construct() {
		parent::__construct();
		$this->load->model('MUnit', 'modal');
		$this->load->library('form_validation'); 
	}

	public function index() {
		$template = array(
			'menusidebar' => $this->load->view('template/menu', '', true),
			'judulkonten' => 'Unit',
			'konten' => $this->load->view('unit/viewdata', '', true),
			'datalaporan' => $this->modal->getData()
		);
		$this->parser->parse('template/halaman', $template);
	}
	
	public function tambah() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$pic = $this->input->post('pic');
		$email = $this->input->post('email');
		$data = array(
			'nama' => $nama,
			'PIC' => $pic,
			'email' => $email
		);
		if ($id == null || $id == "") {
			$this->modal->insert($data);
			$this->session->set_flashdata('suksess', "Data Berhasil Ditambahkan");
		} else {
			$this->modal->ubah($data,$id);
			$this->session->set_flashdata('suksess', "Data Berhasil Diubah");
		}
		redirect('unit');
	}

	public function hapus($id)
	{
		$this->modal->hapus($id);

		$this->session->set_flashdata('suksess', "Data Berhasil Dihapus");
		redirect('unit');
	}
	}
?>