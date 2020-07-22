<div class="container-fluid d-flex flex-wrap">
   <div class="col-12 col-md-6">
      <!-- CONTATO -->
      <div class="row d-flex justify-content-center my-3">
         <h1 class="w-100 text-center title wow fadeInUp">Contate a ARJ SERVICE</h1>
         <div id="anima-contato" class="animateline"></div>
      </div>
      <div id="mo" class="d-none"></div>
      <form id="form-contact" method="post" enctype="multipart/form-data">
         <div class="row justify-content-center border-contact-form mr-0 mr-md-3">
            <div class="form-row form-group col-12 col-sm-10 col-md-9 col-lg-7 wow fadeInUp" data-wow-delay="1.5s">
               <input type="text" class="form-control" id="nome" name="nome"
                  placeholder="Nome" required>
            </div>
            <div class="form-row form-group col-12 col-sm-10 col-md-9 col-lg-7 wow fadeInUp" data-wow-delay="1.8s">
               <input type="eemail" class="form-control" id="eemail" name="eemail"
                  placeholder="Email" required>
            </div>
            <div class="form-row form-group col-12 col-sm-10 col-md-9 col-lg-7 wow fadeInUp" data-wow-delay="2.1s">
               <input type="text" class="form-control" id="telefone" name="telefone"
                  placeholder="Telefone">
            </div>
            <div class="form-row form-group col-12 col-sm-10 col-md-9 col-lg-7 wow fadeInUp" data-wow-delay="2.4s">
               <input type="text" class="form-control" id="cidade" name="cidade"
                  placeholder="Cidade" required>
            </div>
            <div class="form-row form-group col-12 col-sm-10 col-md-9 col-lg-7 wow fadeInUp" data-wow-delay="2.7s">
               <input type="text" class="form-control" id="assunto" name="assunto"
                  placeholder="Assunto" required>
            </div>
            <div class="form-row form-group col-12 col-sm-10 col-md-9 col-lg-7 wow fadeInUp" data-wow-delay="3s">
               <textarea class="form-control" rows="8" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
            </div>

            <div class="form-row form-group mb-1 col-12 justify-content-center wow fadeIn" data-wow-delay="3.7s">
               <button class="btn eni-btn-contato" name="enviar" id="btn-send">Enviar</button>
            </div>
         </div>
      </form>
      <div id="div-links-contato" class="row justify-content-center align-items-center my-1">
         <a class="nav-link cor-link02 wow fadeInLeft" data-wow-delay="4s" href="https://wa.me/5512996074414" target="_blank"><i class="fab fa-whatsapp mr-2"></i>(12) 99607-4448</a> <span class="wow fadeInLeft d-none d-md-block" data-wow-delay="4.3s">|</span> <a class="nav-link cor-link02 wow fadeInRight" data-wow-delay="4s" href="mailto:contato@arjservice.com.br"><i class="far fa-envelope mr-2"></i>contato@arjservice.com.br</a>
      </div>
   </div>
   
   <!-- LOCALIZAÇÃO -->
   <div id="local" class="col-12 col-md-6">
      <div class="w-100 text-center my-3">
         <h1 class="title mb-n3">Nossa Localização</h1>
         <div class="animateline"></div>
      </div>
      <div class="mapa row">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.4135390210668!2d-45.89295238502843!3d-23.228033984849425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4a96997f09f3%3A0x52e19b7a613ec971!2sAv.+Perseu%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1521276674228" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen="yes"></iframe>
      </div>
      <div class="col text-center mx-0 mb-3 pt-2">
       <span class="text-end">Sede</span><br>
       <span class="text-end"><i class="fas fa-map-marker-alt"></i> Endereço: Rua Euclides Miragaia N°394</span>
      </div>
   </div>
</div>

<script>
  $(function(){
     $("#form-contact").submit(function(){
        $.ajax({
           url: 'send_mail.php',
           type: 'post',
           data: $('#form-contact').serialize(),
           success: function(data){
               Swal.fire({
               position: 'center',
               icon: 'success',
               title: 'Sua mensagem foi enviada com sucesso! Agradecemos o contato e retornaremos o mais breve possível.',
               showConfirmButton: false,
               timer: 3500
            })
           },
           error: function(xhr){
              Swal.fire({
               position: 'center',
               icon: 'error',
               title: 'Sua mensagem não pôde ser enviada! Tente novamente agora ou mais tarde.',
               showConfirmButton: false,
               timer: 3500
            })
           }
        })
        this.reset()
        return false;
     })
  })
</script>