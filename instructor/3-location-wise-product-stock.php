<?php include_once '../config.inc.php';?>

<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Location wise Product Stock View - <?=GLOBAL_TITLE;?></title>
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
    <link href='https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <link href="vendors/@coreui/icons/css/free.min.css" rel="stylesheet">
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-lg-11 col-sm-11 col-10">
                                                <i class="fa fa-align-justify"></i>
                                                <h5>Location wise Product Stock View </h5>
                                            </div>

                                            <div class="col-lg-1 col-sm-1 col-2">
                                                <a href="assets/Sample-Product.xls" class="btn btn-sm btn-success"
                                                    style="float:right; margin-right: 10px;">Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-responsive-sm table-bordered table-striped table-sm"
                                            id="example">
                                            <thead>
                                                <tr>
                                                    <th>Location</th>
                                                    <th>Product Code</th>
                                                    <th>Product Name</th>
                                                    <th>Unit of Measure</th>
                                                    <th>Quantity</th>
                                                    <th>Baseline Price (Rs.)</th>
                                                    <th>Approximate Stock Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chennai</td>
                                                    <td>SCR01</td>
                                                    <td>Scrap</td>
                                                    <td>kg</td>
                                                    <td>3</td>
                                                    <td>40</td>
                                                    <td>
                                                        120
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kallakurichi </td>
                                                    <td>TAR01</td>
                                                    <td>Table Runner</td>
                                                    <td>kg</td>
                                                    <td>5</td>
                                                    <td>30</td>
                                                    <td>
                                                        150
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thirupathur </td>
                                                    <td>APR01</td>
                                                    <td>Apron</td>
                                                    <td>kg</td>
                                                    <td>20</td>
                                                    <td>5</td>
                                                    <td>
                                                        100
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Vellore</td>
                                                    <td>PCO01</td>
                                                    <td>Pillow Cover</td>
                                                    <td>kg</td>
                                                    <td>20</td>
                                                    <td>5</td>
                                                    <td>
                                                        100
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

</body>

</html>