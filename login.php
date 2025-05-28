<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous" defer></script>
</head>
<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5 login">
    <div class="card shadow-sm p-0  ">
      
      <header class=" text-white p-4 text-center fundopreto">
        <h2>Página de Login</h2>
      </header>

      <div class="p-4">
        <form>
          <div class="form-group">
            <label for="username">Nome de Usuário</label>
            <input type="text" class="form-control" id="username" placeholder="Seu nome de usuário">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-outline-dark btn-block">Entrar</button>
        </form>
      </div>

      <footer class=" text-white p-3 text-center fundopreto">
        Todos os direitos reservados.
      </footer>

    </div>
  </div>

</body>
</html>
