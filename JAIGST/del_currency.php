<?php
$currency_id=$_REQUEST['currency_id'];
include('DAL/database.php');
mysql_query("delete from currency where currency_id='".$currency_id."'");
header('location:currency_mgmt.php');
?>