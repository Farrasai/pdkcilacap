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
        $this->form_validation->set_rules('email','email','required', [
            'required' => 'メール欄は必須です！'
        ]);
        $this->form_validation->set_rules('password','password','required', [
            'required' => 'パスワードフィールドは必須です！'
        ]);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/login');
            $this->load->view('templates_administrator/footer');
        }
        else
        {
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
                    $sess_data['username']      = $ck->username;
                    $sess_data['email']         = $ck->email;
                    $sess_data['level']         = $ck->level;

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
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>申し訳ありませんが、ユーザー名とパスワードが間違っています。もう一度お試しください</div>');
                    redirect('./administrator/auth');
                }
            }
            else
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>申し訳ありませんが、ユーザー名とパスワードが間違っています。もう一度お試しください</div>');
                redirect('./administrator/auth');
            }
        }
    }
}