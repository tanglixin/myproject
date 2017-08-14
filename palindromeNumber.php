<?php
	
	/*
	* 判断回文数 
	* 判断一个正整数是不是回文数
	* 回文数的定义是，将这个数反转之后，得到的数仍然是同一个数
	*/
	function palindromeNumber($number){

		// 判断空
		if($number == "" || $number == null){
			return false;
		}

		// 获取字符串长度
		$len = mb_strlen($number, "utf-8");

		if ($len == 1) {
			return true;
		}

		if($len == 2){

			if (mb_substr($number,0,1,"utf-8") == mb_substr($number,-1,1,"utf-8")) {
				return true;
			}else{
				return false;
			}
			
		}


		if ($len > 2) {

			if ($len%2 != 1) {
				return false;
			}
			
		    $str_pre  = mb_substr($number, 0, floor($len/2), "utf-8");
		    $strs = "";
		    for($i=mb_strlen($str_pre,"utf-8") - 1; $i>=0; $i--){
		    	
		    	$strs .= mb_substr($str_pre,-$i,1,"utf-8");

		    }
		    
			$str_next = mb_substr($number, floor($len/2)+1, floor($len/2), "utf-8");
			
			if($strs == $str_next){
				return true;
			}else{
				return false;
			}

		}

	

	}

	$nums = "试测4测试";
	$status = palindromeNumber($nums);
	var_dump($status);
?>