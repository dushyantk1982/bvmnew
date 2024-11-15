
<?php 
@$from=$_REQUEST['from'];
@$to=$_REQUEST['to'];
@$dbhost = 'localhost:3306';
@$dbuser = 'bvmgroup';
@$dbpass = 'PWD@bvm1';
mysql_connect($dbhost, $dbuser, $dbpass) || die('Could not connect: ' . mysql_error());

@$sql ="select * from enquiry where Date between '$from' and '$to';";
//echo "select * from enquiry where Date between '$from' and '$to';";

mysql_select_db('bvmclg');
@$retval = mysql_query( $sql);
if($retval)
{

echo "<table width='100%' border='1' cellpadding='2'>".
  "<tr>".
    "<td>Name</td>".
    "<td>Email</td>".
    "<td>Date</td>".
    "<td>Course</td>".
    "<td>Contact</td>".
    "<td>Query</td>".
  "</tr>";
while($row=mysql_fetch_array($retval))
{
echo"<tr>".
    "<td>$row[1]</td>".
    "<td>$row[5]</td>".
    "<td>$row[3]</td>".
    "<td>$row[4]</td>".
    "<td>$row[2]</td>".
    "<td>$row[6]</td>".
	"</tr>";

}
echo "</table>";

}
else{
echo "Thank Yoy\nWe will get back to you very soon.<br>";}
mysql_close();
 ?>
 <a href="javascript:window.print()">Print</a>