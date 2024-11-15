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
.style7 {font-size: 24px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #04093C;font-weight:900;}
-->
</style>


</head>

<body>
<form action="chksyllab.php?id=chksyllab" method="post">
<div class="container">
	<table align="left" width="60%">
		<tr><td></td></tr><tr><td></td></tr>
		<tr align="center" valign="middle">
			<td width="60%" align="center" valign="middle">
				<select name="str">
					<option value="">Select Course</option>
					<option value="MBA">MBA</option>
					<option value="MCA">MCA</option>
					<option value="BBA">BBA</option>
					<option value="BCA(O)">BCA(Old Batches)</option>
					<option value="BCA">BCA(New Batches)</option>
					<option value="BCA(M)">BCA(MCRPV)</option>
					<option value="BCOM">B.Com</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="Get Syllabus" />
			</td>
		</tr>
	</table>
</div>
</form>
</body>


<body class="pagefont">
	<p>
	  <?php 
	  if(@$_REQUEST['submit'])
	{
	
	$cr=$_POST['str'];
	?>
      <!--  <table align="center" width="80%"><tr><td align="center" valign="top"></td></tr></table>--><br />
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
  
  <?php } else if(strcmp($cr,'BCA(O)')==0){?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">BCA (Jiwaji) Syllabus </td><td align="center" width="30%">
  <a href="../syllabus/BCA20011-2014-College.pdf" target="_blank">Download</a></td></tr></table>
  
  <?php } else if(strcmp($cr,'BBA')==0){?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">BBA II Sem</td><td align="center" width="30%">
  <a href="../syllabus/(21) B B A - II Sem. Exam. May-June - 2014.pdf" target="_blank">Download</a><br /></td></tr>
  <tr><td align="left" width="30%">BBA IV Sem</td><td align="center" width="30%">
  <a href="../syllabus/(22) B B A - IV Sem. Exam. May-June - 2014.pdf" target="_blank">Download</a></td></tr><tr><td align="left" width="30%">BBA VI Sem</td><td align="center" width="30%">
  <a href="../syllabus/(23) B B A - VI Sem. Exam. May-June - 2014.pdf" target="_blank">Download</a></td></tr></table>
  
  <?php } else if(strcmp($cr,'BCOM')==0){?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">Bcom I Sem</td><td align="center" width="30%">
  <a href="../syllabus/Bcom/B.Com. I Year (I Sem.) Computer Application.pdf" target="_blank">Download</a><br /></td></tr>
  <tr><td align="left" width="30%">Bcom II Sem</td><td align="center" width="30%">
  <a href="../syllabus/Bcom/B.Com. I Year (II Sem.) Computer Application.pdf" target="_blank">Download</a></td></tr><tr><td align="left" width="30%">Bcom III sem</td><td align="center" width="30%">
  <a href="../syllabus/Bcom/B.Com. II Year (III Sem.) Computer Application.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">Bcom IV sem</td><td align="center" width="30%">
  <a href="../syllabus/Bcom/B.Com. II Year (IV Sem.) Computer Application.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">Bcom V sem</td><td align="center" width="30%">
  <a href="../syllabus/Bcom/B.Com. III Year (V Sem.) Computer Application.pdf" target="_blank">Download</a></td></tr>
  <tr><td align="left" width="30%">Bcom VI sem</td><td align="center" width="30%">
  <a href="../syllabus/Bcom/B.Com. III Year (VI Sem.) Computer Application.pdf" target="_blank">Download</a></td></tr>
  </table>
  
  <?php } else{?>
  <table align="center" width="60%" border="1"><tr>
  <td align="left" width="30%">
  BCA(MCRPV) Syllabus</td><td align="center" width="30%">
  <a href="../syllabus/BCA_2011.pdf" target="_blank">Download</a></td></tr></table>
  <?php }}?>

</body>


</html>
