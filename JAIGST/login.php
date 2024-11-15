<?php
error_reporting(1);
session_start();
include("DAL/database.php");
extract($_POST);

/*Verify Users*/
/*$res_form=mysql_query("select max(form_no) from form_lookup",$cn);
while($row=mysql_fetch_row($res_form))
{ $old_form_no=$row['0'];}
$_SESSION['form']=$old_form_no;
$new_form_no=$old_form_no+1;
mysql_query("update form_lookup set form_no='".$new_form_no."'",$cn);
*/
$rs=mysql_query("select * from users where loginid='$loginid' and password='$password' and status='Active'");
	if(mysql_num_rows($rs)<1)
	{
		header('location:index.php?msg=err');
	}
	else
	{
		$_SESSION['login']=$loginid;
		while($r1=mysql_fetch_array($rs))
		{
			$_SESSION['type']=$r1[4];
			$_SESSION['UserName']=$r1[1];
		}
	}

if (isset($_SESSION['login']))
{
	$loginid=$_SESSION['login'];
	$res=mysql_query("select * from users where loginid='$loginid'");
	while($r=mysql_fetch_array($res))
	{
		
		
		if($r['type']=='Admin')
		{
			header('location:dashboard.php');
		}
		else if($r['type']=='Accountant')
		{
			header('location:account_dashboard.php');
		}
		else
		{
			header('location:user_dashboard.php');
		}
	}
	
	
  
		exit;
		

}


?>
