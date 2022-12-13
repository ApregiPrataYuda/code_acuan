<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset_masuk_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('as_masuk_header');
        $this->db->order_by('kode_masuk', 'ASC');
        if ($id != null) {
           $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
	}


    public function add($post)
    {
        $params = [
            'kode_masuk' => $post['kode_masuk'],
            'tanggal_masuk' => $post['tanggal_masuk'],
            'pengirim' => $post['pengirim'],
            'total_qty' => $post['total_qty'],
            'total_harga' => $post['total_harga'],
        ];
        $this->db->insert('as_masuk_header', $params);
    }


    public function edit($post)
    {
        $params = [
            'kode_masuk' => $post['kode_masuk'],
            'tanggal_masuk' => $post['tanggal_masuk'],
            'pengirim' => $post['pengirim'],
            'total_qty' => $post['total_qty'],
            'total_harga' => $post['total_harga'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('as_masuk_header', $params);
    }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('as_masuk_header');
  }

}
