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
</ul><?php //include'menu.php'; ?>
                </div>
            </div>

                 <!-- End CONTROL BOX --> 
			
			<?php
			function convert_number_to_words($number) {

    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'Zero',
        1                   => 'One',
        2                   => 'Two',
        3                   => 'Three',
        4                   => 'Four',
        5                   => 'Five',
        6                   => 'Six',
        7                   => 'Seven',
        8                   => 'Eight',
        9                   => 'Nine',
        10                  => 'Ten',
        11                  => 'Eleven',
        12                  => 'Twelve',
        13                  => 'Thirteen',
        14                  => 'Fourteen',
        15                  => 'Fifteen',
        16                  => 'Sixteen',
        17                  => 'Seventeen',
        18                  => 'Eighteen',
        19                  => 'Nineteen',
        20                  => 'Twenty',
        30                  => 'Thirty',
        40                  => 'Fourty',
        50                  => 'Fifty',
        60                  => 'Sixty',
        70                  => 'Seventy',
        80                  => 'Eighty',
        90                  => 'Ninety',
        100                 => 'Hundred',
        1000                => 'Thousand',
        1000000             => 'Million',
        1000000000          => 'Billion',
        1000000000000       => 'Trillion',
        1000000000000000    => 'Quadrillion',
        1000000000000000000 => 'Quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}
			include('DAL/database.php');
			if($_REQUEST['invoice_no']=='')
			{
				$invoice_no=$_POST['invoice_no'];
			}
			else
			{
				$invoice_no=$_REQUEST['invoice_no'];	
			}
			//echo $invoice_no;
			/*$res1=mysql_query("select * from order_book where invoice_no='".$invoice_no."'");
			while($r1=mysql_fetch_array($res1))
			{
				$tot_val=$tot_val+$r1[10];	
			}*/
			/*$res=mysql_query("select invoice.invoice_no, invoice.date, client.client_name, client.address, client.city, client.state, client.country, client.pin, client.contact, client.mobile, order_book.order_id, order_book.description, order_book.qty, order_book.price, order_book.value, order_book.st, order_book.tax, order_book.netvalue, currency.currency from invoice join order_book on order_book.order_id=invoice.order_id join client on client.client_id=invoice.client_id join currency on order_book.currency_id=currency.currency_id where invoice_no='".$invoice_no."'");*/
			
			$res=mysql_query("select * from sales where invoice_no='".$invoice_no."'");
			while($r=mysql_fetch_array($res))
			{
				$inv_date=$r[1];
				$client_id=$r[3];
				$totalnetval=$r[4];
				$cgst=$r[5];
				$sgst=$r[6];
				$igst=$r[7];
				$netamount=$r[8];
				
			}
			$date = strtotime($inv_date);
			$inv_date=date('d/m/Y', $date);
			$res1=mysql_query("select * from client where client_id='".$client_id."'");
			while($r1=mysql_fetch_array($res1))
			{
				$client_name=$r1[1];
				$client_add=$r1[2];	
				$client_mob=$r1[4];	
				$client_gst=$r1[5];	
				/*$client_city=$r1[3];
				$client_state=$r1[4];
				$client_country=$r1[5];
				$client_pin=$r1[6];
				$client_contact=$r1[7];
				$client_mob=$r1[8];
				$client_mail=$r1[9];*/
			}
			/*$res4=mysql_query("select currency.currency from order_book join currency on order_book.currency_id=currency.currency_id where invoice_no='".$invoice_no."'");
			while($r4=mysql_fetch_array($res4))
			{
				$currency=$r4[0];	
			}*/
			/*$res5=mysql_query("select * from bank");
			while($r5=mysql_fetch_array($res5))
			{
				$bank_name=$r5[1];
				$bank_add=$r5[2];	
				$bank_ac_name=$r5[3];
				$ac_no=$r5[4];
				$ac_type=$r5[5];
				$ifsc=$r5[6];
				$swift=$r5[7];
			}*/
			$res6=mysql_query("select * from company_profile");
			while($r6=mysql_fetch_array($res6))
			{
				$company_name=$r6[1];
				$company_add=$r6[2];	
				$company_city=$r6[3];
				$company_state=$r6[4];
				$company_country=$r6[5];
				$company_pin=$r6[6];
				$company_contact=$r6[7];
				$company_mob=$r6[8];
				$company_mail=$r6[9];
				$company_st=$r6[13];
				$company_cst=$r6[14];
				$company_gst=$r6[12];
			}
			?>
<div class="box" style="border-style:2px solid #000;">
	<div class="container">
    	<div class="box-content">
        <a href="JavaScript:newPopup('print_invoice.php?invoice_no=<?php echo $invoice_no;?>');">Print Bill</a>
        	<table align="center" height="600" width="900" style="border:1px solid #000;">
            <tr><td align="center" colspan="2"><font style="font-size:12px;">Tax Invoice</font></td></tr>
            <tr><td align="center" colspan="2"><font style="font-size:14px; font-weight:bold;"><?php echo $company_name; ?></font><br/><font style="font-size:12px;"><?php echo $company_add; ?></font><br/><font style="font-size:12px;">GSTIN No. : <?php echo $company_gst; ?></font></td></tr>
            	<tr>
                	<td>
                    	<table width="100%" style="margin-left:20px;">
                        	<tr><td style="font-size:12px; font-weight:bold;">Bill to</td><td style="font-size:12px; font-weight:bold;"> : <?php echo $client_name; ?></td></tr>
                            <tr><td style="font-size:12px;">Address</td><td style="font-size:12px;"> : <?php echo $client_add; ?></td></tr>
                            <tr><td style="font-size:12px;">GSTIN</td><td style="font-size:12px;"> : <?php echo $client_gst; ?></td></tr>
                            <tr><td style="font-size:12px;">Tel</td><td style="font-size:12px;"> : <?php echo $client_mob; ?></td></tr>
                            
                            
                            
                            
                        </table>
                    </td>
                    <td>
                    	<table width="100%">
                        	
                            <tr><td align="left" ><font style="font-size:12px; margin-left:500px;">Bill No.: <?php echo "# ".$invoice_no; ?></font></td></tr>
                            <tr><td align="left"><font style="font-size:12px; margin-left:500px;">Date: <?php echo $inv_date; ?></font></td></tr>
                            <tr><td>&nbsp;</td></tr>								                            
                        </table>
                    </td>
                </tr>
                <!--<tr><td><table style="border-bottom:1px solid #000;" width="100%"><tr><td width="100%">&nbsp;</td></tr></table></td></tr>-->
                
                
                <tr>
                	<td colspan="2">
                    	<table width="90%" style="margin-left:20px;">
                        	<tr style="border-top:1px solid #000; border-bottom:1px solid #000;">
                            	<th width="25%" align="left" style="font-size:12px;">Product</th>
                                <th width="6%" align="center" style="font-size:12px;">MRP</th>
                                <th width="6%" align="center" style="font-size:12px;">Quantity</th>
                                <th width="8%" align="right" style="font-size:12px;">Rate</th>
                                <th width="8%" align="right" style="font-size:12px;">Amount</th>
                                <th width="8%" align="right" style="font-size:12px;">% Rate</th>
                                <th width="8%" align="right" style="font-size:12px;">CGST</th>
                                <th width="8%" align="right" style="font-size:12px;">% Rate</th>
                                <th width="8%" align="right" style="font-size:12px;">SGST</th>
                                <!--<th width="5%" align="center" style="font-size:12px;">Disc%</th>
                                <th width="12%" align="right" style="font-size:12px;">Dis. Amt</th>
                                <th width="12%" align="right" style="font-size:12px;">Base Amt</th>
                                <th width="5%" align="right" style="font-size:12px;">Vat %</th>
                                <th width="12%" align="right" style="font-size:12px;">Vat Tax</th>-->
                                <th width="15%" align="right" style="font-size:12px;">Total Amt.</th>
                            	
                            </tr><!--</table><table width="90%" style="margin-left:20px; border-top:1px solid #000; border-bottom:1px solid #000;">-->
                            <?php
								$s=1;
								//$res2=mysql_query("select * from item_movment where invoice_no='".$invoice_no."'");
								$res2=mysql_query("select item.item, item.MRP, item_stock.sales_qty, item_stock.sales_rate, item_stock.base_amt, item_stock.cgst_rate, item_stock.cgst, item_stock.sgst_rate, item_stock.sgst, item_stock.net_amt from item_stock join item on item.item_id=item_stock.item_id where invoice_no='".$invoice_no."'");
								while($r2=mysql_fetch_array($res2))
								{
									echo "<tr><td width='25%' style='font-size:12px;'>".$r2[0]."</td><td width='6%' style='font-size:12px;'>".$r2[1]."</td><td width='6%' align='center' style='font-size:12px;'>".$r2[2]."</td><td width='8%' align='center' style='font-size:12px;'>".$r2[3]."</td><td width='8%' align='right' style='font-size:12px;'>".$r2[4]."</td><td width='8%' align='right' style='font-size:12px;'>".$r2[5]."</td><td width='8%' align='right' style='font-size:12px;'>".$r2[6]."</td><td width='8%' align='right' style='font-size:12px;'>".$r2[7]."</td><td width='8%' align='right' style='font-size:12px;'>".$r2[8]."</td><td width='8%' align='right' style='font-size:12px;'>".$r2[9]."</td></tr>";	
									$s=$s+1;
								}
								echo "<tr><td align='center'>&nbsp;</td><td>&nbsp;</td><td align='center'>&nbsp;</td><td align='center'>&nbsp;</td></tr>";
								echo "<tr style='border-top:1px solid #000; border-bottom:1px solid #000;'>";
								$res3=mysql_query("select * from sales where invoice_no='".$invoice_no."'");
								while($r3=mysql_fetch_array($res3))
								{
									echo "<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td align='right' style='font-size:12px;'>".$r3[4]."</td><td>&nbsp;</td><td align='right' style='font-size:12px;'>".$r3[5]."</td><td align='right' style='font-size:12px;'>&nbsp;</td><td align='right' style='font-size:12px;'>".$r3[6]."</td><td align='right' style='font-size:12px;'>".$r3[8]."</td>";
									//echo "<td align='right' style='font-size:12px;'>".$r3[6]."</td>";
									//echo "<td>&nbsp;</td><td align='right' style='font-size:12px;'>".$r3[7]."</td>";
									//echo "<td align='right' style='font-size:12px;'>".$r3[8]."</td>";	
									$grand_val=$r3[8];
								}echo "</tr>";
								//echo "<tr><td colspan='4'>".strval(mixed $grand_val)."</td></tr>";
								
								//echo "<tr><td colspan='4'>".convert_number_to_words($grand_val)."</td></tr>";
							?>
                        </table>
                        
                    </td>
                </tr>
                <tr>
                <td colspan="2">
                    	<?php
                        	$res7=mysql_query("select * from sales where invoice_no='".$invoice_no."'");
								while($r7=mysql_fetch_array($res7))
								{$cgst=$r7[5];
								$sgst=$r7[6];
								$igst=$r7[7];
								$total_base_amt=$r7[4];	
								$total_gross=$r7[8];
								$total_disc=$r7[9];
								$total_net=$r7[10];
								}
							
														
						?>
                        <table style="margin-left:20px;">
                        	<tr>
                            	<td style="font-size:12px;">Total Base Amount : </td><td align="right" style="font-size:12px;"><?php echo $total_base_amt; ?></td></tr>
                               
                                 <tr><td style="font-size:12px;">Add CGST  : </td><td align="right" style="font-size:12px;"><?php echo $cgst; ?></td></th>
                                <tr><td style="font-size:12px;">Add SGST  : </td><td align="right" style="font-size:12px;"><?php echo $sgst; ?></td></th>
                                <tr><td style="font-size:12px;">Gross Amount  <?php echo $igst; ?> : </td><td align="right" style="font-size:12px;"><?php echo $total_gross; ?></td></th>
                                <tr><td style="font-size:12px;">Less Discount <?php echo $igst; ?> : </td><td align="right" style="font-size:12px;"><?php echo $total_disc; ?></td></th>
                                <tr><td style="font-size:12px;">Net Payable Amount :</td><th align="right" style="font-size:12px;"><?php echo $total_net; ?></th></th>
                            </tr>
                            <tr style="border-bottom:1px solid #000;"><td></td><td></td></tr>
                        </table>
                    </td>
                </tr>
                <!--<tr>
                	<td colspan="2"><font style="margin-left:20px; font-weight:bold;">In Words:</font> <?php //echo convert_number_to_words($grand_val)." Only"; ?></td>
                </tr>
                <tr>
                	<td colspan="2"><font style="margin-left:20px; font-weight:bold;">Currency:</font> <?php //echo $currency; ?></td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<table style="margin-left:20px;">
                        	<tr><td>&nbsp;</td></tr>
                        	<tr><td><font style="font-size:16px; font-weight:bold;"><u>Bank Account Details</u></font></td></tr>
                            <tr><td><font style="font-weight:bold;">Bank Name : </font> <?php //echo $bank_name; ?></td></tr>
                            <tr><td><font style="font-weight:bold;">Branch Address : </font> <?php //echo $bank_add; ?></td></tr>
                            <tr><td><font style="font-weight:bold;">Account Holder Name : </font> <?php //echo $bank_ac_name; ?></td></tr>
                            <tr><td><font style="font-weight:bold;">Account Number : </font> <?php //echo $ac_no; ?></td></tr>
                            <tr><td><font style="font-weight:bold;">Account Type : </font> <?php //echo $ac_type; ?></td></tr>
                            <tr><td><font style="font-weight:bold;">IFSC Code : </font> <?php //echo $ifsc; ?></td></tr>
                            <tr><td><font style="font-weight:bold;">SWIFT BIC : </font> <?php //echo $swift; ?></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td><font style="font-size:16px; font-weight:bold;"><u>Tax Details</u></font></td></tr>
                            <tr><td><font style="font-weight:bold;">Service Tax No. : </font> <?php //echo $company_st; ?></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                    	</table>
                    </td>
                </tr>-->
                <tr><td><a href="JavaScript:newPopup('print_invoice.php?invoice_no=<?php echo $invoice_no;?>');">Print Bill</a></td></tr>
            </table>
                            
           </div>                 
                            
                            
                            
                            
                            
                            
                            
                            
                            <!--<section class="content-header">
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
										<!--<label class="control-label">Company Name: </label>
											<div class="controls">
												Order No <?php //echo $r[2]; ?><!--<input id="client_name" name="client_name" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Address</label>
											<div class="controls">
												Order Date <?php //echo $r[0]; ?><!--<input id="address" name="address" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">City</label>
											<div class="controls">
												Client <?php //echo $r[1]; ?><!--<input id="city" name="city" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">State</label>
											<div class="controls">
												Order Description <?php //echo $r[3]; ?><!--<input id="state" name="state" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Country</label>
											<div class="controls">
												Quantity <?php //echo $r[4]; ?><!--<input id="country" name="country" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Pin</label>
											<div class="controls">
												Price <?php //echo $r[5]; ?><!--<input id="pin" name="pin" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Telephone</label>
											<div class="controls">
												Gross Value <?php //echo $r[6]; ?><!--<input id="contact" name="contact" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Mobile</label>
											<div class="controls">
												Service Tax <?php //echo $r[7]; ?> %<!--<input id="mobile" name="mobile" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									<div class="control-group ">
										<!--<label class="control-label">Mail ID</label>
											<div class="controls">
												Tax Value <?php //echo $r[8]; ?><!--<input id="mail" name="mail" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
                                    <div class="control-group ">
										<!--<label class="control-label">Mail ID</label>
											<div class="controls">
												Nat Value <?php //echo $r[9]; ?><!--<input id="mail" name="mail" class="span4" type="text" value="" autocomplete="false" required>
											</div>
									</div>
									
                                    </fieldset>
                                    </div>
                                    
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<a href="JavaScript:newPopup('print_order.php?order_id=<?php //echo $r[2]; ?>');"><button id="submit-button" type="button" class="btn btn-primary" name="action" value="" style="margin-bottom:20px">Print Order</button></a>
                        <!--<a href="JavaScript:newPopup('popen.php?to=<?php //echo @$to;?> & from=<?php //echo @$from;?>');">Open a popup window</a>
					</footer>
				</div>
			
		</form>
	</section>-->
	</div>
</div>   <?php //} ?>     <!-- Start COPYRIGHT -->
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
