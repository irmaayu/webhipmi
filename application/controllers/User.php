<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('ProdukModel');
		$this->load->model('KomentarModel');
		$this->load->library('cart');
	}

	public function index()
	{
		$id = $this->session->userdata('ID_user');

		$pembeli = $this->UserModel->get_user($id);

		$data['title'] = $pembeli->nama_pembeli;
		$data['slider'] = 0;
		$data['isi'] = 'konten/profile';

		$data['pembeli'] = $pembeli;
		$data['v_kategori'] = FALSE;

		$this->load->view('main', $data);
	}

	function cek_login()
	{
		if (!$this->session->has_userdata('log_user')) {
			redirect(site_url('user/login'),'refresh');
		}
	}

	function login()
	{
		$data['title'] = 'Login ';
		$data['isi'] = 'konten/login';
		$data['slider'] = 0;
		$data['v_kategori'] = TRUE;
		$data['menu_login'] = 'active';
		$this->load->view('main', $data);
	}

	

	function edit()
	{
		$id = $this->session->userdata('ID_user');

		$pembeli = $this->UserModel->get_user($id);

		$data['title'] = $pembeli->nama_pembeli;
		$data['slider'] = 0;
		$data['isi'] = 'konten/editprofile';
		$data['v_kategori'] = FALSE;

		$data['pembeli'] = $pembeli;

		$this->load->view('main', $data);
	}

	function proses_edit()
	{
		$id = $this->input->post('id_pembeli');
		unset($_POST['id_pembeli']);
		$this->db->where('id_pembeli', $id);
		$this->db->update('pembeli', $_POST);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('status', 'Profile berhasil diperbaharui');
			redirect(base_url('user'),'refresh');
		}else {
			$this->session->set_flashdata('status', 'Profile tidak diperbaharui');
			redirect(base_url('user'),'refresh');
		}
	}

	function beli($id = NULL, $qty = NULL)
	{
		if ($id != NULL) {
			if($qty == NULL)
			{
				$data['qty'] = 1;
			}else $data['qty'] = $qty;

			if (is_array($id)) {
				foreach ($id as $value) {
					$data['produk'][] = $this->ProdukModel->get_by_id($value);
				}
			}else $data['produk'] = $this->ProdukModel->get_by_id($id);

			$data['title'] = 'Beli ';
			$data['v_kategori'] = FALSE;
			$data['slider'] = 0;
			$data['isi'] = 'konten/beli';

			// if ($this->session->has_userdata('ID_user')) {
				$data['pembeli'] = $this->UserModel->get_user($this->session->userdata('ID_user'));
			// }else {
				// redirect(base_url(),'refresh');
			// }ss

			$this->load->view('main', $data);

		}else redirect(base_url(),'refresh');
	}

	/**
	* kalo pas klik beli terus jumlahnya mau diganti masuknya ke fungsi ini
	* cuma ngeganti url aja sih
	*/
	function update_beli()
	{
		if (isset($_POST['qty'])) {
			redirect(base_url("user/beli") ."/" .$_POST['id_produk'] ."/" .$_POST['qty'],'refresh');
		}
	}

	function pembayaran($id = NULL, $qty = NULL)
	{
		if ($id != NULL) {
			$data['produk'] = $this->ProdukModel->get_by_id($id);
			$data['title'] = 'Pembayaran ';
			$data['v_kategori'] = FALSE;
			$data['slider'] = 0;
			$data['isi'] = 'konten/pembayaran';

			if (isset($qty)) {
				$data['qty'] = $qty;
			}

			if ($this->session->has_userdata('ID_user')) {
				$data['pembeli'] = $this->UserModel->get_user($this->session->userdata('ID_user'));
			}else {
				redirect(base_url(),'refresh');
			}

			$this->load->view('main', $data);
		}else {
			redirect(base_url(),'refresh');
		}
	}

	function proses_transaksi()
	{
		$trx = 'OS' .date('dm') .rand(100000, 999999);
		$_POST['no_transaksi'] = $trx;

		$this->db->insert('transaksi', $_POST);

		if ($this->db->affected_rows() > 0) {
			redirect(base_url('user/transaksi'),'refresh');
		}else echo 'Transaksi gagal';
	}

	function transaksi()
	{
		$data['title'] = 'Transaksi';
		$data['slider'] = 0;
		$data['v_kategori'] = FALSE;
		$data['isi'] = 'konten/transaksi';

		$data['transaksi'] = $this->UserModel->get_trx($this->session->userdata('ID_user'));

		$this->load->view('main', $data);
	}

	function proses_daftar()
	{
		$_POST['password'] = md5($_POST['password']);
		$this->db->insert('pembeli', $_POST);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('status', 'Pendaftaran berhasil. silahkan login menggunakan username dan password anda.');
			redirect(base_url('user/login'),'refresh');
		}else {
			$this->session->set_flashdata('status', 'Pendaftaran gagal. silahkan coba lagi');
			redirect(base_url('user/login'),'refresh');
		}
	}

	function proses_login()
	{
		$row = $this->UserModel->get_login($this->input->post('username'), $this->input->post('password'));
		if ($row != NULL) {
			$array = array(
				'log_user' => TRUE,
				'ID_user' => $row->id_pembeli,
				'nama_user' => $row->nama_pembeli
			);
			
			$this->session->set_userdata($array);

			redirect(base_url('user'),'refresh');
		}else {
			$this->session->set_flashdata('status', 'Username atau Password salah');
			redirect(base_url('user/login'),'refresh');
		}
	}

	function cart()
	{
		$data['title'] = 'Cart ';
		$data['slider'] = 0;
		$data['v_kategori'] = FALSE;
		$data['isi'] = 'konten/cart';
		$data['menu_cart'] = 1;

		$this->load->view('main', $data);
	}

	function proses_cart($id = NULL)
	{
		if ($id != NULL) {
			$pr = $this->ProdukModel->get_by_id($id);

			$_POST['id_produk'] = $pr->id_produk;
			$_POST['qty'] = 1;
			$_POST['harga_produk'] = $pr->harga_produk;
			$_POST['nama_produk'] = $pr->nama_produk;
			$_POST['foto_produk'] = $pr->foto_produk;
			// $_POST['submit'] = 'cart';
		}

		if ($this->input->post('submit') == 'cart') {
			$data = array(
				'id'      => $this->input->post('id_produk'),
				'qty'     => $this->input->post('qty'),
				'price'   => $this->input->post('harga_produk'),
				'name'    => $this->input->post('nama_produk'),
				'foto'	  => $this->input->post('foto_produk')
			);

			$this->cart->insert($data);
			
			// $r = base_url('produk/s/') .$this->input->post('id_produk');
			$r = base_url('user/cart');
			redirect($r,'refresh');
		}else if ($this->input->post('submit') == 'buy') {
			$r = base_url('user/beli/') ."/" .$this->input->post('id_produk') ."/" .$_POST['qty'];
			redirect($r,'refresh');
		}
	}

	function hapus_cart($rowid)
	{
		$data = array(
			'rowid' => $rowid,
			'qty'   => 0
		);
		
		$this->cart->update($data);

		redirect(base_url('user/cart'),'refresh');
	}
	function chat($produk)
	{
		$this->cek_login();
		
			
		$id = $this->session->userdata('ID_user');
		date_default_timezone_set("Asia/Jakarta");
		$data['title'] = 'Obrolan';
	
		$data['slider'] = 0;
		$data['isi'] = 'user/chat';
		$data['v_kategori'] = FALSE;
		$data['id_chat']=$id;
		$data['tanggal']=date('Y-m-d');
		$data['penjual'] = $this->ProdukModel->get_by_id($produk);
		$data['obrolan'] = $this->KomentarModel->get_by_id($id,$data['penjual']->id);
		$this->load->view('main', $data);
	}
	function proseschat()
	{
		
		$id = $this->session->userdata('ID_user');
		date_default_timezone_set("Asia/Jakarta");
				$kirim['pengirim_komentar'] =$id;
				$kirim['tujuan_komentar'] =$_POST['id_penjual'];
				$kirim['tanggal_komentar'] =date('Y-m-d');
				$kirim['jam_komentar'] =date('H:i:s');;
				$kirim['status_komentar'] =0;
				$kirim['isi_komentar'] =$_POST['isi_komentar'];
			    $this->db->insert('komentar', $kirim);
				$id_produk = $_POST['id_produk'];

                
                redirect(base_url('user/chat/'.$id_produk),'refresh');
        
	
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */