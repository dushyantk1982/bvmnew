<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Registration Form</title>

<title>jQuery UI Datepicker - Select a Date Range</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />

<script>
$(function() {
$( "#from" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
changeYear: true,
numberOfMonths: 1,
numberOfYears: 1,
onClose: function( selectedDate ) {
$( "#from" ).datepicker( "option", "maxDate", selectedDate );
}
});
});
</script>
</head>

<body>

<form action="superdistributorform.php?id=superdistributorform" method="post">

<table height="100" width="80%" align="center" border="0" bgcolor="#E8E8E8" bordercolor="#E8E8E8">
	<tr>
		<td valign="top" width="80%" align="left" bgcolor="#008B00" colspan="4" height="2"><font color="#FFFFFF">Super Distributor Detail</font></td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Super Distributor Name&nbsp;</td><td><input name="superdistributorname" type="text" size="30" style="background-color:#CCCCCC;" placeholder="Super Distributor Name" /></td><td>Date of Birth&nbsp;</td><td><label for="from"></label><input type="text" id="from" name="from" size="30" style="background-color:#CCCCCC;" placeholder="MM/DD/YYYY" /></td></tr><tr><td>
			Owner Name&nbsp;</td><td><input type="text" name="ownername" size="30" style="background-color:#CCCCCC;" /></td><td>Gender&nbsp;</td><td><input type="radio" name="gender" value="Male" checked="checked" />Male&nbsp;<input type="radio" name="gender" value="Female" />Female
		</td></tr>
		<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Email&nbsp;</td><td align="left" bgcolor="#E8E8E8" height="1"><input name="mail" type="text" size="30" style="background-color:#CCCCCC;" placeholder="xyz@example.com" /></td><td>Bank Name</td><td><input name="bank" type="text" size="30" style="background-color:#CCCCCC;" />
			
			<!--<select name="bank">
				<option value="">--Select--</option>
				<option value="sbi">State Bank of India</option>
				<option value="pnb">Punjab National Bank</option>
				<option value="axis">Axis Bank</option>
				<option value="dena">Dena Bank</option>
				<option value="maharastra">Maharastra Bank</option>
			</select>-->
		
		</td></tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Account No&nbsp;</td><td><input name="account" type="text" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Branch Name</td><td><input name="branch" type="text" size="30" style="background-color:#CCCCCC;" />
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			PAN No&nbsp;</td><td><input name="pan" type="text" size="30" style="background-color:#CCCCCC;" />
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8">
			Address</td><td><TEXTAREA NAME="address1" ROWS=4 COLS=24 style="background-color:#CCCCCC;"></TEXTAREA><!--<input name="address1" type="text" height="60" width="190" style="background-color:#CCCCCC;" />-->
		</td>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Parmanent Address&nbsp;</td><td><TEXTAREA NAME="address2" ROWS=4 COLS=24 style="background-color:#CCCCCC;"></TEXTAREA><!--<input name="address2" type="text" size="30" style="background-color:#CCCCCC;" />-->
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8">
			District</td><td><input name="district" type="text" height="60" width="190" style="background-color:#CCCCCC;" />
		</td>
		<td align="left" bgcolor="#E8E8E8" height="1">
			State&nbsp;</td><td><input name="state" type="text" size="30" style="background-color:#CCCCCC;" />
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8">
			Contact No.1</td><td><input name="mobile1" type="text" height="60" width="190" style="background-color:#CCCCCC;" />
		</td>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Pin No&nbsp;</td><td><input name="pin" type="text" size="30" style="background-color:#CCCCCC;" />
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8">
			Contact No.2</td><td><input name="mobile2" type="text" height="60" width="190" style="background-color:#CCCCCC;" />
		</td>
	</tr>
	<tr>
		<td align="center" bgcolor="#E8E8E8">
			<input name="submit" type="submit" value="Submit" />
		</td>
		<td align="left" bgcolor="#E8E8E8" height="1">
			<a href="index.php">Back</a>
			<!--<input name="cancel" type="button" value="Cancel" />-->
		</td>
	</tr>

</table>
</form>

<?php
if(@$_REQUEST['submit'])
{
$sdistributor_name=$_POST['superdistributorname'];
$dob=$_POST['from'];
$owner_name=$_POST['ownername'];
$gender=$_POST['gender'];
$mail=$_POST['mail'];
$bank_name=$_POST['bank'];
$account_no=$_POST['account'];
$bank_branch=$_POST['branch'];
$pan_no=$_POST['pan'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$district=$_POST['district'];
$state=$_POST['state'];
$mobile1=$_POST['mobile1'];
$mobile2=$_POST['mobile2'];
$pin_no=$_POST['pin'];

//Generate Id and Password
$s=explode(" ",$retail_name);
$n1=substr($s[0],0,1);
$n2=substr($s[1],0,1);
$pan=substr($account_no,-5);
$id=$n1.$n2.$pan;
$pwd=$mobile1;

include('dbcon.php');
if(strcmp($id,"")!=0)
{
	$q="insert into sdistributor_reg values('".$id."','".$sdistributor_name."','".$owner_name."','".$dob."','".$gender."','".$mail."','".$address1."','".$address2."','".$district."','".$state."',".$mobile1.",".$mobile2.",".$pin_no.",'".$bank_name."',".$account_no.",'".$bank_branch."','".$pan_no."','".$pwd."')";

mysql_query($q,$conn);

}

echo "Record Inserted Sucessfully<br/>";
echo "Your User ID : ".$id;
echo "<br/>Your Password : ".$pwd;
}
?>

</body>
</html>
