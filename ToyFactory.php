<?php
	

	/**
	* 工厂模式是一种常见的设计模式。请实现一个玩具工厂 ToyFactory 用来产生不同的玩具类。可以假设只有猫和狗两种玩具。
	*/

	interface toy{
		public function  talk();
	}
	
	class cat implements toy{

		public function talk(){
			echo 'cat';
		}
	}

	class dog implements toy{
		public function talk(){
			echo 'dog';
		}
	}

	class ToyFactory{

		private $class;

		public function __construct($type){

			$this->class = new $type();
			$this->class -> talk();
		}
	}

	new ToyFactory('cat');
?>