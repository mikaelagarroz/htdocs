<?php

include 'methods.php';
    
    function unique_salt() {
 
        return substr(sha1(mt_rand()),0,22);
       }

    $db = new Sqlite3('./db/labb2.db');
    $email= $_POST['email'];
    $psw = $_POST['psw'];
    $salt = unique_salt();
    $hash = sha1($salt.$psw);

    läggaTillAnvändare($email, $hash, $salt);

$db->close();

?>