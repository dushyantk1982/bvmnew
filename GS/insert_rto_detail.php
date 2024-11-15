<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$rto_state=$_POST['rto_state'];
$rto_place=$_POST['rto_place'];
$zone=$_POST['zone'];
try
{
include('dbcon.php');
	//$q="select * from autogen";
	$res=mysql_query("select * from rto_area",$conn);
	while($r=mysql_fetch_array($res))
	{
		$id=$r["s_no"];
		
	}
	$id=$id+1;
	//echo"</br>".$id;
	for($i=0;$i<count($rto_place);$i++)
	{
		
		if(strcmp($rto_place[$i],"")!=0)
		{
			$q="insert into rto_area values(".$id.",'".$rto_state."','".$rto_place[$i]."','".$zone[$i]."')";
			mysql_query($q,$conn);
			$id=$id+1;
			
		}
		
	}//mysqli_close($cn);
	header('location:rto_detail.php?msg=ok');
} 
catch(Exception $e)
{
	echo $e."";
}	

?>
