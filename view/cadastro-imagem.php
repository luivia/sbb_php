<?php
include_once '../public/header.php';

use modelo\Profissional;

session_start();
$profissional = $_SESSION['dadosServico'];
?>


<div class="row">
    <div class="col-md-2"> 
        <a ></a>
    </div>
    <div class="col-md-8">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="text-danger" >Cadastro de Imagens e Vídeos</h3>
            </div>
            <div class="panel-body">

                <form  action="../controle/servico-cadastro.php" method="post" class="form">
                    <input type="hidden" name="acao" value="etapa2">
                    <p class="form-group">

                        <label for="imagem">Insira imagens dos seus serviços:</label>
                        <input type="text" name="imagem" value="<?= $profissional- getImagem()?> "class="form-control">
                    </p>
                    <p class="form-group">

                        <label for="videos">Insira vídeos dos seus serviços:</label>
                        <input type="text" name="videos" <?= $profissional->getVideo()?>class="form-control">
                    </p>
                    <p>
                    <nav aria-label="...">
                        <ul class="pager">
                            <li><button class="btn btn-danger" href="cadastro-servico.php">Anterior</button></li>
                            <input class="btn btn-danger" type="submit" value="Salvar">
                        </ul>
                    </nav>
                    </p>
            </div>
        </div>
    </div>
    <div class="col-md-1">
        <a></a>

    </div>
</div>





