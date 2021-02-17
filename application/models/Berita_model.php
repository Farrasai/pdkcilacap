<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita_model extends CI_Model
{

    public $table = 'berita';
    public $id = 'id_berita';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
    $this->db->like('id_berita', $q);
	$this->db->or_like('judul', $q);
	$this->db->or_like('seo_judul', $q);
	$this->db->or_like('konten', $q);
	$this->db->or_like('kategori', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('file', $q);
	$this->db->or_like('date', $q);
	$this->db->or_like('updated_at', $q);
	$this->db->or_like('is_active', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
    $this->db->order_by($this->id, $this->order);
    $this->db->like('id_berita', $q);
	$this->db->or_like('judul', $q);
	$this->db->or_like('seo_judul', $q);
	$this->db->or_like('konten', $q);
	$this->db->or_like('kategori', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('file', $q);
	$this->db->or_like('date', $q);
	$this->db->or_like('updated_at', $q);
	$this->db->or_like('is_active', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    public function tampil_data()
    {
        return $this->db->get('berita');
    }

}

