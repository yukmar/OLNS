<?php
/**
 * 
 */
class Profile extends CI_Controller
{
	protected $iduser;
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			$this->session->sess_destroy();
			redirect(site_url());
		}
		$this->iduser = $this->session->userdata('user');
	}

	public function index()
	{
		$dt_ubah = null;
		$dtuser = $this->usermod->get_user($this->iduser);
		if (!empty($this->input->get('aksi'))) {
			$dt_ubah = $dtuser;
		} else {
			$dt_ubah = null;
		}
		$alert = null;
		switch ($this->input->get('alt')) {
			case 'ubahberhasil':
				$alert = "<div class='alert alert-success' role='alert'>Perubahan Profil Berhasil!</div>";
				break;
			case 'ubahgagal':
				$alert = "<div class='alert alert-danger' role='alert'>Perubahan Profil Gagal!</div>";
				break;
			default:
				$alert = null;
				break;
		}
		$dtlog = $this->submod->get_userlog($this->iduser);
		$this->tampilan->view(
			$this->usermod->get_upriv($this->iduser),
			'dashboard/profile_view', 
			array(
				'user' => $dtuser,
				'u_dt' =>$dt_ubah,
				'points' => $this->submod->count_point($this->session->userdata('user')),
				'log' => $dtlog,
				'alert' => $alert
			));	
	}

	public function ubah()
	{
		$dt['username'] = $this->iduser;
		$dt['nama'] = $this->input->post('ubnama');
		$dt['password'] = $this->input->post('ubpass');

		$res = $this->usermod->ubah($dt);
		if ($res) {
			if (condition) {
				# code...
			}
			redirect(site_url('profile/?alt=ubahberhasil'));
		} else {
			redirect(site_url('profile/?alt=ubahgagal'));
		}
	}
}