<?php
  
  $opt1 = $_GET['opt1'];
  $opt1=str_replace('_',' ',$opt1);
  include('dbcon.php');
  
$res=mysql_query("select distinct(verient_type) from product_detail where vehicle_type='".$opt1."'",$conn);
	echo ' <option value= >'.Select.' </option>';
	while($r=mysql_fetch_array($res))
	{
			$vt=str_replace(' ','_',$r['verient_type']);
 			echo '<option value='.$vt.'>'.$r['verient_type'].'</option>';
	}
mysql_close($conn);
?>