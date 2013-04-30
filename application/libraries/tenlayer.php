<?php
/**
 * 10Layer class.
 * 
 * Grabs data from a 10Layer API
 * Author: JNY
 * First created: 26 November 2012
 *
 */
class TenLayer {
	public $apiurl="";
	protected $ci;
	
	public function __construct() {
		$this->ci=&get_instance();
		$this->apiurl = $this->ci->config->item("apiurl");
		$this->apiurl = rtrim($this->apiurl, "/")."/"; //Enforce trailing slash
	}
	
	public function get($id) {
		try {
			$result=json_decode(file_get_contents($this->apiurl."content/get?id=$id"));
			if (empty($result)) {
				return false;
			}
		} catch(Exception $e) {
			return false;
		}
		if ($result->error) {
			return false;
		}
		return $result->content;
	}
	
	public function listing($config) {
		if (!is_array($config)) {
			show_error("config should be an array");
		}
		try {
			$result=json_decode(file_get_contents($this->apiurl."content/listing?".http_build_query($config)));
			if (empty($result)) {
				return false;
			}
		} catch(Exception $e) {
			return false;
		}
		if ($result->error) {
			return false;
		}
		return $result;
	}
	
	public function section($section_name) {
		try {
			$result=json_decode(file_get_contents($this->apiurl."publish/section/$section_name"));
			if (empty($result)) {
				return false;
			}
		} catch(Exception $e) {
			return false;
		}
		if ($result->error) {
			return false;
		}
		return $result->content->zones;
	}
	
	public function nid_to_url($nid) {
		$api_key = $this->ci->config->item("api_key");
		try {
			$result=json_decode(file_get_contents($this->apiurl."content/get?where_nid=$nid&api_key=$api_key"));
			if (empty($result)) {
				return false;
			}
		} catch(Exception $e) {
			return false;
		}
		if ($result->error) {
			return false;
		}
		if (empty($result->content)) {
			return false;
		}
		$url = "/{$result->content->content_type}/{$result->content->_id}";
		return $url;
	}
	
	public function random($content_type) {
		try {
			$result=json_decode(file_get_contents($this->apiurl."content/listing/?content_type=$content_type"));
			if (empty($result)) {
				return false;
			}
		} catch(Exception $e) {
			return false;
		}
		if ($result->error) {
			return false;
		}
		$items = $result->content;
		$rand = rand(0, sizeof($items)-1);
		return $items[$rand];
	}
}
?>