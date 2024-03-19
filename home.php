<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Currículo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="wrapper">
        <aside id="lateral">
            <!-- Menu barra lateral -->
            <div class="h-100">
                <div class="lateral-logo">
                    <a href="#">Advencers</a>
                </div>
                    <ul class="lateral-nav">
                    <li class="lateral-header">
                    Administrador 
                    </li>
                    <li class="lateral-item">
                        <a href="home.php"class="lateral-link">
                            <i class="fa-solid fa-list"></i>
                            Local
                        </a>
                    </li>
                    <li class="lateral-item">
                        <a href="#" class="lateral-link collapsed" data-bs-target="#curriculo" data-bs-toggle="collapse"
                        aria-expanded="false"><i class="fa-solid fa-magnifying-glass pe-2"></i>
                        Consultar
                        </a>
                        <ul id="curriculo" class="lateral-movimento list-unstyled collapse" data-bs-parent="#lateral">
                            <li class="lateral-item">
                                <a href="curriculo.php" class="lateral-link">Visualizar currículos</a>
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
                    <h5 class="tabela-title">
                        Painel de controle
                    </h5>
                </div>
                <div class="card">
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script scr="script.js"></script>  
    
</body>
</html>