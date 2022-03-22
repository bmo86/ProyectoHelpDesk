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
<title>Bmo - Consultar</title>
</head>
<body class="with-side-menu theme-side-madison-caribbean chrome-browser">

<?php require_once("../MainHeade/MainHeade.php")?>

	<div class="mobile-menu-left-overlay"></div>
    
<?php require_once("../MainNav/MainNav.php")?>

<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
		<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Consultar Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/home.php">Home</a></li>
								<li class="active">Consultar Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
			<input type="hidden" id="usoId" name="usoId" value="<?php echo $_SESSION["uso_id"]?>"></input>
				<table id="tableConsult" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 2%;">No. Ticket</th>
							<th style="width: 15%;">Categoria</th>
							<th class="d-none d-sm-table-cell" style="width: 30%;">Titulo</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Creacion</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Estado</th>
							<th class="text-center" style="width: 1%;">Opcion</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>

		</div>
	</div>
<!-- Contenido -->

<?php require_once("../MainJs/mainJs.php")?>

<script type="text/javascript" src="consult.js"></script>
</body>
</html>
	


