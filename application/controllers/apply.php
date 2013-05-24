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
				
				$config['upload_path'] = "./content/".date("Y")."/".date("m")."/".date("d")."/";
				if (!is_dir($config['upload_path'])) {
					mkdir($config["upload_path"], 0755, true);
				}
				$config['allowed_types'] = 'doc|docx|pdf|jpg|png';
				$config['encrypt_name'] = true;
				$this->load->library('upload', $config);
				foreach($_FILES as $key=>$file) {
					if ($this->upload->do_upload($key)) {
						$upload_data = $this->upload->data();
						$fields[$key] = "/content/".date("Y")."/".date("m")."/".date("d")."/".$upload_data["file_name"];
					} else {
						$errors = $this->upload->display_errors();
						//print_r($errors);
					}	
				}
				foreach(array_keys($fields) as $key) {
					$data["form"]->{$key}->value = $this->input->post($key);
				}
				//print_r($fields);
				$url = $this->config->item("apiurl")."content/save?content_type=submission&api_key=6a07db80feac1dbb8127ee5ac72bcfb5";
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, $this->input->user_agent());
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
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