<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $cel = $_POST["cel"];
  $estado = $_POST["estado"];
  $textarea = $POST["mensagem"]

  $para = "isabelydjoliz@gmail.com";
  $assunto = "Mensagem do formulário de contato do site";
  $mensagem_email = "Nome: $nome\n";
  $mensagem_email = "Email: $email\n";
  $mensagem_email = "cel: $cel\n";
  $mensagem_email = "estado: $estado\n";
  $mensagem_email = "mensagem:\n$mensagem";

  mail($para, $assunto, $mensagem_email);

  // Redirecione o usuário de volta à página de contato ou a uma página de confirmação.
  header("Location: contato.html");
  exit;
}
?>