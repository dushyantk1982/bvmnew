<?php 
error_reporting(1);
session_start();
if(isset($_SESSION['login']) && $_SESSION['type']=='Admin')
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sales Report</title>
    <link href="print.css" media="print" rel="stylesheet" type="text/css" >
    <script>
function doit(){
if (!window.print){
alert("You need NS4.x to use this print button!")
return
}
window.print()
}
</script>
</head>
<!-- End HEAD -->
<!-- Start BODY -->
    <body>
        <!-- Start HEADER -->
    <!--<div class="navbar navbar-fixed-top">
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
						Welcome <strong><?php //echo $_SESSION['UserName'] ?> </strong>
					</li>
                        <li>
                            <a href="signout.php">| Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>-->
        <!-- End HEADER -->
       
        <!-- Start CONTROL BOX -->
    <!--<div id="body-container">
        <div id="body-content">
            <div class="body-nav body-nav-horizontal body-nav-fixed">
                <div class="container">
                   			<ul> <li>
                                    <a href="dashboard.php">
                                        <i class="icon-home icon-large"></i> Home
                                    </a>
                                </li>
								<li>
                                    <a href="reports.php">
                                        <i class="icon-arrow-left icon-large"></i> Back
                                    </a>
                                </li>
                                <li>
                                    <a href="account_report.php">
                                        <i class="icon-user icon-large"></i> Account
                                    </a>
                                </li>
								<li>
                                    <a href="tax_report.php">
                                        <i class="icon-text-width icon-large"></i> Taxes
                                    </a>
                                </li>-->
								<!--<li>
                                    <a href="item_mgmt.php">
                                        <i class="icon-italic icon-large"></i> Item
                                        <!--<i class="icon-credit-card>
                                    </a>
                                </li>
								<li>
                                    <a href="tax_mgmt.php">
                                        <i class="icon-text-width icon-large"></i> Taxes
                                    </a>
                                </li>
								<li>
                                    <a href="bank_mgmt.php">
                                        <i class="icon-bold icon-large"></i> Banks
                                    </a>
                                </li>-->
								<!--<li>
                                    <a href="reports.php">
                                        <i class="icon-list-alt icon-large"></i> Reports
                                    </a>
                                </li>-->
								<!--<li style="margin-left: 420px;margin-top: 15px; border:0px">
								<?php
									/*if($_REQUEST['msg']=='ok')
				{
					$strmsg="<div class='span16 pull-right' ><div style='float:right' id='myalert' class='alert alert-success fade in'> <button type='button' class='close' data-dismiss='alert'>?</button><strong> Inserted Successfully.</strong></div> </div>";
				}*/
								?>
								<script>$(document).ready(function() {$('#myalert').delay(2000).addClass('out').fadeOut(3000);});</script>
						</li>

                    </ul>
                </div>
            </div>-->

                 <!-- End CONTROL BOX --> 
			
			<section class="page container">
			
			    <section id="my-account-security-form" class="page container">
                
                        <div class="container">
                            <section class="content-header">
                                
                                   
                             </section>
                        </div>
                       <div class="row" style="margin-top: 25px;">
            				<div class="span16">
                            	<div align="center">
                                	<?php
                                    	include('DAL/database.php');
										$res2=mysql_query("select * from company_profile");
										while($r2=mysql_fetch_array($res2))
										{
											echo "<table><tr><td align='center'>".$r2[1]."</td></tr><tr><td align=center>".$r2[2].",".$r2[3].",".$r2[4]."</td></tr></table>";	
										}
									?>
                                </div>
                                <div align="center" style="margin-top:10px;">
                                	<span style="border-bottom:1px solid;">Sales Report</span><br/>
                                    
                                    <?php
										$fdt= date('d-m-Y', strtotime($_REQUEST['date_from']));
										$tdt= date('d-m-Y', strtotime($_REQUEST['date_to']));
										echo $fdt." to ".$tdt;
									?>
                                    
                                </div>
                                <div align="center" style="margin-top:20px; font-size:14px;">
								<?php
                                	
										extract($_REQUEST);
										//echo $date_from." And ".$date_to;	
										include('DAL/database.php');
										$i=1;
										 
										echo '<div class="box-content box-table">
                            					<table id="sample-table" class="table table-hover table-bordered tablesorter" >
                              					  <thead>
                               					     <tr style="border-bottom:1px solid;">
                                        				<th style="border-bottom:1px solid; border-top:1px solid;">Date</th>
                                        				<th style="border-bottom:1px solid; border-top:1px solid;">Invoice</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">Name</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">GSTIn</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">Before GST</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">GST 18%</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">GST 12%</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">GST 5%</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">Tax Exumpt</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">After GST</th>
														<th style="border-bottom:1px solid; border-top:1px solid;">Net Sales</th>
														
                                    				</tr>
                                				</thead>
                                			<tbody>';
										//$res=mysql_query("select * from currency_value where date between '".$date_from."' and '".$date_to."'");
										$res=mysql_query("SELECT gstdetail.date, gstdetail.invoice_no, client.client_name, client.GST, gstdetail.totalnetval, gstdetail.cgst9, gstdetail.sgst9, gstdetail.cgst6, gstdetail.sgst6, gstdetail.cgst25, gstdetail.sgst25, gstdetail.cgst0, gstdetail.sgst0, gstdetail.netamount FROM `gstdetail` join client on gstdetail.client_id=client.client_id where date BETWEEN '".$date_from."' and '".$date_to."' and trn_type='SALES'");
										
										while($r=mysql_fetch_array($res))
										{
											$ndt= date('d-m-Y', strtotime($r[0]));
											$gst18=$r[5]+$r[6];
											$gst12=$r[7]+$r[8];
											$gst5=$r[9]+$r[10];
											$gst0=$r[11]+$r[12];
											$gross=$r[4]+$gst18+$gst12+$gst5+$gst0;
											echo "<tr ><td  align='left'>".$ndt."</td><td  align='center'>".$r[1]."</td><td align='left'>".$r[2]."</td><td align='center'>".$r[3]."</td><td align='right'>".$r[4]."</td><td align='right'>".$gst18."</td><td align='right'>".$gst12."</td><td align='right'>".$gst5."</td><td align='right'>".$gst0."</td><td align='right'>".$gross."</td><td align='right'>".$r[13]."</td></tr>";
											//$i=$i+1;												
											$tot_base=$tot_base+$r[4];
											$tot_gst18=$tot_gst18+$gst18;
											$tot_gst12=$tot_gst12+$gst12;
											$tot_gst5=$tot_gst5+$gst5;
											$tot_gst0=$tot_gst0+$gst0;
											$tot_gross=$tot_gross+$gross;												
											$tot_net=$tot_net+$r[13];
											
										}
										//$res1=mysql_query("select sum(totalnetval)  as totalnetval, sum(cgst) as cgst, sum(sgst) as sgst, sum(grossamount) as grossamount, sum(discount) as discount, sum(netamount) as netamount from sales where date between '".$date_from."' and '".$date_to."'");
										//while($r1=mysql_fetch_array($res1))
										//{
											echo "<tr><td colspan='4' align='center' style='border-bottom:1px solid; border-top:1px solid;'><b>Total</b></td><td style='border-bottom:1px solid; border-top:1px solid;' align='right'><b>&nbsp;&nbsp;".$tot_base."&nbsp;&nbsp;</b></td><td style='border-bottom:1px solid; border-top:1px solid;' align='right'><b>&nbsp;&nbsp;".$tot_gst18."&nbsp;&nbsp;</b></td><td style='border-bottom:1px solid; border-top:1px solid;' align='right'><b>&nbsp;&nbsp;".$tot_gst12."&nbsp;&nbsp;</b></td><td style='border-bottom:1px solid; border-top:1px solid;' align='right'><b>&nbsp;&nbsp;".$tot_gst5."&nbsp;&nbsp;</b></td><td style='border-bottom:1px solid; border-top:1px solid;' align='right'><b>&nbsp;&nbsp;".$tot_gst0."&nbsp;&nbsp;</b></td><td style='border-bottom:1px solid; border-top:1px solid;' align='right'><b>&nbsp;&nbsp;".$tot_gross."&nbsp;&nbsp;</b></td><td style='border-bottom:1px solid; border-top:1px solid;' align='right'><b>&nbsp;&nbsp;".$tot_net."&nbsp;&nbsp;</b></td></tr>";				
										//}
										echo "</table>";
									
								?></div>
                                <a href="javascript:doit()" onFocus="document.getElementById('printOption').style.visibility = 'hidden'; document.print(); return true;">Print</a>
								<!--<a href="users.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Total Sales</button></a>
                                <a href="users.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Unit Setting</button></a>
                                <a href="users.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Category Setting</button></a>
                                <a href="users.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Item Setting</button></a>
                                <a href="users.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Tax Setting</button></a>
                                <a href="users.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Banks Setting</button></a>-->
							</div>
                         </div>
                </section>
			</section>
		</div>
    </div>
  
        <!-- Start COPYRIGHT -->
    
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
