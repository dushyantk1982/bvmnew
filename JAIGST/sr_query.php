<?php
			include('DAL/database.php');
				extract($_POST);
				
				if(!empty($_POST['inv_date']))
				{
					$date=$_POST['inv_date'];
					//echo $date."<br>";
					$date = strtotime($date);
					$inv_date=date('Y/m/d', $date);
					//echo $date;
				}	
				
				for($i=0;$i<count($item_id);$i++)
				{
					//$totalnetval=0; 
					$res=mysql_query("select * from item where item_id='".$item_id[$i]."'");
					while($r=mysql_fetch_array($res))
					{
						$rcgst[$i]=$r[6];
						$rsgst[$i]=$r[7];
						$rigst[$i]=$r[8];
						$tax[$i]=1+($rigst[$i]/100);
					}
					$baserate[$i]=$rate[$i]/$tax[$i];
					$netval[$i]=$qty[$i]*$baserate[$i];
					
					if($state=='23')
					{
					$cgst[$i]=round((($netval[$i]*$rcgst[$i])/100),2);
					$sgst[$i]=round((($netval[$i]*$rsgst[$i])/100),2);
					
					$totcgst=$totcgst+$cgst[$i];
					$totsgst=$totsgst+$sgst[$i];
						if($rcgst[$i]=='9')
						{
							$tot9cgst=$tot9cgst+$cgst[$i];
							$tot9sgst=$tot9sgst+$sgst[$i];
						}
						else if($rcgst[$i]=='6')
						{
							$tot6cgst=$tot6cgst+$cgst[$i];
							$tot6sgst=$tot6sgst+$sgst[$i];
						}
						else if($rcgst[$i]=='14')
						{
							$tot14cgst=$tot14cgst+$cgst[$i];
							$tot14sgst=$tot14sgst+$sgst[$i];
						}
						else if($rcgst[$i]=='2.5')
						{
							$tot25cgst=$tot25cgst+$cgst[$i];
							$tot25sgst=$tot25sgst+$sgst[$i];
						}
						else
						{
							$tot0cgst=$tot0cgst+$cgst[$i];
							$tot0sgst=$tot0sgst+$sgst[$i];
						}
					}
					else
					{
					$igst[$i]=($netval[$i]*$rigst[$i])/100;
					
					$totigst=$totigst+$igst[$i];
					
					if($rigst[$i]=='18')
						{
							$tot18igst=$tot18igst+$igst[$i];
						}
						else if($rigst[$i]=='12')
						{
							$tot12igst=$tot12igst+$igst[$i];
						}
						else if($rigst[$i]=='28')
						{
							$tot28igst=$tot28igst+$igst[$i];
						}
						else if($rigst[$i]=='5')
						{
							$tot5igst=$tot5igst+$igst[$i];
						}
						else
						{
							$tot0igst=$tot0igst+$igst[$i];
						}
					
					}
					
								
					$netamt[$i]=$netval[$i]+$cgst[$i]+$sgst[$i];
					
					$totalnetval=$totalnetval+$netval[$i];
					
					$res1=mysql_query("select * from item_stock where item_id='".$item_id[$i]."' ORDER BY stock_id DESC LIMIT 1");
					while($r1=mysql_fetch_array($res1))
					{$cl_stk=$r1[8];}
					$cl_stk=$cl_stk-$qty[$i];
					$q1="INSERT INTO `item_stock` (`stock_id`, `date`, `invoice_no`, `client_id`, `item_id`, `pur_qty`, `pur_rate`, `basepur`, `prt_qty`, `prt_rate`, `prt_base`, `sales_qty`, `sales_rate`, `base_amt`, `srt_qty`, `srt_rate`, `srt_base`, `cgst_rate`, `cgst`, `sgst_rate`, `sgst`, `net_amt`, `balance_qty`, `trn_type`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$client_id."', '".$item_id[$i]."', '0', '0.00', '0.00', '0', '0.00', '0.00', '0', '0.00', '0.00', '".$qty[$i]."', '".$baserate[$i]."', '".$netval[$i]."', '".$rcgst[$i]."', '".$cgst[$i]."', '".$rsgst[$i]."', '".$sgst[$i]."', '".$netamt[$i]."', '".$cl_stk."', 'SRT')";
					//echo $q1;
					mysql_query($q1,$cn);
					
				}
					
					if($state=='23')
					{
						$netamount1=$totalnetval+$totcgst+$totsgst;
					}
					else
					{
						$netamount1=$totalnetval+$totigst;
					}
					
					if(!empty($_POST['discount']))
					{$netamount=$netamount1-$discount;}
					else
					{$netamount=$netamount1-0;}
				
					$netpay=round($netamount);	
				
				$q="INSERT INTO `sales_ret` (`srt_id`, `date`, `srt_no`, `client_id`, `totalnetval`, `cgst`, `sgst`, `igst`, `grossamount`, `discount`, `netamount`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$client_id."', '".$totalnetval."', '".$totcgst."', '".$totsgst."', '".$totigst."', '".$netamount1."', '".$discount."', '".$netpay."')";
				//echo $q;
				mysql_query($q);
				
				$q3="INSERT INTO `gstdetail` (`sales_id`, `date`, `invoice_no`, `client_id`, `totalnetval`, `cgst9`, `cgst6`, `cgst25`, `cgst14`, `cgst0`, `sgst9`, `sgst6`, `sgst25`, `sgst14`, `sgst0`, `igst18`, `igst12`, `igst5`, `igst28`, `igst0`, `netamount`, `trn_type`) VALUES ('', '".$inv_date."', '".$inv_no."', '".$client_id."', '".$totalnetval."', '".$tot9cgst."', '".$tot6cgst."', '".$tot25cgst."', '".$tot14cgst."', '".$tot0cgst."', '".$tot9sgst."', '".$tot6sgst."', '".$tot25sgst."', '".$tot14sgst."', '".$tot0sgst."', '".$tot18igst."', '".$tot12igst."', '".$tot5igst."', '".$tot28igst."', '".$tot0igst."', '".$netpay."','SRT')";
				//echo $q;
				mysql_query($q3);
				
				
				
				$res2=mysql_query("select * from client where client_id='".$client_id."'");
				while($r2=mysql_fetch_array($res2))
				{$area_id=$r2[3];}
				
				$result=mysql_query("select * from debtors where client_id='".$client_id."' ORDER BY trn_id DESC LIMIT 1");
				while($v=mysql_fetch_array($result))
				{
					$balance=$v[7];
				}
				$balance=$balance+$netpay;
				
				$q2="INSERT INTO `debtors` (`trn_id`, `date`, `area_id`, `client_id`, `ref_id`, `inv_value`, `rect_value`, `balance`, `status`) VALUES ('', '".$inv_date."', '".$area_id."', '".$client_id."', '".$inv_no."', '0.00', '".$netpay."', '".$balance."', 'SRT')";
				mysql_query($q2);
				
				
				
				
				$res3=mysql_query("select * from sr");
				while($r3=mysql_fetch_array($res3))
				{$old_b=$r3[2];}
				if($old_b<1)
				{mysql_query("insert into sr (`id`, `sr_no`) values('','".$inv_no."')");}
				else{
				$bill_no=$inv_no+1;
				$qr="update sr set sr_no='".$bill_no."'";
				echo $qr;
				mysql_query($qr);}
				//mysql_query("update bill set bill_no='".$bill_no."'");
				header('location:invoice_mgmt.php');
			
        		
			?>