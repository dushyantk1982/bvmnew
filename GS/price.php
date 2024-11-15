<?php
  
  $opt3 = $_GET['opt3'];
   $opt3=str_replace('_',' ',$opt3);
 
  include('dbcon.php');
  //echo '<option>-Select-</option>';
$res=mysql_query("select distinct(ex_showroom) from product_detail where model_name='".$opt3."'",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	//$mn=str_replace(' ','_',$r['model_name']);
	//echo ' <option value='.$mn.'>'.$r['model_name'].' </option>';
	echo 'Ex-Showroom Price :&nbsp;'.$r['ex_showroom'];
	$_POST['price']=$r['ex_showroom'];
	//$pr=$r['ex_showroom'];
	}

$res1=mysql_query("select distinct(capacity) from product_detail where model_name='".$opt3."'",$conn);
	
	while($r1=mysql_fetch_array($res1))
	{
	//$mn=str_replace(' ','_',$r['model_name']);
	//echo ' <option value='.$mn.'>'.$r['model_name'].' </option>';
	echo ',&nbsp;Capacity :&nbsp;'.$r1['capacity'];
	}
	
$res2=mysql_query("select distinct(basic_idv) from product_detail where model_name='".$opt3."'",$conn);
	
	while($r2=mysql_fetch_array($res2))
	{
	//$mn=str_replace(' ','_',$r['model_name']);
	//echo ' <option value='.$mn.'>'.$r['model_name'].' </option>';
	echo ',&nbsp;Basic IDV :&nbsp;'.$r2['basic_idv'];
	}


mysql_close($conn);
?>