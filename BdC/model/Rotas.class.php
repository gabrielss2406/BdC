<?php

    class Rotas{
        public static $pag;
        private static $pasta_views = 'views';
        private static $pasta_sobre = 'sobre';
        private static $pasta_artigos = 'artigos';
        private static $pasta_contato = 'contato';
        private static $pasta_cursos = 'cursos';
        private static $pasta_parceiros = 'parceiros';
        private static $pasta_single_artigo = 'singleArtigo';

        //Configuração da rota pagina home
        static function get_SiteHome(){
            return Config::SITE_URL.'/'.Config::SITE_PASTA; //retorna a url
        }
        //Configuração para a raiz do site
        static function get_SiteRaiz(){
            return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
        }
        //Configuração da rota do tema do site
        static function get_SiteTema(){
            return self::get_SiteHome().'/'.self::$pasta_views; //retorna a url
        }
        //Configuração da página sobre
        static function get_SiteSobre(){
            return self::get_SiteHome().'/'.self::$pasta_sobre;
        }
        //Configuração da página cursos
        static function get_SiteCursos(){
            return self::get_SiteHome().'/'.self::$pasta_cursos;
        }
        //Configuração da página artigos
        static function get_SiteArtigos(){
            return self::get_SiteHome().'/'.self::$pasta_artigos;
        }
        //Configuração da página contato
        static function get_SiteContato(){
            return self::get_SiteHome().'/'.self::$pasta_contato;
        }
        //Configuração da página parceiros
        static function get_SiteParceiros(){
            return self::get_SiteHome().'/'.self::$pasta_parceiros;
        }
        //Configuração da página single curso
        static function get_SiteSingleArtigo(){
            return self::get_SiteHome().'/'.self::$pasta_single_artigo;
        }

        static function get_Pagina(){ //funcao de capturar o valor
            if (isset($_GET['pag'])) {//verifica se ta passando o valor
                $pagina = $_GET['pag'];//passa esse valor pra $pagina
                //self:: referencia a variavel
                self::$pag = explode('/',$pagina);//$pag recebe o $pagina sem as barra, virando uma forma de array
                    $pagina = 'controller/'.self::$pag[0].".php";//passa o endereço agora completo para $pagina
                    //echo $pagina;
                    if (file_exists($pagina)) {//verifica se existe esse controller
                        include_once $pagina; //abre ele
                    }else{
                        include_once 'erro.php'; //abre o erro se der merda
                    }
            }
        }
    }
?>