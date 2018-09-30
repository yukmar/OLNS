<?php
/**
 * 
 */
class Banktuts extends CI_Controller
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

	public function index($page=null)
	{
		$no = $this->input->get('id');
		$li_user = null;
		$alert = null;
		$var = null;
		switch ($this->input->get('aksi')) {
			case 'det':
				$var = 'dtdet';
				break;
			case 'ubah':
				$var = 'dtubah';
				break;
			case 'detuser':
				$li_user = $this->submod->getuser_bytut($no);
				break;
			default:
				$var = null;
				break;
		}
		switch ($this->input->get('alt')) {
			case 'addberhasil':
				$alert = "<div class='alert alert-success' role='alert'>Penambahan tutorial baru berhasil!</div>";
				break;
			case 'addgagal':
				$alert = "<div class='alert alert-danger' role='alert'>Penambahan tutorial baru gagal!</div>";
				break;
			case 'ubahberhasil':
				$alert = "<div class='alert alert-success' role='alert'>Proses pengubahan data tutorial berhasil!</div>";
				break;
			case 'ubahgagal':
				$alert = "<div class='alert alert-danger' role='alert'>Maaf, proses pengubahan data tutorial gagal!</div>";
				break;
			case 'delberhasil':
				$alert = "<div class='alert alert-success' role='alert'>Proses penghapusan data tutorial berhasil!</div>";
				break;
			case 'delgagal':
				$alert = "<div class='alert alert-danger' role='alert'>Maaf, proses penghapusan data tutorial gagal!</div>";
				break;
			default:
				$alert = null;
				break;
		}

		// paging list of tutorials
		$paging_config['base_url'] = site_url('banktuts/');
		$paging_config['total_rows'] = $this->bankmod->count();
		$paging_config['per_page'] = 10;
		
		// desain pagination
		$paging_config['full_tag_open'] = '<ul class="pagination">';
		$paging_config['first_link'] = 'First';
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

		$data['table_link'] = $this->pagination->create_links();
		$data['dt'] = $this->bankmod->get_list($paging_config['per_page'], $page);
		$data['kat'] = $this->catmod->get_cat();
		$data[$var] = $this->bankmod->get_tutncat($no);
		$data['list_u'] = $li_user;
		$data['alert'] = $alert;
		$this->tampilan->view($this->stat,'admin/bank_view', $data);
	}

	function ubah()
	{
		// id_tut name_tut id_cat desc_tut pdf video keys point
		$ubah['id_tut'] = $this->input->post('ubno');
		$ubah['name_tut'] = $this->input->post('ubname');
		$ubah['id_cat'] = $this->input->post('nocat');
		$ubah['desc_tut'] = $this->input->post('ubdesc');
		$ubah['pdf'] = $this->input->post('ubpdf');
		$ubah['video'] = $this->input->post('ubvideo');
		$ubah['keys'] = $this->input->post('ubkey');
		$ubah['point'] = $this->input->post('ubpoint');

		var_dump($ubah);
		$res = $this->bankmod->ubah($ubah);
		if ($res) {
			redirect(site_url('banktuts/?alt=ubahberhasil'));
		} else {
			redirect(site_url('banktuts/?alt=ubahgagal'));
		}

	}

	function do_tambah()
	{
		$newdt['name_tut'] = $this->input->post('tbnametut');
		$newdt['id_cat'] = $this->catmod->getid_byname($this->input->post('tbcat'));
		$newdt['desc_tut'] = $this->input->post('tbdesc');
		$newdt['pdf'] = $this->input->post('tbpdf');
		$newdt['video'] = $this->input->post('tbvid');
		$newdt['keys'] = $this->input->post('tbkunci');
		$newdt['point'] = $this->input->post('tbpoint');

		if ($newdt['id_cat']) {
			$res = $this->bankmod->tambah($newdt);
			if ($res) {
				redirect(site_url('banktuts/?alt=addberhasil'));
			} else {
				redirect(site_url('banktuts/?alt=addgagal'));
			}
		} else {
			redirect(site_url('banktuts/?alt=addgagal'));
		}
	}

	function hapus(){
		$res = $this->bankmod->hapus($this->input->get('id'));
		if ($res) {
			redirect(site_url('banktuts/?alt=delberhasil'));
		} else {
			redirect(site_url('banktuts/?alt=delgagal'));
		}
	}

}