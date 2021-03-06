<?php session_start();

if (empty($_SESSION['emailCand'])){
    header('Location: index.php');
}

include('proc_perfil_can.php');
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
    <link href="css/perfilcan.css" rel="stylesheet">
    <!-- Icon do GeT-->
    <link rel="icon" href="img/icon128sf.png" type="image/x-icon" />
</head>

<body>
    <header>
        <!-- Navbar superior-->
        <div class="navbar">
            <nav class="navbar navbar-dark indigo fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="img/icon128sf.png" height="30" class="d-inline-block align-top" alt="GeTalent Logo"> GeTalent
                </a>
                <a class="logout" href="logout.php">
                    <img src="img/ic-logout.png" height="30" class="d-inline-block align-top" alt="Logout">
                </a>
            </nav>
        </div>
        <!-- Full Page Intro -->
        <div class="bg">
            <!--Grid column-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5 text-md-left">
                <!-- Card -->
                <div class="card testimonial-card">

                    <!-- Background color -->
                    <div class="card-up indigo lighten-1"></div>

                    <!-- Avatar -->
                    <div class="avatar mx-auto white">
                        <img src="img/perfil.jpg" class="rounded-circle" alt="avatar">
                    </div>

                    <!-- Content -->
                    <div class="card-body">
                        <!-- Name -->
                        <h3 class="card-title"><?php printf("#%d %s %s",$id,$nome,$sobrenome) ?></h3>
                        <hr>
                        <!-- Quotation -->
                        <p>E-mail: <?php echo $email?></p>
                        <p>Data de nascimento: <?php echo $data?></p>
                        <p>CPF: <?php echo $cpf?></p>
                        <br><br>

                        <a href="editarcan.php" class="btn btn-indigo float-right">Editar perfil</a>

                    </div>

                </div>
                <!-- Card -->
            </div>

            <!--Grid row-->

            <!-- Content -->
        </div>
        <!--Navbar inferior-->
        <div class="navbar-bt ">
            <nav class="navbar navbar-dark indigo fixed-bottom ">
                <a class="navbar-brand " href="homecan.php ">
                    <img src="img/ic-home.png " height="27 " class="d-inline-block align-top " alt="Home ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-search.png " height="27 " class="d-inline-block align-top " alt="Busca ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-notif.png " height="27 " class="d-inline-block align-top " alt="Notificações ">
                </a>
                <a class="navbar-brand " href="perfilcan.php">
                    <img src="img/ic-profile-select.jpg" height="27 " class="d-inline-block align-top " alt="Perfil ">
                </a>
            </nav>
        </div>
        <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
        </div>
    </header>
    <!--Main Layout-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript " src="js/jquery-3.4.1.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="js/mdb.min.js "></script>
    <!-- Custom JS-->
    <script type="text/javascript " src="js/perfilcan.js "></script>
</body>

</html>