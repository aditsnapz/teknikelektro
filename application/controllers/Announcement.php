<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnnouncementModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $announcements = $this->AnnouncementModel->show();
      
        $this->load->view('main.php',[
            "page" => "announcement",
            "content" => [],
            "announcements" => $announcements, 
        ]);
    }

    public function add()
    {
        
        $data = [
            "nama" => $this->input->post('nama'),
            "tanggal" => $this->input->post('tanggal'),
			"due_date" => $this->input->post('due_date'),
			"deskripsi" => $this->input->post('deskripsi'),
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
        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = FALSE;
                $filename = $_FILES['foto']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $name = $this->input->post('username').'-'.date("Y-m-d-H-i-s").'.'.$ext;
            $config['file_name'] = $name;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
                var_dump($this->path);
                die();
            }else{
                $data['foto'] = $name;
                
                
                
            }
        }
        
       
        $this->AnnouncementModel->insert($data);
        redirect(base_url('Announcement'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = [
            "nama" => $this->input->post('nama'),
            "tanggal" => $this->input->post('tanggal'),
			"due_date" => $this->input->post('due_date'),
			"deskripsi" => $this->input->post('deskripsi'),
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
        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = FALSE;
                $filename = $_FILES['foto']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $name = $this->input->post('username').'-'.date("Y-m-d-H-i-s").'.'.$ext;
            $config['file_name'] = $name;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
                var_dump($this->path);
                die();
            }else{
                $data['foto'] = $name;
                
                
                
            }
        }
        
        $this->AnnouncementModel->update($data, $id);
        redirect(base_url('Announcement'));
    }

    public function delete($id)
    {
        $this->AnnouncementModel->delete($id);
        redirect(base_url('Announcement'));
    }

}
