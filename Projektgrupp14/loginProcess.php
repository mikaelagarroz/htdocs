<?php

// Om mailen och lösen matchar med det som finns i databasen 
// är inloggningen lyckad annars misslyckad.

// Komma till startsidan när man är inloggad



$db = new Sqlite3('./db/budgetTjänst.db');

// Hämtar ut från login sidan
$email = $_POST['email'];
$psw = $_POST['psw'];
$namn = $_POST['namn'];
// Hämtar saltet och password, mailen som skrivs in ska matcha med den som är i databasen
$p_result = $db->query("SELECT * FROM 'användare' WHERE '".$email."'=emailadress"); 

$row = $p_result->fetchArray(); // row innehåller både salt och lösenord
$salt = $row['salt'];
$id = $row['användarID'];
$hash = sha1($salt.$psw);

$db->close();
if($hash==$row['lösenord']) 
{
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['namn'] = $namn;
    $_SESSION['email'] = $email;
    header("Location: homepage.php");
    
}
else
{
    header("Location: Login.php");
    
}
$db->close();
    

?>
