<?php
require '../../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$db = $client->ecommerce;

$collection = $db->Users;;

$name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$surname= filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password= filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$phoneNum= filter_input(INPUT_POST, 'phoneNo', FILTER_SANITIZE_STRING);


$dataArray = array(
    "name" => $name,
    "surname" => $surname,
    "email" => $email,
    "password" => $password,
    "phoneNum" => $phoneNum
);


$returnVal = $collection->insertOne($dataArray);

if ($returnVal)
{
    echo 'ok';
}else{
    echo 'Error';
}

