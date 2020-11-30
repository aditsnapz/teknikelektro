<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel1b extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel1bModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel1bs = $this->Tabel1bModel->show();
      
        $this->load->view('main.php',[
            "page" => "tabel1b",
            "content" => [],
            "tabel1bs" => $tabel1bs, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "peringkat_akreditasi" => $this->input->post('peringkat_akreditasi'),
            "s3" => $this->input->post('s3'),
            "s2" => $this->input->post('s2'),
            "s1" => $this->input->post('s1'),
            "sp2" => $this->input->post('sp2'),
            "sp1" => $this->input->post('sp1'),
            "profesi" => $this->input->post('profesi'),
            "s3t" => $this->input->post('s3t'),
            "s2t" => $this->input->post('s2t'),
            "d4" => $this->input->post('d4'),
            "d3" => $this->input->post('d3'),
            "d2" => $this->input->post('d2'),
            "d1" => $this->input->post('d1'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel1bModel->insert($data);
        redirect(base_url('Tabel1b'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "peringkat_akreditasi" => $this->input->post('peringkat_akreditasi'),
            "s3" => $this->input->post('s3'),
            "s2" => $this->input->post('s2'),
            "s1" => $this->input->post('s1'),
            "sp2" => $this->input->post('sp2'),
            "sp1" => $this->input->post('sp1'),
            "profesi" => $this->input->post('profesi'),
            "s3t" => $this->input->post('s3t'),
            "s2t" => $this->input->post('s2t'),
            "d4" => $this->input->post('d4'),
            "d3" => $this->input->post('d3'),
            "d2" => $this->input->post('d2'),
            "d1" => $this->input->post('d1'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel1bModel->update($data, $id);
        redirect(base_url('Tabel1b'));
    }

    public function delete($id)
    {
        $this->Tabel1bModel->delete($id);
        redirect(base_url('Tabel1b'));
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
					
					$datains[$i]['peringkat_akreditasi'] = $value['B'];
					$datains[$i]['s3'] = $value['C'];
					$datains[$i]['s2'] = $value['D'];
					$datains[$i]['s1'] = $value['E'];
					$datains[$i]['sp2'] = $value['F'];
					$datains[$i]['sp1'] = $value['G'];
					$datains[$i]['profesi'] = $value['H'];
					$datains[$i]['s3t'] = $value['I'];
					$datains[$i]['s2t'] = $value['J'];
					$datains[$i]['d4'] = $value['K'];
					$datains[$i]['d3'] = $value['L'];
					$datains[$i]['d2'] = $value['M'];
					$datains[$i]['d1'] = $value['N'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel1bModel->insert_batch($datains);
        		redirect(base_url('Tabel1b'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel1b')); 
		
	}

}
