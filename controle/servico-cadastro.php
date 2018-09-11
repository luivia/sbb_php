<?php

require '../config/autoload.php';

use modelo\Profissional;
use dao\ProfissionalDAO;

$acao = $_GET['acao'] ?? $_POST['acao'];

switch ($acao) {
    case 'etapa1': {
            session_start();
            $profissional = new Profissional();
            $profissional->setDescrição($_POST['descricao']);
            $_SESSION['dadosServico'] = $profissional;
            header('Location:../view/cadastro-imagem.php');
            break;
        }

    case 'etapa2': {
            session_start();
            $profissional = $_SESSION['dadosServico'];
            $profissional->setVideo($_POST['video']);
            $_SESSION['dadosServico'] = $profissional;

            $dao = new ProfissionalDAO();
            $dao->adicionarServico($profissional);

            break;
        }
}

