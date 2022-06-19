<?php
    require_once("../../config/conexion.php");

    require_once("../../models/Curso.php");
    $curso = new Curso();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AnderCode - Cursos Online</title>

    <!--TODO: Html Css -->
    <?php require_once("../html/css.php"); ?>
    <!--Html Css -->
</head>

<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    <div class="main-wrapper">

        <!--TODO: Html navigation -->
        <?php require_once("../html/navigation.php"); ?>
        <!-- navigation -->

        <!-- main content -->
        <div class="main-content">
            <div class="middle-sidebar-header bg-white">
                <button class="header-menu"></button>
                <form action="#" class="float-left header-search">

                </form>
            </div>

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card rounded-xxl p-lg--5 border-0 bg-no-repeat bg-image-contain banner-wrap" style="background-image: url(../../public/images/fogg-clip.png);">
                                <div class="card-body p-4">
                                    <h2 class="display3-size fw-400 display2-md-size sm-mt-7 sm-pt-10">Encuentra el <b class="d-lg-block">Curso perfecto</b></h2>    
                                    <h4 class="text-grey-500 font-xssss fw-500 ml-1 lh-24">Todo lo que necesitas para aprender a programar</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 pt-4 mb-3">
                            <h2 class="fw-400 font-lg d-block">Cursos <b> Populares</b></h2>
                        </div>

                        <div class="col-lg-12 pt-2">

                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none" >
                                <?php
                                    $datos=$curso->get_curso_1();
                                    foreach ($datos as $row) {
                                    ?>
                                        <div class="item">
                                            <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                <div class="card-image w-100 mb-3">
                                                    <a href="<?php echo $row['cur_url']; ?>" target="_blank" class="video-bttn position-relative d-block"><img src="../../public/img/<?php echo $row['cur_img']; ?>" alt="image" class="w-100"></a>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?php echo $row['cur_etiqueta']; ?></span>
                                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?php echo $row['cur_precio']; ?></span>
                                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="<?php echo $row['cur_url']; ?>" target="_blank" class="text-dark text-grey-900"><?php echo $row['cur_titulo']; ?> </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none" >
                                <?php
                                    $datos=$curso->get_curso_2();
                                    foreach ($datos as $row) {
                                    ?>
                                        <div class="item">
                                            <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                <div class="card-image w-100 mb-3">
                                                    <a href="<?php echo $row['cur_url']; ?>" target="_blank" class="video-bttn position-relative d-block"><img src="../../public/img/<?php echo $row['cur_img']; ?>" alt="image" class="w-100"></a>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?php echo $row['cur_etiqueta']; ?></span>
                                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?php echo $row['cur_precio']; ?></span>
                                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="<?php echo $row['cur_url']; ?>" target="_blank" class="text-dark text-grey-900"><?php echo $row['cur_titulo']; ?> </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none" >
                                <?php
                                    $datos=$curso->get_curso_3();
                                    foreach ($datos as $row) {
                                    ?>
                                        <div class="item">
                                            <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                <div class="card-image w-100 mb-3">
                                                    <a href="<?php echo $row['cur_url']; ?>" target="_blank" class="video-bttn position-relative d-block"><img src="../../public/img/<?php echo $row['cur_img']; ?>" alt="image" class="w-100"></a>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?php echo $row['cur_etiqueta']; ?></span>
                                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?php echo $row['cur_precio']; ?></span>
                                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="<?php echo $row['cur_url']; ?>" target="_blank" class="text-dark text-grey-900"><?php echo $row['cur_titulo']; ?> </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none" >
                                <?php
                                    $datos=$curso->get_curso_4();
                                    foreach ($datos as $row) {
                                    ?>
                                        <div class="item">
                                            <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                <div class="card-image w-100 mb-3">
                                                    <a href="<?php echo $row['cur_url']; ?>" target="_blank" class="video-bttn position-relative d-block"><img src="../../public/img/<?php echo $row['cur_img']; ?>" alt="image" class="w-100"></a>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?php echo $row['cur_etiqueta']; ?></span>
                                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?php echo $row['cur_precio']; ?></span>
                                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="<?php echo $row['cur_url']; ?>" target="_blank" class="text-dark text-grey-900"><?php echo $row['cur_titulo']; ?> </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="owl-carousel category-card owl-theme overflow-hidden overflow-visible-xl nav-none" >
                                <?php
                                    $datos=$curso->get_curso_5();
                                    foreach ($datos as $row) {
                                    ?>
                                        <div class="item">
                                            <div class="card course-card w300 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1 mb-4">
                                                <div class="card-image w-100 mb-3">
                                                    <a href="<?php echo $row['cur_url']; ?>" target="_blank" class="video-bttn position-relative d-block"><img src="../../public/img/<?php echo $row['cur_img']; ?>" alt="image" class="w-100"></a>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1"><?php echo $row['cur_etiqueta']; ?></span>
                                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> <?php echo $row['cur_precio']; ?></span>
                                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="<?php echo $row['cur_url']; ?>" target="_blank" class="text-dark text-grey-900"><?php echo $row['cur_titulo']; ?> </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="middle-sidebar-right right-scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <!--TODO: html Profile -->
                        <?php require_once("../html/profile.php"); ?>
                        <!--html Profile -->

                        <!--TODO: html Newletter -->
                        <?php require_once("../html/newletter.php"); ?>
                        <!--html Newletter -->

                    </div>
                </div>
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>  
                </button>
            </div>
        </div>

        <?php require_once("../html/appfooter.php"); ?>

    </div> 

    <!--TODO: JS Css -->
    <?php require_once("../html/js.php"); ?>
    <script type="text/javascript" src="home.js"></script>
    <!--JS Css -->

</body>

</html>