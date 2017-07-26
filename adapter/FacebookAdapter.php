<?php
namespace adapter;

require_once 'SocialmediaAdapter.php';
require_once 'Facebook.php';

	class FacebookAdapter implements SocialmediaAdapter {
	private $facebook;

	public function __construct(Facebook $facebook){
		$this->facebook = $facebook;
	}
	public function post($msg){
		$this->facebook->postToWall($msg);
	}
}
?>