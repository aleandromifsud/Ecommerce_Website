<?php
require '../../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$id = $_GET['id'] ?? '';

$db = $client->ecommerce;

$collection = $db->Products;
$cursor = $collection->findOne(['_id' => (int)$id]);

$product = [];
$product['_id']            = $id;
$product['name']           = $_POST['Pname'] ?? '';
$product['price']          = $_POST['PPrice'] ?? '';
$product['model']          = $_POST['Pmodel'] ?? '';
$product['category']          = $_POST['Pcat'] ?? '';
$product['tags']      = $_POST['Ptags'] ?? '';
$product['product description']      = $_POST['Pdesc'] ?? '';
$product['condition']    = $_POST['Pcond'] ?? '';
$product['stock']     = $_POST['PStock'] ?? '';

    $returnVal = $collection->updateOne(
        ['_id' => (int)$product['_id']],
        ['$set' => [
            'name'         => $product['name'],
            'price'   => $product['price'],
            'model'         => $product['model'],
            'category'         =>$product['category'],
            'tags'         => $product['tags'],
            'product description' => $product['product description'],
            'condition' => $product['condition'],
            'stock' => $product['stock']
        ]
        ]);
header("Location: " . "/../interfaces/admin-profile.php");
