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
	$branch=$_POST['branch'];
	$retailer=$_POST['retailer'];
	$empolyee=$_POST['employee'];
	$distributor=$_POST['distributor'];
	$policy=$_POST['policy_type'];
	$product_name=$_POST['product_name'];
	$vehicle=$_POST['vehicle'];
	$verient=$_POST['verient'];
	$model=$_POST['model'];
	$rtostate=$_POST['rtostate'];
	$rtoplace=$_POST['rtoplace'];
	$ptyoe=$_POST['ptype'];
	$mfr=$_POST['mfr'];
	$purdate=$_POST['purdate'];
	$prevstatus=$_POST['prevstatus'];
	$period=$_POST['period'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$vh_age=$_POST['vh_age'];
	$cust_type=$_POST['cust_type'];
	$tppd=$_POST['tppd'];
	$nonelectaccess=$_POST['nonelectaccess'];
	$nonaccval=$_POST['nonaccval'];
	$seatcap=$_POST['seatcap'];
	$electaccess=$_POST['electaccess'];
	$accsva=$_POST['accsva'];
	$fuel_type=$_POST['fuel_type'];
	$tidv=$_POST['tidv'];
	$unname_pass=$_POST['unname_pass'];
	$dr_tution=$_POST['dr_tution'];
	$labour=$_POST['labour'];
	$nonfairpass=$_POST['nonfairpass'];
	$discount=$_POST['discount'];
	$qtype=$_POST['qtype'];
	$bodytype=$_POST['bodytype'];
	$color=$_POST['color'];
	$kmreading=$_POST['kmreading'];
	$vehicleno=$_POST['vehicleno'];
	$engineno=$_POST['engineno'];
	$chassisno=$_POST['chassisno'];
					
					$rtoplace=str_replace("_"," ",$rtoplace);
					//$product_name=str_replace("_"," ",$product_name);
					$model=str_replace("_"," ",$model);
					include('dbcon.php');
					$res=mysql_query("select * from product_detail where model_name='".$model."'",$conn);
					while($r=mysql_fetch_array($res))
					{
						$price=$r['ex_showroom'];
						$idv=$r['basic_idv'];
						$capacity=$r['capacity'];
					}
					$res1=mysql_query("select * from rto_area where rto_place='".$rtoplace."'",$conn);
					while($r1=mysql_fetch_array($res1))
					{
						$zone=$r1['zone'];
						//echo $zone;
					}
					mysql_close($conn);
					//echo $product_name;
					$product_name=str_replace(" ","_",$product_name);
					//echo $product_name;
					//echo $zone;
					$product='GCV_PRIVATE_CARRIER_3_WHEELERS_AND_PEDAL_CYCLE';
					$product1='TWO_WHEELER';
					if(strcmp($product,$product) == 0)
					{
						if($zone=='A')
						{
						echo 'A';
						}
						else if($zone=='B')
						{
						$rate=1.159;
						}
						else
						{
						$rate=1.148;
						}
						$basic_od=round(($idv*$rate)/100,2);
						$basic_tp=2928;
						$owner_drive_pa=100;
						$driver=50;
						$total_lib=$basic_tp+$owner_drive_pa+$driver;
						$net_od_tp=$basic_od+$total_lib;
						$tax=round(($net_od_tp*12.36)/100,2);
						$tot_premium=round($net_od_tp+$tax,2);
						echo "<table hight=500 width=100%><tr>";
						echo "<td><table hight=100 width=250 border=1><tr bgcolor=#CCCCCC><td>Own Damage</td><td>Rate</td><td>Amount</td></tr>";
						echo "<tr><td>Basic OD</td><td>".$rate."</td><td>".$basic_od."</td></tr>";
						echo "<tr><td>Total</td><td>0</td><td>".$basic_od."</td></tr></table></td>";
						echo "<td><table hight=100 width=300 border=1><tr bgcolor=#CCCCCC><td>Liability</td><td>Status</td><td>Amount</td></tr>";
						echo "<tr><td>Basic TP</td><td>YES</td><td>".$basic_tp."</td></tr>";
						echo "<tr><td>Owner Driver PA</td><td>YES</td><td>".$owner_drive_pa."</td></tr>";
						echo "<tr><td>Driver</td><td>YES</td><td>".$driver."</td></tr>";
						echo "<tr><td>Total</td><td>0</td><td>".$total_lib."</td></tr></table></td></tr>";
						echo "<tr><td colspan=2><table hight=100 width=650 border=1><tr><td>Net OD + TP :<td> ".$net_od_tp."</td><td>Tax :</td><td>".$tax."</td><td>Total Premium :</td><td>".$tot_premium."</td></tr>";
						echo "<tr><td>Service Charge :<td> </td><td>Total Payment :</td><td>".$tot_premium."</td><td>Payment Mode :</td><td> </td></tr></table>";
						echo "</td></tr></table>";
						//echo $zone;
						//echo $product_name;
					}
					else if(strcmp($product_name,$product1)==0)
					{
						if($capacity<150)
						{
						$rate=1.676;
						}
						else if($capacity>=150 && $capacity<350)
						{
						$rate=1.760;
						}
						else
						{
						$rate=1.844;
						}
						$basic_od=round(($idv*$rate)/100,2);
						if($capacity<=75)
						{$basic_tp=414;}
						else if($capacity>75 && $capacity<=150)
						{$basic_tp=422;}
						else if($capacity>150 && $capacity<=350)
						{$basic_tp=420;}
						else
						{$basic_tp=804;}
						$owner_drive_pa=100;
						$driver=50;
						$total_lib=$basic_tp+$owner_drive_pa+$driver;
						$net_od_tp=$basic_od+$total_lib;
						$tax=round(($net_od_tp*12.36)/100,2);
						$tot_premium=round($net_od_tp+$tax,2);
						echo "<table hight=500 width=100%><tr>";
						echo "<td><table hight=100 width=250 border=1><tr bgcolor=#CCCCCC><td>Own Damage</td><td>Rate</td><td>Amount</td></tr>";
						echo "<tr><td>Basic OD</td><td>".$rate."</td><td>".$basic_od."</td></tr>";
						echo "<tr><td>Total</td><td>0</td><td>".$basic_od."</td></tr></table></td>";
						echo "<td><table hight=100 width=300 border=1><tr bgcolor=#CCCCCC><td>Liability</td><td>Status</td><td>Amount</td></tr>";
						echo "<tr><td>Basic TP</td><td>YES</td><td>".$basic_tp."</td></tr>";
						echo "<tr><td>Owner Driver PA</td><td>YES</td><td>".$owner_drive_pa."</td></tr>";
						echo "<tr><td>Driver</td><td>YES</td><td>".$driver."</td></tr>";
						echo "<tr><td>Total</td><td>0</td><td>".$total_lib."</td></tr></table></td></tr>";
						echo "<tr><td colspan=2><table hight=100 width=650 border=1><tr><td>Net OD + TP :<td> ".$net_od_tp."</td><td>Tax :</td><td>".$tax."</td><td>Total Premium :</td><td>".$tot_premium."</td></tr>";
						echo "<tr><td>Service Charge :<td> </td><td>Total Payment :</td><td>".$tot_premium."</td><td>Payment Mode :</td><td> </td></tr></table>";
						echo "</td></tr></table>";
						//echo $zone;
						//echo $product_name;
					}
					/*echo $nonfairpassl
					echo "-";
					echo $labour;
					ehco "-";
					echo $dr_tution;
					echo "-";
					echo $unname_pass;
					ehco "-";
					echo $tidv;
					echo "-";
					echo $fuel_type;
					echo "-";
					echo $accava;
					echo "-";
					echo $electaccess;
					echo "-";
					echo $seatcap;
					echo "-";
					echo $nonaccval;
					echo "-";
					echo $nonelectaccess;
					echo "-";
					echo $tppd;
					echo "-";
					echo $cust_type;
					echo "-";
					echo $vh_age;
					echo "-";
					echo $to;
					echo "-";
					echo $from;
					echo "-";
					echo $period;
					echo "-";
					echo $prevstatus;
					echo "-";
					echo $purdate;
					echo "-";
					echo $mfr;	
					echo "-";
					echo $ptype;
					echo "-";
					echo $zone;
					echo "-";
					echo $rtoplace;
					echo "-";
					echo $rtostate;
					echo $model;
					echo "-";
					echo $price;
					echo "-";
					echo $idv;
					echo "-";
					echo $capacity;
					echo "-";
					echo $verient;
					echo "-";
					echo $branch;
					echo "-";
					echo $retailer;
					echo "-";
					echo $empolyee;
					echo "-";
					echo $distributor;
					echo "-";
					echo $policy;
					echo "-";
					echo $product_name;
					echo "-";
					echo $vehicle;
					echo "-";*/
					echo "There is novalue";
	include("dbcon.php");
	
	
?>
</body>
</html>
