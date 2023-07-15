<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('model');
        //cek session dan level user
        if($this->model->is_role() != "2"){
			redirect("C_login");
			
        }
	}
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('C_login');
	}
	public function index()
	{
		$this->load->view('petugas/head');
		$this->load->view('petugas/menu');
		$this->load->view('petugas/dashboard');
		$this->load->view('petugas/footer');
	}
	
	public function tambah_us()
	{
		$this->load->view('petugas/head');
		$this->load->view('petugas/menu');
		$this->load->view('petugas/tambah_user');
		$this->load->view('petugas/footer');
	}
	public function aksi_tambah_us()
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
		redirect('petugas/user');
	}
	public function edit_us($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->model->edit($where,'user')->result();
		$this->load->view('petugas/head');
		$this->load->view('petugas/menu');
		$this->load->view('petugas/edit_user',$data);
		$this->load->view('petugas/footer');

	}
	public function update_user(){
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$alamat_user = $this->input->post('alamat_user');
		$jk = $this->input->post('jk');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$where = array(
			'id_user' => $id_user
		);
		$data = array(
			'nama_user' => $nama_user,
			'alamat_user' => $alamat_user,
			'jk' => $jk,
			'username' => $username,
			'password' => MD5($password),
			'level' =>$level
		);
		$this->model->update($where,$data,'user');
		redirect('petugas/user');
	}
	public function hapus_us($id)
	{
		$where = array('id_user' => $id);
		$this->model->hapus($where,'user');
		redirect('petugas/user');
	}
	public function user()
	{
		$data['user'] = $this->model->tampil('user')->result();
		$this->load->view('petugas/head');
		$this->load->view('petugas/menu');
		$this->load->view('petugas/user',$data);
		$this->load->view('petugas/footer');
	}
	
}
?>