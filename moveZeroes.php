<?php
	
	/**
	* 给一个数组 nums 写一个函数将 0 移动到数组的最后面，非零元素保持原数组的顺序
	*/
	function moveZeroes($arr){

		if(!is_array($arr)){
			return false;
		}

		$count =  count($arr);

		for ($i=0; $i < $count; $i++) { 
			
			if($arr[$i] == 0){
				array_push($arr,0);
				unset($arr[$i]);
			}
		}

		return $arr;
	}

	$list =  array(0, 1, 0, 3, 12);
	$a = moveZeroes($list);
	$a = array_values($a);
	var_dump($a);
?>