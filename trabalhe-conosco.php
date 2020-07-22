<?php 
    require_once "set.php";
    require "./vendor/autoload.php";    
?>
<!-- Modal -->
<form id="form-crl" method="post" action="send_crl.php" enctype="multipart/form-data">
   <div class="modal fade" id="modalTrabalheConosco" tabindex="-1" role="dialog" aria-labelledby="modalTrabalheConoscoLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-trabalhe-conosco modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header d-inline-flex justify-content-center flex-wrap">
                  <h5 class="title" id="modalTrabalheConoscoLabel">Envie o seu currículo</h5>
                  <div id="anima-curriculo" class="animateline"></div>
                  <span class="sub-title">Estamos sempre analisando candidatos para fazerem parte de nossa equipe</span>
            </div>
            <div id="mo"></div>
            <div class="modal-body">
               <div class="row justify-content-center">
                  <div class="form-group col-12 col-lg-6">
                     <input type="text" class="form-control" id="nome-curriculo" name="nome-curriculo"
                        placeholder="Nome">
                  </div>
                  <div class="form-group col-12 col-lg-6">
                     <input type="email" class="form-control" id="email-curriculo" name="email-curriculo"
                        placeholder="Email">
                  </div>
                  <div class="form-group col-12 col-lg-4">
                     <input type="text" class="form-control" id="telefone-curriculo" name="telefone-curriculo"
                        placeholder="Telefone">
                  </div>
                  <div class="form-group col-12 col-lg-4">
                     <input type="text" class="form-control" id="cidade-curriculo" name="cidade-curriculo"
                        placeholder="Cidade">
                  </div>
                  <div class="form-group col-12 col-lg-4">
                     <input type="text" class="form-control" id="assunto-curriculo" name="assunto-curriculo"
                        placeholder="Assunto">
                  </div>
                  <div class="form-group col-12">
                  <textarea class="form-control" rows="8" id="mensagem-curriculo" name="mensagem-curriculo" placeholder="Mensagem"></textarea>
                  </div>
                  <div class="form-group col-12">
                     <span class="text">Anexe seu currículo</span>
                     <input type="file" accept=".doc, .docx, .pdf" class="form-control" id="file-curriculo" name="file" required>
                  </div>
               </div>
               <div id="mo" class="text-black-50"></div>
               <div class="modal-footer">
                  <button type="button" class="btn eni-btn-card-close" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn eni-btn-card" id="btn-crl">Enviar</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>