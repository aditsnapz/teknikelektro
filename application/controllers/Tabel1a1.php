<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel1a1 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel1a1Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel1a1s = $this->Tabel1a1Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel1a1",
            "content" => [],
            "tabel1a1s" => $tabel1a1s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga" => $this->input->post('lembaga'),
            "jenis" => $this->input->post('jenis'),
            "lingkup" => $this->input->post('lingkup'),
            "tingkat" => $this->input->post('tingkat'),
            "masa_berlaku" => $this->input->post('masa_berlaku'),
            "keterangan" => $this->input->post('keterangan'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel1a1Model->insert($data);
        redirect(base_url('Tabel1a1'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga" => $this->input->post('lembaga'),
            "jenis" => $this->input->post('jenis'),
            "lingkup" => $this->input->post('lingkup'),
            "tingkat" => $this->input->post('tingkat'),
            "masa_berlaku" => $this->input->post('masa_berlaku'),
            "keterangan" => $this->input->post('keterangan'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"), 
        ];

        
        $this->Tabel1a1Model->update($data, $id);
        redirect(base_url('Tabel1a1'));
    }

    public function delete($id)
    {
        $this->Tabel1a1Model->delete($id);
        redirect(base_url('Tabel1a1'));
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
					
					$datains[$i]['lembaga'] = $value['B'];
					$datains[$i]['jenis'] = $value['C'];
					$datains[$i]['lingkup'] = $value['D'];
					$datains[$i]['tingkat'] = $value['E'];
					$datains[$i]['masa_berlaku'] = $value['F'];
					$datains[$i]['keterangan'] = $value['G'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel1a1Model->insert_batch($datains);
        		redirect(base_url('Tabel1a1'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel1a1')); 
		
	}

}
