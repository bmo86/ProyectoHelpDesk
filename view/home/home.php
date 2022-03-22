<?php 
	require_once("../../config/conection.php");
	if (!isset($_SESSION["uso_id"])) {
		header("Location:".conect::ruta()."index.php");
	}
?>
<!DOCTYPE html>
<html>
<?php
    require_once("../MainHeader/head.php");
?>

<!-- Titulo -->
<title>Bmo - Home</title>
</head>
<body class="with-side-menu theme-side-madison-caribbean chrome-browser">

<?php require_once("../MainHeade/MainHeade.php")?>

	<div class="mobile-menu-left-overlay"></div>
    
<?php require_once("../MainNav/MainNav.php")?>

<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div>
	</div>
<!-- Contenido -->

<?php require_once("../MainJs/mainJs.php")?>

<script type="text/javascript" src="home.js"></script>
</body>
</html>
	



