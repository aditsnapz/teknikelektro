<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AtkModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $atks = $this->AtkModel->show();
      
        $this->load->view('main.php',[
            "page" => "atk",
            "content" => [],
            "atks" => $atks, 
        ]);
    }

    public function add()
    {
        
        $data = [
            "nama" => $this->input->post('nama'),
            "stock" => $this->input->post('stock'),
            "tanggal_ambil" => $this->input->post('tanggal_ambil'),
            "sisa" => $this->input->post('sisa'),
		];
		
        
       
        $this->AtkModel->insert($data);
        redirect(base_url('Atk'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = [
            "nama" => $this->input->post('nama'),
            "stock" => $this->input->post('stock'),
            "tanggal_ambil" => $this->input->post('tanggal_ambil'),
            "sisa" => $this->input->post('sisa'),
		];
		
        
        $this->AtkModel->update($data, $id);
        redirect(base_url('Atk'));
    }

    public function delete($id)
    {
        $this->AtkModel->delete($id);
        redirect(base_url('Atk'));
    }

}
