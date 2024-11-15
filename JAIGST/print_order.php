<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
			include('DAL/database.php');
			$order_id=$_REQUEST['order_id'];
			$res=mysql_query("select order_book.order_id, order_book.order_date, client.client_name, client.address, client.city, client.state, client.country, client.pin, client.contact, client.mobile, client.mail, order_book.description, order_book.qty, order_book.price, order_book.value, order_book.st, order_book.tax, order_book.netvalue, currency.currency, order_book.status from order_book join client on client.client_id=order_book.client_id join currency on currency.currency_id=order_book.currency_id where order_id='".$order_id."'");
			while($r=mysql_fetch_array($res))
			{
				$order_no=$r[0];
				$date=$r[1];
				$client_name=$r[2];
				$address=$r[3];
				$city=$r[4];
				$state=$r[5];
				$country=$r[6];
				$pin=$r[7];
				$contact=$r[8];
				$mobile=$r[9];
				$mail=$r[10];
				$description=$r[11];
				$qty=$r[12];
				$price=$r[13];
				$value=$r[14];
				$st=$r[15];
				$tax=$r[16];
				$netval=$r[17];
				$currency=$r[18];
				$state=$r[19];
			}
			?>
            <table align="center" height="700" width="600">
            	<tr>
                	<td style="border:1px solid #000;" width="100%" height="100%">
                		<table height="20" width="100%">
                        	<tr><td style="border:1px solid #000;" align="center">Order</td></tr>
                            <tr><td>
                        </table>    
                    </td>
                </tr>
            </table>
            	
</body>
</html>