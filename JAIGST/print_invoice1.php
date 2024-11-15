<?php 
error_reporting(1);
session_start();
if(isset($_SESSION['login']) && $_SESSION['type']=='Admin')
{
?>
<html lang="en">
<head>
    <title>Invoice</title>
    <link href="print.css" media="print" rel="stylesheet" type="text/css" >
    <script>
function doit(){
if (!window.print){
alert("You need NS4.x to use this print button!")
return
}
window.print()
}
</script>
</head>
<body>
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
			}
			$date = strtotime($inv_date);
			$inv_date=date('d/m/Y', $date);
			$res1=mysql_query("select * from client where client_id='".$client_id."'");
			while($r1=mysql_fetch_array($res1))
			{
				$client_name=$r1[1];
				$client_add=$r1[2];	
				$client_city=$r1[3];
				$client_mob=$r1[4];
				$client_country=$r1[5];
				$client_state=$r1[6];
				$client_contact=$r1[7];
				//$client_mob=$r1[8];
				$client_mail=$r1[9];
				$client_tin=$r1[5];
			}
			$res4=mysql_query("select currency.currency from order_book join currency on order_book.currency_id=currency.currency_id where invoice_no='".$invoice_no."'");
			while($r4=mysql_fetch_array($res4))
			{
				$currency=$r4[0];	
			}
			$res5=mysql_query("select * from bank");
			while($r5=mysql_fetch_array($res5))
			{
				$bank_name=$r5[1];
				$bank_add=$r5[2];	
				$bank_ac_name=$r5[3];
				$ac_no=$r5[4];
				$ac_type=$r5[5];
				$ifsc=$r5[6];
				$swift=$r5[7];
			}
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
				$company_tin=$r6[12];
			}
			?>
            
            <div style="margin-left:auto; margin-right:auto; height:586px; border-style:2px solid #000;">
            	<!--<div style="margin-left:auto; margin-right:auto; font-size:12px; font-family:'Times New Roman', Times, serif; height:65px;">
                	<div align="center" style="font-size:9px;">Tax Invoice</div>
                    <div align="center" style="font-size:14px; font-weight:bold;"><?php //echo $company_name; ?></div>
                    <div align="center" style="margin-top:1px;"><?php //echo $company_add; ?></div>
                    <div align="center">GSTIN : <?php //echo $company_tin; ?></div>
                    <div align="center">Tel.  : <?php //echo $company_mob; ?></div>
                </div>-->
                <div style="margin-left:auto; font-size:12px; font-family:'Times New Roman', Times, serif; height:75px;">
                <table style="width:100%; border:2px solid #000;">
                	<tr style="border-bottom:1px solid #000;">
                    	<td>
                        	<table style="width:400px; border-right:1px solid#000; ">
                            	<tr>
                                	<td>
                                    	<div align="left" style="font-size:14px; font-weight:bold;"><?php echo $company_name; ?></div>
                   						<div align="left" style="margin-top:1px;"><?php echo $company_add; ?></div>
                    					<div align="left">Mob  : <?php echo $company_mob; ?></div>
                                        <div align="left">GSTIN : <?php echo $company_tin; ?></div>
                    				</td>
                                </tr>
                            </table>
                            </td><td>
                            <table style="width:400px; border:0px solid #000;">
                            	<tr>
                                	<td>
                                    	<div align="left" style="font-size:14px; font-weight:bold;"><?php echo $client_name; ?></div>
                   						<div align="left" style="margin-top:1px;"><?php echo $client_add; ?></div>
                    					<div align="left">Mob : <?php echo $client_mob; ?></div>
                    					<div align="left">GSTIN  : <?php echo $client_tin; ?></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	<table style="width:800px; border:1px solid #F00;">
                            	<tr>
                                	<td style="width:300px; border-right:1px solid #000;">Place of Supply: <?php echo $client_state."&nbsp;"; ?></td>
                                    <td style="width:100px; border-right:1px solid #000;">TAX INVOICE</td>
                                    <td>
                        				<table>
                            					<tr>
                        							<td >Bill No. </td><td>: <?php echo "# ".$invoice_no."&nbsp;"; ?></td>
                        						</tr>
                        						<tr>
                        							<td >Date </td><td >: <?php echo $inv_date."&nbsp;"; ?></td>
                        						</tr>
                             			</table>
                         			</td>
                                </tr>
                            </table>
                        </td>
                     </tr>
                    <!--	<td style="width:200px; border-right:1px solid #000;">Place of Supply: <?php //echo $client_state."&nbsp;"; ?></td>
                        <td style="width:50px;">TAX INVOICE</td>
                        <td style="width:100px;">
                        	<table>
                            	<tr>
                        			<td >Bill No. </td><td>: <?php //echo "# ".$invoice_no."&nbsp;"; ?></td>
                        		</tr>
                        		<tr>
                        			<td >Date </td><td >: <?php //echo $inv_date."&nbsp;"; ?></td>
                        		</tr>
                             </table>
                         </td>
                    </tr>-->
                    </table>
                    
                    <tr>
                    	<!--<td style="width:600px; margin-left:10px;">
                        	<table>
							<tr>
                    	<td style="text-align:left; font-size:12; font-weight:bolder;">Bill To </td><td style="text-align:left; font-size:12; font-weight:bolder;">: <?php //echo $client_name; ?></td></tr>
                            <tr><td style="text-align:left; font-size:12; font-weight:bolder;">Address </td><td style="text-align:left; font-size:12; font-weight:bolder;">: <?php //echo $client_add; ?></td></tr>
                            <tr><td style="text-align:left; font-size:12; font-weight:bolder;">GSTIN </td><td style="text-align:left; font-size:12; font-weight:bolder;">: <?php //echo $client_tin; ?></td></tr>
                            <tr><td style="text-align:left; font-size:12; font-weight:bolder;">Mobile </td><td style="text-align:left; font-size:12; font-weight:bolder;">: <?php //echo $client_mob; ?></td></tr>
 						                   
                   </table></td>--><!--<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>--> 
                    <td>
                    	<!--<table>
                        	<tr><td></td><td></td><td style="text-align:left; font-size:12; font-weight:bolder; margin-left:50px;">Bill No. </td><td style="text-align:left; font-size:12; font-weight:bolder;">: <?php //echo "# ".$invoice_no."&nbsp;"; ?></td></tr>
                        <tr><td></td><td></td><td style="text-align:left; font-size:12; font-weight:bolder;">Date </td><td style="text-align:left; font-size:12; font-weight:bolder;">: <?php //echo $inv_date."&nbsp;"; ?></td></tr>
                        <tr><td></td><td></td><td style="text-align:left; font-size:12; font-weight:bolder;">Place of Supply </td><td style="text-align:left; font-size:12; font-weight:bolder;">: <?php //echo $client_state."&nbsp;"; ?></td></tr>
                        <tr><td></td></tr>
                        </table>-->
                        
                    </td></tr>
                </table>
                	
                    
                    
                    
                    
                    
                    
                </div>
                <div style="margin-left:auto; margin-right:auto; font-size:12px; font-family:'Times New Roman', Times, serif; height:28px; border-top:1px solid #000; border-bottom:1px solid #000;">
                	
                    <div align="left" style="width:25%; margin-top:5px; float:left;">Product Name</div>
                    <div align="left" style="width:6%; margin-top:5px; text-align:right; float:left;">MRP</div>
                    <div align="left" style="width:6%; margin-top:5px;text-align:center; float:left;">Qty.</div>
                    <div align="left" style="width:8%; text-align:center; float:left;">Base<div style="text-align:center;">Rate</div></div>
                    <div align="left" style="width:8%; text-align:center; float:left;">Base<div style="text-align:center;">Amount</div></div>
                    <div align="left" style="width:16%; text-align:center; float:left;">CGST <div>% Rate&nbsp;&nbsp; AMT</div></div>
                    <div align="left" style="width:16%; text-align:center; float:left;">SGST <div>% Rate&nbsp;&nbsp; AMT</div></div>
                    <div align="left" style="width:15%; text-align:center; float:left;">Amount</div>
                </div>
                <div style="margin-left:auto; margin-right:auto; font-size:12px; font-family:'Courier New', Courier, monospace; height:250px;">
					<?php
                		$s=1;
						$res2=mysql_query("select item.item, item.MRP, item_stock.sales_qty, item_stock.sales_rate, item_stock.base_amt, item_stock.cgst_rate, item_stock.cgst, item_stock.sgst_rate, item_stock.sgst, item_stock.net_amt from item_stock join item on item.item_id=item_stock.item_id where invoice_no='".$invoice_no."'");
						while($r2=mysql_fetch_array($res2))
						{
							echo "<div style='margin-left:auto; margin-right:auto; font-size:12px; font-family:'Times New Roman', Times, serif; height:15px;'>
		            	    		
	    		        	        <div align='left' style='width:25%; float:left;'>".$r2[0]."</div>
    	        		    	    <div align='left' style='width:6%; text-align:right; float:left;'>".$r2[1]."</div>
		        	            	<div align='left' style='width:6%; text-align:center; float:left;'>".$r2[2]."</div>
	    		    	            <div align='left' style='width:8%; text-align:right; float:left;'>".$r2[3]."</div>
    	        			        <div align='left' style='width:8%; text-align:right; float:left;'>".$r2[4]."</div>
		        	        	    <div align='left' style='width:8%; text-align:right; float:left;'>".$r2[5]."</div>
				                    <div align='left' style='width:8%; text-align:right; float:left;'>".$r2[6]."</div>
        				            <div align='left' style='width:8%; text-align:right; float:left;'>".$r2[7]."</div>
				                    <div align='left' style='width:8%; text-align:right; float:left;'>".$r2[8]."</div>
        				            <div align='left' style='width:15%; text-align:right; float:left;'>".$r2[9]."</div>
                			</div>";
							$s=$s+1;
						}
						?>
                </div>
				<div style="margin-left:auto; margin-right:auto; font-size:12px; font-family:'Courier New', Courier, monospace; height:15px; border-top:1px solid #000; border-bottom:1px solid #000;">
                		<?php
							$res3=mysql_query("select * from sales where invoice_no='".$invoice_no."'");
								while($r3=mysql_fetch_array($res3))
								{
									echo "<div align='left' style='width:3%; float:left;'>&nbsp;</div>
				                    <div align='right' style='width:25%; float:left;'>Total</div>
				                    <div align='left' style='width:6%; text-align:right; float:left;'>&nbsp;</div>
				                    <div align='left' style='width:5%; text-align:right; float:left;'>&nbsp;</div>
				                    <div align='left' style='width:6%; text-align:right; float:left;'>&nbsp;</div>
				                    <div align='left' style='width:6%; text-align:right; float:left;'>".$r3[4]."</div>
				                    <div align='left' style='width:6%; text-align:right; float:left;'>&nbsp;</div>
									<div align='left' style='width:10%; text-align:right; float:left;'>".$r3[5]."</div>
				                    <div align='left' style='width:6%; text-align:right; float:left;'>&nbsp;</div>
									<div align='left' style='width:10%; text-align:right; float:left;'>".$r3[6]."</div>
				                    <div align='left' style='width:6%; text-align:right; float:left;'>&nbsp;</div>
				                    
				                    <div align='left' style='width:11%; text-align:right; float:left;'>".$r3[8]."</div>";
                					$netpayable=$r3[10];
									$discount=$r3[9];					
								}
							?>
                </div>
                <div style="margin-left:auto; margin-right:auto; font-size:12px; font-family:'Courier New', Courier, monospace; height:80px;">
                		<?php 
							$res7=mysql_query("select * from item_stock where invoice_no='".$invoice_no."'");
								
								while($r7=mysql_fetch_array($res7))
								{
									if($r7[9]==9)
									{
										$cg9=$cg9+$r7[10];
										$sg9=$sg9+$r7[12];	
									}
									else if($r7[9]==6)
									{
										$cg6=$cg6+$r7[10];
										$sg6=$sg6+$r7[12];	
									}
									else if($r7[9]==0)
									{
										$cg0=$cg0+$r7[10];
										$sg0=$sg0+$r7[12];	
									}	
									else if($r7[9]==14)
									{
										$cg14=$cg14+$r7[10];
										$sg14=$sg14+$r7[12];	
									}
									else 
									{
										$cg2=$cg2+$r7[10];
										$sg2=$sg2+$r7[12];	
									}
								}
							
							?>
							
                	<!--<div align="left" style="width:20%; float:left;">Total Base Amount :</div>
                    <div align="left" style="width:10%; float:left;"><?php //echo $total_base_amt;?></div>
                
				<div style="margin-left:auto; margin-right:auto; font-size:12px; font-family:'Courier New', Courier, monospace; height:15px;">
                	<div align="left" style="width:20%; text-align:right; float:left;">Add Vat <?php //echo $sales_vat_rate; ?>%:</div>
                    <div align="left" style="width:10%; text-align:right; float:left;"><?php //echo $total_vat; ?></div>-->
                
				<div style="margin-left:auto; margin-right:auto; font-size:12px; font-family::'Times New Roman', Times, serif; height:15px;">
                
                	<div align="left" style="width:620px; text-align:left; float:left; font-weight:bold;">&nbsp;</div>
                    <div align="left" style="width:10%; text-align:left; float:left; font-weight:bold;">
					Less</div>
                    <div align="left" style="width:10%; text-align:right; float:left; font-weight:bold;"><?php echo $discount; ?></div>
                    <div align="left" style="width:620px; text-align:left; float:left; font-weight:bold;">&nbsp;</div>
                    <div align="left" style="width:10%; text-align:left; float:left; font-weight:bolder;">Net Amount</div>
                    <div align="left" style="width:10%; text-align:right; float:left; font-weight:bolder;"><?php echo $netpayable; ?></div>
                    <div align="left" style="width:620px; text-align:left; float:left; font-weight:bold;">GST Detail</div>
                    <div align="left" style="width:20%; text-align:left; float:left; font-weight:bold;  border-bottom:1px solid #000;"></div>
                    <!--<div align="left" style="width:625px; margin-top:1px; border-top:1px solid #000; text-align:left; float:left; font-weight:bold;">-->
                    	<table align="left" style="float:left; width:300px; border:1px solid #000;">
                        <tr><td>
                        	<table>
                            <tr><td style="font-family:'Times New Roman', Times, serif; border-bottom:1px solid #000; font-size:12px;">Rate : </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif;  font-size:12px;">18% : </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;">12% : </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;">5% : </td></tr>
                            <tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;">Exumpt : </td></tr>
                        </table>
                        </td>
                        <td>
                        	<table>
                            <tr><td style="font-family:'Times New Roman', Times, serif; border-bottom:1px solid #000; font-size:12px;">CGST </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg9==''){echo '0'; } else {echo $cg9;} ?> </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg6==''){echo '0'; } else {echo $cg6;} ?></td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg2==''){echo '0'; } else {echo $cg2;} ?></td></tr>
                            <tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg0==''){echo '0'; } else {echo $cg0;} ?></td></tr>
                        </table>
                        </td>
                        <td>
                        	<table>
                            <tr><td style="font-family:'Times New Roman', Times, serif; border-bottom:1px solid #000; font-size:12px;">SGST </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg9==''){echo '0'; } else {echo $cg9;} ?> </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg6==''){echo '0'; } else {echo $cg6;} ?></td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg2==''){echo '0'; } else {echo $cg2;} ?></td></tr>
                            <tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php if($cg0==''){echo '0'; } else {echo $cg0;} ?></td></tr>
                        </table>
                        </td>
                        <td>
                        	<table>
                            <tr><td style="font-family:'Times New Roman', Times, serif; border-bottom:1px solid #000; font-size:12px;">Total </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php echo $cg9+$cg9; ?> </td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php echo $cg6+$cg6; ?></td></tr>
                        	<tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php echo $cg2+$cg2; ?></td></tr>
                            <tr><td style="font-family:'Times New Roman', Times, serif; font-size:12px;"><?php echo $cg2+$cg2; ?></td></tr>
                        </table>
                        </td>
						</tr>
                        </table>
                        <div align="left" style="width:20%; text-align:left; float:left; font-weight:bold;"></div>
                        <div align="left" style="width:620px; text-align:left; float:left; font-weight:bold;">&nbsp;</div>
                        <div align="left" style="width:20%; text-align:left; float:left; font-weight:bold;">Authorised Signature</div>
                        <div align="left" style="width:100%; text-align:left; float:left; font-weight:bold; border-bottom:1px solid #000;"></div>
                        
                        
                        <!--<div align="left" style="text-align:left; width:300px; font-weight:bold; border-top:1px solid #000; border-bottom:1px solid #000;">Rate :</div>
                        <div align="left" style="text-align:left; width:300px; font-weight:bold;">CGST :</div>
                        <div align="left" style="text-align:left; width:300px; font-weight:bold;">CGST :</div>-->
                    <!--</div>-->
                    
                    
                                      
                    <!--<div align="left" style="width:100%; text-align:left; float:left; font-weight:bold;"></div>
                    <div align="left" style="width:10%; text-align:left; float:left; font-weight:bold;"><?php //if($total_vat14!=0){ echo $total_vat14;} else {echo "0.00"; } ?></div>
                    <div align="left" style="width:15%; text-align:left; float:left; font-weight:bold;">VAT 5% :</div>
                    <div align="left" style="width:10%; text-align:left; float:left; font-weight:bold;"><?php //if($total_vat5!=0){ echo $total_vat5;} else {echo "0.00"; } ?></div>-->
                </div>
                
                </div>
				<!--echo "</div>";
				/*echo "<div style='margin-left:auto; margin-right:auto; font-size:12px; font-family:'Courier New', Courier, monospace; height:15px; border:1px solid #0C3;'>
                	<div align='left' style='width:20%; text-align:right; float:left; border:1px solid #C00;'>Base Amount :</div>
                    <div align='left' style='width:20%; text-align:right; float:left; border:1px solid #C00;'>Add Vat ".$sales_vat_rate." :</div>
					<div align='left' style='width:20%; text-align:right; float:left; border:1px solid #C00;'>Net Payable Amount :</div>
                </div><br/>";
				echo "<div style='margin-left:auto; margin-right:auto; font-size:12px; font-family:'Courier New', Courier, monospace; height:15px; border:1px solid #0C3;'>
                	<div align='left' style='width:10%; float:left; border:1px solid #C00;'>".$total_base_amt."</div>
                    <div align='left' style='width:10%; text-align:right; float:left; border:1px solid #C00;'>".$total_vat."</div>
					<div align='left' style='width:20%; text-align:right; float:left; border:1px solid #C00;'>".$total_amt."</div>
                </div>";*/-->
							
				<?php ?>
                <!--<div align="left" style="margin-bottom:20px; border:1px solid #093; width:50px;">Hi</div>-->
                <div class="no-print"><a href="javascript:doit()"  onclick="document.getElementById('printOption').style.visibility = 'hidden'; document.print(); return true;">Print</a></div>
            </div>
        	<!--<table align="center" height="1150" width="900" style="border:1px solid #000;">
            <tr><td align="center" colspan="2"><font style="font-size:22px; font-weight:bold;">Invoice</font></td></tr>
            	<tr>
                	<td>
                    	<table width="100%">
                        	<tr><td><img height="100" width="150" alt="D-Sys Logo" src="images/Dsys Logo1.png"  style="margin-left:20px;" /></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td></td></tr>
                            
                        </table>
                    </td>
                    <td>
                    	<table width="100%">
                        	
                            <tr><td align="left"><font style="font-size:18px; font-weight:bold; margin-left:150px;">Invoice No. <?php //echo "#".$invoice_no; ?></font></td></tr>
                            <tr><td align="left"><font style="font-size:18px; font-weight:bold; margin-left:150px;">Invoce Date <?php //echo $inv_date; ?></font></td></tr>
                            <?php //$due_date=strtotime("+30 day", strtotime($inv_date)); ?>
                            <tr><td align="left"><font style="font-size:18px; font-weight:bold; margin-left:150px;">Payment Due By <?php //echo date("Y-m-d", $due_date); ?></font></td></tr>
                            <tr><td align="right"><font style="font-size:14px; font-weight:bold; margin-right:40px;">&nbsp;</font></td></tr>
                            <tr><td align="right"><font style="font-size:14px; font-weight:bold; margin-right:40px;">&nbsp;</font></td></tr>
                        </table>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<table>
                        	<tr><td><font style="font-size:24px; font-weight:bold; margin-left:20px;">Bill From:</font></td></tr>
                            <tr><td><font style="font-size:22px; font-weight:bold; margin-left:20px;"><?php //echo $company_name; ?></font></td></tr>
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;"><?php //echo $company_add; ?></font></td></tr>
                            
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;"><?php //echo $company_city."-".$company_pin; ?></font></td></tr>
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;"><?php //echo $company_state.",".$company_country; ?></font></td></tr>
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;">Tel. <?php //echo $company_contact; ?></font></td></tr>
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;">Mail Id: <?php //echo $company_mail; ?></font></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                            
                        </table>
                    </td>
                    <td>
                    	<table>
                        	<tr><td><font style="font-size:24px; font-weight:bold; margin-left:20px;">Bill To:</font></td></tr>
                            <tr><td><font style="font-size:22px; font-weight:bold; margin-left:20px;"><?php //echo $client_name; ?></font></td></tr>
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;"><?php //echo $client_add; ?></font></td></tr>
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;"><?php //echo $client_city; ?></font></td></tr>
                            <tr><td><font style="font-size:18px; font-weight:bold; margin-left:20px;"><?php //echo $client_state." ".$client_country; ?></font></td></tr>
                            <tr><td><font style="font-size:14px; font-weight:bold; margin-left:20px;"><?php /*if(!$client_contact)
																											{
																												echo "&nbsp;";
																											}
																											else
																											{echo "Tel. ".$client_contact;}*/ ?></font></td></tr>
                            <tr><td><font style="font-size:14px; font-weight:bold; margin-left:20px;"><?php/* if(!$client_mail)
																											{
																												echo "&nbsp;";
																											}
																											else
																											{echo "Mail ID. ".$client_mail;}*/ ?></font></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                	<td colspan="2">
                    	<table width="90%" style="margin-left:20px;" border="1">
                        	<tr>
                            	<th width="10%">S.No.</th>
                            	<th width="40%">Description</th>
                            	<th width="20%">Price(<?php //echo $currency; ?>)</th>
                            	<th width="20%">Amount(<?php //echo $currency; ?>)</th>
                            </tr>
                            <?php
								/*$s=1;
								$res2=mysql_query("select * from order_book where invoice_no='".$invoice_no."'");
								while($r2=mysql_fetch_array($res2))
								{
									echo "<tr><td align='center'>".$s."</td><td>".$r2[4]."</td><td align='right'><font style='margin-right:50px;'>".$r2[6]."</td><td align='right'><font style='margin-right:50px;'>".$r2[7]."</td></tr>";	
									$s=$s+1;
								}
								echo "<tr><td align='center'>&nbsp;</td><td>&nbsp;</td><td align='center'>&nbsp;</td><td align='center'>&nbsp;</td></tr>";
								$res3=mysql_query("select * from invoice_value where invoice_id='".$invoice_no."'");
								while($r3=mysql_fetch_array($res3))
								{
									echo "<tr><td colspan='3' align='right'><font style='margin-right:50px;'>Gross Total</font></td><td align='right'><font style='margin-right:50px;'>".$r3[3]."</font></td></tr>";
									echo "<tr><td colspan='3' align='right'><font style='margin-right:50px;'>Service Tax</font></td><td align='right'><font style='margin-right:50px;'>".$r3[4]."</font></td></tr>";
									echo "<tr><td colspan='3' align='right'><font style='margin-right:50px;'>Grand Total</font></td><td align='right'><font style='margin-right:50px;'>".$r3[5]."</font></td></tr>";	
									$grand_val=$r3[5];
								}*/
								//echo "<tr><td colspan='4'>".strval(mixed $grand_val)."</td></tr>";
								
								//echo "<tr><td colspan='4'>".convert_number_to_words($grand_val)."</td></tr>";
							?>
                        </table>
                    </td>
                </tr>
                <tr>
                	<td colspan="2"><font style="margin-left:20px; font-weight:bold; font-size:18px;">In Words:</font> <?php //echo convert_number_to_words($grand_val)." Only"; ?></td>
                </tr>
                <tr>
                	<td colspan="2"><font style="margin-left:20px; font-weight:bold; font-size:18px;">Currency:</font> <?php //echo $currency; ?></td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<table style="margin-left:20px;">
                        	<tr><td>&nbsp;</td></tr>
                        	<tr><td><font style="font-size:20px; font-weight:bold;"><u>Bank Account Details</u></font></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">Bank Name : </font> <?php //echo $bank_name; ?></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">Branch Address : </font> <?php //echo $bank_add; ?></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">Account Holder Name : </font> <?php //echo $bank_ac_name; ?></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">Account Number : </font> <?php //echo $ac_no; ?></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">Account Type : </font> <?php //echo $ac_type; ?></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">IFSC Code : </font> <?php //echo $ifsc; ?></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">SWIFT BIC : </font> <?php //echo $swift; ?></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td><font style="font-size:20px; font-weight:bold;"><u>Tax Details</u></font></td></tr>
                            <tr><td><font style="font-weight:bold; font-size:18px;">Service Tax No. : </font> <?php //echo $company_st; ?></td></tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr><td>&nbsp;</td></tr>
                    	</table>
                    </td>
                </tr>
                <tr><td><div class="no-print"><a href="javascript:doit()"  onclick="document.getElementById('printOption').style.visibility = 'hidden'; document.print(); return true;">Print</a></div></td></tr>
            </table>-->
                            
	</body>
</html>
<?php
}
else
{header('location:signout.php');}
?>
