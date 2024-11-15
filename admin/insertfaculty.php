<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=0;
$paper_code=$_POST["code"];
$sub=$_POST["sub"];
$faculty=$_POST["faculty"];
try
{
include('dblocal.php');
//$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
//$cn=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bvmclg")or die(mysql_error());
	//$q="select * from autogen";
	$res=mysql_query("select * from faculty_assign",$cn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["s_no"];
	}
	for($i=0;$i<count($paper_code);$i++)
	{
		if(strcmp($paper_code[$i],"")!=0)
		{
		$id=$id+1;
			mysql_query("insert into faculty_assign values(".$id.",'".$paper_code[$i]."','".$sub[$i]."','".$faculty."')",$cn);
		}
	}
	/*$id=$id+1;
	$q="update autogen set s_no=".$id;
	mysql_query($q,$cn);*/
	header('location:subject_assign.php?msg=ok');
	
}
catch(Exception $e)
{
	echo $e."";
}	
//echo $paper_code;
//echo $sub;
//echo $faculty;
?>
<script>
/*function goBack()
  {
  window.history.back()
  }*/
</script>

<button onclick="goBack()">Go Back</button>

</body>
</html>
