<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel6a extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel6aModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel6as = $this->Tabel6aModel->show();
      
        $this->load->view('main.php',[
            "page" => "tabel6a",
			"title" => "Tabel6a",
			"subtitle" => "Penelitian DTPS yang Melibatkan Mahasiswa",
            "content" => [],
            "tabel6as" => $tabel6as, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama_dosen" => $this->input->post('nama_dosen'),
            "tema" => $this->input->post('tema'),
            "nama_mahasiswa" => $this->input->post('nama_mahasiswa'),
            "judul" => $this->input->post('judul'),
            "tahun" => $this->input->post('tahun'),
            
            
        ];
        
        
        $this->Tabel6aModel->insert($data);
        redirect(base_url('Tabel6a'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama_dosen" => $this->input->post('nama_dosen'),
            "tema" => $this->input->post('tema'),
            "nama_mahasiswa" => $this->input->post('nama_mahasiswa'),
            "judul" => $this->input->post('judul'),
            "tahun" => $this->input->post('tahun'),
        ];

        
        $this->Tabel6aModel->update($data, $id);
        redirect(base_url('Tabel6a'));
    }

    public function delete($id)
    {
        $this->Tabel6aModel->delete($id);
        redirect(base_url('Tabel6a'));
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
					
					$datains[$i]['program'] = $value['B'];
					$datains[$i]['tahun_akademik'] = $value['C'];
					$datains[$i]['daya_tampung'] = $value['D'];
					$datains[$i]['cama_pendaftar'] = $value['E'];
					$datains[$i]['cama_lulus'] = $value['F'];
					$datains[$i]['maba_reguler'] = $value['G'];
					$datains[$i]['maba_transfer'] = $value['H'];
					$datains[$i]['mahasiswa_reguler'] = $value['I'];
					$datains[$i]['mahasiswa_transfer'] = $value['J'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel6aModel->insert_batch($datains);
        		redirect(base_url('Tabel6a'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel6a')); 
		
	}

}
