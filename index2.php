<!DOCTYPE html>
<html>
	<head>
		<title>contoh</title>
		<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Droid+Sans);
		@import url("https://fonts.googleapis.com/css?family=Orbitron:400,700");
		*, *:before, *:after {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		}
		html, body {
		width: 100%;
		}
		body {
		background-color: #f0f0f0;
		color: #222;
		font-family: 'Droid Sans', sans-serif;
		font-size: 14px;
		position: relative;
		}
		a {
		color: #333;
		text-decoration: none;
		}
		.navigation-top {
		color: #fff;
		background: rgba(0, 0, 0, 0.5);
		display: block;
		padding: 20px;
		position: fixed;
		right: 0px;
		bottom: 20px;
		cursor: pointer;
		}
		.nav-header {
		background: #FFF;
		padding: 10px 0;
		transition: all .250s ease-out;
		position: fixed;
		width: 100%;
		z-index: 1;
		}
		.nav-header.fixed {
		background: rgba(0, 0, 0, 0.5);
		padding-top: 5px;
		padding-bottom: 5px;
		}
		.nav-header.fixed .menu-item a {
		color: #FFF;
		}
		.nav-header.fixed .menu-item a:hover {
		border-bottom: solid 2px white;
		}
		.menu {
		list-style: none;
		display: flex;
		}
		.menu .menu-item {
		flex: 1 1 auto;
		}
		.menu .menu-item.logo a {
		font-size: 16px;
		font-weight: bold;
		}
		.menu .menu-item a {
		border-bottom: solid 2px transparent;
		display: block;
		padding: 10px 25px;
		text-align: center;
		transition: all 300ms;
		}
		.menu .menu-item a:hover {
		border-bottom: solid 2px red;
		}
		.cover {
		height: 420px;
		width: 100%;
		overflow: hidden;
		position: relative;
		margin-bottom: 50px;
		}
		.cover .full-image {
		background: url("https://s.yimg.com/uy/build/images/sohp/inspiration/solar-storm3.jpg") center center no-repeat;
		background-size: cover;
		width: 100%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		}
		.cover .full-image p {
		color: white;
		font-family: 'Orbitron', sans-serif;
		font-weight: 700;
		z-index: 1;
		font-size: 60px;
		}
		.cover .full-image:after {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: rgba(0, 0, 0, 0.3);
		}
		section {
		min-height: 250px;
		}
		.container {
		margin: 0 auto;
		max-width: 980px;
		}
		.section-header h1 {
		padding: 10px 0;
		}
		.section-content {
		display: flex;
		}
		.section-content img {
		flex: 0 0 250px;
		height: 150px;
		margin-right: 15px;
		}
		.section-content p {
		flex: 1 1 auto;
		font-size: 13px;
		line-height: 23px;
		}
		footer {
		padding: 50px;
		text-align: center;
		background: transparent;
		border-top: solid 1px #dfdfdf;
		}
		</style>
	</head>
	<body>
		<nav class="nav-header" id="page-top-nav">
			<div class="container">
				<ul class="menu">
					<li class="menu-item logo"><a>Daniel Pérez Atanacio</a></li>
					<li class="menu-item"> <a href="#home">Home</a></li>
					<li class="menu-item"> <a href="#customers">Customers</a></li>
					<li class="menu-item"> <a href="#services">Services</a></li>
					<li class="menu-item"> <a href="#projects">Projects</a></li>
					<li class="menu-item"> <a href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		<section class="cover">
			<div class="full-image">
				<p>Web Developer</p>
			</div>
		</section>
		<section class="section" id="home-nav">
			<div class="container">
				<header class="section-header">
					<h1>Section Home</h1>
				</header>
				<div class="section-content"><img src="https://s.yimg.com/uy/build/images/sohp/inspiration/getting-the-shot3.jpg"/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, iste alias sunt eaque. Repellat cupiditate, amet laudantium velit, quidem consequatur nobis, placeat quod dignissimos accusamus nemo. Odio et commodi aperiam.</p>
				</div>
			</div>
		</section>
		<section class="section" id="customers-nav">
			<div class="container">
				<header class="section-header">
					<h1>Section Customers</h1>
				</header>
				<div class="section-content"><img src="https://s.yimg.com/uy/build/images/sohp/inspiration/getting-the-shot3.jpg"/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, iste alias sunt eaque. Repellat cupiditate, amet laudantium velit, quidem consequatur nobis, placeat quod dignissimos accusamus nemo. Odio et commodi aperiam.</p>
				</div>
			</div>
		</section>
		<section class="section" id="services-nav">
			<div class="container">
				<header class="section-header">
					<h1>Section Services</h1>
				</header>
				<div class="section-content"><img src="https://s.yimg.com/uy/build/images/sohp/inspiration/getting-the-shot3.jpg"/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, iste alias sunt eaque. Repellat cupiditate, amet laudantium velit, quidem consequatur nobis, placeat quod dignissimos accusamus nemo. Odio et commodi aperiam.</p>
				</div>
			</div>
		</section>
		<section class="section" id="projects-nav">
			<div class="container">
				<header class="section-header">
					<h1>Section Projects</h1>
				</header>
				<div class="section-content"><img src="https://s.yimg.com/uy/build/images/sohp/inspiration/getting-the-shot3.jpg"/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, iste alias sunt eaque. Repellat cupiditate, amet laudantium velit, quidem consequatur nobis, placeat quod dignissimos accusamus nemo. Odio et commodi aperiam.</p>
				</div>
			</div>
		</section>
		<section class="section" id="contact-nav">
			<div class="container">
				<header class="section-header">
					<h1>Section Contact</h1>
				</header>
				<div class="section-content"><img src="https://s.yimg.com/uy/build/images/sohp/inspiration/getting-the-shot3.jpg"/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, iste alias sunt eaque. Repellat cupiditate, amet laudantium velit, quidem consequatur nobis, placeat quod dignissimos accusamus nemo. Odio et commodi aperiam.</p>
				</div>
			</div>
		</section>
		<footer><a href="#">©2018 - Daniel Pérez Atanacio</a></footer>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript">
			var ScrollPage = {
		/**
		* Pixels where the anchor is hidden
		*/
		pxHidded: -100,
		
		/**
		* Pixels for showing the anchor
		*/
		pxShowed: 20,
		
		/**
		* Flag que indica si el mouse esta en movimiento
		*/
		isMovement: false,
		/**
		* Flag que indica si se esta haciendo scrolling
		*/
		scrolling: false,
		
		/**
		*
		*/
		inTop: true,
		
		/**
		* Initializes the navigation system
		*/
		init: function(){
		var _this = this;
		if (typeof window.onhashchange === 'undefined') {
		throw new Exception("hashchange not available.");
		}
		// Handle hash change
		$(window).bind('hashchange', function(e){
		_this.navigateTo(window.location.hash);
		});
		var btnTop = $('<a>').addClass('navigation-top')
			.css({right: this.pxHidded})
			.html('<i>Up</i>')
			.click(function(){
			_this.navigateTo('#page-top');
			});
			// Add top pointer
			$('body').prepend(btnTop);
			// Scroll handling
			$(window).scroll(function(event) {
			var currScroll = $(window).scrollTop();
			var height = $('.nav-header').outerHeight();
			
			if (currScroll >= height) {
			_this.showNavigatingTop(_this.pxShowed);
			} else {
			_this.showNavigatingTop(_this.pxHidded);
			}
			
			if (currScroll > height) {
			_this.inTop = true;
			} else {
			_this.inTop = false;
			}
			_this.fixedHeader();
			//_this.scrolling = true;
			});
			
			if (true) {
			this.automaticHidden();
			}
			},
			showNavigatingTop: function(value){
			var _this = this;
			this.animUp = true;
			$('.navigation-top').stop().animate({
			right: value }, 100, function(){
			_this.animUp = false
			});
			},
			
			automaticHidden: function(){
			var _this = this;
			this.isMovement = false;
			$(document).mousemove(function(event){
			_this.isMovement = true;
			});
			setTimeout(function(){
			if (!_this.isMovement) {
			// Hide
			_this.showNavigatingTop(_this.pxHidded);
			} else {
			if (_this.inTop) {
			_this.showNavigatingTop(_this.pxShowed);
			_this.isMovement = false;
			}
			}
			}, 8000);
			},
			
			/**
			* Navigates to specified element
			*
			* @param {string} selector
			* @returns {unresolved}
			*/
			navigateTo: function(selector) {
			if (this.scrolling === true) return false;
			var target = $(selector + '-nav');
			var _this = this;
			var top = 0;
			var header = parseInt($('.nav-header').outerHeight(), 10);
			if ($(window).width() < 568) {
			header = 0;
			}
			
			if (selector != '#page-top') {
			top = target.offset().top - header;
			}
			this.scrolling = true;
			$('body, html').animate({
			scrollTop: top
			}, 500, function(){ _this.scrolling = false; });
			}
			
			};
			$(ScrollPage.init());
			</script>
		</body>
	</html>