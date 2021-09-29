<?php 
session_start();

if($_SESSION['ra'] == "200066195"){
    header("Location: http://localhost/200066195/view/alunos.php");
  exit; 
};
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eCursos - Console de Gerenciamento </title>
    </head>
    <body>
        <form class="form-signin" action="./controllers/login.php" method="POST">
            <h1>eCursos - Console de Gerenciamento</h1>
            <h3>Login:</h3>
            <label for="number-ra" class="sr-only">RA</label>
            <input type="text" name="number-ra" id="number-ra" class="form-control" placeholder="RA" required autofocus>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="mt-3 form-control" placeholder="Senha" required>
            <button class="mt-4 btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </body>
</html>