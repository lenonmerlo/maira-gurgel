<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Defina o e-mail para onde a mensagem será enviada
    $to = "mairamaciel.w1@gmail.com";
    $subject = "Novo contato do site";

    // Crie o conteúdo do e-mail
    $body = "Nome: $nome\n";
    $body .= "Telefone: $telefone\n";
    $body .= "Email: $email\n";
    $body .= "Mensagem: $mensagem\n";

    // Headers do e-mail
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Sua mensagem foi enviada com sucesso!";
    } else {
        echo "Houve um erro ao enviar sua mensagem. Tente novamente.";
    }
}
