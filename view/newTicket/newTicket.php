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
<title>BMO - Nuevo ticket</title>
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
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/home.php">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">

			<h5 class="m-t-lg with-border">Igresar Informacion: </h5>

				<div class="row">
					<form method="POST" id="tick_form">

					<input type="hidden" id="usoId" name="usoId" value="<?php echo $_SESSION["uso_id"]?>"></input>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoria</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<select id="catId" name="catId" class="form-control">
											
										</select>
									</div>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="titulo">Titulo </label>
								<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="descrip">Descripción</label>
								<div class="summernote-theme-3" >
									<textarea class="summernote"  id="descrip" name="descrip"></textarea>
								</div>

							</fieldset>
						</div>
						<div class="col-lg-12">
						<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-warning-outline">Enviar</button>
						<!-- <button type="button" class="btn btn-rounded btn-inline btn-secondary-outline">Cancelar</button> -->
						</div>
					</form>
				</div><!--.row-->

		</div>
	</div>
	
<!-- Contenido -->

<?php require_once("../MainJs/mainJs.php")?>

<script type="text/javascript" src="newTicket.js"></script>
</body>
</html>
	


