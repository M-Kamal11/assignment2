<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MKF Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/icons8-muscle-30.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons.min.css" rel="stylesheet">
    <link href="css/glightbox.min.css" rel="stylesheet">
    <link href="css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
   <style>/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a {
    text-decoration: none;
    color: #ffb03b;
}

a:hover {
    color: #ffc56e;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Satisfy", sans-serif;
}


/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/

.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #ffb03b;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    transition: all 0.4s;
}

.back-to-top i {
    font-size: 28px;
    color: #fff;
    line-height: 0;
}

.back-to-top:hover {
    background: #ffc064;
    color: #fff;
}

.back-to-top.active {
    visibility: visible;
    opacity: 1;
}


/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/

#topbar {
    padding: 0;
    font-size: 15px;
    height: 50px;
    transition: all 0.5s;
    background: rgba(26, 24, 22, 0.8);
    z-index: 996;
    color: rgba(255, 255, 255, 0.7);
}

#topbar.topbar-transparent {
    background: transparent;
}

#topbar.topbar-scrolled {
    top: -50px;
}

#topbar i {
    color: #ffb03b;
    line-height: 0;
}

#topbar i span {
    color: #fff;
    font-style: normal;
    padding-left: 5px;
}


/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

#header {
    top: 50px;
    height: 70px;
    z-index: 997;
    transition: all 0.5s;
    padding: 10px 0;
    background: rgba(26, 24, 22, 0.85);
}

#header.header-transparent {
    background: transparent;
}

#header.header-scrolled {
    top: 0;
    background: rgba(26, 24, 22, 0.85);
}

#header .logo h1 {
    font-size: 28px;
    margin: 0;
    line-height: 1;
    font-weight: 400;
    letter-spacing: 3px;
}

#header .logo h1 a,
#header .logo h1 a:hover {
    color: #fff;
    text-decoration: none;
}

#header .logo img {
    padding: 0;
    margin: 0;
    max-height: 40px;
}


/*--------------------------------------------------------------
# Book a table button Menu
--------------------------------------------------------------*/

.book-a-table-btn {
    background: #ffb03b;
    color: #fff;
    border-radius: 50px;
    margin: 0 0 0 20px;
    padding: 10px 25px;
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 1px;
    transition: 0.3s;
    white-space: nowrap;
}

.book-a-table-btn:hover {
    background: #ffa012;
    color: #fff;
}

@media (max-width: 992px) {
    .book-a-table-btn {
        margin: 0 15px 0 0;
        padding: 8px 20px;
        letter-spacing: 1px;
    }
}


/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/


/**
* Desktop Navigation 
*/

.navbar {
    padding: 0;
}

.navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
}

.navbar li {
    position: relative;
}

.navbar a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 24px;
    font-size: 15px;
    font-weight: 500;
    color: white;
    white-space: nowrap;
    transition: 0.3s;
}

.navbar a i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar li:hover>a {
    color: #ffb03b;
}

.navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 24px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
}

.navbar .dropdown ul li {
    min-width: 200px;
}

.navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 400;
    color: #433f39;
}

.navbar .dropdown ul a i {
    font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
    color: #ffb03b;
}

.navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
}

.navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
}

@media (max-width: 1366px) {
    .navbar .dropdown .dropdown ul {
        left: -90%;
    }
    .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
    }
}


/**
* Mobile Navigation 
*/

.mobile-nav-toggle {
    color: #fff;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
}

@media (max-width: 991px) {
    .mobile-nav-toggle {
        display: block;
    }
    .navbar ul {
        display: none;
    }
}

.navbar-mobile {
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgba(39, 37, 34, 0.9);
    transition: 0.3s;
    z-index: 0;
}

.navbar-mobile .mobile-nav-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
}

.navbar-mobile ul {
    display: block;
    position: absolute;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    border-radius: 8px;
    background-color: #fff;
    overflow-y: auto;
    transition: 0.3s;
}

.navbar-mobile a {
    padding: 10px 20px;
    font-size: 15px;
    color: #433f39;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
    color: #ffb03b;
}

.navbar-mobile .getstarted {
    margin: 15px;
}

.navbar-mobile .dropdown ul {
    position: static;
    display: none;
    margin: 10px 20px;
    padding: 10px 0;
    z-index: 99;
    opacity: 1;
    visibility: visible;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
    min-width: 200px;
}

.navbar-mobile .dropdown ul a {
    padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
    font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
    color: #ffb03b;
}

.navbar-mobile .dropdown>.dropdown-active {
    display: block;
}


/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

#hero {
    width: 100%;
    height: 100vh;
    background-color: rgba(39, 37, 34, 0.8);
    overflow: hidden;
    padding: 0;
}

#hero .carousel-item {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

#hero .carousel-item::before {
    content: '';
    background-color: rgba(12, 11, 10, 0.5);
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
}

#hero .carousel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}

#hero .carousel-content {
    text-align: center;
}

#hero h2 {
    color: #fff;
    margin-bottom: 30px;
    font-size: 48px;
    font-weight: 700;
}

