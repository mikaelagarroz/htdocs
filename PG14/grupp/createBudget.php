<?php
include "calculator.php";

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
            <h3 alt="logo" class="logo">NY</h3>
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
	</br><p>Här kan du skapa en budget för månaden!</p>
	<form class="formB" action="BudgetProcess.php" method="post">
    	<div class="container">
		<label for="namn">Namn på Budget:</label><br>
        	<input type="text" id="namn" placeholder="namn" name="namn" required><br>

			<label for="månad">Månad:</label><br>
        	<input type="number" id="månad" placeholder="månad" name="månad" required><br>

        	<label for="totalaBudget">Skriv in din totala budget för denna månad:</label><br>
        	<input type="number" id="totalaBudget" placeholder="Summa" name="totalaBudget" required><br>
        	
			<p>Skriv in din beräknade budget per kategori för denna månad:</p>
			<div class="tips">
			  <p></br> Ta hjälp av miniräknaren för att räkna ut din budget!</br></p></br>
      		</div>
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
			
			<label for="övrigt">Övrigt:</label>
        	<input type="number" id="b_övrigt" placeholder="Summa" name="b_övrigt" required><br>
		</div>
	<div class="buttonholder">
		<button class="submit" input name= "submit_data" value="skicka" type="submit" onclick="validateForm()">Skapa Budget</button>
	</div>
		
	</form>

</body>
</html>
