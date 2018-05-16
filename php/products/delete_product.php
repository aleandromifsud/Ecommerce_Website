<?php
require '../../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$id = $_GET['id'] ?? '';

$db = $client->ecommerce;

$collection = $db->Products;
$cursor = $collection->findOne(['_id' => (int)$id]);

$returnVal = $collection->deleteOne(['_id' => (int)$id]);
header("Location: " . "/../interfaces/admin-profile.php");