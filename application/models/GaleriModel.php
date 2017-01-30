<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeriModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{	
		
		$r = $this->db->get('galeri', $limit, $offset);
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('galeri');
		return $r->num_rows();
	}

	function get_all()
	{
		$r =  $this->db->get('galeri');
		return $r->result();
	}

	function get_by_id($id) 
	{
		$this->db->where('id_galeri', $id);
		$result = $this->db->get('galeri');
		return $result->row();
	}
	function get_by_foto($limit, $offset) 
	{
		$this->db->select('foto_galeri');
		$this->db->order_by('id_galeri','DESC');
		$result = $this->db->get('galeri',$limit, $offset);
		return $result->result();
	}	function get_by_name($str)
	{
		$q = "SELECT * FROM galeri WHERE keterangan_galeri LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		$q = "SELECT * FROM galeri order by $order";
		$r = $this->db->query($q);
		return $r->result();
	}

	
}

/* End of file galeriModel.php */
/* Location: ./application/models/galeriModel.php */