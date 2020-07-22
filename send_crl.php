<script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
<script src="js/sweetalert2@9.js"></script>

<style>
   body{
      background-color: #00000005 !important;
      font-size: 12pt !important;
   }
</style>
<?php
   require_once ("vendor/autoload.php");

   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;

   // CAPTURANDO DADOS DO FORMULÁRIO ADD OS ISSET DO POST
   $nome      = trim(ucwords(preg_replace('/\s\s+/', ' ',($_POST['nome-curriculo']))));
   $eemail     = trim(strtolower(preg_replace('/\s\s+/', ' ',($_POST['email-curriculo']))));
   $telefone  = trim(preg_replace('/\s\s+/', ' ',($_POST['telefone-curriculo'])));
   $cidade    = trim(preg_replace('/\s\s+/', ' ',($_POST['cidade-curriculo'])));
   $assunto   = trim(preg_replace('/\s\s+/', ' ',($_POST['assunto-curriculo'])));
   $mensagem  = trim(preg_replace('/\s\s+/', ' ',($_POST['mensagem-curriculo'])));
   $ip        = $_SERVER['REMOTE_ADDR'];
   $navegador = $_SERVER['HTTP_USER_AGENT'];

   $files = $_FILES["file"];
   $file = $files;

   try{
   // Inicia a classe PHPMailer
   $mail = new PHPMailer(true);
   
      // Define os dados do servidor e tipo de conexão
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
      $mail->CharSet = "UTF-8";
      $mail->setLanguage('br');
      $mail->Host = "mail.equipenovainfo.com.br"; // Endereço do servidor SMTP
      $mail->Username = 'contato@equipenovainfo.com.br'; // Usuário do servidor SMTP
      $mail->Password = '2013eni'; // Senha do servidor SMTP
      $mail->Port = 587; // SMTP 465 - IMAP 993 - 587
      $mail->isSMTP();
      $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
      $mail->SMTPSecure = 'tls';
      //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS`
      $mail->Priority = 1; 
      // Define o remetente
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->From = ("contato@equipenovainfo.com.br"); // E-mail do usuário
      $mail->FromName = $nome; // Seu nome
      // Define os destinatário(s)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->AddAddress($eemail);
      //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
      //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
      // Define os dados técnicos da Mensagem
      // =-=-=-=-=-=-=-=-=-=-=1-=-=-=-=-=-=-=-=-=
      $mail->IsHTML(); // Define que o e-mail será enviado como HTML
      //  $mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
      // Define a mensagem (Texto e Assunto)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->Subject = $assunto; // Assunto da mensagem
      //Read an HTML message body from an external file, convert referenced images to embedded,
      //convert HTML into a basic plain-text alternative body
      // $mail->msgHTML(FILE_USE_require_once_ATH('contents.html', 1));
      // CORPO DO EMAIL
      // FORMATO HTML
      $mail->Body = "<h4><p>Nome: {$nome}.<br><br>Email: {$eemail}<br><br>Telefone: {$telefone}.<br><br>Cidade: {$cidade}.<br><br>Assunto: {$assunto}.<br><br>Mensagem: {$mensagem}</p><p><h6><br>IP do remetente: {$ip}<br>Navegador do remetente: {$navegador}</h6></p></h4>";

      // FORMATO SEM HTML
      $mail->AltBody = "Nome: {$nome}" . "\n" . "\n" . "Email: {$eemail}" . "\n" . "Telefone: {$telefone}" . "Cidade: {$cidade}" . "\n" . "Mensagem: {$mensagem}" . "\n" . "IP do remetente: {$ip}" . "\n" . "Navegador do remetente: {$navegador}";
      // Define os anexos (opcional)
      // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
      $mail->AddAttachment($file['tmp_name'], $file['name'], 'base64');  // Insere um anexo
      //print_r($_FILES);echo"<br>";print_r($files);
      
      // Envia o e-mail
      $mail->Send();
      // Limpa os destinatários e os anexos
      $mail->ClearAllRecipients();
      $mail->ClearAttachments();
      // FIM DO ENVIO DE EMAIL
      ?>
      <script>
         $(document).ready(function(){
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?php echo $nome.". <br>";?> <?php echo "Agradecemos o contato e o envio do seu curriculo. A análise será realizada e entraremos em contato caso exista a vaga correspondente às suas habilidades profissionais. Caso não seja convocado, o seu currículo estará salvo.";?>',
            showConfirmButton: false,
            timer: 6000
            })
         })
      
      </script>
      <?php
   }catch (Exception $e) {?>
      <script>
         $(document).ready(function(){
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: '<?php echo $nome.". <br>";?> <?php echo "Sua mensagem não pôde ser enviada! Tente novamente agora ou mais tarde. ";?>',
            showConfirmButton: false,
            timer: 6000
            })
         })
      </script>
      <?php
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
?>
</script>
<meta http-equiv=refresh content=6;URL=index.php>