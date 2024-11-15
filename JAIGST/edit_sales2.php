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
		document.getElementById("baserate"+id).value=c;
		/*}*/
		/*var e=c.value*d.value/100;
		var f=c.value-e.value;
		document.getElementById("taxable").value=f;*/
			
	}
	function totalDis(id)
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
	}
	function totalVT(id)
	{
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
		
		/*var tot=0;*/
		
		//document.getElementById("totalnetval").value=tot;	
	}
	
	function netvalTOT(id)
	{
		//alert(id);
		var a=document.getElementById("netval"+id).value;
		var b=document.getElementById("vattax"+id).value;
		var c=document.getElementById("discountval"+id).value;
		var d=document.getElementById("taxable"+id).value;
		var e=document.getElementById("baserate"+id).value;
		
		
		tot=+tot + +a;
		tvat=+tvat + +b;
		tdis=+tdis + +c;
		ttax=+ttax + +d;
		tgross=+tgross + +e;
		//alert(b);	
		document.getElementById("totalnetval").value=tot;
		document.getElementById("totalvat").value=tvat;
		document.getElementById("totaldiscount").value=tdis;
		document.getElementById("totaltaxable").value=ttax;
		document.getElementById("totalgross").value=tgross;
	}
	function netbill()
	{
		var a=document.getElementById("totalnetval").value;
		var b=document.getElementById("adjamount").value;
		var c=+a + +b;
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
                   			<ul> <li>
                                    <a href="dashboard.php">
                                        <i class="icon-home icon-large"></i> Home
                                    </a>
                                </li>
								<li>
                                    <a href="company_info.php">
                                        <i class="icon-flag icon-large"></i> Company Info
                                    </a>
                                </li>
                                <li>
                                    <a href="users.php">
                                        <i class="icon-user icon-large"></i> Users
                                    </a>
                                </li>
								<li>
                                    <a href="setting.php">
                                        <i class="icon-cog icon-large"></i> Setting
                                    </a>
                                </li>
								<li>
                                    <a href="client_mgmt.php">
                                        <i class="icon-group icon-large"></i> Clients
                                        <!--<i class="icon-credit-card>-->
                                    </a>
                                </li>
                                <li>
                                    <a href="purchase_mgmt.php">
                                        <i class="icon-glass icon-large"></i> Purchase
                                    </a>
                                </li>
								<li>
                                    <a href="order_mgmt.php">
                                        <i class="icon-pencil icon-large"></i> Order
                                    </a>
                                </li>
								<li>
                                    <a href="invoice_mgmt.php">
                                        <i class="icon-edit icon-large"></i> Invoice
                                    </a>
                                </li>
								<li>
                                    <a href="reports.php">
                                        <i class="icon-list-alt icon-large"></i> Reports
                                    </a>
                                </li>
								<li style="margin-left: 420px;margin-top: 15px; border:0px">
								<?php
									if($_REQUEST['msg']=='ok')
				{
					$strmsg="<div class='span16 pull-right' ><div style='float:right' id='myalert' class='alert alert-success fade in'> <button type='button' class='close' data-dismiss='alert'>?</button><strong> Inserted Successfully.</strong></div> </div>";
				}
								?>
								<script>$(document).ready(function() {$('#myalert').delay(2000).addClass('out').fadeOut(3000);});</script>
						</li>

                    </ul>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				//$cl_stk=0;
				$q="INSERT INTO `sales` (`sales_id`, `date`, `invoice_no`, `client_id`, `total_gross`, `total_discount`, `total_taxable`, `total_vat`, `total_net`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$vendor_id."', '".$totalgross."', '".$totaldiscount."', '".$totaltaxable."', '".$totalvat."', '".$netbilled."')";
				//echo $q;
				mysql_query($q);
				
				for($i=0;$i<count($item_id);$i++)
				{
					$res1=mysql_query("select * from item_stock where item_id='".$item_id[$i]."'");
					while($r1=mysql_fetch_array($res1))
					{$op_stk=$r1[2];}
					$op_stk=$op_stk-$qty[$i];
					$q1="INSERT INTO `item_movment` (`id`, `date`, `invoice_no`, `item_id`, `pur_qty`, `pur_rate`, `pur_discount`, `pur_vat_rate`, `pur_vat`, `pur_value`, `sales_qty`, `sales_rate`, `sales_discount_rate`, `sales_discount`, `sales_base_amt`, `sales_vat_rate`, `sales_vat`, `sales_value`, `balance_qty`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$item_id[$i]."', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '".$qty[$i]."', '".$rate[$i]."', '".$discount[$i]."', '".$discountvalue[$i]."', '".$taxable[$i]."', '".$vat[$i]."', '".$vattax[$i]."', '".$netval[$i]."', '".$op_stk."')";
					//echo $q1;
					mysql_query($q1,$cn);
				}
				
				for($i=0;$i<count($item_id);$i++)
				{
					$res2=mysql_query("select * from item_stock where item_id='".$item_id[$i]."'");
					while($r2=mysql_fetch_array($res2))
					{
						$stk_name=$r2[1];
						$op=$r2[2];
					}
					$cl=$op-$qty[$i];
					mysql_query("update item_stock set stock_qty='".$cl."' where item_id='".$item_id[$i]."'");	
					
					
					//$op_stk=$op_stk+$qty[$i];
					//$q1="INSERT INTO `item_movment` (`id`, `date`, `invoice_no`, `item_id`, `pur_qty`, `pur_rate`, `pur_value`, `sales_qty`, `sales_rate`, `sales_value`, `balance_qty`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$item_id[$i]."', '".$qty[$i]."', '".$rate[$i]."', '".$netval[$i]."', '0', '0.00', '0.00', '".$op_stk."')";
					//echo $q2;
					//mysql_query($q2,$cn);
				}
				$res3=mysql_query("select * from bill");
				while($r3=mysql_fetch_array($res3))
				{$old_b=$r3[2];}
				if($old_b<1)
				{mysql_query("insert into bill (`id`, `bill_no`) values('','".$inv_no."')");}
				else{
				$bill_no=$inv_no+1;
				$qr="update bill set bill_no='".$bill_no."'";
				echo $qr;
				mysql_query($qr);}
				//mysql_query("update bill set bill_no='".$bill_no."'");
				header('location:invoice_mgmt.php');
			}
        		
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Create New Bill

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<!--<form action="" name="count" method="post">
            	<input type="text" name="count" value="" />
                <input type="submit" value="View" name="submit" />
            </form>-->
			<?php
			$invoice_no=$_REQUEST['invoice_no'];
			//if($_REQUEST['submit']=='View')
			//{
				$res5=mysql_query("select sales.date, client.client_id, client.client_name from sales join client on sales.client_id=client.client_id where invoice_no='".$invoice_no."'");
				while($r5=mysql_fetch_array($res5))
				{
						$date=$r5[0];
						$client_id=$r5[1];
						$client_name=$r5[2];
						
				}
				?>
        	<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
                        	<table width="100%">
                            
                            	<tr><td>Date</td><td><input type="text" name="inv_date" value="<?php echo $date; ?>" class="span4" autocomplete="false" required></td></tr>
                               						 <?php
                                                    	/*$res=mysql_query("select * from bill");
														while($r=mysql_fetch_array($res))
														{
															$invoice_no=$r[1];	
														}
														$invoice_no=$invoice_no+1;*/
													?>
                                <tr><td>Invoice No</td><td><input type="text" name="inv_no" readonly='yes' value="<?php echo $invoice_no; ?>" class="span4" autocomplete="false" required></td></tr>
                                <tr><td>Client Name</td><td><select name="vendor_id" required>
                                                	<option value="<?php echo $client_id; ?>"><?php echo $client_name; ?></option>
                                                    <?php
                                                    	$res=mysql_query("select * from client");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."&nbsp; - &nbsp;".$r[2]."</option>";	
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
                                                <th>Base Rate</th>
                                                <th>Discount %</th>
                                                <th>Discount Amount</th>
                                                <th>Taxable Value</th>
                                                <th>Vat %</th>
                                                <th>Vat Tax</th>
                                                <th>Net Amount</th>
                                            </tr>
                                            <?php $res6=mysql_query("SELECT item.item_id, item.item, item.MRP, item_movment.sales_qty, item_movment.sales_rate, item_movment.sales_base_amt, item_movment.sales_discount_rate, item_movment.sales_discount, item_movment.sales_vat_rate, item_movment.sales_vat, item_movment.sales_value from item_movment JOIN item on item.item_id=item_movment.item_id WHERE invoice_no='".$invoice_no."'");
											while($r6=mysql_fetch_array($res6))
											{ 
                                            echo "<tr><td><select name='item_id[]' class='span4'>";
                                                    
													echo "<option value='".$r6[0]."'>".$r6[1]." - ".$r6[2]."</option>";
                                                        
															$res=mysql_query("select * from item");
															while($r=mysql_fetch_array($res))
															{
																echo "<option value='".$r[0]."'>".$r[1]."&nbsp; - &nbsp;".$r[4]."</option>";	
															}
														
                                                    echo "</select>";
                                                //<!--<input id="description" name="description" class="span4" type="text" value="" autocomplete="false" required>--> 
											echo "</td>";
                                               echo "<td><input id='qty".$i."' name='qty[]' class='span1' type='text' value='".$r6[3]."' onChange='total($i)' autocomplete='false' required></td>
                                                <td><input id='rate".$i."' name='rate[]' class='span1' type='text' width='5' value='".$r6[4]."' onChange='total($i)' autocomplete='fals' required></td>             
                                                <td><input id='baserate".$i."' name='baserate[]' class='span2' type='text' onChange='total($i)' value='$r6[3]*$r6[4]' autocomplete='false' required></td>
                                                <td><input id='discount".$i."' name='discount[]' class='span1' type='text' value='".$r6[6]."' onKeyUp='totalDis($i)' autocomplete='false' required></td>
                                                <td><input id='discountval".$i."' name='discountvalue[]' class='span2' type='text' value='".$r6[7]."' onKeyUp='totalDis($i)' autocomplete='false' required></td>
                                                <td><input id='taxable".$i."' name='taxable[]' class='span2' type='text' onKeyUp='totalDis($i)' value='".$r6[5]."' autocomplete='false' required></td>
                                                <td><input id='vat".$i."' name='vat[]' class='span1' type='text' onKeyUp='totalVT($i)' value='".$r6[8]."' align='middle' autocomplete='false' required></td>
                                                <td><input id='vattax".$i."' name='vattax[]' class='span2' type='text' onKeyUp='totalVT($i)' value='".$r6[9]."' align='middle' autocomplete='false' required></td>
                                                <td><input id='netval".$i."' name='netval[]' class='span2' type='text' onKeyUp='netvalTOT($i)' value='".$r6[10]."' autocomplete='false' required></td>
                                            </tr>";
											$gr_tot=$gr_tot+$r6[10]; }
											$res7=mysql_query("select * from sales where invoice_no='".$invoice_no."'");
											while($r7=mysql_fetch_array($res7))
											{
												$tot_gross=$r7[4];
												$tot_dis=$r7[5];
												$tot_taxable=$r7[6];
												$tot_tax=$r7[7];
												$tot_net=$r7[8];	
											}
											
											 ?>
                                            <tr><td colspan="3">Total</td><td><input id="totalgross" name="totalgross" class="span2" type="text" value="<?php echo $tot_gross; ?>" autocomplete="false" required></td><td></td><td><input id="totaldiscount" name="totaldiscount" class="span2" type="text" value="<?php echo $tot_dis; ?>" autocomplete="false" required></td><td><input id="totaltaxable" name="totaltaxable" class="span2" type="text" value="<?php echo $tot_taxable; ?>" autocomplete="false" required></td><td></td><td><input id="totalvat" name="totalvat" class="span2" type="text" value="<?php echo $tot_tax; ?>" autocomplete="false" required></td><td><input id="totalnetval" name="totalnetval" class="span2" type="text" value="<?php echo $gr_tot; ?>" onKeyUp="netbill()" autocomplete="false" required></td></tr>
                                            <tr></tr>
                                            <tr><td colspan="9">Adjust Amount</td><td><input id="adjamount" name="adjamount" class="span2" type="text" value="0" onKeyUp="netbill()" autocomplete="false" required></td></tr>
                                            <tr><td colspan="9">Net Billed Amount</td><td><input id="netbilled" name="netbilled" class="span2" type="text" value="<?php echo $tot_net; ?>" autocomplete="false" required></td></tr>
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
			
		</form><?php //} ?>
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
