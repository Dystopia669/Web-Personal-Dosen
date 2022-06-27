<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
{


    public function index()
    {
        $this->load->view('main/header');
        $this->load->view('visitor/contact');
        $this->load->view('main/footer');
    }
}
