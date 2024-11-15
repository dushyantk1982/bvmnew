<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style7 {font-size: 24px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #003333;font-weight:900;}
-->
</style>
</head>

<body>
<table width="60%" align="center"><tr><td>
<div style="border:solid;border-color:#003333;">
                        <form action="enquiryform.php?id=enquiryform" method="post" onsubmit="MM_validateForm('name','','R','email','','RisEmail','contact','','RisNum','message','','R');return document.MM_returnValue" >
                          <table width="100%" align="center">
                            <tr><td align="center" colspan="2"><div class="style7">Admission Enquery</div><hr /></td></tr>
							<tr>
                              <td width="31%"><div align="center" class="style30">Name</div></td>
                              <td width="100%"><label>
                                <input name="name" type="text" id="name"  />
                              </label></td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Email</div></td>
                              <td width="100%"><label>
                                <input name="email" type="text" id="email" />
                              </label></td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Contact</div></td>
                              <td width="100%"><input name="contact" type="text" id="contact" /></td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Course</div></td>
                              <td width="100%"><select name="course" id="course">
                                  <option>MBA</option>
                                  <option>MCA</option>
                                  <option>BE</option>
                                  <option>BBA</option>
                                  <option>BCA</option>
                                  <option>B.Ed</option>
                                  <option>D.Ed</option>
								  <option>PGDCA</option>
								  <option>DCA</option>
                                </select>                              </td>
                            </tr>
                            <tr>
                              <td><div align="center" class="style30">Message</div></td>
                              <td width="100%"><textarea name="msg" id="message"></textarea></td>
                            </tr>
                            <tr>
                              <td colspan="2"><div align="center" class="style31">
                                  <input name="submit" type="submit" class="style30" value="Submit" />
                              </div></td>
                            </tr>
                          </table>
						  </div></td></tr></table>
                        </form>
                        
                        </div>
						
<?php
if(@$_REQUEST['submit'])
{
echo "hello";
@$name=$_POST['name'];
@$email=$_POST['email'];
@$course=$_POST['course'];
@$msg=$_POST['msg'];
@$contact=$_POST['contact'];
$today = date("Y-m-d");

@$dbhost = 'localhost:3306';
@$dbuser = 'bvmgroup';
@$dbpass = 'PWD@bvm1';
//mysql_connect($dbhost, $dbuser, $dbpass) || die('Could not connect: ' . mysql_error());
mysql_connect('localhost','root','') || die('Could not connect: ' . mysql_error());

@$sql ="INSERT INTO `bvmclg`.`enquiry` (`Name`, `Contact`, `Date`, `Course`, `Email`, `Message`) VALUES ('$name', '$contact', '$today', '$course', '$email','$msg');";
echo "INSERT INTO `bvmclg`.`enquiry` (`Name`, `Contact`, `Date`, `Course`, `Email`, `Message`) VALUES ('$name', '$contact', '$today', '$course', '$email', '$msg');";

mysql_select_db('bvmclg');
@$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Thank Yoy\nWe will get back to you very soon.<br>";
mysql_close();
header("location:thank.php?id=$name");
}
?>


</body>
</html>
