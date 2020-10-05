<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF8" />	
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Currency Converter</title>
	<link rel="stylesheet" href="valuta.css">
</head>
<body>
      <header>
      <div class="container">
            <h3 alt="logo" class="logo"></h3>
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
      </header>
<div class="container2">
    <div class="header">
      <h1>Valutomvandlare</h1>
    </div>
    <div class="date"></div>
    <ul class="currencies"></ul>
    <button class="add-currency-btn"><i class="fas fa-long-arrow-alt-left"></i>Add Currency</button>
    <ul class="add-currency-list"></ul>
  </div>

  <script src="valuta.js"></script>
  </body>
  </html>