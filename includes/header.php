<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delware | Just another Steel Themes Sites site</title>
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/responsive.css" />
    <!-- Libraries CSS Files -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link type="text/css" rel="stylesheet" href="../assets/css/style1.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--Favicon-->
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="image/favicon.ico" type="image/x-icon">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/layers.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navigation.css">

    <!--------owl--------->
    <link type="text/css" rel="stylesheet" href="../assets/owl/assets/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/owl/assets/owl.theme.default.min.css" />
    <!------owl--------->
</head>

<body>
    <div class="preloader" id="preloader"></div>
    <div id="page" class="page-wrapper header-sticky header-v1 hide-topbar-mobile header-sticky">
        <section id="top-header" class="top-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="row">
                            <div class="top-col in col-sm-12 col-sm-12 col-md-2 col-lg-2">
                                <div class="input-group tab">
                                    <span class="input-group-addon"><i class="flaticon-internet top-gob"></i>Location:</span>
                                    <select class="form-control top " id="washroomtype" onchange="ShowHideDiv2()">
                                        <option class="active">NewYork </option>
                                        <option>London</option>
                                        <option>Paris</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                function ShowHideDiv2() {
                                    var washroomtype = document.getElementById("washroomtype");
                                    var washroomtypeselect = document.getElementById("washroomtypeselect");
                                    washroomtypeselect1.style.display = washroomtype.value == "NewYork" ? "block" : "none";
                                    washroomtypeselect2.style.display = washroomtype.value == "London" ? "block" : "none";
                                    washroomtypeselect3.style.display = washroomtype.value == "Paris" ? "block" : "none";
                                }
                            </script>
                            <div class="top-col col-lg-8 col-md-8 col-xs-12 col-sm-12">
                                <div id="washroomtypeselect1">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <ul>
                                                <li><span class="flaticon-pin"></span> Wilmington, 198, Delaware Bridge St.</li>
                                                <li><span class="flaticon-phone-1"></span> 1 (857) 899-0009</li>
                                                <li><span class="flaticon-clock"></span> Mon - Sat: 9.00 to 19.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="washroomtypeselect2">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <ul>
                                                <li><span class="flaticon-pin"></span> Wilmington, 198, Delaware Bridge St.</li>
                                                <li><span class="flaticon-phone-1"></span> 1 (897) 8999-009</li>
                                                <li><span class="flaticon-clock"></span> Mon - Sat: 11.00 to 9.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="washroomtypeselect3" >
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <ul>
                                                <li><span class="flaticon-pin"></span> Wilmington, 198, Delaware Bridge St.</li>
                                                <li><span class="flaticon-phone-1"></span> 1 (022) 099-0009</li>
                                                <li><span class="flaticon-clock"></span> Mon - Sat: 9.00 to 11.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-col col-lg-2 col-md-2 col-xs-12 col-sm-12">
                                <div class="span12">
                                    <form method="get" action="index1.html" class="form-inline search-outer">
                                        <input name="search" class="form-control search" type="text" placeholder="Search:">
                                        <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---row-end--->
            </div>
            <!---container-end--->
        </section>
        <!-- masthead -->
        <header id="masthead" class="site-header clearfix">
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="site-logo col-md-2 col-sm-6 col-xs-6">
                            <a href="#" class="logo">
                                <img src="../assets/img/logo.png" class="logo-dark show-logo" alt="logo" height="54" width="293" />
                            </a>
                            <h1 class="site-title"><a href="#">Delaware</a></h1>
                            <h2 class="site-description">Just another Steel Themes Sites site</h2>
                        </div>
                        <div class="site-menu col-md-10 col-sm-6 col-xs-6">
                            <div class="navbar-toggle toggle-navs">
                                <a href="#" class="navbars-icon selected-mobile">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </div>
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul id="primary-menu" class="menu pull-right">
                                    <li class="dropdown-item current-menu-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">About</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Services</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="contact.html">Careers</a></li>
                                    <!--space--->
                                    <li></li>
                                    <li class="in"><a><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="in"><a><i class="fab fa-twitter"></i></a></li>
                                    <li class="in"><a><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="in"><a><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- masthead end -->

         <!--primary-mobile-nav-->
    <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
        <a href="#" class="close-canvas-mobile-panel">×</a>
        <ul id="primary-menu2" class="menu">
            <li class="dropdown-item current-menu-item menu-item-has-children">
                <a href="#">Home</a>
                
            </li>
            <li class="dropdown-item menu-item-has-children">
                <a href="#">About</a>
                
            </li>
            <li class="dropdown-item menu-item-has-children">
                <a href="#">Services</a>
                <ul class="sub-menu">
                    <li><a href="services.html">All Services</a></li>
                    <li><a href="services-single.html">Services Single</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="contact.html">Careers</a></li>
        </ul>
    </div>
    <div id="off-canvas-layer" class="off-canvas-layer"></div>
    <!--primary-mobile-nav end-->