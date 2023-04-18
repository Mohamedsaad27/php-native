<?PHP include 'inc/header.php'; ?>
<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img.jpg" alt="Profile Picture">
					<div class="card-body">
						<h5 class="card-title">John Doe</h5>
						<p class="card-text">Back-End Developer</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><strong>Name:</strong> <?php  echo $_SESSION['auth'][0];  ?></li>
						<li class="list-group-item"><strong>E-mail:</strong> <?php  echo $_SESSION['auth'][1]; ?></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">  
					<div class="card-body">
						<h5 class="card-title">About Me</h5>
						<p class="card-text">Your Profile</p>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="card-title">Skills</h5>
						<div class="row">
							<div class="col-sm-4">
								<ul class="list-group">
									<li class="list-group-item">HTML</li>
									<li class="list-group-item">CSS</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="list-group">
									<li class="list-group-item">JavaScript</li>
									<li class="list-group-item">Database</li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="list-group">
									<li class="list-group-item">Bootstrap</li>
									<li class="list-group-item">PHP</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="card-title">Experience</h5>
						<div class="card-text">
							<p><strong>Frontend Developer,  Company</strong></p>
							<p>June 2020 - Present</p>

                        </div>
                        </div>
                        </div>

