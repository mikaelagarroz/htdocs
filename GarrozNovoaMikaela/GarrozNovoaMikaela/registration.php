<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Reigstrera</title>

</head>

    <body>
    <header>
            <div class="container">
                <h1>Registreringssida</h1>
                <nav>
                    <ul>
                        <li><a href="#">OM</a></li>
                        <li><a href="#">KONTAKT</a></li>
                    </ul>
                </nav>
            </div>
        </header>

<div>
   
    <form action="regProcess.php" method="post">
        <div class="container">
            <h2>Registrera konto</h2>
            <p>Fyll i fälten för att registrera dig.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" id="email" placeholder="Enter Email" name="email" required
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <?php
                if(isset($_GET['error'])){
                echo $_GET['error'];
                }
            ?>
            <hr>

            <label for="psw"><b>Lösenord</b></label>
            <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Upprepa lösenord</b></label>
            <input type="password" id="psw-repeat" placeholder="Repeat Password" name="psw-repeat" required>
            <hr>

            <p>Genom att registrera dig godkänner du våra <a href="#">Användarvillkor</a>.</p>
            <button type="submit" id="register" name="create" class="registerbtn">Registrera</button>

        </div>
    </form> 

</div>

        <form action="login.php" method="post">
            <div class="container signin">
                <p>Har du redan ett konto?</p>
                <button type="submit" name="signIn" class="signInbtn">Logga in</button>
            </div>
        </form>

    </body>

</html>