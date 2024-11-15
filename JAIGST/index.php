<?php
error_reporting(1);
session_start();
include("DAL/database.php");
extract($_POST);
	
	if($_REQUEST['msg']=='err')
	{
		$strmsg="<div class='span16 pull-right'  ><div style='float:right' id='myalert' class='alert alert-success fade in'> <button type='button' class='close' data-dismiss='alert'>×</button><strong style='color:red'> User Name or Password mismatch. </strong> <span style='color:red'> Please try again.</span></div> </div>";
	}
		
?>
<!DOCTYPE html>
<html lang="en">
<!-- Start HEAD -->
<head>
    <!-- Start META -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Invoice Manager</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="layout" content="main"/>
    <!-- End META -->
    <!-- Start MAIN CSS AND JQUERY -->
    <script src="js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <!-- End MAIN CSS AND JQUERY -->
</head>
<!-- End HEAD -->
<!-- Start BODY -->
    <body>
        <!-- Start HEADER -->
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand"><img src="images/Dsys Logo.png" width="20px" height="20px" />Invoice Manager</a>
                    
                </div>
            </div>
        </div>
        <!-- End HEADER -->
        <!-- Start LOGIN BOX -->
        <div id="body-container">
                    <div id="body-content">
                        
                        
            <div class='container'>
                
                <div class="signin-row row">
                    <div class="span4"></div>
					
                    <div class="span8">
					<div><?php echo $strmsg; ?></div>
                        <div class="container-signin">
						<!--Login Form-->
						<legend>Login Here</legend>
                  			<!--Start FORM-->
				            <form action="login.php" method="POST" id="loginForm" class="form-signin" autocomplete="off">
                                <div class="form-inner">
                                    <div class="input-prepend">
                                        
                                        <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                        <input type='text' name="loginid" class='span4' id='username'/>
                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' name="password" class='span4' id='password'/>
                                    </div>
                                    <label class="checkbox" for='remember_me'>Remember me
                                        <input type='checkbox' id='remember_me'
                                               />
                                    </label>
									
								
								<script>$(document).ready(function() {$('#myalert').delay(2000).addClass('out').fadeOut(3000);});</script>
							
                                </div>
                                <footer class="signin-actions">
								
								   <input class="btn btn-primary" type='submit' id="submit" value='Login'/>
									
                                </footer>
                            </form>
							<!--End FORM-->
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>
            </div>
    

            </div>
        </div>
        <!-- End LOGIN BOX -->

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>
        <!-- Start COPYRIGHT -->

        <footer class="application-footer">
            <div class="container">
                <div class="disclaimer">
                    <p>All right reserved.</p>
                    <p>Copyright © D-Sys Data Solutions Pvt. Ltd.</p>
                </div>
            </div>
        </footer>
        <!-- End COPYRIGHT -->

        <!-- Start JS REQUIRED FOR THIS PAGE ONLY -->
        <script type="text/javascript">
            $(function(){
                document.forms['loginForm'].elements['j_username'].focus();
                $('body').addClass('pattern pattern-sandstone');
                $("[rel=tooltip]").tooltip();
            });
        </script>
        <script src="js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="js/jquery/virtual-tour.js" type="text/javascript" ></script>
        <!-- End JS REQUIRED FOR THIS PAGE ONLY -->
	</body>

<!-- End BODY -->
</html>