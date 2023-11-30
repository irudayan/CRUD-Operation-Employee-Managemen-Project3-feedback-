<?php include_once '../config.inc.php';?>

<!DOCTYPE html>

<html lang="en">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard - <?=GLOBAL_TITLE;?></title>
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

    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>

<body class="c-app">

    <?php include_once 'side-menu.php';?>

    <div class="c-wrapper c-fixed-components">
        <?php include_once 'header.php';?>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">

                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="card text-white">
                                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <a href="student/rd-feedback.php">RD Feedback</a><br><a href="student/spp-feedback.php">SPP Feedback</a><br><a href="student/wi-feedback.php">WI Feedback</a>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-2 mx-2" style="height:20px;">

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-primary">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">20</div>
                                            <div>Products</div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-2 mx-2" style="height:20px;">

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-success">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">14</div>
                                            <div>Stock Inward</div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-2 mx-2" style="height:20px;">

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-danger">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">6</div>
                                            <div>Stock Availability</div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-2 mx-2" style="height:20px;">

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-warning">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">6</div>
                                            <div>Scrap Sales</div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-2 mx-2" style="height:20px;">

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-dark">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">6</div>
                                            <div>Sales Quote Entry</div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-2 mx-2" style="height:20px;">

                                    </div>
                                </div>

                            </div> -->
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once 'footer.php';?>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>


</body>

</html>