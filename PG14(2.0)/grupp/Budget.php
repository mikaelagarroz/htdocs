<?php
session_start();
 $db = new Sqlite3('./db/budgetTjanst.db');

if( isset($_POST['utgift_data']) ){
   
  $id = $_SESSION['användarID'];
    $mat = $_POST['u_mat'];
    $kläder = $_POST['u_kläder']; 
    $hushåll = $_POST['u_hushåll']; 
    $resekostnader = $_POST['u_resekostnader']; 
    $nöje = $_POST['u_nöje']; 
    $övrigt = $_POST['u_övrigt']; 



    $utgiftinput =  $db->query("UPDATE budget SET u_mat = u_mat+'$mat', u_kläder = u_kläder+'$kläder', u_hushåll = u_hushåll+'$hushåll', u_resekostnader = u_resekostnader+'$resekostnader', u_nöje = u_nöje+'$nöje', u_övrigt = u_övrigt+'$övrigt' WHERE användarID='$id'"); 

    $result = $db->query("SELECT * FROM budget WHERE användarID='$id'");
    $row = $result->fetchArray();

     }

elseif(isset($_SESSION['email'])){

    $id = $_SESSION['användarID'];
    $result = $db->query("SELECT * FROM budget WHERE användarID='$id'");
    $row = $result->fetchArray();    
}
else{
    header("Location: Login.php");
}


?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF8" />
	<link rel="stylesheet" type="text/css" href="budget3.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kategori', 'Budget'],
          <?php
            echo "['Mat', ".$row["u_mat"]."],";
            echo "['Kläder', ".$row["u_kläder"]."],";
            echo "['Hushåll', ".$row["u_hushåll"]."],";
            echo "['Resekostnader', ".$row["u_resekostnader"]."],";
            echo "['Nöje', ".$row["u_nöje"]."],";
            echo "['Övrigt', ".$row["u_övrigt"]."],";

          ?>
        ]);

        var options = {
          title: 'Utgift'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kategori', 'Budget'],
          <?php
            echo "['Mat', ".$row["b_mat"]."],";
            echo "['Kläder', ".$row["b_kläder"]."],";
            echo "['Hushåll', ".$row["b_hushåll"]."],";
            echo "['Resekostnader', ".$row["b_resekostnader"]."],";
            echo "['Nöje', ".$row["b_nöje"]."],";
            echo "['Övrigt', ".$row["b_övrigt"]."],";

          ?>
        ]);

        var options = {
          title: 'Budget'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
    google.charts.load("current", {packages:['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Kategori', 'Budget', 'Utgifter'],
        <?php
            echo "['Mat', ".$row["b_mat"].", ".$row["u_mat"]."],";
            echo "['Kläder', ".$row["b_kläder"].", ".$row["u_kläder"]."],";
            echo "['Hushåll', ".$row["b_hushåll"].", ".$row["u_hushåll"]."],";
            echo "['Resekostnader', ".$row["b_resekostnader"].", ".$row["u_resekostnader"]."],";
            echo "['Nöje', ".$row["b_nöje"].", ".$row["u_nöje"]."],";
            echo "['Övrigt', ".$row["b_övrigt"].", ".$row["u_övrigt"]."],";
          ?>
      ]);

      var options = {
        chart: {
            title: 'Budget',
            subtitle: 'Håll koll på budget och utgifter',
            }

      };
      var chart = new google.charts.Bar(document.getElementById('columnchart_budget'));
      chart.draw(data, google.charts.Bar.convertOptions(options));
  }
  </script>
</head>
<body>
	<header>
		<div class="container">
            <h3 alt="logo" class="logo">BUDGET</h3>
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
    <p>Här kan du se din nuvarande budget <br> Skriv 0 i kategorierna utan utgift</p>
    <div id="columnchart_budget" style="width: 700px; height: 300px;"></div>
    <div id="piechart" style="width: 500px; height: 300px;"></div>
    <div id="piechart2" style="width: 500px; height: 300px;"></div>
   
	<form action="Budget.php" method="post">
    	<div class="container">
        	
			<p>Skriv in utgifter</p>
        	<label for="mat">Mat:</label>
        	<input type="number" id="u_mat" placeholder="Summa" name="u_mat" required><br>
        	
			<label for="kläder">Kläder:</label>
        	<input type="number" id="u_kläder" placeholder="Summa" name="u_kläder" required><br>
        	
			<label for="hushåll">Hushåll:</label>
        	<input type="number" id="u_hushåll" placeholder="Summa" name="u_hushåll" required><br>
        	
			<label for="resekostnader">Resekostnader:</label>
        	<input type="number" id="u_resekostnader" placeholder="Summa" name="u_resekostnader" required><br>
        	
			<label for="nöje">Nöje:</label>
        	<input type="number" id="u_nöje" placeholder="Summa" name="u_nöje" required><br>
			
			<label for="övrigt">Övrigt:</label>
        	<input type="number" id="u_övrigt" placeholder="Summa" name="u_övrigt" required><br>
		</div>
	<div class="buttonholder">
		<button class="submit" input name= "utgift_data" value="skicka" type="submit">Lägg till</button>
	</div>
		
	</form>

</body>
</html>