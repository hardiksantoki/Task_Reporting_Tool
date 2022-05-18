<?php
require  "php/connect.php";
session_start();

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
    <title>Login</title>

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

    <!-- Main CSS-->
    <link href="admin_panel/css/theme.css" rel="stylesheet" media="all">
    <style>
        .serr {
            font-size: medium;
            color: red;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .one {
            box-shadow: 10px 10px 5px 10px rgb(153, 155, 156);

        }
    </style>
    <script>
        login = () => {
            let flag = true;
            let Lun = $('#email').val();
            let Lpa = $('#password').val();

            let letter = /^[a-zA-Z][a-zA-Z\s]+$/;
            let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


            if (Lun == "") {
                $("#elo").html("please enter email");
                $('#email').focus();
                flag = false;
            } else if (Lun.match(mailformat) == null) {
                $("#elo").html("please enter valid email");
                $('#email').focus();
                flag = false;
            } else if (Lpa == "") {
                $("#elo").html("please enter password");
                $('#password').focus();

                flag = false;
            } else if (!Lpa.match(/^(?=.{8,15}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/)) {
                $('#elo').html("Password must be 8 digitin Ex.(example#123)");
                $('#password').focus();

                flag = false;
            }else{
                $('#elo').html("");
            }
            return flag;
        }
    </script>
    <script>
        msg= setTimeout(()=>{
			document.getElementById('msg').style.display = 'none';
            document.getElementById('msgr').style.display = 'none';
            // window.location.href="http://localhost/php/login.php";

		},5000);
    </script>

</head>

<body class="animsition">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="admin_panel/images/sgl.png" style="width: 100px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <center>
        <div style="height: 50px;">
        
                <?php
                // echo isset($_GET['msg']);
                if(isset($_SESSION['msg'])){
                    echo "
            <div id='msg' class='btn btn-danger' style='height: 50px;'>
        
                     <h3>".$_SESSION['msg']."</h3>";
                     unset($_SESSION['msg']);

                }
                if(isset($_SESSION['msgr'])){
                    echo "
            <div id='msg' class='btn btn-success' style='height: 50px;'>
        
                     <h3>".$_SESSION['msgr']."</h3>";
                     unset($_SESSION['msgr']);

                }
                    ?>
                    </div>
                </div>
                </center>
                <div class="login-wrap">
                    <form  method="get" action="php/login_auth.php" class="one">
                        <div class="login-content">
                            <div class="login-logo">
                                <h3 class="text-black">User Login</h3>
                            </div>
                            <div class="login-form">

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" id="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" id="password">
                                </div>
                                <span id="elo" class="serr"></span>
                                <div>
                                    <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" onclick="return login()">Login</button>
                                </div>

                                <div class="register-link">
                                    <p>
                                        Don't you have account?
                                        <a href="register.php">Sign Up Here</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

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

    <!-- Main JS-->
    <script src="admin_panel/js/main.js"></script>

</body>

</html>
<!-- end document-->