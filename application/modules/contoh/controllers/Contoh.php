<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->model('M_contoh');
	}

	public function index()
	{
		$this->load->view('contoh/form');
	}
	public function proses_simpan()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$arrayName = array('username' => $nama,
		'email' => $email );
		$this->M_contoh->simpan($arrayName);
		redirect('contoh/listdata');
	}
	public function listdata()
	{
		$data['list']=$this->M_contoh->getdata();
		// var_dump($data);exit;

		$this->load->view('contoh/listdata',$data);
	}
	public function editdata($id_user)
	{
		// var_dump($id_user);exit;
		// $nama=$this->input->post('nama');
		// $email=$this->input->post('email');
		$data['daftar']=$this->M_contoh->getdata_user($id_user);
		// var_dump($data);exit;

	    $this->load->view('contoh/formupdate', $data);
	}
	public function simpan()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$id_user= $this->input->post('id_user');
		$arrayName = array('username' => $nama,
		'email' => $email );
		$this->M_contoh->simpan_update($arrayName, $id_user);
		redirect('contoh/listdata');

	}

}
