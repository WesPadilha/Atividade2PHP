<?php

class CadastrarAlunos
{
    private $alunos;

    public function __construct()
    {
        $this->alunos = array();
    }

    public function adicionarAlunos(Alunos $alunos)
    {
        $this->alunos[] = $alunos;
    }

    public function listarAlunos()
    {
        return $this->alunos;   
    }
}

?>