<?php
/**
* 
*/
class ClearPar 
{
	
 	
 	function build($data){
 		/*$data =")())()()";*/
 		$data2 = '';
 		for ($i=0; $i < strlen($data); $i++) { 
 			if ($data[$i] == '(' && $i < strlen($data)-1) {
 					if($data[$i +1] == ')'){
 						$data2 = $data2.'()';
 					}
 			}
 		}
 		return $data2;
 	} 





}
?>
