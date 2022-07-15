<!DOCTYPE html>
<html lang = "pt-BR">
  <head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie=edge">
    <title> Titulo</title>

    @vite('resources/sass/app.scss')
   <!-- <link rel="stylesheet" href="{{ asset('build/assets/app.1f885711.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.9353cce9.js') }}">-->

  </head>
  <body>
    <div class="container">
      <h1 class="text-primary text-center font-weight-bold">Listagem de Clietes CredEasy</h1>
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Renda</th> 
            <th>profissao</th> 
          </tr>         
        </thead>

        <tbody>
          @foreach ($clientes as $cliente)
            <tr>
              <td>{{ $cliente->nome }}</td>
              <td>{{ $cliente->renda }}</td>
              <td>{{ $cliente->profissao }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <a href="/cliente/cadastro" class="btn btn-primary">Adicionar</a>


     
    </div>
  </body>
  
  <footer class="text-center">
        <p class="copyright">&copy; Copyright CredEasy - 2022</p>
  </footer>
  @vite('resources/js/app.js')
</html>