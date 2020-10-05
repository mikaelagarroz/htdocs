<?php

session_start();
$db = new Sqlite3('./db/budgetTjanst.db');

if(isset($_POST['comment_data'])){

$k_text = $_POST['k_text'];
$id = $_SESSION['användarID'];
$email = $_SESSION['email'];


$query =  $db->query("INSERT INTO 'kommentar' ('k_användarID', 'k_text', 'k_email') VALUES ('$id', '$k_text', '$email')");
$result = $db->query("SELECT namn, k_text FROM användare, kommentar WHERE användarID=k_användarID");
//$row = $result->fetchArray();

}
elseif(isset($_POST['search'])){
$search = $_POST['search'];
$search = preg_replace("#[^0-9a-z]#i","",$search);

$result = $db->query("SELECT * FROM användare, kommentar WHERE användarID=k_användarID AND namn LIKE '%$search%'");
//$row = $result->fetchArray();
}

elseif(isset($_SESSION['email'])){

$result = $db->query("SELECT namn, k_text FROM användare, kommentar WHERE användarID=k_användarID");
//$row = $result->fetchArray();

}
else{
    header("Location: Login.php");
}
?> 

<html>
<head>
	<meta charset="UTF8" />
	<link rel="stylesheet" type="text/css" href="budget2.css">
	<script src="createBudg.js"></script>
</head>
<body>
	<header>
		<div class="container">
            <h3 alt="logo" class="logo">FRÅGOR</h3>
                <nav>
                    <ul>
						<li><a href="index.php">Hem</a></li>
                        <li><a href="Budget.php">Aktuell budget</a></li>
                        <li><a href="createBudget.php">Ny budget</a></li>
                        <li><a href="valuta.php">Valuta</a></li>
						<li><a href="comment.php">Kontakta oss</a></li>
						<li><a href="logOutProcess.php">Logga ut</a></li>
                    </ul>
                </nav>
        </div>
	</header>

    <form action="comment.php" method="post">
        <input type="text" id="search" name="search" placeholder="Sök"/>
        <input type="submit" value=">>"/>
    </form>

	</br><p>Har du frågor eller funderingar?</p>
	<form action="comment.php" method="post">
    	<div class="comment">
		<label for="comment">Fråga:</label><br>
            <input type="textarea" id="k_text" placeholder="Fråga" name="k_text" required><br>
		</div>
	<div class="buttonholder">
        <button class="submit" input name= "comment_data" value="skicka" type="submit" >Skicka</button>
	</div>
    </form>
    <tr>
                
        </tr>
            <?php while($row = $result->fetchArray()) {
                echo "<div class='posts'>";
                echo $row['namn'];
                echo ": <br>";
                echo $row['k_text']."<br><br>";
                echo "</div>";
         } ?>

</body>
</html>