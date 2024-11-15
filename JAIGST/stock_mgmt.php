<?php 
error_reporting(1);
session_start();
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
	<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=600,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
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
                   			<?php include"stock_submenu.php"; ?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<section class="page container">
			
			    <section id="my-account-security-form" class="page container">
                
                        <div class="container">
                            <section class="content-header">
                                
                                   
                             </section>
                        </div>
                       <div class="row" style="margin-top: 25px;">
            				<div class="span16">
                            	<!--<form action="" method="post">
                            	From : <input type="date" name="date_from" /> &nbsp; &nbsp; To : <input type="date" name="date_to" /> &nbsp; &nbsp; -->
								<?php
                                	include('DAL/database.php');
									/*$res2=mysql_query("select * from client");
									echo "<select name='client'><option value=''>Select Client</option>";
									while($r2=mysql_fetch_array($res2))
									{
										echo "<option value=".$r2[0].">".$r2[1]."</option>";	
									}
									echo "</select>";*/
								?>
                                 
                              <!--  <input type="submit" name="submit" value="Search" />
                                </form>-->
                                <a href="JavaScript:newPopup('print_stock_mgmt.php?date_from=<?php echo $date_from; ?>&date_to=<?php echo $date_to;?>');" class="btn btn-small btn-info">Print Report</a>
                                &nbsp;&nbsp;Current Stock as on
                                <?php echo date("d-m-Y"); ?>
								<?php
								echo '<div class="box-content box-table">
                            					<table id="sample-table" class="table table-hover table-bordered tablesorter">
                              					  <thead>
                               					     <tr>
                                        				<th>S. No.</th>
														<th>Product Name</th>
														<th>MRP</th>
														<th>Closing Stock</th>
														<th>Amount</th>
														<th>Action</th>
														
                                    				</tr>
                                				</thead>
                                			<tbody>';$i=1;
									$res=mysql_query("select item_id, item, MRP, opening, baserate, igst from item order by item ASC");
									while($r=mysql_fetch_array($res))
									{
										$res1=mysql_query("select sum(pur_qty), sum(sales_qty), sum(prt_qty), sum(srt_qty) from item_stock where item_id='".$r[0]."'");
										while($r1=mysql_fetch_array($res1))
										{$bal=($r[3]+$r1[0]+$r1[3])-($r1[1]+$r1[2]);}
										$val=round($bal*($r[4]+(($r[4]*$r[5])/100)),2);
																echo "<tr><td>".$i."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$bal."</td><td>".$val."</td><td>
																<a href='view_item_stock.php?opt=3&item_id=$r[0]' class='btn btn-small btn-info'>View
                                                	<i class='btn-icon-only icon-edit'></i>
                                            	</a>
																</td></tr>";
											$totval=$totval+$val;
											$i=$i+1;
															}
															echo "<tr><td colspan='4' style='align:center;'><b>Total</b></td><td><b>".$totval."</b></td><td>&nbsp;</td></tr>";
															
											echo "</table>";				
															
                                	if($_REQUEST['submit']=='Search')
									{
										extract($_POST);
										//echo $date_from." And ".$date_to;	
										//echo $date_from;
										//$q="SELECT sales.date, sales.invoice_no, client.client_name, sales.total_gross, sales.total_discount, sales.total_taxable, sales.total_vat, sales.total_net  FROM `sales` JOIN client on sales.client_id=client.client_id where date BETWEEN '".$date_from."' and '".$date_to."'";
										//echo $q;
										
											include('DAL/database.php');
										$i=1;
										?>
										<a href="JavaScript:newPopup('print_sales_report.php?date_from=<?php echo $date_from; ?>&date_to=<?php echo $date_to;?>');" class="btn btn-small btn-info">Print Report</a>
										<?php 
										echo '<div class="box-content box-table">
                            					<table id="sample-table" class="table table-hover table-bordered tablesorter">
                              					  <thead>
                               					     <tr>
                                        				<th>Date</th>
                                        				<th>Invoice No</th>
														<th>Name</th>
														<th>Base Sales</th>
														<th>CGST</th>
														<th>SGST</th>
														<th>Gross</th>
														<th>Discount</th>
														<th>Net Sales</th>
														
                                    				</tr>
                                				</thead>
                                			<tbody>';
										//$res=mysql_query("select * from currency_value where date between '".$date_from."' and '".$date_to."'");
										//$res=mysql_query("SELECT sales.date, sales.invoice_no, client.client_name, sales.total_gross, sales.total_discount, sales.total_taxable, sales.total_vat, sales.total_net  FROM `sales` JOIN client on sales.client_id=client.client_id BETWEEN '".$date_from."' and '".$date_to."'");
										//$q="SELECT sales.date, sales.invoice_no, client.client_name, sales.total_gross, sales.total_discount, sales.total_taxable, sales.total_vat, sales.total_net  FROM `sales` JOIN client on sales.client_id=client.client_id where date BETWEEN '".$date_from."' and '".$date_to."'";
										//echo $q;
										$res=mysql_query("SELECT sales.date, sales.invoice_no, client.client_name, sales.totalnetval, sales.cgst, sales.sgst, sales.grossamount, sales.discount, sales.netamount  FROM `sales` JOIN client on sales.client_id=client.client_id where date BETWEEN '".$date_from."' and '".$date_to."'");
										//echo $res;
										//$res=mysql_query("select currency_value.date, currency_value.invoice_id, order_book.description,  currency_value.inr_value from currency_value join order_book on currency_value.invoice_id=order_book.invoice_no where date between '".$date_from."' and '".$date_to."'");
										while($r=mysql_fetch_array($res))
										{
											$ndt= date('d-m-Y', strtotime($r[0]));
											echo "<tr><td>".$ndt."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td></tr>";
											$i=$i+1;												
										}
										$res1=mysql_query("select sum(totalnetval)  as totalnetval, sum(cgst) as cgst, sum(sgst) as sgst, sum(grossamount) as grossamount, sum(discount) as discount, sum(netamount) as netamount from sales where date between '".$date_from."' and '".$date_to."'");
										while($r1=mysql_fetch_array($res1))
										{
											echo "<tr><td colspan='3' style='align:center;'><b>Total</b></td><td><b>".$r1['totalnetval']."</b><td><b>".$r1['cgst']."</b></td><td><b>".$r1['sgst']."</b></td><td><b>".$r1['grossamount']."</b></td><td><b>".$r1['discount']."</b></td><td><b>".$r1['netamount']."</b></td></tr>";				
										}
										
										echo "</table>";	
										
										/*else if($country!='')
										{
											include('DAL/database.php');
										$i=1;
										?>
										<a href="JavaScript:newPopup('print_sales_report.php?date_from=<?php echo $date_from; ?>&date_to=<?php echo $date_to;?>');" class="btn btn-small btn-info">Print Report</a>
										<?php 
										echo '<div class="box-content box-table">
                            					<table id="sample-table" class="table table-hover table-bordered tablesorter">
                              					  <thead>
                               					     <tr>
                                        				<th>S.No.</th>
                                        				<th>Date</th>
                                        				<th>Invoice No</th>
														<th>Name</th>
														<th>Sales Value</th>
														
                                    				</tr>
                                				</thead>
                                			<tbody>';
										//$res=mysql_query("select * from currency_value where date between '".$date_from."' and '".$date_to."'");
										$res=mysql_query("select currency_value.date, currency_value.invoice_id, client.client_name,  currency_value.inr_value from currency_value join client on currency_value.client_id=client.client_id where date between '".$date_from."' and '".$date_to."'");
										//$res=mysql_query("select currency_value.date, currency_value.invoice_id, order_book.description,  currency_value.inr_value from currency_value join order_book on currency_value.invoice_id=order_book.invoice_no where date between '".$date_from."' and '".$date_to."'");
										while($r=mysql_fetch_array($res))
										{
											echo "<tr><td>".$i."</td><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td></tr>";
											$i=$i+1;												
										}
										$res1=mysql_query("select sum(inr_value) as sales from currency_value where date between '".$date_from."' and '".$date_to."'");
										while($r1=mysql_fetch_array($res1))
										{
											echo "<tr><td colspan='4' style='align:center;'><b>Total</b></td><td><b>".$r1['sales']."</b></td></tr>";				
										}
										echo "</table>";	
										}
										else
										{
										include('DAL/database.php');
										$i=1;
										?>
										<a href="JavaScript:newPopup('print_sales_report.php?date_from=<?php echo $date_from; ?>&date_to=<?php echo $date_to;?>');" class="btn btn-small btn-info">Print Report</a>
										<?php 
										echo '<div class="box-content box-table">
                            					<table id="sample-table" class="table table-hover table-bordered tablesorter">
                              					  <thead>
                               					     <tr>
                                        				<th>S.No.</th>
                                        				<th>Date</th>
                                        				<th>Invoice No</th>
														<th>Name</th>
														<th>Sales Value</th>
														
                                    				</tr>
                                				</thead>
                                			<tbody>';
										//$res=mysql_query("select * from currency_value where date between '".$date_from."' and '".$date_to."'");
										$res=mysql_query("select currency_value.date, currency_value.invoice_id, client.client_name,  currency_value.inr_value from currency_value join client on currency_value.client_id=client.client_id where date between '".$date_from."' and '".$date_to."'");
										//$res=mysql_query("select currency_value.date, currency_value.invoice_id, order_book.description,  currency_value.inr_value from currency_value join order_book on currency_value.invoice_id=order_book.invoice_no where date between '".$date_from."' and '".$date_to."'");
										while($r=mysql_fetch_array($res))
										{
											echo "<tr><td>".$i."</td><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td></tr>";
											$i=$i+1;												
										}
										$res1=mysql_query("select sum(inr_value) as sales from currency_value where date between '".$date_from."' and '".$date_to."'");
										while($r1=mysql_fetch_array($res1))
										{
											echo "<tr><td colspan='4' style='align:center;'><b>Total</b></td><td><b>".$r1['sales']."</b></td></tr>";				
										}
										echo "</table>";
									}*/}
								?>
								
							</div>
                         </div>
                </section>
			</section>
		</div>
    </div>
  
        <!-- Start COPYRIGHT -->
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
	</body>
<!-- End BODY -->
</html>
<?php
}
else
{header('location:signout.php');}
?>
