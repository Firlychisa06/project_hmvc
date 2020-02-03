<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
	}

	public function index()
	{
		$this->load->view('starter');
	}

	public function form()
	{
		$this->load->view('form');
	}
}
