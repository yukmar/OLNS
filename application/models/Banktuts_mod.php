<?php
/**
 * 
 */
class Banktuts_mod extends CI_Model
{
	protected $tbl = 'bank_tuts';
	function __construct()
	{
		parent::__construct();
	}

	public function list_tuts($idcat, $user=null)
	{
		if ($user) {
			$user = " and log.username = '".$user."' order by id_cat DESC";
		}
		return $this->db->query("select bank.id_tut, bank.name_tut, bank.point, kat.id_cat, kat.name_cat, log.username from bank_tuts bank inner join kategori_kejar kat on kat.id_cat = bank.id_cat and kat.id_cat = '".$idcat."' left join log_submit_keys log on bank.id_tut = log.id_tut".$user)->result();
	}

	function list_percat($cat)
	{
		return $this->db->get_where($this->tbl, array('id_cat' => $cat))->result();
	}
	public function get_tuts($idtut)
	{
		return $this->db->get_where($this->tbl, array('id_tut' => $idtut))->result();
	}		

	public function check_key($dtkey)
	{
		return $this->db->get_where($this->tbl, array('id_tut' => $dtkey['no'],
			'keys' => $dtkey['newkey']))->num_rows();
	}

	public function get_all($kolom=null, $order=null, $limit=null, $start_at=null)
	{
		if (!$order) {
			$order = 'ASC';
		}
		if (!$kolom) {
			$kolom = 'name_cat';
		}
		if ($start_at) {
			$start_at = ', '.$start_at;
		}
		if ($limit) {
			$limit = ' limit '.$limit;
		}
		return $this->db->query('select bank.id_tut, bank.point, kat.id_cat, bank.name_tut, kat.name_cat, count(distinct(bank.id_tut)) as jumtut, count(log.id_tut) as jumsub from bank_tuts bank right join kategori_kejar kat on bank.id_cat = kat.id_cat left join log_submit_keys log on bank.id_tut = log.id_tut group by bank.id_cat order by '.$kolom.' '.$order.$limit.$start_at)->result();
	}

	function get_spec($idcat)
	{
		return $this->db->query('select bank.id_tut, bank.name_tut, bank.point, count(log.id_tut) as jumsub from bank_tuts bank left join log_submit_keys log on bank.id_tut = log.id_tut where bank.id_cat = '.$idcat.' group by id_tut')->result();
	}
	public function recent_tut()
	{
		return $this->db->query('select id_tut, name_tut, point from bank_tuts order by waktu_dibuat DESC limit 3')->result();
	}

	public function get_tutncat($idtut)
	{
		return $this->db->select('*')->from($this->tbl)->join('kategori_kejar', 'kategori_kejar.id_cat = bank_tuts.id_cat', 'left')->where('id_tut', $idtut)->get()->result();
	}

	function ubah($ubahdt)
	{
		$this->db->update($this->tbl, $ubahdt, array('id_tut' => $ubahdt['id_tut']));
		return $this->db->affected_rows();
	}

	function tambah($newdt)
	{
		$this->db->insert($this->tbl, $newdt);
		return $this->db->affected_rows();
	}

	function hapus($idtut)
	{
		$this->db->delete($this->tbl, array('id_tut' => $idtut));
		return $this->db->affected_rows();
	}

	function count()
	{
		return $this->db->count_all($this->tbl);
	}

	function get_list($limit=null, $offset=null)
	{
		if ($offset) {
			$offset = ', '.$offset;
		}
		return $this->db->query('select bank.id_tut, kat.id_cat, bank.name_tut, kat.name_cat, bank.point, count(log.id_tut) as jumsub from bank_tuts bank left join kategori_kejar kat on bank.id_cat = kat.id_cat left join log_submit_keys log on bank.id_tut = log.id_tut group by bank.id_tut limit '.$limit.$offset)->result();
	}

	function get_rekomentut($user)
	{
		$mostSubmit = $this->submod->average_point($user, 'DESC');
		$rekomentut = array();
		foreach ($mostSubmit as $key => $value) {
			$tuts_basedbycat = null;
			$tuts_basedbycat = $this->bankmod->list_tuts($key, $user);
			foreach ($tuts_basedbycat as $k => $val) {
				if (!$val->username) {
					$rekomentut[$val->id_cat] = (object)array(
						'id' => $val->id_tut,
						'tut' => $val->name_tut,
						'catno' => $val->id_cat,
						'cat' => $val->name_cat,
						'point' => $val->point
					);
					continue 2;
				}
			}
		}
		return $rekomentut;
	}
}