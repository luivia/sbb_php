<?php
namespace modelo;
class Profissional {
    private $idProfissional;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $nomeEstabelecimento;
    private $rua;
    private $numero;
    private $bairro;
    private $estado;
    private $cidade;
    private $celular;
    private $email;
    private $usuario;
    private $senha;
            
    function __construct() {
    }
    
    function getIdProfissional() {
        return $this->idProfissional;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNomeEstabelecimento() {
        return $this->nomeEstabelecimento;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setIdProfissional($idProfissional) {
        $this->idProfissional = $idProfissional;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNomeEstabelecimento($nomeEstabelecimento) {
        $this->nomeEstabelecimento = $nomeEstabelecimento;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }




}