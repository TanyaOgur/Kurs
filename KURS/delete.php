<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Игроки</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">DB</a>
				</div>
		
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Главная</a></li>
						<li><a href="users.php">People</a></li>
						<li><a href="groups.php">Group</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div id="content">
		<div class="container-fluid">
			<?php include 'db.php'; ?>
			<?php include 'api.php'; ?>
			<?php
				$id = $_GET['id_users'];
				if($id) {
					deleteuser($db, $id);	
				} else {
					echo "<h1>Error</h1>";
					exit();
				}
			?>
		</div>
	</div>

	<footer>
		
	</footer>
</body>
</html>