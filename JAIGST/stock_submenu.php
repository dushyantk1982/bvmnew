<ul> <li>
                                    <a href="dashboard.php">
                                        <i class="icon-home icon-large"></i> Home
                                    </a>
                                </li>
								<li>
                                    <a href="reports.php">
                                        <i class="icon-arrow-left icon-large"></i> Back
                                    </a>
                                </li>
                               <li>
                                    <a href="product_stock.php">
                                        <i class="icon-glass icon-large"></i> Product Stock
                                    </a>
                                </li>
                                <li>
                                    <a href="category_stock.php">
                                        <i class="icon-check icon-large"></i> Category Wise
                                    </a>
                                </li>
								
                                <li>
                                    <a href="client_product_sales_report.php">
                                        <i class="icon-user icon-large"></i> Client V/S Pro.
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