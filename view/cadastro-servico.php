<?php
include_once '../public/header.php';

use modelo\Profissional;

session_start();
if (isset($_SESSION['dadosProfissional'])) {
    $profissional = $_SESSION['dadosServico'];
} else {
    $profissional = new Profissional();
}
?>


<div class="row">
    <div class="col-md-2"> 
        <a ></a>
    </div>
    <div class="col-md-8">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="text-danger">
                    <h3 class="text-danger">Cadastro do Serviço</div>
                        <div class="panel-body">
                            <section class="container-fluid">


                                <form  action="../controle/servico-cadastro.php" method="post" class="form">
                                    <input type="hidden" name="acao" value="etapa1">
                                    <p class="form-group">
                                        <label>Escolha um serviço para cadastrar sua descrição</label>  
                                    </p>
                                    <tr>
                                        <td>
                                            <label for="serviço">Serviços:</label>
                                        </td>
                                        <td align="left">
                                            <select name="serviço">
                                                <option value="se">Selecione</option>
                                                <option value="co">Corte</option>
                                                <option value="pe">Penteado</option>
                                                <option value="pi">Pintura</option>
                                                <option value="hi">Hidratação</option>
                                                <option value="al">Alisamento</option>
                                                <option value="ma">Manicure</option>
                                                <option value="pe">Pedicure</option>
                                                <option value="ds">Design de Sobrancelha</option>
                                                <option value="dp">Depilação</option>
                                                <option value="lp">Limpeza de Pele</option>
                                                <option value="ma">Maquiagem</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <p class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" name="descricao" value="<?= $profissional-getDescricao()?>"class="form-control">
                                    </p>

                                    </div>
                                    </div>
                                    <p>
                                    <nav aria-label="...">
                                        <ul class="pager">

                                            <li><button class="btn bg-danger" href="cadastro-imagem.php">Próxima</button></li>
                                        </ul>
                                    </nav>
                                    </p>
                                </form>
                            </section>
                        </div>
                        <div class="col-md-1">
                            <a></a>

                        </div>
                        </div>