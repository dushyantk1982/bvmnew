<ul> <li>
                                    <a href="dashboard.php">
                                        <i class="icon-home icon-large"></i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="stock_mgmt.php">
                                        <i class="icon-list-alt icon-large"></i> Stock
                                    </a>
                                </li>
								<li>
                                    <a href="sales_report.php">
                                        <i class="icon-check icon-large"></i> Sales
                                    </a>
                                </li>
                                <li>
                                    <a href="purchase_report.php">
                                        <i class="icon-bookmark icon-large"></i> Purchase
                                    </a>
                                </li>
                                <li>
                                    <a href="account_report.php">
                                        <i class="icon-user icon-large"></i> Account
                                    </a>
                                </li>
								<li>
                                    <a href="tax_report.php">
                                        <i class="icon-text-width icon-large"></i> Taxes
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="category_mgmt.php">
                                        <i class="icon-bookmark icon-large"></i> Category
                                    </a>
                                </li>
								<li>
                                    <a href="item_mgmt.php">
                                        <i class="icon-italic icon-large"></i> Item
                                        <!--<i class="icon-credit-card>
                                    </a>
                                </li>
								
								<li>
                                    <a href="bank_mgmt.php">
                                        <i class="icon-bold icon-large"></i> Banks
                                    </a>
                                </li>-->
								<!--<li>
                                    <a href="reports.php">
                                        <i class="icon-list-alt icon-large"></i> Reports
                                    </a>
                                </li>-->
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