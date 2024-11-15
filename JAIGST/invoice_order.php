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
  	function total()
	{
		var a=document.getElementById("qty");
		var b=document.getElementById("price");
		
		var c=a.value*b.value;
		document.getElementById("value").value=c;
			
	}
	function totalST()
	{
		var a=document.getElementById("st").value;
		var b=parseInt(document.getElementById("value").value);
		if(a.value=0)
		{
			var t=0;
			var n=b;	
		}
		else
		{
			var c=b*30/100;
			var t=c*a/100;
			var n=b+t;
		}
		document.getElementById("tax").value=t;
		document.getElementById("netvalue").value=n;
			
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
			
			
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Invoice Generation

                                </h3>
                             </section>
                        </div>
                        <?php
                        	$client_id=$_POST['client_id'];
							include('DAL/database.php');
							
						?>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<form action="invoice_create.php" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
							<fieldset>
								<!--<legend>Order Detail</legend><br>-->
									
									<div class="control-group ">
										<label class="control-label">Date</label>
											<div class="controls">
												<input id="inv_date" name="inv_date" class="span4" type="text" value="<?php echo date('Y-m-d'); ?>" autocomplete="false" required>
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Client Name</label>
                                        <?php
                                        		$res=mysql_query("select * from client where client_id='".$client_id."'");
												while($r=mysql_fetch_array($res))
												{
													$client_name=$r[1];
												}
										?>
											<div class="controls">
												<input id="client_name" name="client_name" class="span4" type="text" readonly="yes" value="<?php echo $client_name; ?>" autocomplete="false" required>
                                                <input id="client_id" name="client_id" class="span4" type="hidden" value="<?php echo $client_id; ?>" autocomplete="false" required>
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Orders</label>
											<div class="controls">
												<select name="order_id[]" size="10" multiple required>
                                                	<option value="">Select Order</option>
                                                    <?php
														$res=mysql_query("select * from order_book where client_id='".$client_id."' and status='Unbilled'");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[4]."&nbsp;".$r[7]."</option>";
														}													?>
                                                </select>
											</div>
									</div>
									
                                    <?php
														$res=mysql_query("select currency.currency from order_book join currency on currency.currency_id=order_book.currency_id where client_id='".$client_id."' and status='Unbilled'");
														
														while($r=mysql_fetch_array($res))
														{
															$curr=$r[0];
															//echo "<label class='control-label'>INR Value of ".$r[0]."</label>";
														}				
														if($curr!='INR')
														{									
										?>
                                    <div class="control-group ">
										
                                        <label class="control-label">INR Value of <?php echo $curr; ?></label>
											<div class="controls">
												<input id="currency_value" name="currency_value" class="span4" type="text" value="" autocomplete="false" required>
                                                 <?php
														$res=mysql_query("select * from order_book where client_id='".$client_id."' and status='Unbilled'");
														while($r=mysql_fetch_array($res))
														{
															$currency_id=$r[11];
														}						
												?>
                                					<input id="currency_id" name="currency_id" class="span4" type="hidden" value="<?php echo $currency_id; ?>" autocomplete="false" required>
         									</div>
									</div><?php } ?>
									
									
                                   
                                    
									</fieldset>
                                    </div>
                                   
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<input type="submit" name="submit" value="Generate Bill" class="btn btn-primary" />
						<!--<input type="reset" name="reset" value="Reset" class="btn btn-primary" />-->
					</footer>
				</div>
			
		</form>
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
	</body>
<!-- End BODY -->
</html>
<?php
}
else
{header('location:signout.php');}
?>
