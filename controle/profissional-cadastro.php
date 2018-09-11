<?php
require '../config/autoload.php';

use modelo\Profissional;
use dao\ProfissionalDAO;


$acao = $_GET['acao'] ?? $_POST['acao'];

switch ($acao){
    case 'etapa1':{
            session_start();
            $profissional = new Profissional();
            $profissional->setNome($_POST['nome']);
            $_SESSION['dadosProfissional'] = $profissional;
            header('Location:../view/cadastro-endereco.php');
            break;
    }
    
     case 'etapa2':{
            session_start();
            $profissional= $_SESSION['dadosProfissional'];
            $profissional->setRua($_POST['rua']);
            $_SESSION['dadosProfissional'] = $profissional;
            header('Location:../view/cadastro-login.php');
            break;
    }
    case 'etapa3':{
            session_start();
            $profissional= $_SESSION['dadosProfissional'];
            $profissional->setEmail($_POST['email']);
            $_SESSION['dadosProfissional'] = $profissional;
            
            $dao = new ProfissionalDAO();
            $dao->adicionar($profissional);
            
            break;
    }
        
}

