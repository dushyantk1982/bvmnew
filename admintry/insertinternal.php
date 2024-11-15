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
$file_no=$_POST["fno"];
$course=$_POST["course"];
$sem=$_POST["sem"];
$internal=$_POST["internal"];
$session=$_POST["year"];
$marks=$_POST["marks"];

//$ses=$_POST["selyear"];
//$marks=$_POST["codes1"].",".$_POST["codes2"].",".$_POST["codes3"].",".$_POST["codes4"].",".$_POST["codes5"].",".$_POST["codes6"].",".$_POST["codes7"];
//$file_no=$_POST["fileno"];
//echo "</br>Course: ".$course;
//echo "</br>Sem: ".$sem;
//echo "</br>Internal: ".$inter;
//echo "</br>Session: ".$ses;
//echo "</br>Marks: ".$marks;
//echo "</br>File No: ".$file_no;
try
{
//include('dblocal.php');
//$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
$cn=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bvmclg")or die(mysql_error());
	$q="select * from autogen";
	$res=mysql_query("select * from internal_record",$cn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["s_no"];
	}
	//echo"</br>".$id;
	for($i=0;$i<count($file_no);$i++)
	{
		//for($j=0;$j<count($question);$j++)
		//{
		if(strcmp($file_no[$i],"")!=0)
		{
		$id=$id+1;
			$q="insert into internal_record values(".$id.",'".$course."','".$sem."','".$session."','".$internal."',".$file_no[$i].",'".$paper_code."','".$marks[$i]."')";
			mysql_query($q,$cn);
			//$id=$id+1;
			//$q="update autogen set s_no=".$id;
			//mysql_query($q,$cn);
		}
		}header('location:get_std_count.php?msg=ok');
	}//mysqli_close($cn);
	
	//$id=$id-12;
	//$q="update autogen set sno=".$id;
	//mysql_query($q,$cn);
//} 
catch(Exception $e)
{
	echo $e."";
}	

//$q="insert into internal_record values(".$id.",'".$course."','".$sem."','".$ses."','".$inter."','".$file_no."','".$marks."','-','-','-')";
//	echo "</br>".$q;
//	mysql_query($q,$cn);
//	echo"Record Inserted...";
//	$q="update autogen set s_no=s_no+1";
//	mysql_query($q,$cn);
//	header('Location:internalpage2.php');
?>
<script>
/*function goBack()
  {
  window.history.back()
  }*/
</script>

<!--<button onclick="goBack()">Go Back</button>-->

</body>
</html>
