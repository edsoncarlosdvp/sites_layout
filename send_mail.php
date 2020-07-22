<?php
   require __DIR__ . "/include/head.php";
   require __DIR__ . "/vendor/autoload.php";

   header("Expires: 0");
   header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
   header("Cache-Control: no-store, no-cache, must-revalidate");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");

   use Source\Support\Email;

   $email = new Email();

   try{
   // CAPTURANDO DADOS DO FORMULÁRIO
   $nome      = trim(ucwords(preg_replace('/\s\s+/', ' ',($_POST['nome']))));
   $eemail     = trim(strtolower(preg_replace('/\s\s+/', ' ',($_POST['eemail']))));
   $telefone  = trim(preg_replace('/\s\s+/', ' ',($_POST['telefone'])));
   $cidade    = trim(preg_replace('/\s\s+/', ' ',($_POST['cidade'])));
   $assunto   = trim(preg_replace('/\s\s+/', ' ',($_POST['assunto'])));
   $mensagem  = trim(preg_replace('/\s\s+/', ' ',("<pre>".$_POST['mensagem']."</pre>")));
   $ip        = $_SERVER['REMOTE_ADDR'];
   $navegador = $_SERVER['HTTP_USER_AGENT'];
   
   $email->add($assunto,
   "<h4>Nome: {$nome}<br><br>Email: {$eemail}<br><br>Telefone: {$telefone}<br><br>Cidade: {$cidade}<br><br>Mensagem:<br>{$mensagem}<br></h4><p><h6><br>IP do remetente: {$ip}<br>Navegador do remetente: {$navegador}</h6></p>",
   $nome,
   $eemail)->send();

   if(!$email->error()){
      echo "Sua mensagem foi enviada com sucesso! Agradecemos o contato e retornaremos o mais breve possível.";
   }else{
      echo $email->error()->getMessage();
   }
}catch(Exception $e){
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>