<!DOCTYPE html> 
<html>

<head>
    <meta charset="UTF8" />
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Mitt formulär</title> 
    <script src="Java.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>

    <body>
        
        <header>
            <div class="container">
                <h1>STARTSIDA</h1>
                <nav>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <h3>Kommentera</h3>
        <p>Kommentera gärna om du vill</p>


<!-- Formulär del-->
        
    <form id="form" action="index.php" method="post">

        <label for="name">Namn:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="mail">Emailadress:</label><br>
        <input type="text" id="mail" name="mail" required><br>
        <label for="comment">Kommentar:</label><br>
        <input type="comment" id="comment" name="comment"><br>
        <br>
        <button type="submit" onclick="verify()">Submit</button>
       
        <!-- <input type="button" value="Validate" id="submitBtn" class="button">-->
        
        
    </form> 

    

<!-- JQUery exempel-->
<script>

    $(document).ready(function(){

        $("button").click(function(){
          
        });
    });
</script>

    </body>

</html>
