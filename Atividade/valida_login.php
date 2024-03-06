<?php

    session_start();

    require_once 'C:/xampp/htdocs/aulas/Atividade/src/controller/LoginController.php';

    $loginController = new LoginController();
    $loginController->autenticador($_POST['email'], $_POST['senha']);

?>