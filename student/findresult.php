<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="images/logo.png" />

<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
-->
</style>
<link href="about us/css/first.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style13 {color: #990000}
.style14 {
	font-family: "Times New Roman", Times, serif;
	color: #990000;
}
.style15 {font-size: 18px}
.style16 {color: #660000}
-->
</style>

</head>

<body>
<table width="700"><tr>
<td width="90%" valign="middle" ><div align="center">
  <?php
	$_POST['course']=$cr;
	$_POST['sem']=$sem;
	$_POST['internal']=$internal;
	$_POST['fileno']=$fileno;
	$_POST['ses']=$ses;
	$_POST['name']=$name;
?>

</div> 
<div class="style2" id="Layer4" style="border:border-color:#003333;">
                        <form action="internalresult.php" method="post" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="3"><h3 class="style15 style16"><u>INTERNAL RESULTS</u></h3>
                            </td>
                          </tr>
						  <tr><td align="center" colspan="3"><h3 class="style13">
						  <!-- Enter the session in value in inout type -->
						  <input type="hidden" name="ses" value="2014-15" /><!--2014-2015--></h3>
						  
						  </td></tr>
						  <tr>
                            <td width="31%"><div align="center" class="style30"></div></td>
                              <td colspan="1" width="53%" align="center"><label>
                                <?php 
									$fno=$_GET['fileno'];
									include('dbcon.php');
									//$conn=mysql_connect("localhost","root","");
									if(!$conn)
										{die('Could not connect:'.mysql_error());}
										//mysql_select_db('bvmclg');
										$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
										while($r=mysql_fetch_array($res))
										{
											//echo $r['st_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
											$cr=$r['course'];
											$sem=$r['sem'];
											$name=$r['st_name'];
										}
  
								?>
                            </label></td><td width="16%"></td>
                           </tr>
                              <td width="31%"><!--<div align="center" class="style30">Semester</div></td>-->
                            <td width="53%" align="left"><!--<select name="sem" id="sem">
                                  <option value="">--Sem--</option>
								  <option value="I">I Sem</option>
                                  <option value="II">II Sem</option>
                                  <option value="III">III Sem</option>
                                  <option value="IV">IV Sem</option>
								  <option value="V">V Sem</option>
								  <option value="VI">VI Sem</option>
                            </select>                    -->          </td>
                            <td></td>
                            
							<tr>
                         	
                              <td width="31%"><div align="left" class="style30"></div></td>
                              <td width="53%">Internal&nbsp;
							  <input type="radio" name="internal" id="internal" value="First" />First&nbsp;<input type="radio" name="internal" id="internal" value="Second" />Second&nbsp;<input type="radio" name="internal" id="internal" value="Third" />Third<br />
							  </td><td></td>
                            </tr>
							
							<tr>
                              <td colspan="9" align="center"><div align="center" class="style31">
                                <h3>
                                    <input name="ok" type="submit" class="style30" value=" Result" />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <a href="sthome.php?fileno=<?php echo $fno; ?>"><span class="style14 style13">Exit</span></a></h3>
								 <input type="hidden" name="fileno" value="<?php echo $fno; ?>" />
                                 <input name="course" type="hidden" value="<?php echo $cr; ?>" />
								 <input type="hidden" name="sem" value="<?php echo $sem;?>" />
								 <input type="hidden" name="name" value="<?php echo $name; ?>" />
                                  <p>&nbsp;</p>
								  <?php mysql_close($conn);?>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;    </p>
                              </div></td>
                            </tr>
                          </table>
                        </form>
    </div>
			<?php ob_flush(); ?>			
			</td></tr></table>
</body>
</html>
