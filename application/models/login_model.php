<?php

class login_model extends CI_Model
{
    public function cek_login($email, $password)
    {
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        return $this->db->get('user');
    }

    public function getLoginData($mail, $pass)
    {
        $e  = $mail;
        $p  = MD5($pass);

        $query_cekLogin = $this->db->get_where('email', array('email' => $e, 'password' => $p));

        if (count($query_cekLogin->result()) > 0)
        {
            foreach ($query_cekLogin->result() as $qck)
            {
                foreach ($query_cekLogin->result() as $ck)
                {
                    $sess_data ['logged_in']    = TRUE;
                    $sess_data ['email']        = $ck->email;
                    $sess_data ['password']     = $ck->password;
                    $sess_data ['level']        = $ck->level;
                }
                redirect('./administrator/dashboard');
            }
        }
    }
}