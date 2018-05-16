<?php require '../../vendor/autoload.php';

try {
    $m = new MongoClient();
} catch (MongoConnectionException $e) {
}

$db = $m->ecommerce;

$collection = $db->user;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$userData = [
    "name" => $name,
    "email" => $email,
    "password" => $password,
    "_id" => new MongoId($id)
];

try {
    $returnVal = $db->users->save($userData);
} catch (MongoCursorTimeoutException $e) {
} catch (MongoCursorException $e) {
} catch (MongoException $e) {
}

if($returnVal['ok']== 1){
    echo 'ok';
}
else {
    echo "Error Saving User";
}

$m ->close();