<?php
$pro_name=$_POST['pro_name'];
$vh_type=$_POST['vh_type'];
$vr_type=$_POST['vr_type'];
$model_id=$_POST['model_id'];
$model_name=$_POST['model_name'];
$passenger=$_POST['passenger'];
$capacity=$_POST['capacity'];
$ex_showroom=$_POST['ex_showroom'];
$bs_idv=$_POST['bs_idv'];

try
{
include('dbcon.php');
	//$q="select * from autogen";
	$res=mysql_query("select * from product_detail",$conn);
	while($r=mysql_fetch_array($res))
	{
		$id=$r["s_no"];
		
	}
	$id=$id+1;
	//echo $id;
		if(strcmp($pro_name,"")!=0 && strcmp($vh_type,"")!=0 && strcmp($vr_type,"")!=0 && strcmp($model_id,"")!=0 && strcmp($model_name,"")!=0 && strcmp($passenger,"")!=0 && strcmp($capacity,"")!=0 && strcmp($ex_showroom,"")!=0 && strcmp($bs_idv,"")!=0)
		{
			$q="insert into product_detail values(".$id.",'".$pro_name."','".$vh_type."','".$vr_type."','".$model_id."','".$model_name."',".$passenger.",".$capacity.",".$ex_showroom.",".$bs_idv.")";
			mysql_query($q,$conn);
			
			
	//echo"Record Inserted.......";
	header('location:product_detail.php?msg=ok');
	}
	else
	{header('location:product_detail.php?msg=err');}
} 
catch(Exception $e)
{
	echo $e."";
}	

					
mysql_close($conn);
?>
