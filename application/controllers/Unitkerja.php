<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Unitkerja extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Unitkerja_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'unitkerja/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'unitkerja/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'unitkerja/index.html';
            $config['first_url'] = base_url() . 'unitkerja/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Unitkerja_model->total_rows($q);
        $unitkerja = $this->Unitkerja_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'unitkerja_data' => $unitkerja,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('unitkerja/unitkerja_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Unitkerja_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_unitkerja' => $row->id_unitkerja,
		'nama_unit' => $row->nama_unit,
		'deskripsi' => $row->deskripsi,
		'struktur_bidang' => $row->struktur_bidang,
		'icon' => $row->icon,
		'foto' => $row->foto,
		'alamat' => $row->alamat,
		'pimpinan' => $row->pimpinan,
		'kontak' => $row->kontak,
		'email' => $row->email,
		'maps' => $row->maps,
		'jumlah_pegawai' => $row->jumlah_pegawai,
		'created_at' => $row->created_at,
		'updated_at' => $row->updated_at,
	    );
            $this->load->view('unitkerja/unitkerja_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('unitkerja'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('unitkerja/create_action'),
	    'id_unitkerja' => set_value('id_unitkerja'),
	    'nama_unit' => set_value('nama_unit'),
	    'deskripsi' => set_value('deskripsi'),
	    'struktur_bidang' => set_value('struktur_bidang'),
	    'icon' => set_value('icon'),
	    'foto' => set_value('foto'),
	    'alamat' => set_value('alamat'),
	    'pimpinan' => set_value('pimpinan'),
	    'kontak' => set_value('kontak'),
	    'email' => set_value('email'),
	    'maps' => set_value('maps'),
	    'jumlah_pegawai' => set_value('jumlah_pegawai'),
	    'created_at' => set_value('created_at'),
	    'updated_at' => set_value('updated_at'),
	);
        $this->load->view('unitkerja/unitkerja_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_unit' => $this->input->post('nama_unit',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'struktur_bidang' => $this->input->post('struktur_bidang',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'pimpinan' => $this->input->post('pimpinan',TRUE),
		'kontak' => $this->input->post('kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
		'maps' => $this->input->post('maps',TRUE),
		'jumlah_pegawai' => $this->input->post('jumlah_pegawai',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Unitkerja_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('unitkerja'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Unitkerja_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('unitkerja/update_action'),
		'id_unitkerja' => set_value('id_unitkerja', $row->id_unitkerja),
		'nama_unit' => set_value('nama_unit', $row->nama_unit),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'struktur_bidang' => set_value('struktur_bidang', $row->struktur_bidang),
		'icon' => set_value('icon', $row->icon),
		'foto' => set_value('foto', $row->foto),
		'alamat' => set_value('alamat', $row->alamat),
		'pimpinan' => set_value('pimpinan', $row->pimpinan),
		'kontak' => set_value('kontak', $row->kontak),
		'email' => set_value('email', $row->email),
		'maps' => set_value('maps', $row->maps),
		'jumlah_pegawai' => set_value('jumlah_pegawai', $row->jumlah_pegawai),
		'created_at' => set_value('created_at', $row->created_at),
		'updated_at' => set_value('updated_at', $row->updated_at),
	    );
            $this->load->view('unitkerja/unitkerja_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('unitkerja'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_unitkerja', TRUE));
        } else {
            $data = array(
		'nama_unit' => $this->input->post('nama_unit',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'struktur_bidang' => $this->input->post('struktur_bidang',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'pimpinan' => $this->input->post('pimpinan',TRUE),
		'kontak' => $this->input->post('kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
		'maps' => $this->input->post('maps',TRUE),
		'jumlah_pegawai' => $this->input->post('jumlah_pegawai',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Unitkerja_model->update($this->input->post('id_unitkerja', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('unitkerja'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Unitkerja_model->get_by_id($id);

        if ($row) {
            $this->Unitkerja_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('unitkerja'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('unitkerja'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_unit', 'nama unit', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('struktur_bidang', 'struktur bidang', 'trim|required');
	$this->form_validation->set_rules('icon', 'icon', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('pimpinan', 'pimpinan', 'trim|required');
	$this->form_validation->set_rules('kontak', 'kontak', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('maps', 'maps', 'trim|required');
	$this->form_validation->set_rules('jumlah_pegawai', 'jumlah pegawai', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

	$this->form_validation->set_rules('id_unitkerja', 'id_unitkerja', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "unitkerja.xls";
        $judul = "unitkerja";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Unit");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Struktur Bidang");
	xlsWriteLabel($tablehead, $kolomhead++, "Icon");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Pimpinan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kontak");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Maps");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Pegawai");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

	foreach ($this->Unitkerja_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_unit);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->struktur_bidang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->icon);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pimpinan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kontak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->maps);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jumlah_pegawai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Unitkerja.php */
/* Location: ./application/controllers/Unitkerja.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-02-09 04:18:32 */
/* http://harviacode.com */