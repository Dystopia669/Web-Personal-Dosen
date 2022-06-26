<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{


    public function index()
    {
        $this->load->view('main/header');
        $this->load->view('visitor/home');
        $this->load->view('main/footer');
    }
}
