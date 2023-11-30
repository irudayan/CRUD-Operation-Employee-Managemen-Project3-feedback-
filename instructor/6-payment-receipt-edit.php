<?php include_once '../config.inc.php';?>
<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Edit Payment Receipt - <?=GLOBAL_TITLE;?></title>
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
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>

    <style>
    #body {
        padding: 30px
    }

    .select2-results__options[aria-multiselectable="true"] li {
        padding-left: 30px;
        position: relative
    }

    .select2-results__options[aria-multiselectable="true"] li:before {
        position: absolute;
        left: 8px;
        opacity: .6;
        top: 6px;
        font-family: "FontAwesome";
        content: "\f0c8";
    }

    .select2-results__options[aria-multiselectable="true"] li[aria-selected="true"]:before {
        content: "\f14a";
    }

    .required:after {
        content: " *";
        color: red;
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
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Edit Payment Receipt</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Product-Type">Payment Receipt Number</label>
                                                <input class="form-control" id="Product-Type" type="text"
                                                    value="PAY2201">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="Product-Code">Payment Receipt Date</label>
                                                <input class="form-control" id="Product-Code" type="text"
                                                    value="<?php echo date('d-m-Y'); ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Product-Name">Sales Reference </label>
                                                <input class="form-control" id="Product-Name" type="text"
                                                    value="Sales Reference">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">Customer</label>
                                                <input class="form-control" id="Product-Name" type="text"
                                                    value="Customer 1">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Baseline-Price">Sales Net Amount</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="20,000">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="Baseline-Price">Product Description / Remarks</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="Product Description / Remarks">
                                            </div>
                                          
                                        </div>

                                        <p><strong>Payment Method</strong></p>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Baseline-Price">Cash</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="10000">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">Account</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    maxlength="500" value="10000">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Baseline-Price">Received By</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="Receiver 1">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">Received Date</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    maxlength="500" value="23-08-2022">
                                            </div>
                                        </div>



                                    </div>
                                    <ul class="bottom-buttons">
                                        <li><a href="admin/6-payment-receipt-list.php"><button class="btn btn-danger"
                                                    type="button"
                                                    style="margin-bottom: 29px; margin-left: 22px; margin-top: -22px;">Cancel</button></a>
                                        </li>
                                        <li><a href="admin/6-payment-receipt-list.php"><button class="btn btn-info"
                                                    type="button"
                                                    style="margin-bottom: 29px; margin-top: -22px;">Submit</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                </div>
        </div>
        </main>
        <?php include_once 'footer.php';?>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->

</body>

</html>