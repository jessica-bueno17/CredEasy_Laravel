<!DOCTYPE html> 
<html lang="pt-br"> 

    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1">  -->
        
        <title>CredEasy | Solicitação de Empréstimos</title>
        @vite('resources/sass/app.scss')

        <!--<link rel="stylesheet" href="{{ asset('build/assets/app.1f885711.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/app.9353cce9.js') }}">-->
        
    </head>

    <body>
        
        <main> <!-- ***** Formulário para cadastro do Cliente ***** -->
            <div class="jumbotron">
                  <h1 class="text-primary text-center font-weight-bold">Empréstimos CredEasy</h1>
                </div>
            <div class="container col-md-6 bg-light">

                <form action="/emprestimo/salvar" method="post" autocomplete="off">
                @csrf
                    <!-- **** Informções Básicas **** -->
                     <legend class="text-center">Informações para Solicitação</legend>

                     <fieldset>

                        <div>
                            <label class="form-label" for="valorEmprestimo">Valor Desejado:</label>         
                            <input class="form-control" type="text" name="valorEmprestimo" id="valorEmprestimo" placeholder="Valor" required>                     
                        </div> 

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="numeroParcelas">Número de Parcelas:</label>
                                <input class="form-control" type="text" name="numeroParcelas" id="numeroParcelas" placeholder="N° parcelas" 
                                data-tipo="numeroParcelas" required>
                            </div>
                        </div>
    
                    </fieldset>
    
                    <button type="submit" class="btn btn-primary m-3">Enviar</button>

                </form>
                
            </div>
        </main>
    </body>

    <footer class="text-center">
        <p class="copyright">&copy; Copyright CredEasy - 2022</p>
    </footer>
    @vite('resources/js/app.js')
</html>