<?php
/**
 * 
 */
class Tampilan
{
	function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Category_mod', 'catmod');
	}

	function view($stat,$halaman, $data=null)
	{
		if ($stat == 'admin') {
			$this->CI->load->view('header_view', array('stat' => 1));
			$this->CI->load->view($halaman, $data);
			$this->CI->load->view('footer_view');
		} else {
			$this->CI->load->view('header_view', array('stat' => 2, 'menu' => $this->CI->catmod->get_cat()));
			$this->CI->load->view($halaman, $data);
			$this->CI->load->view('footer_view');
		}
	}
}