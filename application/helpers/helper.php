<?php

if(!function_exists('get_last_week')) {
	function get_last_week($type = FALSE)
	{
		$previous_week = strtotime("-1 week");

		if(date('D', $previous_week) == 'Sat')
		{
			$start_week = $previous_week;
		}
		else
		{
			$start_week = strtotime("last saturday midnight", $previous_week);
		}

		if(date('D', $previous_week) == 'Fri')
		{
			$end_week = $previous_week;
		}
		else
		{
			$end_week = strtotime("next friday", $previous_week);
		}

		if($type)
		{
			$start_week = date("j M", $start_week);
			$end_week   = date("j M", $end_week);
		}
		else
		{
			$start_week = date("Y-m-d", $start_week);
			$end_week   = date("Y-m-d", $end_week);

			$result['start_week'] = $start_week;
			$result['end_week']   = $end_week;
		}

		$result               = array();
		$result['start_week'] = $start_week;
		$result['end_week']   = $end_week;

		return $result;
	}
}

if(!function_exists('get_this_week')) {
	function get_this_week($type = FALSE)
	{
		$this_week = strtotime("week");

		if(date('D', $this_week) == 'Sat')
		{
			$start_week = $this_week;
		}
		else
		{
			$start_week = strtotime("last saturday midnight", $this_week);
		}

		if(date('D', $this_week) == 'Fri')
		{
			$end_week = $this_week;
		}
		else
		{
			$end_week = strtotime("next friday", $this_week);
		}

		if($type)
		{
			$start_week = date("j M", $start_week);
			$end_week   = date("j M", $end_week);
		}
		else
		{
			$start_week = date("Y-m-d", $start_week);
			$end_week   = date("Y-m-d", $end_week);

			$result['start_week'] = $start_week;
			$result['end_week']   = $end_week;
		}

		$result               = array();
		$result['start_week'] = $start_week;
		$result['end_week']   = $end_week;

		return $result;
	}
}
