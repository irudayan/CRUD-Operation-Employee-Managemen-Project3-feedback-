<?php include_once '../config.inc.php';?>

<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Collection Report - <?=GLOBAL_TITLE;?></title>
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
    <link href="vendors/@coreui/icons/css/free.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    .vertical_line {
        height: 150px;
        width: 1px;
        background: #000;
        margin-left: 5px;
    }
    </style>
</head>

<body class="c-app">
    <?php include_once 'side-menu.php';?>
    <div class="c-wrapper c-fixed-components">

        <?php include_once 'header.php';?>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">

                        <!-- /.row-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-10 col-sm-10 col-12">
                                            <h5>Collection Report
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="map">

                                    <div class="fade-in">
                                        <div class="row">

                                            <div class="col-sm-12">


                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="form-group col-sm-3">
                                                            <label for="postal-code">Date From</label>
                                                            <input class="form-control" id="postal-code2" type="text"
                                                                value="<?php echo date('m-01-Y'); ?>">
                                                        </div>
                                                        <div class="form-group col-sm-3">
                                                            <label for="postal-code">Date To</label>
                                                            <input class="form-control" id="postal-code2" type="text"
                                                                value="<?php echo date('m-t-Y'); ?>">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="city">Product</label>
                                                            <select class="form-control select2" id="select1"
                                                                name="select1">
                                                                <option value="0">All</option>
                                                                <option value="Scrap">Scrap</option>
                                                                <option value="Table Runner">Table Runner</option>
                                                                <option value="Apron">Apron</option>
                                                                <option value="Pillow Cover">Pillow Cover</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <ul class="bottom-buttons">
                                                        <li><a href="admin/8-reports2-output.php"><button
                                                                    class="btn btn-info"
                                                                    type="button">Generate</button></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>

                            </div>
                        </div>
                    </div>
                    <!-- /.row-->
            </main>
            <?php include_once 'footer.php';?>
        </div>
    </div>
    </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->


</body>

</html>