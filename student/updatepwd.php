<?php 
	$fileno=$_POST['fileno'];
	$opwd=$_POST['opwd'];
	$npwd=$_POST['npwd'];
	//include('dbcon.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	$res=mysql_query("select * from student_reg where file_no='".$fileno."'",$conn);
		while($r=mysql_fetch_array($res))
		{
			$fno=$r['file_no'];
			$pwd=$r['pwd'];
		}
	
	if(strcmp($fileno,$fno==0) && strcmp($opwd,$pwd)==0)
	{
		$sql="update student_reg set pwd='{$npwd}' where file_no={$fileno}";
	
		$r=mysql_query($sql);
		header('location:stlogin.php?msg=success');
	}
	else
	{
		header('location:stlogin.php?msg=error');
	}
 
 ?>
