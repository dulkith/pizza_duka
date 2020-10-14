<html>

<head>
    <title>PIZZA HAT</title>

    <!-- Gooel fonts import  -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootrstrap style sheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.5.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <!-- Custom style sheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" />
    <script defer src="<?php echo base_url("assets/js/font-awsome/all.js"); ?>"></script>
    <!--load all styles -->
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="fixed-top navbar navbar-expand-lg">
            <div class="container">
                <!-- Pizza kade logo -->
                <img src="<?php echo base_url("assets/images/pizza_kade_logo_main.png"); ?>" alt="Logo"
                    style="width:100px;">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Main navigatiob bar items -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home fa-fw"></i> Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-pizza-slice fa-fw"></i> Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-star fa-fw"></i> Special
                                Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-info-circle fa-fw"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-phone-square-alt fa-fw"></i> Contact
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-circle fa-fw"></i> Login/Signup</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-flex flex-row">
                                <h3><span class="badge badge-success badge-secondary">2</span></h3>
                                <i class="fas fa-shopping-basket fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->