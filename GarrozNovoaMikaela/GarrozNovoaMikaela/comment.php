<!DOCTYPE html> 
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kommentera</title> 
    
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

        <h3>Kommentera gärna om du vill</h3>

        <?php

session_start();

if(isset($_SESSION['email'])){

echo 'Välkommen, '.$_SESSION['email'];

}
else{
    header("Location: login.php");
}
?>        
        <form id="form" action="commentProcess.php" method="post">

        <label for="comment">Kommentar:</label><br>
        <input type="textarea" id="comment" name="comment"><br>
        <br>
        <button type="submit" class="submitComment">Submit</button>
        
    </form> 

    </body>

</html>
