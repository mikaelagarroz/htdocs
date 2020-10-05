<?php

function unique_salt() {
 
    return substr(sha1(mt_rand()),0,22);
}
  
$db = new Sqlite3('./db/budgetTjanst.db');

    $namn =$_POST['namn'];
    $email= $_POST['email'];
    $psw = $_POST['psw'];
    $salt = unique_salt();
    $hash = sha1($salt.$psw);

   $check_email = $db->querySingle("SELECT COUNT(emailadress) FROM 'användare' WHERE emailadress='".$email."'"); 

if($check_email > 0){
    
$error_mail = 'Mailadressen används redan.';
header("Location: registration.php?error=".$error_mail);

}else{
    $result = $db->query("INSERT INTO 'användare' ('namn', 'emailadress', 'lösenord', 'salt') VALUES ('$namn','$email','$hash','$salt')");
    $sucess = 'Registreringen blev lyckad!';
    header("Location: Login.php?sucess=".$sucess);
}
   

$db->close();


?>