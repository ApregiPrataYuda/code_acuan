<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('ms_cabang');
        if ($id != null) {
            $this->db->where('cabang_id', $id);
        }
        $query = $this->db->get();
        return $query;
	}


    public function add($post)
    {
      $params = [
        'name' => strtoupper($post['name']),
        'kode' => strtoupper($post['kode']),
      ];
      $this->db->insert('ms_cabang', $params);
    }

    public function edit($post)
  {
    $params = [
      'name' =>  strtoupper($post['name']),
      'kode' => strtoupper($post['kode']),
    ];
    $this->db->where('cabang_id ', $post['cabang_id']);
    $this->db->update('ms_cabang', $params);
  }


  public function delete($id)
  {
     $this->db->where('cabang_id', $id);
     $this->db->delete('ms_cabang');
  }



}
