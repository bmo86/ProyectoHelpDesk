<?
require_once("../config/conection.php");
require_once("../models/client.php"); //client = user por pendejo lo coloque asi xdxxdxdddxdxdx

$Client = new Client();

if ($_GET['op'] == 'saveOrUpdate') {
    if ($_GET['type'] == 1) {
        $Client->saveUser($_POST['name'],$_POST['lastName'],$_POST['email'],$_POST['pass'],$_POST['rol']);
    }else {
        $Client->updateUser($_POST['name'],$_POST['lastName'],$_POST['email'],$_POST['pass'],$_POST['rol'],$_POST['usoId']);
    }
}

?>