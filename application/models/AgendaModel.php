<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgendaModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		$this->db->order_by('tanggal_agenda','DESC');
		$r = $this->db->get('agenda', $limit, $offset);
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('agenda');
		return $r->num_rows();
	}

	function get_all()
	{
		$this->db->order_by('tanggal_agenda','DESC');
		return $this->db->get('agenda',4)->result();
	}

	function get_by_id($id) 
	{
		$this->db->where('id_agenda', $id);
		$result = $this->db->get('agenda');
		return $result->row();
	}


	function get_by_name($str)
	{
		$q = "SELECT * FROM agenda WHERE judul_agenda LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		$q = "SELECT * FROM agenda order by $order";
		$r = $this->db->query($q);
		return $r->result();
	}

	
}

/* End of file agendaModel.php */
/* Location: ./application/models/agendaModel.php */