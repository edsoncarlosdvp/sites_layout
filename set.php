<?php

global $INI;
global $PATHCADPRODUTO;

// TÍTULO DO SITE
$titleSite = "ARJ SERVICE - Limpeza - Conservação - Manutenção - CFTV";

// LEVEL PAGE
$levelPage = "../../../../";
// VARIÁVEIS DO TIPO PATH
$site = "..";
$path = "arj_service";
$conexao = "conexao/";
$include = "include/";
$section_service = "include/assets/section_service/";
$modal = $include."modal/";
$path_img = realpath("images");
// PASTA IMAGENS
$path_slide_manutencao =  "images/slide/section_service/manutencao";
$path_slide_limpeza =  "images/slide/section_service/limpeza";
$path_slide_cftv =  "images/slide/section_service/cftv";
$path_slide_conservacao =  "images/slide/section_service/conservacao";
$path_slide_zeladoria =  "images/slide/section_service/zeladoria";
$path_slide_crr =  "images/slide/section_service/crr";
$path_cad_produtos2 = "img/cad/produtos";
$path_cad_produtos =  "/cad/produtos";
// PÁGINAS
$path_page_portfolio = $include . "page/portfolio";

/* Atualiza com novos valores. */
unset($ROOTPATH, $PATHIMG, $PATHINCLUDE, $ROOTBLOCO);

/* Defines utilizado apenas no layout responsivo. */
/*define('DIR_ROOT_S', str_replace('\\','/',dirname(__FILE__)));
define('DIR_INCLUDE', dirname(DIR_ROOT_I) . "/_include");
define('DIR_IMG', dirname(DIR_ROOT_IG) . "/_imagens");
define('DIR_CAD_PRODUTOS', dirname(DIR_ROOT_C) . "/_imagens/cad/produtos");
*/
?>