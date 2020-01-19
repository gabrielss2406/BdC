<?php
    $smarty = new Template();
    //instanciar classe categorias
    $categoria = new Categorias();
    $categoria->get_Categorias();

    $curso = new Cursos();
    $curso->getCursos();

    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    //Configuração das rotas de pagina
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_SOBRE', Rotas::get_SiteSobre());
    $smarty->assign('GET_CURSOS', Rotas::get_SiteCursos());
    $smarty->assign('GET_ARTIGOS', Rotas::get_SiteArtigos());
    $smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
    $smarty->assign('GET_PARCEIROS', Rotas::get_SiteParceiros());
    $smarty->assign('GET_SINGLE_ARTIGO', Rotas::get_SiteSingleArtigo());

    //informação do banco de dados na página
    $smarty->assign('CAT',$categoria->getItens());
    $smarty->assign('CUR',$curso->getItens());

    $smarty->display('cursos.html');
?>