<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />

</head>
<?php
$file_no=$_POST['file_no'];
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
	 {die('Could not connect:'.mysql_error());}
	 mysql_select_db('bvmclg');
	 
	
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="update_std_wise_field.php?id=update_std_wise_field" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Student Wise Update<br/><br/><br/></td></tr>
						  <tr><td><?php 
						  echo "<table align='center' width='60%'>";
						$res=mysql_query("select * from student_reg where file_no=".$file_no,$cn);
	
						while($r=mysql_fetch_array($res))
						{
							echo "<tr><td>File No</ts><td>".$r['file_no']."</td></tr>";
							echo "<tr><td>Student Name</ts><td>".$r['st_name']."</td></tr>";
							echo "<tr><td>Course</ts><td>".$r['course']."</td></tr>";
							echo "<tr><td>Semester</ts><td>".$r['sem']."</td></tr>";
							echo "<tr><td>Password</ts><td>".$r['pwd']."</td></tr>";
							
						}echo "</table>";
						//mysql_close($conn);
						?>					
						<hr />		  
		                </td></tr>
						<tr><td><u>Choose Field to Upgrage</u></td></tr>
						<tr><td><input type="radio" name="field" value="name" />&nbsp;Name&nbsp;
						<input type="radio" name="field" value="course" />&nbsp;Course&nbsp;
						<input type="radio" name="field" value="sem" />&nbsp;Sem&nbsp;
						<input type="radio" name="field" value="pwd" />&nbsp;Password&nbsp;</td></tr>
						<tr><td>Value to update&nbsp;<input type="text" name="value" /></td></tr>
						<tr><td><input name="submit" type="submit" class="style30" value="Submit" /></td></tr><tr><td><input type="hidden" name="file_no" value="<?php echo $file_no; ?>" /></td></tr>
</table>
</form>
</div>
</body>
</html>
<?php

if(@$_REQUEST['submit'])
{
$file_no=$_POST['file_no'];
$field=$_POST['field'];
$value=$_POST['value'];
if(strcmp($field,'name')==0)
{$res=mysql_query("update student_reg set st_name='$value' where file_no=".$file_no,$conn);}
else if(strcmp($field,'course')==0)
{$res=mysql_query("update student_reg set course='$value' where file_no=".$file_no,$conn);}
else if(strcmp($field,'sem')==0)
{$res=mysql_query("update student_reg set sem=$value where file_no=".$file_no,$conn);}
else if(strcmp($field,'pwd')==0)
{$res=mysql_query("update student_reg set pwd='$value' where file_no=".$file_no,$conn);}
else
{echo "Please Select an option"; }
}
?>