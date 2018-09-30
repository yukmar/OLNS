<?php
/**
 * 
 */
class Logsubmit_mod extends CI_Model
{
	protected $tbl = 'log_submit_keys';
	function __construct()
	{
		parent::__construct();
	}

	public function count_point($user)
	{
		$dt = $this->get_userlog($user);
		$count = 0;
		foreach ($dt as $ob => $prop) {
			$count = $count + $prop->point;
		}
		return $count;
	}

	public function check_user($dtuser)
	{
		$q = $this->db->get_where($this->tbl, array('username' => $dtuser['username'],
			'id_tut' => $dtuser['no']));
		return $q->num_rows();
	}

	public function get_userlog($iduser)
	{
		$this->db->select('*')->from($this->tbl)->join('bank_tuts', 'bank_tuts.id_tut = log_submit_keys.id_tut', 'left')->join('kategori_kejar', 'kategori_kejar.id_cat = bank_tuts.id_cat', 'left')->where('username', $iduser);
		$q = $this->db->get();
		return $q->result();
	}

	public function insert($dt)
	{
		$this->db->insert($this->tbl, $dt);
		return $this->db->affected_rows();
	}

	function count()
	{
		return $this->db->count_all($this->tbl);
	}

	function getuser_bytut($tut)
	{
		return $this->db->select('*')->from($this->tbl)->join('user', 'log_submit_keys.username = user.username', 'right')->where('id_tut', $tut)->get()->result();
	}

	function gettut_byuser($user)
	{
		return $this->db->select('*')->from('user')->join($this->tbl, 'log_submit_keys.username = user.username', 'right')->join('bank_tuts', 'log_submit_keys.id_tut = bank_tuts.id_tut ')->where('user.username', $user)->get()->result();
	}

	function recent_submit()
	{
		return $this->db->select('*')->from($this->tbl)->join('bank_tuts', 'bank_tuts.id_tut = log_submit_keys.id_tut')->join('user', 'user.username = log_submit_keys.username')->order_by('date_submit', 'DESC')->limit('3')->get()->result();
	}

	function average_point($user)
	{
		$val = array();
		foreach ($this->db->query("select kat.id_cat, log.username, count(log.username) totsub, count(bank.id_cat) totcat from bank_tuts bank left join kategori_kejar kat on bank.id_cat = kat.id_cat left join log_submit_keys log on bank.id_tut = log.id_tut and log.username = '".$user."' group by bank.id_cat")->result() as $key => $value) {
			$val[] = round((($value->totsub) / ($value->totcat)) * 100);
		}
		return $val;
	}
}