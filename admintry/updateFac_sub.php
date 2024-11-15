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
	
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
	 {die('Could not connect:'.mysql_error());}
	 mysql_select_db('bvmclg');
	 
	
?>
<body><div class="style2" id="Layer4" style="border:solid;border-color:#003300;">
                        <form action="insertupdateFac_sub.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">INTERNAL MARKS<br/><br/><br/></td></tr>
						  <tr><td>Select Subject</td><td>
							  <select name="code" id="code">
                                  <option value="">--Select--</option>
									<?php 
						$res=mysql_query("select distinct(paper_code) from faculty_assign",$conn);
	
	while($r=mysql_fetch_array($res))
	{
		?>
								  <option value="<?php echo $r['paper_code']; ?>"><?php echo $r['paper_code']; ?></option>
        
		<?php
	}
mysql_close($conn);
									
									?>							  
		                         
                                </select><br />                              </td>
                            </tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">Faculty Name</div></td>
                              <td width="100%">
                                <input name="name" type="text" id="name" />
                              </td><td><input name="ok" type="submit" class="style30" value="Submit" /></td>
                            </tr>
</table>
</form>

</div>
</body>
</html>
