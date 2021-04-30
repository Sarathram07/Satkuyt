<?php
	$jsondata = file_get_contents("https://api.covid19india.org/data.json");
	$data = json_decode($jsondata, true);
	
	foreach($data as $key => $value){
		$days_count= count($value)-1;
		$days_count_prev = $days_count-1;
	}
	
	$total_confirmed = 0;
    $total_recovered = 0;
    $total_deaths = 0;
	
?>