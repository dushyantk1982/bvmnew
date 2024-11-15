<?php
$invoice_no=$_REQUEST['invoice_no'];
include('DAL/database.php');

mysql_query("update sales set total_gross='0.00', total_discount='0.00', total_taxable='0.00', total_vat='0.00', total_net='0.00' where invoice_no='".$invoice_no."'");

/*$res=mysql_query("select * from item_movment where invoice_no='".$invoice_no."'");
$count=mysql_num_rows($res);
echo $count;

$i=0;
$res1=mysql_query("select * from item_movment where invoice_no='".$invoice_no."'");
while($r1=mysql_fetch_array($res1))
{
	$sales_qty[$i]=$r1[10];
	$balance_qty[$i]=$r1['18'];
	$i=$i+1;
}	

for($i=0; $i<$count; $i++)
{
	echo $sales_qty[$i]." &nbsp; - &nbsp; ".$balance_qty[$i]."<br/>";	
}*/	
	
header('location:invoice_mgmt.php');
?>