<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<<?php include_once("templates/links.php"); ?>
</head>
<body>
	<?php include_once("templates/header.php"); ?>
	<?php include_once("templates/main_menu.php"); ?>
	<div class="maincontainer">
		
		<center><h1>Manage Account</h1></center>
		<center>
			<div style="width: 100%;height: 40px;">
				<button class="mk_payment_btn" data-toggle="modal" data-target="#exampleModal"><img src="img/mpesaIcon.png" width="50%" height="100%" style="border-radius: 10px;"><b>Make Payment</b></button>
			</div>
		</center>
			<div class="account_content">
				<label style="float:left,width:100%; margin-left: 5px;"><b>Account Type</b>
				</label>
				<span style="float: right;">Free</span><br>
				<label style="float: left,width:100%;"><b>Valid Until</b></label>
				<span style="float: right;">Unlimited</span><br>
				<center><button class="fas fa-history pay_log_btn" id="pay_log_btn">&nbsp;Payment logs</button></center>
				<div class="pay_log hideme" id="pay_log">
					<table>
					<thead>
						<tr>
							<th>Ref. No</th>
							<th>Amount</th>
							<th>Date</th>
							<th>Expiry</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>####</td>
							<td>6700</td>
							<td><?php echo date("Y-m-d"); ?></td>
							<td><?php echo date("Y-m-d"); ?></td>
						</tr>
					</tbody>
					</table>
				</div>
			</div>
		
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#pay_log_btn").click(function(event){
			event.preventDefault();
			$("#pay_log").stop();
			$("#pay_log").slideToggle(300);
		});
	});
</script>
<?php include_once("modals/payment.php"); ?>

</body>
<?php include_once("templates/footer.php"); ?>
</html>