<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel5a extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel5aModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel5as = $this->Tabel5aModel->show();
      
        $this->load->view('main.php',[
            "page" => "tabel5a",
			"title" => "Tabel5a",
			"subtitle" => "Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran",
            "content" => [],
            "tabel5as" => $tabel5as, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"semester" => $this->input->post('semester'),
			"kode_mata_kuliah" => $this->input->post('kode_mata_kuliah'),
            "nama_mata_kuliah" => $this->input->post('nama_mata_kuliah'),
            "mata_kuliah_kompetensi" => $this->input->post('mata_kuliah_kompetensi'),
            "sks_kuliah" => $this->input->post('sks_kuliah'),
			"sks_seminar" => $this->input->post('sks_seminar'),
			"sks_praktik" => $this->input->post('sks_praktik'),
			"kredit_ke_jam" => $this->input->post('kredit_ke_jam'),
            "sikap" => $this->input->post('sikap'),
            "pengetahuan" => $this->input->post('pengetahuan'),
            "ketrampilan_umum" => $this->input->post('ketrampilan_umum'),
            "dokumen_rencana_pembelajaran" => $this->input->post('dokumen_rencana_pembelajaran'),
			"unit_penyelengara" => $this->input->post('unit_penyelengara'),
        ];
        
        
        $this->Tabel5aModel->insert($data);
        redirect(base_url('Tabel5a'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"semester" => $this->input->post('semester'),
			"kode_mata_kuliah" => $this->input->post('kode_mata_kuliah'),
            "nama_mata_kuliah" => $this->input->post('nama_mata_kuliah'),
            "mata_kuliah_kompetensi" => $this->input->post('mata_kuliah_kompetensi'),
            "sks_kuliah" => $this->input->post('sks_kuliah'),
			"sks_seminar" => $this->input->post('sks_seminar'),
			"sks_praktik" => $this->input->post('sks_praktik'),
			"kredit_ke_jam" => $this->input->post('kredit_ke_jam'),
            "sikap" => $this->input->post('sikap'),
            "pengetahuan" => $this->input->post('pengetahuan'),
            "ketrampilan_umum" => $this->input->post('ketrampilan_umum'),
            "dokumen_rencana_pembelajaran" => $this->input->post('dokumen_rencana_pembelajaran'),
			"unit_penyelengara" => $this->input->post('unit_penyelengara'),
        ];

        
        $this->Tabel5aModel->update($data, $id);
        redirect(base_url('Tabel5a'));
    }

    public function delete($id)
    {
        $this->Tabel5aModel->delete($id);
        redirect(base_url('Tabel5a'));
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
				               
				$this->Tabel5aModel->insert_batch($datains);
        		redirect(base_url('Tabel5a'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel5a')); 
		
	}

}
