<?php

class Login extends CI_Model
{
    /*
    * login admin 
    */
    public function loginAdmin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('sia.d_yud_admin', array('username' => $username))
                    ->row_array();

        if ($admin) {
            // check password
            if ($password == $admin['password']) {
                $result = array(
                    'msg' => 'success',
                    'data' => $admin
                );
            } else {
                $result = array(
                    'msg' => 'error'
                );
            }
        } else {
            $result = array(
                'msg' => 'error'
            );
        }

        return $result;
    }

    public function getSessionAdmin($session)
    {
        $session = $this->db->get_where('sia.d_yud_admin', array('username' => $session))
                    ->result();

        if ($session) {
            $session = $session[0];
        } else {
            $session = $session;
        }

        return $session;
    }

    public function getAdmin()
    {
        $auth = $this->db->get('sia.d_yud_admin');

        return $auth->result();
    }

    public function getAdminById($username)
    {
        $this->db->select('*');
        $this->db->from('sia.d_yud_admin');
        $this->db->where('username', $username);
        $auth = $this->db->get();

        return $auth->result()[0];
    }
}