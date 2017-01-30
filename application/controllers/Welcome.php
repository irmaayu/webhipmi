<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BeritaModel');
		$this->load->model('SliderModel');
		$this->load->model('AgendaModel');
		$this->load->helper('file');
		
		$this->load->library('pagination');
	}

	public function index($offset = 0)
	{
		$data['menu_beranda'] = 1;
		$data['slider'] = 1;
		
		$data['title'] = 'Home';
		$data['page_header'] = 'Home';
		$data['isi'] = 'konten/home';
		$data['title'] = 'Beranda';
		$data['no'] = $offset + 1;
	/*	$offset = 0;
		if ($order != NULL) {
			// $data['list_produk'] = $this->ProdukModel->get_all_order();
			print_r($_GET['orderby']);
		}else {
	*/	
		
		//	$data['list_berita'] = $this->BeritaModel->get_all();
	//	}
		$data['list_slider1']= $this->SliderModel->get_slider(1,$offset);
		$data['list_slider2']= $this->SliderModel->get_slider(2,$offset);
		$data['list_slider3']= $this->SliderModel->get_slider(3,$offset);

		$data['list_berita'] = $this->BeritaModel->get_for_paging(3, $offset);
		$numrow = $this->BeritaModel->get_num_row();
		
		$data['bimafest'] = $this->BeritaModel->get_kategori(1);
		$data['hipmi'] = $this->BeritaModel->get_kategori(2);
		$data['pasar_upi'] = $this->BeritaModel->get_kategori(3);
		
		// $b = $this->ProdukModel->get_brand();

		// $i = 0;
		// foreach ($b as $value) {
		// 	$brand[$i] = $value->brand_produk;
		// 	$i++;
		// }
		// $i = 0;
		// $c = 0;
		// $max = count($brand);
		// while ($i < $max) {
		// 	if ($i < $max-1) {
		// 		if ($brand[$i] == $brand[$i+1]) {
		// 			$i++;
		// 			$data['brand'][$c] = $brand[$i];
		// 			if ($brand[$i+1] != $brand[$i+2]) {
		// 				$c++;
		// 			}
		// 		}else{
		// 			$data['brand'][$c] = $brand[$i];
		// 			$c++;
		// 		}
		// 	}else {
		// 		$data['brand'][$c] = $brand[$i];
		// 	}
		// 	$i++;
		// }

		// pagination Produk
			$config['base_url'] = base_url('welcome/index/');
			$config['total_rows'] = $numrow;
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
		
		$this->load->view('main', $data);
	}

	function cari()
	{
		$data['isi'] = 'konten/home';

		// $data['pria'] = $this->ProdukModel->get_kategori(1);
		// $data['wanita'] = $this->ProdukModel->get_kategori(2);
		// $b = $this->ProdukModel->get_brand();

		// $i = 0;
		// foreach ($b as $value) {
		// 	$brand[$i] = $value->brand_produk;
		// 	$i++;
		// }
		// $i = 0;
		// $c = 0;
		// $max = count($brand);
		// while ($i < $max) {
		// 	if ($i < $max-1) {
		// 		if ($brand[$i] == $brand[$i+1]) {
		// 			$i++;
		// 			$data['brand'][$c] = $brand[$i];
		// 			if ($brand[$i+1] != $brand[$i+2]) {
		// 				$c++;
		// 			}
		// 		}else{
		// 			$data['brand'][$c] = $brand[$i];
		// 			$c++;
		// 		}
		// 	}else {
		// 		$data['brand'][$c] = $brand[$i];
		// 	}
		// 	$i++;
		// }

		// $data['list_produk'] = $this->ProdukModel->get_by_name($this->input->get('s'));

		// $data['title'] = $this->input->get('s') ." ";
		$data['slider'] = 0;
		$data['header_kategori'] = "Hasil Pencarian " .$this->input->get('s');

		$this->load->view('main', $data);
	}
	public function berita($id = NULL)
	{
		$data['slider'] = 0;
		if ($id != NULL) {
			$data['isi'] = 'konten/detail_post';
			// $data['v_kategori'] = FALSE;

			$data['post'] = $this->BeritaModel->get_by_id($id);
			$data['bimafest'] = $this->BeritaModel->get_kategori(1);
			$data['hipmi'] = $this->BeritaModel->get_kategori(2);
			$data['pasar_upi'] = $this->BeritaModel->get_kategori(3);
			

			$data['title'] = 'Beranda';
			$data['recommended'] = $this->BeritaModel->get_by_rec($data['post']->kategori_berita);

			$this->load->view('main', $data);
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */

