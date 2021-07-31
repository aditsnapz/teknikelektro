<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel2b extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel2bModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel2bs = $this->Tabel2bModel->show();
      
        $this->load->view('main.php',[
            "page" => "tabel2b",
			"title" => "Tabel2b",
			"subtitle" => "Mahasiswa Asing",
            "content" => [],
            "tabel2bs" => $tabel2bs, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "prodi" => $this->input->post('prodi'),
            "mhs_ts2" => $this->input->post('mhs_ts2'),
            "mhs_ts1" => $this->input->post('mhs_ts1'),
            "mhs_ts" => $this->input->post('mhs_ts'),
			"mhs_asing_ft_ts2" => $this->input->post('mhs_asing_ft_ts2'),
            "mhs_asing_ft_ts1" => $this->input->post('mhs_asing_ft_ts1'),
            "mhs_asing_ft_ts" => $this->input->post('mhs_asing_ft_ts'),
			"mhs_asing_pt_ts2" => $this->input->post('mhs_asing_pt_ts2'),
            "mhs_asing_pt_ts1" => $this->input->post('mhs_asing_pt_ts1'),
            "mhs_asing_pt_ts" => $this->input->post('mhs_asing_pt_ts'),
            
        ];
        
        
        $this->Tabel2bModel->insert($data);
        redirect(base_url('Tabel2b'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "prodi" => $this->input->post('prodi'),
            "mhs_ts2" => $this->input->post('mhs_ts2'),
            "mhs_ts1" => $this->input->post('mhs_ts1'),
            "mhs_ts" => $this->input->post('mhs_ts'),
			"mhs_asing_ft_ts2" => $this->input->post('mhs_asing_ft_ts2'),
            "mhs_asing_ft_ts1" => $this->input->post('mhs_asing_ft_ts1'),
            "mhs_asing_ft_ts" => $this->input->post('mhs_asing_ft_ts'),
			"mhs_asing_pt_ts2" => $this->input->post('mhs_asing_pt_ts2'),
            "mhs_asing_pt_ts1" => $this->input->post('mhs_asing_pt_ts1'),
            "mhs_asing_pt_ts" => $this->input->post('mhs_asing_pt_ts'),
        ];

        
        $this->Tabel2bModel->update($data, $id);
        redirect(base_url('Tabel2b'));
    }

    public function delete($id)
    {
        $this->Tabel2bModel->delete($id);
        redirect(base_url('Tabel2b'));
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
				               
				$this->Tabel2bModel->insert_batch($datains);
        		redirect(base_url('Tabel2b'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel2b')); 
		
	}

}
