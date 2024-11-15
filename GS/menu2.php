<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>

<body>
<div class="menu2"><a href="#" title="Employee Section Details"><img src="images/esd.jpg" height="35" width="60" /></a></div>
<div class="menu2"><a href="#" title="Email"><img src="images/mail.jpg" height="35" width="60" /></a></div>
<div class="menu2"><a href="#" title="Expenses Section"><img src="images/es.jpg" height="35" width="60" /></a></div>
<div class="menu2"><a href="#" title="Bnking Section"><img src="images/BS.jpg" height="35" width="60" /></a></div>
<div class="menu2"><a href="#" title="Calling Detail"><img src="images/CD.jpg" height="35" width="60" /></a></div>
<div class="menu2"><a href="#" title="Contact Details Section"><img src="images/CDS.jpg" height="35" width="60" /></a></div>
<div class="menu2"><a href="#" title="Telephone/Contact Directory"><img src="images/dir.jpg" height="35" width="60" /></a></div>
<div class="menu2"><a href="#" title="Change Password"><img src="images/chpwd.jpg" height="35" width="60" /></a></div>
<div class="name" style="color:#FF0000;">Welcom</div><div class="name" style="color:#FF0000;"><?php echo $_SESSION['user']; ?></div>
<div class="menu2"><input type="button" name="clrbal" value="Clear Balance" />
</body>
</html>
