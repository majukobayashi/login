<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous" defer></script>
</head>
<body>
    

<div class="container mt-2">
    <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <div class="alert alert-success">
            <h4 class="text-center">
                Dashbord do sistema 
                <?php
                      echo" <h4 class='alert-heading mt-3 mr-5 ml-5 text-center'>Bem vindo  ". $_SESSION['usuario'] . "! </h4>";
                 ?>
            </h4>
            <a href="response.php"  class="btn btn-outline-dark btn-block mt-4 mb-4">Voltar para pagina</a>
            <a href="logout.php"  class="btn btn-outline-dark btn-block mt-4 mb-4">Sair do sistema</a>
        </div>
    </div>
</div>
</body>
</html>