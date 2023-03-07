<?php
require_once(__DIR__ . '/vendor/autoload.php');

use SellingPartnerApi\Api\SellersV1Api as SellersApi;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Endpoint;

// See README for more information on the Configuration object's options
$config = new Configuration([
    "lwaClientId" => "",
    "lwaClientSecret" => "",
    "lwaRefreshToken" => "",
    "awsAccessKeyId" => "",
    "awsSecretAccessKey" => "",
	//"roleArn" => "arn:aws:iam::640406537412:role/Loechel",
    "endpoint" => Endpoint::EU  // or another endpoint from lib/Endpoints.php
]);

//Timezone UTC
date_default_timezone_set('UTC');

$currentDateTime = new DateTime('NOW UTC');
$currentTime = $currentDateTime->format('Y-m-d\TH:i:s');

$lastOrder = file_get_contents('lastOrder.txt');

$csvPath = "../amazonOrder" . $currentDateTime->format('Y-m-d\TH-i-s') . ".csv";