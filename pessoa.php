<?php

// Abstração: pessoa pode ser um objeto, e sera um estudante, visitante, professor ou servidor
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

public function __construct($nome, $cpf, $idade, $matricula)
    {

    $this->matricula = $matricula;

    parent::__construct($nome, $cpf, $idade);

    }

public function apresentar()
    {

    echo "Olá eu sou o estudante ". $this->nome;

    }
}

class Servidor extends Pessoa
{

private $salario;

public function __construct($nome, $cpf, $idade, $salario = 1600)
    {

    $this->salario = $salario;
    parent::__construct($nome, $cpf, $idade);

    }
public function apresentar()
    {

    echo "Olá eu sou o servidor ". $this->nome;

    }
}

$estudante_x = new Estudante("John", "000.000.000-00", "20", 202510630007);
$servidor_x = new Servidor("Maria", "111.111.111-11", "69");
$estudante_x->apresentar();
echo "<br>";
$servidor_x->apresentar();
?>