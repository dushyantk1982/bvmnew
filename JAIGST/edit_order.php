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
			
			<?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				$q="update `order_book` set `item_id`='".$item_id."', `description`='".$description."', `qty`='".$qty."', `price`='".$price."', `value`='".$value."', `st`='".$st."', `tax`='".$tax."', `netvalue`='".$netvalue."' where order_id='".$order_id."'";
				mysql_query($q);
				header('location:order_mgmt.php');
			}
        	$order_id=$_REQUEST['order_id'];
			$res=mysql_query("select order_book.order_date, client.client_name, order_book.order_id, order_book.description, order_book.qty, order_book.price, order_book.value, order_book.st, order_book.tax, order_book.netvalue,currency.currency_id, currency.currency, order_book.status, item.item_id, item.item from order_book join client on client.client_id=order_book.client_id join currency on currency.currency_id=order_book.currency_id join item on item.item_id=order_book.item_id where order_id='".$order_id."' and status='Unbilled'");
			while($r=mysql_fetch_array($res))
			{	
				$order_id=$r[2];
				$order_date=$r[0];
				$client=$r[1];
				$description=$r[3];
				$qty=$r[4];
				$price=$r[5];
				$value=$r[6];
				$st=$r[7];
				$tax=$r[8];
				$natval=$r[9];
				$currency_id=$r[10];
				$currency=$r[11];
				$item_id=$r[12];
				$item=$r[13];
			}
				
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Change Order

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
												<input id="order_date" name="order_date" class="span4" type="date" value="<?php echo $order_date;?>" autocomplete="false" readonly="yes" required>
                                                <input id="order_id" name="order_id" class="span4" type="hidden" value="<?php echo $order_id;?>" autocomplete="false" readonly="yes" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Client Name</label>
											<div class="controls">
												<input id="client_id" name="client_id" class="span4" type="text" value="<?php echo $client;?>" autocomplete="false" readonly="yes" required>
                                                
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Item Name</label>
											<div class="controls">
												<select name="item_id" required>
                                                	<option value="<?php echo $item_id; ?>"><?php echo $item; ?></option>
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
												<input id="description" name="description" class="span4" type="text" value="<?php echo $description; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Quantity</label>
											<div class="controls">
												<input id="qty" name="qty" class="span4" type="text" onKeyUp="total()" value="<?php echo $qty; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Price</label>
											<div class="controls">
												<input id="price" name="price" class="span4" type="text" onKeyUp="total()" value="<?php echo $price; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Order Value</label>
											<div class="controls">
												<input id="value" name="value" class="span4" type="text" onKeyUp="total()" value="<?php echo $value; ?>" autocomplete="false" required>
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
                                                	<option value="<?php echo $st; ?>"><?php echo $st; ?></option>
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
												<input id="tax" name="tax" class="span4" type="text" onKeyUp="totalST()" value="<?php echo $tax; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Order Value</label>
											<div class="controls">
												<input id="netvalue" name="netvalue" class="span4" type="text" onKeyUp="totalST()" value="<?php echo $natval; ?>" autocomplete="false" required>
                                                <input id="currency" name="currency" class="span4" type="text" value="<?php echo $currency; ?>" autocomplete="false" readonly="yes" required>
                                                
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
