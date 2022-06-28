<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('admin/auth-login');
    }

    public function login()
    {
        $e = $this->input->post('email');
        $p = $this->input->post('password');

        $cek = $this->M_login->cek_login($e, $p);
        $role = $cek->row();
        if ($cek->row() == 1) {
            $data_session = array(
                'email' => $e,
                'nama' => $role->nama,
                'role' => $role->role,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('alert', 'logged');
            if ($this->session->userdata('role') == 'admin') {
                redirect('dashboard');
            } else {
                redirect('resume');
            }
        } else {
            $this->session->set_flashdata('alert', 'galog');
            redirect('login');
        }
    }
}
