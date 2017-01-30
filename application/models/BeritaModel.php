<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		
		$this->db->order_by('id_berita','DESC');
		$r = $this->db->get('berita', $limit, $offset);
		
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('berita');
		
		return $r->num_rows();
	}

	function get_all()
	{
		return $this->db->get('berita')->result();
	}

	function get_by_id($id)
	{
		$this->db->where('id_berita', $id);
		$result = $this->db->get('berita');
		return $result->row();
	}

	function get_kategori($id)
	{
		$this->db->where('kategori', $id);
		$r = $this->db->get('subkategori');
		return $r->result();
	}

	function get_kategori_by_id($id)
	{
		$this->db->where('id_sub', $id);
		$r = $this->db->get('subkategori', 1, 0);
		return $r->row();
	}

	function get_brand()
	{
		$this->db->select('brand_berita');
		$this->db->order_by('brand_berita', 'asc');
		$r = $this->db->get('berita');
		return $r->result();
	}

	function get_by_kategori($id)
	{
		$this->db->where('kategori_berita', $id);
		$r = $this->db->get('berita');
		return $r->result();
	}

	function get_by_rec($id)
	{
		$this->db->where('kategori_berita', $id);
		$r = $this->db->get('berita', 9, 0);
		return $r->result();
	}

	function get_by_brand($str)
	{
		$q = "SELECT * FROM berita WHERE brand_berita LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_name($str)
	{
		$q = "SELECT * FROM berita WHERE judul_berita LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		$q = "SELECT * FROM berita order by $order";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_parent($id)
	{
		$q = "SELECT a.* FROM berita a, subkategori b, kategori c WHERE a.kategori_berita = b.id_sub and b.kategori = c.id_kategori and c.id_kategori = $id";
		$r = $this->db->query($q);
		return $r->result();
	}
}

/* End of file beritaModel.php */
/* Location: ./application/models/beritaModel.php */