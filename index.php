<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="lateral-logo">

</div>
    <div class="main">
        
        <input type="checkbox" id="chk" aria-hidden="true">
        
        <div class="signup">
            <form action="valida.php" method="post">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" id="" placeholder="Usuario ou Email" required="">
                <input type="password" name="password" id="" placeholder="Senha" required="">
                <button type="submit">Entrar</button>
                
                <?php
        if(isset($_GET["singup"])){;//testa se a instrução da entrada ta negativa)
          ?>  
          <div class="text-danger">
            Usuário ou senha inválido(s).
          </div>
          <?php
        }
        ?>
            </form>
            <form action="dado.php">
    <button type="submit">Cadastrar currículo</button>
</form>
        </div>
        
        <div class="login">
            <form action="/">
                <label for="chk" aria-hidden="true">Registrar</label>
                <input type="text" name="txt" placeholder="Usuario" required="">
                
                <input type="email" name="email" id="" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Senha" id="" required>
                <input type="password" name="pswd" placeholder="Confirme sua senha" id="" required="">
                <button>Registrar</button>
            </form>
        </div>
    </div>
    
</body>
</html>