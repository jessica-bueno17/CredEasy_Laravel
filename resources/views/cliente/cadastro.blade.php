<!DOCTYPE html> 
<html lang="pt-br"> 

    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1">  -->
        
        <title>CredEasy | Cadastro de Cliente</title>
        @vite('resources/sass/app.scss')

        <!--<link rel="stylesheet" href="{{ asset('build/assets/app.1f885711.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/app.9353cce9.js') }}">-->
        
    </head>

    <body>
        
        <main> <!-- ***** Formulário para cadastro do Cliente ***** -->
            <div class="jumbotron">
                  <h1 class="text-primary text-center font-weight-bold">Cadastro CredEasy</h1>
                </div>
            <div class="container col-md-6 bg-light">

                <form action="/cliente/salvar" method="post" autocomplete="off">
                @csrf
                    <!-- **** Informções Básicas **** -->
                     <legend class="text-center">Informações Básicas</legend>

                     <fieldset>

                        <div>
                            <label class="form-label" for="nome">Nome e Sobrenome:</label>         
                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome"
                            pattern="^(?=.*[a-z]).{5,255}$" required>                     
                        </div> 

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="email">Email:</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="seuemail@dominio.com" 
                                data-tipo="email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="senha">Senha:</label>
                                <input class="form-control" type="password" name="senha" id="senha" data-tipo="senha"
                                placeholder="********" pattern="^(?=.*[a-z])(?=.*[A-Z]).{6,12}$" required>
                            
                            </div>
                        </div>
    

                    </fieldset>

                    <!-- **** Informações Pessoais ****-->
                    <legend class="text-center">Informações Pessoais</legend>

                    <fieldset>
                        <div>
                            <label class="form-label" for="cpf">CPF:</label>
                            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" 
                            data-tipo="cpf" pattern="[\d]{3}.?[\d]{3}.?[\d]{3}-?[\d]{2}" maxlength="11" required>
                        </div>

                        <div>
                            <label class="form-label" for="telefone">Celular:</label>
                            <input class="form-control" type="tel" name="numeroTelefone" id="telefone" maxlength="15" placeholder="(xx) xxxxx-xxxx"
                            data-tipo="telefone" required>
                        </div>

                        <div>
                            <label class="form-label" for="profissao">Profissão:</label>
                            <input class="form-control" type="text" name="profissao" id="profissao" placeholder="Profissão" 
                            data-tipo="profissao" required>
                        </div>

                        <div>
                            <label class="form-label" for="renda">Renda:</label>
                            <input class="form-control" type="text" name="renda" id="renda" data-tipo="renda" placeholder="Renda" required>
                        </div>
                        
                        <div>
                            <label class="form-label" for="endereco">Endereço:</label>
                            <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereço"
                            data-tipo="cidade" required>

                        </div>

                    </fieldset>

                    <button type="submit" class="btn btn-primary m-3">Criar Cadastro</button>

                </form>
                
                <div class="text-center">
                        Já Sou Cliente CredEasy. <a href="login.html">Fazer login.</a>
                </div>
            </div>
        </main>
    </body>

    <footer class="text-center">
        <p class="copyright">&copy; Copyright CredEasy - 2022</p>
    </footer>
    @vite('resources/js/app.js')
</html>