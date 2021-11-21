<?php

$collection_id = $_GET['collection_id'];
$collection_status = $_GET['collection_status'];
$payment_id = $_GET['payment_id'];
$status = $_GET['status'];
$external_reference = $_GET['external_reference'];
$payment_type = $_GET['payment_type'];
$merchant_order_id = $_GET['merchant_order_id'];
$preference_id = $_GET['preference_id'];
$site_id = $_GET['site_id'];
$processing_mode = $_GET['processing_mode'];
$merchant_account_id = $_GET['merchant_account_id'];


echo "Pago Pendiente<br/><br/>";

echo "Collection ID: $collection_id<br/>";
echo "Collection Status: $collection_status<br/>";
echo "Payment ID: $payment_id<br/>";
echo "Status: $status<br/>";
echo "External Reference: $external_reference<br/>";
echo "Payment Type: $payment_type<br/>";
echo "Merchant Order ID: $merchant_order_id<br/>";
echo "Preference ID: $preference_id<br/>";
echo "Site ID: $site_id<br/>";
echo "Processing Mode: $processing_mode<br/>";
echo "Merchant Account ID: $merchant_account_id<br/>";


?>