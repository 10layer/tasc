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

	public function _remap() {
		$api_key = $this->input->get("api_key");
		$section_tag = $this->uri->segment(2);
		switch ($section_tag) {
		 	case 'diseases':
		 		$section_url = "2013-07-02-diseases-prevention-and-treatment";
		 		break;
		 	case 'business':
		 		$section_url = "2013-07-02-business-and-technology";
		 		break;
		 	case 'agriculture':
		 		$section_url = "2013-07-02-agriculture-and-food-security";
		 		break;
		 	default:
		 		$section_url = "2013-07-02-business-and-technology";
		 		break;
		}
		$data["section"] = $this->tenlayer->get($section_url);
		$stories = $this->tenlayer->listing(array("content_type"=>"story", "api_key"=>$api_key))->content;
		$selected_stories = array();
		for($x = 0; $x < sizeof($stories); $x++) {
			if (!empty($stories[$x]->competition) && ($stories[$x]->competition == $section_url)) {
				$selected_stories[] = $stories[$x];
			}
		}
		$data["stories"]= $selected_stories;
		$data["api_key"] = $api_key;
		$this->load->view("stories", $data);
	}

}

/* End of file stories.php */
/* Location: ./application/controllers/stories.php */