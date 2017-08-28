<?php
/**
* 
*/
class CompleteRange 
{
	function build($data = array()){
 		/*$data =[55, 58, 60];*/
 		$res = array();
 		for ($i=$data[0]; $i <= end($data); $i++) { 
 			array_push($res, $i);
 		}
 		return $res;
 	}
}

?>