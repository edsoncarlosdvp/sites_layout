<?php
   if(isset($_POST['enviar'])){
      // CAPTURANDO DADOS DO FORMULÁRIO
      $nome      = utf8_decode(trim(ucwords(preg_replace('/\s\s+/', ' ',($_POST['nome'])))));
      $email     = utf8_decode(trim(strtolower(preg_replace('/\s\s+/', ' ',($_POST['email'])))));
      $telefone  = utf8_decode(trim(preg_replace('/\s\s+/', ' ',($_POST['telefone']))));
      $cidade    = utf8_decode(trim(preg_replace('/\s\s+/', ' ',($_POST['cidade']))));
      $assunto   = utf8_decode(trim(preg_replace('/\s\s+/', ' ',($_POST['assunto']))));
      $mensagem  = utf8_decode(trim(preg_replace('/\s\s+/', ' ',("<pre>".$_POST['mensagem']."</pre>"))));

      // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
      require_once "_phpmailer/class.phpmailer.php";
      require_once "_phpmailer/class.smtp.php";
      //require_once "_phpmailer/class.pop3.php";
      //require_once "_phpmailer/smtp.php";
      // Inicia a classe PHPMailer
      $mail = new PHPMailer();
      // Define os dados do servidor e tipo de conexão
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->SMTPDebug = 3;
      $mail->CharSet = "UTF-8";
      $mail->setLanguage('br');
      $mail->isSMTP(); // Define que a mensagem será SMTP
      $mail->Host = "contato@equipenovainfo.com.br"; // Endereço do servidor SMTP
      $mail->Username = 'contato@equipenovainfo.com.br'; // Usuário do servidor SMTP
      $mail->Password = '2013eni'; // Senha do servidor SMTP
      $mail->Port = 465; // SMTP 465 - IMAP 993 - 587
      $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
      $mail->SMTPSecure = '';
      $mail->Priority = 1; 
      // Define o remetente
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->From = $email; // E-mail do usuário
      $mail->FromName = $nome; // Seu nome
      // Define os destinatário(s)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->AddAddress('edsoncarlos@ymail.com');
      //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
      //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
      // Define os dados técnicos da Mensagem
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
      //  $mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
      // Define a mensagem (Texto e Assunto)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->Subject = $destinatario = $nome; // Assunto da mensagem
      //Read an HTML message body from an external file, convert referenced images to embedded,
      //convert HTML into a basic plain-text alternative body
      // $mail->msgHTML(FILE_USE_INCLUDE_PATH('contents.html', 1));
      // CORPO DO EMAIL
      $mail->Body = "<h4><p>Nome: {$nome}.<br>Email: {$email}.<br>Cidade: {$cidade}.<br>Assunto: {$assunto}.<br>Mensagem: {$mensagem}</p></h4>";
      $mail->AltBody = "Nome: $nome." . "\n" . "Email: $email." . "Cidade: $cidade." . "\n" . "Assunto: $assunto."."Mensagem: $mensagem.";
      // Define os anexos (opcional)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
      // Envia o e-mail
      $enviado = $mail->Send();
      // Limpa os destinatários e os anexos
      $mail->ClearAllRecipients();
      $mail->ClearAttachments();
      // FIM DO ENVIO DE EMAIL
   }
?>