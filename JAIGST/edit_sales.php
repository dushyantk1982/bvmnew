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
		var a=document.getElementById("netval"+id).value;
		var b=document.getElementById("vattax"+id).value;
		var c=document.getElementById("discountval"+id).value;
		var d=document.getElementById("taxable"+id).value;
		var e=parseFloat(document.getElementById("baserate"+id).value);
		
		
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
                   			<?php include'menu.php';?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				
				/*for($j=0;$j<count($item_id);$j++)
				{
					echo "Item id :".$item_id[$j]." - Quantity :".$qty[$j]." - Rate :".$rate[$j]." - Stock id : ".$stock_id[$j]." - Invoice No :".$inv_no."<br/>";	
				}*/
				
				for($i=0;$i<count($item_id);$i++)
				{
					
						$res9=mysql_query("select * from item where item_id='".$item_id[$i]."'");
					while($r9=mysql_fetch_array($res9))
					{
						$rcgst[$i]=$r9[6];
						$rsgst[$i]=$r9[7];
						$rigst[$i]=$r9[8];
						$tax[$i]=1+($rigst[$i]/100);
						//echo "CGST :".$rcgst[$i]." - SGST :".$rsgst[$i]." - IGST :".$rigst[$i]." - Tax :".$tax[$i]."<br/>";
					}
					//$baserate[$i]=$rate[$i]/$tax[$i];
					$netval[$i]=$qty[$i]*$rate[$i];
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
						$netamt[$i]=$netval[$i]+$cgst[$i]+$sgst[$i];
					
						$totalnetval=$totalnetval+$netval[$i];
						
						$q="update item_stock set date='".$inv_date."', client_id='".$client_id."', sales_qty='".$qty[$i]."', sales_rate='".$baserate[$i]."', base_amt='".$netval[$i]."', cgst_rate='".$rcgst[$i]."', cgst='".$cgst[$i]."', sgst_rate='".$rsgst[$i]."', sgst='".$sgst[$i]."', net_amt='".$netamt[$i]."' where stock_id='".$stock_id[$i]."'";
						//echo $q.'<br/>';
						mysql_query($q);
				}
						$netamount1=$totalnetval+$totcgst+$totsgst;
						if(!empty($_POST['discount']))
					{$netamount=$netamount1-$discount;}
					else
					{$netamount=$netamount1-0;}
				
					$netpay=round($netamount);	
					
					$q1="update sales set date='".$inv_date."', client_id='".$client_id."', totalnetval='".$totalnetval."', cgst='".$totcgst."', sgst='".$totsgst."', grossamount='".$netamount1."', discount='".$discount."', netamount='".$netpay."' where invoice_no='".$inv_no."'";
					//echo $q1.'<br/>';
					mysql_query($q1);
					
					$q2="update gstdetail set date='".$inv_date."', client_id='".$client_id."', totalnetval='".$totalnetval."',	cgst9='".$tot9cgst."', cgst6='".$tot6cgst."', cgst25='".$tot25cgst."', cgst14='".$tot14cgst."', cgst0='".$tot0cgst."', sgst9='".$tot9sgst."', sgst6='".$tot6sgst."', sgst25='".$tot25sgst."', sgst14='".$tot14sgst."', sgst0='".$tot0sgst."', netamount='".$netpay."' where invoice_no='".$inv_no."'";
					//echo $q2.'<br/>';
					mysql_query($q2);
					
					$res10=mysql_query("select * from debtors where client_id='".$client_id."' and ref_id='".$inv_no."'");
					while($r10=mysql_fetch_array($res10))
					{
						$trn_id=$r10[0];
						$old_value=$r10[5];
						$old_balance=$r10[7];	
					}
					if($old_value!=$netpay)
					{
						if($old_value<$netpay)
						{
							$new_balance=$old_balance+($netpay-$old_value);	
							$q3="update debtors set date='".$inv_date."', client_id='".$client_id."', inv_value='".$netpay."', balance='".$netpay."' where trn_id='".$trn_id."'";
							
							//echo $q3.'<br/>';
							mysql_query($q3);
							$q4="update bills_trn set inv_value='".$netpay."' where inv_no='".$inv_no."'";
							mysql_query($q4);
						}	
						else if($old_value>$netpay)
						{
							$new_balance=$old_balance-($old_value-$netpay);	
							$q3="update debtors set date='".$inv_date."', client_id='".$client_id."', inv_value='".$netpay."', balance='".$netpay."' where trn_id='".$trn_id."'";
							//echo $q3.'<br/>';
							mysql_query($q3);
							$q4="update bills_trn set inv_value='".$netpay."' where inv_no='".$inv_no."'";
							mysql_query($q4);
						}
					}
			
				header('location:invoice_mgmt.php');
			}
        		
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Edit Bill

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			
			<?php
			$invoice_no=$_GET['invoice_no'];
			$number=$_POST['number'];
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
                                <tr><td>Client Name</td><td><select name="client_id" required>
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
                                                <th>Base Rate</th>
                                            </tr>
                                            <?php 
											$t=0;
											$res6=mysql_query("SELECT item.item_id, item.item, item.MRP, item_stock.sales_qty, item_stock.sales_rate, item_stock.cgst_rate, item_stock.sgst_rate, item_stock.stock_id  from item_stock JOIN item on item.item_id=item_stock.item_id WHERE invoice_no='".$invoice_no."'");
											while($r6=mysql_fetch_array($res6))
											{ 
												//$old_bill_qty=$r6[3];
											?>
                                            <tr>
                                            	<td>
                                                	<select name="item_id[]" class="span4">
                                                    	<option value="<?php echo $r6[0]; ?>"><?php echo $r6[1]." - ".$r6[2]; ?></option>
                                                        <?php
															$res=mysql_query("select * from item");
															while($r=mysql_fetch_array($res))
															{
																echo "<option value='".$r[0]."'>".$r[1]."&nbsp; - &nbsp;".$r[4]."</option>";	
															}
														?>
                                                    </select>
                                                <!--<input id="description" name="description" class="span4" type="text" value="" autocomplete="false" required>--></td>
                                                <td><input id="qty<?php echo $i; ?>" name="qty[]" class="span2" type="text" value="<?php echo $r6[3];?>" onChange="total(<?php echo $i; ?>)" autocomplete="false" required> <input name="old_bill_qty[]" type="hidden" value="<?php echo $r6[3];?>"  autocomplete="false" required></td>
                                                <td><input id="rate<?php echo $i; ?>" name="rate[]" class="span2" type="text" width="5" value="<?php echo round(($r6[4]+(($r6[4]*($r6[5]+$r6[5]))/100)),2) ;?>" onChange="total(<?php echo $i; ?>)" autocomplete="false" required>
                                                <input name="stock_id[]" value="<?php echo $r6[7];?>" type="hidden"></td>             
                                                <?php $t=$t+1;} ?>
                                            <tr><td colspan="2">Discount</td><td><input id="discount" name="discount" class="span2" type="text" value="<?php 
								$res7=mysql_query("select discount from sales where invoice_no='".$invoice_no."'");
								while($r7=mysql_fetch_array($res7))
								{
								 echo $r7[0];
								}
								?>" autocomplete="false" required></td>
                                </tr>
                                            
                                        </table>
                                    </td>
                                  </tr>
                            </table>
							
						</div>
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<input type="submit" name="submit" value="Save" class="btn btn-primary" /><?php if($t<20){ $count=20-$t; ?>
						<a href="append_bill.php?invoice_no=<?php echo $invoice_no; ?>&client=<?php echo $client_id; ?>&date=<?php echo $date; ?>&count=<?php echo $count; ?>" class="btn btn-primary">Add More Item</a> <?php } ?>
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
