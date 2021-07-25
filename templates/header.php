<?php
//Whenever you are accessing the session variable, you call session_start() 

session_start();

//$_SESSION['name'] = 'mario';

if ($_SERVER['QUERY_STRING'] == 'noname') {
	// unset a single session variable
	unset($_SESSION['name']);
}
// Null Coalescing

$name = $_SESSION['name'] ?? 'Guest';
?>


<head>
	<title>Titan Pizzas</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<style type="text/css">
		.brand {
			background: aqua !important;
		}

		.brand-text {
			color: aqua !important;
		}

		form {
			max-width: 460px;
			margin: 20px auto;
			padding: 20px;
		}

		.pizza {
			width: 100px;
			margin: 40px auto -30px;
			display: block;
			position: relative;
			top: -30px;
		}
	</style>
</head>

<body class="grey lighten-4">
	<nav class="white z-depth-0">
		<div class="container">
			<a href="index.php" class="brand-logo brand-text">Titan Pizzas</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
				<li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
				<li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
			</ul>
		</div>
	</nav>