<?php

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/login');
        $this->load->view('templates_administrator/footer');
    }
    public function proses_login()
    {
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/login');
            $this->load->view('templates_administrator/footer');
        }
        else
        {
            $username   = $this->input->post('email');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');

            $mail       = $email;
            $pass       = MD5($password);
            
            $cek        = $this->login_model->cek_login($email, $pass);
            if ($cek->num_rows() > 0)
            {
                foreach ($cek->result as $ck)
                {
                    $sess_data['id_user']       = $ck->id_user;
                    $sess_data['username']      = $ck->id_user;
                    $sess_data['email']         = $ck->id_user;
                    $sess_data['level']          = $ck->id_user;

                    $this->session->set_userdata($sess_data);
                }
                if($sess_data['level'] == 'admin')
                {
                    redirect('./administrator/dashboard');
                }
                else if($sess_data['level'] == 'user')
                {
                    redirect('./administrator/dashboard');
                }
                else
                {
                    $this->session->set_flashdata('pesan', 'Maaf Username dan Password anda salah silakan coba kembali');
                    redirect('./administrator/auth');
                }
            }
            else
            {
                $this->session->set_flashdata('pesan', 'Maaf Username dan Password anda salah silakan coba kembali');
                redirect('./administrator/auth');
            }
        }
    }
}