<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tabel3a2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tabel3a2Model');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $tabel3a2s = json_decode(
			file_get_contents(SERVICE_URL.'Dosen/getTabel3a2')
		);
        $this->load->view('main.php',[
            "page" => "tabel3a2",
            "content" => [],
            "tabel3a2s" => $tabel3a2s->data, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "pendidikan" => $this->input->post('pendidikan'),
            "guru_besar" => $this->input->post('guru_besar'),
            "lektor_kepala" => $this->input->post('lektor_kepala'),
            "lektor" => $this->input->post('lektor'),
            "asisten_ahli" => $this->input->post('asisten_ahli'),
            "tenaga_pengajar" => $this->input->post('tenaga_pengajar'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        
        $this->Tabel3a2Model->insert($data);
        redirect(base_url('Tabel3a2'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "pendidikan" => $this->input->post('pendidikan'),
            "guru_besar" => $this->input->post('guru_besar'),
            "lektor_kepala" => $this->input->post('lektor_kepala'),
            "lektor" => $this->input->post('lektor'),
            "asisten_ahli" => $this->input->post('asisten_ahli'),
            "tenaga_pengajar" => $this->input->post('tenaga_pengajar'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        
        $this->Tabel3a2Model->update($data, $id);
        redirect(base_url('Tabel3a2'));
    }

    public function delete($id)
    {
        $this->Tabel3a2Model->delete($id);
        redirect(base_url('Tabel3a2'));
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
					
					$datains[$i]['pendidikan'] = $value['B'];
					$datains[$i]['guru_besar'] = $value['C'];
					$datains[$i]['lektor_kepala'] = $value['D'];
					$datains[$i]['lektor'] = $value['E'];
					$datains[$i]['asisten_ahli'] = $value['F'];
					$datains[$i]['tenaga_pengajar'] = $value['G'];
					$datains[$i]['created_at'] = date("Y-m-d H:i:s");
					$datains[$i]['created_at'] = date("Y-m-d H:i:s"); 
					$i++;
				}
				               
				$this->Tabel3a2Model->insert_batch($datains);
        		redirect(base_url('Tabel3a2'));           
			} catch (Exception $e) {
				die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
				. '": ' .$e->getMessage());
				}
			}else{
				echo $error['error'];
			}
		}
		redirect(base_url('Tabel3a2')); 
		
	}

	public function chart()
	{
		$count_profesor = json_decode(
			file_get_contents(SERVICE_URL.'Dosen/getJumlahProfesor')
		);

		$tabel3a2 = json_decode(
			file_get_contents(SERVICE_URL.'Dosen/getTabel3a2')
		);

		$data_magister = [	$tabel3a2->data[0]->guru_besar,
							$tabel3a2->data[0]->lektor_kepala, 
							$tabel3a2->data[0]->lektor, 
							$tabel3a2->data[0]->asisten_ahli,
							$tabel3a2->data[0]->tenaga_pengajar
						];
		$data_doktor = [	$tabel3a2->data[1]->guru_besar,
							$tabel3a2->data[1]->lektor_kepala, 
							$tabel3a2->data[1]->lektor, 
							$tabel3a2->data[1]->asisten_ahli,
							$tabel3a2->data[1]->tenaga_pengajar
						];
		

		$this->load->view('main.php',[
            "page" => "tabel3a2chart",
			"content" => [],
			"count_profesor" => json_encode($count_profesor->data[0]->jumlah),
			"magister" => json_encode($tabel3a2->data[0]->guru_besar),
			"doktor" => json_encode($tabel3a2->data[1]->guru_besar),
			"data_magister" => json_encode($data_magister),
			"data_doktor" => json_encode($data_doktor),
			"jumlah_magister" => json_encode($tabel3a2->data[0]->jumlah),
			"jumlah_doktor" => json_encode($tabel3a2->data[1]->jumlah),
        ]);
	}

}
