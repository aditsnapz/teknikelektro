<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username')){
            redirect(base_url('Dashboard'));
        }
        $this->load->view('login');
    }
    
    public function do_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users',['username' => $username, 'password' => md5($password)])->result_array();
        if($user[0] != NULL) {
        
            $data = [
                'username' => $username,
				'foto' => $user[0]['foto'],
				'nama' => $user[0]['nama'],
            ];

            $this->session->set_userdata($data);
            redirect(base_url('Dashboard'));
        }
        $this->session->set_flashdata('info','maaf username atau password salah');
        redirect(base_url('Login'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
