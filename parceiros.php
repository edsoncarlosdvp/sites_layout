<div id="outsourcing" class="container-fluid">
   <div class="w-100 text-center my-3 mx-0 justify-content-center">
      <h1 class="title wow fadeInUp mb-n3">Parceiros</h1>
      <div id="anima-parceiro" class="animateline"></div>
      <h2 class="sub-title wow fadeInUp" data-wow-delay="0.5s">Conheça alguns dos nossos parceiros</h2>
   </div>
   <div class="row justify-content-center flex-wrap mx-0 py-2 py-md-4">
      <div id="msParceiros" class="MagicScroll" data-options="arrows: off; autoplay: 3000; items: 5;">
         <?php
          //BUSCA AS FOTOS DOS PARCEIROS
          $files = glob("images/parceiros/*.png");
          for ($i=1; $i<count($files); $i++) {
              $num = $files[$i];
              echo "
                      <img src='$num'>";
          }
         ?>
      </div>
      <!-- <div class="col-12 text-center mx-0 my-5 mb-3 wow slideInLeft" data-wow-delay="2s">
         <?php
          //BUSCA AS FOTOS DOS PARCEIROS
          /*$files = glob("images/parceiros/*.png");
          for ($i=1; $i<=5; $i++) {
              $num = $files[$i];
              echo "<img src='$num' class='img-fluid mx-3'>";
          }*/
         ?>
      </div>
      
      <div class="col-12 text-center mx-0 my-5 wow slideInRight" data-wow-delay="2.5s">
         <?php
          //BUSCA AS FOTOS DOS PARCEIROS
          $files = glob("images/parceiros/*.png");
          for ($i=6; $i<=10; $i++) {
              $num = $files[$i];
              echo "<img src='$num' class='img-fluid mx-3'>";
          }
         ?>
      </div> -->
   </div>
</div>

<script>
   // MagicScrollOptions = {
   //    orientation: 'horizontal',
   //    pagination: 'true',
   //    autostart: true,
   //    width: '100%',
   //    height: auto,
   //    mode: carousel,
   //    items: [[1,1]],
   //    step: 3,
   //    speed: 600,
   //    arrows: 'off',
   //    loop: 'infinite'
   //  }
</script>