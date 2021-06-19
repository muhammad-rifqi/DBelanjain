<?php
/*
-- ---------------------------------------------------------------
-- TAJALAPAK MARKETPLACE PRO MULTI BUYER MULTI SELLER + SUPPORT RESELLER SYSTEM
-- CREATED BY : ROBBY PRIHANDAYA (0812-6777-1344)
-- COPYRIGHT  : Copyright (c) 2018 - 2021, PHPMU.COM. (https://phpmu.com/)
-- LICENSE    : Commercial Software, (Hanya untuk 1 domain)
-- CREATED ON : 2019-03-26
-- UPDATED ON : 2021-02-09
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    function __construct(){
		parent::__construct();
	}
	

	public function registerprocess(){
	
			if ($this->input->post('password')==$this->input->post('repassword')){
				$cek_username = $this->db->query("SELECT * FROM rb_konsumen where username='".$this->input->post('username')."'");
				if ($cek_username->num_rows()<='0'){
					$ex = explode('@',$this->input->post('email'));
					$data = array('username'=>$this->input->post('username'),
								'password'=>hash("sha512", md5($this->input->post('password'))),
								'nama_lengkap'=>$ex[0],
								'email'=>$this->input->post('email'),
								'jenis_kelamin'=>'Laki-laki',
								'no_hp'=>$this->input->post('phone'),
								'token'=>'Y',
								'referral_id'=>$this->session->referral,
								'tanggal_daftar'=>date('Y-m-d H:i:s'));
					$this->load->model('model_app');
					$this->model_app->insert('rb_konsumen',$data);
					$id = $this->db->insert_id();
					$this->session->set_userdata(array('id_konsumen'=>$id, 'level'=>'konsumen'));

					$tgl_kirim = date("d-m-Y H:i:s");
					$iden = $this->db->query("SELECT * FROM identitas where id_identitas='1'")->row_array();
					//$subject      = "$iden[pengirim_email] - Pendaftaran Sukses,..";
					$logo = $this->db->query("SELECT * FROM logo ORDER BY id_logo DESC LIMIT 1")->row_array();
					$this->load->model('model_reseller');
					$kons = $this->model_reseller->profile_konsumen($id)->row_array();

					//$message  = "<html><body><span style='font-size:18px; color:green'>Selamat Bergabung di $iden[url]</span><br>
					//						Hai $kons[nama_lengkap]! Terima kasih telah mendaftar di <a style='text-decoration:none; color:#000' href='$iden[url]'>$iden[url]</a>. <br>
					//
					//						Silakan untuk melengkapi data diri anda sesuai dengan identitas pada KTP di <a href='".base_url()."members/edit_profile'>Disini</a>.<br><br>

					//							Akun Anda sudah kami aktifkan. Anda mendaftar menggunakan email: $kons[email].<br> 
					//							Masukkan email dan password yang Anda daftarkan tersebut setiap kali log in ke $iden[url].<br><br>
					//
					//						Siap mencari produk dari ribuan<br>
					//						penjual online di Indonesia? <a href='".base_url()."produk'>Klik Disini</a></body></html> \n";
					
					//echo kirim_email($subject,$message,$kons['email']); 
					//echo $this->session->set_flashdata('message', '<div class="alert alert-success"><center>Terima kasih, anda sudah terdaftar di <b>'.$iden['url'].'</b> silahkan cek email untuk verifikasi!</center></div>');
					redirect('user/profile');
				}else{
					echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Username/Email/No Telpon Telah Digunakan!</center></div>');
					redirect('auth/login');
				}
			}else{
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Password anda tidak Valid!</center></div>');
				redirect('auth/login');
			}
		
	}


	
	public function login(){

		$this->load->view('home/login');

	}
	

	
	public function register(){

		$this->load->view('home/register');

	}
	
	public function loginprocess(){
				$username = $this->input->post('username');
				$password = hash("sha512", md5(strip_tags($this->input->post('password'))));
				$cek = $this->db->query("SELECT * FROM rb_konsumen where (username='".$username."' OR email='".$username."' OR no_hp='".$username."') AND password='".$password."'");
			    $row = $cek->row_array();
			    $total = $cek->num_rows();
				if ($total > 0){
					echo $total;
				}else{
					echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Maaf, Username atau password salah!</center></div>');
					redirect('index.php/auth/login');
				}
	
	}

	public function lupass(){
		if (isset($_POST['submit3'])){
			$email = cetak($this->input->post('a'));
			$no_telpon = cetak($this->input->post('b'));
			$cek = $this->db->query("SELECT * FROM rb_konsumen where email='$email' OR username='$email' OR no_hp='$no_telpon'");
		    $total = $cek->num_rows();
			if ($total > 0){
				$data = $cek->row_array();
				$tgl_kirim = date("d-m-Y H:i:s");
				$iden = $this->db->query("SELECT * FROM identitas where id_identitas='1'")->row_array();
				$subject      = "$iden[pengirim_email] - Permintaan pergantian Password,..";
				$logo = $this->db->query("SELECT * FROM logo ORDER BY id_logo DESC LIMIT 1")->row_array();
				
				$message      = "<html><body>Halooo! <b>".$data['nama_lengkap']."</b> ... <br> 
					Hari ini pada tanggal <span style='color:red'>$tgl_kirim</span> anda meminta akses untuk reset password...<br><br>

					Silahkan klik link berikut untuk mengubah password : <br>
					<a href='".base_url()."auth/resetpassword?token=$data[password].$data[id_konsumen]'>".base_url()."auth/resetpassword?token=$data[password].$data[id_konsumen]</a><br><br>

					Jika permintaan ini bukan dari anda maka silahkan melaporkannya kepada kami dengan mengirim email ke $iden[email].<br><br>

					Jika Anda mencurigai seseorang mungkin memiliki akses tidak sah ke akun Anda, kami sarankan Anda mengubah kata sandi sebagai tindakan pencegahan dengan mengunjungi $iden[url].</body></html> \n";

				echo kirim_email($subject,$message,$data['email']);
				echo $this->session->set_flashdata('message', '<div class="alert alert-success"><center>Permintaan terkirim!, Cek email anda.</center></div>');
			}else{
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Maaf, data anda tidak ditemukan!</center></div>');
			}
			redirect('auth/login');
		}
	}

	function resetpassword(){
		$ex = explode('.',cetak($this->input->get('token')));
		$cek = $this->db->query("SELECT * FROM rb_konsumen where password='".cetak($ex[0])."' AND id_konsumen='".$ex[1]."'");
		if ($cek->num_rows()>=1){
			if (isset($_POST['submit'])){
				if (cetak($this->input->post('pass'))==cetak($this->input->post('repass'))){
					$password = hash("sha512", md5(strip_tags($this->input->post('pass'))));
					$this->db->query("UPDATE rb_konsumen set password='$password' where password='".cetak($ex[0])."' AND id_konsumen='".cetak($ex[1])."'");
					$row = $cek->row_array();
					$this->session->set_userdata(array('id_konsumen'=>$row['id_konsumen'], 'level'=>'konsumen'));
					if ($this->session->idp!=''){
						$data = array('kode_transaksi'=>$this->session->idp,
			        			  'id_pembeli'=>$row['id_konsumen'],
			        			  'id_penjual'=>$this->session->reseller,
			        			  'status_pembeli'=>'konsumen',
			        			  'status_penjual'=>'reseller',
			        			  'waktu_transaksi'=>date('Y-m-d H:i:s'),
			        			  'proses'=>'0');
						$this->model_app->insert('rb_penjualan',$data);
						$id = $this->db->insert_id();

						$query_temp = $this->db->query("SELECT * FROM rb_penjualan_temp where session='".$this->session->idp."'");
						foreach ($query_temp->result_array() as $r) {
							$data = array('id_penjualan'=>$id,
			        			  'id_produk'=>$r['id_produk'],
			        			  'jumlah'=>$r['jumlah'],
			        			  'diskon'=>$r['diskon'],
			        			  'harga_jual'=>$r['harga_jual'],
			        			  'satuan'=>$r['satuan']);
							$this->model_app->insert('rb_penjualan_detail',$data);
						}
						$this->db->query("DELETE FROM rb_penjualan_temp where session='".$this->session->idp."'");

						$this->session->unset_userdata('reseller');
						$this->session->unset_userdata('idp');
						$this->session->set_userdata(array('idp'=>$id));
					}
					redirect('members/profile');
				}else{
					echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Maaf, Password tidak sama!</center></div>');
					redirect('auth/resetpassword?token='.cetak($this->input->get('token')));
				}
			}else{
				$data['title'] = 'Reset Password';
				$this->template->load(template().'/template',template().'/reseller/view_lupass',$data);
			}
		}else{
			echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Maaf, Token sudah kadaluarsa!</center></div>');
			redirect('auth/login');
		}
	}

	function logout(){
		cek_session_members();
		$this->session->sess_destroy();
		redirect('main');
	}
}
