<!DOCTYPE html>
    <html lang="pt-br">

    <?php require_once "include/head.php"; ?>
    
<body>

    <!-- INCLUI O HEADER (CABEÇALHO)-->

    <?php require_once "include/header.php"; ?>
    
    <div class="container-fluid mt-3 theme-font-p01-regular">
        
        <div class="row px-2">
            
            <!-- USUÁRIOS -->
            <a href="#" class="theme-user col-sm border-dark justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-white text-right py-4 rounded">
                <div class="row">
                        <i class="fas fa-users theme-bg-icon-p1-01"></i>
                    <div class="col">
                        <h2>51/51</h2>
                        <h6>Meus clientes/totais</h6>
                    </div>
                </div>
            </a>
            
            <!-- PRÉDIO -->
            <a href="#" class="theme-build col-sm border-dark justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-white text-right py-4 rounded">
                <div class="row">
                    <i class="fas fa-building theme-bg-icon-p1-02"></i>
                    <div class="col">
                        <h2>5/5</h2>
                        <h6>Meus empreendimentos/totais</h6>
                    </div>
                </div>
            </a>
            <div class="w-100 d-xl-none"></div>
            
            <!-- CASA -->
            <a href="#" class="theme-house col-sm border-dark justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-white text-right py-4 rounded">

                <div class="row">
                    <i class="fas fa-home theme-bg-icon-p1-03"></i>
                    <div class="col">
                        <h2>55/55</h2>
                        <h6>Meus imóveis/totais</h6>
                    </div>
                </div>

            </a>
            
            <!-- CÂMERA -->
            <a href="#" class="theme-camera col-sm border-dark justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-white text-right py-4 rounded">

                <div class="row">
                    <i class="fas fa-camera theme-bg-icon-p1-04"></i>
                    <div class="col">
                        <h2>01</h2>
                        <h6>Meus imóveis sem fotos/totais</h6>
                    </div>
                </div>

            </a>

        </div>

        <!-- SEGUNDA LINHA (GRÁFICOS) -->
        <!-- ATUALIZAÇÃO -->
        <div class="row px-2">

            <a href="#" class="theme-refresh col-sm border-dark justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-white text-right py-4 rounded" style="min-width: 24% !important;">

                <div class="row">
                    <i class="fas fa-sync theme-bg-icon-p1-05"></i>
                    <div class="col">
                        <h2>1</h2>
                        <h6>Imóveis desatualizados</h6>
                    </div>
                </div>

            </a>

            
            <!-- IMÓVEIS DESATUALIZADOS COM GRÁFICOS -->
            <div class="col-sm bg-white theme-border-top justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-black-50 text-right py-4 rounded" style="z-index: 3; min-width: 24% !important;">
                <img src="img/graph_test.png" alt="" class="img-fluid">
                <div class="table-responsive theme-scroll">
                    <table class="table table-sm no-border table-striped text-dark" style="font-size: .85em !important; border-color: none;">
                        
                        <tbody>
                            <tr>
                            <th scope="row"><span class="theme-bg-icon-fa-yellow" style="background-color: #808080 !important;">25d</span></th>
                            <td>casa</td>
                            <td>2<i class="ml-1 fas fa-bed"></i></td>
                            <td>Leomar</td>
                            <td><i class="fas fa-eye theme-bg-icon-fa-transparence"></i></td>
                            </tr>
                            <tr>
                            <th scope="row"><span class="theme-bg-icon-fa-yellow" style="background-color: #808080 !important;">25d</span></th>
                            <td>Apartamento</td>
                            <td>2<i class="ml-1 fas fa-bed"></i></td>
                            <td>Leomar</td>
                            <td><i class="fas fa-eye theme-bg-icon-fa-transparence"></i></td>
                            </tr>
                            <tr>
                            <th scope="row"><span class="theme-bg-icon-fa-yellow" style="background-color: #808080 !important;">25d</span></th>
                            <td>Apartamento</td>
                            <td>2<i class="ml-1 fas fa-bed"></i></td>
                            <td>Leomar</td>
                            <td><i class="fas fa-eye theme-bg-icon-fa-transparence"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-100 d-xl-none"></div>
            
            <!-- IMÓVEIS CADASTRADOS -->
            <div class="col-sm bg-white theme-border-top justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-white text-right py-4 rounded" style="z-index: 2; min-width: 24% !important;">
                <div class="row mb-3">
                    <div class="col-8 text-left">
                        <span style="font-size: 1.9em; color: #333333;">35 </span><span style="color: #333333; font-size: 1.0em; text-transform:uppercase;">novos imóveis</h4>
                        <h5 style="color: #333333; font-size: 0.95em; text-transform:uppercase;">novos cadastrados</h5>
                    </div>
                    <div class="col-4 text-right">
                        <img src="img/chart-bar-solid-cinza.svg" alt="" class="img" style="width: 32px;">
                    </div>
                </div>
                
                <div class="table-responsive theme-scroll">
                    <table class="table table-sm no-border table-striped text-dark" style="font-size: .85em !important; border-color: none;">
                        
                        <tbody>
                            <tr>
                            <th scope="row">
                                <a href="#">
                                    <i class="fas fa-check-circle theme-bg-icon-fa-yellow text-lg-center" style="background-color: #808080 !important;"> 0</i>
                                </a>
                            </th>
                            <td>Terreno de condomínio</td>
                            <td>2<i class="ml-1 fas fa-bed"></i></td>
                            <td>Leomar</td>
                            <td><i class="fas fa-eye theme-bg-icon-fa-transparence"></i></td>
                            </tr>
                            <tr>
                            <th scope="row">
                                <a href="#" data-toggle="modal" data-target="#newImobile">
                                    <i class="fas fa-check-circle theme-bg-icon-fa-yellow text-lg-center"> 2</i>
                                </a>
                            </th>
                            <td>Apartamento</td>
                            <td>2<i class="ml-1 fas fa-bed"></i></td>
                            <td>Leomar</td>
                            <td><a href="#" data-toggle="modal" data-target="#newImobile">
                                    <i class="fas fa-eye theme-bg-icon-fa-transparence"></i>
                                </a><!-- AO CLICAR AQUI, ABRIR DETERMINADA TAB DO MODAL -->
                            </td>
                            </tr>
                            <tr>
                            <th scope="row"><i class="fas fa-check-circle theme-bg-icon-fa-yellow text-lg-center"> 2</i></th>
                            <td>Apartamento</td>
                            <td>2<i class="ml-1 fas fa-bed"></i></td>
                            <td>Leomar</td>
                            <td><i class="fas fa-eye theme-bg-icon-fa-transparence"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            

            <div class="col-sm bg-white theme-border-top justify-content-sm-between mx-1 mx-md-3 mx-xl-1 my-3 text-white text-left py-4 rounded" style="z-index: 1; min-width: 24% !important;">
                <!-- Calendário do Período -->
                <div class="col-12">
                    <div class="d-flex align-items-lg-baseline">
                        <i class="far fa-calendar-alt" style="color: #0e4f8e;"></i><span class="text-uppercase" style="color: #0e4f8e;">período</span>
                        <div class="btn-group ml-lg-2 mb-3" id="dd">
                            <button type="button" class="btn theme-btn-secondary" style="box-shadow: 0 0 0 0; border: 0 none; outline: 0;">Esse mês</button>
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" data-boundary="dd" aria-haspopup="true" aria-expanded="false" style="background-color: #95a5a6 !important; color: #ffffff !important; box-shadow: 0 0 0 0; border: 0 none; outline: 0;">
                                <span class="sr-only">Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item-this-month" href="#">Essa semana</a>
                                <a class="dropdown-item-this-month" href="#">Essa quinzena</a>
                                <a class="dropdown-item-this-month" href="#">Esse mês</a>
                                <a class="dropdown-item-this-month" href="#">Esse Bimestre</a>
                            </div>
                        </div>
                    </div>
                    <h6 style="color: black; font-size: .9rem;">Não há metas configuradas para o usuário atual</h6>
                    
                    <div class="theme-font-title-status">
                        <span>Metas de vendas</span>
                    </div>

                    <div class="progress theme-progress-height">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                    </div>
                    <div class="theme-font-status">
                        <span>9 de 30</span>
                        <span>30.00%</span>
                    </div>

                    <div class="theme-font-title-status">
                        <span>Captação de vendas</span>
                    </div>

                    <div class="progress theme-progress-height">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                    </div>
                    <div class="theme-font-status">
                        <span>9 de 30</span>
                        <span>30.00%</span>
                    </div>

                    <div class="theme-font-title-status">
                        <span>Novos clientes</span>
                    </div>

                    <div class="progress theme-progress-height">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                    </div>
                    <div class="theme-font-status">
                        <span>9 de 30</span>
                        <span>30.00%</span>
                    </div>
                </div>
                
            </div>

        </div>

        <!-- MODAL -->
        <?php require_once $modal."dash-home/modal-dash-home.php"; ?>
    </div>
        
    <?php require_once "include/footer.php";?>

</body>
</html>