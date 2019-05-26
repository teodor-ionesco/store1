<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<style type="text/css">
			html {
				scroll-behavior: smooth;
			}

			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

			main {
				flex: 1 0 auto;
			}

			.__wall1 {
				height: 30px;
				background-color: #c5005a;
			}

			.__wall1 .__menu
			{
				position: relative;
				padding: 2.45px;
			}

			.__wall1 a 
			{
				color: white;
			}

			.__wall1 a:hover 
			{
				color: lightgrey;
			}
			
			.__wall2 {
				height: 300px;
				background-color: #ff0075; 
				text-align: center;
				padding: 12px;
				margin-top: -3px;
			}

			@yield('style')
		</style>
		@yield('head')
	</head>
	<body>
		<header>
			<!-- global header -->
			<div class="__wall1">
				<div class="container">
					<div class="__menu">
						<a href="#!" data-target="__sidenav" class="sidenav-trigger" style="float: left; display: inline;"><i class="material-icons">menu</i></a>
						<a href="/cart#cart" style="float: right; display: inline;"><i class="material-icons">shopping_cart</i></a>
					</div>
				</div>
			</div>

			<!-- giant cover -->
			<div class="__wall2 z-depth-2">@yield('cover')</div>

			<!-- global sidenav -->
			<ul id="__sidenav" class="sidenav"> 
				<li>
					<a href="/">
						<i class="material-icons">home</i>
						&nbsp;Homepage
					</a>
				</li>
				<li>
					<a href="/#about_me">
					<i class="material-icons">account_circle</i>
						&nbsp;About me
					</a>
				</li>
				<li>
					<a href="/#my_work">
					<i class="material-icons">photo_library</i>
						&nbsp;My work
					</a>
				</li>
				<li>
					<a href="/cart#cart">
					<i class="material-icons">shopping_cart</i>
						&nbsp;Cart
					</a>
				</li>

				<div class="divider"></div>
				<li>
					<a href="#!" onclick="M.Sidenav.getInstance($('#__sidenav')).close();">
						<i class="material-icons">keyboard_backspace</i>
						&nbsp;Back
					</a>
				</li>
			</ul>
		</header>

		<main>@yield('main')</main>

		<footer id="footer" class="page-footer z-depth-2" style="background-color: #ff0075 !important; ">
			<div class="container">
				<div class="row">
					<div class="col l4 offset-l1 m4 s12">
						<h5 class="white-text">Quick links</h5>
						<ul>
							<li>
								<a class="grey-text text-lighten-3" href="/">
									<span>Homepage</span>
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/#about_me">
									<span>About me</span>
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/#my_work">
									<span>My work</span>
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="/cart#cart">
									<span>Cart</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col l4 m4 s12">
						<h5 class="white-text">Contact Me</h5>
						<ul>
							<li>
								<a class="grey-text text-lighten-3" href="#!">
									<i class="fa fa-facebook" aria-hidden="true"></i>
									<span style="margin-left: 6px;">Facebook</span>
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="#!">
									<i class="fa fa-whatsapp"></i>
									<span style="margin-left: 2px;">Whatsapp</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col l3 m4 s12">
						<h5 class="white-text">Support me</h5>
						<ul>
							<li>
								<a class="grey-text text-lighten-3" href="#!">
									<i class="fa fa-paypal" aria-hidden="true"></i>
									<span style="margin-left: 6px;">Paypal</span>
								</a>
							</li>
							<li>
								<a class="grey-text text-lighten-3" href="#!">
									<i class="fa fa-credit-card"></i>
									<span style="margin-left: 2px;">Credit card</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright" style="background-color: #c5005a !important;">
				<div class="container">
					© 2019 - All rights reserved
					<a class="grey-text text-lighten-4 right" href="#!" onclick="__scrolltop(this)">
						<i style="margin-top: 2px;" class="material-icons">arrow_drop_up</i>
						<span style="position:relative; top: -6.5px;">Go to top</span>
					</a>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			var __scrolltop = function(__element) {
			    $('html, body').animate({
			        scrollTop: $('html').offset().top
			    }, 700);
			}


			$(document).ready(function(){
				/*
				*	M.* Initializators
				*/
				$('.materialboxed').materialbox();
				$('.sidenav').sidenav();
				$('select').formSelect();

				/*
				*	Smooth scroll when page loads
				*/
				if(typeof $(location.hash).offset() !== 'undefined')
				{
					$('html,body').animate({
						scrollTop: $(location.hash).offset().top
					}, 700);
				}

				/*
				*	Retreat sidenav when link is clicked
				*/
				$('.sidenav a').click(function(){
					M.Sidenav.getInstance($('#__sidenav')).close();
				});
			})
		</script>
		<script type="text/javascript">@yield('js')</script>
	</body>
</html>