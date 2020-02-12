<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
	}

	// public function index()
	// {
	// 	$this->load->view('starter');
	// }

	public function form_add_pegawai()
	{
		$this->load->view('form_pegawai');
	}

	public function list_data_pegawai()
	{
		$this->load->view('index');
	}
}
