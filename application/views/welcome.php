<?php
$date = date('Y-m-d');
$year = date('Y');
$month = date('m') ;
$thisMonth = date('m') ;
$quarter = date('Y-m-01', strtotime('-3 month'));
$thisQuarter = date('Y-m-01', strtotime('+3 month'));
$week = date('Y-m-d', strtotime("last Saturday"));
$weekEnd = date('Y-m-d', strtotime("Friday"));
$lastWeek = date('Y-m-d', strtotime('-1 Saturday last week'));
$lastWeekEnd = date('Y-m-d', strtotime('Friday last week'));
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Leaderboard
				</div>

				<div class="panel-body">
					<div class="vertical_cus_tab_wrapper">
						<ul class="nav nav-tabs vertical_cus_tab" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active leadtoscore" id="today-tab" data-toggle="tab" onclick="return orderInfo('today'); " href="#today" role="tab" aria-controls="today" aria-selected="true">Today <?php echo date('M d', strtotime($date))?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="yesterday-tab" data-toggle="tab" href="#yesterday" onclick="return orderInfo('yesterday');" role="tab" aria-controls="yesterday" aria-selected="false">Yesterday <?php echo date('M d', strtotime($date) - 1)?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_week-tab" data-toggle="tab" href="#this_week" onclick="return orderInfo('this_week');" role="tab" aria-controls="this week" aria-selected="false">This Week <?php echo date('M d', strtotime($week)) . ' - '. date('M d', strtotime($weekEnd)) ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_week-tab" data-toggle="tab" href="#last_week" onclick="return orderInfo('last_week');" role="tab" aria-controls="last week" aria-selected="false">Last Week <?php echo date('M d', strtotime($lastWeek)) .' - '. date('M d', strtotime($lastWeekEnd))?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_month-tab" data-toggle="tab" href="#this_month" onclick="return orderInfo('this_month');" role="tab" aria-controls="This Month " aria-selected="false">This Month</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_month-tab" data-toggle="tab" href="#last_month" onclick="return orderInfo('last_month');" role="tab" aria-controls="Last Month" aria-selected="false">Last Month</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_quarter-tab" data-toggle="tab" href="#this_quarter" onclick="return orderInfo('this_quarter');" role="tab" aria-controls="This Quarter" aria-selected="false">This Quarter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_quarter-tab" data-toggle="tab" href="#last_quarter" onclick="return orderInfo('last_quarter');" role="tab" aria-controls="Last Quarter" aria-selected="false">Last Quarter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="this_year-tab" data-toggle="tab" href="#this_year" role="tab" onclick="return orderInfo('this_year');" aria-controls="This Year" aria-selected="false">This Year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="last_year-tab" data-toggle="tab" href="#last_year" role="tab" onclick="return orderInfo('last_year');" aria-controls="Last Year" aria-selected="false">Last Year</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="lifetime-tab" data-toggle="tab" href="#lifetime" role="tab" onclick="return orderInfo('Lifetime');" aria-controls="Lifetime" aria-selected="false">Lifetime</a>
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
							<div class="analytics_wrapper">
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
												<span class="analytics_number order_amount"><?php echo isset($all_order_amount) ? $all_order_amount:0; ?></span>
												<p>All Order Amount</p>
											</div>
										</td>

										<td>
											<div class="analytics_list analytics_listone">
												<span class="analytics_number order_count"><?php echo isset($all_orders) ? $all_orders:0; ?></span>
												<p>All Orders</p>
											</div>
										</td>

									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



