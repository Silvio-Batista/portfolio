<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['texto']);
}

$to = "bilviosatista@gmail.com";
$subject = "Formulário - SilTech";
$body = "Nome: ".$nome."\n".
        "Email:".$email."\n".
        "Mensagem:". $mensagem;
$header = "From: teste@teste.com\n Reply-To: $email\nX=Mailer:PHP/" . phpversion();

if (mail($to, $assunto, $corpo, $header)) {
    echo "Email enviado com sucesso";
} else {
    echo "Houve um erro no envio do email";
}
