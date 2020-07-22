<!DOCTYPE html>
    <html lang="pt-br">

    <?php require_once "include/head.php"; ?>

<body class="theme-scroll" onload="myFunction()">
    <header>
        <!-- INCLUI O HEADER (CABEÇALHO) -->
        <?php require_once "include/header.php"; ?> 
    </header>

    <section id="home" class="container-fluid theme-font-p01-regular px-0 mx-0">
        
        <?php require_once "include/assets/carousel.php"; ?>
        
        <section id="servicos" class="row px-0 py-0 py-md-2 mx-0 personal-height eni-bg-02">
            <?php require_once "maintenance.php"; ?>
        </section>

        <section id="empresa" class="row px-0 mx-0 min-vh-90">
            <?php require_once "enterprise.php"; ?>
        </section>

        <section id="terceirizacao" data-section-id="terceirizacao" class="row px-0 mx-0 min-vh-100 eni-bg-01">
            <?php require_once "outsourcing.php"; ?>
        </section>

        <section id="portfolio" class="row px-0 mx-0 pb-2 pb-md-0 min-vh-100 eni-bg-05">
            <?php require_once "portfolio.php";?>
        </section>

        <section id="videos" class="row px-0 min-vh-100 eni-bg-02">
            <?php require_once "videos.php"; ?>
        </section>

        <section id="sobre" class="row px-0 mx-0 eni-bg-01" style="height: 75vh;">
            <?php require_once "sobre.php";?>
        </section>

        <section id="orcamento" class="row px-0 py-0 mx-0 eni-bg-02" style="height: 24vh;">
            <?php include_once "orcamento.php";?>
        </section>

        <section id="contato" class="row px-0 mx-0 min-vh-100 eni-bg-01">
            <?php require_once "contact.php";?>
        </section>
        
        <section id="parceiros" class="row px-0 py-4 mx-0 min-vh-50 eni-bg-05">
            <?php require_once "parceiros.php"; ?>
        </section>
        
    </section>
    <div class="fix-div">
        <a href="https://wa.me/5512996074414">
            <img src="images/logo-zap.png" alt="" class="logo-zap">
        </a>
    </div>
    <?php require_once "trabalhe-conosco.php";?> 
    <?php require_once "include/footer.php";?>
</body>
</html>