<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset_masuk extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Asset_masuk_m');
	}

	public function index()
	{
		$data['row'] = $this->Asset_masuk_m->get();
		$this->template->load('Template','Asset_masuk/Asset_masuk_data', $data);
	}

	public function Tambah_data()
	{    
		$this->form_validation->set_rules('kode_masuk', 'kode masuk', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('pengirim', 'pengirim', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
		$this->form_validation->set_rules('total_qty', 'total_qty', 'required|numeric');
		$this->form_validation->set_rules('total_harga', 'total harga', 'required|numeric');

		$this->form_validation->set_message('required', '{field}  masih kosong, silakan di isi dulu');
		$this->form_validation->set_message('alpha_numeric_spaces', '{field} Hanya Boleh Huruf dan Angka');
		$this->form_validation->set_message('numeric', '{field} Hanya Boleh  Angka');

		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		if ($this->form_validation->run() == FALSE) {
		$this->template->load('Template','Asset_masuk/Asset_masuk_tambah');
	}else {
		 $post =  $this->input->post(null,true);
               $this->Asset_masuk_m->add($post);
              if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('pesan','data berhasil di simpan');
                }
               redirect('Asset_masuk');
	}
		
	}

	public function edit_data($id)
	{
		$this->form_validation->set_rules('kode_masuk', 'kode masuk', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('pengirim', 'pengirim', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
		$this->form_validation->set_rules('total_qty', 'total_qty', 'required|numeric');
		$this->form_validation->set_rules('total_harga', 'total harga', 'required|numeric');

		$this->form_validation->set_message('required', '{field}  masih kosong, silakan di isi dulu');
		$this->form_validation->set_message('alpha_numeric_spaces', '{field} Hanya Boleh Huruf dan Angka');
		$this->form_validation->set_message('numeric', '{field} Hanya Boleh  Angka');

		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		if ($this->form_validation->run() == FALSE)
		{
		   $query =  $this->Asset_masuk_m->get($id);
				 if ($query->num_rows() > 0) {
					  $data['row'] = $query->row();
					 $this->template->load('Template','Asset_masuk/Asset_masuk_edit',$data);
				 }else {
						echo"<script>
						   alert('data tidak ditemukan');
						window.location='".site_url('Asset_masuk')."';
					   </script>";
				 }
		}
		else
		{
			   $post =  $this->input->post(null,true);
				  $this->Asset_masuk_m->edit($post);
				  if ($this->db->affected_rows() > 0) {
					  $this->session->set_flashdata('pesan','data berhasil di edit');
				  }
				 redirect('Asset_masuk');
		}
	}

	public function delete($id)
	{
		 $this->Asset_masuk_m->delete($id);
		 if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan','data berhasil di Hapus');
			redirect('Asset_masuk');
		 }
	}
}