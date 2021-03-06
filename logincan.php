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
    <link href="css/logincan.css" rel="stylesheet">
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
                                <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Insira suas informações para logar.</h6>
                                <a onclick="location.href = 'index.php';" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Voltar</a>
                            </div>
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
                                            <i class="fas fa-user white-text"></i> Candidato</h3>
                                        <hr class="hr-light">
                                    </div>
                                    <!--Body-->
                                    <form method="POST" action="proc_login_can.php" class="border border-light p-5">
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix white-text active"></i>
                                        <input type="email" name="emailCand" id="form2" class="white-text form-control">
                                        <label for="form2" class="active">Seu e-mail</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-lock prefix white-text active"></i>
                                        <input type="password" name="senhaCand" id="form4" class="white-text form-control">
                                        <label for="form4">Sua senha</label>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button name="login" class="btn btn-indigo">Entrar</button><br>
                                    </div>
                                    <p class="text-center red-text">
                                        <?php
                                            if(isset($_SESSION['erro'])) {
                                              echo $_SESSION['erro'];
                                                unset($_SESSION['erro']);
                                            }
                                        ?>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                                <button onclick="location.href = 'cadcan.php';" class="btn btn-indigo">Cadastrar</button>
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
    </header>
    <!-- Main navigation -->
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
    <script type="text/javascript" src="js/logincan.js"></script>
</body>

</html>