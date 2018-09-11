<?php include_once '../public/header.php';
include_once '../dao/profissionalDAO.php';
?>


<div class="row">
    <div class="col-md-1"> 
        <a ></a>
    </div>

    <div class="container">

        <div class="center">
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-danger" align="center">
                        <h2 id="titulo"> Encontre aqui a sua melhor opção!! </h2>
                    </div>
                    <div class="panel-footer" align="center"><h3>No Em Busca da Beleza, você encontrará as melhores opções de 
                            Salões e profissionais relacionados a Beleza e Estética de Naviraí!!</h3></div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-danger" align="center">
                        <h1 align="center"> Busca por serviço</h1>
                    </div>

                    <div class="panel-footer" align="center">

                        <table id="servicos">
                            <tr> <td> <a href="listaservico.htm">Corte</a> </td> <td> <a href="#">Pintura</a> </td> <td> <a href="#">Depilação</a> </td> </tr>
                            <tr> <td> <a href="#">Penteado</a> </td> <td> <a href="#">Manicure</a> </td> <td> <a href="#">Maquiagem</a> </td> </tr>
                            <tr> <td> <a href="#">Hidratação</a></td> <td> <a href="#">Pedicure</a> </td> <td> <a href="#">Peeling</a> </td> </tr>
                            <tr> <td> <a href="#">Alisamento</a> </td> <td> <a href="#">Designer de Sobrancelha</a> </td> <td> <a href="#">Limpeza de Pele</a> </td> </tr>
                        </table>   
                    </div> 
                </div>

                <h1 align="center"> Tendências e Dicas</h1>

                <div class="center_left" align="center">
                    <div class="news_content">

                        <a href="../images/Sites/Tendências em Cores de Cabelo para 2017 - Site de Beleza e Moda.html" title=”Cabelos”>
                            <img src="../images/tendencia1.PNG"></a>
                        <a href="../images/Sites/Maquiagem Primavera Vera~o 2017 - Tendências - YouTube.html" title=”Maquiagem”>

                            <img src="../images/tendencia2.PNG" border="0">
                            <br>
                            <a href="../images/Sites/Tendências de Unhas Decoradas para 2017 - Site de Beleza e Moda.html" title=”Unhas”>
                                <img src="../images/tendencia3.PNG" border="0">
                                <img src="../images/corte masculino.jpg" width="165" height="116" border="0">
                                </div>   
                                </div>

                                <h1 align="center"> Patrocinadores </h1>  

                                <div class="news_box" align="center">
                                    <div class="news_content">
                                        <a href="../imagens/Sites/Avon.html" title=”Avon”>
                                            <img src="../images/Avon.jpg" border="0">
                                            <a href="../images/Sites/Rede Natura.html" title=”Natura”>
                                                <img src="../images/natura.jpg" border="0">
                                                <a href="#"></a>
                                                </div>
                                                </div>
                                                </div> 
                                                </div>

                                                <div class="container">
                                                    <div class="center">
                                                        <div class="col-md-6" align="center">

                                                            <div class="software_box">
                                                                <img src="../images/Fotos.png" alt="" title="" />
                                                            </div>
                                                            <br>
                                                            <br>

                                                            <div class="text_box">
                                                                <h1 id="titulo_form">Área do Profissional</h1>

                                                                <tr>
                                                                    <td>
                                                                        <label for="login"> Login: </label>
                                                                    </td>
                                                                    <td align="right">
                                                                        <input type="text" name="login">
                                                                    </td>
                                                                </tr>
                                                                <br />
                                                                <br>
                                                                <tr>
                                                                    <td>
                                                                        <label for="password">Senha: </label>
                                                                    </td>
                                                                    <td align="right">
                                                                        <input type="password" name="pass">
                                                                    </td>
                                                                </tr>
                                                                <div  id="botoes">
                                                                    <input type="submit" value="login" onclick="window.location.href = '../view/cadastro-servico.php'"/>
                                                                    <input type="button" value="cadastro" onclick="window.location.href = '../view/cadastro.php'"/>
                                                                </div>
                                                            </div>                                                                                                                                                                    

                                                            <BR><BR><BR><BR><BR>
                                                            <div class="panel panel-danger">

                                                                <div class="panel-danger" align="center">
                                                                    <h3>Envie o seu comentário, dúvida ou sugestão:</h3>
                                                                </div>
                                                                <div class="panel-footer" align="center">
                                                                    <form action="/pagina-processa-dados-do-form" method="post">
                                                                        <div>
                                                                            <label for="name">Nome:</label>
                                                                            <input type="text" id="name" />
                                                                        </div>
                                                                        <br />
                                                                        <div>
                                                                            <label for="mail">E-mail:</label>
                                                                            <input type="email" id="mail" />
                                                                        </div>
                                                                        <br />
                                                                        <div>
                                                                            <label for="msg">Mensagem:</label>
                                                                            <textarea id="msg"></textarea>
                                                                        </div>
                                                                        <br />
                                                                        <div class="button">
                                                                            <button type="submit">Enviar sua mensagem</button>
                                                                        </div>

                                                                </div>
                                                            </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <h1 id="contador" align="center"> Contador de Acessos</h1>
                                                <div align=center><a href='http://contador.s12.com.br'>
                                                        <img src='http://contador.s12.com.br/img-51Zc329YY4ZZ4dZc-2.gif' border='0' alt='contador free'></a>
                                                    <script type='text/javascript' src='http://contador.s12.com.br/ad.js?id=51Zc329YY4ZZ4dZc'></script>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1"> 
                                                        <a ></a>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
<?php include_once '../public/footer.php' ?>;