<?php
include 'connect.php';
session_start();

include 'auth.php';

?>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-rCA2D+D9QXuP2TomtQwd+uP50EHjpafN+wruul0sXZzX/Da7Txn4tB9aLMZV4DZm" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<title>Welcome </title>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">User Mangemnet System</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
				</ul>
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					<button type="button" class="btn btn-primary"><?php echo $_SESSION['SESS_NAME']; ?></button>
					<div class="btn-group show" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></button>
						<div class="dropdown-menu show" aria-labelledby="btnGroupDrop1" style="position: absolute; transform: translate3d(0px, 48px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
							<a class="dropdown-item" href="logout.php">Log Out</a>
							<!-- <a class="dropdown-item" href="#">Dropdown link</a> -->
						</div>
					</div>
				</div>
			</div>

		</nav>
		<div class="row">
			<div class="col-md-4">
				<div class="btn-group-vertical">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action active">
							Dashboard
						</a>
						<a href="#" class="list-group-item list-group-item-action">All Order
						</a>
						<a href="#" class="list-group-item list-group-item-action">Paid Order
						</a>
						<a href="#" class="list-group-item list-group-item-action">Pending Order
						</a>
						<a href="#" class="list-group-item list-group-item-action">Rejected Order
						</a>
						<a href="#" class="list-group-item list-group-item-action">Profile
						</a>
						<a href="#" class="list-group-item list-group-item-action">Change Password
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<h1>Welcome Pages</h1>
			</div>



		</div>
		<div class="col-md-12 bg-dark">
			<footer class="main-footer">
				<strong>Copyright &copy; 2019-2020 <a href="http://adminlte.io">Munira@</a>.</strong>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block">
					<b>Version</b> 3.0.2
				</div>
			</footer>
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>