<html>
	<head>
		<title>test aja</title>
		<link rel="stylesheet" href="">
		<style>
		#responsive-container {
		width:1140px;
		margin:auto;
		}
		.testimonial {
		height:500px;
		width:100%;
		padding:1em;
		margin:1em auto;
		}
		.testimonial div {
		text-align:center;
		vertical-align:middle;
		color:#999966;
		font-family:monospace;
		font-size:1.5em;
		}
		.testimonial h2{
		font-size:30px;
		font-weight:300;
		margin: 25px 0px 48px 0px;
		width: 100%;
		text-align: center;
		}
		.testimonial img{
		margin:0 1em 0 1em;
		border-radius:100%;
		width:200px;
		height:200px;
		}
		.testimonial p{
		text-align:center;
		vertical-align:middle;
		color:#222;
		font-family:Arial;
		font-size:20px;
		}
		.testimonial h3{
		font-size:15px;
		text-align: center;
		}
		#slideshow1 {
		background:transparent;
		}
		#slideshow2 {
		background:transparent;
		}
		#slideshow3 {
		background:transparent;
		}
		#slideshow4 {
		background:transparent;
		}
		</style>
	</head>
	<body>
		<div id="responsive-container">
			<div class="testimonial">
				<h2>
				Testimonials</h2>
				<div id="slideshow1">
					<img src="URL GAMBAR ANDA"/>
					<p>
						Lorem Ipsum dolor sit amet, consectetur adipisicing elit,sed do
					euismod tempor incididunt ut labore et dolore magnaaliqua, ut enim.</p>
					<div>
					Nama 1</div>
					<h3>
					Jabatan 1</h3>
				</div>
				<div id="slideshow2" style="display: none">
					<img src="URL GAMBAR ANDA"/>
					<p>
						Lorem Ipsum dolor sit amet, consectetur adipisicing elit,sed do
					euismod tempor incididunt ut labore et dolore magnaaliqua, ut enim.</p>
					<div>
					Nama 2</div>
					<h3>
					Jabatan 2</h3>
				</div>
				<div id="slideshow3" style="display: none">
					<img src="URL GAMBAR ANDA"/>
					<p>
						Lorem Ipsum dolor sit amet, consectetur adipisicing elit,sed do
					euismod tempor incididunt ut labore et dolore magnaaliqua, ut enim.</p>
					<div>
					Nama 3</div>
					<h3>
					Jabatan 3</h3>
				</div>
				<div id="slideshow4" style="display: none">
					<img src="URL GAMBAR ANDA"/>
					<p>
						Lorem Ipsum dolor sit amet, consectetur adipisicing elit,sed do
					euismod tempor incididunt ut labore et dolore magnaaliqua, ut enim.</p>
					<div>
					Nama 4</div>
					<h3>
					Jabatan 4</h3>
				</div>
			</div>
		</div>
		<script type="text/javaScript">
		function startSlides(start, end, delay) {
		setTimeout(slideshow(start,start,end, delay), delay);
		}
		function slideshow(frame, start, end, delay) {
		return (function() {
		$('#slideshow' + frame).fadeOut();
		if (frame == end) { frame = start; } else { frame += 1; }
		setTimeout(function(){$('#slideshow' + frame ).fadeIn();}, 850);
		setTimeout(slideshow(frame, start, end, delay), delay + 850);
		})
		}
		// usage: startSlides(first frame, end frame, delay time);
		startSlides(1, 4, 5000);
		</script>
		<script src="js/boostrap.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
	</body>
</html>