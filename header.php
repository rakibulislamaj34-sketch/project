<?php 
  session_start();
  require_once("configs/config.php");
  require_once("helpers/helper.php");
  require_once("libraries/library.php");
  require_once("models/model.php");
  require_once("controllers/controller.php");
  
  // if(!isset($_SESSION["uid"])) header("location:$base_url");
  // $uid=$_SESSION["uid"];
  

?>
<!DOCTYPE html>
<html lang="en">

<head><meta name="robots" content="noindex, nofollow">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="CoolAdmin 3.2.0">
    <meta name="description" content="Email-style inbox interface with sidebar, message list, and reading pane.">
    <title>Inbox | CoolAdmin Bootstrap 5 Admin Dashboard</title>
    <meta property="og:type" content="website">
    <meta property="og:title" content="Inbox | CoolAdmin Bootstrap 5 Admin Dashboard">
    <meta property="og:description" content="Email-style inbox interface with sidebar, message list, and reading pane.">
    <meta property="og:image" content="screenshots/cooladmin-bootstrap-dashboard-2.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Inbox | CoolAdmin Bootstrap 5 Admin Dashboard">
    <meta name="twitter:description" content="Email-style inbox interface with sidebar, message list, and reading pane.">
    <meta name="theme-color" content="#4272d7">

    <!-- Fontfaces CSS-->
    <link href="asset/css/font-face.css" rel="stylesheet" media="all" fetchpriority="high">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="../../inter/inter.css" fetchpriority="high">
    <link href="asset/vendor/fontawesome-7.2.0/css/all.min.css" rel="stylesheet" media="all"><!-- Bootstrap CSS-->
    <link href="asset/vendor/bootstrap-5.3.8.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS--><link href="asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all"><!-- Main CSS-->
    <link href="asset/css/theme.css" rel="stylesheet" media="all">
    <link href="asset/css/theme-2026.css" rel="stylesheet" media="all">

</head>

