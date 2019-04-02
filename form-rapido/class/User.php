<?php
    class User{

    private $connection;
    private $select;

        public function __construct(){
            $this -> connection = new Sql('localhost','bd_crud_fast','root','');
        }

        public function setSelect($rawQuery){
            $this -> select = $this -> connection -> select($rawQuery);
        }

        public function getSelect(){
            return $this -> select;
        }

        public function print($params = array()){
            for ($i=0; $i < count($this ->getSelect());$i++) { 
                echo  '<tr>';
                
                foreach ($params as  $value) {
                    echo '<td>'. utf8_encode($this -> getSelect()[$i][$value]).'</td>';
                }
                echo '<td> <button class="btn btn-primary btn-edit" > Editar </button> </td>' ;
                echo '<td> <button class="btn btn-primary btn-excluir" > Excluir </button> </td>' ;
                echo '</tr>';
            }
        }

    }

?>