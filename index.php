

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planning App</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="Static/assets/images/favicon.png">
    <link href="Static/assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="Static/css/style.min.css" rel="stylesheet">
    <link href="Static/css/index.css" rel="stylesheet">

</head>

<body style="background-color:#EEEEEE">

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand justify-content-center" href="index.html">
                        <b class="logo-icon">
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        </b>
                        
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                   
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
              
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                   
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search pl-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg"
                                    alt="user" class="profile-pic mr-2">Markarn
                                Doe</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div >
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card login-area box-shadow">
                <div class="card-body">
                    <div class="card-content card-image">
                    <h1>Hello</h1>
                    </div>
                    <div class="card-content card-login">
                        <form class="form-horizontal form-material" method="post" action="Controller/userController/login.php">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="username" placeholder="Username" class="form-control pl-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <i class="fas fa-unlock"></i>
                                    <input type="password" name="password" placeholder="Password" class="form-control pl-0 form-control-line">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success d-none d-md-inline-block text-white btn-customized"> Login
                             </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
    
    <script src="Static/assets/plugins/jquery/dist/jquery.min.js"></script>
   
    <script src="Static/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="Static/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="Static/js/app-style-switcher.js"></script>

    <script src="Static/js/waves.js"></script>

    <script src="Static/js/sidebarmenu.js"></script>

    <script src="Static/js/custom.js"></script>
 
    <script src="Static/assets/plugins/flot/jquery.flot.js"></script>
    <script src="Static/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="Static/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>