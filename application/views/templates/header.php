<html>

<head>
	<title>
		<?php if (!empty($pizzaPageTitle)) echo 'PizzaNoW! - ' . $pizzaPageTitle; else echo 'PizzaNoW!' ?>
	</title>

	<!-- Gooel fonts import  -->
	<link
			href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet">
	<!-- Bootrstrap style sheet -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>"/>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.5.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<!-- Custom style sheet -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>"/>
	<script defer src="<?php echo base_url("assets/js/font-awsome/all.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.countdown.js"); ?>"></script>
	<!--	TEST-->
	<script>
		//setInterval(function(){location.reload(true);}, 10000);
	</script>
	<!--load all styles -->
</head>

<body>
<!-- Header -->
<header>
	<nav id="kadeHeader" class="fixed-top navbar navbar-expand-lg">
		<div class="container">
			<!-- Pizza kade logo -->
			<a class="nav-link" href="<?php echo base_url(); ?>home"><img
						src="<?php echo base_url("assets/images/pizza_kade_logo_main.png"); ?>" alt="Logo"
						style="width:100px;"></a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<!-- Main navigation bar items -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>home"><i class="fas fa-home fa-fw"></i> Home
							<span
									class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>menu"><i class="fa fa-pizza-slice fa-fw"></i>
							Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fas fa-info-circle fa-fw"></i> About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>order"><i class="fas fa-clipboard-list"></i>
							Order</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>cart" class="nav-link d-flex flex-row">
							<h3><span class="badge badge-success badge-secondary"><?php echo $cartCount ?></span></h3>
							<i class="fas fa-shopping-basket fa-2x"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- Header End -->
<script>
	window.onscroll = function () {
		handleScroll();
	}

	function handleScroll() {
		if (document.body.scrollTop > 1) {
			document.getElementById("kadeHeader").style.backgroundColor = "#111111";
		} else {
			document.getElementById("kadeHeader").style.backgroundColor = "transparent";
		}
	}
</script>
