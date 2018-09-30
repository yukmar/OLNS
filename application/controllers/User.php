<?php
/**
 * 
 */
class User extends CI_Controller
{
	protected $stat;
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user')) {
			$this->stat = $this->usermod->get_upriv($this->session->userdata('user'));
			if ($this->stat !== 'admin') {
				$this->session->sess_destroy();
				redirect(site_url());
			}
		} else {
			$this->session->sess_destroy();
			redirect(site_url());
		}
	}

	function index($page=null)
	{

		$user = $this->input->get('u');
		$li_tut = $this->submod->gettut_byuser($user);
		$var = null;
		$alert = null;
		switch ($this->input->get('aksi')) {
			case 'det':
				$var = 'detail';
				break;
			case 'ubah':
				$var = 'user';
				break;
			default:
				$var = null;
				break;
		}
		switch ($this->input->get('alt')) {
			case 'adder':
					$alert = "<div class='alert alert-danger' role='alert'>Maaf, username sudah ada.</div>";
				break;
			case 'addberhasil':
					$alert = "<div class='alert alert-success' role='alert'>Penambahan user baru berhasil!</div>";
				break;
			case 'ubahberhasil':
					$alert = "<div class='alert alert-success' role='alert'>Proses pengubahan data user berhasil!</div>";
				break;
			case 'ubahgagal':
					$alert = "<div class='alert alert-danger' role='alert'>Maaf, proses pengubahan datauser gagal!</div>";
				break;
			case 'delberhasil':
					$alert = "<div class='alert alert-success' role='alert'>Proses penghapusan data user berhasil!</div>";
				break;
			case 'delgagal':
					$alert = "<div class='alert alert-danger' role='alert'>Maaf, proses penghapusan data user gagal!</div>";
				break;
			default:
				$alert = null;
				break;
		}

		// paging list of tutorials
		$paging_config['base_url'] = site_url('user');
		$paging_config['total_rows'] = $this->usermod->count();
		$paging_config['per_page'] = 10;
		
		// desain pagination
		$paging_config['full_tag_open'] = '<ul class="pagination">';
		$paging_config['first_link'] = 'first';
		$paging_config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$paging_config['first_tag_close'] = '</span></li>';
		$paging_config['last_link'] = 'Last';
		$paging_config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$paging_config['last_tag_close'] = '</span></li>';
		$paging_config['next_link'] = '<span class="oi oi-chevron-right"></span>';
		$paging_config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$paging_config['next_tag_close'] = '</span></li>';
		$paging_config['prev_link'] = '<span class="oi oi-chevron-left"></span>';
		$paging_config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$paging_config['prev_tag_close'] = '</span></li>';
		$paging_config['cur_tag_open'] = '<li class="page-item"><span class="page-link">';
		$paging_config['cur_tag_close'] = '</span></li>';
		$paging_config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$paging_config['num_tag_close'] = '</span></li>';
		$paging_config['full_tag_close'] = "</ul></nav>";
		
		$this->pagination->initialize($paging_config);

		$data['users'] = $this->usermod->get_all('ASC',$paging_config['per_page'], $page);
		$data['table_link'] = $this->pagination->create_links();
		$data[$var] = $this->usermod->get_usernpriv($user);
		$data['list_tut'] = $li_tut;
		$data['alert'] = $alert;
		$data['jumsub_user'] = $this->submod->average_point($user);
		foreach ($this->catmod->get_cat() as $key => $value) {
			$data['label'][] = $value->name_cat;
		}
		$this->tampilan->view($this->stat, 'admin/user_view', $data);
	}

	function average()
	{
		$val = array();

	}

	function tambah()
	{
		# code... tbuser tbnama tbpass
		$new['username'] = $this->input->post('tbuser');
		$new['nama'] = $this->input->post('tbnama');
		$new['id_priv'] = $this->input->post('priv');
		$new['password'] = $this->input->post('tbpass');

		if ($this->usermod->get_user($new['username'])) {
			redirect(site_url('user/?alt=adder'));
		} else {
			$res = $this->usermod->insert($new);
			if ($res) {
				redirect(site_url('user/?alt=addberhasil'));
			} else {
				var_dump($res);
			}
		}
	}

	function ubah()
	{
		$ubah['username'] = $this->input->post('ubuser');
		$ubah['nama'] = $this->input->post('ubnama');
		$ubah['id_priv'] = $this->input->post('rdstat');
		$ubah['password'] = $this->input->post('ubpass');
		var_dump($ubah);
		$res = $this->usermod->ubah($ubah);
		if ($res) {
			redirect(site_url('user/?alt=ubahberhasil'));
		} else {
			redirect(site_url('user/?alt=ubahgagal'));
		}
	}

	function delete()
	{
		$user = $this->input->get('u');
		$res = $this->usermod->delete($user);
		if ($res) {
			redirect(site_url('user/?alt=delberhasil'));
		} else {
			redirect(site_url('user/?alt=delgagal'));
		}
	}
}