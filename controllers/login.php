<?php

session_start();

$ra = '123456789';

$senha = 'Pedro';

$inputRA = filter_input(INPUT_POST, 'number-ra');
$inpuPassword = filter_input(INPUT_POST, 'password');

if($inputRA && $inpuPassword) {
  if($inputRA == $ra && $inpuPassword == $senha) {
    $_SESSION['ra'] = $inputRA;
    header("Location: http://localhost/mapa poo/view/alunos.php");
    exit;
  }
}

header("Location: http://localhost/mapa poo/");
exit;

// var_dump($ra, $password);




?>