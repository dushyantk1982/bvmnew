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
                   			<?php include'finance_manu.php'; ?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
            <?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Edit')
			{
				extract($_POST);
				if($mode=='1')
				{
					$q="update `bank_book` set `cust_id`='".$vendor_id."', `payment`='".$amount."', `description`='".$description."' where ref_id='".$ref."'";
					mysql_query($q);	
					
				}
				else
				{
					$q="update `cash_book` set `cust_id`='".$vendor_id."', `payment`='".$amount."', `description`='".$description."' where ref_id='".$ref."'";
					mysql_query($q);	
				}
				
				$q2="update `creditor` set `vendor_id`='".$vendor_id."', `payment`='".$amount."', `description`='".$description."' where invoice_no='".$ref."'";
				mysql_query($q2);
				
				header('location:payment_mgmt.php');
			}
        		
			?>
			<div class="box">
	
    
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
                    <?php
						$ref_id=$_REQUEST['ref_id'];
                    	$res1=mysql_query("select * from creditor where invoice_no='".$ref_id."'");
						while($r1=mysql_fetch_array($res1)){
					?>
						<div id="acct-password-row" class="span16">
							<fieldset>
								<legend>Add New Payment</legend><br>
									<div class="control-group ">
										<label class="control-label">Date</label>
											<div class="controls">
												<input type="date" name="date" value="<?php echo $r1[1]; ?>" readonly="yes" />
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Vendor Name</label>
											<div class="controls">
												<select class="span4" name="vendor_id">
                                                	<?php
                                                    	$res2=mysql_query("select * from vendors where vendor_id='".$r2[2]."'");
														while($r2=mysql_fetch_array($res2))
														{
																echo "<option value=".$r2[0].">".$r2[1]."</option>";
														}
													
                                                    	$res=mysql_query("select * from vendors");
														while($r=mysql_fetch_array($res))
														{
																echo "<option value=".$r[0].">".$r[1]."</option>";
														}
													?>
                                                </select>
                                            </div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Payment Mode</label>
											<div class="controls">
												<select class="span4" name="mode">
                                                <?php
                                                    	if($r1[6]=='1')
														{
															echo "<option value='1'>Bank</option>";
														}
														else
														{
															echo "<option value='2'>Cash</option>";	
														}
													?>
                                                	<option value="1">Bank</option>
                                                    <option value="2">Cash <?php $res3=mysql_query("select ref_id from cash_book where type='Payment' order by ref_id desc limit 1"); while($r3=mysql_fetch_array($res3)){echo $r3[0]+1;} ?></option>
                                                </select>
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Amount</label>
											<div class="controls">
												<input id="amount" name="amount" class="span4" type="text" value="<?php echo $r1[5]; ?>" autocomplete="false" required>
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Ref Id</label>
											<div class="controls">
												<input id="ref" name="ref" class="span4" type="text" value="<?php echo $r1[3]; ?>" readonly="yes" autocomplete="false" >
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Description</label>
											<div class="controls">
												<input id="description" name="description" class="span4" type="text" value="<?php echo $r1[7]; ?>" autocomplete="false">
											</div>
									</div>
									<!--<div class="control-group ">
										<label class="control-label">Description</label>
											<div class="controls">
												<input id="description" name="description" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>-->
							</fieldset>
						</div>
					</div><?php } ?>
                    <footer id="submit-actions" class="form-actions">
						<input type="submit" name="submit" value="Edit" class="btn btn-primary" />
						<input type="reset" name="reset" value="Reset" class="btn btn-primary" />
					</footer>
				</div>
			</form>
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
