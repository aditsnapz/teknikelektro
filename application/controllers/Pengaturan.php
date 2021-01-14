<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('FakultasModel');
        $this->load->model('DepartemenModel');
        $this->path = 'assets/images/';
	}
	
	public function index()
	{
		$fakultass = $this->FakultasModel->show();
        $this->load->view('main.php',[
            "page" => "pengaturan",
			"content" => [], 
			"fakultass" => $fakultass,
        ]);
	}

	public function index_departemen($fakultas)
	{
		$departemens = $this->DepartemenModel->show_fakultas($fakultas);
		$fakultas = $this->FakultasModel->show_id($fakultas)[0]->nama;
		
        $this->load->view('main.php',[
            "page" => "pengaturan_departemen",
			"content" => [], 
			"departemens" => $departemens,
			"fakultas" => $fakultas,
        ]);
	}

	public function fakultas_add()
	{
		date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "status" => $this->input->post('status'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->FakultasModel->insert($data);
        redirect(base_url('Pengaturan'));
	}

	public function fakultas_edit()
	{
		$id = $this->input->post('id');
		date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "status" => $this->input->post('status'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->FakultasModel->update($data,$id);
        redirect(base_url('Pengaturan'));
	}

	public function fakultas_delete($id)
    {
        $this->FakultasModel->delete($id);
        redirect(base_url('Pengaturan'));
	}

	public function fakultas_import() 
	{
		if ($this->input->post('submit')) {
			$path = 'assets/uploads/';
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);            
			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}
			if(empty($error)){
				if (!empty($data['upload_data']['file_name'])) {
					$import_xls_file = $data['upload_data']['file_name'];
				} else {
					$import_xls_file = 0;
				}
				$inputFileName = $path . $import_xls_file;
				try {
					$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($inputFileName);
					$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true);
					$flag = true;
					$i=0;
					
				
				foreach ($allDataInSheet as $value) {
					if($flag){
						$flag =false;
						continue;
					}
					
					$datains[$i]['nama'] = $value['B'];
					$datains[$i]['status'] = $value['C'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['updated_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->FakultasModel->insert_batch($datains);
        		redirect(base_url('Pengaturan'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Pengaturan')); 
		
	}

	public function departemen_import() 
	{
		if ($this->input->post('submit')) {
			$path = 'assets/uploads/';
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);            
			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}
			if(empty($error)){
				if (!empty($data['upload_data']['file_name'])) {
					$import_xls_file = $data['upload_data']['file_name'];
				} else {
					$import_xls_file = 0;
				}
				$inputFileName = $path . $import_xls_file;
				try {
					$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($inputFileName);
					$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true,true);
					$flag = true;
					$i=0;
					
				// var_dump($allDataInSheet);
				// die();
				foreach ($allDataInSheet as $value) {
					if($flag){
						$flag =false;
						continue;
					}
					
					$datains[$i]['nama'] = $value['B'];
					$datains[$i]['status'] = $value['C'];
					$datains[$i]['fakultas_id'] = $value['D'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['updated_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->DepartemenModel->insert_batch($datains);
				
        		redirect(base_url('Pengaturan'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Pengaturan')); 
		
	}
}
