<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel1c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel1cModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel1cs = $this->Tabel1cModel->show();
      
        $this->load->view('main.php',[
            "page" => "tabel1c",
            "content" => [],
            "tabel1cs" => $tabel1cs, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga_kerjasama" => $this->input->post('lembaga_kerjasama'),
            "internasional" => $this->input->post('internasional'),
            "nasional" => $this->input->post('nasional'),
            "lokal" => $this->input->post('lokal'),
            "manfaat" => $this->input->post('manfaat'),
            "bukti" => $this->input->post('bukti'),
            "masa_berlaku" => $this->input->post('masa_berlaku'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel1cModel->insert($data);
        redirect(base_url('Tabel1c'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga_kerjasama" => $this->input->post('lembaga_kerjasama'),
            "internasional" => $this->input->post('internasional'),
            "nasional" => $this->input->post('nasional'),
            "lokal" => $this->input->post('lokal'),
            "manfaat" => $this->input->post('manfaat'),
            "bukti" => $this->input->post('bukti'),
            "masa_berlaku" => $this->input->post('masa_berlaku'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel1cModel->update($data, $id);
        redirect(base_url('Tabel1c'));
    }

    public function delete($id)
    {
        $this->Tabel1cModel->delete($id);
        redirect(base_url('Tabel1c'));
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
					
					$datains[$i]['lembaga_kerjasama'] = $value['B'];
					$datains[$i]['internasional'] = $value['C'];
					$datains[$i]['nasional'] = $value['D'];
					$datains[$i]['lokal'] = $value['E'];
					$datains[$i]['manfaat'] = $value['F'];
					$datains[$i]['bukti'] = $value['G'];
					$datains[$i]['masa_berlaku'] = $value['H'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel1cModel->insert_batch($datains);
        		redirect(base_url('Tabel1c'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel1c')); 
		
	}

}
