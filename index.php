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
     <div class="fixed">
        <div class="header">
        
            <span>SÓ O GAGÁ SALVA</span>
        <!--  <div class="login">
                <a href="#">Log in</a>
            </div>-->
        </div>
            <div class="menu">
                <div class="mini-menu">
                    <a class="foto" onclick="fecharLogin()" href="#foto">
                        <img src="icones/logo.png"alt="#"width=61 height=40>
                    </a>
                    <a onclick="fecharLogin()" class="ativo" id="link" href="#inicio">início</a>
                    <a class="ativo" onclick="fecharLogin()" href="#participantes">participantes</a>
                    <a class="ativo" onclick="fecharLogin()" href="#gametag">gametags</a>
                    <a class="ativo" onclick="fecharLogin()" href="#arquivos">arquivos</a>
                    <!--<a class="ativo" href="#podcast">podcast</a>-->
                    <a class="ativo" onclick="fecharLogin()" href="#fotos">fotos</a>
                    <!--<a class="ativo" href="#">videos</a>--> 
                    <a class="login" onclick="abrirLogin()" href="#login">Login</a>
                </div>
            </div>
    </div>

    <div class="main">
        <section class="fotoIntegrantes" id="foto">
        <div class="conteinerfoto"><a href="#inicio"><img src="fotos mini/imagem-dos-integrantes.jpg" alt=""></a>
                
            </div> 
        </section>
    <section class="inicio" id="inicio">
            
                <h1>Bem-vindos ou site exclusivo SÓ O GAGÁ SALVA</h1>
                <pre>    
            REGRAS DO GRUPO:
            
            Art. 1- O grupo foi feito para criar desavenças, intrigas e  destruir a auto-estima dos integrantes;
            
            Art. 2- Sempre que possível colocar em xeque a masculinidade dos participantes;
            
            Art. 3- Execrar participantes com posições políticas que não sejam de acordo com a maioria do grupo;
            
            Art. 4- Aqui não existe democracia! Aqui o golpe rola solto. A injustiça é permitida;
            
            Art. 5- Também é permitido humilhar , ridicularizar, xingar e se utilizar o pior da língua;</pre>
            
    </section>
    <section class="participantessection" id="participantes">
        <div class="conteiner">
            <h1>Participantes</h1>
            <div class="conteinerparticipantes">
                <div class="miniconteiner">
                    <div class="linha"> 
                        <div onclick="usuario(0)" class="usuario">
                            <img class="minifoto" src="fotos mini/adina.jpg" alt="Adina">
                            <h2>Adinaldo Pimentel</h2>
                        </div>
                        <div id='user1'onclick="usuario(1)" class="usuario">
                            <img class="minifoto" src="fotos mini/afonso.jpg" alt="Afonso">
                            <h2>Afonso Lobato</h2>
                        </div>
                        <div onclick="usuario(2)"class="usuario">
                            <img class="minifoto" src="fotos mini/gustavo.jpg" alt="Gustavo">
                            <h2>Gustavo Negrão</h2>
                        </div> 
                    </div>
                    <div class="linha">
                            <div onclick="usuario(3)"class="usuario">
                                <img class="minifoto" src="fotos mini/israel.jpg" alt="Israel">
                                <h2>Israel Costa</h2>
                            </div>
                            <div onclick="usuario(4)"class="usuario">
                                <img class="minifoto" src="fotos mini/pedro.jpg" alt="Pedro">
                                <h2>Pedro Valério</h2>
                            </div>
                            <div onclick="usuario(5)"class="usuario">
                                <img class="minifoto" src="fotos mini/jonhwick2.jpg" alt="jonhwick">
                                <h2>Jonh Wick</h2>
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
            </div>
        </div>
    </section>
        <div class="gametagfix">     
            <div class="gametags" id="gametag">
                
                    <img class="warzone"src="https://www.callofduty.com/content/dam/atvi/callofduty/cod-touchui/blog/hero/mw-wz/WZ-Season-Three-Announce-TOUT.jpg" alt="#">
                    <div id="Itens" class="conteinerGametag">  

                    <input type="text" id="txtBusca" placeholder="Digite aqui um valor para pesquisar..."/>

                        <div class="caixapreta">
                            <div class="metadecp">
                                <div class="itemtag"> <li class="tag" id="link1">Strutsan</li><button class="btn" data-clipboard-target="#link1">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link2">l3v3rc49r1c10u5</li><button class="btn" data-clipboard-target="#link2">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link3">W16u7S7rly</li><button class="btn" data-clipboard-target="#link3">
                                <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                            </button></div>
                            <div class="itemtag1"> <li class="tag" id="link4">Wigglychenko</li><button class="btn" data-clipboard-target="#link4">
                                <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                            </button></div>
                                <div class="itemtag"> <li class="tag" id="link5">Overwrough</li><button class="btn" data-clipboard-target="#link5">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link6">s7ru7w166ly</li><button class="btn" data-clipboard-target="#link6">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link7">VanChemical</li><button class="btn" data-clipboard-target="#link7">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link8">m3l0nch3m1c4l</li><button class="btn" data-clipboard-target="#link8">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link9">NoxiousMelon</li><button class="btn" data-clipboard-target="#link9">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link10">MelonTheProf</li><button class="btn" data-clipboard-target="#link10">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                            </div>
                            <div class="metadecp">
                                <div class="itemtag1"> <li class="tag" id="link11">lCh30nM3l4l</li><button class="btn" data-clipboard-target="#link11">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link12">VorberGhus</li><button class="btn" data-clipboard-target="#link12">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link13">Clevoracious</li><button class="btn" data-clipboard-target="#link13">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link14">Bernboroughkau</li><button class="btn" data-clipboard-target="#link14">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link15">HellishVoracious</li><button class="btn" data-clipboard-target="#link15">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link16">c49r1c10u5</li><button class="btn" data-clipboard-target="#link16">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link17">l3v3rc49r</li><button class="btn" data-clipboard-target="#link17">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link18">V0r6hB3ru5</li><button class="btn" data-clipboard-target="#link18">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag1"> <li class="tag" id="link19">TheShaggyRitzy</li><button class="btn" data-clipboard-target="#link19">
                                    <img class="copiar" src="icones/copiar-texto.png" alt="Copy to clipboard">
                                </button></div>
                                <div class="itemtag"> <li class="tag" id="link20">fhrughu</li><button class="btn" data-clipboard-target="#link20">
                                    <img class="copiar" src="icones/copiarRed.jpg" alt="Copy to clipboard">
                                </button></div>
                            </div>
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
        <div id='fotos'class="fotos-contente">
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
        </div>         
    </div>
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

   <!-- <div class="rodape">
        rodape
    </div>-->
   
<script src="JS/script.js"></script>
<script src="JS/users.js"></script>
   
</body>
</html>