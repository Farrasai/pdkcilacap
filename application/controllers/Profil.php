<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'profil/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'profil/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'profil/index.html';
            $config['first_url'] = base_url() . 'profil/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Profil_model->total_rows($q);
        $profil = $this->Profil_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'profil_data' => $profil,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('profil/profil_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Profil_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_profil' => $row->id_profil,
		'visi' => $row->visi,
		'misi' => $row->misi,
		'tugas_fungsi' => $row->tugas_fungsi,
		'foto' => $row->foto,
	    );
            $this->load->view('profil/profil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('profil/create_action'),
	    'id_profil' => set_value('id_profil'),
	    'visi' => set_value('visi'),
	    'misi' => set_value('misi'),
	    'tugas_fungsi' => set_value('tugas_fungsi'),
	    'foto' => set_value('foto'),
	);
        $this->load->view('profil/profil_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'visi' => $this->input->post('visi',TRUE),
		'misi' => $this->input->post('misi',TRUE),
		'tugas_fungsi' => $this->input->post('tugas_fungsi',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Profil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('profil'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Profil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('profil/update_action'),
		'id_profil' => set_value('id_profil', $row->id_profil),
		'visi' => set_value('visi', $row->visi),
		'misi' => set_value('misi', $row->misi),
		'tugas_fungsi' => set_value('tugas_fungsi', $row->tugas_fungsi),
		'foto' => set_value('foto', $row->foto),
	    );
            $this->load->view('profil/profil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_profil', TRUE));
        } else {
            $data = array(
		'visi' => $this->input->post('visi',TRUE),
		'misi' => $this->input->post('misi',TRUE),
		'tugas_fungsi' => $this->input->post('tugas_fungsi',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Profil_model->update($this->input->post('id_profil', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('profil'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Profil_model->get_by_id($id);

        if ($row) {
            $this->Profil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('profil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('visi', 'visi', 'trim|required');
	$this->form_validation->set_rules('misi', 'misi', 'trim|required');
	$this->form_validation->set_rules('tugas_fungsi', 'tugas fungsi', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('id_profil', 'id_profil', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "profil.xls";
        $judul = "profil";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Visi");
	xlsWriteLabel($tablehead, $kolomhead++, "Misi");
	xlsWriteLabel($tablehead, $kolomhead++, "Tugas Fungsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");

	foreach ($this->Profil_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->visi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->misi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tugas_fungsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:31 */
/* http://harviacode.com */