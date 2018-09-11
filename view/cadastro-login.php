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
<div class="panel panel-success">
    <section class="container">
        
</div>       
<div class="panel panel-danger">
    <form  action="../controle/profissional-cadastro.php" method="post" class="form">
        <input type="hidden" name="acao" value="etapa3">
    <div class="panel-heading">
        <h3 class="text-danger">Dados de Login</div>
    <div class="panel-body">

        <p class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?=$profissional->getEmail()?>"class="form-control" required="">
        </p>
        <p class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" value="<?= $profissional->getUsuario()?> "class="form-control" required="">
        </p>
        <p class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" value="<?= $profissional->getSenha()?> "class="form-control" required="">
        </p>
         
    </div>
</div>
        <nav aria-label="...">
  <ul class="pager">
      <li><button class="btn btn-danger"href="cadastro-endereco.php">Anterior</button></li>
      <input class="btn btn-danger" type="submit" value="Salvar">
      
  </ul>
</nav>
</form>
</section>

</div>
    <div class="col-md-1">
        <a></a>
        
    </div>
</div>


