

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Studying Opportunities</title>
	<!--bootstrap css link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--font awesome link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- css file-->
	<link rel="stylesheet" href="style.css">
</head>
<style>
	#footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 60px; /* adjust to your footer height */
}
.logo{
    height: 7%;
    width: 7%;
}

</style>

<body>
	<!--nav bar-->
	<div class="container-fluid p-0">
		<!--first child-->
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container-fluid">
				<img src="./images/logonew2.png" alt="" class="logo">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="opportunities.php"><b>Opportunities</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="user_registration.php"><b>Register</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./admin_area"><b>Admin_area</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>

					</ul>
					<form class="d-flex" action="search_opportunity.php" method="POST">
						<input class="form-control me-2" type="search" placeholder="Search Opportunities"
							aria-label="Search" name="search">
						<!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
						<input type="submit" value="Search" class="btn btn-outline-light" name="search_data_opportunity">
					</form>
				</div>
			</div>
		</nav>
		<!-- //calling  function -->
	
		<!--Second child-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Welcome Guest</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="user_login.php">Login</a>
				</li>
			</ul> 
		</nav>



		<!--Third child-->
		<div class="bg-light">
			<h3 class="text-center">Academia Opportunities</h3>
			
		</div>

		<!--Fourth child-->
		<div class="row px-1">


			<div class="col-md-12 mb-2 bg-light">
				<!--opportunitys-->
				<p style="text-align:center"> Welcome to our website, your ultimate resource for exploring and
					connecting with a wide range of
					academic opportunities at different universities around the world! We are committed to empowering
					students with the knowledge and tools they need to pursue their academic dreams and unlock their
					full potential.

					Our platform provides comprehensive information about various academic programs, scholarships,
					internships, fellowships, and research opportunities available at different universities. Whether
					you're a high school student exploring undergraduate programs or a graduate student seeking advanced
					academic opportunities, our website has something for everyone.</p>

			</div>

	
	
		</div>
		<div id="footer">
			<?php include("footer.php"); ?>
		</div>


		<!--bootstrap jss link-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"></script>
</body>

</html>