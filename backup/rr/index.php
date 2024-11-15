<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<link href="stylesheet.css" type="text/css" rel="stylesheet">
<link href="imgstyle.css" type="text/css" rel="stylesheet">
<link href="footerstyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
</head>

<body>
<div class="wrapper">
	<div class="head">
		<div class="layer" align="right">
			<a href="index.php?id=51">Admission Enquiry</a>|
			<a href="index.php?id=4">Site Map</a>|
			<a href="index.php?id=52">Contact Us</a>|
		</div>
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
					<td width="25%"><!--<div align="left"><a href="https://www.facebook.com/bvmcme" title="FaceBook"><img src="images/fb.png" height="15" width="15" /></a>&nbsp;<a href="https://www.google.com/a/bvmgroup.org/ServiceLogin?service=mail&amp;passive=true&amp;rm=false&amp;continue=http://mail.google.com/a/bvmgroup.org/&amp;ltmpl=default&amp;ltmplcache=2" target="_blank" title="Gmail"><img src="images/gmail.png" height="17" width="17" /></a>&nbsp;<a href="admin/adlogin.php" title="Admin"><img src="images/lock.gif" height="15" width="15" /></a></div>--></td>
					<td width="75%">
						<div align="center">YOUR VISION OUR MISSION........</div>
						</td></tr>
			</table>
			<span style="color: #B7B7B7">
				<marquee behavior="scroll" direction="left" style="background-color:#990000;">
					<span class="style44" style="font-family: &quot;Courier New&quot;, Courier, monospace">Admissions are open for 2014-15 | 24 x 7 Helpline:9301129088/9303714455 </span>
				</marquee>
			</span>
		</div>
		<div class="layer2">
			<?php include('menu/index.html'); ?>
		</div>
	</div>
	<div class="container">
		<!--<div class="left"></div>-->
		<div class="content" align="center">
		<?php
			if (@$_REQUEST['id']==1){
		?>
		<iframe align="middle" height="670" width="100%" src="vision.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==2){
		?>
		<iframe align="middle" height="670" width="100%" src="governence.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==3){
		?>
		<iframe align="middle" height="670" width="100%" src="institutes.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==4){
		?>
		<iframe align="middle" height="670" width="100%" src="reach.php" name="index"></iframe>
		
		<?php
			} else if(@$_REQUEST['id']==11){
		?>
		<iframe align="middle" height="670" width="100%" src="calender.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==12){
		?>
		<iframe align="middle" height="670" width="100%" src="chksyllab.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==13){
		?>
		<iframe align="middle" height="670" width="100%" src="teaching.php" name="index"></iframe>
		
		<?php
			} else if(@$_REQUEST['id']==21){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/mba.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==22){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/mca.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==23){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/bba.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==24){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/bca.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==25){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/bcom.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==26){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/bed.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==27){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/ded.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==28){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/ntt.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==29){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/pgdca.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==30){
		?>
		<iframe align="middle" height="670" width="100%" src="courses/dca.php" name="index"></iframe>
		
		<?php
			} else if(@$_REQUEST['id']==31){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/tpomsg.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.1){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2000.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.2){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2001.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.3){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2002.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.4){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2003.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.5){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2004.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.6){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2005.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.7){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2006.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.8){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2007.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==32.9){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mba2008.php" name="index"></iframe>
		
		<?php
			} else if(@$_REQUEST['id']==33.1){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mca1998.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==33.2){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mca1999.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==33.3){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mca2000.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==33.4){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mca2001.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==33.5){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mca2002.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==33.6){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/mca2003.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==36){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/recruiter.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==37){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/brochure.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==38){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/corpdoiser.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==39){
		?>
		<iframe align="middle" height="670" width="100%" src="placement/internship.php" name="index"></iframe>
		
		<?php
			} else if(@$_REQUEST['id']==41){
		?>
		<iframe align="middle" height="670" width="100%" src="gallery/conference/fdi/conference.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==42.1){
		?>
		<iframe align="middle" height="670" width="100%" src="gallery/harmony/2013/harmony.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==43){
		?>
		<iframe align="middle" height="670" width="100%" src="gallery/campus/campus.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==44){
		?>
		<iframe align="middle" height="670" width="100%" src="gallery/tour.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==45){
		?>
		<iframe align="middle" height="670" width="100%" src="gallery/event.php" name="index"></iframe>
		
		<?php
			} else if(@$_REQUEST['id']==51){
		?>
		<iframe align="middle" height="670" width="100%" src="enquiryform.php" name="index"></iframe>
		<?php
			} else if(@$_REQUEST['id']==52){
		?>
		<iframe align="middle" height="670" width="100%" src="contact.php" name="index"></iframe>
		
		<?php
			} else if(@$_REQUEST['id']==61){
		?>
		<iframe align="middle" height="670" width="100%" src="developed.php" name="index"></iframe>
		
		
		
		<?php }else{?>
		<iframe align="middle" height="650" width="100%" src="home.php" name="index"></iframe>
		<?php
		}
		?>
		</div>
		<div class="right">
			<?php include("cpdesk.php"); ?>
			<?php include("cmatmsg.php"); ?>
			<!--<img src="images/event.jpg" width="235" height="43" align="top" />
			<marquee direction="up" scrolldelay="200" onmouseover="this.stop()" onmouseout=						"this.start()" >
			<?php //include("event.php"); ?></marquee>-->
			<img src="images/whybvm.jpg" width="240" height="73" align="top" /><br />
			<div class="imgcontainer">
			<div class="imghead">
				<div class="transbox">Get in Touch</div>
				<div class="transbox1">Contact: 0751-2341161<br />E-mail  : info@bvmgroup.org</div></div></div>
		</div>
	</div>
	
	<!--<div class="footer">-->
		<div class="footer1" align="center">
					<!--<div class="footerlayer1">
						Follow
					</div>
					<div class="footerlayer2" align="left"><?php //include('footer.php');?></div>
					<div class="footerlayer3">-->
						<table width="984">
				<tr>
					<td width="80%" align="center">&copy;BVM College of Management Education, Gwalior. All rights are reserved.					</td>
					<td width="20%" align="center">
						<a href="index.php?id=61" title="Asst. Prof. Dushyant Upadhyay IT Dept.">Developed By</a>					</td>
				</tr>
		  </table>
		</div>			<!--</div></div>--><!--<table width="984">
				<tr>
					<td width="92%" align="center">
						<?php //include('footer.php');?>
					</td>
					<td width="8%" align="right">	
						<div align="left"><a href="https://www.facebook.com/bvmcme" title="FaceBook"><img src="images/fb.png" height="20" width="20" /></a>&nbsp;<a href="https://www.google.com/a/bvmgroup.org/ServiceLogin?service=mail&amp;passive=true&amp;rm=false&amp;continue=http://mail.google.com/a/bvmgroup.org/&amp;ltmpl=default&amp;ltmplcache=2" target="_blank" title="Gmail"><img src="images/gmail.png" height="22" width="22" /></a>&nbsp;<a href="admin/adlogin.php" title="Admin"><img src="images/lock.gif" height="20" width="20" /></a>
						</div>
					</td>
				</tr>
			</table>-->
		<!--</div>-->
		<!--<div class="footer2 style1"><hr />
			<table width="984">
				<tr>
					<td width="92%" align="center">&copy;BVM College of Management Education, Gwalior. All rights are reserved.					</td>
					<td width="8%" align="right">
						<a href="index.php?id=61" title="Asst. Prof. Dushyant Upadhyay IT Dept.">Developed By</a>					</td>
				</tr>
		  </table>
		</div>-->
	<!--</div>
</div>-->
</body>
</html>
