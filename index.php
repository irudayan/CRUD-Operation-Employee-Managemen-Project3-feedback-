<?php include_once 'config.inc.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?=GLOBAL_TITLE;?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="c-app">
    <div class="c-wrapper c-fixed-components">
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2> <?=GLOBAL_TITLE;?> - Prototype</h2>
                                        <div class="card-header-actions">&nbsp;</div>
                                    </div>
                                    <div class="card-body">



                                        <nav aria-label="breadcrumb" role="navigation">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="admin/index.php"
                                                        target="_blank">Admin</a></li>
                                                <li class="breadcrumb-item"><a href="instructor/index.php"
                                                        target="_blank">Instructor</a></li>
                                                <li class="breadcrumb-item"><a href="student/index.php"
                                                        target="_blank">Student</a></li>
                                                        
                                            </ol>
                                        </nav>

                                        <!-- <nav aria-label="breadcrumb" role="navigation">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="certified-trainer/index.php">Certified Trainer</a>
                                                </li>
                                            </ol>
                                        </nav>

                                        <nav aria-label="breadcrumb" role="navigation">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="executive/index.php">Executive</a>
                                                </li>
                                            </ol>
                                        </nav>

                                        <nav aria-label="breadcrumb" role="navigation">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="training-supervisor/index.php">Training Supervisor</a>
                                                </li>
                                            </ol>
                                        </nav> -->


                                        <!--<nav class="breadcrumb"><a class="breadcrumb-item" href="3-diocese/index.php" target="_blank">Example</a></nav>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row-->
                    </div>
                </div>
            </main>
            <footer class="c-footer">
                <div>© 2022.<a href="javascript:void(0);"> <?=GLOBAL_TITLE;?>. </a> </div>
                <div class="ml-auto">&nbsp;</div>
            </footer>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->


</body>

</html>