<?php

$nm=$_GET['name1'];
$fno=$_GET['fn'];
$crs=$_GET['crs'];
$sem=$_GET['sem'];

//include('dblocal.php');
include('dbcon.php');
//$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
	//mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	
for($i=0;$i<count($fno);$i++)
{
	$q="insert into student_reg values(".$fno[$i].",'".$nm[$i]."','".$crs."',".$sem.",'password')";
	mysql_query($q,$cn);
}

echo"Record Inserted.......";
header('location:std_reg_count.php?msg=ok');
?>
