<?php 
error_reporting(1);
session_start();
if(isset($_SESSION['login']) && $_SESSION['type']=='Admin')
{
?>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <table style="width:810px; height:600px; border:2px solid #000;">
          	<tr style="border:1px solid #000;">
            	<td>
                	<div style=" border-right:1px solid #000; width:390px; margin-top:1px;">
                    	<table>
                        	<tr>
                            	<td>
                                	<div align="left" style=" font-family:calibri;font-size:14px; font-weight:bold;"><?php echo $company_name; ?></div>
                   					<div align="left" style="margin-top:1px; font-family:calibri;"><?php echo $company_add; ?></div>
                    				<div align="left" style=" font-family:calibri;">Mob  : <?php echo $company_mob; ?></div>
                                    <div align="left" style=" font-family:calibri;">GSTIN : <?php echo $company_tin; ?></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                   </td>
                   <td>
                    <div style="width:410px; margin-top:1px;">
                    	<table>
                        	<tr>
                            	<td>
                                	<div align="left" style=" font-family:calibri;font-size:14px; font-weight:bold;"><?php echo $client_name; ?></div>
                   					<div align="left" style="margin-top:1px; font-family:calibri;"><?php echo $client_add; ?></div>
                    				<div align="left" style=" font-family:calibri;">Mob : <?php echo $client_mob; ?></div>
                    				<div align="left" style=" font-family:calibri;">GSTIN  : <?php echo $client_tin; ?></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>  
            <tr>
            	<td colspan="2">
                	<table style="border:0px solid #0C0; width:810px;">
                    	<tr>
                        	<td style="border:0px solid #0C0; width:300px; font-family:calibri; font-size:14px;">Place of Supply: <?php echo $client_state."&nbsp;"; ?></td>
                            <td style="border:0px solid #0C0; width:100px; font-family:calibri; font-size:14px; font-weight:bold; text-align:center;">Tax Invoice</td>
                            <td style="border:0px solid #0C0; width:420px;" colspan="2">
                            	<table>
                            		<tr>
                        				<td style="border:0px solid #C03; width:300px; text-align:right; font-family:calibri; font-size:14px; font-weight:bold;">Invoice No. </td><td style="border:0px solid #C03; width:100px text-align:left; font-family:calibri; font-size:14px; font-weight:bold;">: <?php echo "# ".$invoice_no."&nbsp;"; ?></td>
                        			</tr>
                        			<tr>
                        				<td style="border:0px solid #C03; width:500px; text-align:right; font-family:calibri; font-size:14px; font-weight:bold;">Invoice Date </td><td style="border:0px solid #C03; width:100px; text-align:left; font-family:calibri; font-size:14px; font-weight:bold;">: <?php echo $inv_date."&nbsp;"; ?></td>
                        			</tr>
                             	</table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                	<table style="border:1px solid #000; width:810px;">
                    	<tr>
                        	<td style="border:1px solid #000; width:300px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Product Name </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">MRP </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">HSN </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Qty </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Rate </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Txb. Amount </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center" colspan="2">CGST<br/> % Amt </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center" colspan="2">SGST<br/> % Amt </td>
                            <td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Amount </td>
                        </tr>
                        <?php
                        $t=0;
                		$s=1;
						$t_qty=0;
						$res2=mysql_query("select item.item, item.MRP, item.hsn, item_stock.sales_qty, item_stock.sales_rate, item_stock.base_amt, item_stock.cgst_rate, item_stock.cgst, item_stock.sgst_rate, item_stock.sgst, item_stock.net_amt from item_stock join item on item.item_id=item_stock.item_id where invoice_no='".$invoice_no."'");
						while($r2=mysql_fetch_array($res2))
						{
							$t_qty=$t_qty+$r2[3];
                        echo "<tr>
                        	<td style='border:0px solid #0C0; border-right:1px solid #000; width:260px; font-family:calibri; font-size:13px;'>".$r2[0]."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:13px; margin-right:1px;' align='right'>".$r2[1]."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:13px;' align='center'>".$r2[2]."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:13px;' align='center'>".$r2[3]."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:13px;' align='right'>".$r2[4]."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:13px;' align='right'>".$r2[5]."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:20px; font-family:calibri; font-size:13px;' align='center'>".round($r2[6],0)."</td>
                             <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:13px;' align='right'>".$r2[7]."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:20px; font-family:calibri; font-size:13px;' align='center'>".round($r2[8],0)."</td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:13px;' align='right'>".$r2[9]."</td>
                            <td style='border:0px solid #0C0; border-right:0px solid #000; width:50px; font-family:calibri; font-size:13px;' align='right'>".$r2[10]."</td>
                        </tr>";
						$t=$t+1;}
						if($t<20)
						{
							while($t<=20)
							{
							echo "<tr>
                        	<td style='border:0px solid #0C0; border-right:1px solid #000; width:300px; font-family:calibri; font-size:12px;'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:12px;' align='center'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:12px;' align='center'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:50px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:20px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                             <td style='border:0px solid #0C0; border-right:1px solid #000; width:30px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:20px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                            <td style='border:0px solid #0C0; border-right:1px solid #000; width:30px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                            <td style='border:0px solid #0C0; border-right:0px solid #000; width:50px; font-family:calibri; font-size:12px;' align='right'><br/></td>
                        </tr>";
						$t=$t+1;	}
						}
						$res3=mysql_query("select * from sales where invoice_no='".$invoice_no."'");
								while($r3=mysql_fetch_array($res3))
								{
						echo "<tr>
                        	<td style='border:1px solid #000; width:400px; font-family:calibri; font-size:12px; font-weight:bold;' colspan='3' align='center'>Total</td>
                            <td style='border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;' align='center'>".$t_qty."</td>
                            <td style='border:1px solid #000; width:50px; font-size:12px;'></td>
                            <td style='border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;' align='right'>".$r3[4]."</td>
                            <td style='border:1px solid #000; width:20px; font-size:12px;'></td>
                             <td style='border:1px solid #000; width:30px; font-family:calibri; font-size:12px; font-weight:bold;' align='right'>".$r3[5]."</td>
                            <td style='border:1px solid #000; width:20px; font-size:12px;'></td>
                            <td style='border:1px solid #000; width:30px; font-family:calibri; font-size:12px; font-weight:bold;' align='right'>".$r3[6]."</td>
                            <td style='border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;' align='right'>".$r3[8]."</td>
                        </tr>";
								$bill=$r3[8];
								$netpayable=$r3[10];
								$discount=$r3[9];
								}
								?>
                          <tr>
                          	<td colspan="4">
                            	<table style="border:1px solid #000; width:510px;">
                                	<tr>
                                    	<td style="border:1px solid #000; width:50px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Tax</td>
                            			<td style="border:1px solid #000; width:130px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Taxable Amount</td>
                            			<td style="border:1px solid #000; width:90px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">CGST</td>
                            			<td style="border:1px solid #000; width:90px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">SGST</td>
                            			<td style="border:1px solid #000; width:130px; font-family:calibri; font-size:12px; font-weight:bold;" align="center">Total Tax</td>
                            
                                    </tr>
                                    <?php
                                    	$res7=mysql_query("select cgst_rate, cgst, sgst_rate, sgst, base_amt  from item_stock where invoice_no='".$invoice_no."'");
										while($r7=mysql_fetch_array($res7))
								{
									if($r7[0]==9)
									{
										$cg9=$cg9+$r7[1];
										$sg9=$sg9+$r7[3];
										$base9=$base9+$r7[4];	
										
									}
									else if($r7[0]==6)
									{
										$cg6=$cg6+$r7[1];
										$sg6=$sg6+$r7[3];	
										$base6=$base6+$r7[4];
									}
									else if($r7[0]==0)
									{
										$cg0=$cg0+$r7[1];
										$sg0=$sg0+$r7[3];	
										$base0=$base0+$r7[4];
									}
									else
									{
										$cg5=$cg5+$r7[1];
										$sg5=$sg5+$r7[3];	
										$base5=$base5+$r7[4];
									}
								}
								$ttax18=$cg9+$sg9;
								$ttax12=$cg6+$sg6;
								$ttax0=$cg0+$sg0;
								$ttax5=$cg5+$sg4;
									
                                    ?>
                                    
                                    <tr>
                                    	<td style="width:50px; font-family:calibri; font-size:12px;" align="center">18%</td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $base9; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $cg9; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $sg9; ?></td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $ttax18; ?></td>
                            
                                    </tr>
                                     <tr>
                                    	<td style="width:50px; font-family:calibri; font-size:12px;" align="center">12%</td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $base6; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $cg6; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $sg6; ?></td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $ttax12; ?></td>
                            
                                    </tr>
                                     <tr>
                                    	<td style="width:50px; font-family:calibri; font-size:12px;" align="center">5%</td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $base5; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $cg5; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $sg5; ?></td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $ttax5; ?></td>
                            
                                    </tr> <tr>
                                    	<td style="width:50px; font-family:calibri; font-size:12px;" align="center">Exumpt</td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $base0; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $cg0; ?></td>
                            			<td style="width:90px; font-family:calibri; font-size:12px;" align="center"><?php echo $sg0; ?></td>
                            			<td style="width:130px; font-family:calibri; font-size:12px;" align="center"><?php echo $ttax0; ?></td>
                            
                                    </tr>
                                </table>
                            </td>
                            <td colspan="7">
                            	<table style="width:300px;">
                                	<tr><td align="right" style="font-family:calibri; font-size:14px;">Round off</td><td align="right" style="font-family:calibri; font-size:14px;"><?php echo round($netpayable-$bill,2); ?></td></tr>
                                    <?php if($discount!=0){?>
                                    <tr><td align="right">Less Discount</td><td align="right" style="font-family:calibri; font-size:14px;"><?php echo $discount; ?></td></tr>
                                    <?php } else { ?>
                                    <tr><td align="right"><br/></td><td align="right"><br/></td></tr><?php } ?>
                                    <tr><td align="right" style="font-family:calibri; font-size:14px; font-weight:bold;">Grand Total</td><td align="right" style="font-family:calibri; font-size:14px; font-weight:bold;"><?php echo $netpayable; ?></td></tr>
                                </table>
                            </td>
                          </tr>
                          <tr>
                          	<td colspan="4" style="border-right:1px solid #000;">
                            	<table style="width:510px">
                                	<tr><td colspan="2" style="font-family:calibri; font-size:14px; font-weight:bold;">Bank Details:</td></tr>
                                   <tr><td style="font-family:calibri; font-size:12px; width:200px;"><?php echo $bank_name; ?></td><td style="font-family:calibri; font-size:12px;">IFSC : <?php echo $ifsc; ?></td></tr>
                                   <tr><td style="font-family:calibri; font-size:12px; width:200px;"><?php echo $bank_add; ?></td><td style="font-family:calibri; font-size:12px;">Account No: <?php echo $ac_no; ?></td></tr>
                                </table>
                            </td>
                            <td colspan="7" style="border:1px solid #000;" align="center">
                            <div style="margin-bottom:20px; font-family:Georgia, 'Times New Roman', Times, serif; font-size:10px;"><?php echo $company_name; ?></div>
                            </td>
                          </tr>
                    </table>
                </td>
            </tr>        
          </table>  
          <div class="no-print"><a href="javascript:doit()"  onclick="document.getElementById('printOption').style.visibility = 'hidden'; document.print(); return true;">Print</a></div>
                            
	</body>
</html>
<?php
}
else
{header('location:signout.php');}
?>
