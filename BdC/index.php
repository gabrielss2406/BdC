<?php
    require "./lib/autoload.php";//chama a lib de autoload para achar as classes
    $smarty = new Template(); //instanciando objeto Smarty

    //Configuração do tema do site(css)
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    //Função ponteiro (->) a grosso modo um atalho, aponta pra ela sem definir o que tem

    //Configuração das rotas de pagina
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_SOBRE', Rotas::get_SiteSobre());
    $smarty->assign('GET_CURSOS', Rotas::get_SiteCursos());
    $smarty->assign('GET_ARTIGOS', Rotas::get_SiteArtigos());
    $smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
    $smarty->assign('GET_PARCEIROS', Rotas::get_SiteParceiros());
    $smarty->assign('GET_SINGLE_ARTIGO', Rotas::get_SiteSingleArtigo());

    $conn = new Connect();

    if(isset($_GET['pag'])){
        Rotas::get_Pagina();
    }else{
        $smarty->display('index.html');
    }
?>