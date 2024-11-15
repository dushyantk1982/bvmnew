<?php
  
  $opt4 = $_GET['opt4'];
  $opt1=str_replace('_',' ',$opt4);
  include('dbcon.php');
  
$res=mysql_query("select distinct(rto_place) from rto_area where rto_state='".$opt1."'",$conn);
	echo ' <option value= >'.Select.' </option>';
	while($r=mysql_fetch_array($res))
	{
			$rp=str_replace(' ','_',$r['rto_place']);
 			echo '<option value='.$rp.'>'.$r['rto_place'].'</option>';
	}
mysql_close($conn);
?>