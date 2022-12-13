<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_m extends CI_Model {

	
	public function get($id = null)
	{
		$this->db->from('ms_kry');
        $this->db->order_by('name','ASC');
        if ($id != null) {
            $this->db->where('kry_id', $id);
        }
        $query = $this->db->get();
        return $query;

	}


    public function add($post)
    {
        $params = [
             'nik' => strtoupper($post['nik']),
             'name' => ucwords(strtolower($post['name'])),
        ];
        $this->db->insert('ms_kry',$params);
    }


    public function edit($post)
    {
        $params = [
             'nik' => strtoupper($post['nik']),
             'name' => ucwords(strtolower($post['name'])),
        ];
        $this->db->where('kry_id', $post['kry_id']);
        $this->db->update('ms_kry',$params);
    }

    public function delete($id)
    {
        $this->db->where('kry_id', $id);
        $this->db->delete('ms_kry');
    }
}
