<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel1a2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel1a2Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel1a2s = $this->Tabel1a2Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel1a2",
            "content" => [],
            "tabel1a2s" => $tabel1a2s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga_akreditasi" => $this->input->post('lembaga_akreditasi'),
            "prodi" => $this->input->post('prodi'),
            "peringkat" => $this->input->post('peringkat'),
            "masa_berlaku" => $this->input->post('masa_berlaku'),
            "keterangan" => $this->input->post('keterangan'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel1a2Model->insert($data);
        redirect(base_url('Tabel1a2'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "lembaga_akreditasi" => $this->input->post('lembaga_akreditasi'),
            "prodi" => $this->input->post('prodi'),
            "peringkat" => $this->input->post('peringkat'),
            "masa_berlaku" => $this->input->post('masa_berlaku'),
            "keterangan" => $this->input->post('keterangan'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel1a2Model->update($data, $id);
        redirect(base_url('Tabel1a2'));
    }

    public function delete($id)
    {
        $this->Tabel1a2Model->delete($id);
        redirect(base_url('Tabel1a2'));
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
					
					$datains[$i]['lembaga_akreditasi'] = $value['B'];
					$datains[$i]['prodi'] = $value['C'];
					$datains[$i]['peringkat'] = $value['D'];
					$datains[$i]['masa_berlaku'] = $value['E'];
					$datains[$i]['keterangan'] = $value['F'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel1a2Model->insert_batch($datains);
        		redirect(base_url('Tabel1a2'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel1a2')); 
		
	}

}
