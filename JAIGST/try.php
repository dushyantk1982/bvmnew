<?php error_reporting(1); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
Opening Quantity<input type="text" name="op_stk" /><br />
Old Billed Quantity<input type="text" name="old_bill_qty" /><br />
New Billed Quantity<input type="text" name="qty" /><br />
<input type="submit" name="submit" value="ok" />
</form>
<?php 
	extract($_POST);
	//if($old_bill_qty<$qty)
	//{
		echo "<br />OP".$op_stk;
		$op_stk=($op_stk+$old_bill_qty)-$qty;
	echo "<br />Old Qty".$old_bill_qty;
	echo "<br />New Qty".$qty;
	echo "<br />New Stk".$op_stk;
	//}
?>
</body>
</html>