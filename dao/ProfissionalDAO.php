<?php

namespace dao;
class ProfissionalDAO {

    private $con;

    public function __construct() {
        $this->con = ConectaBD::getInstance();
    }
    function adicionar(Profissional $profissional){
    $con = ConectaBD::getInstance();
    $sql = "insert into cadastro (idprofissional, nome, sobrenome, cpf, celular, nome_estabelecimento, rua, numero, "
            . "bairro, celular, email, usuario, senha) VALUES "
            . " ('{$profissional->getIdprofissional()}','{$profissional->getNome()}','{$profissional->getSobrenome()}',"
            . " '{$profissional->getCpf()}','{$profissional->getCelular()}','{$profissional->getNomeEstabelecimento()}',"
            . " '{$profissional->getRua()}','{$profissional->getNumero()}','{$profissional->getBairro()}',"
            . " '{$profissional->getEstado()}','{$profissional->getCidade()}',"
            . " '{$profissional->getEmail()}','{$profissional->getUsuario()}',"
            . " '{$profissional->getSenha()}')";
   try {
      $con->query($sql);
      header('Location:../view/inicio.php');
      die();
   } catch (PDOException $exc) {
       print($exc->getMessage());
   }
       
}
   
    function adicionarServico(Profissional $profissional){
    $con = ConectaBD::getInstance();
        $sql = "insert into profissional where idprofissional = idservico(idProfissional,"
                . " idservico, descricao, imagem, video) VALUES "
            . " ('{$profissional->getIdProfissional()}','{$profissional->getIdServico()}',"
            . " '{$profissional->getDescricao()}',"
            . " '{$profissional->getImagem()}','{$profissional->getVideo()}";

        try {
      $con->query($sql);
      header('Location:../view/inicio.php');
      die();
   } catch (PDOException $exc) {
       print($exc->getMessage());
   }
       
}

    public function excluir(Profissional $profissional) {
        $sql = "delete from profissional where id={$profissional->getId()}";

        $this->con->query($sql);
    }

    public function editar(Profissional $profissional) {
        $sql = "update  cadastro set nome='{$profissional->getNome()}',"
                . "cpf='{$profissional->getCpf()}',email='{$profissional->getEmail()}',"
                . "perfil_id='{$profissional->getPerfil()}' where id={$profissional->getId()}";

        $this->con->query($sql);
    }

    public function listarTodos() {

        $sql = "select * from profissional";

        $rs = $this->con->query($sql);
        $lista = new ArrayObject();
        while ($registro = $rs->fetch(PDO::FETCH_OBJ)) {
            $profissional = new Profissional();
            $profissional->setNome($registro->nome);
            $lista->append($profissional);
        }
        return $lista;
    }

    public function listarPesquisa($termo) {

        $sql = "select * from " . Profissional::$TABELA . " where "
                . "nome like'%{$termo}%' ";

        $rs = $this->con->query($sql);
        $lista = new ArrayObject();
        while ($registro = $rs->fetch(PDO::FETCH_OBJ)) {
            $profissional = new Profissional();
            $profissional->setNome($registro->nome);
            $lista->append($profissional);
        }
        return $lista;
    }

}
