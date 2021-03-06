<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <div class = "row">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                  
                        <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline ">
                    <button id="sidebarToggleTop" class="btn btn-link  rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                        
                    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
                </a>
                
            </div>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg" >
                                <span class="mr-2 d-none d-lg-inline small"> PS Kenya </span>
                                
                            </a>
                           
                        </li>

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Enterprise Overview</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Appointments.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Appointments</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Income.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Income</span></a>
            </li>

            


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow bl-none">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg" >
                                <span class="mr-2 d-none d-lg-inline small"> PS Kenya <i
                                class="fas fa-caret-down"></i></span>
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-primary font-weight-bold">Enterprise Overview</h1>

                        <!-- Period filter -->
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <select id="gender" name="gender" class="form-control shadow-none" required>
                                <option selected disabled value="">Select period</option>
                                <option value="Male">Today</option>
                                <option value="Female">Yesterday</option>
                                <option value="Female">Last 7 days</option>
                                <option value="Female">Last 14 days</option>
                                <option value="Female">Last 30 days</option>
                                <option value="Female">Last 90 days</option>
                                <option value="Female">Last 365 days</option>
                            </select>
                        </div>

                        <!-- Toggle filters button -->
                        <Button href="#filters" data-toggle="collapse" class=" btn btn-default shadow">Filters <i
                                class="fas fa-caret-down"></i> </Button>
                    </div>

                    <!-- Filters collapsed -->
                    <div id = "filters" class = "collapse fade">
                        <div class = "row">
                                <div class=" col-xl-4 col-md-6 mb-4 text-primary font-weight-bold">
                                    <label>Location</label>
                                    <select id="location" name="gender" class="form-control shadow-none" required> 
                                        <option selected disabled value="">Select location of clinic</option>
                                        <option value="Male">Today</option>
                                        <option value="Female">Yesterday</option>
                                        <option value="Female">Last 7 days</option>
                                        <option value="Female">Last 14 days</option>
                                        <option value="Female">Last 30 days</option>
                                        <option value="Female">Last 90 days</option>
                                        <option value="Female">Last 365 days</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-md-6 mb-4 text-primary font-weight-bold">
                                    <label>Age group</label>
                                    <select id="age" name="age" class="form-control shadow " required>                        
                                        <option selected disabled value="">Select age group</option>
                                        <option value="Male">Today</option>
                                        <option value="Female">Yesterday</option>
                                        <option value="Female">Last 7 days</option>
                                        <option value="Female">Last 14 days</option>
                                        <option value="Female">Last 30 days</option>
                                        <option value="Female">Last 90 days</option>
                                        <option value="Female">Last 365 days</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-md-6 mb-4 text-primary font-weight-bold">
                                    <label for="gender">Gender</label>
                                    <input list="gender_list" name="gender" class="form-control shadow" id="gender"placeholder="Select or type in gender">
                                    <datalist id="gender_list">
                                        <option value="Male">
                                        <option value="Female">
                                        <option value="Prefer not to say">
                                    </datalist>
                                </div>
                        </div>

                        <div class="sidebar-dark hr-b "></div>
                    </div>

                        <div class="row">
                            <!-- column 1 -->
                            <div class = "col-xl-9">
                                <!-- Content Row -->
                                <div class="row">
                                    <!-- Total appointments card -->
                                    <div class="col-xl-4 col-md-6 mb-4">
                                        <div class="card shadow py-2 hg">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-primary mb-1">
                                                            Total appointments
                                                            <!-- <div class="col-auto"> -->
                                                                <div class="h5 mb-0 mr-3 font-weight-bold text-secondary">5000</div>
                                                            <!-- </div> -->
                                                            <div class = "row">
                                                                <div class = "column">
                                                                    <div class="col-xs-4 topbar-divider d-none d-sm-block"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-6 small">
                                                            Telemedicine
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-secondary">1000</div>
                                                            </div>
                                                            
                                                            <div class="col-md-6 border-left small">
                                                            In-person
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-secondary">1000</div>
                                                            </div>

                                                         </div>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Income card -->
                                    <div class="col-xl-6 col-md-6 mb-4">
                                        <div class="card shadow py-2 hg">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-primary mb-1">
                                                            Income</div>
                                                            <div >&nbsp</div>
                                                        <div class="row">
                                                            <div class="col-md-6 border-right small">
                                                            This Month
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-secondary">KES 200,000</div>
                                                            </div>

                                                            <div class="col-md-6 small">
                                                             Previous Month
                                                             <div class="h5 mb-0 mr-3 font-weight-bold text-secondary">KES 1,300,000</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total clinics Card -->
                                    <div class="col-xl-2 col-md-6 mb-4">
                                        <div class="card shadow  py-2 hg">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-primary mb-1 small">Total clinics
                                                        </div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">8</div>
                                                                <!-- Divider -->
                                                                <hr>
                                                                <div class="text-xs font-weight-bold text-primary mb-1 small">Total Doctors
                                                                </div>                                                                
                                                                <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">80</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <!-- Area Chart -->
                                <div class="col-xl-12 p-0 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Booking trends</h6>
                                            <div class=" col-xl-4 col-md-6 mb-4 text-primary font-weight-bold">
                                                <select id="service" name="gender" class="form-control shadow-none" required> 
                                                    <option value="">Service</option>
                                                    <option value="Male">Gender</option>
                                                    <option value="Female">Age group</option>
                                                    <option value="Female">Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <canvas id="myAreaChartOverview"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <!-- table -->
                                <div class="col-xl-12 p-0 col-lg-7">
                                    <?php require "tables.html";?>
                                </div>
                            </div>
                            <!-- Column 2 -->
                            <div class="col-xl-3 p-0">
                                <!-- Pie Chart -->
                                <div class="col-xl-12 col-lg-5">
                                    <div class="card shadow mb-4 h-100">
                                        <!-- Card Header - Dropdown -->
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Medical conditions</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                    <div class="dropdown-header">Dropdown Header:</div>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                                <div class = "mt-2" >

                                                    <h6 class="text-primary small">Total clinics available <span class = "h6 ml-5 font-weight-bold">8</span></h6>
                                                    <h6 class="text-primary small">Total appointments booked <span class = "h6 ml-3 font-weight-bold">5,000</span></h6>
                                                </div>
                                            <div class="chart-pie pt-4 pb-2">
                                                <canvas width="600" height="250" id="myPieChartOverview"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
              
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/charts/chart-area.js"></script>
    <script src="js/charts/chart-pie.js"></script>
    <script src="js/charts/chartDash.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/charts/datatables.js"></script>
</body>

</html>