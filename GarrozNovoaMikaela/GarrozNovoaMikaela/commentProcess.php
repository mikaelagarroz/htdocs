<!DOCTYPE html> 
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Mitt formulär</title> 

</head>
<body>
    
<header>
            <div class="container">
                <h1>Kommentarsida</h1>
                <nav>
                    <ul>
                        <li><a href="comment.php">KOMMENTERA</a></li>
                        <li><a href="#">OM</a></li>
                        <li><a href="#">KONTAKT</a></li>
                        <li><a href="logOutProcess.php">LOGGA UT</a></li>
                        </form>

                    </ul>
                </nav>
            </div>
        </header>

        <h3>Kommentarer:</h3>
</body>
</html>

<?php

include 'methods.php';

session_start();

if(isset($_SESSION['email'])){

}
else{
    header("Location: login.php");
}
    $comment = $_POST['comment'];
    $email = $_SESSION['email'];

    läggaTillKommentar($comment, $email);

    $db = new Sqlite3('./db/labb2.db'); 

$select = $db->query("SELECT kom_text, epost FROM 'kommentar', 'labb2' WHERE k_epost=epost");

 while($row = $select->fetchArray())
    {
        echo 'Avsändare: '.$row['epost'];
        echo '<br>';
        echo 'Kommentar: '.$row['kom_text'];
        echo '<hr>';   
    }
    $db->close();

?>

