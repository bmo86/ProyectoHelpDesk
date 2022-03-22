<?php
    session_start();
    
    class conect{
        protected $dbh;
        protected function Conection(){

            try {
                $conect = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdesk_proyect","root","");

                return $conect;
            } catch (Exception $th) {
                print "ERROR DB!!! (:/) : " . $th->getMessage(). "<br/>";
                die();
            }
            
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            return "http://localhost/Proyecto/";
        }
    }
?>