<?php
	
	$orders = array();
	
	$fp = fopen('../amazonReportTemp.txt', 'r');

	$i = 0;

	//Make array out of txt file
	while ( !feof($fp) ){
		$line = fgets($fp, 2048);

		$data = str_getcsv($line, "\t");
		
		//Skip empty lines
		if($data[0] != null){
			//Skip additional headlines, if multiple reports exist
			if($i == 0 || $data[0] != "order-id"){
				//Manipulate data	
				
				
				//Generate Headline
				if($i == 0){
					$data[40] = "Nebenkosten";
					$data[41] = "Strasse";
					$data[42] = "Firma 1";
					$data[43] = "Firma 2";
					$data[44] = "Firma 3";
				}
				else{
					//Calculate costs
					$data[40] = $data[11] * $data[9] * 0.135;
					
					//Sometimes the street is in ship-adress-1; sometimes it's in ship-address-2
					//If ship-address-1 contains number the street is in ship-address-1
					if (preg_match('~[0-9]+~', $data[17])) {
						$data[41] = $data[17]; //ship-adress-1 in street
						$data[42] = $data[16]; //recipient-name in Firma1
						$data[43] = $data[18]; //ship-adress-2 in Firma2
					}
					else{
						$data[41] = $data[18]; //ship-adress-2 in street
						$data[42] = $data[17]; //ship-adress-1 Firma1
						$data[43] = $data[16]; //recipient-name in Firma2
					}
					
					//No difference between the two logics
					$data[44] = $data[19]; //ship-adress-3 in Firma3
					
					//Check if buyer-company-name is set; If it's set, check for duplicates and add it to Firma1
					if($data[34] != ""){
						if($data[17] != $data[34] && $data[16] != $data[34]){ 
							$data[42] = $data[42] . " - " . $data[34];
						} 
					}
					
				}
			
				array_push($orders, $data);
			}
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
		$ord = str_replace('"', '', $order); //Remove " - Enventa doesn't like csvs with "
		fputcsv($fp, $ord, ";");
	}

	fclose($fp);