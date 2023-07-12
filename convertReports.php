<?php
	
	$orders = array();
	
	$fp = fopen('../amazonReportTemp.txt', 'r');

	$i = 0;

	//Make array out of txt file
	while ( !feof($fp) ){
		$line = fgets($fp, 2048);

		$data = str_getcsv($line, "\t");
		
		//MANIPULATION	
		if($data[0] != null){
			($i == 0) ? $data[40] = "Nebenkosten" : $data[40] = $data[11] * 0.135;
			
			array_push($orders, $data);
		}
		
		$i++;
	}                              

	fclose($fp);
	
	
	
	/*
	echo "<pre>";
	var_dump($orders);
	echo "</pre>";
	*/
	
	
	$fp = fopen('../amazonOrder' . $currentDateTime->format('Y-m-d\TH-i-s') . '.csv', 'w');
	
	foreach ($orders as $order) {
		fputcsv($fp, $order, ";");
	}

	fclose($fp);