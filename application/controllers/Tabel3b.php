<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel3b extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel3bModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel3bs = $this->Tabel3bModel->show();
      
        $this->load->view('main.php',[
            "page" => "tabel3b",
            "content" => [],
            "tabel3bs" => $tabel3bs, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "unit" => $this->input->post('unit'),
            "jumlah_dosen" => $this->input->post('jumlah_dosen'),
            "jumlah_mahasiswa" => $this->input->post('jumlah_mahasiswa'),
            "jumlah_mahasiswa_ta" => $this->input->post('jumlah_mahasiswa_ta'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel3bModel->insert($data);
        redirect(base_url('Tabel3b'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "unit" => $this->input->post('unit'),
            "jumlah_dosen" => $this->input->post('jumlah_dosen'),
            "jumlah_mahasiswa" => $this->input->post('jumlah_mahasiswa'),
            "jumlah_mahasiswa_ta" => $this->input->post('jumlah_mahasiswa_ta'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel3bModel->update($data, $id);
        redirect(base_url('Tabel3b'));
    }

    public function delete($id)
    {
        $this->Tabel3bModel->delete($id);
        redirect(base_url('Tabel3b'));
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
					$datains[$i]['jumlah_mahasiswa'] = $value['D'];
					$datains[$i]['jumlah_mahasiswa_ta'] = $value['E'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel3bModel->insert_batch($datains);
        		redirect(base_url('Tabel3b'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel3b')); 
		
	}

}
