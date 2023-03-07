<?php
// API-Guide
// https://github.com/jlevers/selling-partner-api

// API-Reference
// https://developer-docs.amazon.com/sp-api/docs/reports-api-v2021-06-30-reference

// AWS
// https://eu-west-2.console.aws.amazon.com/iamv2/home#/home

// Support
// https://sellercentral.amazon.de/gp/mws/contactus.html?ld=ASXXSPAPIDirect

require_once("config.php");

/*
echo '<h1>Marketplaces</h1>';
$api = new SellingPartnerApi\Api\SellersV1Api($config);
try {
    $result = $api->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
*/

/*
* FBA filtern?
* Rechnungsadresse - Not working?
* Fees via API?
*/

/***********************************************
* Check if csv file exists already
***********************************************/

if(file_exists($csvPath)){
	echo $currentTime . " - CSV file was not processed yet!";
	exit();
}

/***********************************************
* Get all orders
***********************************************/
$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$marketplace_ids = array('A1PA6795UKMFR9'); // Germany; string[] | A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values.
$created_after = $lastOrder; // string | A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format.
$created_before = ''; // string | A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
$last_updated_after = ''; // string | A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
$last_updated_before = ''; // string | A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
$order_statuses = array('Unshipped'); // string[] | A list of `OrderStatus` values used to filter the results.


