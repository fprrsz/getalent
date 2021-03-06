<?php
session_start();
include('checksession.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GeTalent</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/index.css" rel="stylesheet">
    <!-- Icon do GeT-->
    <link rel="icon" href="img/icon128sf.png" type="image/x-icon" />
</head>

<body>
    <header>
        <!-- Navbar superior-->
        <div class="navbar">
            <nav class="navbar navbar-dark indigo fixed-top">
                <a class="navbar-brand" href="index.php">
                    <img src="img/icon128sf.png" height="30" class="d-inline-block align-top" alt="GeTalent Logo"> GeTalent
                </a>
            </nav>
        </div>
        <!-- Full Page Intro -->
        <div class="bg">
            <div class="view">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-gradient align-items-center">
                    <!-- Content -->
                    <div class="container">
                        <!--Grid row-->
                        <div class="row mt-5">
                            <!--Grid column-->
                            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Seja bem-vindo ao GeTalent! </h1>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Para começar, selecione seu tipo de login abaixo.</h6>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-6 col-xl-5 mb-4">
                                <!--Form-->
                                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="card-body">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3 class="white-text">
                                                <i class="fas fa-user white-text"></i> Login</h3>
                                            <hr class="hr-light">
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button onclick="location.href = 'logincol.php';" type="button" class="btn btn-indigo btn-rounded">Colaborador</button>
                                                <button onclick="location.href = 'logincan.php';" type="button" class="btn btn-indigo btn-rounded">Candidato</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
        </div>
    </header>

    <!--Main Layout-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>