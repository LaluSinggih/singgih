<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dcontroller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DModel');
    }
	public function index()
	{
		
		$data['isi']= $this->DModel->getall();
		
		$this->load->view('v_index',$data);
	}

	public function tambah()
	{
		$this->load->view('v_tambah');
	}

	public function proses_tambah()
	{
		$jurusan    = $this->input->post('txtjurusan');
        $kelas      = $this->input->post('txtkelas');
        $isi        = $this->input->post('txtisi');

        $data       = array(
            'kolom_jurusan'   => $jurusan,
            'kolom_kelas'     => $kelas,
            'kolom_isi'       => $isi
        );

		$this->DModel->tambahdata($data);
        redirect('Dcontroller/index');
	}
}
