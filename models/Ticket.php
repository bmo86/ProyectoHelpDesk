<?php

    class Ticket extends Conect{

        public function insertTicket($usoId,$catId,$titulo,$descrip){
            $conect = parent::Conection();
            parent::set_names();
            $sql = "INSERT INTO tm_ticket (uso_id, cat_id, tic_Titulo, tic_descrip) VALUES (?,?,?,?)";
            $sql = $conect->prepare($sql);
            $sql->bindValue(1, $usoId);
            $sql->bindValue(2, $catId);
            $sql->bindValue(3, $titulo);
            $sql->bindValue(4, $descrip);
            $sql->execute();
            $r=$sql->fetchAll();
            return  $r;
            
        }

         public function searchForClient($usoId){
            $conect = parent::Conection();
            parent::set_names();
                $sql = "SELECT t.tic_⁯id,t.tic_Titulo,t.tic_descrip,c.cat_name,DATE_FORMAT(t.dateCreation,'%d-%m-%Y %H:%m')'fecha',t.estado FROM tm_ticket t
                        JOIN tm_user u ON (t.uso_id = u.uso_id)
                        JOIN tm_categoria c ON (t.cat_id = c.cat_id)
                        WHERE t.estado = 1 AND u.uso_id = ?";
                $sql=$conect->prepare($sql);
                $sql->bindValue(1,$usoId);
                $sql->execute();
                $r = $sql->fetchAll();
                return $r;
            
        }
        public function searchGeneral(){
            $conect = parent::Conection();
            parent::set_names();
                $sql = "SELECT t.tic_⁯id,t.tic_Titulo,t.tic_descrip,c.cat_name,DATE_FORMAT(t.dateCreation,'%d-%m-%Y %H:%m')'fecha',t.estado FROM tm_ticket t
                        JOIN tm_user u ON (t.uso_id = u.uso_id)
                        JOIN tm_categoria c ON (t.cat_id = c.cat_id) ";
                $sql=$conect->prepare($sql);
                $sql->execute();
                $r = $sql->fetchAll();
                return $r;
            
        }

        public function searchTicketDeta($tickId){
            $conect = parent::Conection();
            parent::set_names();
            $sql = "SELECT d.tic_id,u.tipoRol,t.tic_Titulo,t.tic_descrip,d.uso_id,CONCAT(u.uso_name,' ',u.uso_lastName)'nombre', d.tic_detalle,
                DATE_FORMAT(d.dateCreation,'%d/%m/%Y')'fecha',DATE_FORMAT(d.dateCreation,'%h:%i')'hora',t.estado FROM tm_detalletick d
            JOIN tm_user u ON (u.uso_id = d.uso_id)
            JOIN tm_ticket t ON(t.tic_⁯id = d.tic_id)
            WHERE d.tic_id = ? ";

            $sql=$conect->prepare($sql);
            $sql->bindValue(1,$tickId);
            $sql->execute();
            return $r = $sql->fetchAll();

        }
        public function searchGeneralID($tickId){
            $conect = parent::Conection();
            parent::set_names();
                $sql = "SELECT t.tic_⁯id,t.tic_Titulo,t.tic_descrip,c.cat_name,DATE_FORMAT(t.dateCreation,'%d-%m-%Y')'fecha',t.estado,u.tipoRol
                ,u.uso_id,CONCAT(u.uso_name,' ',u.uso_lastName)'nombre',DATE_FORMAT(t.dateCreation,'%h:%i')'hora' FROM tm_ticket t
                        JOIN tm_user u ON (t.uso_id = u.uso_id)
                        JOIN tm_categoria c ON (t.cat_id = c.cat_id)
                        WHERE t.tic_⁯id = ? ";
                $sql=$conect->prepare($sql);
                $sql->bindValue(1,$tickId);
                $sql->execute();
                $r = $sql->fetchAll();
                return $r;
            
        }

        public function saveConversation($idUser,$idTicket,$tickDetalle){
            $conect= parent::Conection();
            parent::set_names();
            /**
             * si es 1 va ser ingresar respuesta
             *  si es 2 va ser cerrar el ticket
             */
                $sql = "INSERT INTO tm_detalletick (uso_id,tic_id,tic_detalle) VALUES (?,?,?)";
            
            $sql = $conect->prepare($sql);
            $sql->bindValue(1,$idUser);
            $sql->bindValue(2,$idTicket);
            $sql->bindValue(3,$tickDetalle);
            $sql->execute();

            return $r = $sql->fetchAll();

        }

        public function changeStatus($idUser,$tickId){
            $conect = parent::Conection();
            parent::set_names();
                $sql = "UPDATE tm_ticket t SET t.estado = 0, t.uso_idCierre = ".$idUser." WHERE t.tic_⁯id = ?";
                $sql = $conect->prepare($sql);
                $sql->bindValue(1,$tickId);
                $sql->execute();
            return $r = $sql->fetchAll();
        }
        
        


    }
?>