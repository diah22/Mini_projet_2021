<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard page</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../Static/assets/images/favicon.png">
    <link href="../../Static/css/style.min.css" rel="stylesheet">
    <link href="../../Static/css/index.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="index.html">    
                        <b class="logo-icon">
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <span class="logo-text">
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
    
        <aside class="left-sidebar" data-sidebarbg="skin6">         
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="admin.php" aria-expanded="false"><i class="mr-3 far fa-clock fa-fw"
                            aria-hidden="true"></i><span class="hide-menu">Statistiques</span></a>
                        </li>
                    </ul>
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="#" aria-expanded="false"><i class="mr-3 fas fa-users"
                            aria-hidden="true"></i><span class="hide-menu">Utilisateurs</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Blank Page</h3>
                    </div>
                    <div class="text-right upgrade-btn btn-customized">
                        <a href="https://wrappixel.com/templates/monsteradmin/"
                            class="btn btn-success d-none d-md-inline-block text-white"><i class="fas fa-plus"></i> Ajout utilisateur
                            </a>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3">Listes des utilisateurs</h4>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0" colspan="2">Id</th>
                                                <th class="border-top-0">Nom</th>
                                                <th class="border-top-0">Mot de passe</th>
                                                <th class="border-top-0">Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round"><img src="../assets/images/users/2.jpg"
                                                            alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>Andrew</h6><small class="text-muted">Project Manager</small>
                                                </td>
                                                <td>Real Homes</td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">B</span></td>
                                                <td>
                                                    <h6>Bhavesh patel</h6><small class="text-muted">Developer</small>
                                                </td>
                                                <td>MedicalPro Theme</td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">N</span></td>
                                                <td>
                                                    <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">M</span></td>
                                                <td>
                                                    <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small>
                                                </td>
                                                <td>Helping Hands</td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-danger">N</span></td>
                                                <td>
                                                    <h6>Johnathan</h6><small class="text-muted">Graphic</small>
                                                </td>
                                                <td>Digital Agency</td>
                                                <td>$2.6K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        
            <footer class="footer text-center">
                © 2020 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
        </div>
    </div>

    <script src="../../Static/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../../Static/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../Static/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../Static/js/app-style-switcher.js"></script>
    <script src="../../Static/js/waves.js"></script>
    <script src="../../Static/js/sidebarmenu.js"></script>
    <script src="../../Static/js/custom.js"></script>
    <script src="../../Static/js/jquery.min.js"></script>
    <script src="../../Static/js/script.js"></script>
</body>

</html>