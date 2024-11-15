<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
$course=$_POST['course'];
$sem=$_POST['sem'];
$count=$_POST['count'];
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
             <form action="insertreg.php" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Student Registration<br/><br/><br/></td></tr>
						  
						<tr><table width="60%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
							
<?php
echo "<tr><td width='31%' align='center'><div align='center' class='style30'>S. no.</div></td><td width='31%' align='center'><div align='center' class='style30'>File No</div></td>
<td width='31%' align='center'><div align='center' class='style30'>Student Name</div></td></tr>";

for($i=1;$i<=$count;$i++)
{
echo "<tr><td width='5%' align='center'>".$i."</td><td width='31%' align='center'><input type='text' name='fn[]' maxlength='8' /></td><td width='31%' align='center'><input type='text' name='name1[]' /></td>";
}
?>
<input type="text" name="crs" value="<?php echo $course; ?>" readonly="yes"/>
<input type="text" name="sem" value="<?php echo $sem; ?>" readonly="yes"/>							
							<!--<tr>
								<td width="31%" align="center"><div align="center" class="style30">Student Name</div></td>
								<td width="31%" align="center"><div align="center" class="style30">File No</div></td>
								<td width="31%" align="center"><div align="center" class="style30">Course</div></td>
								<td width="31%" align="center"><div align="center" class="style30">Semester</div></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>
							<tr>
								<td width="31%" align="center"><input type="text" name="name1[]" /></td>
								<td width="31%" align="center"><input type="text" name="fn[]" maxlength="8" /></td>
								<td width="31%" align="center"><input type="text" name="crs[]" maxlength="10" /></td>
								<td width="31%" align="center"><input type="text" name="sem[]" maxlength="10" /></td>
							</tr>-->
							<tr>
								<td width="60%" align="center"><input type="submit" value="Submit" /></td>
								
							</tr>
							
							</table>
							</tr>
							
							
                          </table>
                        </form>
                        <p>&nbsp;</p>
      <p>&nbsp;</p>
     
                        </div>
</body>
</html>
