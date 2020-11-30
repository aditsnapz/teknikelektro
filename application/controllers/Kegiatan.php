<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('KegiatanModel');
        $this->load->model('PerumahanModel');
		$this->path = 'assets/images/';
		// load base_url
		$this->load->helper('url');
    }

	public function index()
	{
        $kegiatans = $this->KegiatanModel->show();
        $this->load->view('main.php',[
            "page" => "kegiatan",
            "content" => [],
            "kegiatans" => $kegiatans, 
        ]);
    }

    public function add()
    {
        
        $data = [
            "nama" => $this->input->post('nama'),
            "tanggal" => $this->input->post('tanggal'),
            "deskripsi" => $this->input->post('deskripsi'),
            "tipe" => $this->input->post('tipe'),
		];
		
		 
		  // Count total foto
		  $countfoto = count($_FILES['foto']['name']);
		  // Looping all foto
		  for($i=0;$i<$countfoto;$i++){
	 
			if(!empty($_FILES['foto']['name'][$i])){
	 
			  // Define new $_FILES array - $_FILES['file']
			  $_FILES['file']['name'] = $_FILES['foto']['name'][$i];
			  $_FILES['file']['type'] = $_FILES['foto']['type'][$i];
			  $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'][$i];
			  $_FILES['file']['error'] = $_FILES['foto']['error'][$i];
			  $_FILES['file']['size'] = $_FILES['foto']['size'][$i];
	
			  // Set preference
			  $config['upload_path'] = 'assets/images'; 
			  $config['allowed_types'] = 'jpg|jpeg|png|gif';
			  $config['max_size'] = '500000'; // max_size in kb
			  $config['file_name'] = $_FILES['foto']['name'][$i];
	 
			  //Load upload library
			  $this->load->library('upload',$config); 
	 
			  // File upload
			  if($this->upload->do_upload('file')){
				// Get data about the file
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
	
				// Initialize array
				$array[]= $filename;
			  }
			}
			
		}
		$data['foto'] = implode(', ', $array);
		
   
			
        
        // [-2020-09-21-08-59-23(1).,-2020-09-21-08-59-23(2).,]
       
        $this->KegiatanModel->insert($data);
        redirect(base_url('Kegiatan'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = [
            "nama" => $this->input->post('nama'),
            "tanggal" => $this->input->post('tanggal'),
            "deskripsi" => $this->input->post('deskripsi'),
            "tipe" => $this->input->post('tipe'),
		];
		if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png';
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
        
        $this->KegiatanModel->update($data, $id);
        redirect(base_url('Kegiatan'));
    }

    public function delete($id)
    {
        $this->KegiatanModel->delete($id);
        redirect(base_url('Kegiatan'));
    }

}
