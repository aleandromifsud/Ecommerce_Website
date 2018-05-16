<?php
require 'vendor/autoload.php'; // include Composer's autoloader
// Create seed data
$seedData = array(
    array(
        'decade' => '1970s',
        'artist' => 'Debby Boone',
        'song' => 'You Light Up My Life',
        'weeksAtOne' => 10
    ),
    array(
        'decade' => '1980s',
        'artist' => 'Olivia Newton-John',
        'song' => 'Physical',
        'weeksAtOne' => 10
    ),
    array(
        'decade' => '1990s',
        'artist' => 'Mariah Carey',
        'song' => 'One Sweet Day',
        'weeksAtOne' => 16
    ),
);
/*
 * Standard single-node URI format:
 * mongodb://[username:password@]host:port/[database]
 */
$uri = "mongodb://localhost:27017/jorrit";
$client = new MongoDB\Client($uri);
/*
 * First we'll add a few songs. Nothing is required to create the songs
 * collection; it is created automatically when we insert.
 */
$songs = $client->jorrit->songs;
// To insert a dict, use the insert method.
$songs->insertMany($seedData);
/*
 * Then we need to give Boyz II Men credit for their contribution to
 * the hit "One Sweet Day".
*/
$songs->updateOne(
    array('artist' => 'Mariah Carey'),
    array('$set' => array('artist' => 'Mariah Carey ft. Boyz II Men'))
);
/*
 * Finally we run a query which returns all the hits that spent 10
 * or more weeks at number 1.
*/
$query = array('weeksAtOne' => array('$gte' => 10));
$options = array(
    "sort" => array('decade' => 1),
);
$cursor = $songs->find($query, $options);
foreach ($cursor as $doc) {
    echo 'In the ' . $doc['decade'];
    echo ', ' . $doc['song'];
    echo ' by ' . $doc['artist'];
    echo ' topped the charts for ' . $doc['weeksAtOne'];
    echo ' straight weeks.', "\n";
}


