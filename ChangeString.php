<?php
/**
* 
*/
class ChangeString 
{
	
	function build($data){
	
	 		$array = "abcdefghijklmnñopqrstuvwxyz";

 			/*$data = "**CaDÑ";*/

 			for ($i=0; $i < strlen($data); $i++) { 

 				if(ctype_upper($data[$i])){
 					$pos = strpos(strtoupper($array), $data[$i]); 
 					$validaMay = true;
 				}else{
 					$pos = strpos($array, $data[$i]); 
 					$validaMay = false;
 				}

 				if ($pos !== false) {
	 					if (($pos + 1) == strlen($array)) {
	 						$pos = -1;
	 					}
 						if($validaMay){
	 						$data[$i] = strtoupper($array[$pos + 1]);
 						}else{
		 					$data[$i] = $array[$pos + 1];
 						}
	 				}
 				
 			}
 			

 			return $data;

 	}
}


?>