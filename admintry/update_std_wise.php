<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>

<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="update_std_wise_field.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="3">STUDENT REGISTRATION UPGRATION<br/><br/><br/></td></tr>
						  <tr>
                              <td><div align="center" class="style30">File No.</div></td>
                              <td>
							  <input type="text" name="file_no" /></td>
                              <td><input name="ok" type="submit" class="style30" value="Submit" /></td>
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
