<!DOCTYPE html> 
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" type="text/css" href="commentStyle.css">
    <title>Mitt formulär</title> 
    <script src="Java.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<?php

    $db = new Sqlite3('kommentarDb.db');
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $comment = $_POST['comment'];
    //$result = $db->query("INSERT INTO 'kommentar' ('namn', 'emailadress', 'text') VALUES ('$name','$mail','$comment')");
    LäggaTillKommentar($name, $mail, $comment);


 
//$version = $db->querySingle('SELECT SQLITE_VERSION()');
 
echo $version . "\n"; 

$select = $db->query("SELECT * FROM 'kommentar'");

 while($row = $select->fetchArray())
    {
        
        echo '<div id="Namn">'.$row['namn'].'</div>';
        echo '<br>';
        echo $row['emailadress'];
        echo '<br>';
        echo $row['text'];
        echo '<br>';
        
    }
    $db->close();

?>

<?php

    function LäggaTillKommentar($namn, $emailadress, $comment){
        $db = new Sqlite3('kommentarDb.db');
        $sql = "INSERT INTO 'kommentar'('namn', 'emailadress', 'text') VALUES ( :namn, :emailadress, :comment)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':namn', $namn, SQLITE3_TEXT);
        $stmt->bindParam(':emailadress', $emailadress, SQLITE3_TEXT);
        $stmt->bindParam(':comment', $comment, SQLITE3_TEXT);

        if($stmt->execute()){
            $db->close();
            return true;
        }
        else{
            $db->close();
            return false;
        }


    }
    /*function Search($term){
        $db = new Sqlite3('kommentarDb.db');
        $stmt = $db->prepare("SELECT * FROM 'kommentar' WHERE text LIKE :search ORDER BY id");
        $stmt->bindValue(':search', "%" $term."%", SQLITE3_TEXT);
        $select = $stmt->execute();
        return $select;
    }*/
?> 

