<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

    public function index(){
        $this->load->view('admin/login');
    }

    public function tes(){
        // $this->load->view('admin/login');
        echo "TEst";
    }

    public function dashboard(){
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
}