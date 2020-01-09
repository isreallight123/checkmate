<!DOCTYPE html>
<html en="us">
<head>
    <meta charset="utf-8">
    <!-- TELL PHONES NOT TO LIE ABOUT THIER WIDTH & stops the font from enlarging when phone is turned sideways -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Links to css files -->
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/fontawesome-free-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="fonts/material-icons/material-icons.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="Shortcut icon" href="oluaka_favicon.png">

</head>
<body>
<!-- HEADER starts here -->
<header id="top-header">
    <div class="header-title"><span>ODP</span></div>
    
    <div id="top-header-menu">
        <div id="hamburger">
            <a href="#">
                <span><i class="fas fa-bars"></i><br>Menu</span>
            </a>
        </div>

        <div id="create-account">
            <a href="#">
                <span><i class="fas fa-plus"></i><br>Add</span>
            </a>
        </div>
        
        <div id="user-img">
            <figure>
                <img src="imgs/kelechi-okorie.jpg">
            </figure>
        </div>

    </div>
    
</header> <!-- end HEADER -->

<!-- MAIN starts here -->
<div id="body">
    <aside id="aside">
        <div id="aside-background"></div>
        <div id="aside-container">
            <div id="aside-header">
                <div id="header-top">
                    <figure><img  src="./imgs/kelechi-okorie.jpg" alt="profile pic"></figure>
                    <div id="close-btn"><span>&times;</span></div>
                </div>
                <div id="header-body">
                    <p id="name">Kelechi Okorie</p>
                    <p id="email">kelechiokorie22@gmail.com</p>
                    <p id="stack">Full stack engineer</p>
                </div>

            </div>
            <div id="aside-body">
                <ul>
                    <li><a href="#" id="profile"><i class="fas fa-user fa-fw"></i>Profile</a></li>
                    <li><a href="#" id="notice-board"><i class="fas fa-chalkboard fa-fw"></i>Notice Board</a></li>
                    <li><a href="#" id="evaluation-form"><i class="fas fa-comments fa-fw"></i>Evaluation Form</a></li>
                    <li><a href="#" id="attendance" class="active"><i class="fas fa-users fa-fw"></i>Attendance</a></li>
                    <li><a href="#" id="assignments"><i class="fas fa-calendar-check fa-fw"></i>Assignments</a></li>
                <ul>
                <ul>
                    <li><a><i class="fas fa-cog"></i>Settings</a></li>
                </ul>
            </div>
            <div id="aside-footer"></div>
        </div>
    </aside>
