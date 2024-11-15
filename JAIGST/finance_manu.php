<ul> <li>
                                    <a href="dashboard.php">
                                        <i class="icon-home icon-large"></i> Home
                                    </a>
                                </li>
								<li>
                                    <a href="payment_mgmt.php">
                                        <i class="icon-user icon-large"></i> Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="receive_mgmt.php">
                                        <i class="icon-group icon-large"></i> Received
                                        <!--<i class="icon-credit-card>-->
                                    </a>
                                </li>
                                <li>
                                    <a href="finance_mgmt.php">
                                        <i class="icon-money icon-large"></i> Cash Deposit
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice_mgmt.php">
                                        <i class="icon-edit icon-large"></i> Expenses
                                    </a>
                                </li>
                                <li>
                                    <a href="finance_mgmt.php">
                                        <i class="icon-credit-card icon-large"></i> Cash Withdraw
                                    </a>
                                </li>
								<!--<li>
                                    <a href="setting.php">
                                        <i class="icon-cog icon-large"></i> Setting
                                    </a>
                                </li>
								<li>
                                    <a href="area_mgmt.php">
                                        <i class="icon-map-marker icon-large"></i> Area
                                        <!--<i class="icon-credit-card>
                                    </a>
                                </li>
                                <li>
                                    <a href="client_mgmt.php">
                                        <i class="icon-group icon-large"></i> Clients
                                        <!--<i class="icon-credit-card>
                                    </a>
                                </li>
								<li>
                                    <a href="purchase_mgmt.php">
                                        <i class="icon-glass icon-large"></i> Purchase
                                    </a>
                                </li>
								<li>
                                    <a href="order_mgmt.php">
                                        <i class="icon-pencil icon-large"></i> Order
                                    </a>
                                </li>
								<li>
                                    <a href="invoice_mgmt.php">
                                        <i class="icon-edit icon-large"></i> Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="finance_mgmt.php">
                                        <i class="icon-money icon-large"></i> Finance
                                    </a>
                                </li>
								<li>
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