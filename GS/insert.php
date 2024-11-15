<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>General Insurance Services</title>
<link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
	<div class="head">
		<div class="layer" align="center">
			<img src="images/Q.png" height="80" width="728" />
		</div>
		<div class="layer1">
			<?php include('adm_menu.php'); ?>
		</div>
		<!--<div class="layer2">
			<?php //include('menu2.php'); ?>
		</div>-->
	</div>
	<div class="container">
		<div class="left"></div>
		<div class="content">
		<a href="payment_to_HB.php" target="account" id="1"></a>
		<a href="pay_frm_retailer.php" target="account" id="2"></a>
		<?php
		if(@$_REQUEST['id']==1){
		?>
		<iframe height="700" width="100%" src="retailform.php" name="account"></iframe>
		<!--<iframe align="middle" height="400" width="400" src="payment_to_HB.php" name="account">-->
		<?php }
		else if(@$_REQUEST['id']==2){
		?>
		<iframe height="700" width="100%" src="distributorform.php" name="account"></iframe>
		<?php
		}
		else if(@$_REQUEST['id']==3){
		?> 
		<iframe height="700" width="100%" src="superdistributorform.php" name="account"></iframe>
		<?php }?>
		</div>
		<div class="right"></div>
	</div>
	<div class="footer">
		<div class="footer1"><center>&copy; Developed by Demotic Technologies</center><!--<a href="#">Developed By:</a>--></div>
		<!--<div class="footer2"></div>-->
	</div>
</div>
</body>
</html>
