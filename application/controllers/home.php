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
			$content = $this->tenlayer->section("home");
			$stories = $this->tenlayer->listing(["content_type"=>"story", "order_by"=>"start_date DESC"]);
			$content->stories = $stories->content;
			$this->load->view("home", $content);
		}
	}

/* End of file home.php */
/* Location: ./system/application/controllers/ */