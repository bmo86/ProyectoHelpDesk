<?php
	if ($_SESSION['tipoRol'] == 1) {
		?>
		<nav class="side-menu " >
			<ul class="side-menu-list">
				<li class="blue-dirty">
					<a href="../home/">
						<span class=" font-icon font-icon-home glyphicon glyphicon-th"></span>
						<span class="lbl">Inicio</span>
					</a>
				</li>
				<li class="blue-dirty">
					<a href="../newTicket/newTicket.php">
						<span class="font-icon font-icon-edit glyphicon glyphicon-th"></span>
						<span class="lbl">Nuevo Ticket</span>
					</a>
				</li>

				<li class="blue-dirty">
					<a href="../consulTicket/consult.php">
						<span class="font-icon font-icon-doc glyphicon glyphicon-th"></span>
						<span class="lbl">Consultar Ticket</span>
					</a>
				</li>
			</ul>
			<section>
				
			</section>
		</nav><!--.side-menu-->
		<?php
	}else {
		?>
		<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="blue-dirty">
	            <a href="../home/">
	                <span class=" font-icon font-icon-home glyphicon glyphicon-th"></span>
	                <span class="lbl">Inicio</span>
                </a>
	        </li>

            <li class="blue-dirty">
	            <a href="../consulTicket/newclient.php">
	                <span class=" font-icon font-icon-user glyphicon glyphicon-th"></span>
	                <span class="lbl">Nuevos Usuarios</span>
                </a>
	        </li>

			<li class="blue-dirty">
	            <a href="../consulTicket/consult.php">
	                <span class=" font-icon font-icon-doc glyphicon glyphicon-th"></span>
	                <span class="lbl">Consultar Ticket</span>
                </a>
	        </li>
	    <section>
	        
	    </section>
	</nav><!--.side-menu-->

		<?php
	}
?>

