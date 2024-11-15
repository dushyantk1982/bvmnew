<?php
  
  $opt2 = $_GET['opt1'];
   $opt1=str_replace('_',' ',$opt2);
 
  include('dbcon.php');
  echo '<option>-Select-</option>';
$res=mysql_query("select distinct(model_name) from product_detail where verient_type='".$opt1."'",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	$mn=str_replace(' ','_',$r['model_name']);
	echo ' <option value='.$mn.'>'.$r['model_name'].' </option>';
	}
mysql_close($conn);
?>