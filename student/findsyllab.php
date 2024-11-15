<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style9 {
	font-size: x-large;
	font-weight: bold;
	color: #660000;
}
-->
</style>
</head>
<body class="pagefont">
	<p>
	  <?php 
	
	$fno=$_GET['fileno'];
	//$cr=$_POST['str'];
	
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
      <!--  <table align="center" width="80%"><tr><td align="center" valign="top"></td></tr></table>-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style9"><u>Syllabus</u></span><br />

  <?php if(strcmp($cr,'MCA')==0){?>
<p>&nbsp;</p>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MCA I Sem Grading</td>
  <td align="center" width="30%">
  <a href="../syllabus/I MCA.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MCA II Sem Grading</td>
  <td align="center" width="30%">
  <a href="../syllabus/II MCA.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA III Sem Grading</td>
  <td align="center" width="30%">
  <a href="../syllabus/III MCA.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA IV Sem Grading</td>
  <td align="center" width="30%">
  <a href="../syllabus/IV MCA.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA V Sem Grading</td>
  <td align="center" width="30%"><a href="../syllabus/V MCA (G).pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA V Sem Non Grading</td>
  <td align="center" width="30%"><a href="../syllabus/V MCA.pdf" target="_blank">Download</a></td></tr></table>

<p>&nbsp;</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style9"><u>Scheme</u></span><br />

  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  MCA I Sem Grading</td>
  <td align="center" width="30%">
  <a href="schemes/I MCA.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">
  MCA II Sem Grading</td>
  <td align="center" width="30%">
  <a href="schemes/II MCA.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA III Sem Grading</td>
  <td align="center" width="30%">
  <a href="schemes/III MCA.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA IV Sem Grading</td>
  <td align="center" width="30%">
  <a href="schemes/IV MCA.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA V Sem Grading</td>
  <td align="center" width="30%"><a href="schemes/V MCA.pdf" target="_blank">Download</a></td></td>
  <tr><td align="left" width="30%">
  MCA V Sem Non Grading</td>
  <td align="center" width="30%"><a href="schemes/V MCA_NG.pdf" target="_blank">Download</a></td></tr></table>

  
  <?php }else if(strcmp($cr,'MBA')==0){?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">MBA I Sem </td><td align="center" width="30%">
  <a href="syllabus/MBA/MBA-1 Sylabous.pdf" target="_blank">Download</a></td></tr>
  <tr>
  <td align="left" width="30%">MBA II Sem </td><td align="center" width="30%">
  <a href="syllabus/MBA/MBA-2 Sylabous.pdf" target="_blank">Download</a></td></tr>
  <tr>
  <td align="left" width="30%">MBA III Sem </td><td align="center" width="30%">
  <a href="syllabus/MBA/MBA-3 Sem Sylabous.pdf" target="_blank">Download</a></td></tr>
  <tr>
  <td align="left" width="30%">MBA IV Sem </td><td align="center" width="30%">
  <a href="syllabus/MBA/MBA-4 SEM Sylabous.pdf" target="_blank">Download</a></td></tr></table>
  
  <?php } else if(strcmp($cr,'BCA')==0){?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">BCA (Jiwaji) Syllabus </td><td align="center" width="30%">
  <a href="../syllabus/bca2011-2014-sos.pdf" target="_blank">Download</a></td></tr></table>
  
  <?php } else if(strcmp($cr,'BBA')==0){?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">BBA II Sem</td><td align="center" width="30%">
  <a href="../syllabus/(21) B B A - II Sem. Exam. May-June - 2014.pdf" target="_blank">Download</a><br /></td></tr>
  <tr><td align="left" width="30%">BBA IV Sem</td><td align="center" width="30%">
  <a href="../syllabus/(22) B B A - IV Sem. Exam. May-June - 2014.pdf" target="_blank">Download</a></td></tr><tr><td align="left" width="30%">BBA VI Sem</td><td align="center" width="30%">
  <a href="../syllabus/(23) B B A - VI Sem. Exam. May-June - 2014.pdf" target="_blank">Download</a></td></tr></table>
  
  <?php } else{?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA(MCRPV) Syllabus</td><td align="center" width="30%">
  <a href="../syllabus/BCA_2011.pdf" target="_blank">Download</a></td></tr></table>
  <?php }?>

</body>
</html>
