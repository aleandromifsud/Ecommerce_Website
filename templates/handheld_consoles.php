<?php
require '../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$db = $client->ecommerce;

$collection = $db->Products;

$cursor = $collection->find();

$handHeldConsole = array('category' => 'Hand Held Consoles');

$cursor = $collection->find($handHeldConsole);
foreach ($cursor as $doc) {
    echo $doc['name'];
}