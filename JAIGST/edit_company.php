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
                                    <a href="Refilling_of_Cartridge.php">
                                        <i class="icon-user icon-large"></i> Users
                                    </a>
                                </li>
								<li>
                                    <a href="setting.php">
                                        <i class="icon-cog icon-large"></i> Setting
                                    </a>
                                </li>
								<li>
                                    <a href="parts_mgmt.php">
                                        <i class="icon-tag icon-large"></i> Currency
                                        <!--<i class="icon-credit-card>-->
                                    </a>
                                </li>
								<li>
                                    <a href="branch_mgmt.php">
                                        <i class="icon-map-marker icon-large"></i> Order Master
                                    </a>
                                </li>
								<li>
                                    <a href="cartridge_mgmt.php">
                                        <i class="icon-tasks icon-large"></i> Invoice Master
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
			
			$res=mysql_query("select * from company_profile");
			while($r=mysql_fetch_array($res))
			{
        	
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Edit Company Detail

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
								<legend>Company Detail</legend><br>
									<div class="control-group ">
										<label class="control-label">Company Name: </label>
											<div class="controls">
												<input id="company_name" name="company_name" class="span4" type="text" value="<?php echo $r[1]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Address</label>
											<div class="controls">
												<input id="address" name="address" class="span4" type="text" value="<?php echo $r[2]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">City</label>
											<div class="controls">
												<input id="city" name="city" class="span4" type="text" value="<?php echo $r[3]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">State</label>
											<div class="controls">
												<input id="state" name="state" class="span4" type="text" value="<?php echo $r[4]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Country</label>
											<div class="controls">
												<input id="country" name="country" class="span4" type="text" value="<?php echo $r[5]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Pin</label>
											<div class="controls">
												<input id="pin" name="pin" class="span4" type="text" value="<?php echo $r[6]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Telephone</label>
											<div class="controls">
												<input id="contact" name="contact" class="span4" type="text" value="<?php echo $r[7]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Mobile</label>
											<div class="controls">
												<input id="mobile" name="mobile" class="span4" type="text" value="<?php echo $r[8]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Mail ID</label>
											<div class="controls">
												<input id="mail" name="mail" class="span4" type="text" value="<?php echo $r[9]; ?>" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Web Site</label>
											<div class="controls">
												<input id="website" name="website" class="span4" type="text" value="<?php echo $r[10]; ?>" autocomplete="false" required>
											</div>
									</div>
                                    </fieldset>
                                    </div>
                                    <div id="acct-verify-row" class="span9">
							<fieldset>
								<legend>Tax Details</legend><br>
									<div class="control-group ">
										<label class="control-label">PAN No</label>
											<div class="controls">
												<input id="pan" name="pan" class="span4" type="text" value="<?php echo $r[11]; ?>" autocomplete="false">
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Tin No.</label>
											<div class="controls">
												<input id="tin" name="tin" class="span4" type="text" value="<?php echo $r[12]; ?>" autocomplete="false">
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Service Tax</label>
											<div class="controls">
												<input id="st" name="st" class="span4" type="text" value="<?php echo $r[13]; ?>" autocomplete="false">
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">CST No. </label>
											<div class="controls">
												<input id="cst" name="cst" class="span4" type="text" value="<?php echo $r[14]; ?>" autocomplete="false">
											</div>
									</div>
							</fieldset>
						</div>
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<input type="submit" name="submit" value="Save" class="btn btn-primary" />
						<!--<input type="reset" name="reset" value="Reset" class="btn btn-primary" />-->
					</footer>
				</div>
			
		</form>
	</section>
	</div>
</div>
          
<?php }
if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				$q="update `company_profile` set `company_name`='".$company_name."', `address`='".$address."', `city`='".$city."', `state`='".$state."', `country`='".$country."', `pin`='".$pin."', `contact`='".$contact."', `mobile`='".$mobile."', `mail`='".$mail."', `wesite`='".$website."', `PAN`='".$pan."', `TIN`='".$tin."', `ST`='".$st."', `CST`='".$cst."'";
				echo $q;
				mysql_query($q);
				header('location:company_info.php');
			}
 ?> 
        
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
