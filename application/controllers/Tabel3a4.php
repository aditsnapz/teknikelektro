<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel3a4 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel3a4Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel3a4s = $this->Tabel3a4Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel3a4",
			"title" => "Tabel3a4 ",
			"subtitle" => "Dosen Tidak Tetap ",
            "content" => [],
            "tabel3a4s" => $tabel3a4s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"nama_dosen" => $this->input->post('nama_dosen'),
            "nidn" => $this->input->post('nidn'),
            "pendidikan_pascasarjana" => $this->input->post('pendidikan_pascasarjana'),
            "bidang_keahlian" => $this->input->post('bidang_keahlian'),
			"jabatan_akademik" => $this->input->post('jabatan_akademik'),
			"sertifikat_pendidik" => $this->input->post('sertifikat_pendidik'),
            "sertifikat_kompetensi" => $this->input->post('sertifikat_kompetensi'),
            "mata_kuliah_ps_diakreditasi" => $this->input->post('mata_kuliah_ps_diakreditasi'),
            "kesesuian" => $this->input->post('kesesuian'),
            
        ];
        
        
        $this->Tabel3a4Model->insert($data);
        redirect(base_url('Tabel3a4'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"nama_dosen" => $this->input->post('nama_dosen'),
            "nidn" => $this->input->post('nidn'),
            "pendidikan_pascasarjana" => $this->input->post('pendidikan_pascasarjana'),
            "bidang_keahlian" => $this->input->post('bidang_keahlian'),
			"jabatan_akademik" => $this->input->post('jabatan_akademik'),
			"sertifikat_pendidik" => $this->input->post('sertifikat_pendidik'),
            "sertifikat_kompetensi" => $this->input->post('sertifikat_kompetensi'),
            "mata_kuliah_ps_diakreditasi" => $this->input->post('mata_kuliah_ps_diakreditasi'),
            "kesesuian" => $this->input->post('kesesuian'),
        ];

        
        $this->Tabel3a4Model->update($data, $id);
        redirect(base_url('Tabel3a4'));
    }

    public function delete($id)
    {
        $this->Tabel3a4Model->delete($id);
        redirect(base_url('Tabel3a4'));
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
				               
				$this->Tabel3a4Model->insert_batch($datains);
        		redirect(base_url('Tabel3a4'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel3a4')); 
		
	}

}
