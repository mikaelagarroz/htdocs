<?php  
session_start();
if(isset($_SESSION['email']))
{

}
else
{
    header("Location: Login.php");
}     
?>

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
                <li><a href="index.php">Hem</a></li>
                <li><a href="Budget.php">Nuvarande budget</a></li>
                <li><a href="createBudget.php">Ny budget</a></li>
                <li><a href="comment.php">Kontakta oss</a></li>
                <li><a href="logOutProcess.php">Logga ut</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="instructions">
<h1>Hej och välkommen till BudgetTjänst</h1>
<img src="./img/k.png">
<p>E-tjänsten som hjälper dig att hålla koll på din ekonomi.</p></br></br>
</div>

<div class="guide">
<p>BudgetTjänst Guiden</p>
<div class="small">
   <p>Så kan du komma igång med vår e-tjänst.</p></br>
</div>
</div>

<div class="instructions1">
<p>1. Ny budget</p>
<div class="small">
   <p>Här kommer du att mötas av ett antal skrivfält som du behöver fylla i.</p></br>
</div>

<p>2. Fyll i alla skrivfält</p>
<div class="small">
   <p>Du börjar med att ange vilken månad du skapr din budget för och</p>
   <p>hur mycket pengar du kommer att spendera.</p>
   <p>(Exempelvis din månadslön eller CSN)</p>
   <p>Sedan fyller du i den summa pengar under vardera kategori som du vill spendera.</p>
   <p>(På den sidan kommer det att finnas en miniråknare som du kan ta hjälp av för att räkna ut din budget.)</p>
   <p>Sedan trycker du på knappen för att skapa din budget.</p></br>
</div>

<p>3. Skapa budget</p>
<div class="small">
   <p>Nu har du skapat din budget!</p>
   <p>(Du kan endast skapa en budget åt gången.)</p>
   <p>Då kommer du komma till en sida för din "Nuvarande budget".</p></br>
</div>
</div>

<div class="instructions2">
<p>4. Nuvarande budget</p>
<div class="small">
   <p>Här presenteras din budget i ett cirkel- och stapeldiagram.</p>
   <p>När du har skapat din budget så är nästa steg att lägga till de faktiska utgifterna som spenderas under månaden.</p></br>
</div>

<p>5. Lägg till utgifter</p>
<div class="small">
   <p>Om du har en utgift på 500 kr för exempelvis kategorin "kläder" så måste du ändå fylla i 0 kr i de resterande fälten.</p>
   <p>Varje gång du lägger till en utgift så kommer diagrammet för kategorins utgifter att växa.</p>
   <p>Vid slutet av månaden kommer du då att få se hur det gick genom att jämföra dina budgetdiagram med dina utgiftsdiagram.</p>
   <p>Efter att du sett ditt resultat så kan du börja skapa din nya budget för nästa månad.</p></br></br>
</div>

<p>Nu är du redo att komma igång med BudgetTjänst!</p>
<div class="l">
   <a href="createBudget.php">Ny budget</a>
</div>
</div></br></br>

<div class="bottomTx">
<p>Du har väl inte missat att vi har en valutaomvandlare?</p>
<p>Med den kan du enkelt och smidigt omvandla valutor ifall du ska göra en budget för en utomlandsresa!</p>
<div class="l">
   <a href="valuta.php">Valutaomvandlare</a>
</div></br></br>
<p>Har du några frågor kan du kontaka oss</p>
<div class="l">
   <a href="comment.php">Kontakta oss</a>
</div></br></br>
</div>

</body>
</html>