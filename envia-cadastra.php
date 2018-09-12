<?php


    // primeiro guarda tudo no csv
    $content = "nome: ".$_POST['nome'].", ";
    $content .= "email: ".$_POST['email'].", ";
    $content .= "mensagem: ".$_POST['mensagem']."\n";
    $file = fopen('cadastros.csv','a'); // esse arquivo precisa existir
    fwrite($file, $content);
    fclose($file);
 
    $email_to = "email@site.com";
    $email_subject = "Mensagem do site";
     
 
    $nome = $_POST['nome']; // required
    $email_from = $_POST['email']; // required
    $mensagem = $_POST['mensagem']; // required
 
    $email_message = "Nome ".$nome."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Mensagem: ".$mensagem."\n";
 
  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);
 
	}
?>
