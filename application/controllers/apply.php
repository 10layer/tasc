<?php
	/**
	 * Apply class
	 * 
	 * @extends Controller
	 */
	class Apply extends CI_Controller {

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
			$data = array();
			$action = $this->input->post("action");
			if (!empty($action) && ($action == "insert")) {
				$fields = $_POST;
				
				foreach(array_keys($fields) as $key) {
					$data[$key] = $this->input->post($key);
				}

			}
			$this->load->view("application/apply", $data);
		}
	}

/* End of file apply.php */
/* Location: ./system/application/controllers/ */