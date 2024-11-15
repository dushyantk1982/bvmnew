<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<!--<link href="stylesheet.css" type="text/css" rel="stylesheet">-->
<link href="homestyle.css" type="text/css" rel="stylesheet">
</head>

<body>

	<img src="images/cmat6.png" alt="rotating image" name="cmatrotator" width="235" height="63" id="cmatrotator" />
<!-- Images for Rotation-->
<script type="text/javascript">
	(function() {
	var rotator = document.getElementById('cmatrotator');
	var imageDir = 'images/';
	var delayInSeconds = 1;
	var images = ['cmat7.png','cmat8.png','cmat9.png','cmat6.png'];
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
