<?php

$superhero = "Superman";

function revealIdentity(){
    global $superhero;
    $message = "real name is Clark Kent";
    echo "$superhero $message";
}

revealIdentity();
echo $superhero;

function countVisitors(){
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount have arrived!";
}

// Static variable exmaple
// function getDb(){
//     static $db;
//     if ($db === null){
//         $db = connect();
//     }
//     return $db;
// }

countVisitors();
countVisitors();
countVisitors();

?>