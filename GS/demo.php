<?php
  $opt = $_GET['opt'];
  
  include('dbcon.php');
  						$res=mysql_query("select distinct(vehicle_type) from product_detail where product_name='".$opt."'",$conn);
	echo ' <option value= >'.Select.' </option>';
	while($r=mysql_fetch_array($res))
	{
		$vt=str_replace(' ','_',$r['vehicle_type']);
		echo ' <option value= '.$vt.'>'.$r['vehicle_type'].' </option>';
	}
mysql_close($conn);
		     
?>