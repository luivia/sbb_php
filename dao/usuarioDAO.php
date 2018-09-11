<?php


/**
 * Description of Usuario
 *
 * @author Mariana Akemi
 */

namespace dao;
use database\ConectaBD;
use modelo\Usuario;

class Usuario {
     private $con;

    public function __construct() {
        $this->con = ConectaBD::getInstance();
    }
    
        public function listarTodos() {

        $sql = "select * from profissional";

        $rs = $this->con->query($sql);
        $lista = new ArrayObject();
        while ($registro = $rs->fetch(PDO::FETCH_OBJ)) {
            $usuario = new Usuario();
            $usuario->setNome($registro->nome);
            $usuario->setCpf($registro->cpf);
            $usuario->setEmail($registro->email);
            $lista->append($usuario);
        }
        return $lista;
    }

    public function listarPesquisa($termo) {

        $sql = "select * from " . Usuario::$TABELA . " where "
                . "nome like'%{$termo}%' ";

        $rs = $this->con->query($sql);
        $lista = new ArrayObject();
        while ($registro = $rs->fetch(PDO::FETCH_OBJ)) {
            $usuario = new Usuario();
            $usuario->setNome($registro->nome);
            $usuario->setCpf($registro->cpf);
            $usuario->setEmail($registro->email);
            $lista->append($usuario);
        }
        return $lista;
    }
}
