<!DOCTYPE html> 
<html>
	<head>
    	<meta charset="UTF8" />
    	<link rel="stylesheet" type="text/css" href="loginStyle.css">
		<script src="Java.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    	
	</head>
	<body>
    	<header>
        	<div class="container">
            	<h1>Budgettjänst</h1>
            	<nav>
                	<ul>
                    	<!--<li><a href="#">Mitt konto</a></li>-->
                	</ul>
            	</nav>
        	</div>
		</header>
		
		<form action="loginProcess.php" method="post">
        <div class="container">
			<h2>Logga in</h2>
			<?php
                if(isset($_GET['sucess'])){
                echo $_GET['sucess'];
                }
            ?>
            <hr>

            <label for="email"><b>Emailadress:</b></label>
            <input type="text" placeholder="Enter Email" name="email" required 
             pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            

            <label for="psw"><b>Lösenord:</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <hr>

			<button class ="submit" button type="submit">Logga in</button>
        </div>
	</form> 

	<form action="registration.php" method="post">
	<div class="container signin">
                <p>Har du inget konto?</p>
				<button class ="submit" button type="submit">Registrera dig här!</button>
            </div>
    </form>

    	
	</body>
  
</html>
