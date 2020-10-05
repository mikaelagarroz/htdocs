<?php

   function läggaTillKommentar($comment, $email){
        $db = new Sqlite3('./db/labb2.db');
        $sql = "INSERT INTO 'kommentar'('kom_text', 'k_epost') VALUES (:comment, :email)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email, SQLITE3_TEXT);
        $stmt->bindParam(':comment', $comment, SQLITE3_TEXT);

        if($stmt->execute()){
            $db->close();
            return true;
        }
        else{
            $db->close();
            return false;
        }

    }

    function läggaTillAnvändare($email, $hash, $salt){
        $db = new Sqlite3('./db/labb2.db');
        $check_email = $db->querySingle("SELECT COUNT(epost) FROM 'labb2' WHERE epost='".$email."'"); 
    
    if($check_email > 0){
        
    $error_mail = 'Mailadressen används redan.';
    header("Location: registration.php?error=".$error_mail);
    
    }else{
        $result = $db->query("INSERT INTO 'labb2' ('epost', 'password', 'salt') VALUES ('$email','$hash','$salt')");
        $sucess = 'Registreringen blev lyckad!';
        header("Location: login.php?sucess=".$sucess);
    }
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email, SQLITE3_TEXT);
        $stmt->bindParam(':password', $hash, SQLITE3_TEXT);        
        $stmt->bindParam(':salt', $salt, SQLITE3_TEXT);

        if($stmt->execute()){
            $db->close();
            return true;
        }
        else{
            $db->close();
            return false;
        }
    
    }

?> 