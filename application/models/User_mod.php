<?php
/**
 * 
 */
class User_mod extends CI_Model
{
	protected $tbl;
	function __construct()
	{
		parent::__construct();
		$this->tbl = 'user';
	}

	function checkuser($data)
	{
		$q = $this->db->get_where($this->tbl, array
			('username' => $data['user'], 'password' => $data['pass']));
		return $q->num_rows();
	}

	function get_user($user)
	{
		return $this->db->get_where($this->tbl, array('username' => $user))->result();
	}

	function get_upriv($user){
		foreach ($this->get_user($user) as $ob => $prop) {
			$q = $this->db->get_where('privilege_lvl', array('id_priv' => $prop->id_priv));
			foreach ($q->result() as $key => $value) {
				return $value->nama_priv;
			}
		}
	}

	function get_all($order=null, $limit=null, $offset=null)
	{
		if (!$order) {
			$order = 'ASC';
		}
		if ($limit) {
			$limit = ' limit '.$limit;
		}
		if ($offset) {
			$offset = ', '.$offset;
		}
		return $this->db->query('select u.username, u.nama, priv.nama_priv, sum(bank.point) as jumlah, u.waktu_dibuat from user u left join log_submit_keys log on u.username = log.username left join privilege_lvl priv on u.id_priv = priv.id_priv left join bank_tuts bank on bank.id_tut = log.id_tut group by username order by waktu_dibuat '.$order.$limit.$offset)->result();
	}

	function get_bypriv($dt)
	{
		return $this->db->get_where($this->tbl, array('id_priv' => $dt))->result();
	}

	function get_usernpriv($user)
	{
		return $this->db->select('*')->from($this->tbl)->join('privilege_lvl', 'privilege_lvl.id_priv = user.id_priv', 'left')->where('username', $user)->get()->result();
	}

	function insert($newdt)
	{
		$this->db->insert($this->tbl, $newdt);
		return $this->db->affected_rows();
	}

	function ubah($ubahdt)
	{
		$this->db->update($this->tbl, $ubahdt, array('username' => $ubahdt['username']));
		return $this->db->affected_rows();
	}

	function delete($user)
	{
		$this->db->delete($this->tbl, array('username' => $user));
		return $this->db->affected_rows();
	}

	function count()
	{
		return $this->db->count_all($this->tbl);
	}

	function get_ranks($limit=null)
	{
		if ($limit) {
			$limit = 'limit '.$limit;
		}
		return $this->db->query('select u.username, u.nama, sum(bank.point) as total from user u right join log_submit_keys log on u.username = log.username left join bank_tuts bank on bank.id_tut = log.id_tut group by nama order by total DESC '.$limit)->result();
	}
}