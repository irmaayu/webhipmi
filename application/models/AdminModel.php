<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	function get_subkategori()
	{
		$r = $this->db->get('subkategori');
		$r = $r->result();
		return $r;
	}
		function get_kategori_post()
	{
		$r = $this->db->get('kategori_post');
		$r = $r->result();
		return $r;
	}
		function get_kategori_jabatan()
	{
		$r = $this->db->get('jabatan');
		$r = $r->result();
		return $r;
	}

	function get_full_kategori(){
		$q = "SELECT * FROM kategori a, subkategori b WHERE a.id_kategori = b.kategori";
		$s = $this->db->query($q);
		return $s->result();
	}

	function get_trx()
	{
		$q = "SELECT a.nama_produk as nama_produk, a.foto_produk as foto_produk, b.nama_pembeli as nama_pembeli, c.status as status, c.no_transaksi as no_transaksi, c.qty as qty, c.harga as harga, c.id as id from produk a, pembeli b, transaksi c where b.id_pembeli = c.id_pembeli and a.id_produk = c.id_produk order by c.id desc ";
		$r = $this->db->query($q);
		return $r->result();
	}
	function get_for_paging($limit,$offset)
	{
		$r = $this->db->get('berita', $limit,$offset);
		return  $r->result();
	}
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

}

/* End of file adminModel.php */
/* Location: ./application/models/adminModel.php */