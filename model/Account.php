<?php
	class Account{
		public $uname;
		public $pin;
		public $balance;
		public function __construct($uname,$pin,$balance){
			$this->uname = $uname;
			$this->pin = $pin;
			$this->balance = $balance;
		}
	}
?>