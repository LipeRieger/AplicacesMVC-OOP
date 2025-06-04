<!-- Camada MODEL: Esta página manipula os dados !-->
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = []; 
}

if (!empty($nome) && !empty($email)){

    $_SESSION['usuario'][] = ['nome' => $nome, 'email' => $email];
    $usuario = $_SESSION['usuario'];
}
?>