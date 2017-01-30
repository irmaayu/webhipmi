<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdPasarModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		$this->db->order_by('id','DESC');
		$r = $this->db->get('adminhipmi', $limit, $offset);
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('adminhipmi');
		return $r->num_rows();
	}

	function get_all()
	{
		return $this->db->get('adminhipmi')->result();
	}

	function get_by_id($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('adminhipmi');
		return $result->row();
	}

	function get_pass($akun)
	{
		$this->db->select('pass_hipmi');
		$this->db->where('id', $akun);
		$result = $this->db->get('adminhipmi');
		return $result->row();
	}

	

	

	function get_by_name($str)
	{
		$q = "SELECT * FROM adminhipmi WHERE nama_adminhipmi LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	

	
}

/* End of file adminhipmiModel.php */
/* Location: ./application/models/adminhipmiModel.php */