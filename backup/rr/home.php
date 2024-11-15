<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
<link href="imgstyle.css" type="text/css" rel="stylesheet">
</head>

<body>
<div align="center" class="homehead">
	<img src="images/18.jpg" alt="rotating image" name="rotator" width="640" height="300" id="rotator" />
</div>
<p>&nbsp;</p>
<!--<div align="left" class="homeleft"><img src="images/usefullinks.png" width="200" height="43" />-->
<?php //include("usefullinks.php"); ?>
<!--</div>-->
<div align="left" class="homecenter">
	<div class="homecenter1">
		<img src="images/update1.jpg" width="100" height="30" /><hr />
		<marquee direction="up" scrolldelay="200" onmouseover="this.stop()" onmouseout=						"this.start()" >
			<?php include("update.php"); ?>
		</marquee>
	</div>
	<div class="homecenter2"><!--<br /><br />-->		
		<!--<div class="imgcontainer">
			<div class="imghead">
				<div class="transbox">Get in Touch</div>
				<div class="transbox1">Contact: 0751-2341161<br />E-mail  : info@bvmgroup.org</div></div></div>--><!--<img src="images/get1.jpg" width="240" height="63" align="top" />-->
		<!--<div style="border:thin solid #003333;">--><?php //include("cmatmsg.php"); ?><!--</div>-->
		<!--<img src="images/whybvm.jpg" width="240" height="73" align="top" /><br />-->
	</div>
</div>


<!-- Images for Rotation-->
<script type="text/javascript">
	(function() {
	var rotator = document.getElementById('rotator');
	var imageDir = 'images/';
	var delayInSeconds = 3;
	var images = ['4.jpg','7.jpg','10.jpg','14.jpg','DSC01050.jpg','5.jpg','19.jpg','8.jpg','6.jpg','12.jpg','21.jpg','22.jpg','23.jpg','25.jpg','9.jpg','15.jpg','16.jpg','18.jpg'];
	var num = 0;
	var changeImage = function() {
	var len = images.length;
	rotator.src = imageDir + images[num++];
	if (num == len) {
	num = 0;
	}
	};
	setInterval(changeImage, delayInSeconds * 1000);
	})();
    </script>

</body>
</html>
