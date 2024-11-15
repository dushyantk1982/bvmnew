<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<style type="text/css">
div
{
position:absolute;
display:none;
}

.layer1
{
margin-top:1px;
}
</style>

</head>

<body>
<form action="insert_rto_detail.php" method="post">
<?php
if(@$_REQUEST['msg']=='ok')
		{
		echo "Record Inserted Successfully";
		
		}
?>

<table height="177" width="100%" align="center" border="0" bgcolor="#E8E8E8" bordercolor="#E8E8E8">
	<tr>
		<td valign="top" align="left" bgcolor="#008B00" colspan="5" height="1"><font color="#FFFFFF">RTO Detail Form</font></td>
	</tr>
	<tr>
		<td height="28" align="left" bgcolor="#E8E8E8" colspan="5">
			RTO State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="rto_state" type="text" size="65" style="background-color:#CCCCCC;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" />
	  </td>
	 <tr>
		<td width="9%" align="left" bgcolor="#E8E8E8">
			1.		</td>
		<td width="11%" align="left" bgcolor="#E8E8E8">
			RTO Place		</td>
		<td width="22%" align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
	   </td>
		<td width="5%" height="26" align="left" bgcolor="#E8E8E8">
			Zone		</td>
		<td width="53%" align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
       </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			2.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			3.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			4.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			5.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			6.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			7.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			8.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			9.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			10.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			11.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			12.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			13.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			14.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			15.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			16.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			17.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			18.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			19.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="left" bgcolor="#E8E8E8">
			20.
		</td>
		<td align="left" bgcolor="#E8E8E8">
			RTO Place
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="rto_place[]" placeholder="City (Code) Like Gwalior (MP-07)" size="30" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Zone
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="zone[]" placeholder="A / B / C" size="20" style="background-color:#CCCCCC;" />
	    </td>
	 </tr>
	 <tr>
	 <td align="center" colspan="5">
	 	<input type="submit" name="submit" value="Submit" />
	 </td>
	</tr>
</table>
<?php $_POST['rto_state']=$rto_state; ?>
<?php $_POST['rto_place']=$rto_place; ?>
<?php $_POST['zone']=$zone; ?>
</form>


</body>
</html>
