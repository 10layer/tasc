<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ShortUrl {
	private $ci;
	public $google_url = "https://www.googleapis.com/urlshortener/v1/url";
	public $api_key = "AIzaSyCMzyYacUZeW2O7NvnqRSdDqmbOoiinRIM";
	
	public function __construct() {
		$this->ci = &get_instance();
		$this->ci->load->library("mongo_db");
		$this->api_url = $this->google_url."?key=".$this->api_key;
	}
	
	public function url($url) {
		$query=$this->ci->mongo_db->get_where("shorturls", array("url"=>$url));
		if ($query->num_rows() == 0) {
			$shorturl = $this->_gen_url($url);
			$this->ci->mongo_db->insert("shorturls", array(
				"url"=>$url,
				"shorturl"=>$shorturl
			));
		} else {
			$shorturl = $query->row()->shorturl;
		}
		return $shorturl;
	}
	
	private function _gen_url($url) {
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$this->google_url);
		curl_setopt($ch,CURLOPT_POST,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode(array("longUrl"=>$url)));
		curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-Type: application/json"));
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$chresult = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($chresult,true);
		return $result["id"];
	}
}