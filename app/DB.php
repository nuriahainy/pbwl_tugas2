<?php
    namespace App;
    use PDO;

    class DB{
        protected object $db;

        public function __construct(){
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=tugas_2_nuriah", "root", "");
            } catch(PDOException $e){
                die("Error : " . $e->getMassage());
            }
        }
    }