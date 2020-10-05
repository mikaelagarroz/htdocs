<?php
session_start();

//if( isset($_POST['submit_data']) ){

if(isset($_SESSION['email'])){


}
else{
    header("Location: Login.php");
}

    // Connection till databas
    $db = new Sqlite3('./db/budgetTjänst.db');

    // Hämtar värdena man skriver in i formuläret
    $månad = $_GET['månad'];
    $totalabudget = $_GET['totalaBudget']; 
    $mat = $_GET['b_mat'];
    $kläder = $_GET['b_kläder']; 
    $hushåll = $_GET['b_hushåll']; 
    $resekostnader = $_GET['b_resekostnader']; 
    $nöje = $_GET['b_nöje']; 
    $övrigt = $_GET['b_övrigt']; 
     
    //skapaBudget($månad, $totalabudget, $mat, $kläder, $hushåll, $resekostnader, $nöje, $övrigt)

//$id = $_SESSION['användarID'];


// Lägger till värden i respektive rad i tabellen budget
    $query =  $db->query("INSERT INTO 'budget' ('månad', 'totalsumma', 'b_mat', 'b_kläder', 'b_hushåll', 'b_resekostnader', 'b_nöje', 'b_övrigt') VALUES ('$månad', '$totalabudget', '$mat','$kläder','$hushåll','$resekostnader','$nöje','$övrigt')");

    // Query som ska selecta allt från budget
    $result = $db->query("SELECT * FROM 'budget'");
?>

<!--<!DOCTYPE html>
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
	<p>Här är din budget</p>-->
    
    <!-- Implementation av API:n-->
    <html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        $db = new Sqlite3('./db/budgetTjänst.db');

        // Här ska vi på något sätt få in datan från vår databas från varje kategori för att skrivas ut i diagrammet
        var data = google.visualization.arrayToDataTable([
          ['b_mat', 'b_kläder', 'b_hushåll', 'b_resekostnader', 'b_nöje', 'b_övrigt'],
        
          // Ska hämta data
        <?php
          while($row = $result->fetchArray()){
              echo "['".$row["b_mat"]."', ".$row["b_kläder"].", ".$row["b_hushåll"]."], ";
          }
          ?>
        ]);


        var options = {
          title: 'Min budget'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
     <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div> <!--flytta till en css fil?-->
      </body>   
    </html>

</body>
</html>
<!-- Implementation av API:n-->




