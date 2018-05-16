<?php

require '../../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$db = $client->ecommerce;

$collection = $db->Users;;

$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password= filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


$findCriteria = [ "email" => $email, "password" => $password];
//Find all of the customers that match this criteria
$cursor = $collection->findOne($findCriteria);

if ($collection->count($findCriteria) == 0){
    return;
}
else if($collection->count($findCriteria) > 1){
    return;
}

$user = (array) $cursor;

function log_in_user($user) {
    // Renerating the ID protects the admin from session fixation.
    session_regenerate_id();
    $_SESSION['id'] = $user['_id'];
    $_SESSION['username'] = $user['email'];
    header("Location: ../../index.php");
    return true;
}

// Performs all actions necessary to log out an admin.
function log_out_user() {
    session_regenerate_id();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    //session_destroy(); //optional:destroys the whole session
    return true;
}

if($user['password'] != $password)
{
    return;
}else
{
    log_in_user($user);
}
