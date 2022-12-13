<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function index()
	{
            

            $bilangan= $this->input->post('angka'); 
            $hasil = sprintf("%04d", $bilangan);
            if ($bilangan != '') {
                $angka = $hasil;
            }else {
                $angka = '';
            }

           $date= $this->input->post('date');
           if ($date != '') {
            $date = $date;
           }else {
            $date = '';
           }


           $huruf = $this->input->post('huruf');
           $Uppercase = strtoupper($huruf);


           $lowercase = $this->input->post('lowercase');
           $result = strtolower($lowercase);
            if ($result != '') {
               $result;
            }else {
                if ($result == '') {
                    $result = 'Tidak ada Data yang di input';
                }
            }


            $data = array(
            'angka' => $angka,
            'date' => $date,
            'Uppercase' => $Uppercase,
            'lowercase' => $result,
            );

            $this->template->load('Template','Input/Input_data',$data);
	}


}