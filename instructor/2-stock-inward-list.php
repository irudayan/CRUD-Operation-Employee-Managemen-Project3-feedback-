<?php include_once '../config.inc.php';?>

<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Stock Inward - <?=GLOBAL_TITLE;?></title>
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
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-lg-10 col-sm-10 col-xs-12">
                                                <i class="fa fa-align-justify"></i>
                                                <h5>Stock Inward</h5>
                                            </div>
                                            <div class="col-lg-2 col-sm-2 col-12">
                                                <a href="admin/2-stock-inward-add.php" class="btn btn-sm btn-info"
                                                    style="float:right;">Add
                                                </a>
                                                <button style="float:right; margin-right: 10px;"
                                                    class="btn btn-sm btn-success" data-toggle="modal"
                                                    data-target="#addTodoModal" type="button">Download</button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <table class="table table-responsive-sm table-bordered table-striped table-sm"
                                            id="example">
                                            <thead>
                                                <tr>
                                                    <th>Inward Location</th>
                                                    <th>Inward Date</th>
                                                    <th>Product Code</th>
                                                    <th>Quantity</th>
                                                    <th>Unit of Measure</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chennai</td>
                                                    <td>09-08-2022</td>
                                                    <td>SCR01</td>
                                                    <td>3</td>
                                                    <td>kg</td>
                                                    <td>
                                                        <a href="admin/2-stock-inward-view.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-search"></i></a>
                                                        &nbsp;
                                                        <a href="admin/2-stock-inward-edit.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-pencil"></i></a>
                                                        &nbsp;

                                                        <a href="javascript:void(0);"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-remove"
                                                                style="color: red;"></i></a> &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kallakurichi </td>
                                                    <td>23-08-2022</td>
                                                    <td>TAR01</td>
                                                    <td>5</td>
                                                    <td>kg</td>
                                                    <td>
                                                        <a href="admin/2-stock-inward-view.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-search"></i></a>
                                                        &nbsp;
                                                        <a href="admin/2-stock-inward-edit.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-pencil"></i></a>
                                                        &nbsp;

                                                        <a href="javascript:void(0);"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-remove"
                                                                style="color: red;"></i></a> &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thirupathur </td>
                                                    <td>29-08-2022</td>
                                                    <td>APR01</td>
                                                    <td>20</td>
                                                    <td>kg</td>
                                                    <td>
                                                        <a href="admin/2-stock-inward-view.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-search"></i></a>
                                                        &nbsp;
                                                        <a href="admin/2-stock-inward-edit.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-pencil"></i></a>
                                                        &nbsp;

                                                        <a href="javascript:void(0);"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-remove"
                                                                style="color: red;"></i></a> &nbsp;
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Vellore </td>
                                                    <td>29-08-2022</td>
                                                    <td>PCO01</td>
                                                    <td>20</td>
                                                    <td>kg</td>
                                                    <td>
                                                        <a href="admin/2-stock-inward-view.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-search"></i></a>
                                                        &nbsp;
                                                        <a href="admin/2-stock-inward-edit.php"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-pencil"></i></a>
                                                        &nbsp;

                                                        <a href="javascript:void(0);"><i
                                                                class="c-icon c-icon-1xl mb-2 cil-remove"
                                                                style="color: red;"></i></a> &nbsp;
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
    <div class="modal fade" id="addTodoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Export</h4>
                    <a href="assets/Sample-Stockinward.xls" class="btn btn-sm btn-success"
                        style="float:left; margin-right: 10px;">Export
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="postal-code">Location</label>
                            <select class="form-control" name="cars" id="cars">
                                <option value="">Please Select</option>
                                <option value="Chennai" selected>Chennai</option>
                                <option value="Kallakurichi">Kallakurichi</option>
                                <option value="Thirupathur">Thirupathur</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="postal-code">Product Code</label>
                            <select class="form-control" name="cars" id="cars">
                                <option value="">Please Select</option>
                                <option value="CHU01" selected>CHU01</option>
                                <option value="SAR01">SAR01</option>
                                <option value="JEA01">JEA01</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="postal-code">Unit of Measure</label>
                            <select class="form-control" name="cars" id="cars">
                                <option value="">Please Select</option>
                                <option value="KGS" selected>KGS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    function addTodo() {
        var task = $('#task').val();
        let _url = `/todos`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: "POST",
            data: {
                todo: task,
                _token: _token
            },
            success: function(data) {
                todo = data
                $('table tbody').append(`
                        <tr id="todo_${todo.id}">
                            <td>${todo.id}</td>
                            <td>${ todo.todo }</td>
                            <td>
                                <a data-id="${ todo.id }" onclick="editTodo(${todo.id})" class="btn btn-info">Edit</a>
                                <a data-id="${todo.id}" class="btn btn-danger" onclick="deleteTodo(${todo.id})">Delete</a>
                            </td>
                        </tr>
                    `);

                $('#task').val('');

                $('#addTodoModal').modal('hide');
            },
            error: function(response) {
                $('#taskError').text(response.responseJSON.errors.todo);
            }
        });
    }
    </script>
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
    <script>
    $('#show').on('click', function() {
        $('.center').show();
        $(this).hide();
    })

    $('#close').on('click', function() {
        $('.center').hide();
        $('#show').show();
    })
    </script>

</body>

</html>