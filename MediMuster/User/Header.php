<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords"
              content="Medick Responsive web template, Bootstrap Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <title>MediMuster A Covid 19 Vaccination Site | Home :: Lcc </title>
        <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
              rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style-starter.css">
        <link rel="icon" href="../icon.png">
        <style>
    .dropbtn {
        background-color: transparent;
        color: #ffffff;
        padding: 16px;
        font-weight: bold;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
    .dropbtn:hover{
        color: #2CAEE2
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: transparent;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: transparent}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: transparent;
    }
</style>
        <style>
            /* The container */
            .container1 {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Hide the browser's default radio button */
            .container1 input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
            }

            /* Create a custom radio button */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 50%;
            }

            /* On mouse-over, add a grey background color */
            .container1:hover input ~ .checkmark {
                background-color: #ccc;
            }

            /* When the radio button is checked, add a blue background */
            .container1 input:checked ~ .checkmark {
                background-color: #2CAEE2;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .container1 input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .container1 .checkmark:after {
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }
            
            
            
            
            /* The file upload */
            .file-upload-wrapper{
                position:relative;
                width:100%;
                height:100px;
                cursor: pointer;
            }
            .file-upload-wrapper::after{
                content:attr(data-text);
                font-size: 18px;
                position:absolute;
                top:0;
                left:0;
                background:#fff;
                padding:5px 15px;
                display: block;
                width:calc(100% - 40px);
                pointer-events:none;
                z-index: 20;
                height:40px;
                line-height: 40px;
                color:#999;
                border-radius: 5px 10px 10px 5px;
                font-weight: 300;
            }
            .file-upload-wrapper::before{
                content:"Upload";
                position:absolute;
                top:0;
                right:0;
                display: inline-block;
                height:40px;
                background: -webkit-linear-gradient(to right, #286A84, #05612a);
                background: linear-gradient(to right, #24C6DC, #286A84);
                color:#fff;
                font-weight: 700;
                z-index: 25;
                font-size: 16px;
                line-height: 50px;
                padding:0 15px;
                text-transform: uppercase;
                pointer-events: none;
                border-radius: 0 5px 5px 0;
                transition: 0.5s ease-in-out;
            }
            .file-upload-wrapper:hover::before{
                background: -webkit-linear-gradient(to right, #514A9D, #286A84);
                background: linear-gradient(to right, #286A84, #24C6DC);
            }
            .file-upload-wrapper input{
                opacity: 0;
                position:absolute;
                top:0;
                right:0;
                bottom:0;
                left:0;
                z-index: 99;
                height:40px;
                margin:0;
                padding:0;
                display:block;
                cursor: pointer;
                width:100%;
            }
        
        </style>
    </head>

    <body>
        <!--header-->
        <div class="header-w3l">
            <!-- header -->
            <header id="site-header" class="fixed-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg stroke">
                        <a class="navbar-brand" href="index.html">
                           <span class="sub-logo">M</span>edi<span class="sub-logo">M</span>uster</span>
                        </a>
                        <!-- if logo is image enable this   
                          <a class="navbar-brand" href="#index.html">
                              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                          </a> -->
                        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                            </span>
                        </button>

                        <?php
                        include './Head.php';
                        ?>


                        <!-- toggle switch for light and dark theme -->
                        <div class="mobile-position">
                            <nav class="navigation">
                                <div class="theme-switch-wrapper">
                                    <label class="theme-switch" for="checkbox">
                                        <input type="checkbox" id="checkbox">
                                        <div class="mode-container">
                                            <i class="gg-sun"></i>
                                            <i class="gg-moon"></i>
                                        </div>
                                    </label>
                                </div>
                            </nav>
                        </div>
                        <!-- //toggle switch for light and dark theme -->
                    </nav>
                </div>
            </header>
        </div>
        <!-- //header -->
        <!--/breadcrumb-bg-->
        <div class="breadcrumb-bg py-5  w3l-inner-page-breadcrumb">
            <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
                <h2 class="title pt-5"></h2>
                <ul class="breadcrumbs-custom-path mt-3 text-center">
                    <li><a href="index.html"></a></li>
                    
                </ul>
            </div>
        </div>

        <!--//breadcrumb-bg-->
        <!-- banner bottom shape -->
        <div class="position-relative">
            <div class="shape overflow-hidden">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>