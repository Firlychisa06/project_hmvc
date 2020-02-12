<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
	}

	// public function index()
	// {
	// 	$this->load->view('starter');
	// }

	public function form_add()
	{
		$this->load->view('form_surat_keluar');
	}

	public function list_data()
	{
		$this->load->view('index');
	}
}
