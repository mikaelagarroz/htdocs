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

<html>
<head>
	<meta charset="UTF8" />
	<link rel="stylesheet" type="text/css" href="budget2.css">
	<script src="createBudg.js"></script>
</head>
<body>
	<header>
		<div class="container">
            <h3 alt="logo" class="logo">NY BUDGET</h3>
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
	<p>Här kan du skapa en ny budget </p>
   
	<form action="budgetProcess.php" method="skapa">
    	<div class="container">
			<label for="månad">Månad:</label><br>
        	<input type="text" id="månad" placeholder="månad" name="månad" required><br>

        	<label for="totalaBudget">Skriv in din totala budget för denna månad:</label><br>
        	<input type="number" id="totalaBudget" placeholder="Summa" name="totalaBudget" required><br>
        	
			<p>Skriv in din beräknade budget per kategori för denna månad:</p>
        	<label for="mat">Mat:</label>
        	<input type="number" id="b_mat" placeholder="Summa" name="b_mat" required><br>
        	
			<label for="kläder">Kläder:</label>
        	<input type="number" id="b_kläder" placeholder="Summa" name="b_kläder" required><br>
        	
			<label for="hushåll">Hushåll:</label>
        	<input type="number" id="b_hushåll" placeholder="Summa" name="b_hushåll" required><br>
        	
			<label for="resekostnader">Resekostnader:</label>
        	<input type="number" id="b_resekostnader" placeholder="Summa" name="b_resekostnader" required><br>
        	
			<label for="nöje">Nöje:</label>
        	<input type="number" id="b_nöje" placeholder="Summa" name="b_nöje" required><br>
        	
			<br>
			<label for="summa">Resternade summa pengar:</label> <!-- Någon funktion som räknar ut totalBudget-summa-->
			<input type="number" id="restSumma" placeholder="Resterande summa" name="restSumma"><br><br>
			
			<label for="övrigt">Övrigt:</label>
        	<input type="number" id="b_övrigt" placeholder="Summa" name="b_övrigt" required><br>
		</div>
	<div class="buttonholder">
		<button class="submit" input name= "submit_data" value="skicka" type="submit" onclick="validateForm()">Skapa Budget</button>
	</div>
		
	</form>

</body>
</html>
