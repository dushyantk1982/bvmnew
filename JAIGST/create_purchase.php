<?php 
error_reporting(1);
session_start();
date_default_timezone_set("Asia/Kolkata");
if(isset($_SESSION['login']) && $_SESSION['type']=='Admin')
{
?>
<!DOCTYPE html>
<html lang="en">
<!-- Start HEAD -->
<head>
    <!-- Start META -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Invoice Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="layout" content="main" />
    <!-- End META -->
    <!-- Start MAIN CSS AND JQUERY -->   
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="js/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
    <link href="css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
	<script>
		$(function() {
		$( "#current-pass-control" ).datepicker();
		$( "#current-pass-control1" ).datepicker();
		
	});
  </script>
  <style>
  #body-content
  {
  padding-bottom: 0px !important;
  }
  .application-footer
  {
	      margin-top: 0px !important;
  }
  
  </style>
  <style>
#body-container {
    height: auto;
    min-height: 0% !important;
}
.li
{
	list-style: none;
	display:inline-block;
}
.li a, .current
{
display: block;
padding: 1px;
text-decoration: none;
color: #8A8A8A;
}
  </style>
  <script type="text/javascript">
  	/*function calculate()
	{
		var x=document.getElementById("count");
		for(var i=0;i<=x;i++)
		{
		var a=document.getElementById("qty[]");
		var b=document.getElementById("rate[]");
		/*var d=document.getElementById("discount");
		
		var c=a.value*b.value;
		document.getElementById("baserate[]").value=c;
		}	
		var c=document.getElementById("discount[]").value;
		var d=parseInt(document.getElementById("baserate[]").value);	
		if(c.value=0)
		{
			var ta=0;
			var n=d;	
		}
		else
		{
			var e=d*c/100;
			var t=d-e;	
		}
		document.getElementById("taxable").value=t;
		var f=document.getElementById("vat").value;
		var g=parseInt(document.getElementById("taxable").value);
		if(f.value=0)
		{
			var t=0;
			var n=g;	
		}
		else
		{
			var h=g*f/100;
			var t=h+g;
			/*var n=b+t;
		}
		document.getElementById("vattax").value=h;
		document.getElementById("netval").value=t;
	}*/
	
	
	var tot=0;
	var tvat=0;
	var tdis=0;
	var ttax=0;
	var tgross=0;
	function total(id)
	{
		/*alert(id);*/
		/*var x=document.getElementById("count");
		for(var i=0;i<=x;i++)
		{*/
		var a=document.getElementById("qty"+id);
		var b=document.getElementById("rate"+id);
		/*var d=document.getElementById("discount");*/
		
		var c=a.value*b.value;
		document.getElementById("netval"+id).value=c;
		/*}*/
		/*var e=c.value*d.value/100;
		var f=c.value-e.value;
		document.getElementById("taxable").value=f;*/
			
	}
	/*function totalDis(id)
	{
		var a=document.getElementById("discount"+id).value;
		var b=parseInt(document.getElementById("baserate"+id).value);	
		if(a.value=0)
		{
			var ta=0;
			var n=b;	
		}
		else
		{
			var c=b*a/100;
			var t=b-c;	
		}
		document.getElementById("taxable"+id).value=t;
		document.getElementById("discountval"+id).value=c;
	}*/
	/*function totalVT(id)
	{
		var vtid=id;
		var a=document.getElementById("vat"+id).value;
		var b=parseInt(document.getElementById("taxable"+id).value);
		var tot=0;
		if(a.value=0)
		{
			var t=0;
			var n=b;	
		}
		else
		{
			
			var c=b*a/100;
			var t=c+b;
			
		}
		document.getElementById("vattax"+id).value=c;
		document.getElementById("netval"+id).value=t;
		
	}*/
		/*var tot=0;
		vatfind(vtid);
		//document.getElementById("totalnetval").value=tot;	
	}
	/*function vatfind(vtid)
	{
		var c=document.getElementById("vat"+vtid).value;
		var d=parseInt(document.getElementById("taxable"+vtid).value);
		
		var e=d*c/100;
		//var v=c+b;
		
		if(c.value="14")
			{
				//var vatfor=e;
				//var vatfive=0;
				document.getElementById("vat14val"+vtid).value=e;
				//document.getElementById("vat5val"+vtid).value=0;				
			}
			/*if(a=5)
			else if(c.value="5")
			{
				//var vatfor=0;
				//var vatfive=e;	
				//document.getElementById("vat14val"+vtid).value=0;
				document.getElementById("vat5val"+vtid).value=e;			
				
			}	
			else
			{}
			
	}*/
	function netvalTOT(id)
	{
		var myid=id;
		//alert(id);
		var a=document.getElementById("netval"+id).value;
		/*var b=document.getElementById("vattax"+id).value;
		var c=document.getElementById("discountval"+id).value;
		var d=document.getElementById("taxable"+id).value;
		var e=document.getElementById("baserate"+id).value;*/
		
		
		tot=+tot + +a;
		/*tvat=+tvat + +b;
		tdis=+tdis + +c;
		ttax=+ttax + +d;
		tgross=+tgross + +e;*/
		//alert(b);	
		document.getElementById("totalnetval").value=tot;
		/*document.getElementById("totalvat").value=tvat;
		document.getElementById("totaldiscount").value=tdis;
		document.getElementById("totaltaxable").value=ttax;
		document.getElementById("totalgross").value=tgross;*/
		//vatcount(myid);
	}
	/*function vatcount(myid)
	{
		alert("Yes");
		var f=document.getElementById("vat"+myid).value;
		var b=document.getElementById("vattax"+myid).value;
		alert(b);
		if(f.value=14)
		{
			alert(+b);
			var tvatfor=+tvatfor + +b;
			alert(tvatfor);
		}
		else
		{
			tvatfiv=+tvatfiv + +b;	
			alert(tvat5);
		}	
		
		document.getElementById("vat14val").value=tvatfor;
		document.getElementById("vat5val").value=tvatfiv;
	}*/
	function netbill()
	{
		var a=document.getElementById("totalnetval").value;
		var b=document.getElementById("adjamount").value;
		var d=document.getElementById("cgst").value;
		var e=document.getElementById("sgst").value;
		var f=document.getElementById("igst").value;
		var g=document.getElementById("discount").value;
		var c=+a + +b + +d + +e + +f - +g;
		document.getElementById("netbilled").value=c;
			
	}
  </script>
