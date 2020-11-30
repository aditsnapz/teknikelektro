<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ArchiveModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $archives = $this->ArchiveModel->show();
      
        $this->load->view('main.php',[
            "page" => "archive",
            "content" => [],
            "archives" => $archives, 
        ]);
    }

    public function add()
    {
        
        $data = [
            "nama" => $this->input->post('nama'),
            "tipe" => $this->input->post('tipe'),
            "upload_by" => $this->input->post('upload_by'),
		];
		if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = FALSE;
                $filename = $_FILES['file']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $name = $this->input->post('username').'-'.date("Y-m-d-H-i-s").'.'.$ext;
            $config['file_name'] = $name;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('file')) {
                echo $this->upload->display_errors();
                var_dump($this->path);
                die();
            }else{
                $data['file'] = $name;
                
                
                
            }
        }
        
       
        $this->ArchiveModel->insert($data);
        redirect(base_url('Archive'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = [
            "nama" => $this->input->post('nama'),
            "tipe" => $this->input->post('tipe'),
            "upload_by" => $this->input->post('upload_by'),
		];
		if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = FALSE;
                $filename = $_FILES['file']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $name = $this->input->post('username').'-'.date("Y-m-d-H-i-s").'.'.$ext;
            $config['file_name'] = $name;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('file')) {
                echo $this->upload->display_errors();
                var_dump($this->path);
                die();
            }else{
                $data['file'] = $name;
                
                
                
            }
        }
        
        $this->ArchiveModel->update($data, $id);
        redirect(base_url('Archive'));
    }

    public function delete($id)
    {
        $this->ArchiveModel->delete($id);
        redirect(base_url('Archive'));
    }

}
