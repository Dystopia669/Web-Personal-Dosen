<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceController extends CI_Controller
{


    public function index()
    {
        $this->load->view('main/header');
        $this->load->view('visitor/service');
        $this->load->view('main/footer');
    }
}
