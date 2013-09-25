<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Gallery class
 * 
 * @extends Controller
 */
 
class Gallery extends CI_Controller {
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
		$section = $this->tenlayer->section("photo-gallery");

		$data["content"] = $section->photos;
		$this->load->view("content/gallery", $data);
	}

}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */