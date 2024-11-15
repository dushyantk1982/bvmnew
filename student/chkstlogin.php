<?php 
	
	$pwd=$_POST['pwd'];
	$fileno=$_POST['fileno'];
	
	//include('dblocal.php');					 
	//include('dbcon.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	$col=mysql_query("select * from student_reg where file_no=".$fileno." and pwd='".$pwd."'",$conn);
	if($row=mysql_fetch_array($col,MYSQL_ASSOC))
	{
		header('location:sthome.php?fileno='.$fileno);
	}
	else
	{
		header('location:stlogin.php?msg=error');
	}
						 
?>
						 
						 