<!-- End MAIN CSS AND JQUERY -->
</head>
<!-- End HEAD -->
<!-- Start BODY -->
    <body>
        <!-- Start HEADER -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="brand"><img src="images/Dsys Logo.png" width="20px" height="20px" />Invoice Manager</a>
                <div id="app-nav-top-bar" class="nav-collapse">
                   <ul class="nav pull-right">
					<li style="margin-top: 11px;">
						Welcome <strong><?php echo $_SESSION['UserName'] ?> </strong>
					</li>
                        <li>
                            <a href="signout.php">| Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- End HEADER -->
        
          
        
        <!-- Start CONTROL BOX -->
    <div id="body-container">
        <div id="body-content">
            <div class="body-nav body-nav-horizontal body-nav-fixed">
                <div class="container">
                   			    <?php include'menu.php'; ?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				
				if(!empty($_POST['inv_date']))
				{
					$date=$_POST['inv_date'];
					//echo $date."<br>";
					$date = strtotime($date);
					$inv_date=date('Y/m/d', $date);
					//echo $date;
				}	
				
				//$cl_stk=0;
				$q="INSERT INTO `purchase` (`pur_id`, `date`, `invoice_no`, `vendor_id`, `totalnetval`, `cgst`, `sgst`, `igst`, `discount`, `roundoff`, `netamount`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$vendor_id."', '".$totalnetval."', '".$cgst."', '".$sgst."', '".$igst."', '".$discount."', '".$adjamount."', '".$netbilled."')";
				//echo $q;
				mysql_query($q);
				
				$result=mysql_query("select * from creditor where vendor_id='".$vendor_id."' ORDER BY trn_id DESC LIMIT 1");
				while($v=mysql_fetch_array($result))
				{
					$balance=$v[6];
				}
				$balance=$balance+$netbilled;
				$q3="INSERT INTO `creditor` (`trn_id`, `date`, `vendor_id`, `invoice_no`, `inv_value`, `payment`, `mode`, `description`, `type`) VALUES ('', '".$inv_date."', '".$vendor_id."', '".$inv_no."', '".$netbilled."', '0.00', '0', 'Purchase', 'Invoice')";
				//echo $q;
				mysql_query($q3);
				
				for($i=0;$i<count($item_id);$i++)
				{
					$res3=mysql_query("select * from item where item_id='".$item_id[$i]."'");
					while($r3=mysql_fetch_array($res3))
					{
						$rcgst[$i]=$r3[6];
						$rsgst[$i]=$r3[7];
						$rigst[$i]=$r3[8];
						$tax[$i]=1+($rigst[$i]/100);
					}
					
					$baseamt[$i]=$qty[$i]*$rate[$i];
					$basecgst[$i]=round((($baseamt[$i]*$rcgst[$i])/100),2);
					$basesgst[$i]=round((($baseamt[$i]*$rsgst[$i])/100),2);
					//$test=$basecgst[$i];
					if($rcgst[$i]=='9')
						{
							$tot9cgst=$tot9cgst+$basecgst[$i];
							$tot9sgst=$tot9sgst+$basesgst[$i];
						}
						else if($rcgst[$i]=='6')
						{
							$tot6cgst=$tot6cgst+$basecgst[$i];
							$tot6sgst=$tot6sgst+$basesgst[$i];
						}
						else if($rcgst[$i]=='14')
						{
							$tot14cgst=$tot14cgst+$basecgst[$i];
							$tot14sgst=$tot14sgst+$basesgst[$i];
						}
						else if($rcgst[$i]=='2.5')
						{
							$tot25cgst=$tot25cgst+$basecgst[$i];
							$tot25sgst=$tot25sgst+$basesgst[$i];
						}
						else
						{
							$tot0cgst=$tot0cgst+$basecgst[$i];
							$tot0sgst=$tot0sgst+$basesgst[$i];
						}
					
					$res1=mysql_query("select * from item_stock where item_id='".$item_id[$i]."' ORDER BY stock_id DESC LIMIT 1");
					while($r1=mysql_fetch_array($res1))
					{$op_stk=$r1[8];}
					$op_stk=$op_stk+$qty[$i];
					$q1="INSERT INTO `item_stock` (`stock_id`, `date`, `invoice_no`, `client_id`, `item_id`, `pur_qty`, `pur_rate`, `basepur`, `prt_qty`, `prt_rate`, `prt_base`, `sales_qty`, `sales_rate`, `base_amt`, `srt_qty`, `srt_rate`, `srt_base`, `cgst_rate`, `cgst`, `sgst_rate`, `sgst`, `net_amt`, `balance_qty`, `trn_type`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$vendor_id."', '".$item_id[$i]."', '".$qty[$i]."', '".$rate[$i]."', '".$baseamt[$i]."', '0', '0.00', '0.00', '0', '0.00', '0.00', '0', '0.00', '0.00', '".$rcgst[$i]."', '".$basecgst[$i]."', '".$rsgst[$i]."', '".$basesgst[$i]."', '".$netbilled."', '".$op_stk."', 'PURCHASE')";
					//echo $q1;
					mysql_query($q1,$cn);
				}
				
				$q4="INSERT INTO `gstdetail` (`sales_id`, `date`, `invoice_no`, `client_id`, `totalnetval`, `cgst9`, `cgst6`, `cgst25`, `cgst14`, `cgst0`, `sgst9`, `sgst6`, `sgst25`, `sgst14`, `sgst0`, `igst18`, `igst12`, `igst5`, `igst28`, `igst0`, `netamount`, `trn_type`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$vendor_id."', '".$totalnetval."', '".$tot9cgst."', '".$tot6cgst."', '".$tot25cgst."', '".$tot14cgst."', '".$tot0cgst."', '".$tot9sgst."', '".$tot6sgst."', '".$tot25sgst."', '".$tot14sgst."', '".$tot0sgst."', '0.00', '0.00', '0.00', '0.00', '0.00', '".$netbilled."', 'PURCHASE')";
				//echo $q;
				mysql_query($q4);
				
				
				for($i=0;$i<count($item_id);$i++)
				{
					$res2=mysql_query("select * from item_stock where item_id='".$item_id[$i]."'");
					while($r2=mysql_fetch_array($res2))
					{
						$stk_name=$r2[1];
						$op=$r2[2];
					}
					$cl=$op+$qty[$i];
					if($stk_name==$item_id[$i])
					{
						mysql_query("update item_stock set stock_qty='".$cl."' where item_id='".$item_id[$i]."'");	
					}
					else
					{
						$q2="INSERT INTO `item_stock` (`stock_id`, `item_id`, `stock_qty`) VALUES ('', '".$item_id[$i]."', '".$qty[$i]."')";
							
					}
					
					//$op_stk=$op_stk+$qty[$i];
					//$q1="INSERT INTO `item_movment` (`id`, `date`, `invoice_no`, `item_id`, `pur_qty`, `pur_rate`, `pur_value`, `sales_qty`, `sales_rate`, `sales_value`, `balance_qty`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$item_id[$i]."', '".$qty[$i]."', '".$rate[$i]."', '".$netval[$i]."', '0', '0.00', '0.00', '".$op_stk."')";
					//echo $q2;
					mysql_query($q2,$cn);
				}
				echo $test;
				//header('location:purchase_mgmt.php');
			}
        		
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Create New Purchase

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<form action="" name="count" method="post">
            	<input type="text" name="count" value="" />
                <select name="category">
                   <option value="">Select</option>
                   	<?php
                    	$res=mysql_query("select * from category");
						while($r=mysql_fetch_array($res))
						{
							echo "<option value='".$r[0]."'>".$r[1]."</option>";	
						}
					?>
                </select>
                <input type="submit" value="View" name="submit" />
            </form>
			<?php
			if($_REQUEST['submit']=='View')
			{?>
        	<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
                        	<table width="100%">
                            	<tr><td>Date</td><td><input type="date" name="inv_date" value="" class="span4" autocomplete="false" required></td></tr>
                                <tr><td>Invoice No</td><td><input type="text" name="inv_no" value="" class="span4" autocomplete="false" required></td></tr>
                                <tr><td>Vendor Name</td><td><select name="vendor_id" required>
                                                	<option value="">Select Vendor</option>
                                                    <?php
                                                    	$res=mysql_query("select * from vendors");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."</option>";	
														}
													?>
                                                </select></td></tr>
                                                <tr><td><input type="hidden" name="count" value="<?php echo $_POST['count']; ?>" onKeyUp="total()" /></td></tr>
                                 
                                  <tr>
                                 
                                  	<td colspan="2">
                                  		<table>
                                        	<tr>
                                            	<th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Rate</th>
                                                <!--<th>Base Rate</th>
                                                <th>Discount %</th>
                                                <th>Discount Amount</th>
                                                <th>Taxable Value</th>
                                                <th>Vat %</th>
                                                <th>Vat Tax</th>
                                                --><th>Net Amount</th>
                                            </tr>
                                            <?php for($i=1; $i<=$_POST['count']; $i++){ ?>
                                            <tr>
                                            	<td>
                                                	<select name="item_id[]" class="span4">
                                                    	<option value="">Select</option>
                                                        <?php
															$res=mysql_query("select * from item where category='".$_POST['category']."'");
															while($r=mysql_fetch_array($res))
															{
																echo "<option value='".$r[0]."'>".$r[1]."</option>";	
															}
														?>
                                                    </select>
                                                </td>
                                                <td><input id="qty<?php echo $i; ?>" name="qty[]" class="span1" type="text" value="" onKeyUp="total(<?php echo $i; ?>)" autocomplete="false" required></td>
                                                <td><input id="rate<?php echo $i; ?>" name="rate[]" class="span1" type="text" width="7" value="" onKeyUp="total(<?php echo $i; ?>)" autocomplete="false" required></td>             
                                                
                                                <td><input id="netval<?php echo $i; ?>" name="netval[]" class="span2" type="text" onKeyUp="netvalTOT(<?php echo $i; ?>)" value="" autocomplete="false" required></td>
                                                
                                            </tr><?php } ?>
                                            <tr><td colspan="3">Total</td><td><input id="totalnetval" name="totalnetval" class="span2" type="text" value="" onKeyUp="netbill()" autocomplete="false" required></td>
                                            </tr>
                                            <tr><td colspan="3">CGST</td><td><input id="cgst" name="cgst" class="span2" type="text" value="0" onKeyUp="netbill()" autocomplete="false" required></td></tr>
                                            <tr><td colspan="3">SGST</td><td><input id="sgst" name="sgst" class="span2" type="text" value="0" onKeyUp="netbill()" autocomplete="false" required></td></tr>
                                            <tr><td colspan="3">IGST</td><td><input id="igst" name="igst" class="span2" type="text" value="0" onKeyUp="netbill()" autocomplete="false" required></td></tr>
                                            <tr><td colspan="3">Discount/Scheme</td><td><input id="discount" name="discount" class="span2" type="text" value="0" onKeyUp="netbill()" autocomplete="false" required></td></tr>
                                            <tr><td colspan="3">Adjust Amount</td><td><input id="adjamount" name="adjamount" class="span2" type="text" value="0" onKeyUp="netbill()" autocomplete="false" required></td></tr>
                                            <tr><td colspan="3">Net Billed Amount</td><td><input id="netbilled" name="netbilled" class="span2" type="text" value="" autocomplete="false" required></td></tr>
                                            <tr></tr>
                                            
                                        </table>
                                    </td>
                                  </tr>
                            </table>
							
						</div>
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<input type="submit" name="submit" value="Save" class="btn btn-primary" />
						<input type="reset" name="reset" value="Reset" class="btn btn-primary" />
					</footer>
				</div>
			
		</form><?php } ?>
	</section>
	</div>
