<?php
	
	/**
	* 给定一个数组和一个值，在原地删除与值相同的数字，返回新数组的长度。
	* 元素的顺序可以改变，并且对新的数组不会有影响。
	*/

	function removeElement($arr, $ele){

		if(!is_array($arr)){
			return false;
		}

		$count = count($arr);

		for ($i=0; $i < $count; $i++) { 
			
			if($arr[$i] == $ele){
				unset($arr[$i]);
			}
		}

		return $arr;
	}

	$arr = array(0,4,4,0,0,2,4,4);
	$result = removeElement($arr, 4);

	var_dump($result);
?>