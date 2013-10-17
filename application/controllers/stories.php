<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stories extends CI_Controller {

	public function index()
	{
		$api_key = $this->input->get("api_key");
		$stories = $this->tenlayer->listing(array("content_type"=>"story", "api_key"=>$api_key));
		$data["stories"]= $stories->content;
		$data["api_key"] = $api_key;
		$this->load->view("stories", $data);
	}

}

/* End of file stories.php */
/* Location: ./application/controllers/stories.php */