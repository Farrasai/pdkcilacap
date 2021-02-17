<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biografi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Biografi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'biografi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'biografi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'biografi/index.html';
            $config['first_url'] = base_url() . 'biografi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Biografi_model->total_rows($q);
        $biografi = $this->Biografi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'biografi_data' => $biografi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('biografi/biografi_list', $data);
        $this->load->view('template/footer');
    }

    public function read($id) 
    {
        $row = $this->Biografi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_biografi' => $row->id_biografi,
		'nama' => $row->nama,
		'jabatan' => $row->jabatan,
		'alamat_kantor' => $row->alamat_kantor,
		'deskripsi' => $row->deskripsi,
		'lhkpn' => $row->lhkpn,
		'foto' => $row->foto,
		'pendidikan' => $row->pendidikan,
		'karir' => $row->karir,
		'created_at' => $row->created_at,
		'updated_at' => $row->updated_at,
	    );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('biografi/biografi_read', $data);
        $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biografi'));
        }
    }

    public function create() 
    {

        $data = array(
            'button' => 'Create',
            'action' => site_url('biografi/create_action'),
	    'id_biografi' => set_value('id_biografi'),
	    'nama' => set_value('nama'),
	    'jabatan' => set_value('jabatan'),
	    'alamat_kantor' => set_value('alamat_kantor'),
	    'deskripsi' => set_value('deskripsi'),
	    'lhkpn' => set_value('lhkpn'),
	    'foto' => set_value('foto'),
	    'pendidikan' => set_value('pendidikan'),
	    'karir' => set_value('karir'),
	    'created_at' => set_value('created_at'),
	    'updated_at' => set_value('updated_at'),
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('biografi/biografi_form', $data);
        $this->load->view('template/footer');

    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'alamat_kantor' => $this->input->post('alamat_kantor',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'lhkpn' => $this->input->post('lhkpn',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'pendidikan' => $this->input->post('pendidikan',TRUE),
		'karir' => $this->input->post('karir',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Biografi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('biografi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Biografi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('biografi/update_action'),
		'id_biografi' => set_value('id_biografi', $row->id_biografi),
		'nama' => set_value('nama', $row->nama),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'alamat_kantor' => set_value('alamat_kantor', $row->alamat_kantor),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'lhkpn' => set_value('lhkpn', $row->lhkpn),
		'foto' => set_value('foto', $row->foto),
		'pendidikan' => set_value('pendidikan', $row->pendidikan),
		'karir' => set_value('karir', $row->karir),
		'created_at' => set_value('created_at', $row->created_at),
		'updated_at' => set_value('updated_at', $row->updated_at),
	    );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('biografi/biografi_form', $data);
        $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biografi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_biografi', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'alamat_kantor' => $this->input->post('alamat_kantor',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'lhkpn' => $this->input->post('lhkpn',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'pendidikan' => $this->input->post('pendidikan',TRUE),
		'karir' => $this->input->post('karir',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Biografi_model->update($this->input->post('id_biografi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('biografi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Biografi_model->get_by_id($id);

        if ($row) {
            $this->Biografi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('biografi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biografi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
	$this->form_validation->set_rules('alamat_kantor', 'alamat kantor', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('lhkpn', 'lhkpn', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
	$this->form_validation->set_rules('karir', 'karir', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

	$this->form_validation->set_rules('id_biografi', 'id_biografi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "biografi.xls";
        $judul = "biografi";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat Kantor");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Lhkpn");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan");
	xlsWriteLabel($tablehead, $kolomhead++, "Karir");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

	foreach ($this->Biografi_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat_kantor);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lhkpn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->karir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Biografi.php */
/* Location: ./application/controllers/Biografi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:31 */
/* http://harviacode.com */