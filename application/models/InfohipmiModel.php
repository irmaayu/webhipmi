<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfohipmiModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		$this->db->order_by('id_infohipmi','DESC');
		$r = $this->db->get('infohipmi', $limit, $offset);
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('infohipmi');
		return $r->num_rows();
	}

	function get_all()
	{
		$this->db->order_by('tanggal_infohipmi','DESC');
		return $this->db->get('infohipmi',4)->result();
	}
	
	function get_tentang()
	{
		$this->db->where('id_infohipmi',1);
		$result = $this->db->get('infohipmi');
		return $result->row();
	}
	function get_program($id)
	{
		$this->db->where('id_infohipmi',$id);
		$result = $this->db->get('infohipmi');
		return $result->row();
	}

	function get_by_id($id) 
	{
		$this->db->where('id_infohipmi', $id);
		$result = $this->db->get('infohipmi');
		return $result->row();
	}


	function get_by_name($str)
	{
		$q = "SELECT * FROM infohipmi WHERE judul_infohipmi LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		$q = "SELECT * FROM infohipmi order by $order";
		$r = $this->db->query($q);
		return $r->result();
	}

	
}

/* End of file infohipmiModel.php */
/* Location: ./application/models/infohipmiModel.php */