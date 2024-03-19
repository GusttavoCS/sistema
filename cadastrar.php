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
                        <img src="imagens/logo.png" width="120px">
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
                                <a href="dado.php" class="lateral-link">Cadastrar currículo</a>
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
                <div class="folha">
                <div class="card">
                    
                    <form action="php/inserirdp.php" method="post">
                        <legend class="card-header">Documentos Pessoais</legend>
                        <div class="card-body">
                        <label for="name">Nome completo </label><br>
                        <input class="form-control" type="text"  name="name"><br>
                        <label for="birthday">Data Nascimento </label><br>
                        <input class="form-control" type="date"  name="datansc"><br>
                       
                        
                        <label for="nationality">Nacionalidade </label><br>
                        <input class="form-control" type="text"  name="nacio"><br>
                        <label for="placeofbirth">Naturalidade </label><br>
                        <input class="form-control" type="text"  name="natura"><br>
                        <label for="cpf">CPF</label><br>
                        <input  class="form-control" type="text"  name="cpf" maxlength="11"><br>
                        <label for="license">Tipo de habilitação </label><br>
                        <input class="form-control" type="text"  name="habi"><br>
                        </div>
                        <legend class="card-header">Informações Pessoais</legend>
                        <div class="card-body">
                        <label for="deficiencia">Você possui alguma Deficiência?</label>
                        <input type="radio" name="deficiencia" value="Sim">Sim
                        <input type="radio" name="deficiencia" value="Não">Não
                        <br>
                        <label for="genero">Gênero </label>
                        <select class="form-control" name="genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                        </select>
                        <br>
                        <label for="estadoCivil">Estado civil </label>
                        <select class="form-control" name="civil">
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viuvo(a)">Viuvo(a)</option>
                        </select>
                        <br>
                        </div>
                        <legend class="card-header">Contatos</legend>
                        <div class="card-body">
                        <label for="name">Telefone </label><br>
                        <input class="form-control" type="text" name="tel"><br>
                        <label for="name">E-mail </label><br>
                        <input class="form-control" type="text" name="email"><br>
                        <br>
                        </div>
                        <legend class="card-header">Endereço</legend>
                        <div class="card-body">
                        <label for="name">País</label><br>
                        <input class="form-control" type="text" name="paiz"><br>
                        <label for="name">Estado</label><br>
                        <input class="form-control" type="text" name="estado"><br>
                        <label for="name">Cidade</label><br>
                        <input class="form-control" type="text" name="cidadi"><br>
                        <label for="name">CEP</label><br>
                        <input class="form-control" type="text" name="cep"><br>
                        <label for="name">Bairro</label><br>
                        <input class="form-control" type="text" name="bairro"><br>
                        <label for="name">Rua</label><br>
                        <input class="form-control" type="text" name="rua"><br>
                        <br>
                        </div>
                        <legend class="card-header">Escolaridade</legend>
                        <div class="card-body">
                        <label for="escolaridade">Escolaridade </label>
                        <select class="form-control" name="escol">
                        <option value="Ensino Fundamental">Ensino Fundamental</option>
                        <option value="Ensino Médio">Ensino Médio</option>
                        <option value="Ensino Superior">Ensino Superior</option>
                        <option value="Pós Graduação(Especialização)">Pós Graduação(Especialização)</option>
                        <option value="Pós Graduação(Mestrado)">Pós Graduação(Mestrado)</option>
                        <option value="Pós Graduação(Doutorado)">Pós Graduação(Doutorado)</option>
                        </select>
                        <br>
                        </div>
                        <legend class="card-header">Cursos</legend>
                        <div class="card-body">
                        <label for="name">Formação Acadêmica</label><br>
                        <input class="form-control" type="text" name="formacao"><br>
                        <label for="name">Nome do curso</label><br>
                        <input class="form-control" type="text" name="n_curso"><br>
                        <label for="inicio">Início </label><br>
                        <input class="form-control" type="date"  name="in_curso"><br>
                        <label for="fim">Fim </label><br>
                        <input class="form-control" type="date" name="fi_curso"><br>
                        <label for="si_curso">Situação </label>
                        <select class="form-control" name="si_curso">
                        <option value="Concluído">Concluído</option>
                        <option value="Cursando">Cursando</option>
                        </select>
                        <br>
                        <label for="name">Cursos complementares</label><br>
                        <textarea class="form-control" name="comple"></textarea>
                        <label for="name">Experiência</label><br>
                        <textarea class="form-control" name="exp"></textarea>
                        <label for="name">Instituição</label><br>
                        <input class="form-control" type="text" name="insti"><br>
                        <label for="name">País</label><br>
                        <input class="form-control" type="text" name="pais"><br>
                        <label for="name">Estado</label><br>
                        <input class="form-control" type="text" name="estadu"><br>
                        <label for="name">Cidade</label><br>
                        <input class="form-control" type="text" name="cidade"><br>
                        <br>
                        </div>
                        <legend class="card-header">Idiomas</legend>
                        <div class="card-body">
                        <label for="nome_idioma">Nome do idioma</label> 
                        <input class="form-control" type="text" name="nome_idioma"><br>
                        <label for="idiomas">Conversação</label><br>
                        <select class="form-control" name="idioma_c">
                        <option value="Não tem<">Não tem</option>
                        <option value="Básico">Básico</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value=">Avançado">Avançado</option>
                        </select>
                        <br>
                        <label for="idiomas">Escrita</label><br>
                        <select class="form-control" name="idioma_e">
                        <option value="Não tem">Não tem</option>
                        <option value="Básico">Básico</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>
                        </select>
                        <br>
                        <label for="idiomas">Leitura </label>
                        <select class="form-control" name="idioma_l">
                        <option value="Não tem">Não tem</option>
                        <option value="Básico">Básico</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Avançado">Avançado</option>
                        </select>
                        <br>
                        </div>
                        <legend class="card-header">Objetivo</legend>
                        <div class="card-body">
                        <label for="name">Objetivo</label><br>
                        <textarea class="form-control" name="obj"></textarea>
                        <br>
                        
                    

                    <br>
                    <input class="btn-block btn btn-primary" type="submit" value="SALVAR">
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script scr="script.js"></script>  
    
</body>
</html>