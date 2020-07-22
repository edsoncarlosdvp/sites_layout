<div class="container-fluid">
   <div class="w-100 text-center my-2 mx-0">
      <h1 class="title mb-n3 wow slideInUp">Nosso Portfólio</h1>
      <div id="anima-portfolio" class="animateline"></div>
      <h2 class="sub-title wow fadeInUp" data-wow-delay="0.5s">Veja! A qualidade dos nossos serviços exclusívos!</h2>
   </div>
   <div class="row justify-content-center flex-wrap mx-0 my-md-5 my-lg-3 py-0 py-md-2 fadeIn" data-wow-delay="1.0s">

      <?php
         //BUSCA AS FOTOS DO PORTFOLIO NA PASTA DESIGNADA
         $thumb = glob("images/portfolio/page/thumb/*.jpg");
         $img = glob("images/portfolio/page/*.jpg");
         $i = 0;
         while ($i<=7) { 
            $imgs = $thumb[$i];
            $ahref = $img[$i];
            echo "
               <div class='col-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex justify-content-center' alt=''>
                  <a href='{$ahref}' class='fresco' data-fresco-group='example' data-fresco-caption='ARJ SERVICE'>
                     <img class='eni-img-thumb' src='$imgs'>
                  </a>
               </div>";
               $i++;
         }
      ?>
      <div class="col-12 text-center wow slideInUp">
         <a href="page_portfolio.html" class="btn eni-btn-see-plus mt-3">
            <h1 class="title">Ver mais</h1>
         </a>
      </div>
   </div>
</div>