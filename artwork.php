<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="assets/css/style.min.css" rel="stylesheet">
    <style>
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }

        html, body {
            height: 100%;
            margin: 0;
        }

        button{
            background-color:#27658A;
        }

        th,td{
            text-align: center;
        }

        a.mouseover-thumbnail-holder {
            position:relative;
            display:block;
            float:left;
            margin-right:10px;
        }
        .large-thumbnail-style {
            display:block;
            border:10px solid #fff;
            box-shadow:0px 0px 5px #aaa;
        }
        a.mouseover-thumbnail-holder .large-thumbnail-style {
            position:absolute;
            top:0;
            left:-9999px;
            z-index:1;
            opacity: 0;
            transition: opacity .5s ease-in-out;
            -moz-transition: opacity .5s ease-in-out;
            -webkit-transition: opacity .5s ease-in-out;
        }
        a.mouseover-thumbnail-holder:hover .large-thumbnail-style {
            top:0;
            left:105%;
            z-index:1;
            opacity:1;
        }

        .dropdown-toggle{
            z-index: 1;
        }

    </style>
</head>

<body class="grey lighten-3">

<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">


            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

        <img src="assets/img/logo.png" class="img-fluid mt-2" style="width:500px; height:65px;" alt="">

        <div class="list-group list-group-flush mt-3">
            <a href="#" class="list-group-item waves-effect text-white" style="background-color:#27658A;">
                <i class="fas fa-chart-pie mr-3" style="background-color:#27658A;"></i>Dashboard
            </a>
            <a href="home.php" class="list-group-item list-group-item-action waves-effect">
                <i class="far fa-image mr-3"></i>Home</a>
            <a href="artwork.php" class="list-group-item list-group-item-action waves-effect">
                <i class="far fa-image mr-3"></i>Artwork</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-map mr-3"></i>Maps</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-battery-full mr-3"></i>Battery</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect" style="margin-top:180%;">
                <i class="fas fa-sign-out-alt mr-3"></i>Logout
            </a>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="input-group md-form form-sm form-2 pl-0 ml-5" style="width:90%;">
                <!-- Basic dropdown -->
                <button class="btn dropdown-toggle text-white" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="margin-bottom:1%; background-color:#27658A">Filter</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Accession Number</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                <!-- Basic dropdown -->
                <input class="form-control my-0 py-1 amber-border mb-2" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text lighten-3 mb-2" id="basic-text1" style="background-color:#27658A"><i class="text-white fas fa-search text-grey"
                                                                       aria-hidden="true"></i></span>
                </div>
            </div>

        </div>
        <!-- Heading -->


        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12 mb-6 ">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        <!-- Table  -->
                        <table class="table table-hover">
                            <!-- Table head -->
                            <thead class="text-white lighten-4" style="background-color:#27658A;">
                            <tr style="height: 50px; vertical-align: baseline">
                                <th>Accession Number</th>
                                <th>Artwork Name</th>
                                <th>Artist</th>
                                <th>Temperature</th>
                                <th>Humidity</th>
                                <th>Luminosity</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <div class="row">
                                        <div class="col mt-1">
                                            <a class="mouseover-thumbnail-holder">
                                                <img id="tumbnail" class="rounded mx-auto d-block" src="assets/img/artwork.jpg" alt="" style="width:40px; height: 30px;"/>
                                                <img class="large-thumbnail-style" src="assets/img/artwork.jpg" style="width:400px; height: 300px;" alt="">
                                            </a>
                                        </div>
                                        <div class="col" style="margin-right:7%;">
                                            Planned Obsolescence
                                        </div>
                                    </div>
                                </td>
                                <td>Jeff Cancelosi</td>
                                <td>13°C</td>
                                <td>20%</td>
                                <td>3000Lux</td>
                                <td style="width:30%;">
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Detail</button>
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Modify</button>
                                    <button class="text-white btn-sm" style="background-color:red;">Delete</button>
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Connection</button>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <div class="row">
                                        <div class="col mt-1">
                                            <a class="mouseover-thumbnail-holder">
                                                <img id="tumbnail" class="rounded mx-auto d-block" src="assets/img/artwork.jpg" alt="" style="width:40px; height: 30px;"/>
                                                <img class="large-thumbnail-style" src="assets/img/artwork.jpg" style="width:400px; height: 300px;" alt="">
                                            </a>
                                        </div>
                                        <div class="col" style="margin-right:7%;">
                                            Planned Obsolescence
                                        </div>
                                    </div>
                                </td>
                                <td>Jeff Cancelosi</td>
                                <td>13°C</td>
                                <td>20%</td>
                                <td>3000Lux</td>
                                <td style="width:30%;">
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Detail</button>
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Modify</button>
                                    <button class="text-white btn-sm" style="background-color:red;">Delete</button>
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Connection</button>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <div class="row">
                                        <div class="col mt-1">
                                            <a class="mouseover-thumbnail-holder">
                                                <img id="tumbnail" class="rounded mx-auto d-block" src="assets/img/artwork.jpg" alt="" style="width:40px; height: 30px;"/>
                                                <img class="large-thumbnail-style" src="assets/img/artwork.jpg" style="width:400px; height: 300px;" alt="">
                                            </a>
                                        </div>
                                        <div class="col" style="margin-right:7%;">
                                            Planned Obsolescence
                                        </div>
                                    </div>
                                </td>
                                <td>Jeff Cancelosi</td>
                                <td>13°C</td>
                                <td>20%</td>
                                <td>3000Lux</td>
                                <td style="width:30%;">
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Detail</button>
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Modify</button>
                                    <button class="text-white btn-sm" style="background-color:red;">Delete</button>
                                    <button class="text-white btn-sm" style="background-color:#27658A;">Connection</button>
                                </td>

                            </tr>

                            </tbody>
                            <!-- Table body -->

                        </table>
                        <!-- Table  -->
                            <ul class="pagination pg-blue" style="margin-left:750px;">
                                <li class="page-item"><a class="page-link">Previous</a></li>
                                <li class="page-item"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">Next</a></li>
                            </ul>

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>

