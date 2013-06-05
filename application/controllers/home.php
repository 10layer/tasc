<?php
	/**
	 * Home class
	 * 
	 * @extends Controller
	 */
	class Home extends CI_Controller {

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
			$content = $this->tenlayer->section("home-french");
			$this->load->view("home", $content);
		}
	}

/* End of file home.php */
/* Location: ./system/application/controllers/ */