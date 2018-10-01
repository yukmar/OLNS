<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	protected $stat_user = null;
	protected $user = null;

	function __construct(){
		parent::__construct();
	}

	public function index($page_no=null)
	{
		$alert = null;
		if ($this->session->userdata('user')) {
			$this->user = $this->session->userdata('user');
			$this->stat_user = $this->usermod->get_upriv($this->user);
			if ($this->stat_user == 'admin') {
				$this->admin_index($page_no);
			} else {
				$this->user_index();
			}
		} else {
			switch ($this->input->get('alt')) {
				case 'berhasil':
					$alert = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
					Selamat! Anda telah terdaftar. Silahkan Masuk! <button type='button' class='close' data-dismiss='alert'aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					break;
				case 'gagal':
					$alert = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					Maaf, username yang diinginkan telah ada. Silahkan coba yang lain.<button type='button' class='close' data-dismiss='alert'aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					break;
				default:
					$alert = null;
					break;
			}
			$this->load->view('welcome_view', array('alert' => $alert));
		}
	}

	function login()
	{
		$datalog['user'] = $this->input->post('tbuser');
		$datalog['pass'] = $this->input->post('tbpuser');
		if ($this->usermod->checkuser($datalog)) {
			$this->session->set_userdata(array('user' => $datalog['user']));
			redirect(site_url());
		} else {
			$this->login_failed();
		}
	}

	function login_failed()
	{
		$this->load->view('loginfailed_view');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}

	function create_newuser()
	{
		$newdt['username'] = $this->input->post('newuser');
		$newdt['nama'] = $this->input->post('newnama');
		$newdt['password'] = $this->input->post('newpass');
		$newdt['id_priv'] = 2;

		if ($this->usermod->get_user($newdt['username'])) {
			redirect(site_url('?alt=gagal'));
		} else {
			$res = $this->usermod->insert($newdt);
			redirect(site_url('?alt=berhasil'));
		}
	}

	protected function admin_index($offset=null)
	{
		$data['count_tutorial'] = $this->bankmod->count(); 
		$data['count_user'] = $this->usermod->count();
		$data['count_submit'] = $this->submod->count();

		// paging list of tutorials
		$paging_config['base_url'] = site_url('list');
		$paging_config['total_rows'] = $this->catmod->count();
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

		$var = null;
		$dt_var = null;
		$no = $this->input->get('no');
		switch ($this->input->get('det')) {
			case 'tut':
				$var = 'item_tut';
				$dt_var = $this->bankmod->get_spec($no);
				break;
			default:
				$var = null;
				break;
		}
		$data[$var] = $dt_var;
		$sortby = $this->input->get('sortby');
		$orderby = $this->input->get('orderby');
		for ($i=0; $i < $this->catmod->count() ; $i++) { 
			$data['warna'][] = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
		}
		$data['table_link'] = $this->pagination->create_links();
		$data['table_item'] = $this->bankmod->get_all('name_cat', 'ASC', $paging_config['per_page'], $offset);
		$data['biguser'] = $this->usermod->get_ranks(3);
		$data['recent_submitted'] = $this->submod->recent_submit();
		$data['recent_joined'] = $this->usermod->get_all('DESC',3);
		foreach ($this->bankmod->get_all('id_cat') as $key => $value) {
			$data['label'][] = $value->name_cat;
			$data['jumtut'][] = $value->jumtut;
			$data['jumsub'][] = $value->jumsub;
		}
		$this->tampilan->view($this->stat_user, 'admin/home_view', $data);
	}

	function user_index()
	{
		$data['u'] = $this->usermod->get_user($this->user);
		$data['point'] = $this->submod->count_point($this->user);
		$data['recent_tuts'] = $this->bankmod->recent_tut();
		$data['ranks'] = $this->usermod->get_ranks(3);
		foreach ($this->submod->average_point($this->user) as $key => $value) {
			$data['label'][] = $value->cat;
			$data['jumsub_user'][] = $value->avr;
		}
		$data['rekomen'] = $this->bankmod->get_rekomentut($this->user);
		$this->tampilan->view($this->stat_user, 'dashboard/home_view', $data);
	}
}
