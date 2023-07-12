
<?php

require_once("config.php");



/*****************************************
* Check, if a new report is available
*****************************************/

$apiInstance = new SellingPartnerApi\Api\ReportsV20210630Api($config);

$objDateTime = new DateTime('Now');
$created_until = $objDateTime->format("Y-m-d\TH:i:sP");

$objDateTime = new DateTime(file_get_contents('last.txt'));
$created_since = $objDateTime->format("Y-m-d\TH:i:sP");

echo "From: " . $created_since;
echo "<br>";
echo "To: " . $created_until;
echo "<br>";

$report_type = array('GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING'); //Important?

$processing_statuses = array('DONE'); // string[] | A list of processing statuses used to filter reports.
$marketplaceIds = array('A1PA6795UKMFR9'); //Germany
$page_size = 100; // int | The maximum number of reports to return in a single call.
$next_token = '';

try {
	$result = $apiInstance->getReports($report_type, $processing_statuses, $marketplaceIds, $page_size, $created_since, $created_until, $next_token);
	
	/*
	echo "<pre>";
	var_dump($result['reports']);
	echo "</pre>";
	*/
} catch (Exception $e) {
	echo 'Exception when calling ReportsApi->getReports: ', $e->getMessage(), PHP_EOL;
	exit(0);
}



/*****************************************
* Get report download URL
*****************************************/

$content = "";
$processing_end_time = $result['reports'][0]["processing_end_time"]; //Write to last.txt later on

foreach($result['reports'] as $report){
	$report_document_id = $report["report_document_id"]; // string | The identifier for the report document.

	$apiInstance = new SellingPartnerApi\Api\ReportsV20210630Api($config);

	try {
		$result = $apiInstance->getReportDocument($report_document_id, $report_type);
		
		$content .= file_get_contents($result['url']);
		
		/*
		echo "<pre>";
		print_r($result);
		echo "</pre>";
		*/
	} catch (Exception $e) {
		echo 'No new order reports! - Exception when calling ReportsV20210630Api->getReportDocument: ', $e->getMessage(), PHP_EOL;
		//End the program if there are no new reports
		exit(0);
	}

}




/*****************************************
* Download reports
*****************************************/

try{	
	//Download report and write end-time to last.txt, if everything worked
	if (file_put_contents('../amazonReportTemp.txt', $content)){
		echo "New report downloaded successfully! - " . $processing_end_time;
		
		$lastWriter = fopen('last.txt', 'w+');
		fwrite($lastWriter, $processing_end_time);
		fclose($lastWriter);
	}
	else
	{
		echo "File saving failed.";
		exit(0);
	}
} catch (Exception $e) {
    echo 'Could not download file. - ', $e->getMessage(), PHP_EOL;
	//End the program if there are no new reports
	exit(0);
}

