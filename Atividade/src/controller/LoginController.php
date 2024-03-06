<?php

// controllers/LoginController.php
require_once 'C:/xampp/htdocs/aulas/Atividade/src/models/LoginAluno.php';

class LoginController 
{
    private $alunos;

    public function __construct() 
    {
        $this->alunos = [
            new LoginAluno(1, 'aluno1@teste.com.br', '1234',  1),
            new LoginAluno(2, 'aluno2@teste.com.br', '1234',  2),
            new LoginAluno(3, 'aluno3@teste.com.br', '1234',  3),
            new LoginAluno(4, 'aluno4@teste.com.br', '1234',  4)
        ];
    }

    public function autenticador($email, $password)     
    {
        foreach ($this->alunos as $aluno)
        {
            if (($aluno->email == $email) && password_verify($password, $aluno->password))
            {
                $_SESSION['autenticacao'] = 'SIM';
                $_SESSION['id'] = $aluno->id;
                $_SESSION['profile_id'] = $aluno->profile_id;
                header('Location: ../Atividade/src/view/home.php');
                exit;
            }
        }

        $_SESSION['autenticacao'] = 'NAO';
        header('Location: index.php?login=erro');
        exit;
    }
}

?>