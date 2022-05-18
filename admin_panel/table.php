<?php
require  "../php/connect.php";
session_start();

if(!isset($_SESSION["id"]) && !isset($_SESSION["bit"])){
    header("Location: ../login.php");
}
// $connect();

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
    <title>Users</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Users</a>
                        </li>
                        <li>
                            <a href="project.php">
                                <i class="fas fa-table"></i>Projects</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="table.php">
                                <i class="fas fa-table"></i>Users</a>
                        </li>
                        <li>
                            <a href="project.php">
                                <i class="fas fa-table"></i>Projects</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">admin@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../php/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="" style="background-color: #134376; border-radius: 15px; box-shadow: 0px 0px 4px 2px #134376;">
                                    <center>
                                        <label style="margin-bottom: 0px; padding: 8px ;">
                                            <h2 class=" text-white"> User Details</h2>
                                        </label>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <br>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30" style="box-shadow: 0px 0px 13px 2px #5a5757;;">
                                    <table class="table table-borderless table-striped ">
                                        <thead style="background-color: #c7c7cb;">
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Project Assign</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result = pg_query($connect, "SELECT * FROM user_details WHERE bit=false ORDER BY id ASC");
                                            $i = 1;
                                            while ($row = pg_fetch_assoc($result)) {
                                                echo "<tr>" .
                                                "<td>";
                                                echo  $i . "</td>" . "<td>" .
                                                $row['name'] . "</td>" . "<td>" .
                                                $row['email'] . "</td>" . "<td>" .
                                                $row['password'] . "</td>";
                                                echo "<td>";
                                                if($row['status']=='deactive'){
                                                    // echo $row['status'];
                                                    echo "<style>
                                                    #pa".$row['id']."{
                                                        pointer-events: none;
                                                    }
                                                    </style>";
                                                }
                                                echo "<div class='nav-item dropdown' id='pa".$row['id']."' >
												<a  class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>" . $row['assign'] . "
                                                <span class='caret'></span>
												</a>
												<div class='dropdown-menu'>";
                                                $result2 = pg_query($connect, "SELECT * FROM project ORDER BY p_id ASC");
                                                while ($row2 = pg_fetch_assoc($result2)) {

                                                    echo "	<a class='dropdown-item' href='../php/projectassign.php?id=" . $row['id'] . "&title=" . $row2['title'] . "'>" . $row2['title'] . "</a>";
                                                }
                                                echo "
												</div>
											</div>
                                                
                                                
                                                </td>";
                                                echo "<td>" . $row['status'] .
                                                    "</td>";
                                                $i++;

                                                // echo "<td>". "<input type='button' id='".$row['id']."' value='Activate'/>" . "</td>"

                                                //     . "</tr>";

                                                // echo "<td>". "<a class='btn btn-success' href='../php/activation.php?id=".$row['id']."'>activate</a>&nbsp;<a class='btn btn-danger' href='../php/deactivation.php?id=".$row['id']."'>deactivate</a>" . "</td>"."</tr>";
                                                echo "<td>" . "<label class='switch switch-3d switch-primary mr-3' id='b' onclick='s" . $row['id'] . "()'>
                     

                                                <input id='bb" . $row['id'] . "' type='checkbox' class='switch-input' >
                                                <span class='switch-label'></span>
                                                <span class='switch-handle'></span>
                                             
                                              </label>
                                              <script>
                                              if('" . $row['status'] . "'=='active'){
                                               
                                                document.getElementById('bb" . $row['id'] . "').checked=true;
                                              }else{
                           
                                                document.getElementById('bb" . $row['id'] . "').checked=false; 
                                              }
                                                function s" . $row['id'] . "(){
                                                  if(document.getElementById('bb" . $row['id'] . "').checked){
                                                    location.href='../php/activation.php?id=" . $row['id'] . "';
                                                  }else{
                                                    location.href='../php/deactivation.php?id=" . $row['id'] . "';
                                                  }
                                                }
                                                  
                                              </script>" . "</td>" . "</tr>";
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <!-- <script src="vendor/chartjs/Chart.bundle.min.js"></script> -->
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>

        <script>
            $(document).ready(
                $('#act').on('click', function() {

                })
            )
        </script>
        <!-- <script>
            document.getElementById('pa').disabled=true;
        </script> -->

</body>

</html>
<!-- end document-->