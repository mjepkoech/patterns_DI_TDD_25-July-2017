<?php
interface sorting {
	public function sort () 
}
class SortFast
private $data;

public function __construct(Array $data){
	$this->data = $data;
}
public function sort(){

}
class MergeSort{
	private $data;
	public function __construct(Array $data){
		$this->data = $data;
	}
	public function sort(){

	}
}
function sort(Array & $data){
	if (count ($data) > 20){
		$tempData = new SortFast($data);
	}
	else{
		$tempData = new MergeSort($data);
	}
}
$data = array(3,44,34,455,576,5554,434,434);
sort(data);
?>

	