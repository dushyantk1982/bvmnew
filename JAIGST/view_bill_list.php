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
                                    <a href="purchase_mgmt.php">
                                        <i class="icon-glass icon-large"></i> Purchase
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
				Invoice Detail
			</h3>
		</section>
	</div>	
    
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
                        <!--<a href="inv_search_client.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Create New Invoice with Order</button></a>-->
                        <!--<a href="create_client_sales.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Create New Client</button></a>
                        <a href="create_sales.php?opt=1"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Create New Invoice</button></a>-->
                        <div class="box-content box-table">
                          <form action="" method="post">
                            	<!--  <select name="invoice_no" required>
                                	<?php
                                    	/*include('DAL/database.php');
										$res=mysql_query("select * from sales group by invoice_no ORDER BY date DESC");
										while($r=mysql_fetch_array($res))
										{
											echo "<option value='".$r[2]."'>".$r[2]."</option>";	
										}*/
									?>
                                </select>
                                <input type="submit" name="submit" value="View Invoice " class="btn btn-primary" />
                            </form>-->
                            <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                <thead>
                                    <tr>
                                        <!--<th>S.no.</th>-->
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Client Name</th>
                                        <th>Invoie Value</th>
                                        <th>Receivable Value</th>
                                        <th>Discount</th>
                                        <th>Received</th>
                                        <th>Receipt No</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
								$s=1;
									
										include('DAL/database.php');
										//$res1=mysql_query("select * from order_book where invoice_no");
										$res=mysql_query("select debtors.date, debtors.ref_id, client.client_id, client.client_name, debtors.inv_value, debtors.receivable from debtors join client on debtors.client_id=client.client_id order by debtors.date DESC");
										//$res=mysql_query("select currency_value.date, currency_value.invoice_id, client.client_name, currency_value.gross_value, currency.currency from currency_value join currency on currency.currency_id=currency_value.currency_id join client on client.client_id=currency_value.client_id ORDER BY currency_value.date DESC, currency_value.invoice_id DESC LIMIT 20 ");
										//$res=mysql_query("select invoice.invoice_no, invoice.date, client.client_name, client.address, client.city, client.state, client.country, client.pin, client.contact, client.mobile, order_book.order_id, order_book.description, order_book.qty, order_book.price, order_book.value, order_book.st, order_book.tax, order_book.netvalue, currency.currency from invoice join order_book on order_book.order_id=invoice.order_id join client on client.client_id=invoice.client_id join currency on order_book.currency_id=currency.currency_id ORDER BY invoice_id DESC LIMIT 5 ");
										while($r=mysql_fetch_array($res))
										{
											echo "<tr><td><input type='text' name='date' class='span2' value='".$r[0]."' readonly='yes'></td><td><input type='text' name='inv_no' class='span2' value='".$r[1]."' readonly='yes'></td><td><select name='client' class='span3' disabled='yes'><option value='".$r[2]."'>".$r[3]."</option></select></td><td><input type='text' name='inv_value' class='span2' value='".$r[4]."' readonly='yes'></td><td><input type='text' name='receivable' value='".$r[5]."' class='span2' readonly='yes'></td><td><input type='text' class='span2' name='discount' value=''></td></td><td><input type='text' name='recieved' class='span2' value=''></td><td><input type='text' name='rect_no' class='span2' value=''></td><td><select name='status' class='span2'><option value='Partial'>Partial</option><option value='Clear'>Clear</option></select></td>
			                                    </tr>";	
												//$s++;
										}
										//include('DAL/users_pageDAL.php');
										/*$num_rec_per_page=5;
										11$con = new userspage();
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
											$start_from = ($page-1) * $num_rec_per_page; 
											$res1=mysql_query("select currency_value.date, currency_value.invoice_id, order_book.description, order_book.netvalue, currency.currency, client.client_name from order_book join currency_value on currency_value.invoice_id=order_book.invoice_no join currency on currency.currency_id=order_book.currency_id join client on client.client_id=order_book.client_id where status='Billed' ORDER BY date DESC LIMIT $start_from, $num_rec_per_page");
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
                    <footer id="submit-actions" class="form-actions" align="right">
						<input type="submit" name="submit" value="Save" class="btn btn-primary" />
						<input type="reset" name="reset" value="Reset" class="btn btn-primary" />
					</footer>
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
