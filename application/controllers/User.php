<?php

class User extends CI_Controller {

	public function __construct() {
  		parent::__construct();
  		$this->load->helper(array('form', 'url','file'));
			$this->load->library('session');

	}

	public function index() {
		$this->load->model('user_model','products');
		$this->load->model('model_app');
		$this->load->model('model_reseller');  
		$t['produk'] = $this->products->produk_flashdeal(0,0,5);
		$t['cp'] = $this->products->category_product();
		$t['nama_kategori'] = $this->model_app->view_where("rb_kategori_produk",array('urutan'=>'1'))->result_array();
		$t['nama_kategori2'] = $this->model_app->view_where("rb_kategori_produk",array('urutan'=>'2'))->result_array();
		$t['nama_kategori3'] = $this->model_app->view_where("rb_kategori_produk",array('urutan'=>'3'))->result_array();
		$t['pda'] = $this->model_reseller->produk_perkategori(0,0,$t['nama_kategori'][0]['id_kategori_produk'],10)->result_array();
		$t['produk2'] = $this->model_reseller->produk_perkategori(0,0,$t['nama_kategori2'][0]['id_kategori_produk'],10)->result_array();
		$t['produk3'] = $this->model_reseller->produk_perkategori(0,0,$t['nama_kategori3'][0]['id_kategori_produk'],10)->result_array();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/content',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
	}


	public function allproduk() {
		$this->load->model('user_model','products');
		$this->load->model('model_app');
		$this->load->model('model_reseller');  
		$t['produk'] = $this->products->produk_flashdeal(0,0,15);
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/allproduk',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
	}


	public function kontak(){

		$t['username'] = $this->session->userdata('username');
		$t['email'] = $this->session->userdata('email');
		$t['id_konsumen'] = $this->session->userdata('id_konsumen');
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/kontak',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		
	}



	public function detail(){
		$ids = $this->uri->segment(3);
		$this->load->model('model_app');
		$this->load->model('model_reseller'); 
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$t['detail_produk'] = $this->db->query("SELECT * FROM rb_produk where produk_seo='$ids' AND id_reseller!='0'")->result_array(); 
		$t['record'] = $this->model_app->view_where('rb_produk',array('id_produk'=>$t['detail_produk'][0]['id_produk']))->row_array();
		$t['nama_kategori'] = $this->model_app->view_where("rb_kategori_produk",array('urutan'=>'1'))->result_array();
		$t['pda'] = $this->model_reseller->produk_perkategori(0,0,$t['nama_kategori'][0]['id_kategori_produk'],10)->result_array();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/view_produk',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		}
	


	public function profile(){

		$t['username'] = $this->session->userdata('username');
		$t['email'] = $this->session->userdata('email');
		$t['id_konsumen'] = $this->session->userdata('id_konsumen');
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/profile',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		
	}

	public function wishlist(){

		$t['username'] = $this->session->userdata('username');
		$t['email'] = $this->session->userdata('email');
		$t['id_konsumen'] = $this->session->userdata('id_konsumen');
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/wishlist',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		
	}


	public function wallet(){

		$t['username'] = $this->session->userdata('username');
		$t['email'] = $this->session->userdata('email');
		$t['id_konsumen'] = $this->session->userdata('id_konsumen');
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/wallet',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		
	}

	public function rewards(){

		$t['username'] = $this->session->userdata('username');
		$t['email'] = $this->session->userdata('email');
		$t['id_konsumen'] = $this->session->userdata('id_konsumen');
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/rewards',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		
	}



	public function orders(){

		$t['username'] = $this->session->userdata('username');
		$t['email'] = $this->session->userdata('email');
		$t['id_konsumen'] = $this->session->userdata('id_konsumen');
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/orders',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		
	}

	public function address(){

		$t['username'] = $this->session->userdata('username');
		$t['email'] = $this->session->userdata('email');
		$t['id_konsumen'] = $this->session->userdata('id_konsumen');
		$this->load->model('user_model','products'); 
		$t['cp'] = $this->products->category_product();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/address',$t, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
		
	}


	public function logout ()
		{
			$this->session->sess_destroy();
			redirect('auth/login');
		}

}
