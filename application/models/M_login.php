<?php

class M_login extends CI_Model
{

    public function cek_login($e, $p)
    {
        $q = $this->db->get_where('user', array('email' => $e, 'password' => $p));
        return $q;
    }

    public function cek_user($e, $p)
    {
        $q = $this->db->get_where('user', array('email' => $e, 'password' => $p));
        return $q;
    }

    public function role($where)
    {
        return $this->db->get_where('user', array('email' => $where));
    }
}
