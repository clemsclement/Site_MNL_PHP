<?php
function  sanitize($data){
    return htmlentities(strip_tags(stripcslashes(trim($data))));
}

function connectBDD(){
    return new PDO( "mysql:host=" . $_ENV['hostBDD'] . ";dbname=" . $_ENV['dbnameBDD'], $_ENV['dbLogin'], $_ENV['dbPassword'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}