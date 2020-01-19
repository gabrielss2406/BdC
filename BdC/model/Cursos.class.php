<?php
    class Cursos extends Connect{
        function __construct(){
            parent::__construct();
        }
        //get_categorias
        function getCursos(){
            $valor = $_GET['curso'];
            $query = "SELECT * FROM tb_cursos WHERE cur_id_materia = $valor";
            $this->executeSQL($query);
            $this->get_Lista();
        }
        //método de listas
        private function get_Lista(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'cur_nome' => $lista['cur_nome'],
                    'cur_descricao' => $lista['cur_descricao'],
                    'cur_valor' => $lista['cur_valor'],
                    'cur_horas_curso' => $lista['cur_horas_curso'],
                    'cur_imagem_string' => $lista['cur_imagem_string'],
                    'cur_id_materia' => $lista['cur_id_materia']
                );
            $i++;
            endwhile;
        }

    }
?>