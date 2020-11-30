<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel3a3 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel3a3Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel3a3s = $this->Tabel3a3Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel3a3",
            "content" => [],
            "tabel3a3s" => $tabel3a3s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "unit" => $this->input->post('unit'),
            "jumlah_dosen" => $this->input->post('jumlah_dosen'),
            "jumlah_dosen_bersertifikat" => $this->input->post('jumlah_dosen_bersertifikat'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel3a3Model->insert($data);
        redirect(base_url('Tabel3a3'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "unit" => $this->input->post('unit'),
            "jumlah_dosen" => $this->input->post('jumlah_dosen'),
            "jumlah_dosen_bersertifikat" => $this->input->post('jumlah_dosen_bersertifikat'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel3a3Model->update($data, $id);
        redirect(base_url('Tabel3a3'));
    }

    public function delete($id)
    {
        $this->Tabel3a3Model->delete($id);
        redirect(base_url('Tabel3a3'));
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
					
					$datains[$i]['unit'] = $value['B'];
					$datains[$i]['jumlah_dosen'] = $value['C'];
					$datains[$i]['jumlah_dosen_bersertifikat'] = $value['D'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel3a3Model->insert_batch($datains);
        		redirect(base_url('Tabel3a3'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel3a3')); 
		
	}

}
