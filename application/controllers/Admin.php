<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProdukModel');
		$this->load->model('AdminModel');
		$this->load->model('UserModel');
		$this->load->model('BeritaModel');
		$this->load->model('KegiatanModel');
		$this->load->model('KomentarModel');
		$this->load->model('InfohipmiModel');
		$this->load->model('AgendaModel');
		$this->load->model('SliderModel');
		$this->load->model('GaleriModel');
		$this->load->model('PengurusModel');
		$this->load->model('AnggotaModel');
		$this->load->model('AdPasarModel');
		$this->load->helper('file');
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->cek_login();
		
		$data['title'] = 'Dashboard';
		$data['page_header'] = 'Dashboard';
		$data['menu_dashboard'] = 'active';
		$data['isi'] = 'admin/dashboard';
		$this->load->view('admin/main', $data);
	}

	function cek_login()
	{
		if ($this->session->has_userdata('log')) {
			if ($this->session->userdata('log') != TRUE) {
				redirect(base_url('admin/login'),'refresh');
			}
		}else redirect(base_url('admin/login'),'refresh');
	}

	function login()
	{
		$this->load->view('admin/login');
	}

	function proses_login()
	{
		$uname = $this->input->post('username');
		$upass = md5($this->input->post('password'));

		$this->db->where('username', $uname);
		$this->db->where('password', $upass);
		$row = $this->db->get('admin', 1);

		if ($row->num_rows() > 0) {
			$row = $row->row();
			$array = array(
				'log' => TRUE,
				'admin_id' => $row->id,
				'admin_name' => $row->nama
			);
			
			$this->session->set_userdata($array);

			redirect(base_url('admin'),'refresh');
		}else {
			$this->session->set_flashdata('status', 'Username atau password salah.');
			redirect(base_url('admin/login'),'refresh');
		}

	}

	function produk($offset = 0)
	{
		$this->cek_login();
	
		$data['menu_product'] = 'active';
		$data['title'] = 'Produk';
		$data['page_header'] = 'Produk';
		$data['isi'] = 'admin/produk';
		$data['no'] = $offset+1;

		$data['list_produk'] = $this->ProdukModel->get_for_paging(5, $offset);
		$numrow = $this->ProdukModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/produk/');
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

		$this->load->view('admin/main', $data); 
	}

	function tambahproduk()
	{
		$this->cek_login();

		$data['menu_product'] = 'active';
		$data['title'] = 'Tambah Produk';
		$data['page_header'] = 'Tambah Produk';
		$data['isi'] = 'admin/tambahproduk';

		$data['list_subkategori'] = $this->AdminModel->get_subkategori();

		$this->load->view('admin/main', $data);
	}

	function prosesproduk()
	{
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
                $this->db->insert('produk', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Produk berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Produk gagal disimpan. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/tambahproduk'),'refresh');
        }
	}
	
	function editproduk($id = NULL)
	{
		$this->cek_login();
		$data['menu_product'] = 'active';
		$data['title'] = 'Edit Produk';
		$data['page_header'] = 'Edit Produk';
		$data['isi'] = 'admin/editproduk';

		$data['list_subkategori'] = $this->AdminModel->get_subkategori();
		$data['produk'] = $this->ProdukModel->get_by_id($id);


		$this->load->view('admin/main', $data);
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
            redirect(base_url('admin/editproduk/'.$id),'refresh');
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
                
                redirect(base_url('admin/editproduk/'.$id),'refresh');

      }
	}

	function hapusproduk($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/produk'),'refresh');
		}else {
			$this->db->where('id_produk', $id);
			$r = $this->db->get('produk');
			$r = $r->row();

			$this->db->where('id_produk', $id);
			$this->db->delete('produk');
			$path = "./assets/images/produk/" .$r->foto_produk;
			unlink($path);
			redirect(base_url('admin/produk'),'refresh');
		}
	}

	function kategori()
	{
		$this->cek_login();

		$data['title'] = 'kategori';
		$data['page_header'] = 'kategori';
		$data['isi'] = 'admin/kategori';

		$data['list_kategori'] = $this->AdminModel->get_full_kategori();

		$this->load->view('admin/main', $data);
	}

	function proseskategori()
	{
		if ($this->input->post('nama_sub') != '') {
			$this->db->insert('subkategori', $_POST);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('status', 'Kategori berhasil disimpan');
				redirect(base_url('admin/kategori'),'refresh');
			}
		}
	}

	function transaksi()
	{
		$this->cek_login();
		
		$data['title'] = 'Transaksi';
		$data['page_header'] = 'Transaksi';
		$data['menu_trx'] = 'active';
		$data['isi'] = 'admin/transaksi';

		$data['transaksi_bl'] = $this->AdminModel->get_trx();

		$this->load->view('admin/main', $data);
	}

	function lunas_trx($id)
	{
		$this->db->where('ID', $id);
		$data['status'] = 1;
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('status', 'Produk berhasil diupdate');
		redirect(base_url('admin/transaksi'),'refresh');
	}

	function pending_trx($id)
	{
		$this->db->where('ID', $id);
		$data['status'] = 2;
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('status', 'Produk berhasil diupdate');
		redirect(base_url('admin/transaksi'),'refresh');
	}

	function bl_trx($id)
	{
		$this->db->where('ID', $id);
		$data['status'] = 0;
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('status', 'Produk berhasil diupdate');
		redirect(base_url('admin/transaksi'),'refresh');
	}

	

	function trx($id)
	{
		$data['title'] = 'Transaksi ';
		$data['page_header'] = 'Transaksi';
		$data['menu_trx'] = 'active';
		$data['isi'] = 'soon';
		$this->load->view('admin/main', $data);
	}

	function soon()
	{
		$data['title'] = 'This page is coming soon ';
		$data['page_header'] = 'Page Name';
		// $data['menu_trx'] = 'active';
		$data['isi'] = 'soon';
		$this->load->view('admin/main', $data);
	}
	function post($offset = 0){
		$this->cek_login();
	
		$data['menu_post'] = 'active';
		$data['title'] = 'Post';
		$data['page_header'] = 'Post';
		$data['isi'] = 'admin/post';
		$data['no'] = $offset+1;

		$data['list_produk'] = $this->AdminModel->get_for_paging(5, $offset);
		$numrow = $this->BeritaModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/post/');
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

		$this->load->view('admin/main', $data);
	}

	function tambahpost()
	{
		$this->cek_login();

		$data['menu_post'] = 'active';
		$data['title'] = 'Tambah Post';
		$data['page_header'] = 'Tambah Post';
		$data['isi'] = 'admin/tambahpost';

		$data['list_kategori'] = $this->AdminModel->get_kategori_post();

		$this->load->view('admin/main', $data);
	}

	function prosespost()
	{
		$config['upload_path']          = './assets/images/post/';
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
                $_POST['foto_berita'] = $data['upload_data']['file_name'];
                $this->db->insert('berita', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Postingan berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Postingan gagal disimpan. silahkan coba lagi.');
                }
                
               redirect(base_url('admin/tambahpost'),'refresh');
        }
	}

	function editpost($id = NULL)
	{
		$this->cek_login();
		$data['menu_post'] = 'active';
		$data['title'] = 'Edit Post';
		$data['page_header'] = 'Edit Post';
		$data['isi'] = 'admin/editpost';

		$data['list_kategori'] = $this->AdminModel->get_kategori_post();
		$data['post'] = $this->BeritaModel->get_by_id($id);


		$this->load->view('admin/main', $data);
	}

	function proseseditpost($id = NULL)
	{
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/post/';
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
    		$this->db->where('id_berita',$id);
	    	$this->db->update('berita',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Berita berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Berita gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/editpost/'.$id),'refresh');
    	}
        else {
     	        
                $path = "./assets/images/post/" .$_POST['foto_berita'];
				unlink($path);
  				
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_berita'] = $data['upload_data']['file_name'];
            	$this->db->where('id_berita',$id);
	    	    $this->db->update('berita', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Berita berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Berita gagal diupdate. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/editpost/'.$id),'refresh');

      }
	}

	function hapuspost($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/post'),'refresh');
		}else {
			$this->db->where('id_berita', $id);
			$r = $this->db->get('berita');
			$r = $r->row();

			$this->db->where('id_berita', $id);
			$this->db->delete('berita');
			$path = "./assets/images/post/" .$r->foto_berita;
			unlink($path);
			redirect(base_url('admin/post'),'refresh');
		}
	}
	function agenda($offset = 0){
		$this->cek_login();
	
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Agenda';
		$data['page_header'] = 'Agenda';
		$data['isi'] = 'admin/agenda';
		$data['no'] = $offset+1;

		$data['list_agenda'] = $this->AgendaModel->get_for_paging(5, $offset);
		$numrow = $this->AgendaModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/agenda/');
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

		$this->load->view('admin/main', $data);
	}
	function tambahagenda()
	{
		$this->cek_login();

		$data['menu_info_hipmi'] = 'active';
		$data['title'] = 'Tambah Agenda';
		$data['page_header'] = 'Tambah Agenda';
		$data['isi'] = 'admin/tambahagenda';

		// $data['list_subkategori'] = $this->AgendaModel->get_kategori();

		$this->load->view('admin/main', $data);
	}
	function prosesagenda()
	{
	 	$config['upload_path']          = './assets/images/agenda/';
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
                $_POST['foto_agenda'] = $data['upload_data']['file_name'];
               $this->db->insert('agenda', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Agenda berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Agenda gagal disimpan. silahkan coba lagi.');
                }
                
               redirect(base_url('admin/tambahagenda'),'refresh');
       } 
	}
	function editagenda($id = NULL)
	{
		$this->cek_login();
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Edit Agenda';
		$data['page_header'] = 'Edit Agenda';
		$data['isi'] = 'admin/editagenda';

		$data['agenda'] = $this->AgendaModel->get_by_id($id);


		$this->load->view('admin/main', $data);
	}
	function proseseditagenda($id = NULL)
	{
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/agenda/';
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
    		$this->db->where('id_agenda',$id);
	    	$this->db->update('agenda',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Agenda berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Agenda gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/editagenda/'.$id),'refresh');
    	}
        else {
     	        
                $path = "./assets/images/agenda/" .$_POST['foto_agenda'];
				unlink($path);
  				
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_agenda'] = $data['upload_data']['file_name'];
            	$this->db->where('id_agenda',$id);
	    	    $this->db->update('agenda', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Agenda berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Agenda gagal diupdate. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/editagenda/'.$id),'refresh');

      }
  }
	function hapusagenda($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/agenda'),'refresh');
		}else {
			$this->db->where('id_agenda', $id);
			$r = $this->db->get('agenda');
			$r = $r->row();

			$this->db->where('id_agenda', $id);
			$this->db->delete('agenda');
			
			redirect(base_url('admin/agenda'),'refresh');
		}
	}

	/*slider*/
	function slider($id){
		$this->cek_login();
	
		$data['menu_slider'] = 'active';
		$data['title'] = 'Slider';
		$data['page_header'] = 'Slider';
		$data['isi'] = 'admin/slider';
		$data['no'] = 1;
		$data['halaman']=$id;

		$data['list_slider'] = $this->SliderModel->get_for_paging_slider($id);
		
		// pagination Produk
		$config['base_url'] = base_url('admin/slider/');
		$config['total_rows'] = 3;
		$config['per_page'] = 3;
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

		$this->load->view('admin/main', $data);
	}
	function editslider($id = NULL)
	{
		$this->cek_login();
		$data['menu_slider'] = 'active';
		$data['title'] = 'Edit Slider';
		$data['page_header'] = 'Edit Slider';
		$data['isi'] = 'admin/editslider';

		$data['post'] = $this->SliderModel->get_by_id_slider($id);


		$this->load->view('admin/main', $data);
	}
	function proseseditslider($id = NULL)
	{
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/slider/';
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
    		$this->db->where('id_slider',$id);
	    	$this->db->update('slider',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Slider berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Slider gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/editslider/'.$id),'refresh');
    	}
        else {
     	        
            	
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_slider'] = $data['upload_data']['file_name'];
            	$this->db->where('id_slider',$id);
	    	    $this->db->update('slider', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Slider berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Slider gagal diupdate. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/editslider/'.$id),'refresh');

      }
	}

	function program($offset = 0){
		$this->cek_login();
	
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Program';
		$data['page_header'] = 'Program';
		$data['isi'] = 'admin/program';
		$data['no'] = $offset+1;

		$data['list_program'] = $this->InfohipmiModel->get_for_paging(4, $offset);
		$numrow = $this->InfohipmiModel->get_num_row();

		/*// pagination Produk
		$config['base_url'] = base_url('admin/program/');
		$config['total_rows'] = $numrow;
		$config['per_page'] = 4;
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
*/
		$this->load->view('admin/main', $data);
	}
	function tentang($offset = 0){
		$this->cek_login();
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Edit Tentang';
		$data['page_header'] = 'Edit Tentang';
		$data['isi'] = 'admin/tentang';

		$data['agenda'] = $this->InfohipmiModel->get_tentang();


		$this->load->view('admin/main', $data);
	}
	function prosesedittentang($id = NULL,$offset = 0){

		$this->cek_login();
		
		$config['upload_path']          = './assets/images/infohipmi/';
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
    		$this->db->where('id_infohipmi',$id);
	    	$this->db->update('infohipmi',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'info hipmi berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'info hipmi gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/tentang'),'refresh');
    	}
        else {
     	        
            	
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_infohipmi'] = $data['upload_data']['file_name'];
            	$this->db->where('id_infohipmi',$id);
	    	    $this->db->update('infohipmi', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'info hipmi berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'info hipmi gagal diupdate. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/tentang'),'refresh');

      }
	}

	function editprogram($id,$offset = 0){
		$this->cek_login();
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Edit Program Unggulan';
		$data['page_header'] = 'Edit Program Unggulan';
		$data['isi'] = 'admin/editprogram';

		$data['program'] = $this->InfohipmiModel->get_program($id);


		$this->load->view('admin/main', $data);
	}
	function proseseditprogram($id= null,$offset = 0){
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/infohipmi/';
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
    		$this->db->where('id_infohipmi',$id);
	    	$this->db->update('infohipmi',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Program berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Program gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/editprogram/'.$id),'refresh');
    	}
        else {
     	        
            	
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_infohipmi'] = $data['upload_data']['file_name'];
            	$this->db->where('id_slider',$id);
	    	    $this->db->update('slider', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Program berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Program gagal diupdate. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/editprogram/'.$id),'refresh');

      }
	}
	function kegiatan($offset = 0){
		$this->cek_login();
	
		$data['menu_kegiatan'] = 'active';
		$data['title'] = 'Kegiatan';
		$data['page_header'] = 'Kegiatan';
		$data['isi'] = 'admin/kegiatan';
		$data['no'] = $offset+1;

		$data['list_kegiatan'] = $this->KegiatanModel->get_for_paging(5, $offset);
		$numrow = $this->KegiatanModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/kegiatan/');
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

		$this->load->view('admin/main', $data);
	}

	function tambahkegiatan()
	{
		$this->cek_login();

		$data['menu_kegiatan'] = 'active';
		$data['title'] = 'Tambah Kegiatan';
		$data['page_header'] = 'Tambah Kegiatan';
		$data['isi'] = 'admin/tambahkegiatan';

		$this->load->view('admin/main', $data);
	}

	function proseskegiatan()
	{
		$config['upload_path']          = './assets/images/kegiatan/';
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
                $_POST['foto_kegiatan'] = $data['upload_data']['file_name'];
                $this->db->insert('kegiatan', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Kegiatan berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Kegiatan gagal disimpan. silahkan coba lagi.');
                }
                
               redirect(base_url('admin/tambahkegiatan'),'refresh');
        }
	}

	function editkegiatan($id = NULL)
	{
		$this->cek_login();
		$data['menu_kegiatan'] = 'active';
		$data['title'] = 'Edit Kegiatan	';
		$data['page_header'] = 'Edit Kegiatan';
		$data['isi'] = 'admin/editkegiatan';

		$data['post'] = $this->KegiatanModel->get_by_id($id);


		$this->load->view('admin/main', $data);
	}

	function proseseditkegiatan($id = NULL)
	{
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/kegiatan/';
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
    		$this->db->where('id_kegiatan',$id);
	    	$this->db->update('kegiatan',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Kegiatan berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Kegiatan gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/editkegiatan/'.$id),'refresh');
    	}
        else {
     	        
                $path = "./assets/images/kegiatan/" .$_POST['foto_kegiatan'];
				unlink($path);
  				
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_kegiatan'] = $data['upload_data']['file_name'];
            	$this->db->where('id_kegiatan',$id);
	    	    $this->db->update('kegiatan', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Kegiatan berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Kegiatan gagal diupdate. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/editkegiatan/'.$id),'refresh');

      }
	}

	function hapuskegiatan($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/kegiatan'),'refresh');
		}else {
			$this->db->where('id_kegiatan', $id);
			$r = $this->db->get('kegiatan');
			$r = $r->row();

			$this->db->where('id_kegiatan', $id);
			$this->db->delete('kegiatan');
			$path = "./assets/images/kegiatan/" .$r->foto_berita;
			unlink($path);
			redirect(base_url('admin/kegiatan'),'refresh');
		}
	}
	
	function gallery($offset = 0)
	{
		$this->cek_login();
	
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Gallery';
		$data['page_header'] = 'Gallery';
		$data['isi'] = 'admin/galeri';
		$data['no'] = $offset+1;

		$data['list_galeri'] = $this->GaleriModel->get_for_paging(5, $offset);
		$numrow = $this->GaleriModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/gallery/');
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

		$this->load->view('admin/main', $data); 
	}

	function tambahgaleri()
	{
		$this->cek_login();

		$data['menu_product'] = 'active';
		$data['title'] = 'Tambah Galeri';
		$data['page_header'] = 'Tambah Galeri';
		$data['isi'] = 'admin/tambahgaleri';

		
		$this->load->view('admin/main', $data);
	}

	function prosesgaleri()
	{
		$config['upload_path']          = './assets/images/galeri/';
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
                $_POST['foto_galeri'] = $data['upload_data']['file_name'];
                $this->db->insert('galeri', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'galeri berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'galeri gagal disimpan. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/tambahgaleri'),'refresh');
        }
	}
	
	function editgaleri($id = NULL)
	{
		$this->cek_login();
		$data['menu_product'] = 'active';
		$data['title'] = 'Edit Galeri';
		$data['page_header'] = 'Edit Galeri';
		$data['isi'] = 'admin/editgaleri';

		$data['galeri'] = $this->GaleriModel->get_by_id($id);


		$this->load->view('admin/main', $data);
	}

	function proseseditgaleri($id)
	{
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/galeri/';
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
    		$this->db->where('id_galeri',$id);
	    	$this->db->update('galeri',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'galeri berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'galeri gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/editgaleri/'.$id),'refresh');
    	}
        else {
     	        
                $path = "./assets/images/galeri/" .$_POST['foto_produk'];
				unlink($path);
  				
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto_galeri'] = $data['upload_data']['file_name'];
            	$this->db->where('id_galeri',$id);
	    	    $this->db->update('galeri', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'galeri berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'galeri gagal disimpan. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/editgaleri/'.$id),'refresh');

      }
	}

	function hapusgaleri($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/galeri'),'refresh');
		}else {
			
			$this->db->where('id_galeri', $id);
			$this->db->delete('galeri');
			$path = "./assets/images/galeri/" .$r->foto_produk;
			unlink($path);
			redirect(base_url('admin/gallery'),'refresh');
		}
	}
	
		function kepengurusan($offset = 0)
	{
		$this->cek_login();
	
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Kepengurusan';
		$data['page_header'] = 'Kepengurusan';
		$data['isi'] = 'admin/kepengurusan';
		$data['no'] = $offset+1;

		$data['list_pengurus'] = $this->PengurusModel->get_for_paging(5, $offset);
		$numrow = $this->PengurusModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/kepengurusan/');
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

		$this->load->view('admin/main', $data); 
	}

	function tambahpengurus()
	{
		$this->cek_login();

		$data['menu_product'] = 'active';
		$data['title'] = 'Tambah Kepengurusan';
		$data['page_header'] = 'Tambah Kepengurusan';
		$data['isi'] = 'admin/tambahkepengurusan';

		$data['list_jabatan'] = $this->AdminModel->get_kategori_jabatan();

		$this->load->view('admin/main', $data);
	}

	function prosespengurus()
	{
		$config['upload_path']          = './assets/images/pengurus/';
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
                $_POST['foto'] = $data['upload_data']['file_name'];
                $this->db->insert('pengurus', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Kepengurusan berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Kepengurusan gagal disimpan. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/tambahpengurus'),'refresh');
        }
	}
	
	function editpengurus($id = NULL)
	{
		$this->cek_login();
		$data['menu_product'] = 'active';
		$data['title'] = 'Edit Pengurus';
		$data['page_header'] = 'Edit Pengurus';
		$data['isi'] = 'admin/editkepengurusan';

		$data['pengurus'] = $this->PengurusModel->get_by_id($id);
		$data['list_jabatan'] = $this->AdminModel->get_kategori_jabatan();

		$this->load->view('admin/main', $data);
	}

	function proseseditpengurus($id)
	{
		$this->cek_login();
		
		$config['upload_path']          = './assets/images/pengurus/';
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
    		$this->db->where('id_pengurus',$id);
	    	$this->db->update('pengurus',$_POST);	
    		
    		if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Kepengurusan berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Kepengurusan gagal diupdate. silahkan coba lagi.');
                }
            redirect(base_url('admin/editpengurus/'.$id),'refresh');
    	}
        else {
     	        
                $path = "./assets/images/pengurus/" .$_POST['foto'];
				unlink($path);
  				
  				$data = array('upload_data' => $this->upload->data());
				$_POST['foto'] = $data['upload_data']['file_name'];
            	$this->db->where('id_pengurus',$id);
	    	    $this->db->update('pengurus', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Kepengurusan berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Kepengurusan gagal disimpan. silahkan coba lagi.');
                }
                
                redirect(base_url('admin/editpengurus/'.$id),'refresh');

      }
	}

	function hapuspengurus($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/kepengurusan'),'refresh');
		}else {
			$this->db->where('id_pengurus', $id);
			$r = $this->db->get('pengurus');
			$r = $r->row();

			$this->db->where('id_pengurus', $id);
			$this->db->delete('pengurus');
			$path = "./assets/images/pengurus/" .$r->foto_produk;
			unlink($path);
			redirect(base_url('admin/kepengurusan'),'refresh');
		}
	}
	
	function database($offset = 0)
	{
		$this->cek_login();
	
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Database Anggota';
		$data['page_header'] = 'Database Anggota';
		$data['isi'] = 'admin/anggota';
		$data['no'] = $offset+1;

		$data['list_anggota'] = $this->AnggotaModel->get_for_paging(5, $offset);
		$numrow = $this->AnggotaModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/database/');
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

		$this->load->view('admin/main', $data); 
	}

	function tambahanggota()
	{
		$this->cek_login();

		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Tambah Database Anggota';
		$data['page_header'] = 'Tambah Database Anggota';
		$data['isi'] = 'admin/tambahanggota';

		
		$this->load->view('admin/main', $data);
	}

	function prosesanggota()
	{
	            $this->db->insert('anggota', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Anggota berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Anggota gagal disimpan. silahkan coba lagi.');
                }
                
               redirect(base_url('admin/tambahanggota'),'refresh');
        
	}
	function editanggota($id = NULL)
	{
		$this->cek_login();
		$data['menu_infohipmi'] = 'active';
		$data['title'] = 'Edit Database Anggota';
		$data['page_header'] = 'Edit Database Anggota';
		$data['isi'] = 'admin/editanggota';

		$data['anggota'] = $this->AnggotaModel->get_by_id($id);


		$this->load->view('admin/main', $data);
	}
	function proseseditanggota($id = NULL)
	{
		$this->cek_login();
		$this->db->where('id',$id);
	   	$this->db->update('anggota', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Anggota berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Anggota gagal diupdate. silahkan coba lagi.');
                }
                
       	redirect(base_url('admin/editanggota/'.$id),'refresh');
    }

	function hapusanggota($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/database'),'refresh');
		}else {
			$this->db->where('id', $id);
			$r = $this->db->get('anggota');
			$r = $r->row();

			$this->db->where('id', $id);
			$this->db->delete('anggota');
			redirect(base_url('admin/database'),'refresh');
		}
	}

	function adminpasar($offset = 0)
	{
		$this->cek_login();
	
		$data['menu_pasar'] = 'active';
		$data['title'] = 'Database Admin Pasar';
		$data['page_header'] = 'Database Admin Pasar';
		$data['isi'] = 'admin/adminpasar';
		$data['no'] = $offset+1;

		$data['list_admin'] = $this->AdPasarModel->get_for_paging(5, $offset);
		$numrow = $this->AdPasarModel->get_num_row();

		// pagination Produk
		$config['base_url'] = base_url('admin/adminpasar/');
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

		$this->load->view('admin/main', $data); 
	}

	function tambahadmin()
	{
		$this->cek_login();

		$data['menu_pasar'] = 'active';
		$data['title'] = 'Tambah Database Admin Pasar';
		$data['page_header'] = 'Tambah Database Admin Pasar';
		$data['isi'] = 'admin/tambahadmin';

		
		$this->load->view('admin/main', $data);
	}

	function prosesadmin()
	{
				$_POST['pass_hipmi']=md5($_POST['pass_hipmi']);
	            $this->db->insert('adminhipmi', $_POST);

                if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Admin Pasar UPI berhasil disimpan.');
                }else {
                	$this->session->set_flashdata('status', 'Admin Pasar UPI gagal disimpan. silahkan coba lagi.');
                }
                
               redirect(base_url('admin/tambahadmin'),'refresh');
        
	}
	function editadmin($id = NULL)
	{
		$this->cek_login();
		$data['menu_pasar'] = 'active';
		$data['title'] = 'Edit Database Admin Pasar';
		$data['page_header'] = 'Edit Database Admin Pasar';
		$data['isi'] = 'admin/editadmin';

		$data['admin_pasar'] = $this->AdPasarModel->get_by_id($id);


		$this->load->view('admin/main', $data);
	}
	function proseseditadmin($id = NULL)
	{
		$this->cek_login();
		$_POST['pass_hipmi']=md5($_POST['pass_hipmi']);
		$this->db->where('id',$id);
	   	$this->db->update('adminhipmi', $_POST);

             if ($this->db->affected_rows() > 0) {
                	$this->session->set_flashdata('status', 'Admin Pasar UPI berhasil diupdate.');
                }else {
                	$this->session->set_flashdata('status', 'Admin Pasar UPI gagal diupdate. silahkan coba lagi.');
                }
                
       	redirect(base_url('admin/editadmin/'.$id),'refresh');
    }

	function hapusadmin($id = NULL)
	{
		if ($id == NULL) {
			redirect(base_url('admin/adminpasar'),'refresh');
		}else {
			$this->db->where('id', $id);
			$r = $this->db->get('adminhipmi');
			$r = $r->row();

			$this->db->where('id', $id);
			$this->db->delete('adminhipmi');
			redirect(base_url('admin/adminpasar'),'refresh');
		}
	}
	
	function chat(){
		$this->cek_login();
		$id= $this->session->userdata('id'); 
		$data['menu_pasar'] = 'active';
		$data['title'] = 'Obrolan';
		$data['page_header'] = 'Obrolan';
		$data['isi'] = 'admin/chat';

		$data['chatting'] = $this->KomentarModel->get_all();
		foreach ($data['chatting'] as $value) {
			$a=$value->pengirim_komentar;
			if($a == 1){
			}else{	
		//	$data['hitung'] = $this->KomentarModel->get_num_notif($a);
			}
		}
		//print_r($data['hitung']);
		
		$this->load->view('admin/main', $data);

	}
	function detailchat($id){
		$this->cek_login();
		$data['menu_pasar'] = 'active';
		$data['title'] = 'Obrolan';
		$data['page_header'] = 'Obrolan';
		$data['isi'] = 'admin/detailchat';

		$data['obrolan'] = $this->KomentarModel->get_by_id($id,1);
		//$data['pembeli'] = $this->KomentarModel->get_by_id_detail($id);
		$data['id_chat'] = $id;
		$data['chatting'] = $this->KomentarModel->get_all();
		foreach ($data['chatting'] as $value) {
			$a=$value->pengirim_komentar;
			if($a == 1){
			}else{	
		//	$data['hitung'] = $this->KomentarModel->get_num_notif($a);
			}
		}
		//print_r($data['hitung']);
		
		$data['post'] = $this->UserModel->get_by_id($id);
		$this->load->view('admin/main', $data);

	}
	function proseschat($id)
	{
		
		//date_default_timezone_set("Asia/Jakarta");
				$_POST['pengirim_komentar'] =1;
				$_POST['tujuan_komentar'] =$id;
				$_POST['tanggal_komentar'] =date('Y-m-d');
				$_POST['jam_komentar'] =date('H:i:s');;
				$_POST['status_komentar'] =0;
			    $this->db->insert('komentar', $_POST);

                
                redirect(base_url('admin/detailchat/'.$id),'refresh');
        
	
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/login'),'refresh');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */