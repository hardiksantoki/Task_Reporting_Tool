<?php
require  "php/connect.php";
session_start();
if(!isset($_SESSION['id'])){
	header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Modal</title>

	<!-- Fontfaces CSS-->
	<link href="admin_panel/css/font-face.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="admin_panel/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="admin_panel/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="admin_panel/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Main CSS-->
	<link href="admin_panel/css/theme.css" rel="stylesheet" media="all">
	<style>
		li a {
			display: block;
			color: #555;
			font-size: 16px;
		}
		.popup .overlay{
			position: fixed;
			top: 0px;
			left: 0px;
			width: 100vm;
			height: 100vh;
			background: rgba(0,0,0,0.7);
			z-index: 1;
			display: none;
		}
		.popup .content{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%, -50%) scale(0);
			background: #f1efef;
			width: 450px;
			/* height: 220px; */
			z-index: 2;
			text-align: center;
			padding:20px ;
			box-sizing: border-box;
		}
		.popup .close-btn{
			cursor: pointer;
			position: absolute;
			right: 20px;
			top: 20px;
			width: 30px;
			height: 30px;
			background: #222;
			color: rgb(247, 238, 238);
			font-size: 25px;
			font-weight: 600;
			line-height: 30px;
			text-align: center;
			border-radius: 50%;
		}
		.popup.active .overlay{
			display: block;
		}
		.popup.active .content{
			transition: all 300ms ease-in-out;
			transform: translate(-50%, -50%) scale(1);
		}
	</style>
	<script>
		function togglepopup(){
			document.getElementById("popup-1").classList.toggle("active");
		}

		msg= setTimeout(()=>{
			document.getElementById('msg').style.display = 'none';
		},5000);

	</script>

</head>

<body>
	<!-- PAGE CONTAINER-->

	<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="justify-content: space-between;" >
		<img src="admin_panel/images/sgl.png" style="width: 100px;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a href="php/logout.php" class="btn btn-dark" >Log Out</a>
		<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Services</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</div> -->
	</nav>
	<section class="my-5">
		<div>
			<center>
<div style="height: 50px;">
		<?php
		 if(isset($_SESSION['msg'])){
			echo "
	<div id='msg' class='btn btn-success' style='height: 50px;'>
				<h3>".$_SESSION['msg']."</h3>";
				unset($_SESSION['msg']);
		 }
				?>
			</div>
		</div>
		</center>
		<br>
			<h1 class="text-center">User Reporting Tool</h1>
		</div>
	</section>
	<div class="popup" id="popup-1">
		<div class="overlay"></div>
		<div class="content">
			<div class="close-btn" onclick="togglepopup()">&times;</div>
			<?php
			$id=$_SESSION['id'];
            $result = pg_query($connect, "SELECT * FROM project INNER JOIN user_details  ON project.title = user_details.assign WHERE user_details.id=$id"); 
			$i = 1;
			if(pg_num_rows($result)>0){

				while ($row = pg_fetch_assoc($result)) {echo"
					<h3>Project Title:<br></h3>". $row['title']."
					<h3>Start Date:<br></h3><p>".$row['start_date']."</p> 
					<h3>End Date:<br></h3><p>".$row['end_date']."</p> 
					<h3>Project Details:<br></h3><p>".$row['detail']."</p> ";}
				}else{
					echo "<h3>Project Not Assign</h3>";
				}
			?>
		</div>
	</div>
	<center><button class="btn btn-secondary" onclick="togglepopup()">View Project</button></center>

	<!-- Jquery JS-->
	<script src="admin_panel/vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="admin_panel/vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="admin_panel/vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="admin_panel/vendor/slick/slick.min.js">
	</script>
	<script src="admin_panel/vendor/wow/wow.min.js"></script>
	<script src="admin_panel/vendor/animsition/animsition.min.js"></script>
	<script src="admin_panel/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="admin_panel/vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="admin_panel/vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="admin_panel/vendor/circle-progress/circle-progress.min.js"></script>
	<script src="admin_panel/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="admin_panel/vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="admin_panel/vendor/select2/select2.min.js">

	</script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Main JS-->
	<script src="admin_panel/js/main.js"></script>

</body>

</html>
<!-- end document-->