<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		$r = $this->db->get('post', $limit, $offset);
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('post');
		return $r->num_rows();
	}

	function get_all()
	{
		return $this->db->get('post')->result();
	}

	function get_by_id($id)
	{
		$this->db->where('id_post', $id);
		$result = $this->db->get('post');
		return $result->row();
	}

	

	function get_kategori_by_id($id)
	{
		$this->db->where('id_kategori_post', $id);
		$r = $this->db->get('kategori_post', 1, 0);
		return $r->row();
	}

	
	function get_by_kategori($id)
	{
		$this->db->where('kategori', $id);
		$r = $this->db->get('post');
		return $r->result();
	}

	function get_by_rec($id)
	{
		$this->db->where('kategori', $id);
		$r = $this->db->get('post', 9, 0);
		return $r->result();
	}

	function get_by_brand($str)
	{
		$q = "SELECT * FROM post WHERE kategori LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_name($str)
	{
		$q = "SELECT * FROM post WHERE judul LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		$q = "SELECT * FROM post order by $order";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_parent($id)
	{
		$q = "SELECT a.* FROM post a, kategori b WHERE a.kategori = b.id_kategori_post and b.id_kategori_post = $id";
		$r = $this->db->query($q);
		return $r->result();
	}
}

/* End of file PostModel.php */
/* Location: ./application/models/PostModel.php */