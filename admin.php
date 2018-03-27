<!DOCTYPE html>
<html>
<head>
	<title>Apps ! Admin page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="app/css/style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</head>
<body>


<div class="container-fluid">

<!--start header row-->
	<div class="row adminpage-header">
		<div class="col-2" style="background-color: #22333F;">
			<h1>Admin Panel <i class="fas fa-angle-double-right"></i></h1>
		</div>

		<div class="col-10" style="background-color: #339886">
				<div class="row">
					<div class="col-8">
						<h2><i class="far fa-file-alt"></i> Manage pages</h2>
					</div>
					<div class="col-4">
						<button type="button" class="btn btn-primary"><i class="fas fa-backward"></i> back</button>
						<button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Data</button>
					</div>
				</div>
		</div>
	</div>

<!--end header row-->





<!--start section row-->
	<div class="row">
	<!--start left section-->
		<div class="col-2 left-section" style="background-color: #243A47;">
			
			<h4><a href=""><i class="fas fa-power-off"></i> Logout</a></h4>
			<hr>

			<ul>
				<li><a href="?pages=home"><i class="fas fa-home"></i> Home</a></li>
				<li><a href="?pages=country"><i class="fas fa-database"></i> Country</a></li>
				<li><a href="?pages=city"><i class="fas fa-database"></i> City</a></li>
				<li><a href="?pages=warranty"><i class="fas fa-database"></i> Warranty</a></li>
				<li><a href="?pages=category"><i class="fas fa-database"></i> Category</a></li>
				<li><a href="?pages=product"><i class="fab fa-product-hunt"></i> product</a></li>
				<li><a href="?pages=product_image"><i class="fas fa-images"></i> product Image</a></li>
				<li><a href="?pages=users"><i class="fas fa-users"></i> Users</a></li>
				<li><a href="?pages=suppliers"><i class="fas fa-users"></i> Suppliers</a></li>
			</ul>




			
		</div>
	<!--end left section-->


	<!--start right section-->
		<div class="col-10" style="background-color: #324C5D;	">
			<div class="right-section">

			<?php
			if(isset($_GET['pages'])){

				if(file_exists('app/admin/'.$_GET['pages'].'.php')){
					include_once 'app/admin/'.$_GET['pages'].'.php';
				}else{
					include_once 'app/public/404.php';
				}

			}else{
				include_once 'app/admin/home.php';
			}
			

			?>
			


			</div>
		</div>
	<!--end right section-->



	</div>
<!--end section row-->


</div>












<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>