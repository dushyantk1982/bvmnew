<?php 
	$code="";
	$fl="";
	$i=0;
	$fno=$_POST['fileno'];
	$assign=$_POST['assign'];
	
	//include('dblocal.php');
	include('dbcon.php');
	//$conn=mysql_connect("localhost:3306","bvmgroup","PWD@bvm1");
	if(!$conn)
	 {die('Could not connect:'.mysql_error());}
	 //mysql_select_db('bvmclg');
	 	$code=$assign;
	$res=mysql_query("select distinct(file_no) from assignment where paper_code='".$code."'",$conn);
	
	while($r=mysql_fetch_array($res))
	{
	if($fl=="")
		$fl=$r['file_no'];
	else
		$fl=$fl.",".$r['file_no'];
	}
	//echo $fl;
	$fl_arr=split(",",$fl);
	$set_arr=split(",",$fl);
	
	foreach($fl_arr as $value)
	{
		$flag=0;
	
		$res=mysql_query("select * from assignment where file_no='".$value."' and paper_code='".$code."'",$conn);
		$s="";
		while($r=mysql_fetch_array($res))
		{
			if($s=="")
			{
			$s=$r['question'];
			}
			else
			{
			$s=$s.",".$r['question'];
			}
		}
		//echo $s."<br>";	
		for($j=0;$j<count($set_arr);$j++)
		{
		if(strcmp($set_arr[$j],$s)==0)
			$flag=1;
		}
		if($flag==0)
		{
			$set_arr[$i]=$s;
			//echo "Set ".($i+1).": ".$set_arr[$i]."<br>";
			$i++;
			
		}
	}
	
	$s="";
	$set_val="";	
	$res=mysql_query("select * from assignment where file_no='".$fno."' and  paper_code='".$code."'",$conn);
	while($r=mysql_fetch_array($res))
	{
		if($s=="")
			$s=$r['question'];
			else
			$s=$s.",".$r['question'];
	}
	for($m=0;$m<=$i;$m++)
	{
		if(strcmp($set_arr[$m],$s)==0)
		{
			$set_val=($m+1);
			
			if($set_val==1)
			{$set="SET-A";}
			else if($set_val==2)
			{$set="SET-B";}
			else if($set_val==3)
			{$set="SET-C";}
			else if($set_val==4)
			{$set="SET-D";}
			else if($set_val==5)
			{$set="SET-E";}
			else if($set_val==6)
			{$set="SET-F";}
			else if($set_val==7)
			{$set="SET-G";}
			else if($set_val==8)
			{$set="SET-H";}
			else if($set_val==9)
			{$set="SET-I";}
			else if($set_val==10)
			{$set="SET-J";}
			else if($set_val==11)
			{$set="SET-K";}
			else if($set_val==12)
			{$set="SET-L";}
			else if($set_val==13)
			{$set="SET-M";}
			else if($set_val==14)
			{$set="SET-N";}
			else if($set_val==15)
			{$set="SET-O";}
			else if($set_val==16)
			{$set="SET-P";}
			else if($set_val==17)
			{$set="SET-Q";}
			else if($set_val==18)
			{$set="SET-R";}
			else if($set_val==19)
			{$set="SET-S";}
			else if($set_val==20)
			{$set="SET-T";}
			else if($set_val==21)
			{$set="SET-U";}
			else if($set_val==22)
			{$set="SET-V";}
			else if($set_val==23)
			{$set="SET-W";}
			else if($set_val==24)
			{$set="SET-X";}
			else if($set_val==25)
			{$set="SET-Y";}
			else if($set_val==26)
			{$set="SET-Z";}
			else if($set_val==27)
			{$set="SET-AA";}
			else if($set_val==28)
			{$set="SET-AB";}
			else if($set_val==29)
			{$set="SET-AC";}
			else if($set_val==30)
			{$set="SET-AD";}
			else if($set_val==31)
			{$set="SET-AE";}
			else if($set_val==32)
			{$set="SET-AF";}
			else if($set_val==33)
			{$set="SET-AG";}
			else if($set_val==34)
			{$set="SET-AH";}
			else if($set_val==35)
			{$set="SET-AI";}
			else if($set_val==36)
			{$set="SET-AJ";}
			else if($set_val==37)
			{$set="SET-AK";}
			else if($set_val==38)
			{$set="SET-AL";}
			else if($set_val==39)
			{$set="SET-AM";}
			else if($set_val==40)
			{$set="SET-AN";}
			else if($set_val==41)
			{$set="SET-AO";}
			else if($set_val==42)
			{$set="SET-AP";}
			else if($set_val==43)
			{$set="SET-AQ";}
			else if($set_val==44)
			{$set="SET-AR";}
			else if($set_val==45)
			{$set="SET-AS";}
			else if($set_val==46)
			{$set="SET-AT";}
			else if($set_val==47)
			{$set="SET-AU";}
			else if($set_val==48)
			{$set="SET-AV";}
			else if($set_val==49)
			{$set="SET-AW";}
			else if($set_val==50)
			{$set="SET-AX";}
			else if($set_val==51)
			{$set="SET-AY";}
			else if($set_val==52)
			{$set="SET-AZ";}
			else if($set_val==53)
			{$set="SET-BA";}
			else if($set_val==54)
			{$set="SET-BB";}
			else if($set_val==55)
			{$set="SET-BC";}
			else if($set_val==56)
			{$set="SET-BD";}
			else if($set_val==57)
			{$set="SET-BE";}
			else if($set_val==58)
			{$set="SET-BF";}
			else if($set_val==59)
			{$set="SET-BG";}
			else if($set_val==60)
			{$set="SET-BH";}
			//echo"<br/>".$set_val;
		}
	}
$i=1;
$fac_name="";
$sub_name="";
$res=mysql_query("select * from faculty_assign where paper_code='".$code."'",$conn);
	if($r=mysql_fetch_array($res))
	{
		$fac_name=$r['faculty_name'];
		$sub_name=$r['paper_name'];
	}
  
  $export_table='<html>
  <head><title>Index</title>
  <body>
  <div style="width:100%;height:75px margin:0px 10px 0px; text-align:center;">
  </div><div style="width:900px margin:0 auto;">
  <div style="margin:0 auto; width:500px">';
  
  $res=mysql_query("select * from assignment where file_no='".$fno."' and  paper_code='".$code."'",$conn);
  $export_table .="<table align=center><tr><td colspan=4><strong>$assign-$sub_name</strong><br/></td></tr></table>";
  $export_table.="<table><tr><td colspan=7><strong>$set</strong><br/><br/></td></tr></table><table align=center><tr><td><strong>INDEX</strong><br/><br/></td></tr></table>
<table border=1><tr><td>Que No.</td><td>Question</td><td>Page No.</td><td>Remark</td></tr>";
	while($r=mysql_fetch_array($res))
	{
	$export_table .="<tr><td>".$i."</td><td>".$r['question']."</td><td></td><td></td></tr>";
	$i++;
	}
  $export_table .="</table><br/><table align=right><tr><td><strong>Issued By:</strong></td><td></td><td><strong>".$fac_name."</strong></td></tr><tr><td align=left><a href=javascript:window.print()>Print Index</a></td></tr></table><div style=margin-top:400px;>&copy;BVM College of Management Education</div></div></body></html>";
 echo "$export_table";
 
  
  ?>
