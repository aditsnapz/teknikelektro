<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel8b2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel8b2Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel8b2s = $this->Tabel8b2Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel8b2",
			"title" => "Tabel8b2",
			"subtitle" => "Prestasi Non-akademik Mahasiswa",
            "content" => [],
            "tabel8b2s" => $tabel8b2s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"tahun_perolehan" => $this->input->post('tahun_perolehan'),
			"prestasi" => $this->input->post('prestasi'),
            "lokal" => $this->input->post('lokal'),
			"nasional" => $this->input->post('nasional'),
			"internasional" => $this->input->post('internasional'),
            
            
        ];
        
        
        $this->Tabel8b2Model->insert($data);
        redirect(base_url('Tabel8b2'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"tahun_perolehan" => $this->input->post('tahun_perolehan'),
			"prestasi" => $this->input->post('prestasi'),
            "lokal" => $this->input->post('lokal'),
			"nasional" => $this->input->post('nasional'),
			"internasional" => $this->input->post('internasional'),
        ];

        
        $this->Tabel8b2Model->update($data, $id);
        redirect(base_url('Tabel8b2'));
    }

    public function delete($id)
    {
        $this->Tabel8b2Model->delete($id);
        redirect(base_url('Tabel8b2'));
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
				               
				$this->Tabel8b2Model->insert_batch($datains);
        		redirect(base_url('Tabel8b2'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel8b2')); 
		
	}

}
