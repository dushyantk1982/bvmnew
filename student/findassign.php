<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="images/logo.png" />

<style type="text/css">
<!--
.style17 {
	color: #003333;
	font-size: 24px;
}
-->
</style>

</head>

<body>
<table width="100%" align="center">

<td width="90%" valign="middle" ><div align="center">
  
</div> </td></table>
<div class="style2" id="Layer4">
<form action="displayassign.php" method="post" target="_blank" >
                          <table width="100%" align="center" bgcolor="#FFFFFF" class="pagefont"><tr><td align="center" colspan="3"><h3 class="style16 style17"><u>Assignment</u></h3>
                            </td>
                          </tr>
						  <tr>
                            <td width="28%"><div align="center" class="style30"></div></td>
                              <td colspan="1" width="37%" align="center"><label>
                              
							   <?php 
							   			
									$fno=$_GET['fileno'];
									//include('dbcon.php');
									$conn=mysql_connect("localhost","bvmgroup_userbvm","dushyant12428");
	if(!$conn)
		{
			die('Could not connect:'.mysql_error());
		}
	mysql_select_db('bvmgroup_bvmclg');
										$res=mysql_query("select * from student_reg where file_no='".$fno."'",$conn);
	
										while($r=mysql_fetch_array($res))
										{
											//echo $r['st_name'];
											$cr=$r['course'];
											$sem=$r['sem'];
										}
									
  //echo $cr;
  //echo $sem;
								?></label></td><td width="35%"></td>
                           </tr>
                          <tr>
                          <td width="28%"><div align="left" class="style30"></div></td>
                              <input type="hidden" name="fileno" value="<?php echo $fno;?>" />
							  <td width="37%">Subject Code<br />
							  <?php if($cr=='MCA' && $sem=='1'){ ?>
							  MCA 101<input type="radio" name="assign" id="assign" value="MCA101" /><br />
							  MCA 102<input type="radio" name="assign" id="assign" value="MCA102" /><br />
							  MCA 103<input type="radio" name="assign" id="assign" value="MCA103" /><br />
							  MCA 104<input type="radio" name="assign" id="assign" value="MCA104" /><br />
							  MCA 105<input type="radio" name="assign" id="assign" value="MCA105" /><br />
							  <?php
							  }
							   else if($cr=='MCA' && $sem=='2')
							   { ?>
							  MCA 201<input type="radio" name="assign" id="assign" value="MCA201" /><br />
							  MCA 202<input type="radio" name="assign" id="assign" value="MCA202" /><br />
							  MCA 203<input type="radio" name="assign" id="assign" value="MCA203" /><br />
							  MCA 204<input type="radio" name="assign" id="assign" value="MCA204" /><br />
							  MCA 205<input type="radio" name="assign" id="assign" value="MCA205" /><br />
							  <?php 
							  }
							  else if($cr=='MCA' && $sem=='3')
							  { ?>
							  MCA 301<input type="radio" name="assign" id="assign" value="MCA301" /><br />
							  MCA 302<input type="radio" name="assign" id="assign" value="MCA302" /><br />
							  MCA 303<input type="radio" name="assign" id="assign" value="MCA303" /><br />
							  MCA 304<input type="radio" name="assign" id="assign" value="MCA304" /><br />
							  MCA 305<input type="radio" name="assign" id="assign" value="MCA305" /><br />
							  <?php 
							  }
							  else if($cr=='MCA' && $sem=='4')
							  { ?>
							  <input type="radio" name="assign" id="assign" value="MCA401" />MCA 401<br />
							  <input type="radio" name="assign" id="assign" value="MCA402" />MCA 402<br />
							  <input type="radio" name="assign" id="assign" value="MCA403" />MCA 403<br />
							  <input type="radio" name="assign" id="assign" value="MCA404" />MCA 404<br />
							  <input type="radio" name="assign" id="assign" value="MCA405 ME" />MCA 405 (ME)<br />
							  <input type="radio" name="assign" id="assign" value="MCA405 Jav" />MCA 405 (JAVA)<br />
							  <?php
							  }
							   else if($cr=='MCA' && $sem=='5')
							   { ?>
							  MCA 501<input type="radio" name="assign" id="assign" value="MCA501" /><br />
							  MCA 502<input type="radio" name="assign" id="assign" value="MCA502" /><br />
							  MCA 503<input type="radio" name="assign" id="assign" value="MCA503" /><br />
							  MCA 504<input type="radio" name="assign" id="assign" value="MCA504" /><br />
							  MCA 505<input type="radio" name="assign" id="assign" value="MCA505" /><br />
							  <?php
							  }
							   else if($cr=='MBA' && $sem=='1')
							   { ?>
							  MBA 101<input type="radio" name="assign" id="assign" value="MBA101" /><br />
							  MBA 102<input type="radio" name="assign" id="assign" value="MBA102" /><br />
							  MBA 103<input type="radio" name="assign" id="assign" value="MBA103" /><br />
							  MBA 104<input type="radio" name="assign" id="assign" value="MBA104" /><br />
							  MBA 105<input type="radio" name="assign" id="assign" value="MBA105" /><br />
							  MBA 106<input type="radio" name="assign" id="assign" value="MBA106" /><br />
							  MBA 107<input type="radio" name="assign" id="assign" value="MBA107" /><br />
							  MBA 108<input type="radio" name="assign" id="assign" value="MBA108" /><br />
							  <?php 
							  }
							  else if($cr=='MBA' && $sem=='2'){ ?>
							  MBA 201<input type="radio" name="assign" id="assign" value="MBA201" /><br />
							  MBA 202<input type="radio" name="assign" id="assign" value="MBA202" /><br />
							  MBA 203<input type="radio" name="assign" id="assign" value="MBA203" /><br />
							  MBA 204<input type="radio" name="assign" id="assign" value="MBA204" /><br />
							  MBA 205<input type="radio" name="assign" id="assign" value="MBA205" /><br />
							  MBA 206<input type="radio" name="assign" id="assign" value="MBA206" /><br />
							  MBA 207<input type="radio" name="assign" id="assign" value="MBA207" /><br />
							  <!--MBA 208<input type="radio" name="assign" id="assign" value="MBA208" /><br />-->
							  JU 001&nbsp;&nbsp;&nbsp;<input type="radio" name="assign" id="assign" value="MBA2 JU001" /><br />
							  <?php 
							  }
							  else if($cr=='MBA' && $sem=='3'){ ?>
							  MBA 301&nbsp;&nbsp;<input type="radio" name="assign" id="assign" value="MBA301" /><br />
							  MBA 302&nbsp;&nbsp;<input type="radio" name="assign" id="assign" value="MBA302" /><br />
							  MBA 303&nbsp;&nbsp;<input type="radio" name="assign" id="assign" value="MBA303" /><br />
							  MBA 304 1(El.1)<input type="radio" name="assign" id="assign" value="MBA304" /><br />
							  MBA 305 1(El.2)<input type="radio" name="assign" id="assign" value="MBA305" /><br />
							  MBA 306 2(El.1)<input type="radio" name="assign" id="assign" value="MBA306" /><br />
							  MBA 307 2(El.2)<input type="radio" name="assign" id="assign" value="MBA307" /><br />
							  MBA 308&nbsp;&nbsp;<input type="radio" name="assign" id="assign" value="MBA308" /><br />
							  <?php 
							  }
							  else if($cr=='MBA' && $sem=='4'){ ?>
							  <input type="radio" name="assign" id="assign" value="MBA401" />MBA 401<br />
							  <input type="radio" name="assign" id="assign" value="MBA402" />MBA 402<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 MK03" />MK - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 MK04" />MK - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 FM03" />FM - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 FM04" />FM - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 HR03" />HRM - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 HR04" />HRM - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 IB03" />IB - 03<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 IB04" />IB - 04<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 OP01" />OP - 01<br />
							  <input type="radio" name="assign" id="assign" value="MBA4 OP02" />OP - 02<br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='1'){ ?>
							  BCA 101<input type="radio" name="assign" id="assign" value="BCA101" /><br />
							  BCA 102<input type="radio" name="assign" id="assign" value="BCA102" /><br />
							  BCA 103<input type="radio" name="assign" id="assign" value="BCA103" /><br />
							  BCA 104<input type="radio" name="assign" id="assign" value="BCA104" /><br />
							  BCA 105<input type="radio" name="assign" id="assign" value="BCA105" /><br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='2'){ ?>
							  BCA 201<input type="radio" name="assign" id="assign" value="BCA201" /><br />
							  BCA 202<input type="radio" name="assign" id="assign" value="BCA202" /><br />
							  BCA 203<input type="radio" name="assign" id="assign" value="BCA203" /><br />
							  BCA 204<input type="radio" name="assign" id="assign" value="BCA204" /><br />
							  BCA 205<input type="radio" name="assign" id="assign" value="BCA205" /><br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='3'){ ?>
							  BCA 301<input type="radio" name="assign" id="assign" value="BCA301" /><br />
							  BCA 302<input type="radio" name="assign" id="assign" value="BCA302" /><br />
							  BCA 303<input type="radio" name="assign" id="assign" value="BCA303" /><br />
							  BCA 304<input type="radio" name="assign" id="assign" value="BCA304" /><br />
							  BCA 305<input type="radio" name="assign" id="assign" value="BCA305" /><br />
							  <?php 
							  }
							  else if($cr=='BCA' && $sem=='4'){ ?>
							  BCA 401<input type="radio" name="assign" id="assign" value="BCA401" /><br />
							  BCA 402<input type="radio" name="assign" id="assign" value="BCA402" /><br />
							  BCA 403<input type="radio" name="assign" id="assign" value="BCA403" /><br />
							  BCA 404<input type="radio" name="assign" id="assign" value="BCA404" /><br />
							  BCA 405<input type="radio" name="assign" id="assign" value="BCA405" /><br />
							  <?php
							  }
							   else if($cr=='BCA' && $sem=='5'){ ?>
							  BCA 501<input type="radio" name="assign" id="assign" value="BCA501" /><br />
							  BCA 502<input type="radio" name="assign" id="assign" value="BCA502" /><br />
							  BCA 503<input type="radio" name="assign" id="assign" value="BCA503" /><br />
							  BCA 504<input type="radio" name="assign" id="assign" value="BCA504" /><br />
							  BCA 505<input type="radio" name="assign" id="assign" value="BCA505" /><br />
							  <?php
							  }
							   else if($cr=='BCA' && $sem=='6'){ ?>
							  BCA 601<input type="radio" name="assign" id="assign" value="BCA601" /><br />
							  BCA 602<input type="radio" name="assign" id="assign" value="BCA602" /><br />
							  BCA 603<input type="radio" name="assign" id="assign" value="BCA603" /><br />
							  BCA 604<input type="radio" name="assign" id="assign" value="BCA604" /><br />
							  BCA 605<input type="radio" name="assign" id="assign" value="BCA605" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='1'){ ?>
							  BBA 101<input type="radio" name="assign" id="assign" value="BBA101" /><br />
							  BBA 102<input type="radio" name="assign" id="assign" value="BBA102" /><br />
							  BBA 103<input type="radio" name="assign" id="assign" value="BBA103" /><br />
							  BBA 104<input type="radio" name="assign" id="assign" value="BBA104" /><br />
							  BBA 105<input type="radio" name="assign" id="assign" value="BBA105" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='2'){ ?>
							  BBA 201<input type="radio" name="assign" id="assign" value="BBA201" /><br />
							  BBA 202<input type="radio" name="assign" id="assign" value="BBA202" /><br />
							  BBA 203<input type="radio" name="assign" id="assign" value="BBA203" /><br />
							  BBA 204<input type="radio" name="assign" id="assign" value="BBA204" /><br />
							  BBA 205<input type="radio" name="assign" id="assign" value="BBA205" /><br />
							  <?php 
							  }
							  else if($cr=='BBA' && $sem=='3'){ ?>
							  BBA 301<input type="radio" name="assign" id="assign" value="BBA301" /><br />
							  BBA 302<input type="radio" name="assign" id="assign" value="BBA302" /><br />
							  BBA 303<input type="radio" name="assign" id="assign" value="BBA303" /><br />
							  BBA 304<input type="radio" name="assign" id="assign" value="BBA304" /><br />
							  BBA 305<input type="radio" name="assign" id="assign" value="BBA305" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='4'){ ?>
							  BBA 401<input type="radio" name="assign" id="assign" value="BBA401" /><br />
							  BBA 402<input type="radio" name="assign" id="assign" value="BBA402" /><br />
							  BBA 403<input type="radio" name="assign" id="assign" value="BBA403" /><br />
							  BBA 404<input type="radio" name="assign" id="assign" value="BBA404" /><br />
							  BBA 405<input type="radio" name="assign" id="assign" value="BBA405" /><br />
							  BBA 406<input type="radio" name="assign" id="assign" value="BBA406" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='5'){ ?>
							  BBA 501<input type="radio" name="assign" id="assign" value="BBA501" /><br />
							  BBA 502<input type="radio" name="assign" id="assign" value="BBA502" /><br />
							  BBA 503<input type="radio" name="assign" id="assign" value="BBA503" /><br />
							  BBA 504<input type="radio" name="assign" id="assign" value="BBA504" /><br />
							  BBA 505<input type="radio" name="assign" id="assign" value="BBA505" /><br />
							  <?php
							  }
							   else if($cr=='BBA' && $sem=='6'){ ?>
							  <input type="radio" name="assign" id="assign" value="BBA601" />BBA 601<br />
							  <input type="radio" name="assign" id="assign" value="BBA602" />BBA 602<br />
							  <input type="radio" name="assign" id="assign" value="BBA603" />BBA 603<br />
							  <input type="radio" name="assign" id="assign" value="BBA604(MM)" />BBA 604(MM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA604(HR)" />BBA 604(HRM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA605(MM)" />BBA 605(MM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA605(HR)" />BBA 605(HRM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA606(MM)" />BBA 606(MM)<br />
							  <input type="radio" name="assign" id="assign" value="BBA606(HR)" />BBA 606(HRM)<br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='1'){ ?>
							  1BCA1<input type="radio" name="assign" id="assign" value="1BCA1" /><br />
							  1BCA2<input type="radio" name="assign" id="assign" value="1BCA2" /><br />
							  1BCA3<input type="radio" name="assign" id="assign" value="1BCA3" /><br />
							  1BCA4<input type="radio" name="assign" id="assign" value="1BCA4" /><br />
							  1BCA5<input type="radio" name="assign" id="assign" value="1BCA5" /><br />
							  <?php 
							  }
							  else if($cr=='BCA(M)' && $sem=='2'){ ?>
							  2BCA1<input type="radio" name="assign" id="assign" value="2BCA1" /><br />
							  2BCA2<input type="radio" name="assign" id="assign" value="2BCA2" /><br />
							  2BCA3<input type="radio" name="assign" id="assign" value="2BCA3" /><br />
							  2BCA4<input type="radio" name="assign" id="assign" value="2BCA4" /><br />
							  2BCA5<input type="radio" name="assign" id="assign" value="2BCA5" /><br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='3'){ ?>
							  3BCA1<input type="radio" name="assign" id="assign" value="3BCA1" /><br />
							  3BCA2<input type="radio" name="assign" id="assign" value="3BCA2" /><br />
							  3BCA3<input type="radio" name="assign" id="assign" value="3BCA3" /><br />
							  3BCA4<input type="radio" name="assign" id="assign" value="3BCA4" /><br />
							  3BCA5<input type="radio" name="assign" id="assign" value="3BCA5" /><br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='4'){ ?>
							  4BCA1<input type="radio" name="assign" id="assign" value="4BCA1" /><br />
							  4BCA2<input type="radio" name="assign" id="assign" value="4BCA2" /><br />
							  4BCA3<input type="radio" name="assign" id="assign" value="4BCA3" /><br />
							  4BCA4<input type="radio" name="assign" id="assign" value="4BCA4" /><br />
							  4BCA5<input type="radio" name="assign" id="assign" value="4BCA5" /><br />
							  <?php 
							  }
							  else if($cr=='BCA(M)' && $sem=='5'){ ?>
							  5BCA1<input type="radio" name="assign" id="assign" value="5BCA1" /><br />
							  5BCA2<input type="radio" name="assign" id="assign" value="5BCA2" /><br />
							  5BCA3<input type="radio" name="assign" id="assign" value="5BCA3" /><br />
							  5BCA4<input type="radio" name="assign" id="assign" value="5BCA4" /><br />
							  5BCA5<input type="radio" name="assign" id="assign" value="5BCA5" /><br />
							  <?php
							  }
							   else if($cr=='BCA(M)' && $sem=='6'){ ?>
							  6BCA1<input type="radio" name="assign" id="assign" value="6BCA1" /><br />
							  6BCA2<input type="radio" name="assign" id="assign" value="6BCA2" /><br />
							  6BCA3<input type="radio" name="assign" id="assign" value="6BCA3" /><br />
							  6BCA4<input type="radio" name="assign" id="assign" value="6BCA4" /><br />
							  6BCA5<input type="radio" name="assign" id="assign" value="6BCA5" /><br />
							  <?php }
							  else
							  {}
							  ?>
							  
							 </td>
                            </tr>
							
							<tr>
                              <td colspan="9" align="center"><div align="center" class="style31">
                                <h3>
                                    <input name="ok" type="submit" class="style30" value=" Assignment" />
                                   
                                 <input name="course" type="hidden" value="<?php echo $cr; ?>">
                                  <p>&nbsp;</p>
								 
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;    </p>
                              </div></td>
                            </tr>
                          </table><?php //ob_flush(); ?>			
                        </form>
    </div>
						
			</body></td></tr></table>
</body>
</html>
