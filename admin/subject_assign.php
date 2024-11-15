<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="insertfaculty.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr>
                            <td align="center" colspan="9">SUBJECT ASSIGNING TO FACULTY <br/>
                            <br/><br/></td></tr>
						  <tr>
                              <td width="31%"><div align="center" class="style30">Faculty Nam </div></td>
                              <td width="100%"><label>
                                <input name="faculty" type="text" id="faculty" />
                              </label></td>
                            </tr>
</table>
<table width="60%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
<tr align="center">
	<td width="12%" align="center">S.No.</td>
	<td width="22%" align="center">Paper Code </td>
	<td width="66%" align="center">Subject Name </td>
</tr>
<tr align="center">
	<td align="center">1</td>
	<td align="right"><input type="text" name="code[]"  size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">2</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">3</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">4</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">5</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">6</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">7</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">8</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">9</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>
<tr align="center">
	<td align="center">10</td>
	<td align="right"><input type="text" name="code[]" size="15" /></td>
	<td align="left"><input type="text" name="sub[]" size="47" /></td>
</tr>

    <td colspan="9" align="center"><div align="center" class="style31">
		<input name="ok" type="submit" class="style30" value="Submit" />
</div></td>
</tr>
</table>
</form>
<?php
 if($_REQUEST['msg']=='ok')
	{
		echo "Record Inserted Successfully";
	}
else
	{ echo "Sorry! Record is not inserted";}
?>

</div>
</body>
</html>
