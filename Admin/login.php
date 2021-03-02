<?php
    session_start();
    if(isset($_SESSION["esiste"])){
        header('Location: ./index.php');
    }else{
        if(isset($_GET["user"]) && isset($_GET["password"]))
        {
            if($_GET["user"]=="Marco" && $_GET["password"]=="pa1ss2wo3rd4")
            {
                session_start();
                $_SESSION["esiste"]=1;
                header('Location: ./index.php');
            }else{
                header('Location: ./visual.php');
            }
            
        }else{
            header('Location: ./visual.php');
        }
    }
?>