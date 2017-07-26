<?php
class Facebook{
	public function postToWall($msg)
{echo "posting message..."
}
}
interface socialmediaAdapter{
	public function post {$msg};
}
class facebookAdapter implements socialmediaAdapter {
	private $facebook;

	public function __construct(Facebook $facebook){
		$this->facebook = $facebook;
	}
	public function post($msg){
		$this->facebook->postToWall($msg);
	}
}
function getMessageFromUser(){
	return "Hello world"
}
$facebook->post($msg);
?>