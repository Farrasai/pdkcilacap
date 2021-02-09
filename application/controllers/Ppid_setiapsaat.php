<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ppid_setiapsaat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ppid_setiapsaat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'ppid_setiapsaat/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'ppid_setiapsaat/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'ppid_setiapsaat/index.html';
            $config['first_url'] = base_url() . 'ppid_setiapsaat/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ppid_setiapsaat_model->total_rows($q);
        $ppid_setiapsaat = $this->Ppid_setiapsaat_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ppid_setiapsaat_data' => $ppid_setiapsaat,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('ppid_setiapsaat/ppid_setiapsaat_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ppid_setiapsaat_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_setiapsaat' => $row->id_setiapsaat,
		'judul' => $row->judul,
		'isi' => $row->isi,
		'unduh' => $row->unduh,
		'created_at' => $row->created_at,
		'updated_at' => $row->updated_at,
	    );
            $this->load->view('ppid_setiapsaat/ppid_setiapsaat_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ppid_setiapsaat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ppid_setiapsaat/create_action'),
	    'id_setiapsaat' => set_value('id_setiapsaat'),
	    'judul' => set_value('judul'),
	    'isi' => set_value('isi'),
	    'unduh' => set_value('unduh'),
	    'created_at' => set_value('created_at'),
	    'updated_at' => set_value('updated_at'),
	);
        $this->load->view('ppid_setiapsaat/ppid_setiapsaat_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'isi' => $this->input->post('isi',TRUE),
		'unduh' => $this->input->post('unduh',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Ppid_setiapsaat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ppid_setiapsaat'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ppid_setiapsaat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ppid_setiapsaat/update_action'),
		'id_setiapsaat' => set_value('id_setiapsaat', $row->id_setiapsaat),
		'judul' => set_value('judul', $row->judul),
		'isi' => set_value('isi', $row->isi),
		'unduh' => set_value('unduh', $row->unduh),
		'created_at' => set_value('created_at', $row->created_at),
		'updated_at' => set_value('updated_at', $row->updated_at),
	    );
            $this->load->view('ppid_setiapsaat/ppid_setiapsaat_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ppid_setiapsaat'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_setiapsaat', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'isi' => $this->input->post('isi',TRUE),
		'unduh' => $this->input->post('unduh',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Ppid_setiapsaat_model->update($this->input->post('id_setiapsaat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ppid_setiapsaat'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ppid_setiapsaat_model->get_by_id($id);

        if ($row) {
            $this->Ppid_setiapsaat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ppid_setiapsaat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ppid_setiapsaat'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('isi', 'isi', 'trim|required');
	$this->form_validation->set_rules('unduh', 'unduh', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

	$this->form_validation->set_rules('id_setiapsaat', 'id_setiapsaat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "ppid_setiapsaat.xls";
        $judul = "ppid_setiapsaat";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Isi");
	xlsWriteLabel($tablehead, $kolomhead++, "Unduh");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

	foreach ($this->Ppid_setiapsaat_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->isi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->unduh);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Ppid_setiapsaat.php */
/* Location: ./application/controllers/Ppid_setiapsaat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:31 */
/* http://harviacode.com */