<?php
namespace strategy;

require_once 'QuickSort.php';
require_once 'MergeSort.php';

	interface Sorting {
	public function sort () 
	}
}

	function sort(Array & $data){
	if (count ($data) > 20){
		$tempData = new QuickSort($data);
	}
	else{
		$tempData = new MergeSort($data);
	}
}

$data = array(3,44,34,455,576,5554,434,434);
sort(data);
?>

	