<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel8d2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel8d2Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel8d2s = $this->Tabel8d2Model->show();
      
        $this->load->view('main.php',[
            "page" => "tabel8d2",
			"title" => "Tabel8d2",
			"subtitle" => "IPK Lulusan",
            "content" => [],
            "tabel8d2s" => $tabel8d2s, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "tahun_lulus" => $this->input->post('tahun_lulus'),
            "jumlah_lulusan_terlacak" => $this->input->post('jumlah_lulusan_terlacak'),
            "kesesuaian_bidang_rendah" => $this->input->post('kesesuaian_bidang_rendah'),
            "kesesuaian_bidang_sedang" => $this->input->post('kesesuaian_bidang_sedang'),
            "kesesuaian_bidang_tinggi" => $this->input->post('kesesuaian_bidang_tinggi'),
            
            
        ];
        
        
        $this->Tabel8d2Model->insert($data);
        redirect(base_url('Tabel8d2'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"tahun_lulus" => $this->input->post('tahun_lulus'),
            "jumlah_lulusan_terlacak" => $this->input->post('jumlah_lulusan_terlacak'),
            "kesesuaian_bidang_rendah" => $this->input->post('kesesuaian_bidang_rendah'),
            "kesesuaian_bidang_sedang" => $this->input->post('kesesuaian_bidang_sedang'),
            "kesesuaian_bidang_tinggi" => $this->input->post('kesesuaian_bidang_tinggi'),
            
        ];

        
        $this->Tabel8d2Model->update($data, $id);
        redirect(base_url('Tabel8d2'));
    }

    public function delete($id)
    {
        $this->Tabel8d2Model->delete($id);
        redirect(base_url('Tabel8d2'));
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
				               
				$this->Tabel8d2Model->insert_batch($datains);
        		redirect(base_url('Tabel8d2'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel8d2')); 
		
	}

}