</div>        <!-- Start COPYRIGHT -->
    <footer class="application-footer">
        <div class="container">

            <div class="disclaimer">
                <p> All right reserved.</p>

            </div>
        </div>
    </footer>
        <!-- End COPYRIGHT -->
        <!-- Start JS REQUIRED FOR THIS PAGE ONLY -->
    <script src="js/bootstrap/bootstrap-transition.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-alert.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-modal.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-dropdown.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-scrollspy.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-tab.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-tooltip.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-popover.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-button.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-collapse.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-carousel.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-typeahead.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-affix.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="js/jquery/jquery-tablesorter.js" type="text/javascript"></script>
    <script src="js/jquery/jquery-chosen.js" type="text/javascript"></script>
    <script src="js/jquery/virtual-tour.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $('#sample-table').tablesorter();
            $('#datepicker').datepicker();
            $(".chosen").chosen();
        });
    </script>
  <!-- End JS REQUIRED FOR THIS PAGE ONLY -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="js/jquery-2.1.0.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  	<!-- jquery for spare parts-->
  		<script>
        var arraydrop = [];
        var arraytext = [];
        $(function () {
            $('#btn').click(function () {
                var val = $("#Mydropdown option:selected").text();
                var val1 = $("#Mydropdown option:selected").val();
                var valtxt = $("#txt").val();
				$('#drpdiv').css('display', 'none');
				$('#divqnt').css('display', 'none');
				
				if(val=="")
				{
					$('#Mydropdown').after('<div id=drpdiv style="font-style: oblique;font-weight: bolder;color: Red;">Please fill out this field</div>');
					$('#Mydropdown').css('border-color', 'red');
				}
				else
				{
					if(valtxt>=1)
					{
			    var rows = document.getElementById("MyTable").rows;
                var count = 0;
                for (var i = 0, ceiling = rows.length; i < ceiling; i++)
				 {
                    if (rows[i].cells[1].innerHTML==val)
                    {
                        count = 1;
                        alert("value already exist");
                    }
                }
                if(count==0)
                {
				
					$("#MyTable").append("<tr><td style='display:none'>"+val1+"</td><td>" + val + "</td><td>" + valtxt + "</td><td><input      type='button' value='Delete' class='btn btn-danger btn-large' onclick='btnclick(this)'");
                }
						
						arraydrop.push($("#Mydropdown option:selected").val());
						arraytext.push(valtxt);
						$(".custom-combobox-input").val("");
						$("#txt").val("");
						$('#txt').after('<div> </div>');
						$('#drpdiv').css('display','none');
					}
					else
					{
						$('#txt').after('<div id=divqnt style="font-style: oblique;font-weight: bolder;color: Red;">Please fill out this field</div>');
						$('#txt').focus();
						$('#txt').css('border-color', 'red');
					}
				}
            });
        });
		
		function btnclick(getval) {
            ($(getval).parent()).parent().remove();
            arraydrop.splice(($(getval).parent()).parent().index(), 1);
            arraytext.splice(($(getval).parent()).parent().index(), 1);
            var str = "";
            for (var i = 0; i < arraydrop.length; i++)
            {
                str += arraydrop[i] + ","+ arraytext[i];
            }
        };
		
  </script>
	</body>
<!-- End BODY -->
</html>
<?php
}
else
{header('location:signout.php');}
?>
