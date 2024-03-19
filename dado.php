<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Currículo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="wrapper">
        <aside id="lateral">
            <!-- Menu barra lateral -->
            <div class="h-100">
                <div class="lateral-logo">
                        <a href="index.php"> <img src="imagens/logo.png" width="120px"></a>
                </div>
                <ul class="lateral-nav">
                    <li class="lateral-header">
                    Cliente
                    </li>
                    <li class="lateral-item">
                        <a href="#"class="lateral-link">
                            <i class="fa-solid fa-list"></i>
                            Local
                        </a>
                    </li>
                    <li class="lateral-item">
                        <a href="#" class="lateral-link collapsed" data-bs-target="#curriculo" data-bs-toggle="collapse"
                        aria-expanded="false"><i class="fa-solid fa-magnifying-glass pe-2"></i>
                        Currículo
                        </a>
                        <ul id="curriculo" class="lateral-movimento list-unstyled collapse" data-bs-parent="#lateral">
                            <li class="lateral-item">
                                <a href="cadastrar.php" class="lateral-link">Cadastrar currículo</a>
                            </li>
                        </ul>
                   </li>
                    <li class="lateral-item">
                        <a href="#" class="lateral-link collapsed" data-bs-target="#perfil" data-bs-toggle="collapse"
                        aria-expanded="false"><i class="fa-solid fa-circle-user"></i>
                        Perfil
                        </a>
                        <ul id="perfil" class="lateral-movimento list-unstyled collapse" data-bs-parent="#lateral">
                            <li class="lateral-item">
                                <a href="#" class="lateral-link">Perfil do Usuário</a>
                            </li>
                        </ul>
                   </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="lateral-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="tabela border-0">
                <div class="tabela-header">
                </div>
            
            </div>
        </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script scr="script.js"></script>  
    
</body>
</html>