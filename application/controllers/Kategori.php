<?php
/**
 * 
 */
class Kategori extends CI_Controller
{
	protected $user_priv;
	protected $user;
	function __construct()
	{		
		parent::__construct();
		if (!$this->session->userdata('user')) {
			$this->session->sess_destroy();
			redirect(site_url());
		} else {
			$this->user = $this->session->userdata('user');
			$this->user_priv = $this->usermod->get_upriv($this->user);
		}
	}

	public function index()
	{
		if ($this->user_priv == 'user') {
			$cat_selected = $this->input->get('c');
			$tuts = $this->bankmod->list_tuts($cat_selected, $this->user);
			foreach ($this->catmod->get_cat() as $ob => $prop) {
				if ($prop->id_cat == $cat_selected) {
					$this->tampilan->view($this->user_priv, 'dashboard/category_view', 
						array(
							'cat_name' => $prop->name_cat,
							'desc' => $prop->desc_cat,
							'list_tut' => $tuts
						));
				}
			}
		} elseif ($this->user_priv == 'admin') {
			$alert = null;
			$var = null;
			$q = null;
			$aksi = $this->input->get('aksi');
			if ($aksi == 'ubah') {
				$var = 'ubdt';
				$q = $this->catmod->select($this->input->get('no'));
			} elseif ($aksi == 'det') {
				$var = 'detdt';
				$q = $this->bankmod->list_tuts($this->input->get('no'));
			} else {
				$var = 'spec_cat';
				$q = $this->catmod->select($this->input->get('cat'));

			}
			$alt = $this->input->get('alt');
			if (!empty($alt)) {
				switch ($alt) {

				case 'addberhasil':
					$alert = "<div class='alert alert-success' role='alert'>Penambahan kategori baru berhasil!</div>";
					break;
				case 'addgagal':
					$alert = "<div class='alert alert-danger' role='alert'>Penambahan kategori baru gagal!</div>";
					break;
				case 'ubahberhasil':
					$alert = "<div class='alert alert-success' role='alert'>Proses pengubahan data kategori berhasil!</div>";
					break;
				case 'ubahgagal':
					$alert = "<div class='alert alert-danger' role='alert'>Maaf, proses pengubahan data kategori gagal!</div>";
					break;
				case 'hapusberhasil':
					$alert = "<div class='alert alert-success' role='alert'>Proses penghapusan data kategori berhasil!</div>";
					break;
				case 'hapusgagal':
					$alert = "<div class='alert alert-danger' role='alert'>Maaf, proses penghapusan data kategori gagal!</div>";
					break;
				default:
					$alert = null;
					break;
			}
			}
			$this->tampilan->view($this->user_priv,'admin/kategori_view', array(
				'cat_list' => $this->catmod->get_counttuts(),
				$var => $q,
				'alert' => $alert
			));
		}
	}

	function tambah()
	{
		if ($this->user_priv == 'admin') {
			$newdt['name_cat'] = $this->input->post('tbcat');
			$newdt['desc_cat'] = $this->input->post('tbdesc');
			$res = $this->catmod->tambah($newdt);
			if ($res) {
				redirect(site_url('kategori/?alt=addberhasil'));
			} else {
				redirect(site_url('kategori?/alt=addgagal'));
			}
		}
	}

	function ubah()
	{
		$ubdt['id_cat'] = $this->input->post('nocat');
		$ubdt['name_cat'] = $this->input->post('tbname');
		$ubdt['desc_cat'] = $this->input->post('tbdesc');
		$res = $this->catmod->ubah($ubdt);
		if ($res) {
			redirect(site_url('kategori/?alt=ubahberhasil'));
		} else {
			redirect(site_url('kategori/?alt=ubahgagal'));
		}
	}

	function hapus()
	{
		$res = $this->catmod->delete($this->input->get('cat'));
		if ($res) {
			redirect(site_url('kategori/?alt=hapusberhasil'));
		} else {
			redirect(site_url('kategori/?alt=hapusgagal'));
		}
	}
}