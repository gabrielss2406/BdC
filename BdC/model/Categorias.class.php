<?php
    class Categorias extends Connect{
        function __construct(){
            parent::__construct();
        }
        //get_categorias
        function get_Categorias(){
            $query = "SELECT * FROM tb_categorias";
            $this->executeSQL($query);
            $this->get_Lista();
        }
        //método de listas
        private function get_Lista(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'cat_id' => $lista['cat_id'],
                    'cat_nome' => $lista['cat_nome'],
                    'cat_slug' => $lista['cat_slug']
                );
            $i++;
            endwhile;
        }

    }
?>