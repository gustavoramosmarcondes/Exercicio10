<?php
$nome = $email = "";

if(isset($_COOKIE['nome'])){
    $nome = htmlspecialchars($_COOKIE['nome']);
}
if(isset($_COOKIE['email'])){
    $email = htmlspecialchars($_COOKIE['email']);
}


echo"<p>Olá: </p>" . $nome . "<p> O teu Email é: </p>" . $email;

?>