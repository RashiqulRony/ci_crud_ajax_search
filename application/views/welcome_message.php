<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Leaderboard
				</div>
				<?php $date = date('Y-m-d')?>
				<div class="panel-body">
					<div class="vertical_cus_tab_wrapper">
						<ul class="nav nav-tabs vertical_cus_tab" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active leadtoscore" id="today-tab" data-toggle="tab" href="#today" role="tab" aria-controls="today" aria-selected="true">Today <?php echo date('M d', strtotime($date))?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="yesterday-tab" data-toggle="tab" href="#yesterday" role="tab" aria-controls="yesterday" aria-selected="false">Yesterday Jan 12</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_week-tab" data-toggle="tab" href="#this_week" role="tab" aria-controls="this week" aria-selected="false">This Week 12 Jan-18 Jan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_week-tab" data-toggle="tab" href="#last_week" role="tab" aria-controls="last week" aria-selected="false">Last Week 5 Jan-11 Jan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_month-tab" data-toggle="tab" href="#this_month" role="tab" aria-controls="This Month" aria-selected="false">This Month</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_month-tab" data-toggle="tab" href="#last_month" role="tab" aria-controls="Last Month" aria-selected="false">Last Month</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_quarter-tab" data-toggle="tab" href="#this_quarter" role="tab" aria-controls="This Quarter" aria-selected="false">This Quarter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_quarter-tab" data-toggle="tab" href="#last_quarter" role="tab" aria-controls="Last Quarter" aria-selected="false">Last Quarter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_year-tab" data-toggle="tab" href="#this_year" role="tab" aria-controls="This Year" aria-selected="false">This Year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_year-tab" data-toggle="tab" href="#last_year" role="tab" aria-controls="Last Year" aria-selected="false">Last Year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="lifetime-tab" data-toggle="tab" href="#lifetime" role="tab" aria-controls="Lifetime" aria-selected="false">Lifetime</a>
							</li>
						</ul>

						<div class="custom_date_range date_by_day" >
							<span></span><i class="fa fa-caret-down"></i>
						</div>

						<div class="tab_search">
							<span>Start from </span>
							<input name="x_day_from_start" id="x_day_from_start" value="" placeholder="X" />
							<span>day(s)</span>
							<button type="submit" class="roboto_condensed cus_button">GO</button>
						</div>
					</div>

					<div class="tab-content vertical_cus_tab_content" id="myTabContent">
						<div class="tab-pane fade show active sections" id="today" role="tabpanel" aria-labelledby="today-tab">

						</div>
						<div class="tab-pane fade" id="yesterday" role="tabpanel" aria-labelledby="yesterday-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="this_week" role="tabpanel" aria-labelledby="this_week-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="last_week" role="tabpanel" aria-labelledby="last_week-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="this_month" role="tabpanel" aria-labelledby="this_month-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="last_month" role="tabpanel" aria-labelledby="last_month-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="this_quarter" role="tabpanel" aria-labelledby="this_quarter-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="last_quarter" role="tabpanel" aria-labelledby="last_quarter-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="this_year" role="tabpanel" aria-labelledby="this_year-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="last_year" role="tabpanel" aria-labelledby="last_year-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
						<div class="tab-pane fade" id="lifetime" role="tabpanel" aria-labelledby="lifetime-tab">
							<table class="sTable3 with-velocity-decline">
								<colgroup>
									<col width="40%">
									<col width="40%">
									<col width="20%">
								</colgroup>
								<tbody>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$1</span>
											<p>All Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number">$142.99</span>
											<p>Success Order Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">1</span>
											<p>Number of Order</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">1</span>
											<p>Number of Success Order</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number">100.00% </span>
											<p>Success Order Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$0</span>
											<p>Refund Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listtwo">
											<span class="analytics_number"> 0% </span>
											<p>Refund Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listthree">
											<span class="analytics_number">$0</span>
											<p>Canceled Amount</p>
										</div>
									</td>
									<td>
										<div class="analytics_list analytics_listfour">
											<span class="analytics_number"> 0% </span>
											<p>Canceled Ratio</p>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="analytics_list analytics_listone">
											<span class="analytics_number">$56.05</span>
											<p>Commission Earned</p>
										</div>
									</td>
								</tr>
								</tbody></table>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$("#today-tab").on("click", function(){
		var date = $('a').attr('href');
		getOrderDetails(date);
	});

	function getOrderDetails(date){
		// alert(date);
		// exit()
		$.ajax({
			url: base_url + "order_details",
			type:'GET',
			// data:{date:date},
			success: function(data){
				$(".sections").html(data);
				console.log(data);
			}
		});
	}
</script>


