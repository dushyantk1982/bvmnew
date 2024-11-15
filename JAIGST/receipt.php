<?php 
error_reporting(1);
session_start();
date_default_timezone_set("Asia/Kolkata");
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
  <script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=600,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
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
  <script>
function Stock(str) {
	var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "jaigst"
});
var item=document.getElementById("item_id");
con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT balance_qty FROM item_stock where item_id=item_id", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
	
	}
	</script>
  <script type="text/javascript">
  	/*function calculate()
	{
		var x=document.getElementById("count");
		for(var i=0;i<=x;i++)
		{
		var a=document.getElementById("qty[]");
		var b=document.getElementById("rate[]");
		/*var d=document.getElementById("discount");
		
		var c=a.value*b.value;
		document.getElementById("baserate[]").value=c;
		}	
		var c=document.getElementById("discount[]").value;
		var d=parseInt(document.getElementById("baserate[]").value);	
		if(c.value=0)
		{
			var ta=0;
			var n=d;	
		}
		else
		{
			var e=d*c/100;
			var t=d-e;	
		}
		document.getElementById("taxable").value=t;
		var f=document.getElementById("vat").value;
		var g=parseInt(document.getElementById("taxable").value);
		if(f.value=0)
		{
			var t=0;
			var n=g;	
		}
		else
		{
			var h=g*f/100;
			var t=h+g;
			/*var n=b+t;
		}
		document.getElementById("vattax").value=h;
		document.getElementById("netval").value=t;
	}*/
	
	
	var tot=0;
	var tvat=0;
	var tdis=0;
	var ttax=0;
	var tgross=0;
	function total(id)
	{
		/*alert(id);*/
		/*var x=document.getElementById("count");
		for(var i=0;i<=x;i++)
		{*/
		var a=document.getElementById("qty"+id);
		var b=document.getElementById("rate"+id);
		/*var d=document.getElementById("discount");*/
		
		var c=a.value*b.value;
		document.getElementById("netval"+id).value=c;
		/*}*/
		/*var e=c.value*d.value/100;
		var f=c.value-e.value;
		document.getElementById("taxable").value=f;*/
			
	}
	function totalDis(id)
	{
		var a=document.getElementById("discount"+id).value;
		var b=parseFloat(document.getElementById("baserate"+id).value);	
		if(a.value=0)
		{
			var ta=0;
			var n=b;
			//var t=b;	
			
		}
		else
		{
			var c=b*a/100;
			var t=b-c;	
		
		}
		document.getElementById("taxable"+id).value=t;
		document.getElementById("discountval"+id).value=c;
		
	}
	function totalVT(id)
	{
		var a=document.getElementById("vat"+id).value;
		var b=parseFloat(document.getElementById("taxable"+id).value);
		var tot=0;
		if(a.value=0)
		{
			var t=0;
			var n=b;	
		}
		else
		{
			
			var c=b*a/100;
			var t=c+b;
			
		}
		document.getElementById("vattax"+id).value=c;
		document.getElementById("netval"+id).value=t;
		
		/*var tot=0;*/
		
		//document.getElementById("totalnetval").value=tot;	
	}
	
	function netvalTOT(id)
	{
		//alert(id);
		//var a=document.getElementById("netval"+id).value;
		//var b=document.getElementById("vattax"+id).value;
		//var c=document.getElementById("discountval"+id).value;
		//var d=document.getElementById("taxable"+id).value;
		var e=parseFloat(document.getElementById("netval"+id).value);
		
		
		//tot=+tot + +a;
		//tvat=+tvat + +b;
		//tdis=+tdis + +c;
		//ttax=+ttax + +d;
		tgross=+tgross + +e;
		//alert(b);	
		//document.getElementById("totalnetval").value=tot;
		//document.getElementById("totalvat").value=tvat;
		//document.getElementById("totaldiscount").value=tdis;
		//document.getElementById("totaltaxable").value=ttax;
		document.getElementById("totalgross").value=tgross;
	}
	function netbill()
	{
		var a=document.getElementById("totalnetval").value;
		var b=document.getElementById("adjamount").value;
		var c=+a + +b;
		document.getElementById("netbilled").value=c;
			
	}
  </script>
<!-- End MAIN CSS AND JQUERY -->
</head>
<!-- End HEAD -->
<!-- Start BODY -->
    <body>
        <!-- Start HEADER -->
   
        <!-- End HEADER -->
        
          
        
        <!-- Start CONTROL BOX -->
    <div id="body-container">
        <div id="body-content">
           

                 <!-- End CONTROL BOX --> 
			
			
