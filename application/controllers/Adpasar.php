<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdPasar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProdukModel');
		$this->load->model('AdminModel');
		$this->load->model('AdPasarModel');
		$this->load->model('SliderModel');
		$this->load->model('UserModel');
		$this->load->model('KomentarModel');
		$this->load->helper('file');
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->cek_login();
		
		$data['title'] = 'Dashboard';
		$data['page_header'] = 'Dashboard';
		$data['menu_dashboard'] = 'active';
		$data['isi'] = 'adpasar/dashboard';
		$this->load->view('adpasar/main', $data);
	}

	function cek_login()
	{
		if ($this->session->has_userdata('log')) {
			if ($this->session->userdata('log') != TRUE) {
				redirect(base_url('adpasar/login'),'refresh');
			}
		}else redirect(base_url('adpasar/login'),'refresh');
	}

	function login()
	{
		$this->load->view('adpasar/login');
	}

	function proses_login()
	{
		$uname = $this->input->post('username_hipmi');
		$upass = md5($this->input->post('pass_hipmi'));

		$this->db->where('username_hipmi', $uname);
		$this->db->where('pass_hipmi', $upass);
		$row = $this->db->get('adminhipmi', 1);

		if ($row->num_rows() > 0) {
			$row = $row->row();
			$array = array(
				'log' => TRUE,
				'adpasar_id' => $row->id,
				'adpasar_name' => $row->nama_adminhipmi
			);
			
			$this->session->set_userdata($array);

			redirect(base_url('adpasar'),'refresh');
		}else {
			$this->session->set_flashdata('status', 'Username atau password salah.');
			redirect(base_url('adpasar/login'),'refresh');
		}

	}

	function produk($offset = 0)
	{
		$this->cek_login();
		$akun = $this->session->userdata('adpasar_id');
		$data['menu_product'] = 'active';
		$data['title'] = 'Produk';
		$data['page_header'] = 'Produk';
		$data['isi'] = 'adpasar/produk';
		$data['no'] = $offset+1;

		$data['list_produk'] = $this->ProdukModel->get_for_paging_admin(5, $offset,$akun);
		$numrow = $this->ProdukModel->get_num_row_admin($akun);

		// pagination Produk
		$config['base_url'] = base_url('adpasar/produk/');
		$config['total_rows'] = $numrow;
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";

		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";

		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";

		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";

		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";

		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";

		$config['cur_tag_open'] = "<li class='active'><a><b>";
		$config['cur_tag_close'] = "</b></a></li>";

		$config['next_link'] = 'Selanjutnya';
		$config['prev_link'] = 'Sebelumnya';

		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('adpasar/main', $data); 
	}

	function tambahproduk()
	{
		$this->cek_login();

		$data['menu_product'] = 'active';
		$data['title'] = 'Tambah Produk';
		$data['page_header'] = 'Tambah Produk';
		$data['isi'] = 'adpasar/tambahproduk';

		$data['list_subkategori'] = $this->AdminModel->get_subkategori();

		$this->load->view('adpasar/main', $data);
	}

	function prosesproduk()
	{
		$akun= $this->session->userdata('adpasar_id'); 
		$config['upload_path']          = './assets/images/produk/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto'))
        {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
        }
        else {
                $data = array('upload_data' => $this->upload->data());
                $_POST['foto_produk'] = $data['upload_data']['file_name'];
                $_POST['id'] = $akun;
                $this->db->insert('produk', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Produk berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Produk gagal disimpan. silahkan coba lagi.');
                }
                
                redirect(base_url('Adpasar/tambahproduk'),'refresh');
        }
	}
	
	function editproduk($id = NULL)
	{
		$this->cek_login();
		$data['menu_product'] = 'active';
		$data['title'] = 'Edit Produk';
		$data['page_header'] = 'Edit Produk';
		$data['isi'] = 'adpasar/editproduk';

		$data['list_subkategori'] = $this->AdminModel->get_subkategori();
		$data['produk'] = $this->ProdukModel->get_by_id($id);


		$this->load->view('adpasar/main', $data);
	}

	function proseseditproduk($id)
	{
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/produk/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto'))
        {
         /*       $error = array('error' => $this->upload->display_errors());
                print_r($error);
       		*/
            //$_POST['foto_produk']=$_POST['foto_lama'];
    		$this->db->where('id_produk',$id);
	    	$this->db->update('produk',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Produk berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Produk gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('adpasar/editproduk/'.$id),'refresh');
    	}
        else {
     	        
                $path = "./assets/images/produk/" .$_POST['foto_produk'];
				unlink($path);
  				
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_produk'] = $data['upload_data']['file_name'];
            	$this->db->where('id_produk',$id);
	    	    $this->db->update('produk', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Produk berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Produk gagal disimpan. silahkan coba lagi.');
                }
                
                redirect(base_url('adpasar/editproduk/'.$id),'refresh');

      }
	}

	function hapusproduk($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('adpasar/produk'),'refresh');
		}else {
			$this->db->where('id_produk', $id);
			$r = $this->db->get('produk');
			$r = $r->row();

			$this->db->where('id_produk', $id);
			$this->db->delete('produk');
			$path = "./assets/images/produk/" .$r->foto_produk;
			unlink($path);
			redirect(base_url('adpasar/produk'),'refresh');
		}
	}

	function kategori()
	{
		$this->cek_login();

		$data['title'] = 'kategori';
		$data['page_header'] = 'kategori';
		$data['isi'] = 'adpasar/kategori';

		$data['list_kategori'] = $this->AdminModel->get_full_kategori();

		$this->load->view('adpasar/main', $data);
	}

	function proseskategori()
	{
		if ($this->input->post('nama_sub') != '') {
			$this->db->insert('subkategori', $_POST);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('status', 'Kategori berhasil disimpan');
				redirect(base_url('adpasar/kategori'),'refresh');
			}
		}
	}

	function transaksi()
	{
		$this->cek_login();
		
		$data['title'] = 'Transaksi';
		$data['page_header'] = 'Transaksi';
		$data['menu_trx'] = 'active';
		$data['isi'] = 'adpasar/transaksi';

		$data['transaksi_bl'] = $this->AdminModel->get_trx();

		$this->load->view('adpasar/main', $data);
	}

	function lunas_trx($id)
	{
		$this->db->where('ID', $id);
		$data['status'] = 1;
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('status', 'Produk berhasil diupdate');
		redirect(base_url('adpasar/transaksi'),'refresh');
	}

	function pending_trx($id)
	{
		$this->db->where('ID', $id);
		$data['status'] = 2;
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('status', 'Produk berhasil diupdate');
		redirect(base_url('adpasar/transaksi'),'refresh');
	}

	function bl_trx($id)
	{
		$this->db->where('ID', $id);
		$data['status'] = 0;
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('status', 'Produk berhasil diupdate');
		redirect(base_url('adpasar/transaksi'),'refresh');
	}

	
	function trx($id)
	{
		$data['title'] = 'Transaksi ';
		$data['page_header'] = 'Transaksi';
		$data['menu_trx'] = 'active';
		$data['isi'] = 'soon';
		$this->load->view('adpasar/main', $data);
	}

	function soon()
	{
		$data['title'] = 'This page is coming soon ';
		$data['page_header'] = 'Page Name';
		// $data['menu_trx'] = 'active';
		$data['isi'] = 'soon';
		$this->load->view('adpasar/main', $data);
	}
	function gantipass()
	{
		$this->cek_login();
		$akun= $this->session->userdata('adpasar_id');
		$data['menu_other'] = 'active';
		$data['title'] = 'Ganti Password';
		$data['page_header'] = 'Ganti Password';
		$data['isi'] = 'adpasar/gantipass';

		$data['admin_pasar'] = $this->AdPasarModel->get_pass($akun);


		$this->load->view('adpasar/main', $data);
	}
	function prosesgantipass()
	{
		$this->cek_login();
		$akun= $this->session->userdata('adpasar_id');
		$_POST['pass_hipmi']=md5($_POST['pass_hipmi']);
		$this->db->where('id',$akun);
	   	$this->db->update('adminhipmi', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Password berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Password gagal diupdate. silahkan coba lagi.');
                }
                
       	redirect(base_url('adpasar/gantipass/'.$akun),'refresh');
	}
	function chat(){
		$this->cek_login();
		$akun= $this->session->userdata('adpasar_id'); 
		$data['title'] = 'Obrolan';
		$data['menu_chat'] = 'active';
		$data['page_header'] = 'Obrolan';
		$data['isi'] = 'adpasar/chat';

		$data['chatting'] = $this->KomentarModel->get_all($akun);
		//$data['a'] = $this->KomentarModel->get_last_comment($id);
		foreach ($data['chatting'] as $value) {
			$a=$value->pengirim_komentar;
			if($a == 1){
			}else{	
		//	$data['hitung'] = $this->KomentarModel->get_num_notif($a);
			}
		}
		//print_r($data['hitung']);
		
		$this->load->view('adpasar/main', $data);

	}
	function detailchat($id){
		$this->cek_login();
		$akun= $this->session->userdata('adpasar_id'); 
		$data['title'] = 'Obrolan';
		$data['menu_chat'] = 'active';
		$data['page_header'] = 'Obrolan';
		$data['isi'] = 'adpasar/detailchat';

		$data['obrolan'] = $this->KomentarModel->get_by_id($id,$akun);
		//$data['pembeli'] = $this->KomentarModel->get_by_id_detail($id);
		$data['id_chat'] = $id;
		$data['chatting'] = $this->KomentarModel->get_all($akun);
		foreach ($data['chatting'] as $value) {
			$a=$value->pengirim_komentar;
			if($a == 1){
			}else{	
		//	$data['hitung'] = $this->KomentarModel->get_num_notif($a);
			}
		}
		//print_r($data['hitung']);
		
		$data['post'] = $this->UserModel->get_by_id($id);
		$this->load->view('adpasar/main', $data);

	}
	function proseschat($id)
	{
		$akun= $this->session->userdata('adpasar_id'); 
		
				$_POST['pengirim_komentar'] =$akun;
				$_POST['tujuan_komentar'] =$id;
				$_POST['tanggal_komentar'] =date('Y-m-d');
				$_POST['jam_komentar'] =date('H:i:s');;
				$_POST['status_komentar'] =0;
			    $this->db->insert('komentar', $_POST);

                
                redirect(base_url('adpasar/detailchat/'.$id),'refresh');
        
	
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('adpasar/login'),'refresh');
	}
}
// End of file adpasarHipmi.php
// location ./application/controller/adpasarHipmi.php