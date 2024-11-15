<?php 
error_reporting(1);
//date_default_timezone_set("Asia/Kolkata"); 
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
                   			<?php include'menu.php'; ?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				$q="INSERT INTO `order_book` (`order_id`, `order_date`, `client_id`, `item_id`, `description`, `qty`, `price`, `value`, `st`, `tax`, `netvalue`, `currency_id`, `status`) VALUES ('', '".$order_date."', '".$client_id."', '".$item_id."', '".$description."', '".$qty."', '".$price."', '".$value."', '".$st."', '".$tax."', '".$netvalue."', '".$currency_id."', 'Unbilled')";
				mysql_query($q);
				header('location:order_mgmt.php');
			}
        		
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Book New Order

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
							<fieldset>
								<!--<legend>Order Detail</legend><br>-->
									<div class="control-group ">
										<label class="control-label">Order Date </label>
											<div class="controls">
												<input id="order_date" name="order_date" class="span4" type="text" value="<?php echo date('Y-m-d'); ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Client Name</label>
											<div class="controls">
												<select name="client_id" required>
                                                	<option value="">Select Client</option>
                                                    <?php
                                                    	$res=mysql_query("select * from client");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."</option>";	
														}
													?>
                                                </select>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Item Name</label>
											<div class="controls">
												<select name="item_id" required>
                                                	<option value="">Select Item</option>
                                                    <?php
                                                    	$res=mysql_query("select * from item");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."</option>";	
														}
													?>
                                                </select>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Description</label>
											<div class="controls">
												<input id="description" name="description" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Quantity</label>
											<div class="controls">
												<input id="qty" name="qty" class="span4" type="text" onKeyUp="total()" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Price</label>
											<div class="controls">
												<input id="price" name="price" class="span4" type="text" onKeyUp="total()" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Order Value</label>
											<div class="controls">
												<input id="value" name="value" class="span4" type="text" onKeyUp="total()" value="" autocomplete="false" required>
                                               <!-- <select name="currency_id" required>
                                                	<option value="">Select Currency</option>
                                                    <?php
                                                    	/*$res=mysql_query("select * from currency");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."</option>";	
														}*/
													?>
                                                </select>-->
											</div>
                                            
									</div>
                                    <div class="control-group ">
										<label class="control-label">Service Tax Apply</label>
											<div class="controls inline">
												<select name="st" id="st" onChange="totalST()">
                                                	<option value="">Select</option>
                                                    <option value="">0% Tax</option>
                                                	<?php
                                                    	$res=mysql_query("select * from tax");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[3]."'>".$r[2]."</option>";	
														}
													?>
                                                </select>
                                                <!--Yes<input id="st" name="st" class="checkbox" type="radio" checked="yes" onKeyUp="totalST()" value="1" autocomplete="false" required>
                                                No<input id="st" name="st" class="checkbox" type="radio" onKeyUp="totalST()" value="0" autocomplete="false" required>-->
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Service Tax Value</label>
											<div class="controls">
												<input id="tax" name="tax" class="span4" type="text" onKeyUp="totalST()" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Order Value</label>
											<div class="controls">
												<input id="netvalue" name="netvalue" class="span4" type="text" onKeyUp="totalST()" value="" autocomplete="false" required>
                                                <select name="currency_id" required>
                                                	<!--<option value="">Select Currency</option>-->
                                                    <?php
                                                    	$res=mysql_query("select * from currency");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."</option>";	
														}
													?>
                                                </select>
											</div>
                                            
									</div>
									</fieldset>
                                    </div>
                                    <!--<div id="acct-verify-row" class="span9">
							<fieldset>
								<legend>Tax Details</legend><br>
									<div class="control-group ">
										<label class="control-label">PAN No</label>
											<div class="controls">
												<input id="pan" name="pan" class="span4" type="text" value="" autocomplete="false">
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Tin No.</label>
											<div class="controls">
												<input id="tin" name="tin" class="span4" type="text" value="" autocomplete="false">
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Service Tax</label>
											<div class="controls">
												<input id="st" name="st" class="span4" type="text" value="" autocomplete="false">
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">CST No. </label>
											<div class="controls">
												<input id="cst" name="cst" class="span4" type="text" value="" autocomplete="false">
											</div>
									</div>
							</fieldset>
						</div>-->
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<input type="submit" name="submit" value="Save" class="btn btn-primary" />
						<input type="reset" name="reset" value="Reset" class="btn btn-primary" />
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
