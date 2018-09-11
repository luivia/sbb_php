<?php include_once '../public/header.php'; 
 use modelo\Profissional;
 session_start();
 if(isset($_SESSION['dadosProfissional'])){
     $profissional = $_SESSION['dadosProfissional'];
 }
 else{
     $profissional = new Profissional();
 }
 ?>


<div class="row">
    <div class="col-md-2"> 
        <a ></a>
        </div>
    <div class="col-md-8">
<div class="panel panel-success">
    <section class="container">
        <h3 class="text-danger">Cadastro do Profissional</h3>  
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="text-danger" >Dados Pessoais</h3>
    </div>
    <div class="panel-body">

        <form  action="../controle/profissional-cadastro.php" method="post" class="form">
            <input type="hidden" name="acao" value="etapa1">
            <p class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?= $profissional->getNome()?>" class="form-control">
            </p>
            <p class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" value="<?= $profissional->getSobrenome()?>" class="form-control">
            </p>
            <p>
                <label for="cpf">CPF</label>
                <input class="form-control" type="text" name="cpf" value="<?= $profissional->getCpf()?>" placeholder="CPF" required />
            </p>
            <p>
                <label for="celular">Celular</label>
                <input class="form-control" type="text" name="celular" value="<?= $profissional->getCelular()?>" placeholder="Celular" required />
            </p>

    </div>
</div>
<nav aria-label="...">
  <ul class="pager">
      <li><button class="btn btn-danger"> Proximo</button></li>
  </ul>
</nav>
</form>
</section>

</div>
    <div class="col-md-1">
        <a></a>
        
    </div>
</div>


