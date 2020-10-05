<?php

$db = new Sqlite3('./db/budgetTjanst.db');

$email = $_POST['email'];
$psw = $_POST['psw'];
$namn = $_POST['namn'];

$p_result = $db->query("SELECT * FROM 'användare' WHERE '".$email."'=emailadress"); 

$row = $p_result->fetchArray(); 
$salt = $row['salt'];
$id = $row['användarID'];
$konto = $row['kontokategori'];
$hash = sha1($salt.$psw);

$db->close();
if($hash==$row['lösenord']) 
{
    session_start();
    $_SESSION['användarID'] = $id;
    $_SESSION['namn'] = $namn;
    $_SESSION['email'] = $email;
    $_SESSION['kontokategori'] = $konto;


    if($konto=="kund"){
    header("Location: index.php");
    }
    else{
        header("Location: admin.php");
    }
    
}
else
{
    header("Location: Login.php");
    
}
$db->close();
    
?>
