
<?php

include "db_connect.php";

function unique_salt() {
 
    return substr(sha1(mt_rand()),0,22);
}
  
// Koppla till databas och spara datan
//$db = new Sqlite3('./db/budgetTjänst.db');

    $namn =$_POST['namn'];
    $email= $_POST['email'];
    $psw = $_POST['psw'];
    $salt = unique_salt();
    
   $result = $db->query("INSERT INTO 'användare' ('namn', 'emailadress', 'salt') VALUES ('$namn','$email','$salt')");

   // Något meddelande om att registreringen är lyckad.
   // Hänvisas till att logga in.


   function skapaBudget($månad, $totalabudget, $mat, $kläder, $hushåll, $resekostnader, $nöje, $övrigt){
    $db = new Sqlite3('./db/budgetTjänst.db')
    // Lägger till värde i respektive rad
    $sql =  $db->query("INSERT INTO 'budget' ('månad', 'totalsumma', 'b_mat', 'b_kläder', 'b_hushåll', 'b_resekostnader', 'b_nöje', 'b_övrigt') VALUES ('$månad', '$totalabudget', '$mat','$kläder','$hushåll','$resekostnader','$nöje','$övrigt')");
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':månad', $månad, SQLITE3_TEXT);
    $stmt->bindParam(':totalsumma', $totalabudget, SQLITE3_INTEGER);
    $stmt->bindParam(':b_mat', $mat, SQLITE3_INTEGER);
    $stmt->bindParam(':b_kläder', $kläder, SQLITE3_INTEGER);
    $stmt->bindParam(':b_hushåll', $hushåll, SQLITE3_INTEGER);
    $stmt->bindParam(':b_resekostnader', $resekostnader, SQLITE3_INTEGER);
    $stmt->bindParam(':b_nöje', $nöje, SQLITE3_INTEGER);
    $stmt->bindParam(':b_övrigt', $övrigt, SQLITE3_INTEGER);

    if($stmt->execute()){
        $db->close();
        return true;
    }
    else{
        $db->close();
        return false;
    }
}
   
?>