#hero h2 span {
    color: #ffb03b;
}

#hero p {
    width: 80%;
    -webkit-animation-delay: 0.4s;
    animation-delay: 0.4s;
    margin: 0 auto 30px auto;
    color: #fff;
}

#hero .carousel-inner .carousel-item {
    transition-property: opacity;
    background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
    opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
    opacity: 1;
    transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
    left: 0;
    transform: translate3d(0, 0, 0);
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
    background: none;
    font-size: 30px;
    line-height: 0;
    width: auto;
    height: auto;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50px;
    transition: 0.3s;
    color: rgba(255, 255, 255, 0.5);
    width: 54px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
}

#hero .carousel-control-next-icon:hover,
#hero .carousel-control-prev-icon:hover {
    background: rgba(255, 255, 255, 0.3);
    color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
    cursor: pointer;
}

#hero .btn-menu,
#hero .btn-book {
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: inline-block;
    padding: 12px 30px;
    border-radius: 50px;
    transition: 0.5s;
    line-height: 1;
    margin: 0 10px;
    -webkit-animation-delay: 0.8s;
    animation-delay: 0.8s;
    color: #fff;
    border: 2px solid #ffb03b;
}

#hero .btn-menu:hover,
#hero .btn-book:hover {
    background: #ffb03b;
    color: #fff;
}

@media (max-width: 768px) {
    #hero h2 {
        font-size: 28px;
    }
}

@media (min-width: 1024px) {
    #hero p {
        width: 50%;
    }
    #hero .carousel-control-prev,
    #hero .carousel-control-next {
        width: 5%;
    }
}


/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/

section {
    padding: 60px 0;
}

.section-bg {
    background-color: white;
}

.section-title {
    text-align: center;
    padding-bottom: 30px;
}

.section-title h2 {
    margin: 15px 0 0 0;
    font-size: 32px;
    font-weight: 700;
    color: #5f5950;
}

.section-title h2 span {
    color: #ffb03b;
}

.section-title p {
    margin: 15px auto 0 auto;
    font-weight: 300;
}

@media (min-width: 1024px) {
    .section-title p {
        width: 50%;
    }
}


/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/

.breadcrumbs {
    padding: 20px 0;
    background-color: #f2f1ef;
    min-height: 40px;
    margin-top: 120px;
}

@media (max-width: 992px) {
    .breadcrumbs {
        margin-top: 70px;
    }
}

.breadcrumbs h2 {
    font-size: 24px;
    font-weight: 300;
    margin: 0;
}

@media (max-width: 992px) {
    .breadcrumbs h2 {
        margin: 0 0 10px 0;
    }
}

.breadcrumbs ol {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 14px;
}

.breadcrumbs ol li+li {
    padding-left: 10px;
}

.breadcrumbs ol li+li::before {
    display: inline-block;
    padding-right: 10px;
    color: #6c757d;
    content: "/";
}

@media (max-width: 768px) {
    .breadcrumbs .d-flex {
        display: block !important;
    }
    .breadcrumbs ol {
        display: block;
    }
    .breadcrumbs ol li {
        display: inline-block;
    }
}


/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/

.about {
    background: #fffaf3;
}

.about .content {
    padding: 0 80px;
}

.about .content h3 {
    font-weight: 400;
    font-size: 34px;
    color: #5f5950;
}

.about .content h4 {
    font-size: 20px;
    font-weight: 700;
    margin-top: 5px;
}

.about .content p {
    font-size: 15px;
    color: #848484;
}

.about .content ul {
    list-style: none;
    padding: 0;
}

.about .content ul li+li {
    margin-top: 15px;
}

.about .content ul li {
    position: relative;
    padding-left: 26px;
}

.about .content ul i {
    font-size: 20px;
    color: #ffb03b;
    position: absolute;
    left: 0;
    top: 2px;
}

.about .content p:last-child {
    margin-bottom: 0;
}

.about .video-box {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 400px;
    position: relative;
}

.about .play-btn {
    width: 94px;
    height: 94px;
    background: radial-gradient(#ffb03b 50%, rgba(255, 176, 59, 0.4) 52%);
    border-radius: 50%;
    display: block;
    position: absolute;
    left: calc(50% - 47px);
    top: calc(50% - 47px);
    overflow: hidden;
}

.about .play-btn::after {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 100;
    transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn::before {
    content: '';
    position: absolute;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 0s;
    animation-delay: 0s;
    -webkit-animation: pulsate-btn 2s;
    animation: pulsate-btn 2s;
    -webkit-animation-direction: forwards;
    animation-direction: forwards;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: steps;
    animation-timing-function: steps;
    opacity: 1;
    border-radius: 50%;
    border: 5px solid rgba(255, 176, 59, 0.7);
    top: -15%;
    left: -15%;
    background: rgba(198, 16, 0, 0);
}

.about .play-btn:hover::after {
    border-left: 15px solid #ffb03b;
    transform: scale(20);
}

.about .play-btn:hover::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border: none;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 200;
    -webkit-animation: none;
    animation: none;
    border-radius: 0;
}

@media (max-width: 1024px) {
    .about .content,
    .about .accordion-list {
        padding-left: 0;
        padding-right: 0;
    }
}

@media (max-width: 992px) {
    .about .content {
        padding-top: 30px;
    }
    .about .accordion-list {
        padding-bottom: 30px;
    }
}

@-webkit-keyframes pulsate-btn {
    0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
    }
    100% {
        transform: scale(1, 1);
        opacity: 0;
    }
}

