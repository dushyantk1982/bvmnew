<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>
</head>

<body>
<?php
$user=$_POST['user'];
$pwd=$_POST['password'];

if(strcmp($user,'admin')==0 && strcmp($pwd,'admin@123')==0)
{
// $_SESSION['user']=$user;
header("location: admin.php");
exit();
}
// else
// {
// header("location:index.php");
// exit();
// }

?>
</body>
</html>
