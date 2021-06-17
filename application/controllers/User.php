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


	public function detail(){
		$ids = cetak($this->uri->segment(3));
		$dat = $this->db->query("SELECT * FROM rb_produk where produk_seo='$ids' AND id_reseller!='0'");
		$row = $dat->row();
		if (isset($_POST['submit_rating'])){
			$data = array('id_konsumen'=>$this->session->id_konsumen,
							'id_produk'=>$row->id_produk,
							'rating'=>cetak($this->input->post('rating')),
							'ulasan'=>cetak($this->input->post('ulasan')),
							'waktu_kirim'=>date('Y-m-d H:i:s'));
			$this->model_app->insert('rb_produk_ulasan',$data);
			notif_ulasan($row->id_produk,$this->session->id_konsumen,cetak($this->input->post('rating')));
			echo $this->session->set_flashdata('message_ulasan', '<div class="alert alert-success"><center>Berhasil Mengirimkan Ulasan,..</center></div>');
			redirect('produk/detail/'.$row->produk_seo);

		}elseif (isset($_POST['submit_pertanyaan'])){
			$data = array('id_produk'=>$row->id_produk,
							'id_konsumen'=>$this->session->id_konsumen,
							'reply'=>'0',
							'isi_pesan'=>cetak($this->input->post('pesan',TRUE)),
							'tanggal_komentar'=>date('Y-m-d'),
							'jam_komentar'=>date('H:i:s'));
			$this->model_app->insert('tbl_comment',$data);
			notif_diskusi($row->id_produk,$this->session->id_konsumen);
			redirect('produk/detail/'.$row->produk_seo);

		}elseif (isset($_POST['submit_balasan'])){
			$data = array('id_produk'=>$row->id_produk,
							'id_konsumen'=>$this->session->id_konsumen,
							'reply'=>cetak($this->input->post('reply',TRUE)),
							'isi_pesan'=>cetak($this->input->post('pesan',TRUE)),
							'tanggal_komentar'=>date('Y-m-d'),
							'jam_komentar'=>date('H:i:s'));
			$this->model_app->insert('tbl_comment',$data);
			redirect('produk/detail/'.$row->produk_seo);
		}else{
			$total = $dat->num_rows();
			if ($total == 0){ redirect('main'); }

			$dataa = array('dilihat'=>$row->dilihat+1);
			$where = array('id_produk' => $row->id_produk);
			$this->model_utama->update('rb_produk', $dataa, $where);

			$tag_seox = explode(',',$row->tag);
			for ($i=0; $i <count($tag_seox); $i++){ 
				$tagc = $this->db->query("SELECT count FROM tagpro where tag_seo='".$tag_seox[$i]."'")->row_array();
				$data_tag = array('count'=>$tagc['count']+1);
				$where_tag = array('tag_seo' => $tag_seox[$i]);
				$this->model_app->update('tagpro', $data_tag, $where_tag);
			}

			$data['title'] = $row->nama_produk;
			$data['record'] = $this->model_app->view_where('rb_produk',array('id_produk'=>$row->id_produk))->row_array();
			//$this->template->load(template().'/template',template().'/reseller/view_produk_detail',$data);
			$data['detail_produk'] = $this->db->query("SELECT * FROM rb_produk where produk_seo='$ids' AND id_reseller!='0'")->result_array();
			
			$a['header'] =  $this->load->view('layout/header_frontend',null, true);
			$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
			$a['content'] =  $this->load->view('home/view_produk',$t, true);
			$page = $this->load->view('layout/layout_frontend',$a);
			return $page;
		}
	}


}
