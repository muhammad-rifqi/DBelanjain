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
class Reseller extends CI_Controller {
	function index(){
		echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Maaf, untuk Login Reseller Sudah Pindah Kesini!!!</center></div>');
		redirect('auth/login');
	}

	function download(){
		$name = cetak($this->uri->segment(3));
		$data = file_get_contents("asset/files/".$name);
		force_download($name, $data);
	}
}
