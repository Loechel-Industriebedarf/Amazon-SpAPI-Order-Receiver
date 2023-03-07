<?php
// API-Guide
// https://github.com/jlevers/selling-partner-api

// API-Reference
// https://developer-docs.amazon.com/sp-api/docs/reports-api-v2021-06-30-reference

// AWS
// https://eu-west-2.console.aws.amazon.com/iamv2/home#/home

// Support
// https://sellercentral.amazon.de/gp/mws/contactus.html?ld=ASXXSPAPIDirect

// loechel_industriebedarf - datenmanagement@loechel-industriebedarf.de - Loechel123!

// New role, new token
//
// On 403 error, create a new user

require_once("config.php");

//User-ARN - arn:aws:iam::640406537412:user/loechel
//Role-ARN - arn:aws:iam::640406537412:role/Loechel



/***********************************************
* Test if connection works
***********************************************/
/*
echo '<h1>Marketplaces</h1>';
$api = new SellersApi($config);
try {
    $result = $api->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}

*/
phpinfo();


/***********************************************
* Get reports
***********************************************/

echo '<h1>Get Reports</h1>';

$apiInstance = new SellingPartnerApi\Api\ReportsV20210630Api($config);
$objDateTime = new DateTime('Now');
$created_until = $objDateTime->format("Y-m-d\TH:i:sP");
$objDateTime = new DateTime('01/01/2023');
$created_since = $objDateTime->format("Y-m-d\TH:i:sP");

echo "From: " . var_dump($created_since);
echo "<br>";
echo "To: " . var_dump($created_until);
echo "<br>";


//Working order types
$report_type = array('GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE');
$report_type = array('GET_FLAT_FILE_OPEN_LISTINGS_DATA');
$report_type = array('GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING');
$report_type = array('GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING');
$report_type = array('GET_FLAT_FILE_PENDING_ORDERS_DATA');
$report_type = array('GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA');
$report_type = array('GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2');

//Forbidden order types
$report_type = array('GET_AMAZON_FULFILLED_SHIPMENTS_DATA_INVOICING');
$report_type = array('GET_FLAT_FILE_ORDER_REPORT_DATA_INVOICING'); //Important?
$report_type = array('GET_ORDER_REPORT_DATA_INVOICING');
$report_type = array('GET_FLAT_FILE_ORDER_REPORT_DATA_TAX');
$report_type = array('GET_FLAT_FILE_ORDERS_DATA');

//All working order types
$report_type = array('GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE', 'GET_FLAT_FILE_OPEN_LISTINGS_DATA',
'GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING', 'GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING',
'GET_FLAT_FILE_PENDING_ORDERS_DATA', 'GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA',
'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2');

$report_type = array('GET_FLAT_FILE_ORDER_REPORT_DATA_INVOICING'); //Important?

$processing_statuses = array('DONE'); // string[] | A list of processing statuses used to filter reports.
$marketplaceIds = array('A1PA6795UKMFR9'); //Germany
$page_size = 100; // int | The maximum number of reports to return in a single call.
$next_token = '';

try {
	$result = $apiInstance->getReports($report_type, $processing_statuses, $marketplaceIds, $page_size, $created_since, $created_until, $next_token);
	
	echo "<pre>";
	print_r($result['reports']);
	echo "</pre>";
} catch (Exception $e) {
	echo 'Exception when calling ReportsApi->getReports: ', $e->getMessage(), PHP_EOL;
}








/*
echo "<h1>Get download URL of report</h1>";

$apiInstance = new SellingPartnerApi\Api\ReportsV20210630Api($config);
$report_document_id = 'amzn1.spdoc.1.4.eu.dd3b2a88-fea4-47a2-bd50-5326b2775dfd.T3USY41UD73CD5.1117'; // string | The identifier for the report document.
$report_type = 'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE'; // string | The name of the document's report type.

try {
    $result = $apiInstance->getReportDocument($report_document_id, $report_type);
	
	echo "<pre>";
	print_r($result);
	echo "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling ReportsV20210630Api->getReportDocument: ', $e->getMessage(), PHP_EOL;
}





echo "<h1>Download URL</h1>";
echo $result['url'];


/*


/***********************************************
* Get report schedules
***********************************************/
/*
echo '<h1>Get Report schedules</h1>';
$apiInstance = new SellingPartnerApi\Api\ReportsV20210630Api($config);
$report_types = array('GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE', 'GET_FLAT_FILE_OPEN_LISTINGS_DATA', 'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE', 'GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING', 'GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING'); // string[] | A list of report types used to filter report schedules.

try {
    $result = $apiInstance->getReportSchedules($report_types);
	
	echo "<pre>";
    print_r($result);
	echo "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling ReportsV20210630Api->getReportSchedules: ', $e->getMessage(), PHP_EOL;
}

/***********************************************
* Get specific order adress
***********************************************/
/*
echo '<h1>Get specific order address</h1>';

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = '306-7215648-3356318'; // string | An orderId is an Amazon-defined order identifier, in 3-7-7 format.
$data_elements = ['buyerInfo', 'shippingAddress'];

try {
    $result = $apiInstance->getOrder($order_id, $data_elements);
    echo "<pre>";
    print_r($result);
	echo "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrderAddress: ', $e->getMessage(), PHP_EOL;
}

/***********************************************
* Get specific order buyer info
***********************************************/
/*
echo '<h1>Get specific buyer info</h1>';

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = '306-6567414-71315546'; // string | An orderId is an Amazon-defined order identifier, in 3-7-7 format.

try {
    $result = $apiInstance->getOrderBuyerInfo($order_id);
    echo "<pre>";
    print_r($result);
	echo "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrderBuyerInfo: ', $e->getMessage(), PHP_EOL;
}


/***********************************************
* Get all orders
***********************************************/
/*
echo '<h1>Get all orders</h1>';

$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$marketplace_ids = array('A1PA6795UKMFR9'); // string[] | A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values.
$created_after = '2022-12-12T10:11:55'; // string | A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format.
$created_before = ''; // string | A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
$last_updated_after = ''; // string | A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
$last_updated_before = ''; // string | A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
$order_statuses = array('Unshipped'); // string[] | A list of `OrderStatus` values used to filter the results.
/*Possible values:**
- `PendingAvailability` (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.)
- `Pending` (The order has been placed but payment has not been authorized.)
- `Unshipped` (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped.)
- `PartiallyShipped` (One or more, but not all, items in the order have been shipped.)
- `Shipped` (All items in the order have been shipped.)
- `InvoiceUnconfirmed` (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.)
- `Canceled` (The order has been canceled.)
- `Unfulfillable` (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.)
*/

/*
try {
    $result = $apiInstance->getOrders($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses);
	
	echo "<pre>";
    print_r($result);
	echo "</pre>";
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrders: ', $e->getMessage(), PHP_EOL;
}
*/