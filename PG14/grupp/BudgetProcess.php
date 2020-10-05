<?php
session_start();
 $db = new Sqlite3('./db/budgetTjanst.db');

if( isset($_POST['submit_data']) ){

    $namn = $_POST['namn'];
    $månad = $_POST['månad'];
    $totalabudget = $_POST['totalaBudget']; 
    $mat = $_POST['b_mat'];
    $kläder = $_POST['b_kläder']; 
    $hushåll = $_POST['b_hushåll']; 
    $resekostnader = $_POST['b_resekostnader']; 
    $nöje = $_POST['b_nöje']; 
    $övrigt = $_POST['b_övrigt']; 

    $id = $_SESSION['användarID'];

    $delete = $db->query("DELETE FROM 'budget' WHERE användarID='$id'");

    $query =  $db->query("INSERT INTO 'budget' ('användarID', 'b_namn','månad', 'totalsumma', 'b_mat', 'b_kläder', 'b_hushåll', 'b_resekostnader', 'b_nöje', 'b_övrigt') VALUES ('$id', '$namn','$månad', '$totalabudget', '$mat','$kläder','$hushåll','$resekostnader','$nöje','$övrigt')");
    $noll =  $db->query("UPDATE budget SET u_mat = 0, u_kläder = 0, u_hushåll = 0, u_resekostnader = 0, u_nöje = 0, u_övrigt = 0 WHERE användarID='$id'"); 

    $result = $db->query("SELECT * FROM budget WHERE användarID='$id'");
    $row = $result->fetchArray();
    header("Location: Budget.php");
     }

elseif(isset($_SESSION['email'])){

    header("Location: Budget.php");    
}
else{
    header("Location: Login.php");
}

?>