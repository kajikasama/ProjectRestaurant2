// event pada saat link di klik
//cara bacanya :
//jekueri tolong carikan saya aidi dari peg skrol 
//jika sudah ketemu pada saat di klik
//akan melakukan kejadian sebagai berikut
$('.page-scroll').on('click', function(e){

	//untuk ambil isi href
	//fungsi 'this' untuk mencari
	//page-scroll yg dimanan itu kita klik
	var tujuan = $(this).attr('href');
	// tangkap element yg bersangkutan
	var elemenTujuan = $(tujuan);
	
	// pindahkan scroll dengan fungsi animasi
	$('html,body').animate({

		scrollTop: elemenTujuan.offset().top - 50

	}, 1250, 'easeInOutExpo');

	//menjalakan event dari fungsi e / kejadian
	e.preventDefault();
});

$('.navbar-collapse .tutub').click(function() {
        /* always close responsive nav after click */
        // selalu tutup nav responsif setelah di klik
        $('.navbar-toggle:visible').click();
    });
// parallax
//about
// jquery tolong carikan saya semuanya / universe yg ada di html / php
// yg jika dejalankan pertama kali maka :
// jquary carikan saya class 'pKiri' dan tambah dia class baru yaitu 'pTerbang'
// jquary carikan saya class 'pKanan' dan tambah dia class baru yaitu 'pTerbang'
$(window).on('load', function(){
	// $('.pKiri').addClass('pTerbang');
	// $('.pKanan').addClass('pTerbang');
});

