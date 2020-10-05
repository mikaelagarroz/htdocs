<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF8" />
        <link rel="stylesheet" type="text/css" href="budget2.css">
        <script src="Java.js"></script>
        
    </head>
    <body>
        <header>
            <div class="container">
            <h3 alt="logo" class="logo">HEM</h3>
                <nav>
                    <ul>
                        <li><a href="homepage.php">Hem</a></li>
                        <li><a href="nuvarandeBudget.php">Nuvarande budget</a></li>
                        <li><a href="createBudget.php">Ny budget</a></li>
                        <li><a href="historik.php">Historik</a></li>
                        <li><a href="#">Kontakta oss</a></li>
                        <li><a href="logOutProcess.php">Logga ut</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <?php  
        session_start();

if(isset($_SESSION['email'])){

}
else{
    header("Location: Login.php");
}     
?>

<p>Hej och välkommen! Dags att skapa en budget för månaden. Lycka till! </p>
    </body>
  
</html>