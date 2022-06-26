<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ResumeController extends CI_Controller
{


    public function index()
    {
        $this->load->view('main/header');
        $this->load->view('visitor/resume');
        $this->load->view('main/footer');
    }
}
