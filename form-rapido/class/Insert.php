<?php

    include_once('./Sql.php');

    class Insert{
        private $Sql;

        public function __construct(){
            $this -> Sql = new Sql('localhost','bd_crud_fast','root','');
            print_r($_POST);
        }

        public function getNome(){
            return $_POST['nome'];
        }

        public function getEndereco(){
            return $_POST['endereco'];
        }


        public function getCargo(){
            return $_POST['cargo'];
        }

        
        public function getSalario(){
            return $_POST['salario'];
        }
        
        public function getCPF(){
            return $_POST['cpf'];
        }
        
        public function getDataNasc(){
            return $_POST['dataNasc'];
        }

        public function getTemp(){
            return $_POST['temp'];
        }
    

        public function addUser(){

            $nome = $_POST['nome'];

            $this -> Sql -> query("INSERT INTO tb_funcionario(nm_func,end_func,cargo_func,sal_func,cpf_func,tel_func,data_nasc_func,temp_func) VALUES (:nome,:endereco,:cargo,:salario,:cpf,:telefone,:dataNasc,:temp)",array(
                ""
            ));
        }
        
    }

    $insert = new Insert();
    $insert -> addUser();

?>