@keyframes pulsate-btn {
    0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
    }
    100% {
        transform: scale(1, 1);
        opacity: 0;
    }
}


/*--------------------------------------------------------------
# Whu Us
--------------------------------------------------------------*/

.why-us .box {
    padding: 50px 30px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    transition: all ease-in-out 0.3s;
    height: 100%;
}

.why-us .box span {
    display: block;
    font-size: 28px;
    font-weight: 700;
    color: #ffcf88;
}

.why-us .box h4 {
    font-size: 24px;
    font-weight: 600;
    padding: 0;
    margin: 20px 0;
    color: #6c665c;
}

.why-us .box p {
    color: #aaaaaa;
    font-size: 15px;
    margin: 0;
    padding: 0;
}

.why-us .box:hover {
    background: #ffb03b;
    padding: 30px 30px 70px 30px;
    box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.18);
}

.why-us .box:hover span,
.why-us .box:hover h4,
.why-us .box:hover p {
    color: #fff;
}


/*--------------------------------------------------------------
# Menu Section
--------------------------------------------------------------*/

.menu #menu-flters {
    padding: 0;
    margin: 0 auto 0 auto;
    list-style: none;
    text-align: center;
    border-radius: 50px;
}

.menu #menu-flters li {
    cursor: pointer;
    display: inline-block;
    padding: 8px 16px 10px 16px;
    font-size: 14px;
    font-weight: 500;
    line-height: 1;
    color: #444444;
    margin: 0 3px 10px 3px;
    transition: all ease-in-out 0.3s;
    background: #fff;
    border: 2px solid #ffb03b;
    border-radius: 50px;
}

.menu #menu-flters li:hover,
.menu #menu-flters li.filter-active {
    color: #fff;
    background: #ffb03b;
}

.menu #menu-flters li:last-child {
    margin-right: 0;
}

.menu .menu-content {
    margin-top: 30px;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    position: relative;
}

.menu .menu-content::after {
    content: "......................................................................" "...................................................................." "....................................................................";
    position: absolute;
    left: 20px;
    right: 0;
    top: -4px;
    z-index: 1;
    color: #dad8d4;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.menu .menu-content a {
    padding-right: 10px;
    background: #fff;
    position: relative;
    z-index: 3;
    font-weight: 700;
    color: #ff9b08;
}

.menu .menu-content span {
    background: #fff;
    position: relative;
    z-index: 3;
    padding: 0 10px;
    font-weight: 600;
}

.menu .menu-ingredients {
    font-style: italic;
    font-size: 14px;
    font-family: "Comic Neue", sans-serif;
    color: #948c81;
}


/*--------------------------------------------------------------
# Specials
--------------------------------------------------------------*/

.specials {
    overflow: hidden;
}

.specials .nav-tabs {
    border: 0;
}

.specials .nav-link {
    border: 0;
    padding: 12px 15px 12px 0;
    transition: 0.3s;
    color: #433f39;
    border-radius: 0;
    border-right: 2px solid #e8e7e4;
    font-weight: 600;
    font-size: 15px;
}

.specials .nav-link:hover {
    color: #ffb03b;
}

.specials .nav-link.active {
    color: #ffb03b;
    border-color: #ffb03b;
}

.specials .tab-pane.active {
    -webkit-animation: fadeIn 0.5s ease-out;
    animation: fadeIn 0.5s ease-out;
}

.specials .details h3 {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #433f39;
}

.specials .details p {
    color: #777777;
}

.specials .details p:last-child {
    margin-bottom: 0;
}

@media (max-width: 992px) {
    .specials .nav-link {
        border: 0;
        padding: 15px;
    }
    .specials .nav-link.active {
        color: #fff;
        background: #ffb03b;
    }
}


/*--------------------------------------------------------------
# Book A Table
--------------------------------------------------------------*/

.book-a-table .php-email-form {
    width: 100%;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
    padding: 30px;
    background: #fff;
}

.book-a-table .php-email-form .form-group {
    padding-bottom: 8px;
}

.book-a-table .php-email-form .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
}

.book-a-table .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
}

.book-a-table .php-email-form .error-message br+br {
    margin-top: 25px;
}

.book-a-table .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.book-a-table .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
}

.book-a-table .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.book-a-table .php-email-form input,
.book-a-table .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
}

.book-a-table .php-email-form input {
    height: 44px;
}

.book-a-table .php-email-form textarea {
    padding: 10px 12px;
}

