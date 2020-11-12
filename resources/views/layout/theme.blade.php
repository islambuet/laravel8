<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Practice</title>
    <link rel="shortcut icon" href="http://shaiful.me/wp-content/uploads/2017/04/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <!-- Bootstrap CSS CDN -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Scrollbar Custom CSS -->
    <link href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css">
    <!-- icons CSS -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Our Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">



</head>
<body>
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<!-- Popper.JS for scrollbar-->
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- jQuery Custom Scroller CDN -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<header id="system_top_bar" class="d-print-none">
    <!-- LOGO -->
    <div id="logo_container" class="d-none d-lg-block d-xl-block float-left">
        <img style="height: 25px;" src="http://shaiful.me/wp-content/uploads/2015/11/cropped-20151108_1558521.jpg" alt="">
    </div>
    <!-- Left Sidebar handler -->
    <button id="handler_left_sidebar" class="handler-sidebar float-left">
        <i class="fe-menu"></i>
    </button>
    <!-- Right Sidebar handler -->
    <button id="handler_right_sidebar" class="handler-sidebar float-right">
        <i class="fe-bell"></i>
    </button>
    <!-- Users options -->
    <ul class="list-unstyled float-right mb-0">
        <li class="dropdown">
            <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('assets/images/avatar-1.jpg') }}"  alt="user-image" class="rounded-circle" style="height: 32px;width: 32px;">
                            <span class="pro-user-name ml-1">
                                Shaiful Islam  <i class="mdi mdi-chevron-down"></i>
                            </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Change Profile Picture</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Change Password</span>
                </a>

                <div class="dropdown-divider"></div>
                <a href="http://localhost/login_2018_19/home/logout" class="dropdown-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>
    </ul>




</header>
<nav id="system_left_sidebar" class="sidebar d-print-none">
<ul class="list-unstyled">
<li>
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
            <a href="#">Home 1</a>
        </li>
        <li>
            <a href="#">Home 2</a>
        </li>
        <li>
            <a href="#">Home 3</a>
        </li>
    </ul>
</li>
<li>
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages<span class="fe-menu-arrow"></span></a>

    <ul class="collapse list-unstyled" id="pageSubmenu">
        <li>
            <a href="#">Page 1</a>
        </li>
        <li>
            <a href="#">Page 2</a>
        </li>
        <li>
            <a href="#">Page 3</a>
        </li>
        <li>
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">page 4<span class="fe-menu-arrow"></span></a>

            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact4</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact3</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact2</a>
</li>
<li>
    <a href="#">Portfolio</a>
</li>
<li>
    <a href="#">Contact1</a>
</li>
</ul>
</nav>
<nav id="system_right_sidebar" class="sidebar d-print-none">
    <ul class="list-unstyled" style="margin-bottom: 70px">
        <li>
            <a href="#pageSubmenu11" data-toggle="collapse" aria-expanded="false">Pages<span class="fe-menu-arrow"></span></a>

            <ul class="collapse list-unstyled" id="pageSubmenu11">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">page 4<span class="fe-menu-arrow"></span></a>

                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<div id="system_content">
    <h2>Heading started here</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <h3>Lorem Ipsum Dolor</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <h2>Heading started here</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <h3>Lorem Ipsum Dolor</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<!-- Theme JS -->
<script type="text/javascript" src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>
