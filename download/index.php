<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- These meta tags come first. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:image" content="http://www.kovakreative.com/images/LogoSquare.png" />
	<meta property="og:description" content="Game Design & Development" />
	<meta property="og:url" content="http://www.kovakreative.com" />
	<meta property="og:title" content="KovaKreative Games" />
	<meta property="og:type" content="website" />
	
    <title>KovaKreative</title>

    <!-- Include the CSS -->
    <link href="./dist/toolkit-startup.css" type="text/css" rel="stylesheet">
    <link href="./dist/application-startup.css" type="text/css" rel="stylesheet">
	<link href="./style.css" type="text/css" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse sticky-top text-uppercase">
	  <div class="navbar-brand mr-auto" id="brand"><img src="images/KovaKreativeBanner.png"></div>
<!--
	  <div class="collapse navbar-collapse font-weight-bold" id="navbarNavAltMarkup">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item">
			<a id="nav-home" class="nav-link" href="/">Home</a>
		  </li>
		  <li class="nav-item">
			<a id="nav-games" class="nav-link" href="?page=games">Games</a>
		  </li>
		  <li class="nav-item">
			<a id="nav-about" class="nav-link" href="?page=about">About</a>
		  </li>
		</ul>
	  </div>
-->

	</nav>
	<div id="home">
	<div class="block block-inverse text-center pt-3 pb-3 d-none d-md-block" id="featuregame">
	<iframe frameborder="0" id="minigame" src="/KovaInvadersWeb/index.html" width="700" height="1080"></iframe>
	</div>
</div><div id="games">
<!--
	<div class="block block-inverse">
		<div class="container">
			<h1 class="brand">Video Games</h1>
		</div>
	</div>
-->
	<div class="block block-inverse pt-3 pb-3">
		<div class="container">			
			<h1 class="brand">Other Games</h1>
			<iframe frameborder="0" src="https://itch.io/embed/1539358?dark=true#nocache1678926132" width="100%" height="167"></iframe><iframe frameborder="0" src="https://itch.io/embed/640115?dark=true#nocache1678926132" width="100%" height="167"></iframe><iframe frameborder="0" src="https://itch.io/embed/764932?dark=true#nocache1678926132" width="100%" height="167"></iframe><iframe frameborder="0" src="https://itch.io/embed/445687?dark=true#nocache1678926132" width="100%" height="167"></iframe><iframe frameborder="0" src="https://itch.io/embed/382060?dark=true#nocache1678926132" width="100%" height="167"></iframe>		</div>
	</div>
</div><div class="block block-inverse p-3" id="about">
	<h1 class="brand container">About KovaKreative</h1>
	<div class="container">
		<p class="lead">Eric Kovalevskyy is a solo indie video game developer operating under the brand KovaKreative. A self-proclaimed polymath, Eric has studied a wide number of disciplines, including game design, programming, visual arts, music composition, acting for film and TV, and singing. Eric is an avid scholar and connoisseur of all entertainment media (i.e. pop culture geek), but video games in particular have been a major passion for the majority of his life. As an indie video game developer, Eric strives to create fun and engaging games like the kinds that captivated and inspired him throughout his own life.</p>
	</div>
</div>	<div class="block block-inverse app-footer">
	
	 <div class="container text-center">
			<ul class="list-unstyled list-spaced">
			  <li class="mb-2"><h6 class="text-uppercase font-weight-bold">Connect</h6></li>
			  <li>
				<a href="https://kovakreative.itch.io/" target="_blank"><img class="icon icon-img social" src="images/icons/itchio.svg"></a>
				<a href="https://twitter.com/KovaKreative" target="_blank"><span class="icon icon-twitter social"></span></a>
				<a href="https://www.facebook.com/KovaKreative/" target="_blank"><span class="icon icon-facebook social"></span></a>
				<a href="https://www.youtube.com/channel/UC7FcAmAJxac5D3rMO7s1Z2w" target="_blank"><span class="icon icon-youtube social"></span></a>
			  </li>
			</ul>
	  </div>
	  <p id="copyright" class="text-center mt-5 mb-0">
				© Copyright 2022, KovaKreative. All Rights Reserved.
	  </p>
	</div>

    <!-- Include jQuery (required) and the JS -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="tether.min.js"></script>
    <script src="dist/toolkit.js"></script>
	<script src="dist/application.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>