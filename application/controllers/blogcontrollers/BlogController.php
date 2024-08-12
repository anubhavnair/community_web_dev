<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('navbar');
        $this->load->view('blog/blog_test');
		$this->load->view('footer');
	}

	// public function create(){
	// 	$this->load->view('blog/create');
	// }

	// public function update($id){
	// 	$this->load->view('blog/update');
	// }

	// public function delete($id){
	// 	$this->load->view('blog/delete');
	// }
}
