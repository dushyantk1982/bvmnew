<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
	//session_start();
	//$_POST['course']=$course;
	//$_POST['sem']=$sem;
	//$_POST['internal']=$internal;
	//$_POST['year']=$year;
	
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="insertinternal.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="2">INTERNAL MARKS<br/><br/><br/></td></tr>
						  <!--<tr>
                              <td width="31%"><div align="center" class="style30">Session</div></td>
                              <td width="100%"><label>
                                <input name="year" type="text" id="year" maxlength="7"  />
                                (e.g. 2014-15)
                              </label></td>
                            </tr>
                         <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%">
							  <input type="radio" name="course" id="course" value="MBA" />MBA&nbsp;<input type="radio" name="course" id="course" value="MCA" />MCA&nbsp;<input type="radio" name="course" id="course" value="BBA" />BBA&nbsp;<input type="radio" name="course" id="course" value="BCA" />BCA(JU)&nbsp;<input type="radio" name="course" id="course" value="BCA(M)" />BCA(MCRPV)<br/>
							  <!--<select name="course" id="course">
                                  <option value="">-------Select-------</option>
								  <option value=MBA>MBA</option>
                                  <option value=MCA>MCA</option>
                                  <option value=BBA>BBA</option>
                                  <option value=BCA>BCA</option>
                                </select>-->                              </td>
                            <!--</tr>
							
							<tr>
                              <td><div align="center" class="style30">Internal</div></td>
                              <td width="100%">
							  <input type="radio" name="internal" id="internal" value="First" />Firsrt&nbsp;<input type="radio" name="internal" id="internal" value="Second" />Second&nbsp;<input type="radio" name="internal" id="internal" value="Third" />Third<br/>
							  <!--<select name="internal" id="internal">
                                <option value="">-------Select-------</option>
								<option value=First>First</option>
                                <option value=Second>Second</option>
                                <option value=Third>Third</option>
                              </select>-->
							  <!--</td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">Semester</div></td>
                              <td width="100%">
							  <!--<input type="radio" name="sem" id="sem" value="I" />I Sem &nbsp;&nbsp;&nbsp;
							  <input type="radio" name="sem" id="sem" value="II" />II Sem &nbsp;
							  <input type="radio" name="sem" id="sem" value="III" />III Sem <br />
							  <input type="radio" name="sem" id="sem" value="IV" />IV Sem &nbsp;
							  <input type="radio" name="sem" id="sem" value="V" />V Sem &nbsp;
							  <input type="radio" name="sem" id="sem" value="VI" />VI Sem<br/><br/>-->
							  <!--<select name="sem" id="sem">
                                  <option value="">--Select--</option>
								  <option value="1">I Sem</option>
                                  <option value="2">II Sem</option>
                                  <option value="3">III Sem</option>
                                  <option value="4">IV Sem</option>
								  <option value="5">V Sem</option>
								  <option value="6">VI Sem</option>
                                </select><br />                              </td>
                            </tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">Paper Code</div></td>
                              <td width="100%">
                                <input name="code" type="text" id="code" />
                              </td><td><input name="ok" type="submit" class="style30" value="Submit" /></td>
                            </tr>-->
	<tr><td align="center"><?php echo $_POST['course']; ?></td><td><?php echo $_POST['sem']; ?></td></tr>
	<tr><td align="center"><?php echo $_POST['internal']; ?></td><td><?php echo $_POST['code']; ?></td></tr>
</table>
<table width="30%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
<?php
$paper_code=$_POST["code"];
//$file_no=$_POST["fno"];
$course=$_POST["course"];
$sem=$_POST["sem"];
$internal=$_POST["internal"];
$session=$_POST["year"];
//$marks=$_POST["marks"];
$count=$_POST['count'];
echo "<tr align='center'>
	<td align='center'>S.No.</td>
	<td align='center'>File No</td>
	<td align='center'>Marks</td>
</tr>";
for($i=1;$i<=$count;$i++)
{
echo "<tr align='center'>
	<td align='center'>".$i."</td>
	<td align='right'><input type='text' name='fno[]'  size='12' /></td>
	<td align='left'><input type='text' name='marks[]' size='12' /></td>
</tr>";
}
?>

<!--<tr align="center">
	<td align="center">S.No.</td>
	<td align="center">File No</td>
	<td align="center">Marks</td>
</tr>
<tr align="center">
	<td align="center">1</td>
	<td align="right"><input type="text" name="fno[]"  size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">2</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">3</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">4</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">5</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">6</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">7</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">8</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">9</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">10</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">11</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">12</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">13</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">14</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">15</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">16</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">17</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">18</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">19</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr align="center">
	<td align="center">20</td>
	<td align="right"><input type="text" name="fno[]" size="12" /></td>
	<td align="left"><input type="text" name="marks[]" size="12" /></td>
</tr>
<tr>
    <td colspan="9" align="center"><div align="center" class="style31">
		<input name="ok" type="submit" class="style30" value="Submit" />
</div></td>
</tr>-->
<tr><td><input name="ok" type="submit" class="style30" value="Submit" /></td></tr>
</table>
<input type="hidden" name="code" value="<?php echo $paper_code; ?>" />
<input type="hidden" name="course" value="<?php echo $course; ?>" />
<input type="hidden" name="sem" value="<?php echo $sem; ?>" />
<input type="hidden" name="internal" value="<?php echo $internal; ?>" />
<input type="hidden" name="year" value="<?php echo $session; ?>" />
</form>
</div>
</body>
</html>
