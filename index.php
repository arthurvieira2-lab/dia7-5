<?php

class Pessoa 
{
protected $nome;
protected $cpf;
protected $idade;

public function __construct($nome, $cpf, $idade)
    {
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->idade = $idade;
    }
    
public function apresentar() 
    {
    echo "Olá, meu nome é ". $this->nome;
    }
}

class Estudante extends Pessoa
{

public $matricula;
public $curso;

public function __construct($nome, $cpf, $idade, $matricula, $curso)
    {
    $this->matricula = $matricula;
    $this->curso = $curso;
    parent::__construct($nome, $cpf, $idade);
    }

public function apresentar()
    {
    echo "Olá eu sou o estudante ". $this->nome . " e estou no curso de". $this->curso;
    }
}

class Servidor extends Pessoa
{
private $salario;
public $funcao;
    
public function __construct($nome, $cpf, $idade, $funcao, $salario = 1600)
    {
    $this->salario = $salario;
    $this->funcao = $funcao;    
    parent::__construct($nome, $cpf, $idade);
    }
public function apresentar()
    {
    echo "Olá eu sou o servidor ". $this->nome ." e minha função é ". $this->funcao;
    }
}

class Professor extends Pessoa
{
private $salario;
public $materia;
    
public function __construct($nome, $cpf, $idade, $materia, $salario = 1600)
    {
    $this->salario = $salario;
    $this->materia = $materia;    
    parent::__construct($nome, $cpf, $idade);
    }
public function apresentar()
    {
    echo "Olá eu sou o professor ". $this->nome ." e eu aplico a matéria de ". $this->materia;
    }
}

class Visitante extends Pessoa
{
public function apresentar() 
    {
    echo "Eu sou visitante ". $this->nome ." e eu visito muitos lugares ai";
    }
}

$estudante_x = new Estudante("ArthurV", "000.000.000-00", "20", 202510630007, "Artes Cênicas");
$servidor_x = new Servidor("Maria", "111.111.111-11", "69", "Espancador Profissional");
$professor_x = new Professor("Marcos", "222.222.222-22", "32", "Linguagens e Técnicas de Programação II");
$visitante_x = new Visitante("Terry Crews da série Todo Mundo Odeia o Chris", "3", "1000");

$estudante_x->apresentar();
echo "<br>";
$servidor_x->apresentar();
echo "<br>";
$professor_x->apresentar();
echo "<br>";
$visitante_x->apresentar();
echo "<br>";
?>
