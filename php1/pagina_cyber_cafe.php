<!DOCTYPE html>
<?php session_start(); ?>
<?php

    if (!$_SESSION['nome']){
        header('location:login.php');
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <title>Cyber-café</title>
        
    </head>
    <body>
        
        <script language='JavaScript'>
            
            window.open('http://localhost/cyper-cafe/php/popup.php', 'Tempo', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, MENUBAR=NO, MAXIMIZED=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=150, HEIGHT=150');
            
        </script>
        
        <center>
            <h1>Fala ae <?=$_SESSION['nome']?></h1>
        </center>
    
    </body>
        
</html>
<?php session_destroy();  ?>