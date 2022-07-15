<!DOCTYPE html> <!--ultima versão-->
<html lang="pt-br"> <!--lingua-->

    <head>
        <meta charset="UTF-8"> <!--dicionário-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CredEasy | Bem-Vindo</title> <!--titulo no navegador-->
    <!--“rel”significa “relationship” (relacionamento) e é usada para indicar qual a relação do link em questão com a página
    type” indica o tipo de formato MIME do arquivo que está sendo referenciado
    “href” indica o local no servidor do arquivo referenciado.
    -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Special+Elite&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />

        <link rel="stylesheet" type="text/css" href="css/base/base.css"> <!--limpa configuração do navegador-->
        <link rel="stylesheet" type="text/css" href="css/Home.css"> <!-- referencia onde estão as configurações do css da página-->
        <link rel="icon" type="image/x-icon" href="img/CredEasy-Oficial-Trans.ico"> <!--ícone que aparece no navegador-->
        <!--@vite('resources/sass/app.scss')
        @vite('resources/js/app.js')-->
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="./home.html"><img id="Logo" src="img/CredEasy-Oficial-Trans.png"></a>
                            
                    <button class="navbar-toggler p-1 m-1" style="color:var(--cor-verde);" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-link-hover">
                                <a class="nav-link active navbar-texto" aria-current="page" href="./home.html">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-texto" href="./credEasy.html">A CredEasy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-texto" href="./login.html">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-texto" href="./produtos.html">Empréstimos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-texto" href="./faleConosco.html">Fale Conosco</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
       
        <main>

            <section id="animacao" class="container">
                <article class="row align-items-center p-1">
                    <div class=" col texto-corpo">
                        <h1 class="typing-animation">Sem burocracia</h1>
                        <p>Soluções simples, seguras e 100% digitais para você fazer tudo diretamente pelo celular.</p>
                    </div>
                    <figure class="col-6">
                        <img class="imagem-corpo" src="img/cellAzul.svg">  
                    </figure>
                </article> 

                <article class="row align-items-center">
                    <figure class="col-6">
                        <img class="imagem-corpo" src="img/roboVerde.svg">
                    </figure>
                    <div class=" col texto-corpo">
                        <h1 class="typing-animation">O fim da complexidade</h1>
                        <p>Para quem sabe que tecnologia e design são melhores do que agências e papelada.</p>
                    </div>
                </article>

                <article class="row align-items-center"> 
                    <div class="col texto-corpo">
                        <h1 class="typing-animation">Zero Taxas</h1>
                        <p>Burocracia custa caro. Somos eficientes para você não ter que pagar tarifas.</p>
                    </div>
                    <figure class="col-6">
                        <img class="imagem-corpo" src="img/Tax-bro.svg">
                    </figure>
                </article>

            </section>    
            
            <div class="hr"></div>

            <!-- ************************************************ -->

            <!-- <section class="container pb-4" id="cards">
                <div class="row d-flex justify-content-center">

                    <div class="card text-center cor-card p-0 m-0 col-6 justify-content-center">
                        <img src="../img/money.svg" class="card-img-top" alt="pilha de dinheiro">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Precisando de Dinheiro?</h5>
                            <p class="card-text pb-2 lh-base">Saiba como a CredEasy pode te ajudar. Faça seu cadastro e aproveite nossos serviços.</p>
                            <a href="../html/cadastro.html" class="btn botao-cor-especial">Clique Aqui!</a>
                        </div>
                    </div>

                    <div class="card text-center cor-card p-0 m-0 col-6 justify-content-center">
                        <img src="../img/emprestimoAzul.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Empréstimos</h5>
                            <p class="card-text  pb-2 lh-base">Conheça a CredEasy e seus Produtos.</p>
                              <a href="../html/produtos.html" class="btn botao-cor-especial ">Acesse aqui!</a>
                        </div>
                    </div>
                </div>
            </section> -->

            <div class="hr"></div>
            
            <!-- ****************  Mais Pedidos ******************** -->
            <section class="container pb-3" id="card-mais-pedidos">
            
                <h2 class="text-left fw-bolder pb-3 cor-mais-pedidos">Os mais pedidos...</h2>
                    
                <div class="row justify-content-center">   
                    
                    <div class="card text-center cor-card-mais-pedidos p-0 m-4 col-4" style="width: 18rem;">
                        <img src="img/faturaAzulClara.svg" class="card-img-top imagem-corpo" alt="...">
                        <div class="card-body">
                            <a href="../login.html" class="link-mais-pedidos"><p class="card-text fw-bolder">Segunda via de boleto</p></a>
                        </div>
                    </div>

                    <div class="card text-center cor-card-mais-pedidos p-0 m-4 col-4" style="width: 18rem;">
                        <img src="img/segurancaAzul.svg" class="card-img-top imagem-corpo" alt="...">
                        <div class="card-body">
                            <a href="#" class="link-mais-pedidos"><p class="card-text fw-bolder">LGPD E Privacidade</p></a>
                        </div>
                    </div>

                    <div class="card text-center cor-card-mais-pedidos p-0 m-4 col-4" style="width: 18rem;">
                        <img src="img/openAzulClaro.svg" class="card-img-top imagem-corpo" alt="...">
                        <div class="card-body">
                            <a href="#" class="link-mais-pedidos"><p class="card-text fw-bolder">Open Finance</p></a>
                        </div>
                    </div>
                </div> 
            </section>

            <!--
            <div id="icones">
                    <span class="material-symbols-sharp" style="color: #fefefe; width: 15rem;">
                        logout
                    </span>

                    <span class="material-symbols-sharp" style="color: #fefefe; width: 15rem;">
                        login
                    </span>

                    <span class="material-symbols-sharp" style="color: #fefefe; width: 15rem;">
                        account_circle_full
                    </span>

                    <span class="material-symbols-sharp" style="color: #fefefe; width: 15rem;">
                        supervisor_account
                    </span>

                    <span class="material-symbols-sharp" style="color: #fefefe; width: 15rem;">
                        home
                    </span>

                    <span class="material-symbols-sharp" style="color: #fefefe; width: 15rem;">
                        query_stats
                    </span>

                    <span class="material-symbols-sharp" style="color: #fefefe; width: 15rem;">
                        settings
                    </span>
            </div>-->


        </main> 
       

        <footer class="container">
            <div class="row p-0">
                <div class="col m-4">
                    <p>CENTRAL DE ATENDIMENTO</p>
                    <p>Capitais e regiões metropolitanas: 4000 0000</p>
                    <p>Demais localidades: 0800 000 0000</p>
                    <p>SAC 24 horas: 0800 000 0000</p>
                    <p>Ouvidoria: 0800 000 0000 - ouvidoriacredeasy.com.br</p>
                    <p>Deficientes auditivos ou de fala: 0800 000 0000</p>
                </div>
        
                <div class="col m-4">
                    <p>NOSSAS REDES SOCIAIS!</p>
                    <div class="Links-Redes-Sociais">
                        <a target="_blank"  href="https://www.facebook.com/"><img src="img/iconFacebook.svg" alt="facebook"></a>
                        <a target="_blank"  href="https://www.instagram.com/"><img src="img/iconInstagram.svg" alt="instagram"></a>
                        <a target="_blank"  href="https://www.linkedin.com/"><img src="img/iconsLinkedin.svg" alt="Linkedin"></a>
                    </div>
                </div>
                
                <div class="col m-4">
                    <img id="LogoRodape" src="img/CredEasy-Trans.png">
                    <p class="copyright">&copy; Copyright CredEasy - 2022</p>
                </div>
            </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>