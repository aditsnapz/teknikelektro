<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel4a extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel4aModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel4as = $this->Tabel4aModel->show();
      
        $this->load->view('main.php',[
            "page" => "tabel4a",
            "content" => [],
            "tabel4as" => $tabel4as, 
        ]);
    }

    public function add()
    {
		date_default_timezone_set("Asia/Jakarta");

        $data = [
            "sumber_dana" => $this->input->post('sumber_dana'),
            "jenis_dana" => $this->input->post('jenis_dana'),
            "ts2" => $this->input->post('ts2'),
			"ts1" => $this->input->post('ts1'),
			"ts" => $this->input->post('ts'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel4aModel->insert($data);
        redirect(base_url('Tabel4a'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "sumber_dana" => $this->input->post('sumber_dana'),
            "jenis_dana" => $this->input->post('jenis_dana'),
            "ts2" => $this->input->post('ts2'),
			"ts1" => $this->input->post('ts1'),
			"ts" => $this->input->post('ts'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel4aModel->update($data, $id);
        redirect(base_url('Tabel4a'));
    }

    public function delete($id)
    {
        $this->Tabel4aModel->delete($id);
        redirect(base_url('Tabel4a'));
	}
	
	public function import() 
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
					$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true);
					$flag = true;
					$i=0;
					
					
				foreach ($allDataInSheet as $value) {
					if($flag){
						$flag =false;
						continue;
					}
					
					$datains[$i]['sumber_dana'] = $value['B'];
					$datains[$i]['jenis_dana'] = $value['C'];
					$datains[$i]['ts2'] = $value['D'];
					$datains[$i]['ts1'] = $value['E'];
					$datains[$i]['ts'] = $value['F'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel4aModel->insert_batch($datains);
        		redirect(base_url('Tabel4a'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel4a')); 
		
	}

}
