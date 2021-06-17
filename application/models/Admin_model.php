<?php

class Admin_model extends CI_Model {


public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
}


public function login($email,$password)
	{
		$sql = $this->db->query("select * from pengguna where email='".$email."' and password='".$password."'");
		$data = $sql->result_array();
		
		return $data;
	}

//Product

public function getallproduk()
{
	$sql = $this->db->query("select * from produk")->result_array();
	return $sql;

}

public function getallpengajar(){

	$sql = $this->db->query("select * from pengguna where status = 'pengajar'")->result_array();
	return $sql;

}

public function insert_produk(){

	$foto = str_replace(" ","_",$_FILES['foto']['name']);
	$url = base_url('asset/upload/produk/'.$foto);
	if(!empty($foto)) {
		$tujuan_file = realpath(APPPATH.'../asset/upload/produk/');
		$konfigurasi = array(
			'allowed_types'	=> 'jpg|jpeg|png|JPG',
			'upload_path'	=> $tujuan_file,
			'remove_spaces'	=> TRUE,
			'file_name' => $foto
		);

		$this->load->library('upload',$konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'foto'=>$url,
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->insert('produk',$data);
		//print_r($data);

	}else{

		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->insert('produk',$data);
	}

}



public function update_produk(){
	$id = $this->input->post('id_produk');
	$foto = str_replace(" ","_",$_FILES['foto']['name']);
	$url = base_url('asset/upload/produk/'.$foto);
	if(!empty($foto)) {
		$tujuan_file = realpath(APPPATH.'../asset/upload/produk/');
		$konfigurasi = array(
			'allowed_types'	=> 'jpg|jpeg|png|JPG',
			'upload_path'	=> $tujuan_file,
			'remove_spaces'	=> TRUE,
			'file_name' => $foto
		);

		$this->load->library('upload',$konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'foto'=>$url,
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->where('id_produk',$id);
		$this->db->update('produk',$data);
	}else{
		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->where('id_produk',$id);
		$this->db->update('produk',$data);
	}
}

public function delete_produk($id)
{
	$sql = $this->db->query("delete from produk where id_produk = '".$id."'");
	return $sql;

}


public function select_produk($id)
{
	$sql = $this->db->query("select * from produk where id_produk = '".$id."'")->result_array();
	return $sql;

}


public function convert_id($id){
	$data = $this->db->query("select * from pengguna where id_pengguna = '".$id."'")->result_array();
	return $data[0]['nama'];
}




//Mata Pelajaran


public function getallmp()
{
	$sql = $this->db->query("select * from mata_pelajaran")->result_array();
	return $sql;

}

public function select_mp($id){

	$sql = $this->db->query("select * from mata_pelajaran where id_mp = '".$id."'")->result_array();
	return $sql;

}


public function insert_mp(){
		$data = array(
			'nm_pelajaran'=>$this->input->post('nm_pelajaran'),
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->insert('mata_pelajaran',$data);
	}


public function update_mp(){
	$id = $this->input->post('id_mp');
	$data = array(
		'nm_pelajaran'=>$this->input->post('nm_pelajaran'),
		'id_pengguna'=>$this->input->post('id_pengguna')
	);
	$this->db->where('id_mp',$id);
	$this->db->update('mata_pelajaran',$data);
}



//Pengguna


public function getallpengguna()
{
	$sql = $this->db->query("select * from pengguna")->result_array();
	return $sql;

}

public function select_pengguna($id){

	$sql = $this->db->query("select * from pengguna where id_pengguna = '".$id."'")->result_array();
	return $sql;

}


public function insert_pengguna(){
		$data = array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
			'status'=>$this->input->post('status')
		);
		$this->db->insert('pengguna',$data);
	}


public function update_pengguna(){
	$id = $this->input->post('id_pengguna');
	if(!empty($this->input->post('password'))){

	$data = array(
		'nama'=>$this->input->post('nama'),
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password')),
		'status'=>$this->input->post('status')
	);
	}else{
		$data = array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'status'=>$this->input->post('status')
		);
	}

	$this->db->where('id_pengguna',$id);
	$this->db->update('pengguna',$data);
}





//Kurikulum


public function getallkurikulum()
{
	$sql = $this->db->query("select * from kurikulum")->result_array();
	return $sql;

}

public function select_kurikulum($id){

	$sql = $this->db->query("select * from kurikulum where id_kurikulum = '".$id."'")->result_array();
	return $sql;

}


public function insert_kurikulum(){
		$data = array(
			'id_mp'=>$this->input->post('id_mp'),
			'materi'=>$this->input->post('materi'),
			'url_video'=>$this->input->post('url_video')
		);
		$this->db->insert('kurikulum',$data);
	}


public function update_kurikulum(){
	$id = $this->input->post('id_kurikulum');
	$data = array(
		'id_mp'=>$this->input->post('id_mp'),
		'materi'=>$this->input->post('materi'),
		'url_video'=>$this->input->post('url_video')
	);
	$this->db->where('id_kurikulum',$id);
	$this->db->update('kurikulum',$data);
}



//Pemesanan


public function getcustomer()
{
	$sql = $this->db->query("select * from order_pengguna")->result_array();
	return $sql;

}


public function getallpemesanan($id)
{
	$sql = $this->db->query("select * from pemesanan where id_customer = '".$id."'")->result_array();
	return $sql;

}


public function approval_pemesanan($id)
{
	$sql = $this->db->query("update order_pengguna set approve = 'Y' where id = '".$id."'");
	if($sql){
		$data = $this->db->query("select * from order_pengguna where id = '".$id."'")->result_array();
		$pass = "12345";
		$this->db->query("insert into pengguna(nama,email,password,status)values('".$data[0]['nama']."','".$data[0]['email']."','".md5($pass)."','siswa')");		
	}
	return true;
}

} 
?>
