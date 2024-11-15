<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>

<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="internalpage1.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">INTERNAL MARKS<br/><br/><br/></td></tr>
						  <tr>
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
                            </tr>
							
							<tr>
                              <td><div align="center" class="style30">Internal</div></td>
                              <td width="100%">
							  <input type="radio" name="internal" id="internal" value="First" />Firsrt&nbsp;<input type="radio" name="internal" id="internal" value="Second" />Second&nbsp;<input type="radio" name="internal" id="internal" value="Third" />Third<br/>
							  <!--<select name="internal" id="internal">
                                <option value="">-------Select-------</option>
								<option value=First>First</option>
                                <option value=Second>Second</option>
                                <option value=Third>Third</option>
                              </select>--></td>
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
							  <select name="sem" id="sem">
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
                              </td>
                            </tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">Number of Students</div></td>
                              <td width="100%">
                                <input name="count" type="text" id="count" />
                              </td><td><input name="ok" type="submit" class="style30" value="Submit" /></td>
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
