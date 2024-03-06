<?php

require_once '../CadastrarAluno.php';
class Alunos
{
    private $nome;
    private $matricula;
    private $curso;     

    public function __construct($nome, $matricula, $curso)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }


}

?>