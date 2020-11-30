<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemakaian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PemakaianModel');
        $this->load->model('AtkModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $pemakaians = $this->PemakaianModel->show();
      
        $this->load->view('main.php',[
            "page" => "pemakaian",
            "content" => [],
            "pemakaians" => $pemakaians, 
        ]);
    }

    public function add()
    {
		$atks = $this->AtkModel->show_id($this->input->post('id_atk'));
		
		$sisa = $atks[0]->sisa;
		if ($sisa == 0 || $sisa < $this->input->post('jumlah_pemakaian')) {
			echo 'stock kurang';
			die();
		} else {
			$data = [
				"sisa" => $sisa - $this->input->post('jumlah_pemakaian'),
			];
			
			
			$this->AtkModel->update($data, $this->input->post('id_atk'));
		}


        $data = [
            "id_atk" => $this->input->post('id_atk'),
            "nama_pengambil" => $this->input->post('nama_pengambil'),
            "jumlah_pemakaian" => $this->input->post('jumlah_pemakaian'),
            "tanggal" => $this->input->post('tanggal'),
		];
		
        
       
        $this->PemakaianModel->insert($data);
        redirect(base_url('Pemakaian'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = [
			"id_atk" => $this->input->post('id_atk'),
            "nama_pengambil" => $this->input->post('nama_pengambil'),
            "jumlah_pemakaian" => $this->input->post('jumlah_pemakaian'),
            "tanggal" => $this->input->post('tanggal'),
		];
		
        
        $this->PemakaianModel->update($data, $id);
        redirect(base_url('Pemakaian'));
    }

    public function delete($id)
    {
        $this->PemakaianModel->delete($id);
        redirect(base_url('Pemakaian'));
    }

}
