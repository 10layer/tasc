<?php
	/**
	 * Content class
	 * 
	 * @extends Controller
	 */
	class Content extends CI_Controller {

		/**
		 * __construct function.
		 * 
		 * @access public
		 * @return void
		 */
		public function __construct() {
			parent::__construct();
		}
		
		public function _remap() {
			$urlid=$this->uri->segment(2);
			$data["content"]=$this->tenlayer->get($urlid);
			if (empty($data["content"])) {
				show_404();
			}
			$content_type=$data["content"]->content_type;
			//$this->load->library("shorturl");
			//$url = base_url().$this->uri->uri_string()."?ref=shorturl";
			//$data["shorturl"] = $this->shorturl->url($url);
			$this->load->view("content/$content_type", $data);
		}
	}

/* End of file Content.php */
/* Location: ./system/application/controllers/ */