<?php
include("data.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gagá</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    
    <!--<script>
        $(document).ready(function(){
            loadTabela();
        });
    </script>
    -->
</head>
<body>
    
    <div class="menu-aberto">
        <a onclick="fecharLogin(),abrirMenu()" class="links" href="#inicio">início</a>
        <a  onclick="fecharLogin(),abrirMenu()" href="#participantes">participantes</a>
        <a  onclick="fecharLogin(),abrirMenu()" href="#gametag">gametags</a>
        <a  onclick="fecharLogin(),abrirMenu()" href="#arquivos">arquivos</a>
        <a  onclick="abrirLogin(),abrirMenu()" href="#login">Login</a> 
    </div>
    <div class="fixed">
        <div class="header">
            <span>SÓ O GAGÁ SALVA</span>
        </div>
        <div class="menu">
            <div onclick="abrirMenu()" class="sub-menu">
                <span>menu</span>
            </div>
            <div class="mini-menu">
                <a class="foto" onclick="fecharLogin()" href="#foto">
                    <img src="icones/logo.png"alt="#"width=61 height=40>
                </a>
                <a onclick="fecharLogin()" class="ativo" id="link" href="#inicio">início</a>
                <a class="ativo" onclick="fecharLogin()" href="#participantes">participantes</a>
                <a class="ativo" onclick="fecharLogin()" href="#gametag">gametags</a>
                <a class="ativo" onclick="fecharLogin()" href="#arquivos">arquivos</a>
            
                <a class="login" onclick="abrirLogin()" href="#login">Login</a>
            </div>
        </div>
    </div>
       
    <div id='foto'class="fotos">
        <div class="fotos-contente">
            <div class="carousel">
                <div>
                    <img src="https://i.pinimg.com/736x/f1/5b/fa/f15bfaf85305a6e13006c3ba5663c404.jpg" alt="">
                </div>
                <div>
                    <img src="https://s1.static.brasilescola.uol.com.br/be/conteudo/images/imagem-em-lente-convexa.jpg" alt="">
                </div>
                <div>
                    <img src="https://marketingcomcafe.com.br/wp-content/uploads/2017/12/banco-imagens-gratis.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="inicio" id="inicio">
        <div class="inicio-contente">
            <h1>Bem-vindos ou site SÓ O GAGÁ SALVA</h1>
            <p>REGRAS DO GRUPO:</p>
            <P>Art. 1- O grupo foi feito para criar desavenças, intrigas e  destruir a auto-estima dos integrantes;</P>
            <p>Art. 2- Sempre que possível colocar em xeque a masculinidade dos participantes;</p>
            <p>Art. 3- Execrar participantes com posições políticas que não sejam de acordo com a maioria do grupo;</p>
            <p>Art. 4- Aqui não existe democracia! Aqui o golpe rola solto. A injustiça é permitida;</p>
            <p>Art. 5- Também é permitido humilhar , ridicularizar, xingar e se utilizar o pior da língua;</p>
        </div>    
            
    </div>

    <div id="participantes" class="participantes">
        <h1>Participantes</h1>
        <div class="participantes-contente">
            <div onclick="usuario(0)" class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
            <div class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
            <div class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
            <div class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
            <div class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
            <div class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
            <div class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
            <div class="participante">
                <img src="fotos mini/adina.jpg" alt="#">
                <h2>nome</h2>
            </div>
        </div>
        <div onclick="fechar()" id='teste' class="teste">
            <div class="testeContent">
                <div class="fechar"><button onclick="fechar()">fechar</button></div>
                <div class="telaUser">
                    <img id="imgUser" class="imgUser" src="">
                    <p id="pUser"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="gametags" id="gametag">

        <div id="Itens" class="conteinerGametag">  
        <input type="text" id="txtBusca" placeholder="Digite aqui um valor para pesquisar..."/>  
            <div id="Itens" class="tag-contente">
                <div class="tag">
                    <li id="link1" class="tag-nome">testando</li>
                    <span><img data-clipboard-target="#link1" class="copiar btn"src="icones/copiarRed.jpg" alt="#"></span>
                </div>
                <div class="tag">
                    <li id="link2" class="tag-nome">testandugyuoo</li>
                    <span><img data-clipboard-target="#link2" class="copiar btn"src="icones/copiarRed.jpg" alt="#"></span>
                </div>
                <div class="tag">
                    <li id="link1" class="tag-nome">testando</li>
                    <span><img data-clipboard-target="#link1" class="copiar btn"src="icones/copiarRed.jpg" alt="#"></span>
                </div>
                <div class="tag">
                    <li id="link2" class="tag-nome">testandugyuoo</li>
                    <span><img data-clipboard-target="#link2" class="copiar btn"src="icones/copiarRed.jpg" alt="#"></span>
                </div>
            </div>
        </div>
    </div> 
    <div id='arquivos'class="arquivos">
        <div class="arquivos-content">
            <h1>Arquivos</h1>
        <table id="tabela">
            <tr>
                <th class="cabecalho">Nome</th>
                <th class="cabecalho">Tipo</th>
                <th class="cabecalho">Tamanho(Bytes)</th>
                <th class="cabecalho">Data de modificação</th>
            </tr>    
        </table>
        </div>
    </div>
       <!-- <div id='fotos'class="fotos-contente">
            <div class="fotos">
                <div class="carousel">
                        <div>
                            <img src="https://www.artesanatototal.com/wp-content/uploads/2019/03/Imagens-para-papel-de-parede14.jpg" alt="">
                        </div>
                        <div>
                            <img src="https://i.pinimg.com/736x/f1/5b/fa/f15bfaf85305a6e13006c3ba5663c404.jpg" alt="">
                        </div>
                        <div>
                            <img src="https://s1.static.brasilescola.uol.com.br/be/conteudo/images/imagem-em-lente-convexa.jpg" alt="">
                        </div>
                        <div>
                            <img src="https://marketingcomcafe.com.br/wp-content/uploads/2017/12/banco-imagens-gratis.png" alt="">
                        </div>
                </div>
            </div>
        </div>  -->       

    <div id="login" class="loginn" >
        <div class="login-contente">
            <h2 class="tituloLogin">Login</h2>
        <form action="caminho.php" method="post">
            <input class="inputs" id="login-usuario" name="usuario" placeholder="Usuário" type="text" required>
            <div class="inputSenha">
                <input class="inputs" id="login-senha" name="senha" placeholder="Senha" type="password" required>
                <input type="checkbox" name="mostar" id="olho" onchange="verSenha()">
            </div>
            <input class="inputs" id="login-submit" type="submit" value="Entrar">
        </form>
        <p>Usuário novo click <a onclick="mostrarCadastro()" href="#login">aqui</a></p>
        </div>
        <div class="userNovo">
            <h2 class="tituloLogin">Cadastro</h2>
            <form action="userNovo.php" method="post">
                <input class="inputs" type="text" id="novo-usuario" name="novo-usuario" placeholder="Defina seu user" required>
                <input class="inputs" type="text" id="novo-senha" name="novo-senha" placeholder="Defina sua senha" required>
                <input class="inputs" type="submit" id="novo-submit" name="novo-submit" value="Salvar">
            </form>
        </div>
        <div class="recado">
            <p>Faça <a onclick="mostrarLogin()" href="#login">login</a> para adicionar fotos e arquivos na página</p>
        </div>
    </div>

<script src="JS/script.js"></script>
<script src="JS/users.js"></script>
   
</body>
</html>