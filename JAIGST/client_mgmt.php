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
			
<div class="box">
	<div class="container">
		<section class="content-header">
			<h3>
				Client List
			</h3>
		</section>
	</div>	
    
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
                        <a href="create_client.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Add New Client</button></a>
                        <a href="client_opening.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Add Client Opening</button></a>
                        <form action="" name="count" method="post">
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
                        <div class="box-content box-table">
                            <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                <thead>
                                    <tr>
                                        <th>S.no.</th>
                                        <th>Client Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <!--<th>A/C Holding Name</th>
                                        <th>Account No</th>
                                        <th>Account Type</th>
                                        <th>IFSC Code</th>
                                        <th>SWIFT BIC Code</th>-->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
										include('DAL/database.php');
										if($_REQUEST['submit']=='View')
										{ $beat=$_POST['beat'];
											$res1=mysql_query("select * from client where area_id='".$beat."'");
										while($r1=mysql_fetch_array($res1))
										{
											echo "<tr><td>".$r1[0]."</td><td>".$r1[1]."</td><td>".$r1[2]."</td><td>".$r1[4]."</td><td class='td-actions'>
                                            	<a href='view_client.php?opt=2&client_id=$r[0]' class='btn btn-small btn-info'>
                                            	    <i class='btn-icon-only icon-eye-open'>View</i>
                                            	</a>
												<a href='edit_client.php?opt=3&client_id=$r[0]' class='btn btn-small btn-info'>
                                                	<i class='btn-icon-only icon-edit'></i>
                                            	</a>
                                           		<a href='del_client.php?opt=2&client_id=$r[0]' onClick='confirmDelete();' class='btn btn-small btn-danger'>
                                            	    <i class='btn-icon-only icon-remove'></i>
                                            	</a>
												</td>
			                                    </tr>";	
										}
										}
										else
										{
										$res2=mysql_query("select * from client");
										while($r2=mysql_fetch_array($res2))
										{
											echo "<tr><td>".$r2[0]."</td><td>".$r2[1]."</td><td>".$r2[2]."</td><td>".$r2[4]."</td><td class='td-actions'>
                                            	<a href='view_client.php?opt=2&client_id=$r[0]' class='btn btn-small btn-info'>
                                            	    <i class='btn-icon-only icon-eye-open'>View</i>
                                            	</a>
												<a href='edit_client.php?opt=3&client_id=$r[0]' class='btn btn-small btn-info'>
                                                	<i class='btn-icon-only icon-edit'></i>
                                            	</a>
                                           		<a href='del_client.php?opt=2&client_id=$r[0]' onClick='confirmDelete();' class='btn btn-small btn-danger'>
                                            	    <i class='btn-icon-only icon-remove'></i>
                                            	</a>
												</td>
			                                    </tr>";	
										}}
										/*include('DAL/users_pageDAL.php');
										$num_rec_per_page=15;
										$con = new userspage();
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
											$start_from = ($page-1) * $num_rec_per_page; 
											$res=$con->select_page($start_from, $num_rec_per_page);
											$s=1;
											while($row=mysql_fetch_row($res))
											{ 
												echo "<tr><td>".$s."</td><td>".$row['1']."</td><td>".$row['7']."</td><td>".$row['3']."</td><td>".$row['5']."</td><td>".$row['6']."</td><td class='td-actions'>
                                            	<a href='users.php?opt=3&uid=$row[3]' class='btn btn-small btn-info'>
                                                	<i class='btn-icon-only icon-edit'></i>
                                            	</a>
                                           		<a href='del_user.php?opt=2&uid=$row[3]' onClick='confirmDelete();' class='btn btn-small btn-danger'>
                                            	    <i class='btn-icon-only icon-remove'></i>
                                            	</a>
												</td>
			                                    </tr>";$s=$s+1;
											}*/
										?>
                                </tbody>
                            </table>
						</div>
					</div>
            	</div>
			</form>
		</section>
	</div></div>
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
