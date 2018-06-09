<!DOCTYPE html>
<?php session_start(); 

if (isset($_POST['log'])){
    $crono = $_POST['face'];
    $_SESSION['crono'] = $crono;
    header('location:popupout.php');
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <title>Cyber-café</title>
        
    </head>
    <body>
        <center>
            <form name="crono" method="post" style="width: 50px;" >
                <input type="text" size="5" name="face" title="Cronómetro">
                <script language="JavaScript">
                    var timeCrono;
                    var hor = 0;
                    var min = 0;
                    var seg = 0;
                    var startTime = new Date();
                    var start = startTime.getSeconds();
                    StartCrono();
                    function StartCrono() {
                        if (seg + 1 > 59) {
                            min += 1;
                        }
                        if (min > 59) {
                            min = 0;
                            hor += 1;
                        }
                        var time = new Date();
                        if (time.getSeconds() >= start) {
                            seg = time.getSeconds() - start;
                        } else {                        
                            seg = 60 + (time.getSeconds() - start);
                        }
                        timeCrono = (hor < 10) ? "0" + hor : hor;
                        timeCrono += ((min < 10) ? ":0" : ":") + min;
                        timeCrono += ((seg < 10) ? ":0" : ":") + seg;
                        document.crono.face.value = timeCrono;
                        setTimeout("StartCrono()", 1000);
                        } //--> 
                </script>
                <button type="submit" name="log">Logout</button>
            </form>
        
        </center>
    </body>
        
</html>