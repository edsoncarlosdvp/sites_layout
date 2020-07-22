<!DOCTYPE html>
    <html lang="pt-br">

    <?php require_once "include/head2.php"; ?>
    
<body class="theme-scroll" onload="myFunction()">

    <!-- INCLUI O HEADER (CABEÇALHO)-->

    <?php require_once "include/header2.php"; ?>
    
    <section id="home" class="container-fluid theme-font-p01-regular px-0 mx-0">
    
        <section id="capa-portfolio" class="container-fluid d-none d-lg-flex justify-content-center align-items-end">
            <h2 class="title-capa mb-4">Nosso Portfolio</h2>
        </section>

        <section id="capa-portfolio-mobile" class="container-fluid d-flex d-lg-none justify-content-center align-items-end flex-wrap">
            <?php require_once "include/assets/carousel_portfolio.php"; ?>
            <h2 class="title-capa position-absolute pb-5" style="z-index: 9999;">Nosso Portfolio</h2>
        </section>
        
        <section class="row px-0 py-0 py-md-3 mx-0 min-vh-100 eni-bg-05">
            <div class="container-fluid">
                <!-- <nav class="navbar w-100 justify-content-center my-2 mx-0">
                    <div id="content-select" class="btn-group style-select">
                        <a class="nav-link scroll theme-nav-link-white dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Selecione</a>
                        <div class="dropdown-menu" role="navigation">
                            <a class="dropdown-item" href="?link=limpeza#result">Limpeza</a>
                            <a class="dropdown-item" href="?link=manutencao#result">Manutenção</a>
                            <a class="dropdown-item" href="?link=conservacao#result">Conservação</a>
                            <a class="dropdown-item" href="?link=zeladoria#result">Zeladoria</a>
                            <a class="dropdown-item" href="?link=maodeobra#result">Terc.de Mão de Obra</a>
                        </div>
                    </div>
                </nav> --> <!-- HABILITAR CASO HAJA ESCOLHA POR CATEGORIA -->
                <!-- <div class="row justify-content-center flex-wrap mx-0 my-md-5 my-lg-3 py-0 py-md-2"> -->
                <div id="result" class="row justify-content-center flex-wrap mx-0 my-md-5 my-lg-3 py-0 py-md-2"></div>
                <div id="loader" class="text-center"></div>                    
                <!-- TESTE NOVO -->

                <script>
                    var i = 5;
                    $(window).scroll(function() {
                        var scrollTop     = $(window).scrollTop();
                        var elementOffset = $('#loader').offset().top;
                        var distance      = (elementOffset- 150 - scrollTop);
                        
                        if( distance < $(window).height() )
                        {
                            i++;

                            if( i <= 58)
                            {
                                $('#result').append(`
                                    <div id='#loader' class='col-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex justify-content-center'>
                                        <a href='images/portfolio/unique/foto${i}.jpg' class='fresco' data-fresco-group='example' data-fresco-caption='ARJ SERVICE'>
                                        <img src='images/portfolio/unique/foto${i}.jpg' class='eni-img-thumb'/></a>
                                    </div>`);
                            }
                            else
                            {
                                $('#loader').html('');
                            }
                        }
                    });
                </script>
                <!-- </div> -->
            </div>
        </section>
    </section>
    <?php // require_once "include/assets/modal/trabalhe-conosco.php";?> 
    <?php require_once "trabalhe-conosco.php";?> 
    <?php require_once "include/footer2.php";?>

</body>
</html>