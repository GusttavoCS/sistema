<?php


//CRUD
class TarefaService {

	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Tarefa $tarefa) {
		$this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
	}

	public function inserirDadospessoais() { //create
		$query = 'INSERT into dados_curriculo (nome_completo,
		datansc,
		nacionalidade,
		naturalidade,
		cpf,
		tipo_habilitacao,
		possui_deficiencia,
		genero,
		estado_civil,
		telefone,
		email,
		paiz,
		estado,
		cidadi,
		cep,
		bairro,
		rua,
		escolaridade,
		formacao_academica,
		nome_curso,
		incio_curso,
		fim_curso,
		situacao_curso,
		experiencia,
		instituicao,
		pais,
		estadu,
		cidade,
		cursos_complementares,
		idiomas,
		objetivo
		) VALUES (:nome, :datansc, :nacion, :natura, :cpf, :habilitacao, :deficiencia, :genero, :civil, :tel, :email, :paiz, :estado, :cidadi, :cep,
		:bairro, :rua, :escol, :formacao, :n_curso, :in_curso, :fi_curso, :si_curso, :exp, :insti, :pais, :estadu, :cidade, :comple, :idiomas, :obj)';
		$stmt = $this->conexao->prepare($query);
		$stmt ->bindValue(':nome', $this -> tarefa ->__get('nome'));
		$stmt ->bindValue(':datansc',$this -> tarefa ->__get('datansc'));
		$stmt ->bindValue(':nacion', $this -> tarefa ->__get('nacion'));
		$stmt ->bindValue(':natura', $this -> tarefa ->__get('natura'));
		$stmt ->bindValue(':cpf', $this -> tarefa ->__get('cpf'));
		$stmt ->bindValue(':habilitacao', $this -> tarefa ->__get('habilitacao'));
		$stmt ->bindValue(':deficiencia', $this -> tarefa ->__get('deficiencia'));
		$stmt ->bindValue(':genero', $this -> tarefa ->__get('genero'));
		$stmt ->bindValue(':civil', $this -> tarefa ->__get('estado_civil'));
		$stmt ->bindValue(':tel', $this -> tarefa ->__get('telefone'));
		$stmt ->bindValue(':email', $this -> tarefa ->__get('email'));
		$stmt ->bindValue(':paiz', $this -> tarefa ->__get('paiz'));
		$stmt ->bindValue(':estado', $this -> tarefa ->__get('estado'));
		$stmt ->bindValue(':cidadi', $this -> tarefa ->__get('cidadi'));
		$stmt ->bindValue(':cep', $this -> tarefa ->__get('cep'));
		$stmt ->bindValue(':bairro', $this -> tarefa ->__get('bairro'));
		$stmt ->bindValue(':rua', $this -> tarefa ->__get('rua'));
		$stmt ->bindValue(':escol', $this -> tarefa ->__get('escolaridade'));
		$stmt ->bindValue(':formacao', $this -> tarefa ->__get('formacao'));
		$stmt ->bindValue(':n_curso', $this -> tarefa ->__get('n_curso'));
		$stmt ->bindValue(':in_curso', $this -> tarefa ->__get('in_curso'));
		$stmt ->bindValue(':fi_curso', $this -> tarefa ->__get('fi_curso'));
		$stmt ->bindValue(':si_curso', $this -> tarefa ->__get('si_curso'));
		$stmt ->bindValue(':exp', $this -> tarefa ->__get('experiencia'));
		$stmt ->bindValue(':insti', $this -> tarefa ->__get('instiuitcao'));
		$stmt ->bindValue(':pais', $this -> tarefa ->__get('pais'));
		$stmt ->bindValue(':estadu', $this -> tarefa ->__get('estadu'));
		$stmt ->bindValue(':cidade', $this -> tarefa ->__get('cidade'));
		$stmt ->bindValue(':comple', $this -> tarefa ->__get('complementares'));
		$stmt ->bindValue(':idiomas', $this -> tarefa ->__get('idiomas'));
		$stmt ->bindValue(':obj', $this -> tarefa ->__get('objetivo'));
		
		
		
	
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ); 
		
	}

    public function recuperar() { //read
		$query = '
			select * from dados_curriculo
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		while($row = $stmt-> fetch()){
			$curriculo[] = $row;
		}
		return $curriculo;
	}

	public function atualizar() { //update
		

	}

	public function remover() { //delete

	}
}
