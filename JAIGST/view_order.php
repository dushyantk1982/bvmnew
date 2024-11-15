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
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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
			
			<?php
			include('DAL/database.php');
			$order_id=$_REQUEST['order_id'];
			$res=mysql_query("select order_book.order_date, client.client_name, order_book.order_id, order_book.description, order_book.qty, order_book.price, order_book.value, order_book.st, order_book.tax, order_book.netvalue, currency.currency, order_book.status from order_book join client on client.client_id=order_book.client_id join currency on currency.currency_id=order_book.currency_id where order_id='".$order_id."'");
			while($r=mysql_fetch_array($res))
			{
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Client Detail

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span7">
							<fieldset>
								<legend>Order Detail</legend><br>
									<div class="control-group ">
										<!--<label class="control-label">Company Name: </label>-->
											<div class="controls">
												Order No <?php echo $r[2]; ?><!--<input id="client_name" name="client_name" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Address</label>-->
											<div class="controls">
												Order Date <?php echo $r[0]; ?><!--<input id="address" name="address" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">City</label>-->
											<div class="controls">
												Client <?php echo $r[1]; ?><!--<input id="city" name="city" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">State</label>-->
											<div class="controls">
												Order Description <?php echo $r[3]; ?><!--<input id="state" name="state" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Country</label>-->
											<div class="controls">
												Quantity <?php echo $r[4]; ?><!--<input id="country" name="country" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Pin</label>-->
											<div class="controls">
												Price <?php echo $r[5]; ?><!--<input id="pin" name="pin" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Telephone</label>-->
											<div class="controls">
												Gross Value <?php echo $r[6]; ?><!--<input id="contact" name="contact" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Mobile</label>-->
											<div class="controls">
												Service Tax <?php echo $r[7]; ?> %<!--<input id="mobile" name="mobile" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Mail ID</label>-->
											<div class="controls">
												Tax Value <?php echo $r[8]; ?><!--<input id="mail" name="mail" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
                                    <div class="control-group ">
										<!--<label class="control-label">Mail ID</label>-->
											<div class="controls">
												Nat Value <?php echo $r[9]; ?><!--<input id="mail" name="mail" class="span4" type="text" value="" autocomplete="false" required>-->
											</div>
									</div>
									
                                    </fieldset>
                                    </div>
                                    
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<a href="JavaScript:newPopup('print_order.php?order_id=<?php echo $r[2]; ?>');"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Print Order</button></a>
                        <!--<a href="JavaScript:newPopup('popen.php?to=<?php //echo @$to;?> & from=<?php //echo @$from;?>');">Open a popup window</a>-->
					</footer>
				</div>
			
		</form>
	</section>
	</div>
</div>   <?php } ?>     <!-- Start COPYRIGHT -->
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
