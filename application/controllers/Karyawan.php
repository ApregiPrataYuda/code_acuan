<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {


 function __construct()
    {
         parent::__construct();
         $this->load->model('Karyawan_m');
   }
	
	public function index()
	{
        $data['row'] = $this->Karyawan_m->get();
		$this->template->load('Template','Karyawan/Karyawan_data', $data);
	}


  public function add()
  {
    $this->form_validation->set_rules('nik', 'nik', 'required|exact_length[8]|alpha_numeric_spaces|alpha_dash|is_unique[ms_kry.nik]');
    $this->form_validation->set_rules('name', 'name', 'required|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_message('required', '{field}  masih kosong, silakan di isi dulu?');
    $this->form_validation->set_message('is_unique', '{field} Nama Karyawan Sudah Ada?');
    $this->form_validation->set_message('max_length', '{field} minimal 50 huruf');
    $this->form_validation->set_message('exact_length', '{field}  harus 8 digit');
    $this->form_validation->set_message('alpha_dash', '{field} tidak Boleh ada spasi');
    // $this->form_validation->set_message('alpha', '{field} Hanya Boleh karakter Alphabet');
    $this->form_validation->set_message('alpha_numeric_spaces', '{field} Karakter Hanya Boleh Alphabet dan Numeric?');
    $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('Template','Karyawan/karyawan_add');
    }else {
      $post =  $this->input->post(null,true);
               $this->Karyawan_m->add($post);
              if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('pesan','data berhasil di simpan');
                }
               redirect('Karyawan');
    }
  }



  public function edit($id)
  {
    $this->form_validation->set_rules('nik', 'nik', 'required|exact_length[8]|alpha_numeric_spaces|alpha_dash');
    $this->form_validation->set_rules('name', 'name', 'required|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_message('required', '{field}  masih kosong, silakan di isi dulu?');
    $this->form_validation->set_message('max_length', '{field} minimal 50 huruf');
    $this->form_validation->set_message('exact_length', '{field}  harus 8 digit');
    $this->form_validation->set_message('alpha_dash', '{field} tidak Boleh ada spasi');
    // $this->form_validation->set_message('alpha', '{field} Hanya Boleh karakter Alphabet');
    $this->form_validation->set_message('alpha_numeric_spaces', '{field} Karakter Hanya Boleh Alphabet dan Numeric?');
    $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

    if ($this->form_validation->run() == FALSE) {
       $query = $this->Karyawan_m->get($id);
        if ($query->num_rows() > 0) {
           $data['row'] = $query->row();
           $this->template->load('Template','Karyawan/karyawan_edit',$data);
        }else {
                            echo"<script>
                              alert('data tidak ditemukan');
                              window.location='".site_url('Karyawan')."';
                             </script>";
        }
     
    }else {
      $post =  $this->input->post(null,true);
               $this->Karyawan_m->edit($post);
              if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('pesan','data berhasil di simpan');
                }
               redirect('Karyawan');
    }
  }


   

  public function delete($id)
  {
    $this->Karyawan_m->delete($id);
    $error = $this->db->error();
    if($error['code'] != 0) {
     $this->session->set_flashdata('error','Data Tidak dapat di hapus (sudah berelasi Atau sedang di gunakan di Tabel lain)!');
     redirect('Karyawan');
    }
    if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('pesan','data berhasil di Hapus');
        redirect('Karyawan');
    }
  }
}
