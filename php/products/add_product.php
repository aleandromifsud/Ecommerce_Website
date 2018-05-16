<?php
require '../../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$db = $client->ecommerce;

$collection = $db->Products;

$productID = $collection->count()+1;
$productName= filter_input(INPUT_POST, 'Pname', FILTER_SANITIZE_STRING);
$productPrice= filter_input(INPUT_POST, 'PPrice', FILTER_SANITIZE_STRING);
$productModel = filter_input(INPUT_POST, 'Pmodel', FILTER_SANITIZE_STRING);
$productCat= filter_input(INPUT_POST, 'catBox', FILTER_SANITIZE_STRING);
$productTags= filter_input(INPUT_POST, 'Ptags', FILTER_SANITIZE_STRING);
$productCond = filter_input(INPUT_POST, 'conditionBox', FILTER_SANITIZE_STRING);
$dateBought = date('Y-m-d H:i:s');;
$stock = filter_input(INPUT_POST, 'PStock', FILTER_SANITIZE_STRING);
$desc = filter_input(INPUT_POST, 'Pdesc', FILTER_SANITIZE_STRING);
$uploadfile = filter_input(INPUT_POST, 'productImage', FILTER_SANITIZE_STRING);


// Save the proper data to the database from the comboboxes
    //Prebuilt PCs
    if($productCat == 1)
    {
        $productCat = "Prebuilt PC";
        $uploaddir = '../../media/products/prebuiltpcs/';
    }
    //Consoles
    else if($productCat == 2)
    {
        $productCat = " Standard Consoles";
        $uploaddir = '../../media/products/consoles/normalconsoles/';
    }
    //Hand Held
    else if($productCat == 3)
    {
        $productCat = "Hand Held Consoles";
        $uploaddir = '../../media/products/con/handheldconsoles/';
    }
    //Games
    else if($productCat == 4)
    {
        $productCat = "Games";
        $uploaddir = '../../media/products/games/';
    }
    //Controllers
    else if($productCat == 5)
    {
        $productCat = "Controllers";
        $uploaddir = '../../media/products/peripherals/controllers/';
    }
    //Headset
    else if($productCat == 6)
    {
        $productCat = "Headsets";
        $uploaddir = '../../media/products/peripherals/headsets/';
    }
    //Mice and Keyboard
    else if($productCat == 7)
    {
        $productCat = "Mouse And Keyboard";
        $uploaddir = '../../media/products/peripherals/micenadkeyboards/';
    }


//Save Proper Condition to DBS
    //Excellent
    if($productCond == 1)
    {
        $productCond = "Excellent";
    }
    //Good
    else if($productCond == 2)
    {
        $productCond = "Good";
    }
    //OK
    else if($productCond == 3)
    {
        $productCond = "OK";
    }
    //Bad
    else if($productCond == 4)
    {
        $productCond = "Bad";
    }


$uploadfile = $uploaddir . ($_FILES['photo']['name']);

$dataArray = array(
    "_id" => $productID,
    "name" => $productName,
    "price" => $productPrice,
    "model" => $productModel,
    "category" => $productCat,
    "tags" => $productTags,
    "product description" => $desc,
    "condition" => $productCond,
    "date" => $dateBought,
    "image directory" =>$uploadfile,
    "stock" => $stock,
);

header("Location: " . "/../interfaces/admin-profile.php");

$returnVal = $collection->insertOne($dataArray);
