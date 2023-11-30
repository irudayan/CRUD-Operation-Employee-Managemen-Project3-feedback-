<?php include_once '../config.inc.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Reports > Sales - <?=GLOBAL_TITLE;?></title>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reports > Sales - <?=GLOBAL_TITLE;?></title>
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

    <style>
    .vertical_line {
        height: 150px;
        width: 1px;
        background: #000;
        margin-left: 5px;
    }

    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
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
                                            <h5>Reports > Sales
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
                                                            <label for="city">Location</label>
                                                            <select class="form-control select2" id="select1"
                                                                name="select1">
                                                                <option value="0">All</option>
                                                                <option value="CFO USA"> Karur</option>
                                                                <option value="CFO Global">Erode</option>
                                                                <option value="CFO Global">Coimbatore</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <ul class="bottom-buttons">
                                                        <li><a href="admin/7-reports1-output.php"><button
                                                                    class="btn btn-info"
                                                                    type="button">Generate</button></a></li>
                                                    </ul>

                                                    <figure class="highcharts-figure">
                                                        <div id="container"></div>

                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            <?php include_once 'footer.php';?>
        </div>
    </div>
    </div>
    </div>

    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <script>
    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'Sales'
        },
        subtitle: {
            align: 'left',
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: ''
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}'
                }
            }
        },

    

        series: [{
            name: "Products",
            colorByPoint: true,
            data: [{
                    name: "Scrap",
                    y: 62.74,
                    drilldown: "Scrap"
                },
                {
                    name: "Table Runner",
                    y: 25.57,
                    drilldown: "Table Runner"
                },
                {
                    name: "Apron",
                    y: 10.57,
                    drilldown: "Apron"
                },
                {
                    name: "Pillow Cover",
                    y: 34.57,
                    drilldown: "Pillow Cover"
                }
               
            ]
        }],
        drilldown: {
            breadcrumbs: {
                position: {
                    align: 'right'
                }
            },
            series: [{
                    name: "Scrap",
                    id: "Scrap",
                    data: [
                        [
                            "Vellore",
                            5.5
                        ],
                        [
                            "Thirupathur",
                            1.3
                        ],
                        [
                            "Kallakurichi",
                            53.02
                        ],
                        [
                            "Chennai",
                            1.4
                        ]
                       
                    ]
                },
                {
                    name: "Table Runner",
                    id: "Table Runner",
                    data: [
                        [
                            "Vellore",
                            1.02
                        ],
                        [
                            "Thirupathur",
                            7.36
                        ],
                        [
                            "Kallakurichi",
                            0.35
                        ],
                        [
                            "Chennai",
                            0.11
                        ]
                       
                    ]
                },
                {
                    name: "Apron",
                    id: "Apron",
                    data: [
                        [
                            "Vellore",
                            1.02
                        ],
                        [
                            "Thirupathur",
                            7.36
                        ],
                        [
                            "Kallakurichi",
                            0.35
                        ],
                        [
                            "Chennai",
                            0.11
                        ]
                       
                    ]
                },
                {
                    name: "Pillow Cover",
                    id: "Pillow Cover",
                    data: [
                        [
                            "Vellore",
                            1.02
                        ],
                        [
                            "Thirupathur",
                            7.36
                        ],
                        [
                            "Kallakurichi",
                            53.02
                        ],
                        [
                            "Chennai",
                            1.4
                        ]
                       
                    ]
                }
                
            ]
        }
    });
    </script>
</body>
</html>