<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>
<style type="text/css">
div
{
position:absolute;
display:none;
}

.layer1
{
margin-top:1px;
}
</style>
<script type="text/javascript">

function update(str)
   {
   //alert(str);
      var xmlhttp;
 
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }	
 
      xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
          document.getElementById("data").innerHTML = xmlhttp.responseText;
        }
      }
 		/*document.write("GET","idv.php?opt="+str,true);*/
      xmlhttp.open("GET","idv.php?opt="+str, true);
      xmlhttp.send();
  }

</script>

</head>

<body>
<?php
	
	include("dbcon.php");
	
?>
<form action="insert_product_detail.php" method="post">
<table height="177" width="100%" align="center" border="0" bgcolor="#E8E8E8" bordercolor="#E8E8E8">
	<tr>
		<td valign="top" width="80%" align="left" bgcolor="#008B00" colspan="4" height="1"><font color="#FFFFFF">Product Detail Form</font></td>
	</tr>
	<tr>
		<td height="28" align="left" bgcolor="#E8E8E8" colspan="4">
			Product Name&nbsp;&nbsp;
			<input name="pro_name" type="text" size="120" style="background-color:#CCCCCC;" />
	  </td>
	  <tr>
		<td align="left" bgcolor="#E8E8E8">
			Vehicle Type
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="vh_type" size="40" style="background-color:#CCCCCC;" />
		</td>
		<td height="26" align="left" bgcolor="#E8E8E8">
			Verient Type
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="vr_type" size="40" style="background-color:#CCCCCC;" />
	    </td>
	  <tr>
		<td align="left" bgcolor="#E8E8E8">
			Model Id
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="model_id" size="40" style="background-color:#CCCCCC;" />
		</td>
		<td height="30" align="left" bgcolor="#E8E8E8">
			Model Name
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="model_name" size="40" style="background-color:#CCCCCC;" />
	 	</td>
	  <tr>
		<td align="left" bgcolor="#E8E8E8">
			Passenger
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="passenger" size="40" style="background-color:#CCCCCC;" />
		</td>
		<td height="28" align="left" bgcolor="#E8E8E8">
			Capacity
		</td>
		<td align="left" bgcolor="#E8E8E8">
			  <input type="text" name="capacity" size="40" style="background-color:#CCCCCC;" />
	  </td>
	  <tr>
		<td align="left" bgcolor="#E8E8E8">
			Ex-Showroom Price
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="ex_showroom" size="40" style="background-color:#CCCCCC;" onclick="update(this.value)" /><label id="data"></label><!--<button onClick="calculate()">Calculate area</button>-->
		</td>
		<td height="30" align="left" bgcolor="#E8E8E8">
			Basic IDV
		</td>
		<td align="left" bgcolor="#E8E8E8">
			<input type="text" name="bs_idv" size="40" style="background-color:#CCCCCC;" />
	    </td>
		
	</tr>
	<tr align="center">
		<td align="center" colspan="4"><input type="submit" name="submit" value="Submit" /></td>
	</tr>
	
</table>
<?php $_POST['pro_name']=$pro_name; ?>
<?php $_POST['vh_type']=$vh_type; ?>
<?php $_POST['vr_type']=$vr_type; ?>
<?php $_POST['model_id']=$model_id; ?>
<?php $_POST['model_name']=$model_name; ?>
<?php $_POST['passenger']=$passenger; ?>	
<?php $_POST['capacity']=$capacity; ?>	
<?php $_POST['ex_showroom']=$ex_showroom; ?>
<?php $_POST['bs_idv']=$bs_idv; ?>		
</form>

<?php
if(@$_REQUEST['msg']=='ok')
		{
		echo "Record Inserted Successfully";
		
		}
	else if(@$_REQUEST['msg']=='err')
	{
		echo "Please Insert data in the fields";
	}
?>

</body>
</html>
