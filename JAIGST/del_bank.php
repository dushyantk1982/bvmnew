<?php
$bank_id=$_REQUEST['bank_id'];
include('DAL/database.php');
mysql_query("delete from bank where bank_id='".$bank_id."'");
header('location:bank_mgmt.php');
?>