<?php include_once '../config.inc.php';?>

<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Sales Quote Entry - <?=GLOBAL_TITLE;?></title>
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
                                            <h5>View Sales Quote Entry
                                            </h5>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 col-12">
                                            <ul class="bottom-buttons top">
                                                <li><a href="admin/9-sales-quote-entry-list.php"><button
                                                            class="btn btn-sm btn-light" type="button">Back</button></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="card-header"><i class="fa fa-align-justify"></i></div>-->


                                <div class="card-body">
                                    <div class="card inner-card a main-card">
                                        <div class="card-body">
                                            <div class="row with-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">

                                                    <p><span>Date</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">

                                                    <p><?php echo date('d-m-Y'); ?></p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Quote Ref</span></p>
                                                </div>

                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>REF01</p>
                                                </div>
                                            </div>
                                            <div class="row without-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Approver</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>Approver</p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Product</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>PRO01</p>
                                                </div>
                                            </div>

                                            <div class="row without-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Qty</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>25</p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>UOM</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>kg</p>
                                                </div>
                                            </div>

                                            <div class="row without-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Remarks</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>Remarks</p>
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="row">
                                            <div class="type-details form-group col-sm-12">
                                        
                                                    <!-- <a href="#" style="float:right; margin-bottom: 14px;"><button
                                                            class="btn btn-sm btn-info" type="button">+</button>
                                                    </a></span> -->
                                            
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                            <th scope="col">Sl No</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Approval Flag</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div> 
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
            </main>
        </div>
    </div>
    <?php include_once 'footer.php';?>
    </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->


</body>

</html>