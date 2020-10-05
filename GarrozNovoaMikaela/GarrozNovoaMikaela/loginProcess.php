<?php

$db = new Sqlite3('./db/labb2.db');

$email = $_POST['email'];
$psw = $_POST['psw'];

$p_result = $db->query("SELECT salt, password FROM 'labb2' WHERE '".$email."'=epost"); 

$row = $p_result->fetchArray(); // row innehåller både salt och lösenord
$salt = $row['salt'];
$hash = sha1($salt.$psw);

$db->close();
if($hash==$row['password']) 
{
    session_start();
    $_SESSION['email'] = $email;
    header("Location: comment.php");   
}
else
{
    $error_login = 'Fel email eller lösenord!';
    header("Location: login.php?errorLogin=".$error_login);
}
$db->close();

?>

