<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="images/logo.png" />

<!-- Start visualslideshow.com HEAD section -->
<link rel="stylesheet" type="text/css" href="images/engine/css/slideshow.css" media="screen" /> 
<style type="text/css">
.slideshow a#vlb{display:none}
#Layer16 {
	position:absolute;
	width:245px;
	height:38px;
	z-index:10000;
	left: 29px;
	top: 29px;
	background-color: #FFCC66;
}
.style29 {font-weight: bold}
.style30 {font-size: 18px}
.style31 {
	font-size: 24px;
	color: #000066;
}
</style> 
<script type="text/javascript" src="images/engine/js/mootools.js"></script> 
<script type="text/javascript" src="images/engine/js/visualslideshow.js"></script> 
<!-- End visualslideshow.com HEAD section -->
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body>
<table width="90%%" height="525" align="center" background="images/culttext.jpg" >
	<tr valign="top">
    	<td width="96%" valign="middle" >
		<div align="center">
        	<p class="style31">
				<strong>Thank You&nbsp;
					<font face="Monotype Corsiva" color="#990000" size="+3">
						<?php echo $_REQUEST['id']; ?>
					</font>
				</strong>
			</p>
        	<p>
				<span class="style31">
					<strong>We will get back to you very soon</strong>
				</span>.
			</p>
        	<p>&nbsp;</p>
        	<p>&nbsp;</p>
        	<p>&nbsp;</p>
      	</div>
		<td>
	</tr>
</table>
  
</body>
</html>
