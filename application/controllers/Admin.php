<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model');
        //cek session dan level user
        if($this->model->is_role() != "1"){
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
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	
	public function tambah_us()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/tambah_user');
		$this->load->view('admin/footer');
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
		redirect('admin/user');
	}
	public function edit_us($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->model->edit($where,'user')->result();
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/edit_user',$data);
		$this->load->view('admin/footer');

	}
	public function update_user(){
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$alamat_user = $this->input->post('alamat_user');
		$jk = $this->input->post('jk');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'nama_user' => $nama_user,
			'alamat_user' => $alamat_user,
			'jk' => $jk,
			'username' => $username,
			'password' => MD5($password),
			'level' => $level
		);
		$where = array(
			'id_user' => $id_user
		);
		$this->model->update($where,$data,'user');
		redirect('admin/user');
	}
	public function hapus_us($id)
	{
		$where = array('id_user' => $id);
		$this->model->hapus($where,'user');
		redirect('admin/user');
	}
	public function user()
	{
		$data['user'] = $this->model->tampil('user')->result();
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/user',$data);
		$this->load->view('admin/footer');
	}
	public function tambah_bk()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/tambah_bar');
		$this->load->view('admin/footer');
	}
	public function aksi_tambah_bk()
	{
		$id_dist = $this->input->post('id_dist');
		$judul = $this->input->post('judul');
		$no_isbn = $this->input->post('no_isbn');
		$penulis = $this->input->post('penulis');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$stok = $this->input->post('stok');
		$harga_pokok = $this->input->post('harga_pokok');
		$harga_jual = $this->input->post('harga_jual');
		$data = array(
			'id_dist' => $id_dist,
			'judul' => $judul,
			'no_isbn' => $no_isbn,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'stok' => $stok,
			'harga_pokok' => $harga_pokok*1000,
			'harga_jual' => $harga_jual*1000
		);
		$this->model->input($data, 'buku');
		redirect('admin/buku');
	}
	public function edit_bk($id){
		$where = array('id_buku' => $id);
		$data['buku'] = $this->model->edit($where,'buku')->result();
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/edit_bar',$data);
		$this->load->view('admin/footer');

	}
	public function update_buku(){
		$id_buku = $this->input->post('id_buku');
		$id_dist = $this->input->post('id_dist');
		$judul = $this->input->post('judul');
		$no_isbn = $this->input->post('no_isbn');
		$penulis = $this->input->post('penulis');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$stok = $this->input->post('stok');
		$harga_pokok = $this->input->post('harga_pokok');
		$harga_jual = $this->input->post('harga_jual');
		$data = array(
			'id_dist' => $id_dist,
			'judul' => $judul,
			'no_isbn' => $no_isbn,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'stok' => $stok,
			'harga_pokok' => $harga_pokok*1000,
			'harga_jual' => $harga_jual*1000
		);
		$where = array(
			'id_buku' => $id_buku
		);
		$this->model->update($where,$data,'buku');
		redirect('admin/buku');
	}
	public function hapus_bk($id)
	{
		$where = array('id_buku' => $id);
		$this->model->hapus($where,'buku');
		redirect('admin/buku');
	}
	public function buku()
	{
		$data['buku'] = $this->model->joinbuku()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/barang',$data);
		$this->load->view('admin/footer');
	}
	public function dist()
	{
		$data['dist'] = $this->model->tampil('dist')->result();
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/distributor',$data);
		$this->load->view('admin/footer');
	}
	public function pinjam()
	{
		$data['pinjam'] = $this->model->joinpinjam()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/peminjaman',$data);
		$this->load->view('admin/footer');
	}
	public function tambah_pinjam()
	{
		$data['pinjam'] = $this->model->joinpinjam()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/menu');
		$this->load->view('admin/tambah_pinjam',$data);
		$this->load->view('admin/footer');
	}
	public function aksi_tambah_pinjam()
	{
		$id_buku = $this->input->post('id_buku');
		$id_user = $this->input->post('id_user');
		$jumlah = $this->input->post('jumlah');
		$total = $this->input->post('total');
		$tanggal = $this->input->post('tanggal');
		$data = array(
			'id_buku' => $id_buku,
			'id_user' => $id_user,
			'jumlah' => $jumlah,
			'total' => $total,
			'tanggal' => $tanggal
		);
		$this->model->input($data, 'pinjam');
		redirect('admin/pinjam');
	}
	public function hapus_pinjam($id)
	{
		$where = array('id_pinjam' => $id);
		$this->model->hapus($where,'pinjam');
		redirect('admin/pinjam');
	}
}
?>