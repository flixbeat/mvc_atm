<?php
	session_start();
	require_once("model/Account.php");
	class Model{
		private $con;
		public function __construct(){
			$this->con = new mysqli("localhost","root","usbw","db_atm") or die($con->error());
		}
		
		public function loginAccount($uname,$pin){
			$query = $this->con->query("SELECT * FROM tbl_account WHERE usr_name = '$uname' AND usr_pin = '$pin'");
			if($query->num_rows==1){
				$row = $query->fetch_assoc();
				$account = new Account($row['usr_name'],$row['usr_pin'],$row['usr_balance']);
				$_SESSION['account'] = serialize($account);
				return $account;
			}
			else return 0;
		}
		
		public function withdraw($amount){
			$account = unserialize($_SESSION['account']);
			$query = $this->con->query("SELECT usr_balance FROM tbl_account WHERE usr_name = '$account->uname' AND usr_pin = $account->pin");
			$row = $query->fetch_row();
			$curBalance = $row[0];
			$remain = $curBalance - $amount;
			if($remain>0){
				$query = $this->con->query("UPDATE tbl_account SET usr_balance = $remain WHERE usr_name = '$account->uname'");
				return $remain;
			}
			else return -1;
		}
		
		public function deposit($amount){
			$account = unserialize($_SESSION['account']);
			$query = $this->con->query("SELECT usr_balance FROM tbl_account WHERE usr_name = '$account->uname' AND usr_pin = $account->pin");
			$row = $query->fetch_row();
			$curBalance = $row[0];
			$newBalance = $curBalance + $amount;
			$query = $this->con->query("UPDATE tbl_account SET usr_balance = $newBalance WHERE usr_name = '$account->uname'");
			return $newBalance;
		}
		
		public function checkBalance(){
			$account = unserialize($_SESSION['account']);
			$query = $this->con->query("SELECT usr_balance FROM tbl_account WHERE usr_name = '$account->uname' AND usr_pin = $account->pin");
			$row = $query->fetch_row();
			return $row[0];
		}
	}
?>