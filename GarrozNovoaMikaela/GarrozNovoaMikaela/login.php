<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Logga in</title>
    
</head>

    <body>
    <header>
            <div class="container">
                <h1>STARTSIDA</h1>
                <nav>
                    <ul>
                        <li><a href="#">OM</a></li>
                        <li><a href="#">KONTAKT</a></li>
                    </ul>
                </nav>
            </div>
        </header>

<div>
    <form action="loginProcess.php" method="post">
        <div class="container">
            <h2>Logga in</h2>
            <?php
                if(isset($_GET['sucess'])){
                echo $_GET['sucess'];
                }
            ?>
            <p>Fyll i fälten för att logga in.</p>

            <hr>
            <?php
                if(isset($_GET['errorLogin'])){
                echo $_GET['errorLogin'];
                }
            ?>
            <br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required 
             pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

            <label for="psw"><b>Lösenord</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <hr>

            <button type="submit" name="login" class="loginbtn">Logga in</button>

        </div>
    </form> 

</div>

<form action="registration.php" method="post">
            <div class="container signin">
                <p>Har du inget konto?</p>
                <button type="submit" name="signIn" class="signInbtn">Registrera dig här</button>
            </div>
        </form>

    <body>
    <header>