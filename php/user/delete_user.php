<?php
require '../../vendor/autoload.php';
try {
    $uri = "mongodb://localhost:27017/ecommerce";
    $m = new MongoClient($uri);
} catch (MongoConnectionException $e) {
}

$db = $m->ecommerce;

$collection = $db->user;

$userId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

$removeCriteria = [
  "_id" => new MongoId($userId)
];

try {
    $returnVal = $db->user->remove($removeCriteria);
} catch (MongoCursorTimeoutException $e) {
} catch (MongoCursorException $e) {
}

if ($returnVal['ok'] == 1){
    echo 'Ok' . $returnVal['n'] . ' documents deleted';
}
else{
    echo 'Error deleting user';
}

$m->close();
