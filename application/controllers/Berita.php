<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    $sql = "select * from kategori";

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'berita/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'berita/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'berita/index.html';
            $config['first_url'] = base_url() . 'berita/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Berita_model->total_rows($q);
        $berita = $this->Berita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'berita_data' => $berita,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'tampil_data' => $this->Berita_model->tampil_data()->result(),
        );
        $this->load->view('template/header');
        //$this->load->view('template/sidebar');
        $this->load->view('berita/berita', $data);
        $this->load->view('template/footer');
    }

    public function read($id) 
    {
        $row = $this->Berita_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_berita' => $row->id_berita,
		'judul' => $row->judul,
		'seo_judul' => $row->seo_judul,
		'konten' => $row->konten,
		'kategori' => $row->kategori,
		'foto' => $row->foto,
		'file' => $row->file,
		'date' => $row->date,
		'updated_at' => $row->updated_at,
		'is_active' => $row->is_active,
	    );
            $this->load->view('berita/berita_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berita'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('berita/create_action'),
	    'id_berita' => set_value('id_berita'),
	    'judul' => set_value('judul'),
	    'seo_judul' => set_value('seo_judul'),
	    'konten' => set_value('konten'),
	    'kategori' => set_value('kategori'),
	    'foto' => set_value('foto'),
	    'file' => set_value('file'),
	    'date' => set_value('date'),
	    'updated_at' => set_value('updated_at'),
	    'is_active' => set_value('is_active'),
	);
        $this->load->view('berita/berita_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'seo_judul' => $this->input->post('seo_judul',TRUE),
		'konten' => $this->input->post('konten',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'file' => $this->input->post('file',TRUE),
		'date' => $this->input->post('date',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Berita_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('berita'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Berita_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('berita/update_action'),
		'id_berita' => set_value('id_berita', $row->id_berita),
		'judul' => set_value('judul', $row->judul),
		'seo_judul' => set_value('seo_judul', $row->seo_judul),
		'konten' => set_value('konten', $row->konten),
		'kategori' => set_value('kategori', $row->kategori),
		'foto' => set_value('foto', $row->foto),
		'file' => set_value('file', $row->file),
		'date' => set_value('date', $row->date),
		'updated_at' => set_value('updated_at', $row->updated_at),
		'is_active' => set_value('is_active', $row->is_active),
	    );
            $this->load->view('berita/berita_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berita'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berita', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'seo_judul' => $this->input->post('seo_judul',TRUE),
		'konten' => $this->input->post('konten',TRUE),
		'kategori' => $this->input->post('kategori',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'file' => $this->input->post('file',TRUE),
		'date' => $this->input->post('date',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->Berita_model->update($this->input->post('id_berita', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('berita'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berita_model->get_by_id($id);

        if ($row) {
            $this->Berita_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('berita'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berita'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('seo_judul', 'seo judul', 'trim|required');
	$this->form_validation->set_rules('konten', 'konten', 'trim|required');
	$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('file', 'file', 'trim|required');
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');
	$this->form_validation->set_rules('id_berita', 'id_berita', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "berita.xls";
        $judul = "berita";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Seo Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Konten");
	xlsWriteLabel($tablehead, $kolomhead++, "Kategori");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "File");
	xlsWriteLabel($tablehead, $kolomhead++, "Date");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");
	xlsWriteLabel($tablehead, $kolomhead++, "Is Active");

	foreach ($this->Berita_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->seo_judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->konten);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kategori);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->is_active);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:31 */
/* http://harviacode.com */