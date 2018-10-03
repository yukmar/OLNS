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
		// $user = 'user3';
		// $mostSubmit = $this->submod->average_point($user, 'DESC');
		// $rekomentut = array();
		// foreach ($mostSubmit as $key => $value) {
		// 	$tuts_basedbycat = null;
		// 	$tuts_basedbycat = $this->bankmod->list_tuts($key, $user);
		// 	foreach ($tuts_basedbycat as $k => $val) {
		// 		if (!$val->username) {
		// 			$rekomentut[$val->id_cat] = (object)array(
		// 				'id' => $val->id_tut,
		// 				'tut' => $val->name_tut,
		// 				'catno' => $val->id_cat,
		// 				'cat' => $val->name_cat,
		// 				'point' => $val->point
		// 			);
		// 			continue 2;
		// 		}
		// 	}
		// }

		// foreach ($rekomentut as $key => $value) {
		// 	echo "$value->catno $value->cat <br/>";
		// }

		var_dump($this->bankmod->get_rekomentut('user3'));
	}
}