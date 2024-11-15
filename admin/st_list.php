<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>

<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="update_sem.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">STUDENT REGISTRATION<br/><br/><br/></td></tr>
						  <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%">
							  <input type="radio" name="course" id="course" value="MBA" />MBA&nbsp;<input type="radio" name="course" id="course" value="MCA" />MCA&nbsp;<input type="radio" name="course" id="course" value="BBA" />BBA&nbsp;<input type="radio" name="course" id="course" value="BCA" />BCA(JU)&nbsp;<input type="radio" name="course" id="course" value="BCA(M)" />BCA(MCRPV)<br/>
							</td>
                            </tr>
							<tr>
                              <td><div align="center" class="style30">Semester</div></td>
                              <td width="100%">
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
                        <td><input name="ok" type="submit" class="style30" value="Submit" /></td>
                            </tr>
							
</table>
</form>

<?php
	if(@$_REQUEST['submit']) 
	{
	$course=$_POST['course'];
		$sem=$_POST['sem'];
		$u_sem=$_POST['u_sem'];
		echo $course."<br />";
		echo $sem."<br />";
		echo $u_sem;
		include('dblocal.php');
		mysql_select_db("bvmclg")or die(mysql_error());
		
		$res=mysql_query("select * from student_reg",$cn);
		echo "<table width='500' border='1'>";
	while($row=mysql_fetch_array($res))
	{
		if(strcmp($course,$row['course'])==0 && strcmp($sem,$row['sem'])==0)
		{echo "<tr><td>".$row['file_no']."</td><td>".$row['st_name']."</td><td>".$row['course']."</td><td>".$row['sem']."</td><td>".$row['pwd']."</td></tr>";
		}
		}
		echo "</table>";
}
?>
	
	</div></body></html>