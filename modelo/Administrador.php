<?php

class Administrador {
  private $id;
  private $nome;
  private $idProfissional;
  
  function __construct() {
  }

  function getId() {
      return $this->id;
  }

  function getNome() {
      return $this->nome;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setNome($nome) {
      $this->nome = $nome;
  }
  
  function getIdProfissional() {
      return $this->idProfissional;
  }

  function setIdProfissional($idProfissional) {
      $this->idProfissional = $idProfissional;
  }




}
