<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
  
        if ($_POST['usuario'] === 'admin' && $_POST['senha'] === 'senha') {
            $_SESSION['usuario'] = $_POST['usuario'];
        } else {
            header('Location: login.php?return=opa+deu+merda');
            exit;
        }
    } else {
      
        header('Location: login.php?return=sem+dados');
        exit;
    }
}
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
<body class="bg-light">

  <div class="container d-flex justify-content-center  min-vh-100 mt-5">

  <div class="alert alert-success " role="alert">
    <?php
      echo" <h4 class='alert-heading mt-3 mr-5 ml-5'>Seja bem vindo ao sistema ". $_SESSION['usuario'] . "! </h4>";
    ?>
    <a href="dash.php"  class="btn btn-outline-dark btn-block mt-4 mb-4">Ir para a proxima pagina</a>
    <a href="logout.php"  class="btn btn-outline-dark btn-block mt-4 mb-4">Sair do sistema</a>

</div>
  </div>

</body>
</html>