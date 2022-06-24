<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutController extends CI_Controller
{


    public function index()
    {
        $this->load->view('main/header');
        $this->load->view('visitor/about');
        $this->load->view('main/footer');
    }
}
