<?php
    class Client extends conect{

        function saveUser($name,$lastName,$email,$pass,$rol){
            $cn = parent::Conection();
            parent::set_names();
            $sql = "INSERT INTO tm_user(uso_name,uso_lastName,uso_correo,uso_pass,tipoRol) VALUES(?,?,?,?,?)";
            $sql = $cn->prepare($sql);
            $sql->bindValue(1,$name);
            $sql->bindValue(2,$lastName);
            $sql->bindValue(3,$email);
            $sql->bindValue(4,$pass);
            $sql->bindValue(5,$rol);
            return $r = $sql->fetchAll();
        }
        
        public function setStatusUser($usoId,$status){
            $cn = parent::Conection();
            parent::set_names();
            $sql = "UPDATE tm_user s SET s.estado= '".$status."' WHERE s.uso_id= ?";
            $sql = $cn->prepare($sql);
            $sql->bindValue(1,$usoId);
            return $sql->fetchAll();
        }

        
        function updateUser($name,$lastName,$email,$pass,$rol,$usoId){
            $cn = parent::Conection();
            parent::set_names();
            $sql = "UPDATE tm_user s SET s.uso_name= '".$name."',s.lastName= '".$lastName."',s.uso_correo= '".$email."',s.uso_pass= '".$pass."',s.TipoRol= '".$rol."' WHERE s.uso_id= ?";
            $sql = $cn->prepare($sql);
            $sql->bindValue(1,$usoId);
            return $sql->fetchAll();
        }
    }

    

?>