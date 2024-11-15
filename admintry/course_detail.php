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
             <form action="course_detail.php?id=course_detail" onsubmit="MM_validateForm('session','','R');return document.MM_returnValue" >
                          <table width="100%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="9">Course Detail Form<br/><br/><br/></td></tr>
						  
						<tr><table width="60%" align="center" bordercolor="#F0F0F0" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
							
<?php
echo "<tr><td width='31%' align='center'><div align='center' class='style30'>S. no.</div></td><td width='31%' align='center'><div align='center' class='style30'>Paper Code</div></td>
<td width='31%' align='center'><div align='center' class='style30'>Paper Name</div></td></tr>";

for($i=1;$i<=$count;$i++)
{
echo "<tr><td width='5%' align='center'>".$i."</td><td width='31%' align='center'><input type='text' name='paper_code[]' maxlength='8' /></td><td width='31%' align='center'><input type='text' name='paper_name[]' /></td>";
}
?>
<input type="text" name="crs" value="<?php echo $course; ?>" readonly="yes"/>
<input type="text" name="sem" value="<?php echo $sem; ?>" readonly="yes"/>							
							
							<tr>
								<td width="60%" align="center"><input type="submit" name="submit" value="Submit" /></td>
								
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
<?php
if(@$_REQUEST['submit'])
{
$id=0;
$paper_name=$_GET['paper_name'];
$paper_code=$_GET['paper_code'];
$crs=$_GET['crs'];
$sem=$_GET['sem'];

//include('dblocal.php');
//include('dbcon.php');
//$cn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1")or die(mysql_error());
	//mysql_select_db("bvmgroup_bvmclg")or die(mysql_error());
	$cn=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bvmclg")or die(mysql_error());
	$q="select * from autogen";
	$res=mysql_query("select * from course_detail",$cn);
	while($row=mysql_fetch_array($res))
	{
		$id=$row["s_no"];
	}
	//echo"</br>".$id;
	for($i=0;$i<count($paper_code);$i++)
	{
		//for($j=0;$j<count($question);$j++)
		//{
		if(strcmp($paper_code[$i],"")!=0)
		{
		$id=$id+1;
			$q="insert into course_detail values(".$id.",'".$crs."','".$sem."','".$paper_code[$i]."','".$paper_name[$i]."')";
			mysql_query($q,$cn);
	}
		}header('location:course_detail_count.php?msg=ok');
	}
	
	
/*	$cn=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bvmclg")or die(mysql_error());
$res=mysql_query('select * from course_detail',$cn)
while($row=mysql_fetch_array($res))
	{
		$id=$row["s_no"];
	}
for($i=0;$i<count($paper_code);$i++)
{	$id=$id+1;
	$q="insert into course_detail values(".$id.",'".$crs."',".$sem.",'".$paper_code[$i]."','".$paper_name[$i]."')";
	mysql_query($q,$cn);
}

echo"Record Inserted.......";
header('location:std_reg_count.php?msg=ok');
}*/
?>