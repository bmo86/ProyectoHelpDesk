<header class="site-header">
	    <div class="container-fluid">
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	        <span>toggle menu</span>
	        </button>
			
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            
								<?php
									if ($_SESSION['tipoRol'] == 1) {
									?>
		                            <img src="../../public/img/usuario-64.png" alt="">
									<?php
									}else{
										?>
		                            <img src="../../public/img/soporte-tecnico-64.png" alt="">
										<?php
									}
								?>

	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="../logout/logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	                    <button class="hamburger hamburger--htla">
	           				 <span>toggle menu</span>
	       				</button>
	                </div><!--.site-header-shown-->

					<!-- Id del Cliente -->
					<input type="hidden" id="id_user" value="<?php echo $_SESSION["uso_id"] ?>"> <!-- idUsuario -->
					<input type="hidden" id="rol" value="<?php echo $_SESSION['tipoRol']?>"> <!-- tipoRol -->

					<div class="dropdown dropdown-typical">
						<a href="#" class="dropdown-toggle no-arr">
							<span class="font-icon dont-icon-user"></span>
							<span class="lblcontactonomx"><?php echo $_SESSION["uso_name"]." ".$_SESSION["uso_lastName"]?></span>
						</a>
					</div>
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <div class="dropdown dropdown-typical">
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                        
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->