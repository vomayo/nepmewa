<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/fav.png" type="image/x-icon">
    <link href="<?php echo base_url(); ?>assets/css/opencss.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/fav.jpg">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
	<style>
	  .continer-fluid {
	  position: fixed;
  }
  .container {
  max-width: 1770px; }
.navbar-collapse {
	padding-left: 50px;
	margin-left: 100px;
	max-width: 150px;
}
.logo {
	
}
.nav-col {
	padding-top: 20px;
}
.nav-row {
	width: 2100px;
}
.submenu {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.submenu a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.submenu a:hover {background-color: #f1f1f1}
.nav-itemm:hover .submenu {
	display: block;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.logoname {
	float: right;
}
	</style>
</head>

    <body>
        
         <!-- ################# Header Starts Here#######################--->

    <header class="continer-fluid ">
        <div  class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope" style="color:white;"></i>
                               <a style="color:white;" href="mailto:nepmewacollege@gmail.com">nepmewacollege@gmail.com</a>
                                <span>|</span></li>
                            <li>
                                <i class="fas fa-phone-volume" style="color:white;"></i>
                                <a style="color:white;" href="tel:0708513485">0708513485</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
						 <li>
                                
                           
						   <a style="color:white;" href="<?php echo base_url('login'); ?>"><i class="fa fa-user">Portal</i></a>

						   </li>
						
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-3 col-md-12 logo">
                        <a href="home.html">
						
                            <img src="<?php echo base_url(); ?>assets/logoo.png" alt="nep-mewa logo"><!--<div class="logoname">
							NEP-MEWA COLLEGE OF PROFESSIONAL STUDIES
							</div> -->
                        </a>

                    </div>
                    <div class="col-lg-9 col-md-12 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="home.html">Home
                                        </a>
                                    </li>
                                     <li class="nav-itemm">
									<a class="nav-link" href="#">Academics</a>
                                    <ul class="submenu">
										<li><a href="courses.html">Courses</a></li>
										<li><a href="fees.html">Fee Structure</a></li>
									</ul>
								  </li>
                                    <li class="nav-itemm">
									<a class="nav-link" href="#">Administration</a>
                                    <ul class="submenu">
									<li><a href="about.html">About</a></li>
										<li><a href="<?php echo base_url('welcome/staff'); ?>">Staff</a></li>
									</ul>
								  </li>
								  	<li class="nav-itemm">
									<a class="nav-link" href="#">Downloads</a>
                                    <ul class="submenu">
										<li><a href="<?php echo base_url('welcome/downloadfeestructure'); ?>">Fee Structure</a></li>
									</ul>
								  </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>




                                </ul>
                               
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
	
    </header>
        