<div class="box">
	
    <div class="container">
                            <section class="content-header">
                                <h3>
                                    Make Payment

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			
			<?php
				if($_REQUEST['submit']=='Save')
				{
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
					$new_bal=$balance-$receipt;
					$rect_value=$rect_value+$receipt;
					echo $new_bal."<br />".$rect_value;
					$q="update debtors set rect_value='".$rect_value."', balance='".$new_bal."' where ref_id='".$inv_no."'";
					//$q2="INSERT INTO `debtors` (`trn_id`,`category`, `date`, `area_id`, `client_id`, `ref_id`, `inv_value`, `rect_value`, `balance`, `status`) VALUES ('', '".$cat."', '".$inv_date."', '".$area_id."', '".$client_id."', '".$inv_no."', '".$inv_value."', '".$rect_value."', '".$new_bal."')";
				mysql_query($q);
				if($new_bal==0)
				{$st='Cleared';}
				else
				{$st='Uncleared';}
				$q1="INSERT INTO `bills_trn` (`trn_id`, `date`,`category`, `area_id`, `client_id`, `inv_no`, `inv_value`, `rect_value`, `mode`, `status`) VALUES ('', '".$inv_date."', '".$cat."', '".$area_id."', '".$client_id."', '".$inv_no."', '0.00', '".$receipt."', '".$mode."','".$st."')";
			mysql_query($q1);
			}
			
			?>
        	<form action="" name="company_profile" class="form-horizontal" method="post">
				<div class="container">
					<div class="row">
						<div id="acct-password-row" class="span16">
                        	<table width="100%">
                            	
                                <tr><td>Date</td><td><input type="date" name="inv_date" value="" class="span5" autocomplete="false" required></td></tr>
                               						</table>
													
								 <?php
								 extract($_POST);
								$invoice_no=$_REQUEST['invoice_no'];
								 	include('DAL/database.php');
										$res=mysql_query("select debtors.ref_id, client.client_name, debtors.inv_value, debtors.rect_value, debtors.balance, debtors.client_id, debtors.area_id, debtors.category from debtors join client on debtors.client_id=client.client_id where debtors.ref_id='".$invoice_no."'");
											while($r=mysql_fetch_array($res))
										{
											echo "Invoice No : ".$r[0]."<br />Name : ".$r[1]."<br />Invoice Value : ".$r[2]."<br /><br />";
											$inv_no=$r[0];
											$client_id=$r[5];
											$area_id=$r[6];
											$inv_value=$r[2];
											$rect_value=$r[3];
											$balance=$r[4];
											$cat=$r[7];
										}
										?>
											Received Amount : <input type="text" name="receipt" value="" class="span5" reuired>
											<br /><br />
											Mode of Payment : <Select name="mode">
												<option value="Cash">Cash</option>
												<option value="Cheque">Cheque</option>
												<option value="PhonePe">PhonePe</option>
											</Select>
											<input type="hidden" name="inv_no" value="<?php echo $inv_no; ?>" class="span5" >
											<input type="hidden" name="client_id" value="<?php echo $client_id; ?>" class="span5" >
											<input type="hidden" name="area_id" value="<?php echo $area_id; ?>" class="span5" >
											<input type="hidden" name="inv_value" value="<?php echo $inv_value; ?>" class="span5" >
											<input type="hidden" name="rect_value" value="<?php echo $rect_value; ?>" class="span5" >
											<input type="hidden" name="balance" value="<?php echo $balance; ?>" class="span5" >
											<input type="hidden" name="cat" value="<?php echo $cat; ?>" class="span5" >
												
												
												
                                        </table>
                                    </td>
                                  </tr>
                            </table>
							
						</div>
					</div>
                    
					<footer id="submit-actions" class="form-actions">
						<input type="submit" name="submit" value="Save" class="btn btn-primary" />
						<input type="reset" name="reset" value="Reset" class="btn btn-primary" />
					</footer>
				</div>
			
		</form><?php  ?>
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="js/jquery-2.1.0.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  	<!-- jquery for spare parts-->
  		<script>
        var arraydrop = [];
        var arraytext = [];
        $(function () {
            $('#btn').click(function () {
                var val = $("#Mydropdown option:selected").text();
                var val1 = $("#Mydropdown option:selected").val();
                var valtxt = $("#txt").val();
				$('#drpdiv').css('display', 'none');
				$('#divqnt').css('display', 'none');
				
				if(val=="")
				{
					$('#Mydropdown').after('<div id=drpdiv style="font-style: oblique;font-weight: bolder;color: Red;">Please fill out this field</div>');
					$('#Mydropdown').css('border-color', 'red');
				}
				else
				{
					if(valtxt>=1)
					{
			    var rows = document.getElementById("MyTable").rows;
                var count = 0;
                for (var i = 0, ceiling = rows.length; i < ceiling; i++)
				 {
                    if (rows[i].cells[1].innerHTML==val)
                    {
                        count = 1;
                        alert("value already exist");
                    }
                }
                if(count==0)
                {
				
					$("#MyTable").append("<tr><td style='display:none'>"+val1+"</td><td>" + val + "</td><td>" + valtxt + "</td><td><input      type='button' value='Delete' class='btn btn-danger btn-large' onclick='btnclick(this)'");
                }
						
						arraydrop.push($("#Mydropdown option:selected").val());
						arraytext.push(valtxt);
						$(".custom-combobox-input").val("");
						$("#txt").val("");
						$('#txt').after('<div> </div>');
						$('#drpdiv').css('display','none');
					}
					else
					{
						$('#txt').after('<div id=divqnt style="font-style: oblique;font-weight: bolder;color: Red;">Please fill out this field</div>');
						$('#txt').focus();
						$('#txt').css('border-color', 'red');
					}
				}
            });
        });
		
		function btnclick(getval) {
            ($(getval).parent()).parent().remove();
            arraydrop.splice(($(getval).parent()).parent().index(), 1);
            arraytext.splice(($(getval).parent()).parent().index(), 1);
            var str = "";
            for (var i = 0; i < arraydrop.length; i++)
            {
                str += arraydrop[i] + ","+ arraytext[i];
            }
        };
		
  </script>
	</body>
<!-- End BODY -->
</html>
<?php
}
else
{header('location:signout.php');}
?>