try {
    $result = $apiInstance->getOrders($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrders: ', $e->getMessage(), PHP_EOL;
}	




/***********************************************
* Debug
***********************************************/
/*
$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
$order_id = '302-6294662-6675513'; // string | An Amazon-defined order identifier, in 3-7-7 format.
$data_elements = ['buyerInfo', 'shippingAddress']; // string[] | An array of restricted order data elements to retrieve (valid array elements are \"buyerInfo\" and \"shippingAddress\")

try {
    $result = $apiInstance->getOrder($order_id, $data_elements);
    echo "<pre>";
	var_dump($result);
	echo "</pre>";
	
	$orderAdress = getOrderAdress($config, $order_id)["payload"];
	echo "<pre>";
	var_dump($orderAdress);
	echo "</pre>";
	
	$buyerInfo = getOrderBuyerInfo($config, $order_id);
	echo "<pre>";
	var_dump($buyerInfo);
	echo "</pre>";
	
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrder: ', $e->getMessage(), PHP_EOL;
}
exit();
*/



$orderCounter = sizeof($result["payload"]["orders"]);
$purchase_date = "";

//New orders!
$csv = array();
if($orderCounter > 0){ array_push($csv, generateCSVHeadline()); }

//Reverse array, so newest order is always first
foreach($result["payload"]["orders"] as $order){
	$order_id = $order["amazon_order_id"];

	$orderAdress = getOrderAdress($config, $order_id)["payload"];
	$shippingAdress = $orderAdress["shipping_address"];
	$orderItems = getOrderItems($config, $order_id)["payload"]["order_items"];
	$business = $orderAdress["is_business_order"];
		
	foreach($orderItems as $item){
		$csvLine = array();
		
		//Order id
		array_push($csvLine, $order["amazon_order_id"]);
		//E-Mail
		array_push($csvLine, $order["buyer_info"]["buyer_email"]);
		
		//SKU
		array_push($csvLine, $item["seller_sku"]);
		//Quantity
		array_push($csvLine, $item["quantity_ordered"]);
		//Item Price
		array_push($csvLine, str_replace(".", ",", $item["item_price"]["amount"]));
		//Shipping price
		if($item["shipping_price"]["amount"] === null){
			array_push($csvLine, "0");
		}
		else{
			array_push($csvLine, str_replace(".", ",", $item["shipping_price"]["amount"]));
		}		
		
		//Amazon sucks. Sometimes the street is in adress_line1, sometimes in adress_line2
		if($shippingAdress["address_line2"] === null){
			//street
			array_push($csvLine, $shippingAdress["address_line1"]);
			//ship1
			array_push($csvLine, $shippingAdress["name"]);
			//ship2
			array_push($csvLine, $shippingAdress["address_line2"]);
			//ship3
			array_push($csvLine, $shippingAdress["address_line3"]);
		}
		else{
			//street
			array_push($csvLine, $shippingAdress["address_line2"]);
			//ship1
			array_push($csvLine, $shippingAdress["name"]);
			//ship2
			array_push($csvLine, $shippingAdress["address_line1"]);
			//ship3
			array_push($csvLine, $shippingAdress["address_line3"]);
		}
		
		//ship city
		array_push($csvLine, $shippingAdress["city"]);
		//ship state
		array_push($csvLine, $shippingAdress["state_or_region"]);
		//ship plz
		array_push($csvLine, $shippingAdress["postal_code"]);
		//ship country code
		array_push($csvLine, $shippingAdress["country_code"]);

		//bill street //!
		array_push($csvLine, "");
		//bill1 //!
		array_push($csvLine, "");
		//bill2 //!
		array_push($csvLine, "");
		//bill3 //!
		array_push($csvLine, "");
		//bill city //!
		array_push($csvLine, "");
		//bill state //!
		array_push($csvLine, "");
		//bill plz //!
		array_push($csvLine, "");
		//bill country //!
		array_push($csvLine, "");
		
		//business
		if($business){
			array_push($csvLine, "Business");
		}		
		else{
			array_push($csvLine, "");
		}
		//phone
		array_push($csvLine, $shippingAdress["phone"]);
		//fees
		array_push($csvLine, str_replace(".", ",", doubleval($item["item_price"]["amount"]) * 0.135));
		
		//purchase date
		$purchase_date = $order["purchase_date"];
		array_push($csvLine, $order["purchase_date"]);
		//update date
		array_push($csvLine, $order["last_update_date"]);
		//current time
		array_push($csvLine, $currentTime);
		
		//Add order line to csv
		array_push($csv, $csvLine);
	}
	
	//Rate (requests per second)	0.0167
	//Burst 						20
	//You don't have to wait, if you only have one order
	if($orderCounter != 1){
		sleep(60); //Amazon rate limit
	}
	$orderCounter--;
}

//If only the headline was added to the csv, don't save it
if(sizeof($csv) == 0){
	echo "No new orders!";
}
else{
	writeCsv($csvPath, $csv);
	
	//Adds one second to purchase date
	$new_purchase_date = date('Y-m-d\TH:i:s', strtotime($purchase_date . '+1 second'));
	writeLastOrder($new_purchase_date);

	echo "New orders got parsed!";
}
echo  " Time: " .$currentTime . " | " . "Last Order: " . $lastOrder . " | Newest Order: " . $purchase_date;

	
	
	
	
	
	


function generateCSVHeadline(){
	$headline = array();
	array_push($headline, "order-id");
	array_push($headline, "buyer-email");
	
	array_push($headline, "sku");
	array_push($headline, "quantity-purchased");
	array_push($headline, "item-price");
	array_push($headline, "shipping-price");
	
	array_push($headline, "street");
	array_push($headline, "ship-adress-1");
	array_push($headline, "ship-adress2");
	array_push($headline, "ship-address-3");
	array_push($headline, "ship-city");
	array_push($headline, "ship-state");
	array_push($headline, "ship-postal-code");
	array_push($headline, "ship-country");
	
	array_push($headline, "bill-street");
	array_push($headline, "bill-address-1");
	array_push($headline, "bill-address-2");
	array_push($headline, "bill-address-3");
	array_push($headline, "bill-city");
	array_push($headline, "bill-state");
	array_push($headline, "bill-postal-code");
	array_push($headline, "bill-country-code");
	
	array_push($headline, "is-business-order");
	array_push($headline, "phone");
	array_push($headline, "fees");
	
	array_push($headline, "purchase-date");
	array_push($headline, "last-update-date");
	array_push($headline, "current-time");

	return $headline;
}





function writeCsv($csvPath, $csv){
	$fp = fopen($csvPath, 'w');

	foreach ($csv as $fields) {
		//Encode csv as ANSI (Windows-1252)
		fputcsv($fp, array_map("utf8_decode", $fields), ";");
	}

	fclose($fp);
}



function writeLastOrder($ordernr){
	$lastWriter = fopen('lastOrder.txt', 'w+');
	fwrite($lastWriter, $ordernr);
	fclose($lastWriter);
}




/***********************************************
* Get specific order adress
***********************************************/
function getOrderAdress($config, $order_id){
	$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);
	$data_elements = ['buyerInfo', 'shippingAddress'];

	try {
		$result = $apiInstance->getOrder($order_id, $data_elements);
		
		return $result;
	} catch (Exception $e) {
		echo 'Exception when calling OrdersV0Api->getOrderAddress: ', $e->getMessage(), PHP_EOL;
		return null;
	}
}

/***********************************************
* Get order buyer info
***********************************************/
function getOrderBuyerInfo($config, $order_id){
	$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);

	try {
		$result = $apiInstance->getOrderBuyerInfo($order_id);
		
		return $result;
	} catch (Exception $e) {
		echo 'Exception when calling OrdersV0Api->getOrderAddress: ', $e->getMessage(), PHP_EOL;
		return null;
	}
}

/***********************************************
* Get items
***********************************************/
function getOrderItems($config, $order_id){
	$apiInstance = new SellingPartnerApi\Api\OrdersV0Api($config);

	try {
		$result = $apiInstance->getOrderItems($order_id);
		
		return $result;
	} catch (Exception $e) {
		echo 'Exception when calling OrdersV0Api->getOrderItemsBuyerInfo: ', $e->getMessage(), PHP_EOL;
		return null;
	}
}