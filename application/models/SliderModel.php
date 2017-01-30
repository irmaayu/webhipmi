<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SliderModel extends CI_Model {

	/*SLIDER*/
	
	function get_for_paging_slider($id)
	{
		$this->db->where('halaman_slider',$id);
		$r = $this->db->get('slider', 3);
		return  $r->result();
	}
	function get_by_id_slider($id)
	{
		$this->db->where('id_slider',$id);
		$r = $this->db->get('slider');
		return  $r->row();
	}
	function get_slider($id,$offset)
	{
		$this->db->where('id_slider',$id);
		$r = $this->db->get('slider',1,$offset);
		return  $r->result();
	}
	

}

/* End of file adminModel.php */
/* Location: ./application/models/adminModel.php */