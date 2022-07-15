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
      <h1 class="text-primary text-center font-weight-bold">Listagem de Empréstimos CredEasy</h1>
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>CPF</th>
            <th>Valor Solicitado</th> 
            <th>Status</th> 
            <th>N° Parcelas</th>
          </tr>         
        </thead>

        <tbody> 
          @foreach ($emprestimos as $emprestimo)
            <tr>
              <td>{{ $emprestimo->cliente_cpf }}</td>
              <td>{{ $emprestimo->valor }}</td>
              <td>{{ $emprestimo->status }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <a href="/emprestimo/solicitar" class="btn btn-primary">Solicitar Empréstimo</a>

    </div>
  </body>
  
  <footer class="text-center">
        <p class="copyright">&copy; Copyright CredEasy - 2022</p>
  </footer>
  @vite('resources/js/app.js')
</html>