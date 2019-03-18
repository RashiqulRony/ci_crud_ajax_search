<?php
/**
 * Created by PhpStorm.
 * User: rashiqul
 * Date: 2/5/19
 * Time: 4:39 AM
 */

class Order extends CI_Model {
	public function order_info(){
		$date = $this->input->post('date');
		$today = date('Y-m-d');
		$amount_sum = 0;
		$all_orders = '';
		//this week
		$week = date('Y-m-d', strtotime("last Saturday"));
		$weekEnd = date('Y-m-d', strtotime("Friday"));
		//Last Week
		$lastWeek = date('Y-m-d', strtotime('-1 Saturday last week'));
		$lastWeekEnd = date('Y-m-d', strtotime('Friday last week'));
		//This Month
		$monthStart = new DateTime('first day of this month');
		$monthEnd = new DateTime('last day of this month');
		//last Month
		$lastMonthStart = new DateTime("first day of last month");
		$lastMonthEnd = new DateTime("last day of last month");
		//this quarter
		$offset = (date('n')%3)-1;
		$thisQuarterStart = new DateTime("first day of -$offset month midnight");
		$offset = 3-(date('n')%3);
		$thisQuarterEnd = new DateTime("last day of +$offset month midnight");
		//last quarter
		$monthsFromStart = (date('n') - 1) % 3;
		$monthsToEnd = 2 - $monthsFromStart;
		$lastQuarterStart = new DateTime("first day of -$monthsFromStart-4 month midnight");
		$lastQuarterEnd = new DateTime("last day of +$monthsToEnd-2 month midnight");
		//This year
		$thisYearStart = new DateTime('this year January 1st');
		$thisYearEnd = new DateTime('this year December 31st');
		//Last Year
		$lastYearStart = new DateTime('last year January 1st');
		$lastYearEnd = new DateTime('last year December 31st');

		if($date == 'today'){
			$orders = $this->db->where("order_date",$today)->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date', $today);
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'yesterday'){
			$yes= date('Y-m-d', strtotime($today) - 1);
			$amount_sum = 0;
			$orders = $this->db->where("order_date",$yes)->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date', $yes);
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'this_week'){
			$this->db->where('order_date >=', $week);
			$this->db->where('order_date <=', $weekEnd);

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $week);
			$this->db->where('order_date <=', $weekEnd);
			$all_orders = $this->db->count_all_results();

			$orders = $this->db->get('orders');
			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'last_week'){
			$this->db->where('order_date >=', $lastWeek);
			$this->db->where('order_date <=', $lastWeekEnd);
			$orders = $this->db->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $lastWeek);
			$this->db->where('order_date <=', $lastWeekEnd);
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'this_month'){
			$this->db->where('order_date >=', $monthStart->format('Y-m-d'));
			$this->db->where('order_date <=', $monthEnd->format('Y-m-d'));
			$orders = $this->db->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $monthStart->format('Y-m-d'));
			$this->db->where('order_date <=', $monthEnd->format('Y-m-d'));
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'last_month'){
			$this->db->where('order_date >=', $lastMonthStart->format('Y-m-d'));
			$this->db->where('order_date <=', $lastMonthEnd->format('Y-m-d'));
			$orders = $this->db->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $lastMonthStart->format('Y-m-d'));
			$this->db->where('order_date <=', $lastMonthEnd->format('Y-m-d'));
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'this_quarter'){
			$this->db->where('order_date >=', $thisQuarterStart->format('Y-m-d'));
			$this->db->where('order_date <=', $thisQuarterEnd->format('Y-m-d'));
			$orders = $this->db->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $thisQuarterStart->format('Y-m-d'));
			$this->db->where('order_date <=', $thisQuarterEnd->format('Y-m-d'));
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'last_quarter'){
			$this->db->where('order_date >=', $lastQuarterStart->format('Y-m-d'));
			$this->db->where('order_date <=', $lastQuarterEnd->format('Y-m-d'));
			$orders = $this->db->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $lastQuarterStart->format('Y-m-d'));
			$this->db->where('order_date <=', $lastQuarterEnd->format('Y-m-d'));
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'this_year'){
			$this->db->where('order_date >=', $thisYearStart->format('Y-m-d'));
			$this->db->where('order_date <=', $thisYearEnd->format('Y-m-d'));
			$orders = $this->db->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $thisYearStart->format('Y-m-d'));
			$this->db->where('order_date <=', $thisYearEnd->format('Y-m-d'));
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'last_year'){
			$this->db->where('order_date >=', $lastYearStart->format('Y-m-d'));
			$this->db->where('order_date <=', $lastYearEnd->format('Y-m-d'));
			$orders = $this->db->get('orders');

			$this->db->select('*')->from('orders');
			$this->db->where('order_date >=', $lastYearStart->format('Y-m-d'));
			$this->db->where('order_date <=', $lastYearEnd->format('Y-m-d'));
			$all_orders = $this->db->count_all_results();

			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}elseif($date == 'Lifetime'){
			$orders = $this->db->get('orders');
			$all_orders = $this->db->select('*')->from('orders')->count_all_results();
			foreach ($orders->result() as $data)
			{
				$amount_sum += $data->order_amount;
			}
		}

		$orderInfo = array(
			'all_order_amount' => $amount_sum,
			'all_order_count' => $all_orders,
		);

		return $orderInfo;
	}
}
