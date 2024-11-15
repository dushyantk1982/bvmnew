<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>
</head>

<body>
<?php
$user=$_GET['user'];
$pwd=$_GET['password'];

include('dbcon.php');
$res=mysql_query("select * from retailer_reg where retailer_code='".$user."'",$conn);
while($r=mysql_fetch_array($res))
{
	$userpwd=$r['password'];
	$userid=$r['retailer_code'];
}
if(strcmp($user,$userid)==0 && strcmp($pwd,$userpwd)==0)
{
	header('location:index1.php');
}
else
{
header('location:index.php');
}

?>
</body>
</html>
