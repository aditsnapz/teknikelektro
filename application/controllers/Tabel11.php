<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel11 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel11Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel11s = $this->Tabel11Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel11",
			"title" => "Tabel11",
			"subtitle" => "Pendidikan",
            "content" => [],
            "tabel11s" => $tabel11s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "mitra" => $this->input->post('mitra'),
            "internasional" => $this->input->post('internasional'),
            "nasional" => $this->input->post('nasional'),
            "wilayah" => $this->input->post('wilayah'),
            "judul" => $this->input->post('judul'),
            "manfaat" => $this->input->post('manfaat'),
            "waktu" => $this->input->post('waktu'),
            "bukti" => $this->input->post('bukti'),
            "tahun" => $this->input->post('tahun'),
            "keterangan" => $this->input->post('keterangan'),
            "tipe" => $this->input->post('tipe'),
            
        ];
        
        
        $this->Tabel11Model->insert($data);
        redirect(base_url('Tabel11'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "mitra" => $this->input->post('mitra'),
            "internasional" => $this->input->post('internasional'),
            "nasional" => $this->input->post('nasional'),
            "wilayah" => $this->input->post('wilayah'),
            "judul" => $this->input->post('judul'),
            "manfaat" => $this->input->post('manfaat'),
            "waktu" => $this->input->post('waktu'),
            "bukti" => $this->input->post('bukti'),
            "tahun" => $this->input->post('tahun'),
            "keterangan" => $this->input->post('keterangan'),
            "tipe" => $this->input->post('tipe'),
        ];

        
        $this->Tabel11Model->update($data, $id);
        redirect(base_url('Tabel11'));
    }

    public function delete($id)
    {
        $this->Tabel11Model->delete($id);
        redirect(base_url('Tabel11'));
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
				               
				$this->Tabel11Model->insert_batch($datains);
        		redirect(base_url('Tabel11'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel11')); 
		
	}

}
