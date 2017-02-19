<?php
  if(isset($_POST['submit'])) {
    $to = "agendamento@castellemodontologia.com";
    $location_field = $_POST['location'];
    $type_field = $_POST['type'];
    $name_field = $_POST['name'];
    $email_field = $_POST['email'];
    $client_field = $_POST['client'];
    $phone_field = $_POST['phone'];
    $message = $_POST['message'];
    $headers = "Content-Type: text/plain; charset=UTF-8";

    $subject = "agendamento $name_field / $location_field / $type_field";
    $body = "Nome: $name_field\nJá é cliente: $client_field\nE-Mail: $email_field\nTelefone: $phone_field \nLocal: $location_field\nTipo de consulta: $type_field\n\n Mensagem:\n $message";

    echo "Email foi enviado para $to!";
    mail($to, $subject, $body, $headers);
  } else {
    echo "Problema ao enviar E-mail para $to!";
  }
  header("Location: http://www.castellemodontologia.com");
?>
