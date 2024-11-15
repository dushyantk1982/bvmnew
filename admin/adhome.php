<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<link href="stylesheet.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
</head>

<body>
<div class="wrapper">
	<div class="head">
		<div class="layer" align="right"></div>
		<div class="layer1">
			<table width="100%">
    			<tr>
      				<td width="25%">
						<div align="right">
							<input type="image" src="Images/logo.jpg" align="middle" width="100" height="80" />&nbsp;&nbsp;
						</div>
					</td>
					<td width="75%" valign="middle">
						<div align="left">
							<span class="logo">BVM Group of Colleges</span>
						</div>
					</td>
				</tr>
				<tr>
					<td width="25%"><div align="left"></div></td>
					<td width="75%">
						<div align="center">YOUR VISION OUR MISSION........</div>
						</td></tr>
			</table>
			<span style="color: #B7B7B7">
				<marquee behavior="scroll" direction="left" style="background-color:#990000;">
					<span class="style44" style="font-family: &quot;Courier New&quot;, Courier, monospace">Welcome to Admin Page | 24 x 7 Helpline:9301129088/9303714455 </span>
				</marquee>
			</span>
		</div>
		<div class="layer2">
			<?php include('menu/index.html'); ?>
			<!--<div style="background-color:#CCCCCC;">
				<a href="adhome.php?fileno=<?php //echo $fno; ?>">Home</a> | 
				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=1" target="_parent">View Enquiry</a> |
				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=2" target="_parent">Student Registration</a> | 
				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=3" target="_parent">Faculty Assigning</a> | 
				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=4" target="_parent">Exam Dept</a> | 
				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=5" target="_parent">Faculty</a> | 
				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=6" target="_parent">Syllabus</a> | 				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=7" target="_parent">Results</a> | 
				<a href="adhome.php?fileno=<?php //echo $fno; ?>&id=8" target="_parent">Complaint/Query</a> | 
				<a href="adlogin.php" target="_parent">Logout</a>-->
			
		</div>
	</div>
	<div class="container">
		<div class="left"></div>
		<div class="content" align="center">
		<?php
		if(@$_REQUEST['id']==1){
		?>
		<iframe align="middle" height="470" width="100%" src="enquiry.php" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==2){
		?>
		<!--<iframe align="middle" height="470" width="100%" src="internalpage1.php" name="sthome"></iframe>-->
		<iframe align="middle" height="470" width="100%" src="get_std_count.php" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==3){
		?>
		<iframe align="middle" height="470" width="100%" src="createassignment.php" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==4.1){
		?>
		<iframe align="middle" height="470" width="100%" src="subject_assign.php" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==4.2){
		?>
		<iframe align="middle" height="470" width="100%" src="updateFac_sub.php" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==21){
		?>
		<iframe align="middle" height="470" width="100%" src="std_reg_count.php" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==22.1){
		?>
		<iframe align="middle" height="470" width="100%" src="update_std_reg.php" name="sthome"></iframe>
		<!--<iframe align="middle" height="470" width="100%" src="registration.php" name="sthome"></iframe>-->
		<?php
			}else if(@$_REQUEST['id']==5){
		?>
		<iframe align="middle" height="470" width="100%" src="<?php
																if($cr=='MBA' || $cr=='BBA')
																	{echo "deptcal/manag2014.pdf";}
																else
																	{echo "deptcal/it2014.pdf";}
															  ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==6){
		?>
		<iframe align="middle" height="470" width="100%" src="findsyllab.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==7){
		?>
		<iframe align="middle" height="470" width="100%" src="findresult.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==8){
		?>
		<iframe align="middle" height="470" width="100%" src="complaint.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		<?php
			}else if(@$_REQUEST['id']==9){
		?>
		<iframe align="middle" height="470" width="100%" src="../developed.php?fileno=<?php echo $fno; ?>" name="sthome"></iframe>
		
		
		
		<?php }else{?>
		<iframe align="middle" height="470" width="100%" src="home.php" name="index"></iframe>
		<?php
		}
		?>
		</div>
		<div class="right"></div>
	</div>
	
	<div class="footer">
		<!--<div class="footer1" align="center"></div>-->
		<div class="footer2 style1"><hr />
			<table width="984">
				<tr>
					<td width="92%" align="center">&copy;BVM College of Management Education, Gwalior. All rights are reserved.					</td>
					<td width="8%" align="right">
						<a href="sthome.php?fileno=<?php echo $fno; ?>&id=9" target="_parent" title="Dushyant Upadhyay">Developed By</a>					</td>
				</tr>
		  </table>
		</div>
	</div>
</div>
</body>
</html>
