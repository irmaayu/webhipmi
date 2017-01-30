<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggotaModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		$this->db->order_by('angkatan','DESC');
		$r = $this->db->get('anggota', $limit, $offset);
		return  $r->result();
	}
	function get_filter($order)
	{
		$this->db->order_by('angkatan',$order);
		$r = $this->db->get('anggota');
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('anggota');
		return $r->num_rows();
	}
	function get_num_row_sorting($order)
	{
		$this->db->order_by('angkatan',$order);
		
		$r = $this->db->get('anggota');
		return $r->num_rows();
	}

	function get_all()
	{
		return $this->db->get('anggota')->result();
	}

	function get_by_id($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('anggota');
		return $result->row();
	}

	

	

	function get_by_nama_usaha($id)
	{
		$this->db->where('nama_usaha', $id);
		$r = $this->db->get('anggota');
		return $r->result();
	}

	function get_by_badan_usaha($str)
	{
		$q = "SELECT * FROM anggota WHERE badan_usaha LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_name($str)
	{
		$q = "SELECT * FROM anggota WHERE nama_anggota LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		/*$q = "SELECT * FROM anggota order by $order";
		$r = $this->db->query($q);
		*/
		$this->db->order_by('angkatan',$order);
		$r=$this->db->get('anggota');
		return $r->result();
	}

	
}

/* End of file anggotaModel.php */
/* Location: ./application/models/anggotaModel.php */