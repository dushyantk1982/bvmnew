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
		var b=document.getElementById("baserate"+id);
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
                                    Create New Bill

                                </h3>
                             </section>
                        </div>
	<div class="box-content">
		<section id="my-account-security-form" class="page container">
			<form action="create_sales.php" name="count" method="post">
            	<input type="text" name="count" value="" placeholder="Only 20 Item maximum" />
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
                <br />
                <?php
                	include('DAL/database.php');
					$res8=mysql_query("select * from category");
					while($r8=mysql_fetch_array($res8))
					{
						echo "<input type='checkbox' value='".$r8[0]."' name='cat' /> $r8[1] ";	
					}
						
				?>
				
                <input type="submit" value="View" name="submit" />
            </form>
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