<!-- Charts -->
<script>
    // Line
    // var ctx = document.getElementById("myChart").getContext('2d');
    // var myChart = new Chart(ctx, {
    //   type: 'bar',
    //   data: {
    //     labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    //     datasets: [{
    //       label: '# of Votes',
    //       data: [12, 19, 3, 5, 2, 3],
    //       backgroundColor: [
    //         'rgba(255, 99, 132, 0.2)',
    //         'rgba(54, 162, 235, 0.2)',
    //         'rgba(255, 206, 86, 0.2)',
    //         'rgba(75, 192, 192, 0.2)',
    //         'rgba(153, 102, 255, 0.2)',
    //         'rgba(255, 159, 64, 0.2)'
    //       ],
    //       borderColor: [
    //         'rgba(255,99,132,1)',
    //         'rgba(54, 162, 235, 1)',
    //         'rgba(255, 206, 86, 1)',
    //         'rgba(75, 192, 192, 1)',
    //         'rgba(153, 102, 255, 1)',
    //         'rgba(255, 159, 64, 1)'
    //       ],
    //       borderWidth: 1
    //     }]
    //   },
    //   options: {
    //     scales: {
    //       yAxes: [{
    //         ticks: {
    //           beginAtZero: true
    //         }
    //       }]
    //     }
    //   }
    // });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
        },
        options: {
            responsive: true,
            legend: false
        }
    });


    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2,
                data: [65, 59, 80, 81, 56, 55, 40]
            },
                {
                    label: "My Second dataset",
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        },
        options: {
            responsive: true
        }
    });


    //radar
    var ctxR = document.getElementById("radarChart").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
        type: 'radar',
        data: {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [{
                label: "My First dataset",
                data: [65, 59, 90, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            }, {
                label: "My Second dataset",
                data: [28, 48, 40, 19, 96, 27, 100],
                backgroundColor: [
                    'rgba(0, 250, 220, .2)',
                ],
                borderColor: [
                    'rgba(0, 213, 132, .7)',
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true
        }
    });

    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
        },
        options: {
            responsive: true
        }
    });

</script>

<!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "New York"
        });
    }

    new Chart(document.getElementById("horizontalBar"), {
        "type": "horizontalBar",
        "data": {
            "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [22, 33, 55, 12, 86, 23, 14],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)"
                ],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "xAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });

</script>
</body>

</html>
