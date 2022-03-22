<?php 
    class User extends conect{
       
        public function login(){

            $conectar = parent::conection();
            parent::set_names();
            if(isset($_POST["enviar"])){
                
                $email = $_POST["uso_correo"];
                $pass = $_POST["uso_pass"];
                $tipoRol = $_POST["typeRol"];
                if (empty($email) and empty($pass) and empty($tipoRol)) {
                    header("Location:".conect::ruta()."index.php?m=2");
                    exit();
                }else {
                    $sql = "SELECT * FROM tm_user WHERE uso_correo = ? AND uso_pass = ? AND tipoRol = ? AND estado = 1";
                    
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1,$email);
                    $stmt->bindValue(2,$pass);
                    $stmt->bindValue(3,$tipoRol);
                    $stmt->execute();
                    $r = $stmt->fetch();
                    if (is_array($r) and count($r) > 0) {
                        $_SESSION['uso_id'] = $r['uso_id'];
                        $_SESSION['uso_name'] = $r['uso_name'];
                        $_SESSION['uso_lastName'] = $r['uso_lastName'];
                        $_SESSION['tipoRol'] = $r['tipoRol'];
                        header("Location:".conect::ruta()."view/home/");
                        exit();    
                    }else {
                        header("Location:".conect::ruta()."index.php?m=1");
                        exit();                               
                    }
                    
                }
            }
        }

    }
?>