.book-a-table .php-email-form button[type="submit"] {
    background: #ffb03b;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}

.book-a-table .php-email-form button[type="submit"]:hover {
    background: #ffa012;
}


/*--------------------------------------------------------------
# Gallery
--------------------------------------------------------------*/

.gallery {
    padding-bottom: 0;
}

.gallery .gallery-item {
    overflow: hidden;
    border-right: 3px solid #fff;
    border-bottom: 3px solid #fff;
}

.gallery .gallery-item img {
    transition: all ease-in-out 0.4s;
}

.gallery .gallery-item:hover img {
    transform: scale(1.1);
}


/*--------------------------------------------------------------
# trainers
--------------------------------------------------------------*/

.trainers {
    padding: 60px 0;
    position: relative;
}

.trainers::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.8);
    z-index: 9;
}

.trainers .container {
    position: relative;
    z-index: 10;
}

.trainers .member {
    text-align: center;
    margin-bottom: 80px;
    position: relative;
}

.trainers .member .pic {
    overflow: hidden;
}

.trainers .member .member-info {
    position: absolute;
    bottom: -80px;
    left: 20px;
    right: 20px;
    background: #fff;
    padding: 20px 0;
    color: #433f39;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: max-height 0.5s ease-in-out;
}

.trainers .member h4 {
    font-weight: 500;
    margin-bottom: 10px;
    font-size: 16px;
    color: #6c665c;
    position: relative;
    padding-bottom: 10px;
    font-family: "Poppins", sans-serif;
}

.trainers .member h4::after {
    content: '';
    position: absolute;
    display: block;
    width: 50px;
    height: 1px;
    background: #ffcf88;
    bottom: 0;
    left: calc(50% - 25px);
}

.trainers .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
}

.trainers .member .social {
    margin-top: 15px;
}

.trainers .member .social a {
    transition: color 0.3s;
    color: #7a7368;
}

.trainers .member .social a:hover {
    color: #ffb03b;
}

.trainers .member .social i {
    font-size: 16px;
    margin: 0 2px;
}

@media (max-width: 992px) {
    .trainers .member {
        margin-bottom: 110px;
    }
}

@media (min-width: 1024px) {
    .trainers {
        background-attachment: fixed;
    }
}


/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/

.testimonials {
    padding: 80px 0;
    background: url("assets/img/slide/slide-1.jpg") no-repeat;
    background-position: center center;
    background-size: cover;
    position: relative;
}

.testimonials::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(12, 11, 10, 0.7);
}

.testimonials .section-header {
    margin-bottom: 40px;
}

.testimonials .testimonial-item {
    text-align: center;
    color: #fff;
}

.testimonials .testimonial-item .testimonial-img {
    width: 100px;
    border-radius: 50%;
    border: 6px solid rgba(255, 255, 255, 0.15);
    margin: 0 auto;
}

.testimonials .testimonial-item h3 {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0 5px 0;
    color: #fff;
    font-family: "Poppins", sans-serif;
}

.testimonials .testimonial-item h4 {
    font-size: 14px;
    color: #ddd;
    margin: 0 0 15px 0;
    font-family: "Comic Neue", sans-serif;
}

.testimonials .testimonial-item .stars {
    color: #ffb03b;
    margin-bottom: 10px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
    color: rgba(255, 255, 255, 0.4);
    font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
    display: inline-block;
    left: -5px;
    position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
    display: inline-block;
    right: -5px;
    position: relative;
    top: 10px;
}

.testimonials .testimonial-item p {
    font-style: italic;
    margin: 0 auto 15px auto;
    color: #eee;
}

.testimonials .swiper-pagination {
    margin-top: 20px;
    position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: rgba(255, 255, 255, 0.5);
    opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
    background-color: #ffb03b;
}

@media (min-width: 992px) {
    .testimonials .testimonial-item p {
        width: 80%;
    }
}


/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/

.contact .info-wrap {
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

.contact .info {
    background: #fff;
}

.contact .info i {
    font-size: 20px;
    color: #ffb03b;
    float: left;
    width: 44px;
    height: 44px;
    background: #fff6e8;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}

.contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #433f39;
    font-family: "Poppins", sans-serif;
}

.contact .info p {
    padding: 0 0 0 60px;
    margin-bottom: 0;
    font-size: 14px;
    color: #7a7368;
}

.contact .info:hover i {
    background: #ffb03b;
    color: #fff;
}

.contact .php-email-form {
    width: 100%;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
    padding: 30px;
    background: #fff;
}

.contact .php-email-form .form-group {
    padding-bottom: 8px;
}

.contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
}

.contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
}

.contact .php-email-form input {
    height: 44px;
}

.contact .php-email-form textarea {
    padding: 10px 12px;
}

.contact .php-email-form button[type="submit"] {
    background: #ffb03b;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}

.contact .php-email-form button[type="submit"]:hover {
    background: #ffa012;
}

@-webkit-keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

#footer {
    background: #35322d;
    color: #fff;
    font-size: 14px;
    text-align: center;
    padding: 30px 0;
}

#footer h3 {
    font-size: 36px;
    font-weight: 700;
    color: #ffb03b;
    position: relative;
    padding: 0;
    margin: 0 0 15px 0;
}

#footer p {
    font-size: 15;
    font-style: italic;
    padding: 0;
    margin: 0 0 40px 0;
}

