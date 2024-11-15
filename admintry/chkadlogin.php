<?php 
	
	$pwd=$_POST['pwd'];
	$fileno=$_POST['fileno'];
	
	if($fileno=='BVMCollege' && $pwd=='admin@bvm1')
	{
		header('location:adhome.php');
	}
	else if($fileno=='exam@bvm' && $pwd=='exam_bvm@123')
	{
		header('location:../exam/exhome.php');
	}
	else
	{
		header('location:adlogin.php?msg=error');
	}				 
?>