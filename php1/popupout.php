<!DOCTYPE html>
<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <title>Cyber-café</title>
        
    </head>
    <body>
        <center>
            
            
            <?php
            
            if (isset($_SESSION['crono'])){
                $hop = $_SESSION['crono'];
            }    
                echo "O tempo é $hop";
            
            if (isset($_POST['tchau'])){?>
                
            <script language='JavaScript'>
                window.close('http://localhost/cyper-cafe/php/popupout.php');
            </script>
            
            
            <?php } ?>
            
            
            
            
            <form method="post">
                <button type="submit" name="tchau">Fechar</button> 
            </form>
        </center>
    </body>
        
</html>