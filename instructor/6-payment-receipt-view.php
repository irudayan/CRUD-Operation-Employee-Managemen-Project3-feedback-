<?php include_once '../config.inc.php';?>

<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Payment Receipt - <?=GLOBAL_TITLE;?></title>
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
                                            <h5>View Payment Receipt
                                            </h5>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 col-12">
                                            <button  class="btn-sm btn-info" onclick="window.print()" style="float: right;">Print</button>
                                            <!--<ul class="bottom-buttons top">
                                                <li><a href="javascript:void(-);"><button class="btn btn-sm btn-danger"
                                                            type="button">Print</button></a></li>
                                                <li><a href="super-admin/1-dailybudget-list.php"><button
                                                            class="btn btn-sm btn-light" type="button">Back</button></a>
                                                </li>
                                            </ul>-->
                                        </div> 
                                        
                                    </div>
                                </div>
                                <!--<div class="card-header"><i class="fa fa-align-justify"></i></div>-->


                                <div class="card-body">
                                    <div class="card inner-card a main-card">
                                        <div class="card-body">

                                            <div class="row without-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Payment Receipt Number</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>PAY2201</p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Payment Receipt Date</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p><?php echo date('d-m-Y'); ?></p>
                                                </div>
                                            </div>

                                            <div class="row with-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Sales Reference</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>Sales Reference</p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Customer</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>Customer 1</p>
                                                </div>
                                            </div>

                                            <div class="row with-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Sales Net Amount</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>20,000</p>
                                                </div>
                                            </div>

                                            <div class="row with-bg">
                                                <div class="col-lg-3 col-sm-3 col-5">
                                                    <p><span>Product Description / Remarks</span></p>
                                                </div>
                                                <div class="col-lg-9 col-sm-9 col-7">
                                                    <p>Reference site about Lorem Ipsum, giving information on its
                                                        origins, as well as a random Lipsum generator.</p>
                                                </div>
                                            </div>

                                            <br />


                                            <p><strong>Payment Method</strong></p>

                                            <div class="row with-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Cash</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>10000</p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Account</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>10000</p>
                                                </div>
                                            </div>

                                            <div class="row with-bg">
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Received By</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>Receiver 1</p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-5">
                                                    <p><span>Received Date</span></p>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-7">
                                                    <p>23-08-2022</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <ul class="bottom-buttons">
                                        <li><a href="admin/6-payment-receipt-list.php"><button class="btn btn-light"
                                                    type="button">Back</button></a></li>
                                    </ul>
                                </div>
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