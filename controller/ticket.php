<?php
    require_once("../config/conection.php");
    require_once("../models/Ticket.php");

    $ticket = new Ticket();

    if ($_GET["op"] == "save") {
        $ticket->insertTicket($_POST["usoId"],$_POST["catId"],$_POST["titulo"],$_POST["descrip"]);

    }else if ($_GET["op"] == "searchList") {
        
        $datos=$ticket->searchForClient($_POST["usoId"]);
        $data = Array();
        foreach ($datos as $row ) {
            $sub_array = array();
            $sub_array[] = $row["tic_⁯id"];
            $sub_array[] = $row["cat_name"];
            $sub_array[] = $row["tic_Titulo"];
            $sub_array[] = $row["fecha"];
            $sub_array[] = estado($row["estado"]);
            $sub_array[] = '<button type="button" onclick="ver('.$row["tic_⁯id"].');" class="btn btn-rounded btn-info btn-sm ladda-button" data-style="expand-right" data-size="s"><span class="ladda-label"><i class="fa fa-eye"></i></span><span class="ladda-spinner"></span></button>';
            
        
            $data[] = $sub_array;
            
        }
        
        $r = array(
            "sEcho"=>1,
            "iTotalRecords"=> count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($r);
    }else if ($_GET["op"] == "searchListSop") {
        
        $datos=$ticket->searchGeneral();
        $data = Array();
        foreach ($datos as $row ) {
            $sub_array = array();
            $sub_array[] = $row["tic_⁯id"];
            $sub_array[] = $row["cat_name"];
            $sub_array[] = $row["tic_Titulo"];
            $sub_array[] = $row["fecha"];
            $sub_array[] = estado($row["estado"]);
            $sub_array[] = '<button type="button" onclick="ver('.$row["tic_⁯id"].');" class="btn btn-rounded btn-info btn-sm ladda-button" data-style="expand-right" data-size="s"><span class="ladda-label"><i class="fa fa-eye"></i></span><span class="ladda-spinner"></span></button>';
            
        
            $data[] = $sub_array;
            
        }
        
        $r = array(
            "sEcho"=>1,
            "iTotalRecords"=> count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($r);

    }else if ($_GET["op"] == "detalleTick") {
        $datos = $ticket->searchTicketDeta($_POST['detalleTick']);
        ?>
        <?php
            
            foreach($datos as $row){

                ?>
                <article class="activity-line-item box-typical">
					<div class="activity-line-date">
                    <?php echo $row['fecha']?>
					</div>
					<header class="activity-line-item-header">
						<div class="activity-line-item-user">
							<div class="activity-line-item-user-photo">
								<a href="#">
                                <?php
									if ($row['tipoRol']== 1) {
									?>
                                        <img src="../../public/img/usuario-64.png" alt="">
									<?php
									}else{
										?>
                                        <img src="../../public/img/soporte-tecnico-64.png" alt="">
										<?php
									}
								?>
								</a>
							</div>
							<div class="activity-line-item-user-name"><?php echo $row['nombre']?></div>
                            <div class="activity-line-item-user-status"><?php echo tipo($row['tipoRol']) ?></div>
						</div>
					</header>
					<div class="activity-line-action-list">
						<section class="activity-line-action">
							<div class="time"><?php echo $row['hora']?></div>
							<div class="cont">
								<div class="cont-in">
									<p><?php echo $row['tic_detalle']?></p>
									
								</div>
							</div>
						</section><!--.activity-line-action-->
						
					</div><!--.activity-line-action-list-->
				</article>
                <?php
            }
        
        ?>
        <?php
    }else if ($_GET["op"] == "mostar") {
        $datos = $ticket->searchGeneralID($_POST['detalleTick']);
        if (is_array($datos)==true and count($datos)>0) {
           // echo '<script type="text/javascript" > console.log("entro");</script>';
            $output = array(); 
            foreach ($datos as $row) {
                $output["ticId"] = $row["tic_⁯id"];
                $output["tipoRol"] = $row["tipoRol"];
                $output["tic_Titulo"] = $row["tic_Titulo"];
                $output["tic_descrip"] = $row["tic_descrip"];
                $output["uso_id"] = $row["uso_id"];     
                $output["nombre"] = $row["nombre"];     
                $output["fecha"] = $row["fecha"];
                $output["hora"] = $row["hora"]; 
                $output["estado"] = estado($row["estado"]); 
                $output["cat"] = $row["cat_name"];     
                
            }
            echo json_encode($output);
        }
        
    }else if ($_GET["op"] == "saveC") {
        $ticket->saveConversation($_POST['idUser'],$_POST['idTicket'],$_POST['tickDetalle']);
    }else if ($_GET["op"] == "setStatus") {
        $ticket->changeStatus($_POST['idUserC'],$_POST['tickId']);
        $ticket->saveConversation($_POST['idUserC'],$_POST['tickId'],$_POST['tickDetalle']);
    }



    function estado($d){
        if ($d == 1) {
            return '<span class="label label-primary">Activo</span>';
        }else{
            return '<span class="label label-danger">Inactivo</span>';
        }

    }
    function tipo($rol){
        if ($rol == 1) {
            return "Usuario";
        }else {
            return "Soporte";
        }
    }


?>