<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengurusModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		$this->db->order_by('id_pengurus','DESC');
		$r = $this->db->get('pengurus', $limit, $offset);
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('pengurus');
		return $r->num_rows();
	}

	function get_all()
	{
		return $this->db->get('pengurus')->result();
	}

	function get_by_id($id)
	{
		$this->db->where('id_pengurus', $id);
		$result = $this->db->get('pengurus');
		return $result->row();
	}

	function get_kategori($id)
	{
		$this->db->where('jabatan', $id);
		$r = $this->db->get('jabatan');
		return $r->result();
	}

	function get_kategori_by_id($id)
	{
		$this->db->where('id_jabatan', $id);
		$r = $this->db->get('jabatan', 1, 0);
		return $r->row();
	}

	

	function get_by_kategori($id)
	{
		$this->db->where('jabatan', $id);
		$r = $this->db->get('pengurus');
		return $r->result();
	}

	function get_by_rec($id)
	{
		$this->db->where('jabatan', $id);
		$r = $this->db->get('pengurus', 9, 0);
		return $r->result();
	}

	function get_by_name($str)
	{
		$q = "SELECT * FROM pengurus WHERE nama LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		$q = "SELECT * FROM pengurus order by $order";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_parent($id)
	{
		$q = "SELECT a.* FROM pengurus a, jabatan b WHERE a.jabatan = b.id_jabatan and b.id_jabatan = '$id'";
		$r = $this->db->query($q);
		return $r->result();
	}
}

/* End of file pengurusModel.php */
/* Location: ./application/models/pengurusModel.php */