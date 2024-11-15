<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN</title>
<link rel="shortcut icon" href="images/logo.png" />
<style type="text/css" media="print">
body{visibility:hidden; display:none}
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	color: #990000;
}
-->
</style>
</head>
<body>

<table width="90%" align="center">
	<tr valign="top" background=>
		<td width="100%" valign="middle" ><div align="center">
			<p>&nbsp;</p>
				<table width="40%" align="center" bordercolor="#000000" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
					<tr><td colspan="2" align="center" width="100%"><font color="#990000" size="+3">Internal Result</font></td>
					</tr>
				</table>
				<?php 
					$course=$_POST['course'];
					$sem=$_POST['sem'];
					$int=$_POST['internal'];
					$fno=$_POST['fileno'];
					$ses=$_POST['ses'];
					$name=$_POST['name'];
					//$conn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1");
//					if(!$conn)
//						{die('Could not connect:'.mysql_error());}
//						mysql_select_db('bvmclg');
//						$col=mysql_query("select * from internal_record where file_no='". $fno ."' and sem='". $sem ."' and course='". $course ."' and internal='". $int ."' and session='".$ses."'",$conn);
//						 if(!$col)
//						 {die('Could not connect'.mysql_error());}
//						 while($row=mysql_fetch_array($col,MYSQL_ASSOC))
//						 {
//						 $marks=$row['marks'];
//						 }
				?>
						 
						 
						 
				<table width="40%" align="center" bordercolor="#000000" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
					<tr>
						<td colspan="2" align="center"><?php echo $int;?>&nbsp;Internal</td>
					</tr>
					<tr>
						<td align="left" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name; ?></td>
					</tr>
					<tr>
						<td align="left" width="38%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File No</td>
						<td align="left" width="62%"><?php echo $fno;?></td>
					</tr>
 					<tr>
						<td align="left" width="38%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $course;?></td>
						<td align="left" width="62%"><?php echo $sem;?>&nbsp;Sem</td>
					</tr>
				</table>
				<table width="40%" align="center" bordercolor="#000000" border="1" background="images/newback.jpg" bgcolor="#FFFFFF" class="pagefont">
					<tr>
						<td align="center">Subject Code</td>
						<td align="center">Marks</td>
					</tr>
						<?php
						//include('dblocal.php');
						include('dbcon.php');
							//$conn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1");
						 		if(!$conn)
						 			{die('Could not connect:'.mysql_error());}
						 		//mysql_select_db('bvmclg');
								$col=mysql_query("select * from internal_record where file_no='". $fno ."' and sem='". $sem ."' and course='". $course ."' and internal='". $int ."' and session='".$ses."'",$conn);
						 //if(!$col)
						 //{die('Could not connect'.mysql_error());}
						 while($row=mysql_fetch_array($col,MYSQL_ASSOC))
						 {
						 	echo "<tr><td align=center>".$row['paper_code']."</td><td align=center>".$row['marks']."</td></tr>";
						 }?>
						</table>
						
						
                              <p>
                                <?php mysql_close($conn);?>
</p>
                              
							  <!--<h4><a href="findresult.php?fileno=<?php //echo $fno; ?>" class="style1">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							      <a href="sthome.php?fileno=<?php //echo $fno; ?>" class="style1">Home</a>
								  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:window.print()">Print</a>-->                              </h4>
							  <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              
</div></td></tr></table>

</body>
</html>
