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
			$submissions_form = $this->tenlayer->describe("submission");
			$data["form"] = $submissions_form;
			$action = $this->input->post("action");
			if (!empty($action) && ($action == "insert")) {
				$fields = $_POST;
				
				foreach(array_keys($fields) as $key) {
					$data["form"]->{$key}->value = $this->input->post($key);
				}

				$url = $this->config->item("apiurl")."content/save?content_type=submission&api_key=6a07db80feac1dbb8127ee5ac72bcfb5";
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, $this->input->user_agent());
				curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$jsreturn = curl_exec($ch);
				curl_close($ch);
				$result = json_decode($jsreturn);
				if (!$result->error) {
					$this->load->view("application/thanks", $data);
					return true;
				}
				$data["errormsg"] = $result->msg;
				$data["errorinfo"] = $result->info;
			}
			$this->load->view("application/apply", $data);
		}
	}

/* End of file apply.php */
/* Location: ./system/application/controllers/ */