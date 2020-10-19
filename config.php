<?php
global $db;

try{

    define('BASE_URL', 'http://localhost/phpbasico/estrutura-basica-mvc');
    $db = new PDO('mysql:dbname=mvc;host=localhost','root','');

} catch(PDOException $e) {

    echo 'Failure: '.$e->getMessage();
}

?>