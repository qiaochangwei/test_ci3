<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');


	}

	public function  some_things(){

		$this->load->view('some_things');
	}


	function extend_1($file_name)
	{
		$retval = "";
		$pt = strrpos($file_name, ".");
		if ($pt) $retval = substr($file_name, $pt + 1, strlen($file_name) - $pt);
		return ($retval);
	}


	//方法二.代码如下:

	function extend_2($file_name)
	{
		$extend = pathinfo($file_name);
		$extend = strtolower($extend ["extension"]);
		return $extend;
	}

	//方法三 .代码如下:

	function extend_3($file_name)
	{
		$extend = explode(".", $file_name);
		$va = count($extend) - 1;
		return $extend [$va];
	}

	//方法四.代码如下:

	function getFileExt($file_name)
	{
		while ($dot = strpos($file_name, ".")) {
			$file_name = substr($file_name, $dot + 1);
		}
		return $file_name;
	}


	function test_javascript(){


		$this->load->view('test_script');

	}



}
