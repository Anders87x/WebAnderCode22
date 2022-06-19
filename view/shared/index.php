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
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">

                            <div class="card-body p-lg-5 p-4 w-100 border-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb-4 font-lg fw-700 mont-font mb-5">Grupos</h4>

                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Facebook</div>
                                        <ul class="list-inline mb-4">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="https://web.facebook.com/groups/2829851763893575/" target="_blank" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-primary text-white feather-message-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">AnderCode< / > Community</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                        </ul>

                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Whatsapp</div>
                                        <ul class="list-inline mb-4">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="https://chat.whatsapp.com/IwWtBWde9BZGJ0x3igzLpK" target="_blank" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-success text-white feather-message-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">AnderCode Grupo 1</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="https://chat.whatsapp.com/DY9z99MmxG01XkH3QMMRrN" target="_blank" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-success text-white feather-message-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">AnderCode Grupo 2</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="https://chat.whatsapp.com/GqCjUdlzIGI8MzUlhOxR8J" target="_blank" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-success text-white feather-message-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">AnderCode Grupo 3</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="https://chat.whatsapp.com/DzloRK7Q6WeJdAPPCBRitR" target="_blank" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-success text-white feather-message-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">AnderCode Grupo 4</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                        </ul>

                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Telegram</div>
                                        <ul class="list-inline mb-4">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="https://t.me/+E3h3wXRRtOk4NmZh" target="_blank" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-primary text-white feather-message-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">AnderCode Grupo</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                        </ul>

                                        <div class="nav-caption fw-600 font-xssss text-grey-500 mb-2">Discord</div>
                                        <ul class="list-inline mb-4">
                                            <li class="list-inline-item d-block border-bottom mr-0"><a href="https://discord.gg/txTJzstc" target="_blank" class="pt-2 pb-2 d-flex"><i class="btn-round-md bg-info text-white feather-message-circle font-md mr-3"></i> <h4 class="fw-600 font-xssss mb-0 mt-3">AnderCode< / > Server</h4><i class="ti-angle-right font-xsss text-grey-500 ml-auto mt-3"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

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
    <script type="text/javascript" src="shared.js"></script>
    <!--JS Css -->

</body>

</html>