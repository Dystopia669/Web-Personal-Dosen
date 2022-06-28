<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{


    public function index()
    {
        $this->load->view('admin/auth-login');
    }
}
