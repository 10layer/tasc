<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * News class
 * 
 * @extends Controller
 */
class News extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$content = $this->tenlayer->section("news");
		$this->load->view("news", $content);
	}

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */