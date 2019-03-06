<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}

	$(document).ready(function(){
	  // Add smooth scrolling to all links
	  $("a").on('click', function(event) {

	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	   
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    } // End if
	  });
	});
	</script>
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead" id="myHeader">
		<div class="container-fluid container-padded">
			<a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="universe-logo" src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe.png" alt="universe logo"></a>
			<span class="nav-expand" onclick="openNav()">&#9776; </span>
			<nav class="blog-nav">


				<div id="mySidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <a class="menu-item" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a>
				  <a class="menu-item" href="#Howtostart">How to start</a>
				  <a class="menu-item" href="#TheEarth">The Earth</a>
				  <a class="menu-item" href="#TheSolarSystem">The Solar System</a>
				  <a class="menu-item" href="#TheMoon">The Moon</a>
				  <a class="menu-item" href="#Mars">Mars</a>
				  <a class="menu-item" href="#Gallery">Gallery</a>
				  <a class="menu-item" href="#Subscribe">Subscribe</a>
				  <a class="menu-item" href="#"><span style="color:#EBA43D;">Buy now</span></a>
				</div>
			</nav>
		</div>
	</div>
	
	<div class="container-fluid">
