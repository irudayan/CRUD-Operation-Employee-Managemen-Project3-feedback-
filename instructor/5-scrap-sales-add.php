<?php include_once '../config.inc.php';?>
<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add Scrap Sales - <?=GLOBAL_TITLE;?></title>
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
                                        <h5>Add Scrap Sales</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Product-Type">Referece Number</label>
                                                <input class="form-control" id="Product-Type" type="text"
                                                    value="REF2201">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="Product-Code">Date</label>
                                                <input class="form-control" id="Product-Code" type="text"
                                                    value="<?php echo date('d-m-Y'); ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Product-Name">Customer</label>
                                                <input class="form-control" id="Product-Name" type="text"
                                                    value="Customer 1">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">Contact Number</label>
                                                <input class="form-control" id="Product-Name" type="text"
                                                    value="8954326134">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Baseline-Price">Address</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="Athanavoor">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">City</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    maxlength="500" value="Thirupathur">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Baseline-Price">State</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="Tamil Nadu">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">GST Number</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    maxlength="500" value="AAAAA0000A">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="type-details form-group col-sm-12">
                                                <button class="btn btn btn-info add" type="button"
                                                    style="float:right; margin-bottom: 14px;">+</button>

                                                <table class="table table-striped" id="participantTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No</th>
                                                            <th>Product</th>
                                                            <th>Quantity</th>
                                                            <th>UOM</th>
                                                            <th>Unit Price</th>
                                                            <th>Total</th>
                                                            <th>Discount</th>
                                                            <th>Net</th>
                                                        </tr>
                                                    </thead>
                                                    <tr class="participantRow">


                                                        <td> 01 </td>
                                                        <td>
                                                            <select name="" id="" class="form-group required-entry">
                                                                <option value="CHU01">SCR01</option>
                                                                <option value="CHU02">TAR01</option>
                                                                <option value="CHU03">APR01</option>
                                                                <option value="CHU04">PCO01</option>
                                                            </select>
                                                            <!-- <input name="" id="" type="text" placeholder="CHU01"
                                                                class="required-entry"> -->
                                                        </td>
                                                        <td>
                                                            <input name="" id="" type="text" class="required-entry"
                                                                style="width:50px;">
                                                        </td>
                                                        <td>
                                                            <select name="" id="" class="form-group required-entry">
                                                                <option value="CHU01">kg</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input name="" id="" type="text" class="required-entry"
                                                                style="width:50px;">
                                                        </td>
                                                        <td>
                                                            <input name="" id="" type="text" class="required-entry">
                                                        </td>
                                                        <td>
                                                            <input name="" id="" type="text" class="required-entry">
                                                        </td>
                                                        <td>
                                                            <input name="" id="" type="text" class="required-entry">
                                                        </td>
                                                        <td>
                                                            <button class="btn remove" type="button"><i
                                                                    class="c-icon c-icon-1xl mb-2 cil-remove"
                                                                    style="color: red;"></i></button>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" style="text-align: right;padding-right: 51px;">
                                                            <strong>Grand Total</strong>
                                                        </td>
                                                        <td colspan="2" style="text-align: right; padding-right: 40px;">
                                                            <input name="" id="" type="text" value="20000"
                                                                class="required-entry">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <h5>Payment Method</h5>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Baseline-Price">Cash (Rs.)</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="10000">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">Account (Rs.)</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    maxlength="500" value="10000">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Baseline-Price">Approved By</label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    value="Approver 1">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">Approved Date </label>
                                                <input class="form-control" id="Baseline-Price" type="text"
                                                    maxlength="500" value="23-08-2022">
                                            </div>
                                        </div>



                                    </div>
                                    <ul class="bottom-buttons">
                                        <li><a href="admin/5-scrap-sales-list.php"><button class="btn btn-danger"
                                                    type="button"
                                                    style="margin-bottom: 29px; margin-left: 22px; margin-top: -22px;">Cancel</button></a>
                                        </li>
                                        <li><a href="admin/5-scrap-sales-list.php"><button class="btn btn-info"
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
    <script type="text/javascript">
    /* Variables */
    var p = $("#participants").val();
    var row = $(".participantRow");

    /* Functions */
    function getP() {
        p = $("#participants").val();
    }

    function addRow() {
        row.clone(true, true).appendTo("#participantTable");
    }

    function removeRow(button) {
        button.closest("tr").remove();
    }
    /* Doc ready */
    $(".add").on('click', function() {
        getP();
        if ($("#participantTable tr").length < 17) {
            addRow();
            var i = Number(p) + 1;
            $("#participants").val(i);
        }
        $(this).closest("tr").appendTo("#participantTable");
        if ($("#participantTable tr").length === 3) {
            $(".remove").hide();
        } else {
            $(".remove").show();
        }
    });
    $(".remove").on('click', function() {
        getP();
        if ($("#participantTable tr").length === 3) {
            //alert("Can't remove row.");
            $(".remove").hide();
        } else if ($("#participantTable tr").length - 1 == 3) {
            $(".remove").hide();
            removeRow($(this));
            var i = Number(p) - 1;
            $("#participants").val(i);
        } else {
            removeRow($(this));
            var i = Number(p) - 1;
            $("#participants").val(i);
        }
    });
    $("#participants").change(function() {
        var i = 0;
        p = $("#participants").val();
        var rowCount = $("#participantTable tr").length - 2;
        if (p > rowCount) {
            for (i = rowCount; i < p; i += 1) {
                addRow();
            }
            $("#participantTable #addButtonRow").appendTo("#participantTable");
        } else if (p < rowCount) {}
    });
    </script>
    <script>
    jQuery(document).ready(function($) {
        $('select[name=type]').change(function() {
            // hide all optional elements

            $('.type-details').css('display', 'none');

            $("select[name=type] option:selected").each(function() {
                if ($(this).val() == "2") {
                    $('.type-details').css('display', 'block');
                }
            });
        });
    });
    </script>
    <script>
    $('.select2[multiple]').select2({
        width: '100%',
        closeOnSelect: false
    })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <script>
    $('.dropdown')
        .dropdown({
            // you can use any ui transition
            transition: 'drop'
        });
    </script>

</body>

</html>