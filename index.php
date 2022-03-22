<?php

require_once("config/conection.php");
    if (isset($_POST["enviar"]) and $_POST["enviar"]=="si") {
        require_once("models/user.php");
        $user = new user();
        $user->login();
    }

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BMO</title>

	<link href="public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="public/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="public/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="public/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="public/img/favicon.png" rel="icon" type="image/png">
	<link href="public/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" action="" method="POST" id="idForm">
                    <input type="hidden" id="typeRol" name="typeRol" value="1">
                    <div class="sign-avatar">
                        <img src="public/img/usuario.png" id="photoU" alt="">
                    </div>
                    <header class="sign-title " id="lblTitulo">Acceso Usuario</header>

                    <?php
                        if (isset($_GET["m"])) {
                            switch ($_GET["m"]) {
                                case '1':
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    <div class="d-flex aling-items-center justify-content-start">
                                        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                        <span>El usuario o la contraseña son incorectos</span>
                                    </div>
                                    </div>
                                    <?php
                                    break;
                                case '2':
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    <div class="d-flex aling-items-center justify-content-start">
                                        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                        <span>Los campos estan vacios.</span>
                                    </div>
                                    </div>
                                    <?php
                                    break;
                            }
                        }
                    ?>

                    <div class="form-group">
                        <input type="text" id="uso_correo" name="uso_correo" class="form-control" placeholder="E-Mail"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="uso_pass" name="uso_pass" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <!-- 
                        <div class="float-right reset">
                            <a href="reset-password.html">Reset Password</a>
                        </div> -->
                        <div class="float-left reset">
                            <a href="#" id="btnSoporte">Aceso Soporte</a>
                        </div>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded btn-info">Aceptar</button>
                    <p class="sign-note">Hello!!! <a href="sign-up.html"></a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="public/js/lib/jquery/jquery.min.js"></script>
<script src="public/js/lib/tether/tether.min.js"></script>
<script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="public/js/app.js"></script>
<script type="text/javascript" src="index.js"></script>

</body>
</html>