<?php
    /*TODO: Llamando a cadena de Conexion */
    require_once("../config/conexion.php");
    /*TODO: Llamando a la clase */
    require_once("../models/Curso.php");
    /*TODO: Inicializando Clase */
    $curso = new Curso();

    /*TODO: Opcion de solicitud de controller */
    switch($_GET["op"]){

        case "listarcurso":
            ?>
                <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none" >
                <?php
                    $datos=$curso->get_curso();
                    foreach ($datos as $row) {
                        ?>
                            <div class="item">
                                <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                    <div class="card-image w-100 mb-3">
                                        <a href="<?php echo $row['cur_url']; ?>" target="_blank" class="video-bttn position-relative d-block"><img src="../../public/img/<?php echo $row['cur_img']; ?>" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1">PHP</span>
                                        <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?php echo $row['cur_precio']; ?></span>
                                        <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="<?php echo $row['cur_url']; ?>" target="_blank" class="text-dark text-grey-900"><?php echo $row['cur_titulo']; ?> </a></h4>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
                </div>
            <?php
            break;

    }
?>