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
			$data = Array();
			$data["content_type"]="story";
			$data["order_by"]="start_date DESC";
			$stories = $this->tenlayer->listing($data);
			$content = new stdClass;
			$content->stories = $stories->content;
			$this->load->view("home", $content);
		}
	}

/* End of file home.php */
/* Location: ./system/application/controllers/ */