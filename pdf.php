<?php
require "php/recuperar.php";
$cpf = $_GET['cpf'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
    <script>
        //window.print();
    </script>
    <style>
       body{
        margin: 0 auto;
        width: fit-content;
       } 
       .emissao{
        font-size: 15px;
        float: right;
       }
    </style>
</head>
<body>
    <?php
    foreach($curriculo as $dados){
        
        if($dados['cpf'] == $cpf){
    
    ?>
    <div class="card" style="width: 21cm;">
                    
                    <form action="php/inserirdp.php" method="post">
                   
                        <legend class="card-header"><strong><?= $dados['nome_completo'];?></strong>  <label class="emissao"> Data de emissão do currículo:  <?php $hoje = date('d/m/Y'); echo $hoje; ?> </label>
                           </legend>
                        <div class="card-body">
                        
                        <?php
                        $date1= date_create($dados['datansc']);
    
                        $date2=date_create(date('y-m-d'));
                        $diff=date_diff($date1,$date2);
                        echo $diff->format("%y Anos");
                        ?>
                        <br>
                        <label for="cpf">CPF: </label>
                        <td><?= $dados['cpf'];?></td>
                        <br>
                        <label for="name">Endereço: </label>
                        <td><?= $dados['cidadi'];?></td>, <td><?= $dados['estado'];?></td>, <td><?= $dados['rua'];?></td>
                        <br>
                        <label for="name">Telefone: </label>
                        <td><?= $dados['telefone'];?></td>
                        <br>
                        <label for="name">E-mail: </label>
                        <td><?= $dados['email'];?></td>
                        <br>
                        <label for="name">Estado Civil: </label>
                        <td><?= $dados['estado_civil'];?></td>
                        </div>
                        <br>
                        <legend class="card-header"><strong>Formação Acadêmica</strong></legend>
                        <div class="card-body">
                        <label for="escolaridade">Escolaridade: </label>
                        <td><?= $dados['escolaridade'];?></td>
                        <br>
                        <label for="name">Nome do curso: </label>
                        <td><?= $dados['nome_curso'];?></td>
                        <br>
                        <label for="name">Inicio curso: </label>
                        <td><?= $dados['incio_curso'];?></td>
                        <br>
                        <label for="name">Fim curso: </label>
                        <td><?= $dados['fim_curso'];?></td>
                        <br>
                        <label for="name">Situação curso: </label>
                        <td><?= $dados['situacao_curso'];?></td>
                        <br>
                        <label for="name">Instituição: </label>
                        <td><?= $dados['instituicao'];?></td><br>
                        <label for="name">Cursos complementares: </label>
                        <td><?= $dados['cursos_complementares'];?></td>
                        </div>
                        <br>
                        <br>

                        <legend class="card-header"><strong>Experiência</strong></legend>
                        <div class="card-body">
                        <label for="name">Experiência: </label>
                        <td><?= $dados['experiencia'];?></td><br>
                        </div>
                        <br>
                        <legend class="card-header"><strong>Objetivo</strong></legend>
                        <div class="card-body">
                        <label for="name">Objetivo: </label>
                        <td><?= $dados['objetivo'];?></td><br>
                        </div>
                        <br>
                        <legend class="card-header"><strong>Idiomas</strong></legend>
                        <div class="card-body">
                        <label for="nome_idioma">Nome do idioma: </label> 
                        <?php
                        $idioma = $dados['idiomas'];
                        $idiomas = explode(',',$idioma);
                        ?>
                        <td><?= $idiomas[0];?></td>
                        <br>
                        <label for="idiomas">Conversação: </label>
                        <td><?= $idiomas[1];?></td>
                        <br>
                        <label for="idiomas">Escrita: </label>
                        <td><?= $idiomas[2];?></td>
                        <br>
                        <label for="name">Leitura: </label>
                        <td><?= $idiomas[3];?></td>
                        <br>
                        </div>
                        
                    <br>
                    </form>
                    
                    </div>
                </div>
    
    <?php
    }else{
        next($dados);
    }
    }
    ?>
</body>
</html>