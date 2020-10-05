<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF8" />
	<link rel="stylesheet" type="text/css" href="budget2.css">
</head>
<body>
	<header>
		<div class="container">
            <h3 alt="logo" class="logo">HISTORIK</h3>
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
    <p>Här kan du se din budgethistorik</p>
    <?php
    /* Starta session, för att man ska hållas inloggad,
vill kolla att det är rätt "sessionvariabel" */
session_start();

if(isset($_SESSION['email'])){


}
else{
    header("Location: Login.php");
}
?>

    <form action="" method="skapa">
    <div class="container">
        	<label for="UtgiftKategori">Utgiftskategori:</label>
            <div class="dropdown">
                <button class="submit">Kategorier</button>
                    <div class="dropdown-content">
                        <a href="#">Mat</a>
                        <a href="#">Kläder</a>
                        <a href="#">El</a>
            </div>
        </div>
    <br>
    <label for="UtgiftDatum">Tidsperiod:</label>
        <div class="dropdown">
            <button class="submit">Tidsperiod</button>
                <div class="dropdown-content">
                    <a href="#">3 Månader</a>
                    <a href="#">6 Månader</a>
                    <a href="#">12 månader</a>
                </div>
        </div>
	</div> 
    </form>		
</body>
</html>