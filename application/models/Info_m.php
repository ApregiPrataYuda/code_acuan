<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_m extends CI_Model {

	
	public function get($id = null)
	{
        $this->db->select('ms_info.*, ms_cabang.name as cabang_name, ms_kry.name as kry_name');
		$this->db->join('ms_kry','ms_info.kry_id = ms_kry.kry_id');
		$this->db->join('ms_cabang','ms_info.cabang_id = ms_cabang.cabang_id');
		$this->db->from('ms_info');
		if ($id != null) {
            $this->db->where('info_id', $id);
		}
		$this->db->order_by('name','ASC');
        $query = $this->db->get(); return $query;
	}


	public function add($post)
	{
		//deklarasi
       $ip1 = $post['ip1'];
	   $ip2 = $post['ip2'];
	   $ip3 = $post['ip3'];
	   $ip4 = $post['ip4'];

    //untuk mengambil data dan menambahkan
	    
	   $ip = $ip1.'.'.$ip2.'.'.$ip3.'.'.$ip4;
	   if (strlen(trim($ip)) < 4) {
				$this->session->set_flashdata('error','data field ip tidak boleh kosong');
				redirect('Info');
			};

    //  untuk menghilangkan tanda spasi
	   $ram = str_replace(".","",$post['ram']);
	   $merk = strtoupper($post['merk']);
	   $nameDevice = strtoupper($post['name']);
	   
		$params = [
			'name' => $nameDevice,
			'merk' => $merk,
			'category' => $post['category'],
			'ip' => $ip,
			'tgl_beli' => $post['tgl_beli'],
			'prosesor_detail' => $post['prosesor_detail'],
			'umur_device' => $post['umur_device'],
			'serial_number' => $post['serial_number'],
			'ram_slot' => $post['ram_slot'],
			'ram' => $ram,
			'kode_assets' => $post['kode_assets'],
			'cabang_id' => $post['cabang_id'],
			'kry_id' => $post['kry_id']
		];
		
		$this->db->insert('ms_info', $params);
	}

	public function edit($post)
	{
		$params = [
			'name' => $post['name'],
			'merk' => $post['merk'],
			'category' => $post['category'],
			'ip' => $post['ip'],
			'tgl_beli' => $post['tgl_beli'],
			'prosesor_detail' => $post['prosesor_detail'],
			'umur_device' => $post['umur_device'],
			'serial_number' => $post['serial_number'],
			'ram_slot' => $post['ram_slot'],
			'ram' => $post['ram'],
			'kode_assets' => $post['kode_assets'],
			'cabang_id' => $post['cabang_id'],
			'kry_id' => $post['kry_id'],
		];
		$this->db->where('info_id', $post['id']);
		$this->db->update('ms_info', $params);
	}

	public function delete($id)
	{
		$this->db->where('info_id', $id);
		$this->db->delete('ms_info');
	}
}
