<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

    function __construct()
     {
          parent::__construct();
          $this->load->model('Cabang_m');
    }

	public function index()
	{
        $data['row'] = $this->Cabang_m->get();
		$this->template->load('Template','Cabang/Cabang_data', $data);
	}

  

  public function add()
  {
    $this->form_validation->set_rules('kode', 'kode', 'required|exact_length[5]|alpha_numeric_spaces|alpha_dash');
    $this->form_validation->set_rules('name', 'name', 'required|is_unique[ms_cabang.name]|min_length[3]|alpha_numeric_spaces');
    $this->form_validation->set_message('required', '{field}  masih kosong, silakan di isi dulu?');
    $this->form_validation->set_message('is_unique', '{field} Sudah Digunakan Silakan Ganti Yg Lain?');
    $this->form_validation->set_message('min_length', '{field} minimal 3 huruf');
    $this->form_validation->set_message('exact_length', '{field}  harus 5 digit');
    $this->form_validation->set_message('alpha_dash', '{field} tidak Boleh ada spasi');
    $this->form_validation->set_message('alpha_numeric_spaces', '{field} Karakter Hanya Boleh Alphabet dan Numeric?');
    $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('Template','Cabang/Cabang_add');
    }else {
      $post =  $this->input->post(null,true);
               $this->Cabang_m->add($post);
              if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('pesan','data berhasil di simpan');
                }
               redirect('Cabang');
    }
  }

 

  public function edit($id)
  {
      
    $this->form_validation->set_rules('kode', 'kode', 'required|exact_length[5]|alpha_numeric_spaces|alpha_dash');
    $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|alpha_numeric_spaces');
    $this->form_validation->set_message('required', '{field}  masih kosong, silakan di isi dulu?');
    $this->form_validation->set_message('min_length', '{field} minimal 3 huruf');
    $this->form_validation->set_message('exact_length', '{field}  harus 5 digit');
    $this->form_validation->set_message('trim', '{field} Tidak Boleh ada spasi');
    $this->form_validation->set_message('alpha_dash', '{field} tidak Boleh ada spasi');
    $this->form_validation->set_message('alpha_numeric_spaces', '{field} Karakter Hanya Boleh Alphabet dan Numeric?');
    $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
           if ($this->form_validation->run() == FALSE)
              {
                 $query =  $this->Cabang_m->get($id);
                       if ($query->num_rows() > 0) {
                            $data['row'] = $query->row();
                           $this->template->load('Template','Cabang/Cabang_edit',$data);
                       }else {
                              echo"<script>
                                 alert('data tidak ditemukan');
                              window.location='".site_url('Cabang')."';
                             </script>";
                       }
              }
              else
              {
                     $post =  $this->input->post(null,true);
                        $this->Cabang_m->edit($post);
                        if ($this->db->affected_rows() > 0) {
                            $this->session->set_flashdata('pesan','data berhasil di edit');
                        }
                       redirect('Cabang');
              }
  }


  public function delete($id)
  {
    $this->Cabang_m->delete($id);
    $error = $this->db->error();
    if($error['code'] != 0) {
     $this->session->set_flashdata('error','Data Tidak dapat di hapus (sudah berelasi Atau sedang di gunakan di Tabel lain)!');
     redirect('Cabang');
    }
    if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('pesan','data berhasil di Hapus');
       redirect('Cabang');
    }
  }
}