<body class="theme-2026">
    <a class="visually-hidden-focusable skip-link" href="#main-content">Skip to main content</a>

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="asset/images/icon/logo.png" alt="CoolAdmin" fetchpriority="high" decoding="sync">
                        </a>
                        <button class="hamburger hamburger--slider" type="button" aria-label="Toggle navigation">
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
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fa-solid fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fa-solid fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fa-solid fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fa-solid fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar" id="main-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-link" aria-label="CoolAdmin home">
                    <span class="logo-mark" aria-hidden="true">C</span>
                    <span class="logo-text">CoolAdmin</span>
                </a>
                <button class="sidebar-close js-sidebar-toggle" type="button" aria-label="Close navigation">
                    <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                </button>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="index2.html">Dashboard 2</a></li>
                                <li><a href="index3.html">Dashboard 3</a></li>
                                <li><a href="index4.html">Dashboard 4</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html"><i class="fa-solid fa-chart-bar"></i>Charts</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-table"></i>Tables</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a href="table.html">Tables</a></li>
                                <li><a href="data-table.html">Data table</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-regular fa-square-check"></i>Forms</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a href="form.html">Forms</a></li>
                                <li><a href="wizard.html">Setup wizard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="fa-solid fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html"><i class="fa-solid fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="active">
                            <a href="inbox.html"><i class="fa-solid fa-inbox"></i>Inbox</a>
                        </li>
                        <li>
                            <a href="kanban.html"><i class="fa-solid fa-columns"></i>Kanban</a>
                        </li>
                        <li>
                            <a href="notifications.html"><i class="fa-regular fa-bell"></i>Notifications</a>
                        </li>
                        <li>
                            <a href="docs.html"><i class="fa-regular fa-file-lines"></i>Documentation</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-user-gear"></i>Account</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a href="profile.html">Profile &amp; settings</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forget-pass.html">Forgot password</a></li>
                                <li><a href="404.html">404 not found</a></li>
                                <li><a href="500.html">500 server error</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a href="button.html">Buttons</a></li>
                                <li><a href="badge.html">Badges</a></li>
                                <li><a href="tab.html">Tabs</a></li>
                                <li><a href="card.html">Cards</a></li>
                                <li><a href="alert.html">Alerts</a></li>
                                <li><a href="progress-bar.html">Progress bars</a></li>
                                <li><a href="modal.html">Modals</a></li>
                                <li><a href="switch.html">Switches</a></li>
                                <li><a href="grid.html">Grid system</a></li>
                                <li><a href="fontawesome.html">Font Awesome</a></li>
                                <li><a href="typo.html">Typography</a></li>
                            </ul>
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
                            <button class="sidebar-toggle js-sidebar-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="main-sidebar">
                                <i class="fa-solid fa-bars" aria-hidden="true"></i>
                            </button>
                            <form class="form-header" role="search" onsubmit="return false">
                                <i class="fa-solid fa-magnifying-glass form-header__icon" aria-hidden="true"></i>
                                <input class="au-input au-input--xl" type="search" name="search" placeholder="Search anything…" aria-label="Search">
                                <kbd class="form-header__hint" aria-hidden="true">⌘K</kbd>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu" role="button" tabindex="0" aria-haspopup="true" aria-label="Messages">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title"><p>Messages</p></div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40"><img src="asset/images/icon/avatar-06.jpg" alt="" fetchpriority="high" decoding="sync"></div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40"><img src="asset/images/icon/avatar-04.jpg" alt="" loading="lazy" decoding="async"></div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer"><a href="#">View all messages</a></div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu" role="button" tabindex="0" aria-haspopup="true" aria-label="Emails">
                                        <i class="fa-solid fa-envelope"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title"><p>Emails</p></div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40"><img src="asset/images/icon/avatar-06.jpg" alt="" loading="lazy" decoding="async"></div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard…</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40"><img src="asset/images/icon/avatar-05.jpg" alt="" loading="lazy" decoding="async"></div>
                                                <div class="content">
                                                    <p>Quarterly report draft</p>
                                                    <span>John Doe, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__footer"><a href="#">See all emails</a></div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu" role="button" tabindex="0" aria-haspopup="true" aria-label="Notifications">
                                        <i class="fa-solid fa-bell"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title"><p>Notifications</p></div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40"><i class="fa-solid fa-envelope-open"></i></div>
                                                <div class="content">
                                                    <p>You have a new email</p>
                                                    <span class="date">Today, 14:30</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40"><i class="fa-solid fa-id-card"></i></div>
                                                <div class="content">
                                                    <p>Your account was updated</p>
                                                    <span class="date">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40"><i class="fa-solid fa-file-lines"></i></div>
                                                <div class="content">
                                                    <p>Report uploaded successfully</p>
                                                    <span class="date">2 days ago</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer"><a href="#">All notifications</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu" role="button" tabindex="0" aria-haspopup="true" aria-label="Account menu">
                                        <div class="image"><img src="asset/images/icon/avatar-01.jpg" alt="John Doe" loading="lazy" decoding="async"></div>
                                        <div class="content"><a class="js-acc-btn" href="#">john doe</a></div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image"><a href="#"><img src="asset/images/icon/avatar-01.jpg" alt="" loading="lazy" decoding="async"></a></div>
                                                <div class="content">
                                                    <h5 class="name"><a href="#">john doe</a></h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item"><a href="#"><i class="fa-solid fa-user"></i>Account</a></div>
                                                <div class="account-dropdown__item"><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></div>
                                                <div class="account-dropdown__item"><a href="#"><i class="fa-solid fa-sack-dollar"></i>Billing</a></div>
                                            </div>
                                            <div class="account-dropdown__footer"><a href="#"><i class="fa-solid fa-power-off"></i>Logout</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
<!-- END HEADER DESKTOP-->