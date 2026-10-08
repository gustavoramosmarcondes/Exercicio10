<?php
$nome = trim($_POST['nome']);
$email = filter_var($_POST['email']);

if(empty($nome) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "
    <script>
        alert('Erro: Preencha todos os campos corretamente');
        window.location.href = 'formulario.html';
    </script>";
    exit;
}

setcookie('nome', $nome, time() + 3600);
setcookie('email', $email, time() + 3600);

header('location: exibir_exerci02.php');
exit;
?>