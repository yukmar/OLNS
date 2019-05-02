<?php
/**
 * 
 */
class Test extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
	}
	public function index()
	{
		$a = 'ini encrypt';
		$k = $this->encryption->encrypt($a);
		echo $k."<br />";
		echo $this->encryption->encrypt($a, SALT)."<br />";
		// SALT berada di constants
		echo $this->encryption->decrypt($k)."<br />";
	}
}