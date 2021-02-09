<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        //$this->load->model('Auth_model');
        
    }
	public function index()
	{ 	
		$this->load->view('beranda/beranda');
		$this->load->view('template/header');
		$this->load->view('template/footer');
	}


	
}
