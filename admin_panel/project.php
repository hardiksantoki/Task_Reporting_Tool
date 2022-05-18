<?php
require  "../php/connect.php";
session_start();

if (!isset($_SESSION["id"]) && !isset($_SESSION["bit"])) {
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
    <title>Projects</title>

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

    <script>
        msg = setTimeout(() => {
            document.getElementById('msg').style.display = 'none';
            // window.location.href="http://localhost/php/login.php";

        }, 5000);
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
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
                            <a href="table.php">
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
                <a href="index.php">
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
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Users</a>
                        </li>
                        <li class="active">
                            <a href="table.php">
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
                                                    <span class="email">Admin@gmail.com</span>
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
                        <div class="row" style="justify-content: center;">
                            <center>
                                <div style="height: 50px;">

                                    <?php
                                    // echo isset($_GET['msg']);
                                    if (isset($_SESSION['msg'])) {
                                        echo "
            <div id='msg' class='btn btn-success' style='height: 50px;'>
        
                     <h3>" . $_SESSION['msg'] . "</h3>";
                                        unset($_SESSION['msg']);
                                    }
                                    ?>
                                </div>
                        </div>
                        </center>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="" style="background-color: #134376; border-radius: 15px; box-shadow: 0px 0px 4px 2px #134376;">
                                <center>
                                    <label style="margin-bottom: 0px; padding: 8px ;">
                                        <h2 class=" text-white"> Projects</h2>
                                    </label>
                                </center>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap" style="justify-content:flex-end">
                                <!-- <h2 class="title-1">overview</h2> -->
                                <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#smallmodal">
                                    <i class="zmdi zmdi-plus"></i>Add Project</button>
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
                                            <th>S.No.</th>
                                            <th style='min-width: 138px; word-wrap: break-word;'>Project Name</th>
                                            <th>Add Date</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th style="max-width: 100px;">Details</th>
                                            <th>Update</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = pg_query($connect, "SELECT * FROM project ORDER BY p_id ASC");
                                        $i = 1;
                                        while ($row = pg_fetch_assoc($result)) {
                                            echo "<tr>" .
                                                "<td>";
                                            echo  $i . "</td>" . "<td  style='  min-width: 138px; word-wrap: break-word;'><button"; ?> onclick="showdata('<?php echo $row['title'] ?>','<?php echo $row['start_date'] ?>','<?php echo $row['end_date'] ?>','<?php echo $row['objective'] ?>','<?php echo $row['technology'] ?>','<?php echo $row['update_date'] ?>')" data-toggle='modal' data-target='#projectmodal'>
                                        <?php echo  $row['title'] . "</button></td>" . "<td>" .
                                                $row['projectadd_date'] . "</td>" . "<td>" .
                                                $row['start_date'] . "</td>" . "<td>" .
                                                $row['end_date'] . "</td>";

                                            echo "<td style='max-width: 455px; word-wrap: break-word;'>" . $row['detail'] .
                                                "</td>";
                                            echo "<td>" . "<button"; ?> class="au-btn au-btn-icon au-btn--green" onclick="updatedata('<?php echo $row['title'] ?>','<?php echo $row['start_date'] ?>','<?php echo $row['end_date'] ?>','<?php echo $row['detail'] ?>','<?php echo $row['objective'] ?>','<?php echo $row['technology'] ?>','<?php echo $row['p_id']?>')" data-toggle='modal' data-target='#updatemodal'>
                                            Update</button></td>
                                            <?php
                                            $i++;
                                            // echo "<td>". "<input type='button' id='".$row['id']."' value='Activate'/>" . "</td>"

                                            //     . "</tr>";

                                            // echo "<td>" . "<a class='btn btn-success' href='../php/activation.php?id=" . $row['id'] . "'>activate</a>&nbsp;<a class='btn btn-danger' href='../php/deactivation.php?id=" . $row['id'] . "'>deactivate</a>" . "</td>" . "</tr>";
                                        } ?>
                                    </tbody>
                                </table>
                                <!-- <h1 id="title" class='col-lg-10'>dfvffdfvfdv</h1> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal small -->
        <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document" style="min-width: 375px;">
                <div class="modal-content">
                    <form action="../php/addproject.php" method="post" class="one">
                        <div class="modal-header">
                            <h5 class="modal-title" id="smallmodalLabel">Add Project</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="login-content">
                                <!-- <div class="login-form"> -->
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <input class="au-input au-input--full" type="text" name="title" placeholder="Title" id="title">
                                </div>
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input class="au-input au-input--full" type="date" name="start_date" placeholder="Start Date" id="s_date">
                                </div>
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input class="au-input au-input--full" type="date" name="end_date" placeholder="End Date" id="e_date">
                                </div>
                                <div class="form-group">
                                    <label>Project Details</label>
                                    <input class="au-input au-input--full" type="text-area" name="p_details" placeholder="Project Details" id="detail">
                                </div>
                                <div class="form-group">
                                    <label>Objective</label>
                                    <input class="au-input au-input--full" type="text-area" name="objective" placeholder="Objective" id="objective">
                                </div>
                                <div class="form-group">
                                    <label>Technology</label>
                                    <input class="au-input au-input--full" type="text-area" name="technology" placeholder="Technology" id="technology">
                                </div>
                                <span id="elo" class="serr"></span>
                                <!-- </div> -->

                            </div>
                            <!-- <p>
                                    There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
                                    zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
                                    resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
                                    genus Equus, along with other living equids.
							</p> -->
                        </div>
                        <div class="modal-footer">
                            <!-- <div> -->
                            <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" id="submit">Submit</button>
                            <!-- </div> -->
                            <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal small -->



<!-- modal update -->
<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document" style="min-width: 375px;">
                <div class="modal-content">
                    <form  method="post" class="one" id="uform">
                        <div class="modal-header">
                            <h5 class="modal-title" id="smallmodalLabel">Update Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="login-content">
                                <!-- <div class="login-form"> -->
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <input class="au-input au-input--full" type="text" name="utitle" placeholder="Title" id="utitle">
                                </div>
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input class="au-input au-input--full" type="date" name="ustart_date" placeholder="Start Date" id="us_date">
                                </div>
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input class="au-input au-input--full" type="date" name="uend_date" placeholder="End Date" id="ue_date">
                                </div>
                                <div class="form-group">
                                    <label>Project Details</label>
                                    <input class="au-input au-input--full" type="text-area" name="up_details" placeholder="Project Details" id="udetail">
                                </div>
                                <div class="form-group">
                                    <label>Objective</label>
                                    <input class="au-input au-input--full" type="text-area" name="uobjective" placeholder="Objective" id="uobjective">
                                </div>
                                <div class="form-group">
                                    <label>Technology</label>
                                    <input class="au-input au-input--full" type="text-area" name="utechnology" placeholder="Technology" id="utechnology">
                                </div>
                                <span id="error" class="serr"></span>
                                <!-- </div> -->

                            </div>
                            <!-- <p>
                                    There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
                                    zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
                                    resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
                                    genus Equus, along with other living equids.
							</p> -->
                        </div>
                        <div class="modal-footer">
                            <!-- <div> -->
                            <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" id="submit">Update</button>
                            <!-- </div> -->
                            <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal update -->






        <!-- modal project -->
        <div class="modal fade" id="projectmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="min-width: 300px;">
                <div class="modal-content">
                    <!-- <form action="../php/addproject.php" method="post" action="php/login_auth.php" class="one"> -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">Project Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="row">
                                <label class="col-lg-2 font-weight-bold">Title: </label>
                                <span id="ptitle" class='col-lg-10'></span>
                                <!-- <input type="text" name="dd" class='col-lg-10' id="ptitle"> -->
                                <!-- <input type="text" name="ff" id="title"> -->
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-lg-2 font-weight-bold">Start Date: </label>
                                <span id="ps_date" class="col-lg-10"></span>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-lg-2 font-weight-bold">End Date: </label>
                                <span id="pe_date" class="col-lg-10"></span>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-lg-2 font-weight-bold">Objective: </label>
                                <span id="pobjective" class="col-lg-10 "></span>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-lg-2 font-weight-bold">Technology: </label>
                                <span id="ptechnology" class="col-lg-10"></span>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-lg-2 font-weight-bold">Last Update: </label>
                                <span id="pu_date" class="col-lg-10"></span>
                            </div>
                            <!-- <span id="elo" class="serr"></span> -->



                        </div>
                        <!-- <p>
                                    There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
                                    zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
                                    resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
                                    genus Equus, along with other living equids.
							</p> -->
                    </div>
                    <!-- <div class="modal-footer"> -->
                    <!-- <div> -->
                    <!-- <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" id="submit">Submit</button> -->
                    <!-- </div> -->
                    <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
                    <!-- </div> -->
                    <!-- </form> -->
                </div>
            </div>
        </div>
        <!-- end modal project -->



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

    <!-- <script>
        $(document).ready(
            $('#act').on('click', function() {

            })
        )
    </script> -->

    <script>
        function showdata(title, s_date, e_date, obje, tech,u_date) {
            // x=document.getElementById('ptitle').value=title;
            // console.log(x)
            // console.log(title)
            // console.log(s_date)
            // console.log(e_date)
            // console.log(obje)
            // console.log(u_date)
            if(u_date==""){
                // console.log("not")
                document.getElementById('pu_date').innerHTML = "Not Updated";
            }else{
                document.getElementById('pu_date').innerHTML = u_date;
            }
            document.getElementById('ptitle').innerHTML = title;
            document.getElementById('ps_date').innerHTML = s_date;
            document.getElementById('pe_date').innerHTML = e_date;
            document.getElementById('pobjective').innerHTML = obje;
            document.getElementById('ptechnology').innerHTML = tech;
            // $('#title').text(title);
            // $('#s_date').text(s_date);
            // $('#e_date').text(e_date);
            // $('#objective').text(obje);
            // $('#technology').text(tech);
        }


        function updatedata(title, s_date, e_date,detail, obje, tech,id) {
            // x=document.getElementById('ptitle').value=title;
            // console.log(x)
            // console.log(title)
            // console.log(s_date)
            // console.log(e_date)
            // console.log(obje)
            // console.log(tech)
            document.getElementById('utitle').value = title;
            document.getElementById('us_date').value = s_date;
            document.getElementById('ue_date').value = e_date;
            document.getElementById('udetail').value = detail;
            document.getElementById('uobjective').value = obje;
            document.getElementById('utechnology').value = tech;
            document.getElementById('uform').action = `../php/updateproject.php?id=${id}`;
            // $('#title').text(title);
            abc = document.getElementById('us_date').value;
            // $('#s_date').text(s_date);
            // $('#e_date').text(e_date);
            // $('#objective').text(obje);
            // $('#technology').text(tech);
        }
    </script>
    <!-- <script>

    $(function() {
        $("#s_date").datepicker({ 
            dateFormat: 'dd/mm/yy' 
        });
    });
    
    </script> -->

    <script>
        $(document).ready(function() {
            $('#submit').click(function() {

                let user = $('#title').val();
                let detail = $('#detail').val();
                let s_date = $('#s_date').val();
                let e_date = $('#e_date').val();
                let objective=$('#objective').val();
                let technology=$('#technology').val();
                let fullDate = new Date();
                let year = fullDate.getFullYear();
                let month = fullDate.getMonth() + 1;
                let day = fullDate.getDate();
                if (month < 10) {
                    month = "0" + month;
                }
                if (day < 10) {
                    day = "0" + day;
                }
                let today = `${year}-${month}-${day}`;
                let y = today.replace(/\D/g, "");
                let x = s_date.replace(/\D/g, "");
                let z = e_date.replace(/\D/g, "");
                
                // alert(y)
                // alert(x)



                if (user == "") {
                    $('#elo').html('**The title must be filled');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if ((user.length <= 2) || (user.length > 50)) {
                    $('#elo').html('**The title must be between 3 or 50 letter');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if (s_date == "") {
                    $('#elo').html('**Select the start date');
                    $('#elo').css('color', 'red');
                    return false;

                } else if (x < y) {
                    $('#elo').html('**Start date must be present date or future date ');
                    $('#elo').css('color', 'red');
                    return false;


                }

                if (e_date == "") {
                    $('#elo').html('**Select the end date');
                    $('#elo').css('color', 'red');
                    return false;
                } else if (z < x) {
                    $('#elo').html('**End date must be start date or future date');
                    $('#elo').css('color', 'red');
                    return false;

                }

                if (detail == "") {
                    $('#elo').html('**The details must be filled');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if ((detail.length < 20) || (detail.length > 200)) {
                    $('#elo').html('**The detail must be between 20 or 200 letter');
                    $('#elo').css('color', 'red');
                    return false;
                }
                if (objective == "") {
                    $('#elo').html('**The objective must be filled');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if ((objective.length < 5) || (detail.length > 500)) {
                    $('#elo').html('**The objective must be between 5 or 500 letter');
                    $('#elo').css('color', 'red');
                    return false;
                }
                if (technology == "") {
                    $('#elo').html('**The technology must be filled');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if ((technology.length < 1) || (technology.length > 100)) {
                    $('#elo').html('**The technology must be between 1 or 100 letter');
                    $('#elo').css('color', 'red');
                    return false;
                }
                

            });
            $('#updatemodal').click(function() {

                let user = $('#utitle').val();
                let detail = $('#udetail').val();
                let s_date = $('#us_date').val();
                let e_date = $('#ue_date').val();
                let objective=$('#uobjective').val();
                let technology=$('#utechnology').val();
                let fullDate = new Date();
                let year = fullDate.getFullYear();
                let month = fullDate.getMonth() + 1;
                let day = fullDate.getDate();
                if (month < 10) {
                    month = "0" + month;
                }
                if (day < 10) {
                    day = "0" + day;
                }
                // let today = `${year}-${month}-${day}`;
                let y = abc.replace(/\D/g, "");
                console.log(abc)
                let x = s_date.replace(/\D/g, "");
                let z = e_date.replace(/\D/g, "");
                // alert(y)
                // alert(x)



                if (user == "") {
                    $('#error').html('**The title must be filled');
                    $('#error').css('color', 'red');
                    return false;
                }

                if ((user.length <= 2) || (user.length > 50)) {
                    $('#error').html('**The title must be between 3 or 50 letter');
                    $('#error').css('color', 'red');
                    return false;
                }

                if (s_date == "") {
                    $('#error').html('**Select the start date');
                    $('#error').css('color', 'red');
                    return false;

                } else if (x < y) {
                    $('#error').html('**Start date must be present date or future date ');
                    $('#error').css('color', 'red');
                    return false;


                }

                if (e_date == "") {
                    $('#error').html('**Select the end date');
                    $('#error').css('color', 'red');
                    return false;
                } else if (z < x) {
                    $('#error').html('**End date must be start date or future date');
                    $('#error').css('color', 'red');
                    return false;

                }

                if (detail == "") {
                    $('#error').html('**The details must be filled');
                    $('#error').css('color', 'red');
                    return false;
                }

                if ((detail.length < 20) || (detail.length > 200)) {
                    $('#error').html('**The detail must be between 20 or 200 letter');
                    $('#error').css('color', 'red');
                    return false;
                }
                // if (uobjective == "") {
                //     $('#error').html('**The Objective must be filled');1
                //     $('#error').css('color', 'red');
                //     return false;
                // }

                // if ((uobjective.length <= 5) || (uobjective.length >= 500)) {
                //     $('#error').html('**The detail must be between 5 to 500 letter');
                //     $('#error').css('color', 'red');
                //     return false;
                // }
                if (objective == "") {
                    $('#error').html('**The objective must be filled');
                    $('#error').css('color', 'red');
                    return false;
                }

                if ((objective.length < 5) || (detail.length > 500)) {
                    $('#error').html('**The objective must be between 5 or 500 letter');
                    $('#error').css('color', 'red');
                    return false;
                }
                if (technology == "") {
                    $('#error').html('**The technology must be filled');
                    $('#error').css('color', 'red');
                    return false;
                }

                if ((technology.length <1) || (technology.length > 100)) {
                    $('#error').html('**The technology must be between 1 to 100 letter');
                    $('#error').css('color', 'red');
                    return false;
                }
                $('#error').html('');

            });
        });
    </script>
    <!-- <script>
        $(document).ready(function() {
            $('#submit').click(function() {

                var user = $('#title').val();
                var detail = $('#detail').val();
                var s_date = $('#s_date').val();
                var e_date = $('#e_date').val();
                var fullDate = new Date();
                var year = fullDate.getFullYear();
                var month = fullDate.getMonth() + 1;
                var day = fullDate.getDate();
                if (month < 10) {
                    month = "0" + month;
                }
                if (day < 10) {
                    day = "0" + day;
                }
                var today = `${year}-${month}-${day}`;
                let y = today.replace(/\D/g, "");
                let x = s_date.replace(/\D/g, "");
                let z = e_date.replace(/\D/g, "");
                // alert(y)
                // alert(x)



                if (user == "") {
                    $('#elo').html('**The title must be filled');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if ((user.length <= 2) || (user.length >= 50)) {
                    $('#elo').html('**The title must be between 3 or 50 letter');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if (s_date == "") {
                    $('#elo').html('**Select the start date');
                    $('#elo').css('color', 'red');
                    return false;

                } else if (x < y) {
                    $('#elo').html('**Start date must be present date or future date ');
                    $('#elo').css('color', 'red');
                    return false;


                }

                if (e_date == "") {
                    $('#elo').html('**Select the end date');
                    $('#elo').css('color', 'red');
                    return false;
                } else if (z < x) {
                    $('#elo').html('**End date must be start date or future date');
                    $('#elo').css('color', 'red');
                    return false;

                }

                if (detail == "") {
                    $('#elo').html('**The details must be filled');
                    $('#elo').css('color', 'red');
                    return false;
                }

                if ((detail.length <= 20) || (detail.length >= 200)) {
                    $('#elo').html('**The detail must be between 20 or 200 letter');
                    $('#elo').css('color', 'red');
                    return false;
                }

            });
        });
    </script> -->
</body>

</html>
<!-- end document-->