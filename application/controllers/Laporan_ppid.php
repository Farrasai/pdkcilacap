<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan_ppid extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_ppid_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'laporan_ppid/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'laporan_ppid/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'laporan_ppid/index.html';
            $config['first_url'] = base_url() . 'laporan_ppid/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Laporan_ppid_model->total_rows($q);
        $laporan_ppid = $this->Laporan_ppid_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'laporan_ppid_data' => $laporan_ppid,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('laporan_ppid/laporan_ppid_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Laporan_ppid_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_laporan' => $row->id_laporan,
		'judul' => $row->judul,
		'tahun' => $row->tahun,
		'unduh' => $row->unduh,
		'created_at' => $row->created_at,
		'updated_at' => $row->updated_at,
	    );
            $this->load->view('laporan_ppid/laporan_ppid_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan_ppid'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('laporan_ppid/create_action'),
	    'id_laporan' => set_value('id_laporan'),
	    'judul' => set_value('judul'),
	    'tahun' => set_value('tahun'),
	    'unduh' => set_value('unduh'),
	    'created_at' => set_value('created_at'),
	    'updated_at' => set_value('updated_at'),
	);
        $this->load->view('laporan_ppid/laporan_ppid_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'unduh' => $this->input->post('unduh',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Laporan_ppid_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('laporan_ppid'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Laporan_ppid_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('laporan_ppid/update_action'),
		'id_laporan' => set_value('id_laporan', $row->id_laporan),
		'judul' => set_value('judul', $row->judul),
		'tahun' => set_value('tahun', $row->tahun),
		'unduh' => set_value('unduh', $row->unduh),
		'created_at' => set_value('created_at', $row->created_at),
		'updated_at' => set_value('updated_at', $row->updated_at),
	    );
            $this->load->view('laporan_ppid/laporan_ppid_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan_ppid'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_laporan', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'unduh' => $this->input->post('unduh',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Laporan_ppid_model->update($this->input->post('id_laporan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('laporan_ppid'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Laporan_ppid_model->get_by_id($id);

        if ($row) {
            $this->Laporan_ppid_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('laporan_ppid'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan_ppid'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	$this->form_validation->set_rules('unduh', 'unduh', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

	$this->form_validation->set_rules('id_laporan', 'id_laporan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "laporan_ppid.xls";
        $judul = "laporan_ppid";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun");
	xlsWriteLabel($tablehead, $kolomhead++, "Unduh");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

	foreach ($this->Laporan_ppid_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun);
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

/* End of file Laporan_ppid.php */
/* Location: ./application/controllers/Laporan_ppid.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:31 */
/* http://harviacode.com */