//parallax
// jquery tolong carikan saya semuanya / universe yg ada di html / php
//yg di scroll akan menjalankan suatu fungsi berikut ini
$(window).scroll(function() {

	//jumbotron
	//buat variabel Melayang yg 
	//pada bagian berikut ini :
	var Melayang = $(this).scrollTop();
	//bagian jumbotron img (gambar beradius)
	//yg akan menambahkan pada class jumbotron img di css
	//dengan isi atribut berikut ini :
	
	// $('.jumbotron .gambar2').css({
	// 	'transform' : 'translate(0px, '+ Melayang/4 +'%)'
	// });

	//bagian jumbotron h1 (tulisan besar)
	//yg akan menambahkan pada class jumbotron img di css
	//dengan isi atribut berikut ini :
	// $('.jumbotron h1').css({
	// 	'transform' : 'translate(0px, '+ Melayang/2 +'%)'
	// });

	//bagian jumbotron p (tulisan kecil)
	//yg akan menambahkan pada class jumbotron img di css
	//dengan isi atribut berikut ini :
	// $('.jumbotron p').css({
	// 	'transform' : 'translate(0px, '+ Melayang +'%)'
	// });

	//portfolio
	// jika Melayang lebih Besar (mendekati) dari class portfolio
	//dengan berisi margin 200 keatas maka :
	// jalankan statement berikut ini :
	if(Melayang > $('.gallery').offset().top - 200) 
	{
		// jquery carikan saya class protfolio thumbnail
		// yg akan menjalankan fungsi 'i' tapi menjalankannya harus satu-satu
		// setTimeout 'menyeting delay yg akan di fungsikan sebagai berikut'
		// jquery carikan saya class protfolio thumbnail yg
		//dimana di tambahkan class baru yaitu 'muncul' 
		//secara satu-persatu, dengan waktu 0.3 s yg dikalikan pada setiap fungsi 'i'
		$('.gallery .thumbnail').each(function(i) {
			setTimeout(function() {
				$('.gallery .thumbnail').eq(i).addClass('muncul');
			}, 300 * i);
		});


	}
	if(Melayang > $('.about').offset().top - 200)
	{
		$('.pKiri').addClass('pTerbang');
		$('.pKanan').addClass('pTerbang');
	}
	//service yg Terbang 
	if(Melayang > $('.services').offset().top - 200)
	{
		$('.services .thumbnail').each(function(k){
			setTimeout(function(){
				$('.services h2').eq(k).addClass('muncul2');
				$('.services hr').eq(k).addClass('muncul2');
			});
		});
		$('.services .thumbnail').each(function(b){
			setTimeout(function(){
				$('.services .thumbnail').eq(b).addClass('muncul');
			}, 300 * b);
		});
		$('.services .caption').each(function(d){
			setTimeout(function(){
				$('.services .caption').eq(d).addClass('muncul');
			}, 300 * d);
		});
		
	}
	// if(Melayang > $('.choose').offset().top - 200)
	// {
	// 	$('.choose h2').each(function(z){
	// 		setTimeout(function(){
	// 			$('.choose h2').eq(z).addClass('muncul');
	// 			$('.choose p').eq(z).addClass('muncul');
	// 			$('.choose hr').eq(z).addClass('muncul');
	// 		});
	// 	});
		
	// }
	if(Melayang > $('.events').offset().top - 300)
	{
		$('.events h2').each(function(a){
			setTimeout(function(){
				$('.events h2').eq(a).addClass('muncul');
				$('.events hr').eq(a).addClass('muncul');
			});
		});
		$('.events .thumbnail').each(function(c){
			setTimeout(function(){
				$('.events .thumbnail').eq(c).addClass('muncul');
			}, 300 * c);
		});	
	}
	var toplah = $('.karousel').outerHeight();
	var ngenav = $('.navbar-header').outerHeight();
	if(Melayang < toplah)
	{
		$('.navbar').css({
		'opacity' : '1'
		});
		$('.navbar-brand').css({
		'transition' : '.3s'
		});
		$('.navbar-brand').css({
		'font-size' : '25px'
		});
		$('.navbar').css({
		'background' : '#1B1B1B'
		});
	}
	if(Melayang > toplah)
	{
		$('.navbar').css({
		'opacity' : '0.9'
		});
		// $('.navbar').css({
		// 'background' : '#0D10FD'
		// });
		$('.navbar').css({
		'transition' : '.3s'
		});
		$('.navbar-brand').css({
		'transition' : '.3s'
		});
		$('.navbar-brand').css({
		'font-size' : '26px'
		});
	}
	if(Melayang < toplah)
	{
		// $('.panah').addClass('muncul');
		// $('.panah').css({	
		// 'transition' : '.3s'
		// });
		// $('.panah').css({	
		// 'opacity' : '0'
		// });
		// $('.panah').css({	
		// 'display' : 'none'
		// });
		// $('.panah').each(function(f){
		// 	setTimeout(function(){
		// 		$('.panah').eq(f).addClass('hilang');
		// 	});
		// });
		// $('.panah').css({	
		// 'transition' : '.3s'
		// });
		$('.panah').css({
		'opacity' : '0'
		});
		$('.panah').css({
		'transform' : 'translate(100px,0)'
		});
	}
	if(Melayang > toplah)
	{
		// $('.panah').each(function(g){
		// 	setTimeout(function(){
		// 		$('.panah').eq(g).addClass('muncul');
		// 	});
		// });
		$('.panah').css({	
		'transition' : '.3s'
		});
		$('.panah').css({
		'opacity' : '1'
		});
		$('.panah').css({
		'transform' : 'translate(0,0)'
		});
	}

});

// untuk testimonial
// function startSlides(start, end, delay) {
//     setTimeout(slideshow(start,start,end, delay), delay);
//     }
//     function slideshow(frame, start, end, delay) {
//     return (function() {
//     $('#slideshow' + frame).fadeOut();
//     if (frame == end) { frame = start; } else { frame += 1; }
//     setTimeout(function(){$('#slideshow' + frame ).fadeIn();}, 850);
//     setTimeout(slideshow(frame, start, end, delay), delay + 850);
//     })
//     }
    // usage: startSlides(first frame, end frame, delay time);
    // startSlides(1, 3, 5000);

// var ScrollPage = 
// {
// 	pHidden : -100,
// 	pShowed : 20,
// }
// var currScroll = $(window).scrollTop();
// var height = $('.karousel').outerHeight();
// if(currScroll >= height)
// {
// 	_this.showNavigatingTop(_this.pShowed);
// }
// else
// {
// 	_this.showNavigatingTop(_this.pHidden);
// }
// if(currScroll > height)
// {
// 	_this.inTop
// }