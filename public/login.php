<?php include './header.php';?>
<section class="container">
    <form action="../controle/login.php" method="post" class="form login">
        <input type="email" name="email"
               placeholder="email">
        <input type="password" name="senha"
               placeholder="senha">
        <input type="submit" value="Entrar">       
    </form>
    <?php if(isset($_GET['alerta'])): ?>
    <div class="alert-danger">
        <?php echo $_GET['alerta']?>
    </div>
    <?php endif;?>
</section>
<?php include './footer.php'; ?>