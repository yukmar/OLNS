<?php
/**
 * 
 */
class Latihan extends CI_Controller
{
	protected $data = null;
	protected $selected_tut = null;
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			$this->session->sess_destroy();
			redirect(site_url());
		}
	}

	public function index()
	{
		$this->selected_tut = $this->input->get('sel');
		$hasil = $this->input->get('res');
		$this->data = $this->bankmod->get_tuts($this->selected_tut);
		$button_status = null;
		$addalert = null;
		if (!empty($hasil)) {
			if ($hasil == 'true') {
				$addalert = "
				<div class='alert alert-success' role='alert'>Selamat! Kunci Benar!</div>
				";
			} else {
				$addalert = "
				<div class='alert alert-danger' role='alert'>Maaf, kunci yang dimasukan salah. Jangan putus asa!</div>
				";
			}
		}
		foreach ($this->data as $ob => $prop) {
			if ($this->submod->check_user(array('username' => $this->session->userdata('user'),
				'no' => $prop->id_tut))) {
				$button_status = "disabled";
			} else {
				$button_status = null;
			}
			$this->tampilan->view('user','dashboard/exercise_view', array(
				'no' => $prop->id_tut,
				'title' => $prop->name_tut,
				'desc' => $prop->desc_tut,
				'pdf' => $prop->pdf,
				'vid' => $prop->video,
				'point' => $prop->point,
				'bs' => $button_status,
				'alert' => $addalert
			));
		}
	// 	var_dump($this->data);
	}

	public function submit_key()
	{
		$dtuser['username'] = $this->session->userdata('user');
		$dtuser['no'] = $this->input->get('no');
		$dtuser['newkey'] = $this->input->get('tbkey');
		if (!$this->submod->check_user($dtuser)) {
			if ($this->bankmod->check_key($dtuser)) {
				$this->submod->insert(array('username' => $dtuser['username'], 'id_tut' => $dtuser['no']));
				redirect(site_url('latihan/?sel='.$dtuser['no']."&res=true"));
			} else {
				redirect(site_url('latihan/?sel='.$dtuser['no']."&res=false"));
			}
		}
	}
}