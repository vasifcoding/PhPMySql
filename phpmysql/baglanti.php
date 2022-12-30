<?php


try {
    $db= new PDO("mysql:host=localhost;dbname=ilkveritabanim",'root', '');
    // echo 'Db Connected Successful : ';
} catch (Exception $e) {
    echo $e->getMessage();
}






?>