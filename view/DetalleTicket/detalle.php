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
<title>Bmo - Detalle Ticket</title>
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
							<h3 id="detalleId">Detalle Ticket</h3>
							<div id="lbEstado"></div>
							<div class="label label-info" id="lbUserName"></div>
							<br><span class="label label-success" id="lbDate"></span>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/home.php">Home</a></li>
								<li class="active" >Detalle Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			
			<div class="row">
				<div class="col-lg-6">
					<fieldset class="form-group">
					<label class="form-label semibold" for="categoria">Categoria</label>
						<input type="text" class="form-control" id="categoria" name="categoria"  readonly>
					</fieldset>
				</div>
				<div class="col-lg-6">
					<fieldset class="form-group">
						<label class="form-label semibold" for="titulo">Titulo</label>
						<input type="text" class="form-control" id="titulo" name="titulo"  readonly> 
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset class="form-group">
						<label class="form-label semibold" for="descripcion">Descripcion</label>
						<div class="summernote-theme-3">
									<textarea class="summernote"  id="descripcion" name="descripcion" ></textarea>
						</div>
					</fieldset>
				</div>
			</div>
			<section class="activity-line" id="sectionDetalle">

			

			</section><!--.activity-line-->
		<div class="box-typical box-typical-padding" id="pnlConversation">

			<h5 class="m-t-lg with-border">Responder: </h5>

				<div class="row">
					<form method="POST" id="formId">
					<input type="hidden" id="idUser" name="idUser" value="<?php echo $_SESSION["uso_id"]?>"></input>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label semibold" for="tickDetalle">Descripción</label>
							<div class="summernote-theme-3" >
								<textarea class="summernote"  id="tickDetalle" name="tickDetalle"></textarea>
							</div>
						</fieldset>
					</div>
					<div class="col-lg-12">
						<button type="button" id="mandar" class="btn btn-rounded btn-inline btn-warning-outline">Enviar</button>
						<button type="button" id="can" class="btn btn-rounded btn-inline btn-danger">Cerrar el Ticket</button> 
					</div>
				</form>
			</div><!--.row-->

		</div>
	</div><!--.container-fluid-->
</div><!--.page-content-->


<?php require_once("../MainJs/mainJs.php")?>

<script type="text/javascript" src="detalle.js"></script>
</body>
</html>
	


