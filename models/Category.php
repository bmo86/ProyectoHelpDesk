<?php

    class Category extends Conect{

        public function getCategory(){
            $conect = parent::Conection();
            parent::set_names();
            $sql = "SELECT * FROM tm_categoria WHERE estado = 1";
            $sql = $conect->prepare($sql);
            $sql->execute();
            $r=$sql->fetchAll();
            return  $r;
        }



    }

?>