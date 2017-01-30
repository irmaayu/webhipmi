<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class komentarModel extends CI_Model {

	function get_for_paging($limit, $offset)
	{
		
		$this->db->order_by('id_komentar','DESC');
		$r = $this->db->get('komentar', $limit, $offset);
		
		return  $r->result();
	}

	function get_num_row()
	{
		$r = $this->db->get('komentar');
		
		return $r->num_rows();
	}
	function get_num_notif($id)
	{
		//$this->db->where('status_komentar',0);
		//$this->db->group_by('pengirim_komentar',$id);
		//$this->db->join('pembeli p','p.id_pembeli=k.pengirim_komentar')	;
		$this->db->count('status_komentar');	
		$r = $this->db->get('komentar');
		
		return $r->num_rows();
	}

	function get_all_off()
	{
		return $this->db->get('komentar')->result();
	}
	function get_all($id)
		{
			$this->db->order_by('k.tanggal_komentar','k.jam_komentar','ASC');	
			$this->db->group_by('k.pengirim_komentar');
			$this->db->where('(tujuan_komentar = '. $id .')');
			$this->db->join('pembeli p','p.id_pembeli=k.pengirim_komentar')	;
			$r=$this->db->get('komentar k');
			return $r->result();
		}

	function get_last_comment($id)
	{
	
	}


	function get_by_id($id,$admin)
	{

		$this->db->order_by('tanggal_komentar','jam_komentar','ASC');
		$this->db->where('(pengirim_komentar = '. $id .' AND tujuan_komentar = '.$admin.')');
		$this->db->or_where('(tujuan_komentar = '. $id .' AND pengirim_komentar = '.$admin.')');
		$this->db->limit('30');
		$result = $this->db->get('komentar');
		return $result->result();
	}
	function get_by_admin($id)
	{

		$this->db->order_by('tanggal_komentar','jam_komentar','ASC');
		$this->db->where('(pengirim_komentar = '. $id .')');
		$this->db->or_where('(tujuan_komentar = '. $id .')');
		$this->db->limit('30');
		$result = $this->db->get('komentar');
		return $result->result();
	}
	function get_by_tujuan($id)
	{
		$this->db->order_by('jam_komentar','tanggal_komentar','ASC');
		$this->db->where('tujuan_komentar',$id);
		$this->db->limit('30');
		$result = $this->db->get('komentar');
		return $result->result();
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
		$this->db->select('brand_komentar');
		$this->db->order_by('brand_komentar', 'asc');
		$r = $this->db->get('komentar');
		return $r->result();
	}

	function get_by_kategori($id)
	{
		$this->db->where('kategori_komentar', $id);
		$r = $this->db->get('komentar');
		return $r->result();
	}

	function get_by_rec($id)
	{
		$this->db->where('kategori_komentar', $id);
		$r = $this->db->get('komentar', 9, 0);
		return $r->result();
	}

	function get_by_brand($str)
	{
		$q = "SELECT * FROM komentar WHERE brand_komentar LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_name($str)
	{
		$q = "SELECT * FROM komentar WHERE judul_komentar LIKE '%$str%'";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_all_order($order)
	{
		$q = "SELECT * FROM komentar order by $order";
		$r = $this->db->query($q);
		return $r->result();
	}

	function get_by_parent($id)
	{
		$q = "SELECT a.* FROM komentar a, subkategori b, kategori c WHERE a.kategori_komentar = b.id_sub and b.kategori = c.id_kategori and c.id_kategori = $id";
		$r = $this->db->query($q);
		return $r->result();
	}
}

/* End of file komentarModel.php */
/* Location: ./application/models/komentarModel.php */