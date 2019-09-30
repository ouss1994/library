
<!DOCTYPE html>
<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : Vijayan PP
PROJECT :RAMSH
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The RAMSH- Responsive Landing Page</title>

        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/color/yellow.css">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">

        <!-- [ table STYLESHEET ] 
        =========================================================================================================================-->
    <link href="css/table/bootstrap.min.css" rel="stylesheet">
	    <link href="css/table/style.css" rel="stylesheet">
    <style type="text/css">
        .table-responsive {height:300px;}
    </style>   
        
</head>
<body >
<!-- [ LOADERs ]
================================================================================================================================-->	
    <div class="preloader">
    <div class="loader theme_background_color">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- [ /PRELOADER ]
=============================================================================================================================-->
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
  <!-- [NAV]
 ============================================================================================================================-->    
   <!-- Navigation
    ==========================================-->
    <nav  class=" ramsh-menu navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php">ENSIT<span class="themecolor">LIBRARY</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php#home" class="page-scroll">Accueil</a></li>
            <li><a href="#about" class="page-scroll">ENSIT</a></li>
          
       
            <li><a href="#portfolio" class="page-scroll">Livres</a></li>
            <li><a href="#client" class="page-scroll">Inscription</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- / -->
    </nav>

   <!-- [/NAV]-->

	<!-- [ DEFAULT SCRIPT ] -->
	<script src="library/jquery-1.11.3.min.js"></script>
        <!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
	
 <!--============================================================================================================================--> 
    
   <!-- [/MAIN-HEADING]
 ============================================================================================================================--> 
<!-- [ /WRAPPER ]
=============================================================================================================================-->
    <section class="main-heading text-center" id="home" > 
   
    <div class="overlay"  >
       <!--table-->
   
        <div class="wrappers">
          <table class="table " id="acrylic">

          <thead>
            <tr>
          
              <th width=100px;>INV</th>
              <th>Titre</th>
              <th width=200px;>Auteur</th>

            </tr>
          </thead>
          <tbody id="myTable"> 