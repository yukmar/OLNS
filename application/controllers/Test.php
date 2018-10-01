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
		var_dump($this->submod->average_point('user3'));
		foreach ($this->submod->average_point('user3', 'DESC') as $key => $value) {
			echo "<br /> $value->cat $value->avr";
		}
		echo "<br />";
		echo "<br />";
		echo "<br />";
		echo "string";
		foreach ($this->bankmod->get_rekomentut('user3') as $key => $value) {
			echo "$value->cat <br/>";
		}
	}
}