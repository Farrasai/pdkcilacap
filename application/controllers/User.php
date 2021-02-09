<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'user/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'user/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'user/index.html';
            $config['first_url'] = base_url() . 'user/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->User_model->total_rows($q);
        $user = $this->User_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_data' => $user,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('user/user_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'namalengkap' => $row->namalengkap,
		'username' => $row->username,
		'password' => $row->password,
		'email' => $row->email,
		'foto' => $row->foto,
		'created_by' => $row->created_by,
		'updated_by' => $row->updated_by,
		'created_at' => $row->created_at,
		'updated_at' => $row->updated_at,
		'role' => $row->role,
		'ip' => $row->ip,
		'last_login' => $row->last_login,
	    );
            $this->load->view('user/user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
	    'id_user' => set_value('id_user'),
	    'namalengkap' => set_value('namalengkap'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'email' => set_value('email'),
	    'foto' => set_value('foto'),
	    'created_by' => set_value('created_by'),
	    'updated_by' => set_value('updated_by'),
	    'created_at' => set_value('created_at'),
	    'updated_at' => set_value('updated_at'),
	    'role' => set_value('role'),
	    'ip' => set_value('ip'),
	    'last_login' => set_value('last_login'),
	);
        $this->load->view('user/user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namalengkap' => $this->input->post('namalengkap',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'email' => $this->input->post('email',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'updated_by' => $this->input->post('updated_by',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'role' => $this->input->post('role',TRUE),
		'ip' => $this->input->post('ip',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
	    );

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'namalengkap' => set_value('namalengkap', $row->namalengkap),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'email' => set_value('email', $row->email),
		'foto' => set_value('foto', $row->foto),
		'created_by' => set_value('created_by', $row->created_by),
		'updated_by' => set_value('updated_by', $row->updated_by),
		'created_at' => set_value('created_at', $row->created_at),
		'updated_at' => set_value('updated_at', $row->updated_at),
		'role' => set_value('role', $row->role),
		'ip' => set_value('ip', $row->ip),
		'last_login' => set_value('last_login', $row->last_login),
	    );
            $this->load->view('user/user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'namalengkap' => $this->input->post('namalengkap',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'email' => $this->input->post('email',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'created_by' => $this->input->post('created_by',TRUE),
		'updated_by' => $this->input->post('updated_by',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'role' => $this->input->post('role',TRUE),
		'ip' => $this->input->post('ip',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
	    );

            $this->User_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namalengkap', 'namalengkap', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('created_by', 'created by', 'trim|required');
	$this->form_validation->set_rules('updated_by', 'updated by', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('role', 'role', 'trim|required');
	$this->form_validation->set_rules('ip', 'ip', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');

	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user.xls";
        $judul = "user";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Namalengkap");
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "Created By");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated By");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
	xlsWriteLabel($tablehead, $kolomhead++, "Role");
	xlsWriteLabel($tablehead, $kolomhead++, "Ip");
	xlsWriteLabel($tablehead, $kolomhead++, "Last Login");

	foreach ($this->User_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namalengkap);
	    xlsWriteLabel($tablebody, $kolombody++, $data->username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteNumber($tablebody, $kolombody++, $data->created_by);
	    xlsWriteNumber($tablebody, $kolombody++, $data->updated_by);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);
	    xlsWriteNumber($tablebody, $kolombody++, $data->role);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ip);
	    xlsWriteLabel($tablebody, $kolombody++, $data->last_login);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:32 */
/* http://harviacode.com */