#footer .social-links {
    margin: 0 0 40px 0;
}

#footer .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #46423b;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}

#footer .social-links a:hover {
    background: #ffb03b;
}

#footer .copyright {
    margin: 0 0 5px 0;
}

#footer .credits {
    font-size: 13px;
}

</style>


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
            <i class="bi bi-phone d-flex align-items-center"><span>051-5577559</span></i>
            <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 07:00 AM - 11:30 PM</span></i>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="logo me-auto">
                <h1><a href="home.html"><i style="font-size:24px" class="fa">&#xf296;</i>  MK Fitness</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Services</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#trainers">Trainers/Guide</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <a href="#book-a-table" class="book-a-table-btn scrollto">Register</a>
            <li> <a href="{{ url('/logout') }}" class="f90-logout-button">Logout <i style="font-size:20px" class="fa">&#xf08b;</i></a>

            </li>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background: url(img/slide/slide-1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    <span>MK Fitness</span> </h2>
                                <p class="animate__animated animate__fadeInUp">MKF( M.Kamal Fitness) where your Fitness and well being is what matters the most to us!</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Services</a>
                                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(img/slide/slide-2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Our Goal</h2>
                                <p class="animate__animated animate__fadeInUp">Providing the very best services, advice, guidance, machinery and environment to our customers.</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Services</a>
                                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background: url(img/slide/slide-3.jpg);">
                        <div class="carousel-background"><img src="img/slide/slide-3.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Our Future</h2>
                                <p class="animate__animated animate__fadeInUp">To provide such a level of high quality services that we expand our society of health and fitness accross the country. so that we can elp as many people as we can!</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Services</a>
                                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <div class="section-title">
            <h2>About Us</h2>
        </div>
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("img/gallery/gallery-3.jpg");'>
                        <a href="https://youtu.be/R3Dgq-LMg74" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3><strong>MK FITNESS IS LEADING THE GYM IN ISLAMABAD FOR MULTIPLE REASONS</strong></h3>
                            <p>A couple of friends with enthusiasm for fitness started this fitness gym. The goal was always to provide the best to customers and the things they couldn't have at their time. ZKF Fitness due to its high end quality services
                                made its name and started to flourish. Even with all this growth, we have made it a priority to ensure that the feel and vibe of the gym is and will always be inviting and friendly; we believe that working out should be
                                available to everyone.We never have and never will compomise on the quality and professionalism. We follow the three golden rules in the gym business:
                                <ul>
                                    <li><i class="fa fa-check"></i>Cleanliness </li>
                                    <li><i class="fa fa-check"></i>Equipment for everyone’s needs. </li>
                                    <li><i class="fa fa-check"></i>Staff to serve in a friendly and professional way.</li>
                                </ul>
                                <br> MKF is, at its core, a family, and we want to keep it that way. That commitment to our customers extends to helping the community as well. Monster Gym is proud to support multiple local and national charities. With
                                the most high-end equipment, and the most hours in Islamabad, ZKF doesn’t just set the bar. ZKF is the bar. </p>


                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Whu Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <h2>Why choose <span>Our Gym</span></h2>
                    <p>MKF has aready made its name for itself. Here is why we'd like to offer you our services and want you to choose us:</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box">
                            <span>01</span>
                            <h4>Timing</h4>
                            <p>We provide the most flexible timings which you can easily manage throughout your day. </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>02</span>
                            <h4>Services</h4>
                            <p>All forms of trainings, wokrouts and programs are offered here. So choose your program and get to work.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>03</span>
                            <h4> Maintenance and Professionalism</h4>
                            <p>24/7 maintanence of the equipment as well as the environment plus staff to help in any sort of inconvenience.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container">

                <div class="section-title">
                    <h2>Check out <span>Programs Offered</span></h2>
                    <p>Here's a list and description of programs and modes offered at our gym.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Body Building</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Cardio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Crossfit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Weight Loss</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Personal trainer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Body Building</h3>
                                        <p>Bodybuilding is the use of progressive resistance exercise to control and develop one's muscles (muscle building) by muscle hypertrophy for aesthetic purposes.This includes the use of weights bars and machines.
                                            If youre training wihtout the trainer you are required to re-rack equipment after use. All the machinery and equipment that involves body building can be used.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/specials-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardio</h3>
                                        <p>Cardio is defined as any type of exercise that gets your heart rate up and keeps it up for a prolonged period of time. Your respiratory system will start working harder as you begin to breathe faster and more deeply.It
                                            includes the treadmills, cycles , elliptical machines , ladders, ropes nd bikes. These machines are used in order to increase your stamina. The machines are to be used resposoibility</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/specials-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Crossfit</h3>
                                        <p>A form of high intensity interval training, CrossFit is a strength and conditioning workout that is made up of functional movement performed at a high intensity level. These movements are actions that you perform
                                            in your day-to-day life, like squatting, pulling, pushing etc.Most of the time you'll use some equipment like a barbell, a pull-up bar, rings, kettlebells, a rower, an assault bike, or a battle rope.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/specials-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Weight Loss</h3>
                                        <p>it includes Walking which is one of the best exercises for weight loss and for good results: Jogging or running. Jogging and running are great exercises to help you lose weight. Cycling, Weight training,Interval
                                            training, Swimming, Yoga and Pilates etc.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/specials-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Peronal Trainer</h3>
                                        <p>Personal trainers assess their customers' bodily strengths and weaknesses and create customized workout plans. They provide physical and mental guidance and monitor customers' progress on a regular basis. They also
                                            make sure that customers don't get injured while training.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="img/specials-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Specials Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container">

                <div class="section-title">
                    <h2>Our<span> Packages</span></h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Show All</li>
                            <li data-filter=".filter-month">Monthly</li>
                            <li data-filter=".filter-3mon">3-month</li>
                            <li data-filter=".filter-year">Annual</li>
                        </ul>
                    </div>
                </div>

                <div class=" row menu-container ">
                    <div class="col-lg-6 menu-item filter-month ">
                        <br>Monthly--------------------
                        <div class="menu-content ">
                            <a href="# ">Bodybuilding</a>
                            <span>Rs.1500</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.2000 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-month ">
                        <br>
                        <br>
                        <div class="menu-content ">
                            <a href="# ">Cardio</a>
                            <span>Rs.2000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.2000 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-month ">

                        <div class="menu-content ">
                            <a href="# ">Crossfit</a>
                            <span>Rs.1000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.2000 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-month ">
                        <div class="menu-content ">
                            <a href="# ">Weight loss</a>
                            <span>Rs.2000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.2000 extra
                        </div>
                    </div>


                    <div class="col-lg-6 menu-item filter-3mon ">
                        <br>3-Months-----------------------
                        <div class="menu-content ">

                            <a href="# ">Bodybuilding</a><span>Rs.4000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.4500 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-3mon ">
                        <br>
                        <br>
                        <div class="menu-content ">
                            <a href="# ">Cardio</a><span>Rs.5000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.4500 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-3mon ">
                        <div class="menu-content ">
                            <a href="# ">Crossfit</a><span>Rs.2500</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.4500 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-3mon ">
                        <div class="menu-content ">
                            <a href="# ">Weight loss</a><span>Rs.4500</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.4500 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-year ">
                        <br> Annual-------------------------
                        <div class="menu-content ">
                            <a href="# ">Bodybuilding</a><span>Rs.15000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.20,000 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-year ">
                        <br>
                        <br>
                        <div class="menu-content ">
                            <a href="# ">Cardio</a><span>Rs.20,000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.20,000 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-year ">
                        <div class="menu-content ">
                            <a href="# ">Crossfit</a><span>Rs.10,000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.20,000 extra
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-year ">
                        <div class="menu-content ">
                            <a href="# ">Weight Loss</a><span>Rs.20,000</span>
                        </div>
                        <div class="menu-ingredients ">
                            With personal trainer Rs.20,000 extra
                        </div>
                    </div>

                </div>

            </div>

            </div>
        </section>
        <!-- End Menu Section -->



        <!-- ======= register Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container ">

                <div class="section-title ">
                    <h2><span>Register Now!</span></h2>
                    <p>Enter your details and the program you want to choose. Submit and enroll yourself as a member of the MK Fitness.</p>
                </div>

                <form action="submit " method="post" role="form " >
                    @csrf
                    <div class="row ">
                        <div class="col-lg-4 col-md-6 form-group ">
                            <input type="text " name="nameff" class="form-control " id="name " placeholder="Your Name " data-rule="minlen:4 " data-msg="Please enter at least 4 chars ">
                            <div class="validate "></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
                            <input type="email " class="form-control " name="emailff" id="email " placeholder="Your Email " data-rule="email " data-msg="Please enter a valid email ">
                            <div class="validate "></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
                            <input type="text " class="form-control " name="phoneff" id="phone " placeholder="Your Phone " data-rule="minlen:4 " data-msg="Please enter at least 4 chars ">
                            <div class="validate "></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 ">
                            <input type="text " name="dateff" class="form-control" id="date " placeholder="enter date you want to join on " data-rule="minlen:4 " data-msg="Please enter at least 4 chars ">
                            <div class="validate "></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 ">
                            <input type="text " class="form-control " name="packageff" id="package " placeholder="package(monthly etc)" data-rule="minlen:4 " data-msg="Please enter at least 4 chars ">
                            <div class="validate "></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 ">
                            <input type="text " class="form-control " name="programff" id="program " placeholder="Program name (cardio etc)" data-rule="minlen:4 " data-msg="Please enter at least 1 chars ">
                            <div class="validate "></div>
                        </div>
                    </div>
                    <div class="form-group mt-3 ">
                        <textarea class="form-control " name="messageff" rows="5 " placeholder="Special request/Message "></textarea>
                        <div class="validate "></div>
                    </div>
                 
                    <div class="text-center "><button type="submit " value="submit">Submit</button></div>
                </form>

            </div>
        </section>
        <!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid ">

                <div class="section-title ">
                    <h2>Some photos from <span>Our Gym</span></h2>
                    <p>We keep our gym & machinery up-to-date and maintained.Staff is always ready to help and keep the place clean and fresh for you to enjoy your workout.</p>
                </div>

                <div class="row no-gutters ">

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-1.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-1.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-2.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-2.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-3.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-3.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-4.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-4.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-5.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-5.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-6.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-6.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-7.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-7.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 ">
                        <div class="gallery-item ">
                            <a href="img/gallery/gallery-8.jpg " class="gallery-lightbox ">
                                <img src="img/gallery/gallery-8.jpg " alt=" " class="img-fluid ">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
            <div class="container ">

                <div class="section-title ">
                    <h2>Our Proffesional <span>Trainers</span></h2>
                    <p>The heart of MK Fitness Camp, is our team of personal trainers and coaches. We are lucky to have assembled one of the best coaching teams in all of Asia. They come from all corners of the world, joining forces in their commitment to
                        help you achieve your goals, offering advice, be that for weight-loss or strength and performance improvements. This team of elite fitness professionals are fully invested in you and your journey; as they support you rep-after-rep,
                        lap-after-lap as your coach, mentor and friend.
                    </p>
                </div>

                <div class="row ">

                    <div class="col-lg-4 col-md-6 ">
                        <div class="member ">
                            <div class="pic "><img src="img/trainers/trainer1.jpg " class="img-fluid " alt=" "></div>
                            <div class="member-info ">
                                <h4>Walter White</h4>
                                <span>All training Speicalist</span>
                                <div class="social ">
                                    <a href=" "><i class="bi bi-twitter "></i></a>
                                    <a href=" "><i class="bi bi-facebook "></i></a>
                                    <a href=" "><i class="bi bi-instagram "></i></a>
                                    <a href=" "><i class="bi bi-linkedin "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 ">
                        <div class="member ">
                            <div class="pic "><img src="img/trainers/trainer3.jpg " class="img-fluid " alt=" "></div>
                            <div class="member-info ">
                                <h4>Sarah Kamal</h4>
                                <span>Female Instructor</span>
                                <div class="social ">
                                    <a href=" "><i class="bi bi-twitter "></i></a>
                                    <a href=" "><i class="bi bi-facebook "></i></a>
                                    <a href=" "><i class="bi bi-instagram "></i></a>
                                    <a href=" "><i class="bi bi-linkedin "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 ">
                        <div class="member ">
                            <div class="pic "><img src="img/trainers/trainer2.jpg " class="img-fluid " alt=" "></div>
                            <div class="member-info ">
                                <h4>William Anderson</h4>
                                <span>Crossfit</span>
                                <div class="social ">
                                    <a href=" "><i class="bi bi-twitter "></i></a>
                                    <a href=" "><i class="bi bi-facebook "></i></a>
                                    <a href=" "><i class="bi bi-instagram "></i></a>
                                    <a href=" "><i class="bi bi-linkedin "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Trainers Section -->

        <!-- ======= Testimonials Section ======= -->
        <div class="section-title ">
            <h2>Testimonials</h2>
        </div>


        <section id="testimonials " class="testimonials ">
            <div class="container position-relative ">

                <div class="testimonials-slider swiper-container " data-aos="fade-up " data-aos-delay="100 ">
                    <div class="swiper-wrapper ">

                        <div class="swiper-slide ">
                            <div class="testimonial-item ">
                                <img src="img/testimonials/testimonials-1.jpg " class="testimonial-img " alt=" ">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left "></i> Wow, I really recommend this place for you if you want to have some fun while you do your workout! They have an amazing staff that are super serious and makes you
                                    reach your goals with a smile on their faces!! Thank you MK Fitness, I will come back as soon as possible!!
                                    <i class="bx bxs-quote-alt-right quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide ">
                            <div class="testimonial-item ">
                                <img src="img/testimonials/testimonials-2.jpg " class="testimonial-img " alt=" ">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left "></i> Trained here for 2nd year in a row. The location is great, on the main road like most other gyms in the area so you don’t get bothered by secret location. The gym
                                    also has a quite large boot camp area which I enjoyed training on. The coaches I found to be very professional and knowledgeable. Learned plenty of new stuff. Will definitely go back.
                                    <i class="bx bxs-quote-alt-right quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide ">
                            <div class="testimonial-item ">
                                <img src="img/testimonials/testimonials-3.jpg " class="testimonial-img " alt=" ">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left "></i>Love this place! Come back every year and can’t wait to come again!!
                                    <i class="bx bxs-quote-alt-right quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide ">
                            <div class="testimonial-item ">
                                <img src="img/testimonials/testimonials-4.jpg " class="testimonial-img " alt=" ">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left "></i>Just finished 2 weeks at ZK! First impressions are hard to change but not only was the complex (yes they have a gym/yoga/assault course/outside crossfit area) amazing
                                    to top it off they have some serious trainers. I knew I was in for some serious workouts when Mitch (Head trainer) pushed me as hard as I’d been in 5 years on the first day. Always with a smile but more importantly
                                    an awareness of my abilities. ZK and team are the reason I am coming back to train again. Want to push yourself with great people then this is the place. Big shout to Walter he helped me find new limits. Keep up the
                                    great work!
                                    <i class="bx bxs-quote-alt-right quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide ">
                            <div class="testimonial-item ">
                                <img src="img/testimonials/testimonials-5.jpg " class="testimonial-img " alt=" ">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left "></i>Best training and trainers I have ever had in my life!.Super friendly atmosphere,Every session is different and fun.The trainers really push,motivate and helps us
                                    to exceed our limits and achieve our goals. ZK Fitness is not just like any other fitness facility but like a family!.Highly recommended for all the fitness lovers irrespective of what level you are in.I am definitely
                                    coming back!!!
                                    <i class="bx bxs-quote-alt-right quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination "></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container ">

                <div class="section-title ">
                    <h2><span>Contact</span> Us</h2>
                    <p>Contact us using information below to receive our newest workout routines, news, stories, and offers from us. Also feel free to add comments or suggestions. we would love to hear from you!</p>
                </div>
            </div>

            <div class="map ">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.4069398048605!2d73.13718431520236!3d33.568781980740276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfed53ec72b43d%3A0x6d6e8a4d17096c90!2sZK%20fitness!5e0!3m2!1sen!2s!4v1651416124345!5m2!1sen!2s "
                    width="1250 " height="600 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
            </div>

            <div class="container mt-5 ">

                <div class="info-wrap ">
                    <div class="row ">
                        <div class="col-lg-3 col-md-6 info ">
                            <i class="bi bi-geo-alt "></i>
                            <h4>Location:</h4>
                            <p>Al-Kamal plaza<br>NPF, Islamabad</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0 ">
                            <i class="bi bi-clock "></i>
                            <h4>Open Hours:</h4>
                            <p>Monday-Saturday:<br>07:00 AM - 11:30 PM</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0 ">
                            <i class="bi bi-envelope "></i>
                            <h4>Email:</h4>
                            <p>abc123@gmail.com<br>mk11@yahoo.com</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0 ">
                            <i class="bi bi-phone "></i>
                            <h4>Call:</h4>
                            <p>051 56765756<br>051 55577559</p>
                        </div>
                    </div>
                </div>

                <form action="contact"  method="post" role="form " >
                    @csrf
                    <div class="row ">
                        <div class="col-md-6 form-group ">
                            <input type="text " name="nameff" class="form-control " id="name" placeholder="Your Name " required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0 ">
                            <input type="email " class="form-control " name="emailff" id="email" placeholder="Your Email " required>
                        </div>
                    </div>
                    <div class="form-group mt-3 ">
                        <input type="text " class="form-control " name="subjectff" id="subject" placeholder="Subject " required>
                    </div>
                    <div class="form-group mt-3 ">
                        <textarea class="form-control " name="messageff" rows="5 " placeholder="Message" required></textarea>
                    </div>
                   
                    <div class="text-center "><button type="submit">Send Message</button></div>
                </form>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>MK Fitness</h3>
            <p>Your Fitness and well being is what matters to us!</p>
            <div class="social-links ">
                <a href="# " class="twitter "><i class="fa fa-twitter "></i></a>
                <a href="# " class="facebook "><i class="fa fa-facebook "></i></a>
                <a href="# " class="instagram "><i class="fa fa-instagram "></i></a>
                <a href="# " class="google-plus "><i class="fa fa-skype "></i></a>
                <a href="# " class="linkedin "><i class="fa fa-linkedin "></i></a>
            </div>
            <div class="copyright ">
                &copy; Copyright <strong><span>MK Fitness</span></strong>. All Rights Reserved
            </div>
            <div class="credits ">


            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="# " class="back-to-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <!-- Vendor JS Files -->
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/glightbox.min.js "></script>
    <script src="js/isotope.pkgd.min.js "></script>
    <script src="js/validate.js "></script>
    <script src="js/swiper-bundle.min.js "></script>

    <!-- Template Main JS File -->
    <script>(function() {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
        })
    }

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    let selectTopbar = select('#topbar')
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.add('topbar-scrolled')
                }
            } else {
                selectHeader.classList.remove('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.remove('topbar-scrolled')
                }
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function(e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function(e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle('dropdown-active')
        }
    }, true)

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function(e) {
        if (select(this.hash)) {
            e.preventDefault()

            let navbar = select('#navbar')
            if (navbar.classList.contains('navbar-mobile')) {
                navbar.classList.remove('navbar-mobile')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash)
            }
        }
    });

    /**
     * Hero carousel indicators
     */
    let heroCarouselIndicators = select("#hero-carousel-indicators")
    let heroCarouselItems = select('#heroCarousel .carousel-item', true)

    heroCarouselItems.forEach((item, index) => {
        (index === 0) ?
        heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
            heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
    });



    /**
     * Testimonials slider
     */
    new Swiper('.events-slider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    /**
     * Initiate gallery lightbox 
     */
    const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
    });

    /**
     * Testimonials slider
     */
    new Swiper('.testimonials-slider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

})()
</script>

</body>

</html>

</html>

</html>