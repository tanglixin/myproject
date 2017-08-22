<?php
namespace core\lib;
class route{

    public $c;
    public $a;

	public function __construct(){

		var_dump($_SERVER);
		$this->c = $_REQUEST['c'];
		$this->a = $_REQUEST['a'];
		echo "route类";
	}


	// public function test(){
	// 	echo 111111;
	// }
}