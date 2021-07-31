<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel3b1 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel3b1Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel3b1s = $this->Tabel3b1Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel3b1",
			"title" => "Tabel3b1",
			"subtitle" => "Pengakuan/Rekognisi Dosen",
            "content" => [],
            "tabel3b1s" => $tabel3b1s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"nama_dosen" => $this->input->post('nama_dosen'),
            "bidang_keahlian" => $this->input->post('bidang_keahlian'),
            "rekognisi" => $this->input->post('rekognisi'),
            "wilayah" => $this->input->post('wilayah'),
			"nasional" => $this->input->post('nasional'),
			"internasional" => $this->input->post('internasional'),
            "tahun" => $this->input->post('tahun'),
            
        ];
        
        
        $this->Tabel3b1Model->insert($data);
        redirect(base_url('Tabel3b1'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"nama_dosen" => $this->input->post('nama_dosen'),
            "bidang_keahlian" => $this->input->post('bidang_keahlian'),
            "rekognisi" => $this->input->post('rekognisi'),
            "wilayah" => $this->input->post('wilayah'),
			"nasional" => $this->input->post('nasional'),
			"internasional" => $this->input->post('internasional'),
            "tahun" => $this->input->post('tahun'),
        ];

        
        $this->Tabel3b1Model->update($data, $id);
        redirect(base_url('Tabel3b1'));
    }

    public function delete($id)
    {
        $this->Tabel3b1Model->delete($id);
        redirect(base_url('Tabel3b1'));
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
					
					$datains[$i]['fakultas'] = $value['B'];
					$datains[$i]['ts2'] = $value['C'];
					$datains[$i]['ts1'] = $value['D'];
					$datains[$i]['ts'] = $value['E'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel3b1Model->insert_batch($datains);
        		redirect(base_url('Tabel3b1'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel3b1')); 
		
	}

}
