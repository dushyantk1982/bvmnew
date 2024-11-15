<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	color: #660000;
}
-->
</style>
</head>
<body class="pagefont">
	<p>
	  <?php
	   
	//$cr=$_POST['str'];
	//$sem=$_POST['sem'];
	$fno=$_GET['fileno'];
	//include('dbcon.php');
	$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
	$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	//echo $r['st_name'];?>
	  &nbsp;&nbsp;
	  <?php
	//echo $r['course'];
	$cr=$r['course'];
	$sem=$r['sem'];
	}
  
  ?>
      <!--  <table align="center" width="80%"><tr><td align="center" valign="top"><?php //echo $nm; ?></td></tr></table>-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15 style1"><strong><u>Question Bank</u> </strong></span><br />

 <!--MCA-->
  <?php if($cr=='MCA' && $sem==1){ ?>
	<p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MCA 101</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 101.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MCA 102</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 102.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 103</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 103.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 104</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 104.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 105</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 105.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='MCA' && $sem==2){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MCA 201</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 201.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MCA 202</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 202.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 203</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 203.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 204</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 204.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 205</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 205.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='MCA' && $sem==3){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MCA 301</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 301.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MCA 302</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 302.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 303</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 303.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 304</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 304.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 305</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 305.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='MCA' && $sem==4){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MCA 401</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 401.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MCA 402</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 402.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 403</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 403.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 404</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 404.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 405 E1(A)</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 405 (A).pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 405 E1(B)</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 405 (B).pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='MCA' && $sem==5){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MCA 501</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 501.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MCA 502</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 502.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 503</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 503.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 504 (A)</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 504.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 504 (B)</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 504OB.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA 505</td>
  <td align="center" width="30%">
  <a href="QB/MCA/MCA 505.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  
  <!--MBA-->
  <?php }else if($cr=='MBA' && $sem==1){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MBA 101</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 101.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 102</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 102.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 103</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 103.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 104</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 104.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 105</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 105.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 106</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 106.pdf" target="_blank">Download</a></td>
  </tr><tr><td align="left" width="30%">
  MBA 107</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 107.pdf" target="_blank">Download</a></td>
  </tr><tr><td align="left" width="30%">
  MBA 108</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 108.pdf" target="_blank">Download</a></td>
  </tr></table>
  <?php }else if($cr=='MBA' && $sem==2){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MBA 201</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 201.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 202</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 202.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 203</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 203.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 204</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 204.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 205</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 205.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA 206</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 206.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA 207</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 207.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA JU-001</td>
  <td align="center" width="30%">
  <a href="QB/MBA/JU-001.pdf" target="_blank">Download</a></td>
  </tr></table>
  <?php }else if($cr=='MBA' && $sem==3){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MBA 301</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 301.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 302</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 302.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 303</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 303.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA FM-01</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA FM01.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA FM-02</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA FM02.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA IB-01</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA IB01.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA IB-02</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA IB02.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA HR-01</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA HR01.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA HR-02</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA HR02.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA MK-01</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA MK01.pdf" target="_blank">Download</a></td>
  </tr>
  <tr><td align="left" width="30%">
  MBA MK-02</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA MK02.pdf" target="_blank">Download</a></td>
  </tr></table>
  <?php }else if($cr=='MBA' && $sem==4){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MBA 401</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 401.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MBA 402</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA 402.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  FM-03</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 FM03.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  FM04</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 FM04.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  HRM-03</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 HR03.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  HRM-04</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 HR04.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  IB-03</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 IB03.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  IB-04</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 IB04.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MK-03</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 MK03.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MK-04</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 MK04.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  OP-03</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 OP03.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  OP-04</td>
  <td align="center" width="30%">
  <a href="QB/MBA/MBA4 OP04.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  
  
  <!--BBA-->
  <?php }else if($cr=='BBA' && $sem==1){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BBA 101</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 101.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BBA 102</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 102.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 103</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 103.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 104</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 104.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 105</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 105.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BBA' && $sem==2){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BBA 201</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 201.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BBA 202</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 202.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 203</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 203.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 204</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 204.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 205</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 205.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BBA' && $sem==3){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BBA 301</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 301.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BBA 302</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 302.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 303</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 303.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 304</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 304.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 305</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 305.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BBA' && $sem==4){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BBA 401</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 401.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BBA 402</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 402.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 403</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 403.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 404</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 404.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 405</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 405.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 406</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 406.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BBA' && $sem==5){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BBA 501</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 501.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BBA 502</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 502.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 503</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 503.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 504</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 504.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 504 (H.R.M.)</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 504(HRM).pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 505 (H.R.M.)</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 505(HRM).pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 505</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 505.pdf" target="_blank">Download</a></td></td>
  </tr>
  <tr><td align="left" width="30%">
  BBA 506 (M.M.)</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 506(MM).pdf" target="_blank">Download</a></td></td>
  </tr>
  <tr><td align="left" width="30%">
  BBA 506 (H.R.M.)</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 506(HRM).pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BBA' && $sem==6){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BBA 601</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 601.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BBA 602</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 602.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 603</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 603.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 604 HRM</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 604 HRM.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 604 MKT</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 604 MKT.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 605</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 605.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 606 HRM</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 606 HRM.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BBA 606 MKT</td>
  <td align="center" width="30%">
  <a href="QB/BBA/BBA 606 MKT.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  
  
  <!--BCA(JU)-->
  <?php }else if($cr=='BCA' && $sem==1){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 101</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 101.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 102</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 102.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 103</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 103.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 104</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 104.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 105</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 105.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA' && $sem==2){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 201</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 201.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 202</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 202.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 203</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 203.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 204</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 204.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 205</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 205.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA' && $sem==3){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 301</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 301.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 302</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 302.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 303</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 303.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 304</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 304.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 305</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 305.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA' && $sem==4){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 401</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 401.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 402</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 402.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 403</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 403.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 404</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 404.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 405</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 405.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA' && $sem==5){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 501</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 501.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 502</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 502.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 503</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 503.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 504</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 504.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 505</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 505.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA' && $sem==6){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 601</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 601.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 602</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 602.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 603</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 603.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 604</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 604.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 605</td>
  <td align="center" width="30%">
  <a href="QB/BCA/BCA 605.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  
  
  <!--BCA(MCRPV)-->
  <?php }else if($cr=='BCA(M)' && $sem==1){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 101</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/1BCA1.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 102</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/1BCA2.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 103</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/1BCA3.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 104</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/1BCA4.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 105</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/1BCA5.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA(M)' && $sem==2){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 201</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/2BCA1.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 202</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/2BCA2.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 203</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/2BCA3.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 204</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/2BCA4.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 205</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/2BCA5.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA(M)' && $sem==3){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 301</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/3BCA1.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 302</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/3BCA2.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 303</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/3BCA3.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 304</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/3BCA4.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 305</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/3BCA5.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA(M)' && $sem==4){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 401</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/4BCA1.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 402</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/4BCA2.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 403</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/4BCA3.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 404</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/4BCA4.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 405</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/4BCA5.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA(M)' && $sem==5){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 501</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/5BCA1.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 502</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/5BCA2.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 503</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/5BCA3.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 504</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/5BCA4.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 505</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/5BCA5.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  <?php }else if($cr=='BCA(M)' && $sem==6){ ?>
  <p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA 601</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/6BCA1.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  BCA 602</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/6BCA2.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 603</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/6BCA3.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 604</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/6BCA4.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  BCA 605</td>
  <td align="center" width="30%">
  <a href="QB/BCA(M)/6BCA5.pdf" target="_blank">Download</a></td></td>
  </tr></table>
  
  
  <?php } else{?>
  <a href="#" target="_blank">Sorry Wrong File no</a>
  <?php }?>
  
  
</body>
</html>
