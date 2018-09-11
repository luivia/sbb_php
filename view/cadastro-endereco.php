<?php include_once '../public/header.php'; 

 use modelo\Profissional;

session_start();
$profissional = $_SESSION['dadosProfissional'];
?>
<div class="row">
    <div class="col-md-2"> 
        <a ></a>
        </div>
    <div class="col-md-8">
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="text-danger">
            <h3 class="text-danger">Cadastro do Endereço</div>
                <div class="panel-body">
                    <section class="container-fluid">


                        <form  action="../controle/profissional-cadastro.php" method="post" class="form">
                            <input type="hidden" name="acao" value="etapa2">
                            <p class="form-group">
                                <label for="nome">Nome do Estabelecimento</label>
                                <input type="text" name="nome" value="<?= $profissional->getNomeEstabelecimento()?>" class="form-control">
                            </p>

                            <p class="form-group">
                                <label for="rua">Rua</label>
                                <input type="text" name="rua" value="<?=$profissional->getRua() ?>" class="form-control">
                            </p>
                            <p class="form-group">
                                <label for="numero">Numero</label>
                                <input type="text" name="numero" value="<?= $profissional->getNumero()?>" class="form-control">
                            </p>
                            <p>
                                <label for="bairro">Bairro</label>
                                <input class="form-control" type="text" name="bairro" value="<?= $profissional->getBairro()?>">
                            </p>
                            <tr>
                                <td>
                                    <label for="estado">Estado:</label>
                                </td>
                                <td align="left">
                                    <select name="estado">
                                        <option value="sel">Selecine</option>
                                        <option value="ac">Acre</option>
                                        <option value="al">Alagoas</option>
                                        <option value="am">Amazonas</option>
                                        <option value="ap">Amapá</option>
                                        <option value="ba">Bahia</option>
                                        <option value="ce">Ceará</option>
                                        <option value="df">Distrito Federal</option>
                                        <option value="es">Espírito Santo</option>
                                        <option value="go">Goiás</option>
                                        <option value="ma">Maranhão</option>
                                        <option value="mt">Mato Grosso</option>
                                        <option value="ms">Mato Grosso do Sul</option>
                                        <option value="mg">Minas Gerais</option>
                                        <option value="pa">Pará</option>
                                        <option value="pb">Paraíba</option>
                                        <option value="pr">Paraná</option>
                                        <option value="pe">Pernambuco</option>
                                        <option value="pi">Piauí</option>
                                        <option value="rj">Rio de Janeiro</option>
                                        <option value="rn">Rio Grande do Norte</option>
                                        <option value="ro">Rondônia</option>
                                        <option value="rs">Rio Grande do Sul</option>
                                        <option value="rr">Roraima</option>
                                        <option value="sc">Santa Catarina</option>
                                        <option value="se">Sergipe</option>
                                        <option value="sp">São Paulo</option>
                                        <option value="to">Tocantins</option>
                                    </select>
                                </td>
                            </tr>
                            <p class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" name="cidade" class="form-control" value="<?= $profissional->getCidade()?>">
                            </p> 
                            </div>
                            </div>
                            <p>
                                <nav aria-label="...">
  <ul class="pager">
      <li><button class="btn btn-danger" href="cadastro.php">Anterior</button></li>
      <li><button class="btn btn-danger">Próxima</button></li>
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


