<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

// Validação de dados (opcional)

// Configurando o destinatário do email
$destinatario = "guimaraescaldas4@gmail.com";

// Criando a mensagem do email
$mensagem = "Nome: $nome\nEmail: $email";

// Enviando o email
mail($destinatario, "Dados do Formulário", $mensagem);

// Redirecionando o usuário para uma página de confirmação (opcional)

?>
