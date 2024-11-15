<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
	//session_start();
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
             <form action="insertassign.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Assignment Insertion<br/><br/><br/></td></tr>
						<tr><table width="60%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Paper Code</div></td>
								<td width="31%" align="center"><input  type="text" name="code" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">File No.</div></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" size="8" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.1</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.2</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.3</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.4</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><div align="center" class="style30">Q.5</div></td>
								<td width="31%" align="center"><input type="text" name="que[]" /></td>
							</tr>
							<tr>
								<td width="60%" align="center"><input type="submit" value="Submit" /></td>
								
							</tr>
							
							</table>
							</tr>
							
							
                          </table>
                        </form>
						<?php if($_REQUEST['msg']=='ok')
						{
							echo "Record Inserted Successfully";
						}
						else
						{ echo "Sorry! Record is not inserted";}?>
                        <p>&nbsp;</p>
      <p>&nbsp;</p>
     
                        </div>
</body>
</html>
