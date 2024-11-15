<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>
<script type="text/javascript">
function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}
$(function(){
        $( "#datepicker" ).datepicker();
        $("#icon").click(function() { 
            $("#datepicker").datepicker( "show" );
        })
    });
   function show() { document.getElementById('text').style.display = 'block'; }
   function show1() { document.getElementById('text1').style.display = 'block'; }
   function show2() { document.getElementById('text2').style.display = 'block'; }
   function hide() { document.getElementById('text').style.display = 'none'; }
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
 
      xmlhttp.open("GET","demo.php?opt="+str, true);
      xmlhttp.send();
  }
   function update1(str)
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
          document.getElementById("data1").innerHTML = xmlhttp.responseText;
        }
      }
 
      xmlhttp.open("GET","verient.php?opt1="+str, true);
      xmlhttp.send();
  }
  
   function update2(str)
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
          document.getElementById("data2").innerHTML = xmlhttp.responseText;
        }
      }
 
      xmlhttp.open("GET","model.php?opt1="+str, true);
      xmlhttp.send();
  }
  
  function update3(str)
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
          document.getElementById("data3").innerHTML = xmlhttp.responseText;
        }
      }
 
      xmlhttp.open("GET","price.php?opt3="+str, true);
      xmlhttp.send();
  }
  
  function update4(str)
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
          document.getElementById("data4").innerHTML = xmlhttp.responseText;
        }
      }
 
      xmlhttp.open("GET","place.php?opt4="+str, true);
      xmlhttp.send();
  }
  
  function update5(str)
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
          document.getElementById("data5").innerHTML = xmlhttp.responseText;
        }
      }
 
      xmlhttp.open("GET","zone.php?opt5="+str, true);
      xmlhttp.send();
  }
</script>
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

</head>

<body>
<?php
	
	include("dbcon.php");
	
