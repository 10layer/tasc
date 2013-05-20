<?php
	/**
	 * Howtoenter class
	 * 
	 * @extends Controller
	 */
	class Howtoenter extends CI_Controller {

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
			$this->load->view("content/how_to_enter");
		}
	}

/* End of file Howtoenter.php */
/* Location: ./system/application/controllers/ */