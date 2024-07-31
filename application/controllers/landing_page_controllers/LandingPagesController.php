<?php
defined('BASEPATH') or exit('no direct script allowed');

class LandingPagesController extends CI_Controller{
    public function index(){
        $this->load->view('landing_views/index');
    }
}

?>