<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    function __construct()
    {
       parent::__construct();
       $this->load->model(['Info_m','Cabang_m','Karyawan_m']);
    }


	public function index()
	{
        $data['row'] = $this->Info_m->get();
		$this->template->load('Template','Info/Info_data', $data);
	}


  public function add()
  {
    //set rules
    $this->form_validation->set_rules('name', 'Nama Device','required');
    $this->form_validation->set_rules('kode_assets', 'kode assets','required|alpha_numeric_spaces|trim|alpha_dash');
    $this->form_validation->set_rules('umur_device', 'Umur Device','required');
    $this->form_validation->set_rules('kry_id', 'Nama karyawan','required');
    $this->form_validation->set_rules('prosesor_detail', 'prosesor detail','required');
    $this->form_validation->set_rules('cabang_id', 'Nama Cabang','required|alpha_numeric_spaces');
    $this->form_validation->set_rules('merk', 'Nama Merk','required');
    $this->form_validation->set_rules('ram_slot', 'ram slot','required');
    $this->form_validation->set_rules('ram', 'ram Size','required|numeric');
    $this->form_validation->set_rules('serial_number', 'serial number','required');
    $this->form_validation->set_rules('category', 'Nama Category','required');
    $this->form_validation->set_rules('tgl_beli', ' Tanggal Beli','required');
    $this->form_validation->set_rules('ip1','IP','numeric|is_natural_no_zero|trim|alpha_dash|max_length[3]');
    $this->form_validation->set_rules('ip2', 'IP','numeric|trim|alpha_dash|max_length[3]');
    $this->form_validation->set_rules('ip3', 'IP','numeric|trim|alpha_dash|max_length[5]');
    $this->form_validation->set_rules('ip4', 'IP','numeric|trim|alpha_dash|max_length[5]');

    //pesan view
    $this->form_validation->set_message('required', '{field} Tidak Boleh Kosong?');
    $this->form_validation->set_message('is_natural_no_zero', '{field} Tidak boleh di awali dari angka 0?');
    $this->form_validation->set_message('numeric', '{field} Wajib Numeric');
    $this->form_validation->set_message('max_length', '{field} Max 3 Digit');
    $this->form_validation->set_message('alpha_dash', '{field} tidak Boleh ada spasi');
    $this->form_validation->set_message('alpha_numeric_spaces', '{field} Karakter Hanya Boleh Alphabet dan Numeric?');

    //setting tampilan
    $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
    if ($this->form_validation->run() == FALSE) {
       $Karyawan = $this->Karyawan_m->get();
       $Cabang = $this->Cabang_m->get();
       $data = array(
         'Karyawan' => $Karyawan,
         'Cabang' => $Cabang
       );
      $this->template->load('Template','Info/Info_add',$data);
    }else{
      $Karyawan = $this->Karyawan_m->get();
      $Cabang = $this->Cabang_m->get();
      $data = array(
        'Karyawan' => $Karyawan,
        'Cabang' => $Cabang
      );
     $this->template->load('Template','Info/Info_add',$data);
      $post =  $this->input->post(null,true);
      $this->Info_m->add($post);
     if ($this->db->affected_rows() > 0) {
     $this->session->set_flashdata('pesan','data berhasil di simpan');
       }
      redirect('Info');
    }
  
  }
    public function delete($id)
    {
      $this->Info_m->delete($id);
      if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('pesan','data berhasil di Hapus');
          redirect('Info');
      }
    }
    
}
