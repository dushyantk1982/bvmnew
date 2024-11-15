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
				Order Detail
			</h3>
		</section>
	</div>	
    
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
                        <a href="create_order.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Book New Order</button></a>
                        <div class="box-content box-table">
                            <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                <thead>
                                    <tr>
                                        <th>S.no.</th>
                                        <th>Date</th>
                                        <th>Client Name</th>
                                        <th>Order No</th>
                                        <th>Description</th>
                                        <th>Value</th>
                                        <th>Currency</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
								$s=1;
										include('DAL/database.php');
										$res=mysql_query("select order_book.order_date, client.client_name, order_book.order_id, order_book.description, order_book.netvalue, currency.currency, order_book.status from order_book join client on client.client_id=order_book.client_id join currency on currency.currency_id=order_book.currency_id where status='Unbilled'");
										while($r=mysql_fetch_array($res))
										{
											echo "<tr><td>".$s."</td><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td class='td-actions'>
                                            	<a href='view_order.php?opt=2&order_id=$r[2]' class='btn btn-small btn-info'>
                                            	    <i class='btn-icon-only icon-eye-open'>View</i>
                                            	</a>
												<a href='edit_order.php?opt=3&order_id=$r[2]' class='btn btn-small btn-info'>
                                                	<i class='btn-icon-only icon-edit'></i>
                                            	</a>
                                           		<a href='del_order.php?opt=2&order_id=$r[2]' onClick='confirmDelete();' class='btn btn-small btn-danger'>
                                            	    <i class='btn-icon-only icon-remove'></i>
                                            	</a>
												</td>
			                                    </tr>";	
												$s++;
										}
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
