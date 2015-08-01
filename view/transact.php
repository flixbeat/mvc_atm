<html>
	<head>
		<script src = "lib/jquery-1.11.3.min.js"></script>
		<style type = "text/css">
			body{
				background-color: rgb(200,200,200);
			}
			#wrapper{
				text-align: center;
				margin: auto;
				padding: 10px;
				width: 300px;
				height: 300px;
				border-radius: 15px;
				background-color: white;
			}
			#logout{
				display: inline-block;
				margin-top: 90px;
			}
		</style>
		<script>
			$(document).ready(function(){
				$("#btnToggleWithdraw").click(function(){
					$("#pnl_withdraw").fadeIn();
					$("#pnl_deposit").hide();
				});
				$("#btnToggleDeposit").click(function(){
					$("#pnl_withdraw").hide();
					$("#pnl_deposit").fadeIn();
				});
			});
		</script>
	</head>
	<body>
		<div id = "wrapper">
			<div>
				<h3>Automated Teller Machine</h3>
				<button id = "btnToggleWithdraw">Withdraw</button>
				<button id = "btnToggleDeposit">Deposit</button>
				<form action = "index.php" method = "post" style = "display: inline;">
					<button name = "btnCheckBalance">Check Balance</button>
				</form>
			</div>
			<div id = "pnl_withdraw" style = "display:none;">
				<fieldset>
					<legend>Withdraw</legend>
					<form action = "index.php" method = "post">
						<label>Enter Amount: </label>
						<input type = "text" name = "tbWithAmount">
						<button name = "btnWithdraw">Withdraw</button>
					</form>
				</fieldset>
			</div>
			<div id = "pnl_deposit" style = "display:none;">
				<fieldset>
					<legend>Deposit</legend>
					<form action = "index.php" method = "post">
						<label>Enter Amount: </label>
						<input type = "text" name = "tbDepAmount">
						<button name = "btnDeposit">Deposit</button>
					</form>
				</fieldset>
			</div>
			<a id = "logout" href = "view/logout.php">Logout</a>
		</div>
	</body>
</html>