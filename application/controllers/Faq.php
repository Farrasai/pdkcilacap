<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Faq_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'faq/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'faq/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'faq/index.html';
            $config['first_url'] = base_url() . 'faq/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Faq_model->total_rows($q);
        $faq = $this->Faq_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'faq_data' => $faq,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('faq/faq_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Faq_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_faq' => $row->id_faq,
		'author' => $row->author,
		'judul' => $row->judul,
		'deskripsi' => $row->deskripsi,
		'created_at' => $row->created_at,
		'update_at' => $row->update_at,
	    );
            $this->load->view('faq/faq_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('faq'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('faq/create_action'),
	    'id_faq' => set_value('id_faq'),
	    'author' => set_value('author'),
	    'judul' => set_value('judul'),
	    'deskripsi' => set_value('deskripsi'),
	    'created_at' => set_value('created_at'),
	    'update_at' => set_value('update_at'),
	);
        $this->load->view('faq/faq_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'author' => $this->input->post('author',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'update_at' => $this->input->post('update_at',TRUE),
	    );

            $this->Faq_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('faq'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Faq_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('faq/update_action'),
		'id_faq' => set_value('id_faq', $row->id_faq),
		'author' => set_value('author', $row->author),
		'judul' => set_value('judul', $row->judul),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'created_at' => set_value('created_at', $row->created_at),
		'update_at' => set_value('update_at', $row->update_at),
	    );
            $this->load->view('faq/faq_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('faq'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_faq', TRUE));
        } else {
            $data = array(
		'author' => $this->input->post('author',TRUE),
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'update_at' => $this->input->post('update_at',TRUE),
	    );

            $this->Faq_model->update($this->input->post('id_faq', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('faq'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Faq_model->get_by_id($id);

        if ($row) {
            $this->Faq_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('faq'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('faq'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('author', 'author', 'trim|required');
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('update_at', 'update at', 'trim|required');

	$this->form_validation->set_rules('id_faq', 'id_faq', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "faq.xls";
        $judul = "faq";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Author");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Update At");

	foreach ($this->Faq_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->author);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->update_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Faq.php */
/* Location: ./application/controllers/Faq.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:31 */
/* http://harviacode.com */