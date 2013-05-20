<?php
	/**
	 * Timeline class
	 * 
	 * @extends Controller
	 */
	class Timeline extends CI_Controller {

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
			if ($urlid == "feed") {
				$this->feed($this->uri->segment(3));
				return true;
			}
			if ($urlid != "all") {
				$data["item"]=$this->tenlayer->get($urlid);
				if (empty($data["item"])) {
					show_404();
				}
			} else {
				$data["item"] = $urlid;
			}
			$data["urlid"] = $urlid;
			$this->load->view("content/timeline", $data);
		}
		
		public function feed($urlid) {
			$tl=$this->tenlayer->get($urlid);
			$timeline = new stdClass();
			if ($urlid != "all") {
				$zones=$this->tenlayer->section($urlid);
				$data = array();
				foreach($zones as $zone) {
					$data = array_merge($data, $zone);
				}
				$timeline->headline = $tl->title;
			} else {
				$data = $this->tenlayer->listing(array("content_type"=>"event"))->content;
				$timeline->headline = "All Events";
			}
			
			
			
			$timeline->type = "default";
			// $timeline->text = $tl->blurb;
			//$start_date = (Int) $tl->start_date;
			//$timeline->startDate = date("Y,m,d", $start_date);
			if (!empty($tl->mainpic)) {
				$timeline->asset=new stdClass();
				$timeline->asset->media = photo($tl->mainpic, 300, 200);
			}
			$timeline->date=array();
			
			foreach($data as $item) {
				$obj = new stdClass();
				$start_date = (Int) $item->start_date;
				$end_date = (Int) $item->end_date;
				$obj->startDate = date("Y,m,d", $start_date);
				$obj->endDate = date("Y,m,d", $end_date);
				$obj->headline = $item->title;
				if (isset($item->blurb)) {
					$body = $item->blurb;
				} elseif (isset($item->body)) {
					$body = $item->body;
				} else {
					$body = "";
				}
				$obj->text = $body;
				$media = false;
				if ($item->content_type == "video") {
					$media = $item->url;
				}
				if (($item->content_type == "page") || ($item->content_type == "article") || ($item->content_type == "inthepress")) {
					$obj->text.=" <a href='".base_url().$item->content_type."/".$item->_id."'>Read more</a>";
				}
				if (isset($item->mainpic) && !(empty($item->mainpic))) {
					$media = photo($item->mainpic, 300, 200);
				} 
				if (!empty($media)) {
					$obj->asset=new stdClass();
					$obj->asset->media = $media;
				}
				$timeline->date[]=$obj;
			}
			print json_encode(array("timeline"=>$timeline));
		}
	}

/* End of file timeline.php */
/* Location: ./system/application/controllers/ */