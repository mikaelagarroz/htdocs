<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <title>Registrerings sida</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>

    <body>
    <header>
        	<div class="container">
            	<h1>Budgettjänst</h1>
            	<nav>
                	<ul>
                	</ul>
            	</nav>
        	</div>
		</header>


    <form action="regProcess.php" method="post">
        <div class="container"></div>
            <h3>Register</h3>
            <p>Skriv in dina uppgifter här för att skapa ett konto.</p>
            <hr>

            <label for="Namn"><b>Namn:</b></label>
            <br>
            <input type="text" id="namn" placeholder="Namn" name="namn" required>
            <hr>

            <label for="email"><b>Emailadress:</b></label>
            <input type="text" id="email" placeholder="Emailadress" name="email" required
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <?php
                if(isset($_GET['error'])){
                echo $_GET['error'];
                }
            ?>
            <hr>

            <label for="psw"><b>Lösenord:</b></label>
            <input type="password" id="psw" placeholder="Lösenord" name="psw" required>
            <hr>

            <button class ="submit" button type="submit" id="register" name="create">Registrera konto</button>
            </div>
        
    </form> 
    </form> 

	<form action="Villkor.php" method="post">
	<div class="container villkor">
        <br>
    <p>Genom att registrera dig accepterar du våra <a href="#">Användarvillkor</a>.</p>
            </div>
    </form>

    <body>

</html>