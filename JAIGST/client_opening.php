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
                   			<?php include'menu.php'; ?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<?php
			include('DAL/database.php');
			if($_REQUEST['submit']=='Save')
			{
				extract($_POST);
				if(!empty($_POST['inv_date']))
				{
					$date=$_POST['inv_date'];
					//echo $date."<br>";
					$date = strtotime($date);
					$inv_date=date('Y/m/d', $date);
					//echo $date;
				}	
				
				$q="INSERT INTO `debtors` (`trn_id`, `category`, `date`, `area_id`, `client_id`, `ref_id`, `inv_value`, `rect_value`,`balance`,`status`) VALUES ('', '".$category."', '".$inv_date."', '".$beat."', '".$client_id."', '".$inv_no."', '".$inv_value."', '".$rect_value."', '".$balance."', 'Opening')";
				mysql_query($q);
				$q1="INSERT INTO `bills_trn` (`trn_id`, `date`,`category`, `area_id`, `client_id`, `inv_no`, `inv_value`, `rect_value`, `mode`, `status`) VALUES ('', '".$inv_date."', '".$category."', '".$beat."', '".$client_id."', '".$inv_no."', '".$inv_value."', '".$rect_value."', 'Sales','Uncleared')";
			mysql_query($q1);
				header('location:client_mgmt.php');
			}
        		
			?>
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Add Client Openings

                                </h3>
                             </section>
                        </div>
						<form action="" method="post">
							<select name="beat" required>
                				<option value="">-Select Area--</option>
                				<?php
				                	include('DAL/database.php');
									$res5=mysql_query("select * from area");
									while($r5=mysql_fetch_array($res5))
									{
										echo "<option value='".$r5[0]."'>".$r5[1]."</option>";	
									}
						
								?>
                			</select>
							 <input type="submit" value="View" name="submit" />
						</form>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
		<?php
			if($_REQUEST['submit']=='View')
			{?>
			<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
							<div class="control-group ">
								<label class="control-label">Name: </label>
									<div class="controls">
										<select name="client_id" class="span5" required>
										<option value="">Select Client</option>
                                                    <?php
														$beat=$_POST['beat'];
														echo $beat;
                                                    	$res=mysql_query("select * from client where area_id='".$beat."' order by client_name ASC");
														while($r=mysql_fetch_array($res))
														{
															echo "<option value='".$r[0]."'>".$r[1]."&nbsp; - &nbsp;".$r[2]."</option>";	
														}
													?>
                                                </select>
									
										<input id="beat" name="beat" class="span4" type="hidden" value="<?php echo $beat; ?>" autocomplete="false" required>
									</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Invoice Date</label>
											<div class="controls">
												<input type="date" name="inv_date" value="" class="span5" autocomplete="false" required>
											</div>
									</div>
                                    <div class="control-group ">
										<label class="control-label">Invoice No</label>
											<div class="controls">
												<input type="text" name="inv_no" value="" class="span5" autocomplete="false" required>
											</div>
									</div>
									
									<div class="control-group ">
										<label class="control-label">Invoice Value</label>
											<div class="controls">
												<input name="inv_value" class="span4" type="text" value="" autocomplete="false" >
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Received Value</label>
											<div class="controls">
												<input name="rect_value" class="span4" type="text" value="" autocomplete="false" >
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Balance Value</label>
											<div class="controls">
												<input name="balance" class="span4" type="text" value="" autocomplete="false" >
											</div>
									</div>
									<div class="control-group ">
										<label class="control-label">Category</label>
											<div class="controls">
												<select name="category" required>
                									<option value="">-Select Category--</option>
												<?php
													include('DAL/database.php');
													$res8=mysql_query("select * from category");
													while($r8=mysql_fetch_array($res8))
													{
														echo "<option value='".$r8[0]."'>".$r8[1]."</option>";
													}
												?>
												</select>
											</div>
									</div>
									
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
	</body>
<!-- End BODY -->
</html>
<?php
}
else
{header('location:signout.php');}
?>
