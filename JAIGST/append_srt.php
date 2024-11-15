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
		var b=parseFloat(document.getElementById("baserate"+id).value);	
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
		var b=parseFloat(document.getElementById("taxable"+id).value);
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
		//var a=document.getElementById("netval"+id).value;
		//var b=document.getElementById("vattax"+id).value;
		//var c=document.getElementById("discountval"+id).value;
		//var d=document.getElementById("taxable"+id).value;
		var e=parseFloat(document.getElementById("netval"+id).value);
		
		
		//tot=+tot + +a;
		//tvat=+tvat + +b;
		//tdis=+tdis + +c;
		//ttax=+ttax + +d;
		tgross=+tgross + +e;
		//alert(b);	
		//document.getElementById("totalnetval").value=tot;
		//document.getElementById("totalvat").value=tvat;
		//document.getElementById("totaldiscount").value=tdis;
		//document.getElementById("totaltaxable").value=ttax;
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
                   			<?php include"menu.php"; ?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				for($i=0;$i<count($item_id);$i++)
				{
					$res9=mysql_query("select * from item where item_id='".$item_id[$i]."'");
					while($r9=mysql_fetch_array($res9))
					{
						$rcgst[$i]=$r9[6];
						$rsgst[$i]=$r9[7];
						$rigst[$i]=$r9[8];
						$tax[$i]=1+($rigst[$i]/100);
					}
					
					$baserate[$i]=$rate[$i]/$tax[$i];
					$netval[$i]=$qty[$i]*$baserate[$i];
					
					if($state=='23')
					{
					$cgst[$i]=round((($netval[$i]*$rcgst[$i])/100),2);
					$sgst[$i]=round((($netval[$i]*$rsgst[$i])/100),2);
					
					$totcgst=$totcgst+$cgst[$i];
					$totsgst=$totsgst+$sgst[$i];
						if($rcgst[$i]=='9')
						{
							$tot9cgst=$tot9cgst+$cgst[$i];
							$tot9sgst=$tot9sgst+$sgst[$i];
						}
						else if($rcgst[$i]=='6')
						{
							$tot6cgst=$tot6cgst+$cgst[$i];
							$tot6sgst=$tot6sgst+$sgst[$i];
						}
						else if($rcgst[$i]=='14')
						{
							$tot14cgst=$tot14cgst+$cgst[$i];
							$tot14sgst=$tot14sgst+$sgst[$i];
						}
						else if($rcgst[$i]=='2.5')
						{
							$tot25cgst=$tot25cgst+$cgst[$i];
							$tot25sgst=$tot25sgst+$sgst[$i];
						}
						else
						{
							$tot0cgst=$tot0cgst+$cgst[$i];
							$tot0sgst=$tot0sgst+$sgst[$i];
						}
					}
					else
					{
					$igst[$i]=($netval[$i]*$rigst[$i])/100;
					
					$totigst=$totigst+$igst[$i];
					
					if($rigst[$i]=='18')
						{
							$tot18igst=$tot18igst+$igst[$i];
						}
						else if($rigst[$i]=='12')
						{
							$tot12igst=$tot12igst+$igst[$i];
						}
						else if($rigst[$i]=='28')
						{
							$tot28igst=$tot28igst+$igst[$i];
						}
						else if($rigst[$i]=='5')
						{
							$tot5igst=$tot5igst+$igst[$i];
						}
						else
						{
							$tot0igst=$tot0igst+$igst[$i];
						}
					
					}
					
								
					$netamt[$i]=$netval[$i]+$cgst[$i]+$sgst[$i];
					
					$totalnetval=$totalnetval+$netval[$i];
					
					$res1=mysql_query("select * from item_stock where item_id='".$item_id[$i]."' ORDER BY stock_id DESC LIMIT 1");
					while($r1=mysql_fetch_array($res1))
					{$cl_stk=$r1[8];}
					$cl_stk=$cl_stk-$qty[$i];
					$q1="INSERT INTO `item_stock` (`stock_id`, `date`, `invoice_no`, `client_id`, `item_id`, `pur_qty`, `pur_rate`, `basepur`, `prt_qty`, `prt_rate`, `prt_base`, `sales_qty`, `sales_rate`, `base_amt`, `srt_qty`, `srt_rate`, `srt_base`, `cgst_rate`, `cgst`, `sgst_rate`, `sgst`, `net_amt`, `balance_qty`, `trn_type`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$client_id."', '".$item_id[$i]."', '0', '0.00', '0.00', '0', '0.00', '0.00', '0', '0.00', '0.00', '".$qty[$i]."', '".$baserate[$i]."', '".$netval[$i]."', '".$rcgst[$i]."', '".$cgst[$i]."', '".$rsgst[$i]."', '".$sgst[$i]."', '".$netamt[$i]."', '".$cl_stk."', 'SRT')";
					
					mysql_query($q1,$cn);
					
				}
					
					if($state=='23')
					{
						$netamount1=$totalnetval+$totcgst+$totsgst;
					}
					else
					{
						$netamount1=$totalnetval+$totigst;
					}
					
					if(!empty($_POST['discount']))
					{$netamount=$netamount1-$discount;}
					else
					{$netamount=$netamount1-0;}
				
					$netpay=round($netamount);
				
				$res8=mysql_query("select * from sales_ret where srt_no='".$inv_no."'");
				while($r8=mysql_fetch_array($res8))
				{
					$old_totalnetval=$r8[4];
					$old_cgst=$r8[5];	
					$old_sgst=$r8[6];
					$old_grossamount=$r8[8];
					$old_netamount=$r8[10];	
				}
				$new_totalnetval=$old_totalnetval+$totalnetval;
				$new_cgst=$old_cgst+$totcgst;
				$new_sgst=$old_sgst+$totsgst;
				$new_grossamount=$old_grossamount+$netamount1;
				$new_netamount=$old_netamount+$netpay;
				mysql_query("UPDATE `sales_ret` SET `totalnetval`='".$new_totalnetval."',`cgst`='".$new_cgst."',`sgst`='".$new_sgst."',`grossamount`='".$new_grossamount."',`netamount`='".$new_netamount."' WHERE srt_no='".$inv_no."'");
				
							
				mysql_query("UPDATE `debtors` SET `rect_value`='".$new_netamount."' WHERE ref_id='".$inv_no."'");
				
				$res2=mysql_query("select * from gstdetail where invoice_no='".$inv_no."' and trn_type='SRT'");
				while($r2=mysql_fetch_array($res2))
				{
					$old_cgst9=$r2[5];
					$old_cgst6=$r2[6];
					$old_cgst25=$r2[7];
					$old_cgst14=$r2[8];
					$old_cgst0=$r2[9];
					$old_sgst9=$r2[10];
					$old_sgst6=$r2[11];
					$old_sgst25=$r2[12];
					$old_sgst14=$r2[13];
					$old_sgst0=$r2[14];
				}
				
					$new_cgst9=$old_cgst9+$tot9cgst;
					$new_cgst6=$old_cgst6+$tot6cgst;
					$new_cgst25=$old_cgst25+$tot25cgst;
					$new_cgst14=$old_cgst14+$tot14cgst;
					$new_cgst0=$old_cgst0+$tot0cgst;
					$new_sgst9=$old_sgst9+$tot9sgst;
					$new_sgst6=$old_sgst6+$tot6sgst;
					$new_sgst25=$old_sgst25+$tot25sgst;
					$new_sgst14=$old_sgst14+$tot14sgst;
					$new_sgst0=$old_sgst0+$tot0sgst;
				
				
				mysql_query("update gstdetail set totalnetval='".$new_totalnetval."', cgst9='".$new_cgst9."', cgst6='".$new_cgst6."', cgst25='".$new_cgst25."', cgst14='".$new_cgst14."', cgst0='".$new_cgst0."', sgst9='".$new_sgst9."', sgst6='".$new_sgst6."', sgst25='".$new_sgst25."', sgst14='".$new_sgst14."', sgst0='".$new_sgst0."', netamount='".$new_netamount."' where invoice_no='".$inv_no."' and trn_type='SRT'");
				
				
				header('location:invoice_mgmt.php');
			}
        		
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Add More Item in Invoice

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<form action="" name="count" method="post">
            	<input type="hidden" name="date" value="<?php echo $_REQUEST['date']; ?>" />
                <input type="hidden" name="client_id" value="<?php echo $_REQUEST['client']; ?>" />
                <input type="hidden" name="invoice_no" value="<?php echo $_REQUEST['invoice_no']; ?>" />
                <?php
                	include('DAL/database.php');
					$res5=mysql_query("select * from client where client_id='".$_REQUEST['client']."'");
					while($r5=mysql_fetch_array($res5))
					{
						echo "<input type='hidden' name='area_id' value='".$r5[3]."'>";	
					}
						
				?>
                <input type="text" name="count" placeholder="No of Rows" value="" />
                <!--<select name="beat" required>
                <option value="">-Select Area--</option>-->
                
                <!--</select>-->
                <input type="submit" value="View" name="submit" />
            </form>
			<?php
			if($_REQUEST['submit']=='View')
			{
				extract($_POST);
				?>
        	<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
                        	<table width="100%">
                            	<tr><td>Date</td><td><input type="date" name="inv_date" value="<?php echo $date; ?>" class="span4" autocomplete="false" readonly required></td></tr>
                               						 <?php
                                                    	/*$res=mysql_query("select * from bill");
														while($r=mysql_fetch_array($res))
														{
															$invoice_no=$r[1];	
														}
														$invoice_no=$invoice_no+1;*/
													?>
                                <tr><td>Invoice No</td><td><input type="text" name="inv_no" value="<?php echo $invoice_no; ?>" class="span4" autocomplete="false" readonly required></td></tr>
                                <tr><td>Client Name</td><td>
                                <input type="text" name="vendor_id" value="<?php echo $client_id; ?>" class="span4" autocomplete="false" readonly required>
                                <!--<select name="vendor_id" required>
                                                	<option value="">Select Client</option>-->
                                                    <?php
														/*$beat=$_POST['beat'];
														echo $beat;
                                                    	$res=mysql_query("select * from client where area_id='".$beat."'");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."&nbsp; - &nbsp;".$r[2]."</option>";	
														}*/
													?>
                                                <!--</select>--></td></tr>
                                                <tr><td><input type="hidden" name="count" value="<?php echo $_POST['count']; ?>" onKeyUp="total()" /><input type="hidden" name="state" value="23"  /></td></tr>
                                 
                                  <tr>
                                 
                                  	<td colspan="2">
                                  		<table>
                                        	<tr>
                                            	<th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Rate</th>
                                                <th>Net Amount</th>
                                            </tr>
                                            <?php for($i=1; $i<=$_POST['count']; $i++){ ?>
                                            <tr>
                                            	<td>
                                                	<select name="item_id[]" class="span5">
                                                    	<option value="">Select</option>
                                                        <?php
															$res=mysql_query("select item_id, item, MRP, opening from item");
															while($r=mysql_fetch_array($res))
															{
																$res1=mysql_query("select sum(pur_qty), sum(sales_qty) from item_stock where item_id='".$r[0]."'");
																while($r1=mysql_fetch_array($res1))
																{$bal=($r[3]+$r1[0])-$r1[1];}
																echo "<option value='".$r[0]."'>".$r[1]."&nbsp; - MRP&nbsp;".$r[2]."&nbsp - Stock &nbsp;".$bal."</option>";	
															}
														?>
                                                    </select>
                                                <!--<input id="description" name="description" class="span4" type="text" value="" autocomplete="false" required>--></td>
                                                <td><input id="qty<?php echo $i; ?>" name="qty[]" class="span2" type="text" value="" onKeyUp="total(<?php echo $i; ?>)" autocomplete="false" required></td>
                                                <td><input id="rate<?php echo $i; ?>" name="rate[]" class="span2" type="text" width="5" value="" onKeyUp="total(<?php echo $i; ?>)" autocomplete="false" required></td>             
                                                <!--<td><input id="calculate" name="calculate" class="span2" type="button" onKeyPress="calculate()" value="Calculate" autocomplete="false" required></td>-->
                                               
                                                <!--<td><input id="netval<?php //echo $i; ?>" name="netval[]" class="span2" type="text" onBlur="netvalTOT(<?php //echo $i; ?>)" value="" autocomplete="false" required></td>-->
                                            </tr><?php } ?>
                                            <!--<tr><td colspan="3">Total</td><td><input id="totalgross" name="totalgross" class="span2" type="text" value="" autocomplete="false" required></td></tr>-->
                                            
                                            
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
