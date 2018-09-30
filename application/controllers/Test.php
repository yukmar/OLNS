<?php
/**
 * 
 */
class Test extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		var_dump($this->submod->get_jumlog_cat('user3'));
	}
}