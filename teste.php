<?php

$usuario = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

echo "<h3>Confirme suas informações:</h3>";
echo "<p>Nome: ".$usuario."<br></p>";
echo "<p>E-mail: ".$email."<br></p>";
echo "<p>Telefone: ".$telefone."<br></p>";

?>