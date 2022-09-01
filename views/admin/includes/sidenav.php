<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap5.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/sidenav.css">

        <!-- BoxIcon -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <style>
        .side-icon{
            font-size: 25px;
            color: #dbcbbe;
        }
        .sidenav{
            background-color: #f8f5f2;
        }
        .sidenav-title{
            color: #6d5b4b;
        }
    </style>


    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end sidenav" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <center>
                    <img src="assets/png/church-logo.png" style="width: 50px;">
                    <h3 class="sidenav-title">Saint Peter & Paul Parish</h3>
                    </center>
                </div>

                <div class="list-group list-group-flush mt-5">
                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="index.php?page=dashboard" id="">
                        <i class='bx bxs-dashboard side-icon mr-2'></i>
                        Dashboard
                    </a>


                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="index.php?page=baptismal" id="">
                        <i class='bx bxs-church side-icon mr-2'></i>
                        Baptismal
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="index.php?page=confirmation">
                        <i class='bx bx-history side-icon mr-2'></i>
                        Confirmation
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="index.php?page=request">
                        <i class='bx bxs-envelope side-icon mr-2'></i>
                        Request
                    </a>

                    <a class="list-group-item list-group-item-action py-2 ripple d-flex justify-content-start mt-3" href="index.php?page=member">
                      <i class='bx bxs-group side-icon mr-2'></i>
                        Manage Members
                    </a>
                </div>
                
            </div>
            <!-- Page content wrapper-->



            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button class="btn" id="sidebarToggle">
                            <i class='fas fa-bars'></i>
                        </button>


                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <!-- <a class="me-5">Thomas Allene B. Escoto</a> -->
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                                    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <center>
                                        <a class="dropdown-item" href="../../index.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>

        