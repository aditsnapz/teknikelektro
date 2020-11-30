<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel1a3 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel1a3Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel1a3s = $this->Tabel1a3Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel1a3",
            "content" => [],
            "tabel1a3s" => $tabel1a3s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga_audit" => $this->input->post('lembaga_audit'),
            "opini" => $this->input->post('opini'),
            "tahun_perolehan" => $this->input->post('tahun_perolehan'),
            "keterangan" => $this->input->post('keterangan'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel1a3Model->insert($data);
        redirect(base_url('Tabel1a3'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga_audit" => $this->input->post('lembaga_audit'),
            "opini" => $this->input->post('opini'),
            "tahun_perolehan" => $this->input->post('tahun_perolehan'),
            "keterangan" => $this->input->post('keterangan'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel1a3Model->update($data, $id);
        redirect(base_url('Tabel1a3'));
    }

    public function delete($id)
    {
        $this->Tabel1a3Model->delete($id);
        redirect(base_url('Tabel1a3'));
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
					
					$datains[$i]['lembaga_audit'] = $value['B'];
					$datains[$i]['tahun_perolehan'] = $value['C'];
					$datains[$i]['opini'] = $value['D'];
					$datains[$i]['keterangan'] = $value['E'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel1a3Model->insert_batch($datains);
        		redirect(base_url('Tabel1a3'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel1a3')); 
		
	}

}
