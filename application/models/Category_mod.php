<?php
/**
 * 
 */
class Category_mod extends CI_Model
{
	protected $tbl = 'kategori_kejar';
	function __construct()
	{
		parent::__construct();
	}

	function get_cat()
	{
		return $this->db->get($this->tbl)->result();
	}

	function count()
	{
		return $this->db->count_all($this->tbl);
	}

	function getid_byname($name)
	{
		$q = $this->db->get_where($this->tbl, array('name_cat' => $name));
		foreach ($q->result() as $key => $prop) {
			return $prop->id_cat;
		}
	}

	function select($id)
	{
		return $this->db->get_where($this->tbl, array('id_cat' => $id))->result();
	}

	function get_counttuts() {
		return $this->db->query('select kat.id_cat, bank.name_tut, kat.name_cat, count(bank.id_cat) as jumlah from bank_tuts bank right join kategori_kejar kat on bank.id_cat = kat.id_cat group by bank.id_cat order by kat.id_cat asc')->result();
	}

	function tambah($newdt)
	{
		$this->db->insert($this->tbl, $newdt);
		return $this->db->affected_rows();
	}

	function ubah($ubahdt)
	{
		$this->db->update($this->tbl, $ubahdt, array('id_cat' => $ubahdt['id_cat']));
		return $this->db->affected_rows();
	}

	function delete($id)
	{
		$this->db->delete($this->tbl, array('id_cat' => $id));
		return $this->db->affected_rows();
	}
}