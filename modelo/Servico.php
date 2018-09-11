<?php

class Servico{
    
    private $idservico;
    private $descricao;
    private $imagem;
    private $video;
    
    function __construct() {
        
    }
    
    function getIdservico() {
        return $this->idservico;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getVideo() {
        return $this->video;
    }

    function setIdservico($idservico) {
        $this->idservico = $idservico;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setVideo($video) {
        $this->video = $video;
    }

}

