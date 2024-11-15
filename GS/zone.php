<?php
  
  $opt5 = $_GET['opt5'];
   $opt1=str_replace('_',' ',$opt5);
 
  include('dbcon.php');
  //echo '<option>-Select-</option>';
$res=mysql_query("select distinct(zone) from rto_area where rto_place='".$opt1."'",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	//$mn=str_replace(' ','_',$r['model_name']);
	//echo ' <option value='.$mn.'>'.$r['model_name'].' </option>';
	echo '&nbsp;Zone :&nbsp;'.$r['zone'];
	$zone=$r['zone'];
	}
	
/*$url='motorapp.php';
$url.='?zone='.$zone;
header('location: '.$url);*/
mysql_close($conn);
?>