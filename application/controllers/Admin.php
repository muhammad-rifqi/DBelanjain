<?php

class Admin extends CI_Controller {


	public function __construct() {
  		parent::__construct();
  		$this->load->helper(array('form', 'url','file'));
		  $this->load->library('session');
	}

	public function index() {
		$this->load->view('admin/login');
	}

	public function proses_login() {
		$this->load->library('session');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model('Admin_model','proses_login');
		$data['log'] = $this->proses_login->login($email,$password);
		$cek = count($data['log']);

		if($cek > 0) {
			$newdata = array(
				'id_pengguna'=> $data['log'][0]['id_pengguna'],
				'nama' => $data['log'][0]['nama'],
				'email' => $data['log'][0]['email'],
				'status' => $data['log'][0]['status']
			);

			$this->session->set_userdata($newdata);

			redirect(base_url().'admin/dashboard');

		} else {

			echo"<h3 align='center'>Ulangi Login</h3>";

		}

	}

	public function dashboard() {

		$t['info'] = $this->session->userdata('nama');
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/dashboard/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}


	public function produk() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','produk');
		$t['produk'] = $this->produk->getallproduk();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/produk/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function tambah_produk() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','pengajar');
		$t['pengguna'] = $this->pengajar->getallpengajar();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/produk/tambah',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function insert_produk() {

	
		$this->load->model('Admin_model','produk');
		$this->produk->insert_produk();
		redirect(base_url('admin/produk'));
	}


	public function edit_produk() {

		$t['info'] = $this->session->userdata('nama');
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','produk');
		$t['produk'] = $this->produk->select_produk($id);
		$t['pengguna'] = $this->produk->getallpengajar();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/produk/edit',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}




	public function update_produk() {

	
		$this->load->model('Admin_model','produk');
		$this->produk->update_produk();
		redirect(base_url('admin/produk'));
	}



	public function mp() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','mp');
		$t['mp'] = $this->mp->getallmp();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/mp/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}

	public function logout ()
		{
			$this->session->sess_destroy();
			redirect(base_url('admin'));
		}



	public function tambah_mp() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','mp');
		$t['pengguna'] = $this->mp->getallpengajar();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/mp/tambah_mp',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function insert_mp() {
		$this->load->model('Admin_model','mp');
		$this->mp->insert_mp();
		redirect(base_url('admin/mp'));
	}


	public function edit_mp() {

		$t['info'] = $this->session->userdata('nama');
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','mp');
		$t['pengguna'] = $this->mp->getallpengajar();
		$t['mp'] = $this->mp->select_mp($id);
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/mp/edit_mp',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function update_mp() {
		$this->load->model('Admin_model','mp');
		$this->mp->update_mp();
		redirect(base_url('admin/mp'));
	}




	public function pengguna() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','pengguna');
		$t['pengguna'] = $this->pengguna->getallpengguna();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/pengguna/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}

	public function tambah_pengguna() {

		$t['info'] = $this->session->userdata('nama');
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/pengguna/tambah',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function insert_pengguna() {
		$this->load->model('Admin_model','pengguna');
		$this->pengguna->insert_pengguna();
		redirect(base_url('admin/pengguna'));
	}


	public function edit_pengguna() {

		$t['info'] = $this->session->userdata('nama');
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','pengguna');
		$t['pengguna'] = $this->pengguna->select_pengguna($id);
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/pengguna/edit',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function update_pengguna() {
		$this->load->model('Admin_model','pengguna');
		$this->pengguna->update_pengguna();
		redirect(base_url('admin/pengguna'));
	}





	public function kurikulum() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','kurikulum');
		$t['kurikulum'] = $this->kurikulum->getallkurikulum();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/kurikulum/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}

	public function tambah_kurikulum() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','kurikulum');
		$t['mp'] = $this->kurikulum->getallmp();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/kurikulum/tambah',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function insert_kurikulum() {
		$this->load->model('Admin_model','kurikulum');
		$this->kurikulum->insert_kurikulum();
		redirect(base_url('admin/kurikulum'));
	}


	public function edit_kurikulum() {

		$t['info'] = $this->session->userdata('nama');
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','kurikulum');
		$t['mp'] = $this->kurikulum->getallmp();
		$t['kurikulum'] = $this->kurikulum->select_kurikulum($id);
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/kurikulum/edit',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function update_kurikulum() {
		$this->load->model('Admin_model','kurikulum');
		$this->kurikulum->update_kurikulum();
		redirect(base_url('admin/kurikulum'));
	}


	public function pemesanan() {
		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','customer');
		$t['customer'] = $this->customer->getcustomer();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/pemesanan/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}


	public function detail_pemesanan($id) {
		$id = $this->uri->segment(3);
		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','pemesanan');
		$t['pemesanan'] = $this->pemesanan->getallpemesanan($id);
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/pemesanan/detail_content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}


	public function approval($id) {
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','approval');
		$this->approval->approval_pemesanan($id);
		redirect(base_url('admin/pemesanan'));
	}
	
}
