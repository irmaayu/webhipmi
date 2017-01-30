<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_hipmi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AgendaModel');
		$this->load->model('KegiatanModel');
		$this->load->model('SliderModel');
		$this->load->model('GaleriModel');
		$this->load->model('InfohipmiModel');
		$this->load->model('AnggotaModel');
		$this->load->model('PengurusModel');
		$this->load->library('pagination');
	}

	public function index($order = NULL, $offset=0)
	{
		$data['menu_info_hipmi'] = 1;
		$data['slider'] = 1;
		$data['isi'] = 'konten/info_hipmi';
		$data['title'] = 'Info Hipmi';
		

		if ($order != NULL) {
			// $data['list_produk'] = $this->ProdukModel->get_all_order();
			print_r($_GET['orderby']);
		}else {
			$data['list_agenda'] = $this->AgendaModel->get_all();
		}
		$data['list_slider7']= $this->SliderModel->get_slider(7,$offset);
		$data['list_slider8']= $this->SliderModel->get_slider(8,$offset);
		$data['list_slider9']= $this->SliderModel->get_slider(9,$offset);
		
		$data['program1']= $this->InfohipmiModel->get_program(2);
		$data['program2']= $this->InfohipmiModel->get_program(3);
		$data['program3']= $this->InfohipmiModel->get_program(4);
		$data['program4']= $this->InfohipmiModel->get_program(5);


		$data['tentang'] = $this->InfohipmiModel->get_tentang();
		$data['list_galeri'] = $this->GaleriModel->get_by_foto(4,$offset);


	
/*		
		$i = 0;
		foreach ($b as $value) {
			$brand[$i] = $value->brand_produk;
			$i++;
		}
		$i = 0;
		$c = 0;
		$max = count($brand);
		while ($i < $max) {
			if ($i < $max-1) {
				if ($brand[$i] == $brand[$i+1]) {
					$i++;
					$data['brand'][$c] = $brand[$i];
					if ($brand[$i+1] != $brand[$i+2]) {
						$c++;
					}
				}else{
					$data['brand'][$c] = $brand[$i];
					$c++;
				}
			}else {
				$data['brand'][$c] = $brand[$i];
			}
			$i++;
		}
*/
		// pagination Produk
			$config['base_url'] = base_url('pasar_upi/index/');
			$config['total_rows'] = 200;
			$config['per_page'] = 15;
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
			$config['last_link'] = 'Terakhir';
			$config['first_link'] = 'Pertama';

			$this->pagination->initialize($config);
			$data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('main', $data);
	}
	public function agenda($id = NULL)
	{	
		$data['menu_info_hipmi'] = 1;
		$data['slider'] = 0;
		if ($id != NULL) {
			$data['isi'] = 'konten/detail_agenda';
			// $data['v_kategori'] = FALSE;
			$data['title'] = 'Berita';
			$data['post'] = $this->AgendaModel->get_by_id($id);
			/*$data['bimafest'] = $this->BeritaModel->get_kategori(1);
			$data['hipmi'] = $this->BeritaModel->get_kategori(2);
			$data['pasar_upi'] = $this->BeritaModel->get_kategori(3);
			*/

		
/*			$data['recommended'] = $this->BeritaModel->get_by_rec($data['post']->kategori_berita);
*/
			$this->load->view('main', $data);
		}
	}
	public function program($id = NULL)
	{
		$data['menu_info_hipmi'] = 1;
		$data['slider'] = 0;
		if ($id != NULL) {
			$data['isi'] = 'konten/detail_program';
			// $data['v_kategori'] = FALSE;
			$data['title'] = 'Berita';
			$data['post'] = $this->InfohipmiModel->get_by_id($id);
			/*$data['bimafest'] = $this->BeritaModel->get_kategori(1);
			$data['hipmi'] = $this->BeritaModel->get_kategori(2);
			$data['pasar_upi'] = $this->BeritaModel->get_kategori(3);
			*/

		
/*			$data['recommended'] = $this->BeritaModel->get_by_rec($data['post']->kategori_berita);
*/
			$this->load->view('main', $data);
		}
	}

	public function Kegiatan($id = NULL,$offset	=0)
	{
			
			$data['menu_kegiatan'] = 1;
			$data['title'] = 'Kegiatan HIPMI PT UPI';
			$data['page_header'] = 'Kegiatan';
			$data['slider'] = 0;
		
			$data['isi'] = 'konten/kegiatanhipmi';
			$data['no'] = $offset + 1;
			$data['list_kegiatan'] = $this->KegiatanModel->get_for_paging(3, $offset);
				$numrow = $this->KegiatanModel->get_num_row();
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
	public function detailkegiatan($id = NULL)
	{	$data['menu_info_hipmi'] = 1;
		$data['slider'] = 0;
		if ($id != NULL) {
			$data['isi'] = 'konten/detail_kegiatan';
			// $data['v_kategori'] = FALSE;
			$data['title'] = 'Berita';
			$data['post'] = $this->KegiatanModel->get_by_id($id);
			$data['recommended'] = $this->KegiatanModel->get_by_rec($data['post']->id_kegiatan);

			
			$this->load->view('main', $data);
		}
	}
	public function galeri($id = NULL)
	{
			$data['menu_info_hipmi'] = 1;
			$data['slider'] = 0;
			$data['isi'] = 'konten/detail_galeri';
			// $data['v_kategori'] = FALSE;

			$data['list_galeri'] = $this->GaleriModel->get_all();
			
			$data['title'] = 'Galeri';
			 
			$this->load->view('main', $data);
		
	}
	public function kepengurusan()
	{
			$data['menu_info_hipmi'] = 1;
			$data['slider'] = 0;
			$data['isi'] = 'konten/kepengurusan';
			// $data['v_kategori'] = FALSE;

			$data['list_pengurus'] = $this->PengurusModel->get_all();
			
			$data['title'] = 'Kepengurusan HIPMI PT UPI';
			 
			$this->load->view('main', $data);
		
	}
	public function database($offset = 0)
	{
		$data['menu_info_hipmi'] = 1;
		$order= $this->input->post("order");
		$Filter=$this->input->post("Filter");
		
		$data['slider'] = 0;
			$data['isi'] = 'konten/anggota';
			$data['no'] = $offset+1;
			// $data['v_kategori'] = FALSE;

			if($order != NULL){
			$data['list_anggota']=$this->AnggotaModel->get_filter($order);
			$data['angka']=1;
			}
			else{
			$data['list_anggota']=$this->AnggotaModel->get_for_paging(15,$offset);
			$data['angka']=0;
			}		
			$data['title'] = 'Database Anggota HIPMI PT UPI';
			$numrow = $this->AnggotaModel->get_num_row();

			//pagination
			$config['base_url'] = base_url('info_hipmi/database/');
		$config['total_rows'] = $numrow;
		$config['per_page'] = 15;
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

}
