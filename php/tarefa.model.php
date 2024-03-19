<?php
class Tarefa{
    private $nome_completo;
    private $datansc;
    private $nacionalidade;
    private $naturalidade;
    private $cpf;
    private $tipo_habilitacao;
    private $possui_deficiencia;
    private $genero;
    private $estado_civil;
    private $telefone;
    private $email;
    private $paiz;
    private $estado;
    private $cidadi;
    private $cep;
    private $bairro;
    private $rua;
    private $escolaridade;
    private $formacao_academica;
    private $nome_curso;
    private $incio_curso;
    private $fim_curso;
    private $situacao_curso;
    private $experiencia;
    private $instituicao;
    private $pais;
    private $estadu;
    private $cidade;
    private $cursos_complementares;
    private $idiomas;

    private $objetivo;


    public function __get($atributo){
        return $this-> $atributo;
    }

    public function __set($atributo, $valor){
      $this-> $atributo=$valor;
    }
}
