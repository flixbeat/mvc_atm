<?php
	require_once("model/Model.php");
	class Controller{
		public $model;
		public function __construct(){
			$this->model = new Model();
		}
		public function init(){
			if(isset($_POST['btnLogin'])){
				$uname = $_POST['uname'];
				$pin = $_POST['pin'];
				$account = $this->model->loginAccount($uname,$pin);
				if(is_numeric($account))
					echo "Login Failed";
				else
					include("view/transact.php");
			}
			else if(isset($_POST['btnWithdraw'])){
				$amount = $_POST['tbWithAmount'];
				$newBalance = $this->model->withdraw($amount);
				$message;
				if($newBalance==-1)
					$message = "You are withdrawing more than you have in your account.";
				else
					$message = "You withdraw $amount from your account.<br/>Your new balance is now $newBalance";
				include("view/message.php");
			}
			else if(isset($_POST['btnDeposit'])){
				$amount = $_POST['tbDepAmount'];
				$newBalance = $this->model->deposit($amount);
				$message = "You deposit $amount to your account.<br/>Your new balance is now $newBalance";
				include("view/message.php");
			}
			else if(isset($_POST['btnCheckBalance'])){
				$balance = $this->model->checkBalance();
				$message = "Your current balance is $balance.";
				include("view/message.php");
			}
			else{
				if(isset($_SESSION['account']))
					include("view/transact.php");
				else
					require("view/login.php");
			}
		}
	}
?>