?>
<form action="motorcalculator.php" method="post">
<table height="408" width="100%" align="center" border="0" bgcolor="#E8E8E8" bordercolor="#E8E8E8">
	<tr>
		<td valign="top" width="80%" align="left" bgcolor="#008B00" colspan="3" height="2"><font color="#FFFFFF">Motor Calculator</font></td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Branch&nbsp;&nbsp;<input name="branch" type="text" size="30" style="background-color:#CCCCCC;" /><br /><?php $_POST['branch']=$branch; ?>
			Retailer&nbsp;<input type="text" name="retailer" size="30" style="background-color:#CCCCCC;" /></td><?php $_POST['retailer']=$retailer; ?>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Employee&nbsp; <input type="text" name="employee" size="40" style="background-color:#CCCCCC;" /><br /><?php $_POST['employee']=$employee; ?>
			Distributor <input type="text" name="distributor" size="40" style="background-color:#CCCCCC;" /><br /><?php $_POST['distributor']=$distributor; ?>
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			<input type="radio" name="policy_type" value="package" />Package Policy&nbsp;<input type="radio" name="policy_type" value="act_libility" />Act Libiliaty Policy
		</td><?php $_POST['policy_type']=$policy_type; ?>
		<td align="left" bgcolor="#E8E8E8" height="1">
		<?php
						
						$res=mysql_query("select distinct(product_name) from product_detail",$conn);
						
		?>
			Product<select name="product_name" onchange="update(this.value)">
				<option value="">--Select--</option>
				
				<?php
	
	while($r=mysql_fetch_array($res))
	{
		?>
								  <option value="<?php echo $r['product_name']; ?>"><?php echo $r['product_name']; ?></option>
        
		<?php
	}
	$_POST['product_name']=$product_name;				?>							  
		                         
                                </select>
				
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Vehicle Type<select name="vehicle" id="data" onchange="update1(this.value)">
				<option value="">--Select--</option>
				 </select><?php $_POST['vehicle']=$vehicle; ?>
		</td>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Varient Type <select name="verient" id="data1" onchange="update2(this.value)">
				<option value="">--Select--</option>
				</select><?php $_POST['verient']=$verient; ?>
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			Model&nbsp;<select name="model" id="data2" onchange="update3(this.value)">
				<option value="">--Select--</option>
				</select><?php $_POST['model']=$model; ?>
		</td>
		<td align="left" bgcolor="#E8E8E8" height="1">
		<label id="data3"></label>
		</td>
	</tr>
	<tr>
		<td align="left" bgcolor="#E8E8E8">
		<?php
			$res1=mysql_query("select distinct(rto_state) from rto_area",$conn);
		?>
			RTO State<select name="rtostate" onchange="update4(this.value)">
						<option value="">--SELECT--</option>
			<?php
				while($r1=mysql_fetch_array($res1))
				{
			?>
			<option value="<?php echo $r1['rto_state']; ?>"><?php echo $r1['rto_state']; ?></option>
				<?php 
        		}
				mysql_close($conn);
				$_POST['rtostate']=$rtostate;
				?>
			</select>
			
		</td>
	  <td align="left" bgcolor="#E8E8E8" height="1">
			RTO Place&nbsp;<select name="rtoplace" id="data4" onchange="update5(this.value)">
						<option value="">--SELECT--</option>
						</select><?php $_POST['rtoplace']=$rtoplace; ?>
						<!--<input type="text" name="zone" id="data5" value="" />-->
					<label id="data5"></label>
	  </td>
	</tr>
	<div class="layer1">
	<tr>
		<td height="29" align="left" bgcolor="#E8E8E8">
			Praposal Type : 
			  <input type="radio" name="ptype" value="new" onclick="show();" />New&nbsp;<input type="radio" name="ptype" value="renew" onclick="show();" />Renewal
		</td><?php $_POST['ptype']=$ptype; ?>
		<td align="left" bgcolor="#E8E8E8">
			<input name="mfr" type="text" id="text" onclick="setVisibility('sub3','inline')" size="10" placeholder="Year of MFR" style="background-color:#CCCCCC; display: none;" />
		</td><?php $_POST['mfr']=$mfr; ?>
	</tr></div>
	<tr>
		<td align="left" bgcolor="#E8E8E8" height="1">
			<div id="sub3">Purchase Date&nbsp;<input name="purdate" type="date" id="datepicker" size="9" placeholder="Purchase Date" style="background-color:#CCCCCC;" /></div>
		</td><?php $_POST['purdate']=$purdate; ?>
		<td align="left" bgcolor="#E8E8E8">
			Previous Insurence Policy of same product : <input type="radio" name="prevstatus" value="yes" />Yes&nbsp;<input type="radio" name="prevstatus" value="no" onclick="setVisibility('sub4','inline')" />No
		</td><?php $_POST['prevstatus']=$prevstatus; ?>
	</tr>
	<tr>
		<td height="20" align="left" bgcolor="#E8E8E8">
			<div id="sub4">Select Priod <input type="radio" name="period" value="oneyr" onclick="setVisibility('sub5','inline')" />1 Year
				<input type="radio" name="period" value="short" onclick="setVisibility('sub5','inline')"/>Short Term
			</div><?php $_POST['period']=$period; ?>
	  </td>
		<td align="left" bgcolor="#E8E8E8">
	<div id="sub5">From<input type="text" id="area" name="from" ondblclick="setVisibility('sub6','inline')" /> To <input type="area" name="to" id="area" ondblclick="setVisibility('sub6','inline')" /></div><?php $_POST['from']=$from;
											   $_POST['to']=$to;
										 ?>
		</td>
	</tr>
	
	<tr>
		<td height="16">
			<div id="sub6">
				<table><tr><td>
				Vehicle Age&nbsp;<input type="text" name="vh_age" value="0" />&nbsp;&nbsp;
				</td><?php $_POST['vh_age']=$vh_age; ?><td>
				Showroom Price&nbsp;<input type="text" name="price" />
				</td><?php $_POST['price']=$price; ?>
				<td>
				Basic IDV&nbsp;<input type="text" name="idv" />
				</td><?php $_POST['idv']=$idv; ?></tr>
				<tr><td>
				Customer Type&nbsp;&nbsp;Individual<input type="radio" name="cust_type" value="indivudual" onclick="setVisibility('sub7','inline')" />&nbsp;Corporate<input type="radio" name="cust_type" value="corporate" /><?php $_POST['cust_type']=$cust_type; ?>
				</td></tr></table>
		  </div>
	  </td>
	</tr>
	<tr>
		<td>
		<div id="sub7">
		<table width="100%">
			<tr>
				<td>
					TPPD Restricted : Yes<input type="radio" name="tppd" value="yes" />
					&nbsp;&nbsp;No<input type="radio" name="tppd" value="no" />								
				</td><?php $_POST['tppd']=$tppd; ?>
				<td>
					Non Elect Accessary : Yes<input type="radio" name="nonelectaccess" value="yes" />
					&nbsp;&nbsp;No<input type="radio" name="nonelectaccess" value="no" />	
					<?php $_POST['nonelectaccess']=$nonelectaccess; ?>							
					&nbsp;&nbsp;<input type="text" name="nonaccval" value="0" />								
				</td><?php $_POST['nonaccval']=$nonaccval; ?>
			</tr>
			<tr>
				<td>
					Seating Capacity &nbsp;1+&nbsp;<input type="text" name="seatcap" value="0" size="3" />
					&nbsp;=&nbsp;<input type="text" name="seatcap" value="1" size="3" />
				</td><?php $_POST['seatcap']=$seatcap; ?>
				<td>
					Elect Accessary : Yes<input type="radio" name="electaccess" value="yes" />
					&nbsp;&nbsp;No<input type="radio" name="electaccess" value="no" />
					<?php $_POST['electaccess']=$electaccess; ?>								
					&nbsp;&nbsp;<input type="text" name="accsval" value="0" />								
				</td><?php $_POST['accsva']=$accsval; ?>
			</tr>
			<tr>
				<td>
					Petrol&nbsp;<input type="radio" name="fuel_type" value="petrol" />&nbsp;
					Diesel&nbsp;<input type="radio" name="fuel_type" value="diesel" />&nbsp;
					CNG / LPG &nbsp;<input type="radio" name="fuel_type" value="cng_lpg" />&nbsp;
					Company&nbsp;<input type="radio" name="fuel_type" value="company" />&nbsp;
				</td><?php $_POST['fuel_type']=$fuel_type; ?>
				<td>
					Total IDV - <input type="text" name="tidv" value="" />
				</td><?php $_POST['tidv']=$tidv; ?>
			</tr>
			<tr>
				<td>
					Unname Passangers Labour/Coolie<select name="unname_pass">
					<option value="">Select</option>
					<option value="0">0.00</option>
					<option value="10000">10000</option>
					<option value="20000">20000</option>
					<option value="30000">30000</option>
					<option value="40000">40000</option>
					<option value="50000">50000</option>
					<option value="60000">60000</option>
					<option value="70000">70000</option>
					<option value="80000">80000</option>
					<option value="90000">90000</option>
					<option value="100000">100000</option>
					<option value="110000">110000</option>
					<option value="120000">120000</option>
					<option value="130000">130000</option>
					<option value="140000">140000</option>
					<option value="150000">150000</option>
					<option value="160000">160000</option>
					<option value="170000">170000</option>
					<option value="180000">180000</option>
					<option value="190000">190000</option>
					<option value="200000">200000</option>
					</select>
					<?php $_POST['unname_pass']=$unnam_pass; ?>
				</td>
				<td>
					Driving Tution : &nbsp;Yes<input type="radio" name="dr_tution" value="yes" />
					&nbsp;no<input type="radio" name="dr_tution" value="no" />
				</td><?php $_POST['dr_tution']=$dr_tution; ?>
			</tr>
			<tr>
				<td>
					Labour/Coolie&nbsp;<input type="text" name="labour" />
					<?php $_POST['labour']=$labour; ?>
				</td>
				<td>
					Non Faire Passenger&nbsp;<input type="text" name="nonfairpass" />
					<?php $_POST['nonfairpass']=$nonfairpass; ?>
				</td>
			</tr>
			<tr>
				<td>
					Discount/Loading&nbsp;<input type="text" name="discount" />
					<?php $_POST['discount']=$discount; ?>
				</td>
				<td>
					Quotation Type&nbsp;<select name="qtype">
											<option value="normal">Normal</option>
											<option value="medium">Medium</option>
											<option value="low">Low</option>
										</select>
					<?php $_POST['qtype']=$qtype; ?>
				</td>
			</tr>
			<tr>
				<td>
					Body Type&nbsp;<input type="text" name="bodytype" />
					<?php $_POST['bodytype']=$bodytype; ?>
				</td>
				<td>
					Color&nbsp;<input type="text" name="color" />
					<?php $_POST['color']=$color; ?>
				</td>
			</tr>
			<tr>
				<td>
					KM Reading&nbsp;<input type="text" name="kmreading" />
					<?php $_POST['kmreading']=$kmreading; ?>
				</td>
				<td>
					Vehile No&nbsp;<input type="text" name="vehicleno" />
					<?php $_POST['vehicleno']=$vehicleno; ?>
				</td>
			</tr>
			<tr>
				<td>
					Engine No.&nbsp;<input type="text" name="engineno" />
					<?php $_POST['engineno']=$engineno; ?>
				</td>
				<td>
					Chassis No&nbsp;<input type="text" name="chassisno" />
					<?php $_POST['chassisno']=$chassisno; ?>
				</td>
			</tr>
			
		</table>
		<table border="1" style=" border:solid thin #000033;">
			<tr><td>Select</td><td>Company<br />Name</td><td>Minimum<br />Discount</td><td>Maximum<br />Discount</td><td>Service<br />Charge</td><td>R<br />Capping</td><td>R<br />Mincode</td><td>R<br />Maxcode</td><td>Month<br />From</td><td>Month<br />to</td><td>Discount<br />to</td><td>Other<br />Ins<br />Com</td><td>Apply<br />Type</td><td>Loading</td><td>R<br />Code</td><td>R<br />value</td>
			</tr>
			<?php
				include('dbcon.php');
  //echo '<option>-Select-</option>';
$res=mysql_query("select * from bank_detail",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	
			echo "<tr><td><input type=checkbox name=relience /></td><td>".$r['bank']."</td><td>".$r['min_disc']."</td><td>".$r['max_disc']."</td><td>".$r['service_chrg']."</td><td>".$r['r_capp']."</td><td>".$r['r_min']."</td><td>".$r['r_max']."</td><td>".$r['month_fr']."</td><td>".$r['month_to']."</td><td>".$r['disc_to']."</td><td>".$r['oth_ins_com']."</td><td>".$r['app_type']."</td><td>".$r['loading']."</td><td>".$r['r_code']."</td><td>".$r['r_value']."</td></tr>";
				}?>
			<input type="submit" name="submit" value="submit" />		
		</table>
		</div>
		</td>
	</tr>
	
</table>
</form>

<?php
if(@$_REQUEST['submit'])
{

					
}
?>

</body>
</html>
