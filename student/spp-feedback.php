<?php include_once '../config.inc.php';?>
<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add Product - <?=GLOBAL_TITLE;?></title>
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
    <div class="c-wrapper c-fixed-components">
        <?php include_once 'header.php';?>
        <div class="c-body">
        <main class="c-main">
                <div class="container">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <header style="background-color: aquamarine; border: 1px solid">
                                    <br>
                                    <center> <h1>SPARKS PETROLEUM SERVICES</h1> </center>
                                    <center> <h2>STUCK PIPE PREVENTION COURSE FEEDBACK FORM</h2></center>
                                    </header>
                                   
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>Was this your first course on this subject?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Yes</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">No</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>How was balance of lecture / discussion to audio-visual presentations?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Well Balanced</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Too Much Visual</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Too Much Lecture</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>How did the course benefits you? (Check as many as applicable)</p>
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Acquainted me with new ideas and approaches</label><br>
                                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                            <label for="vehicle2">Refreshed my previous knowledge</label><br>
                                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                            <label for="vehicle3"> I received no benefits from the course</label><br>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>Please evaluate the simulator session (If applicable)</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>Overall course evaluation</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Excellent</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Very Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div>
                                    <p><label for="w3review">Additional Comments:</label></p>
                                        <textarea id="w3review" name="w3review" rows="4" cols="100"></textarea>
                                        <br>
                                        <br>
                                    <div class="card">
                                        <header style="background-color: aquamarine; border: 1px solid">
                                        <br>
                                        <center> <h2>EVALUATION OF THE INSTRUCTOR</h2> </center>
                                        </header>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>How well did the instructor state the course objectives?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Excellent</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Very Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>How well did the instructor keep the class interesting?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Excellent</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Very Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>How well did the instructor summarize course topics?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Excellent</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Very Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>How well did the instructor maintain a friendly helpful manner?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Excellent</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Very Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>Did the instructor encourage questions and clarify main points?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Excellent</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Very Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <p>How well did the instructor summarize the close of the course?</p>
                                            <input type="radio" id="yes" name="fav_language" value="yes">
                                            <label for="html">Excellent</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Very Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Good</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Fair</label>
                                            <input type="radio" id="no" name="fav_language" value="no">
                                            <label for="css">Poor</label>
                                        </div>
                                    </div>
                                    <p><label for="w3review">Additional Comments:</label></p>
                                        <textarea id="w3review" name="w3review" rows="4" cols="100"></textarea>
                                        <!-- <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="postal-code">Description</label>
                                                <textarea class="form-control" id="postal-code"
                                                    name="comment">Description</textarea>
                                            </div>
                                        </div> -->
                                    </div>
                                    <ul class="bottom-buttons">
                                        <li><a href="admin/1-product-list.php"><button class="btn btn-danger"
                                                    type="button"
                                                    style="margin-bottom: 29px; margin-left: 22px; margin-top: -22px;">Cancel</button></a>
                                        </li>
                                        <li><a href="student/success.php"><button class="btn btn-info"
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