<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
	}

	// public function index()
	// {
	// 	$this->load->view('starter');
	// }

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function forget()
	{
		$this->load->view('forget');
	}
}
