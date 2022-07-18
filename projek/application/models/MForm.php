<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MForm extends CI_model {


	function get(){
		$query = $this->db->query('SELECT * FROM unit');
        return $query->result();
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('dataform');
		return $this->db->get()->result();
		// $data = $this->db->get('laporan');
		// return $data;
	}

	public function insert($data) {
		$this->db->insert('dataform', $data);
		
			}
			
    public function ubah($data,$id) {
		$this->db->where('id',$id);
		$this->db->update('approve', $data);
		$this->db->where('id',$id);
		$this->db->update('crew', $data);

	}

	public function insert_batch($data) {
		$this->db->insert_batch('crew', $data);
		
		return $this->db->affected_rows();
	}
	
	public function hapus($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('crew');
		$this->db->where('id',$id);
		$this->db->delete('approve');
		$this->db->where('id',$id);
		$this->db->delete('keberangkatan');
	}
}
?>	 