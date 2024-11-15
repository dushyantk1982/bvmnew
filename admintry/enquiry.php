<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="../images/logo.png" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>

<script>
$(function() {
$( "#from" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
dateFormat:'yy-mm-dd',
onClose: function( selectedDate ) {
$( "#to" ).datepicker( "option", "minDate", selectedDate );
}
});
$( "#to" ).datepicker({

defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
dateFormat:'yy-mm-dd',
onClose: function( selectedDate ) {
$( "#from" ).datepicker( "option", "maxDate", selectedDate );
}
});
});
</script>

</head>
<body>
<form method="post" action="enquiry.php?id=enquiry">
<label for="from">From</label>
<input type="text" id="from" name="from" />
<label for="to">to</label>
<input type="text" id="to" name="to" />
<input name="submit" type="submit" value="submit">
</form>
</body>
</html>
<?php

if(@$_REQUEST['submit'])
{
@$from=$_POST['from'];
@$to=$_POST['to'];
@$dbhost = 'localhost:3306';
@$dbuser = 'bvmgroup';
@$dbpass = 'PWD@bvm1';
mysql_connect($dbhost, $dbuser, $dbpass) || die('Could not connect: ' . mysql_error());

mysql_select_db('bvmclg');
@$sql ="select * from enquiry where Date between '$from' and '$to';";
//echo "select * from enquiry where Date between '$from' and '$to';";


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
 }
 
?>
<a href="JavaScript:newPopup('popen.php?to=<?php echo @$to;?> & from=<?php echo @$from;?>');">Open a popup window</a>