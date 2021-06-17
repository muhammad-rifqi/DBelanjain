<?php

class User_model extends CI_Model {


	public function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
	$this->load->library('session');
	}

	public function produk_flashdeal($id_reseller,$id_produk_perusahaan,$limit){
        return $this->db->query("SELECT z.id_produk_penawaran, a.*, b.nama_reseller, c.nama_kota FROM rb_produk_penawaran z JOIN rb_produk a ON z.id_produk=a.id_produk LEFT JOIN rb_reseller b ON a.id_reseller=b.id_reseller
                                    LEFT JOIN rb_kota c ON b.kota_id=c.kota_id 
                                        where a.id_reseller!='$id_reseller' AND aktif='Y' ORDER BY RAND() LIMIT $limit")->result_array();
    }

	public function category_product(){
		return $this->db->query("SELECT * FROM (SELECT a.*, b.jumlah FROM
		(SELECT * FROM rb_kategori_produk) as a LEFT JOIN
		(SELECT z.id_kategori_produk, COUNT(*) jumlah FROM rb_penjualan_detail y JOIN rb_produk z ON y.id_produk=z.id_produk GROUP BY z.id_kategori_produk HAVING COUNT(z.id_kategori_produk)) as b on a.id_kategori_produk=b.id_kategori_produk) as x ORDER BY x.jumlah DESC LIMIT 6")->result_array();
	}

} ?>
