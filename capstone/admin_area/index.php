<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<!--Bootstrap css link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!--font awesome link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!--   css file -->
<link rel="stylesheet" href="../style.css">
<style>
	.admin_image{
    width: 100px;
    object-fit: contain;
}
.footer{
	position: absolute;
	bottom: 0;
}
</style>

</head>
<body>
	<!-- navbar -->
	<div class="container-fluid p-0">
<!-- 		first child -->
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<nav class="container-fluid">
				<img src="../images/logonew2.png" alt="" class="logo">
				<nav class="navbar navbar-expand-lg">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="" class="nav-link"></a>
						</li>

					</ul>

				</nav>

			</nav>
		</nav>
		<!-- second child -->
		<div class="bg-light">
			<h3 class="text-center p-2">Manage Details</Details></h3>
		</div>

		<!-- Third child -->
		<div class="row">
			<div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
				<div class="p-2">
					<a href="#"><img src="../images/iPhone14.webp" alt="" class="admin_image"></a>
					<p class="text-light text-center">Admin name</p>
				</div>
				<div class="button text-center">
				<!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
				   <button><a href="insert_oppo.php" class="nav-link text-light bg-info my-1">Insert Opportunity</a></button>
				   <button><a href="../opportunities.php" class="nav-link text-light bg-info my-1">View Posted Opportunities</a></button>
				   <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
				
				   <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>

				</div>

			</div>
			<!-- fouth child -->
			<div class="container my-3">
				<?php 
				if(isset($_GET['insert_category'])){
	                include('insert_categories.php');
				}
				if(isset($_GET['insert_brand'])){
	                include('insert_brands.php');
				}
				?>
			</div>
			<!--last child-->
<div class="bg-info p-3 text-center footer">
	<p>All rights reserved © - designed by JosephineUwizeye-2023</p>
</div>

		</div>
	</div>
	
<!--Bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>