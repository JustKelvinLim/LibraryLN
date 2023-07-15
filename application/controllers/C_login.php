<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model admin
        $this->load->model('Model');
    }

    public function index()
    {

        if($this->model->logged_id())
        {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
            if($this->session->userdata("level") == "1"){
                redirect('Admin');
            }
            else{
                redirect('User');
            }
        }else{

                //jika session belum terdaftar

                //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
            if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->model->check_login('user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id_user'   => $apps->id_user,
                            'user_name' => $apps->username,
                            'password' => $apps->password,
                            'level'    => $apps->level
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("level") == "1"){
                            redirect('admin');
                        }elseif($this->session->userdata("level") == "2"){
                            redirect('petugas');
                            }
                        else{
                            redirect('user');
                        
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{
                $this->load->view('login');
            }

        }

    }
    public function register(){
        $this->load->view('register');
    }
    public function aksi_register()
	{
		$nama_user = $this->input->post('nama_user');
		$alamat_user = $this->input->post('alamat_user');
		$jk = $this->input->post('jk');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama_user' => $nama_user,
			'alamat_user' => $alamat_user,
			'jk' => $jk,
			'username' => $username,
			'password' => MD5($password)
		);
		$this->model->input($data, 'user');
		redirect('admin/user');
	}
}