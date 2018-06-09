<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
        <title>Cyber-café</title>
        
    </head>
    <body>
    <?php

        session_start();
    
        if (isset($_POST['bcadastro'])){
            
            require_once 'conexao_cyber_cafe.php';
            
            $nome  = $_POST['nome_computador'];
            $senha = $_POST['senha_computador'];
            
           
            
            $sql = "SELECT * FROM computador WHERE nome_computador ='$nome' AND senha_computador ='$senha'";

            $valid = mysqli_query($conn, $sql);
            
            $foi = mysqli_fetch_assoc($valid);

            if (!$foi){
                echo "<script type='text/javascript' >alert('Nome ou senha incorretos');</script>";
            } else {
                $_SESSION['nome'] = $nome;
                header("location:pagina_cyber_cafe.php");                
            }
        }
    ?>
    
<div id="fullscreen_bg" class="fullscreen_bg"/>
    <div class="container">
        <form class="form-signin"  action="#" method="post" autocomplete="on"  >        
            <h1 class="form-signin-heading text-muted">Conecte-se</h1>
            <input type="text" class="form-control" name="nome_computador" maxlength="20" size="22" placeholder="Nome do computador" autofocus required>
            <input type="password" class="form-control" name="senha_computador" maxlength="20" size="22" placeholder="Insira a senha" required>
            <button type="submit" name="bcadastro" value="Logar" class="btn btn-danger btn-lg btn3d"><span class="glyphicon glyphicon-remove"></span> Iniciar Sessão</button>
        </form>
    </div>
</div>
    
    
    
    
    </body>
        
</html>