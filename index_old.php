<?php 
	include_once 'config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Domaine des Fournelles, Guillaume Dumontet</title>

<meta charset="UTF-8">

<meta name="description" content="">
<meta name="keywords" content="Domaine des Fournelles, Domaine, Fournelles, Vins, Vins Rouge, Beaujolais,  Brouilly, Cote de Brouilly, Saint Lager, de Fournelles, Domaine de, Guillaume Dumontet, Dumontet" />
<meta name="author" content="Nicolas Pisar" />
<meta name="format-detection" content="telephone=no" />
<meta name="geo.placename" content="Paris, Ile de France, France" />

<meta property="og:type" content="website" />
<meta property="og:title" content="Domaine des Fournelles" />
<meta property="og:image" content="http://www.domainedesfournelles.com/" />
<meta property="og:description" content=" " />
<meta property="og:url" content="http://www.domainedesfournelles.com" />

<meta name="viewport" content="width=device-width" />

<link rel="apple-touch-icon" sizes="76x76" href="_css/_imgs/icon@2x.png">
<link rel="apple-touch-icon" sizes="152x152" href="_css/_imgs/icon@2x.png">
<link rel="icon" type="image/png" href="<?php echo $_FP; ?>_css/_imgs/favicon<?php echo rand(0,2); ?>.png">
<link rel="mask-icon" href="_css/_imgd/favicon.svg" color="orange">

<link rel="stylesheet" type="text/css" href="_css/style.css?<?php echo $rand; ?>" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width:921px)" href="_css/style_comp.css?<?php echo $rand; ?>" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width:660px) and (max-width:920px)" href="_css/style_comp.css?<?php echo $rand; ?>" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:659px)" href="_css/style_mobile.css?<?php echo $rand; ?>" />

<link rel="stylesheet" type="text/css" href="_css/hamburger.min.css?<?php echo $rand; ?>" />
<link rel="stylesheet" type="text/css" href="http://alvarotrigo.com/fullPage/jquery.fullpage.min.css?<?php echo $rand; ?>" />

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script src="_js/jquery.sticky.js"></script>


<script>

 	$(document).ready(function(){	
 		
 	// menu sticky controler
 		$("#wrapper-navbar").stickMe();
 		
 		$("#landing-btn-arrow").click(function() {
 			$('html, body').animate({
 				scrollTop: $("#wrapper-navbar").offset().top
    		}, 1200);
		});

		$('.button').on('click', function (e) {
		    e.preventDefault();
		    $(this).toggleClass('toggled');
		});
		
	
	// this controls the main navigation
		$(".navbar-off").hover(function() {
			$(this).toggleClass("navbar-on");
			return false;
		});
		
		$(".btn-navbar").click(function() {
			var id = $(this).attr('id');
			
			$('html, body').animate({
				scrollTop: $("#block-"+id).offset().top}, 1000);
		});
		
		$( "#block-navbar-mobile-btn" ).click(function() {
			$( "#block-navbar-mobile-menu" ).slideToggle( "slow");
		});
		
		$('html').on('click', function() {
			$( "#block-navbar-mobile-menu" ).slideUp( "slow");
		});

		$('#block-navbar-mobile-btn, #block-navbar-mobile-menu').click(function(event){
			event.stopPropagation();
		});
 		
 	});

</script>

</head>

<body>

<div id="landing-logo">
	
	<div class="landing-btn-arrow" id="landing-btn-arrow"></div>
	
</div>

<div id="wrapper-navbar" class="wrapper-navbar">
	
	<div id="block-navbar-comp">
			
		<div class="btn-navbar navbar-off" id="aboutus"> Notre Domaine </div>
			
		<div class="btn-navbar navbar-off" id="wines"> Nos Vins </div>
		
		<div class="btn-navbar navbar-off" id="On Parle"> On Parle de Nous </div>
		
		<div class="btn-navbar navbar-off" id="Contact"> Contact </div>
		
	</div>
	
	<div id="block-navbar-mobile">
		
		<div id="block-navbar-mobile-btn"><a class="button"><span></span><span></span><span></span></a></div>
	
	</div>
			
	<div id="block-navbar-mobile-menu">
		
		<div class="navButton" onclick="location.href='http://www.leshorts.com/?p=about';"> Notre Domaine</div>
		<div class="navButton" onclick="location.href='http://www.leshorts.com/?p=resume';"> Nos Vins</div>
		<div class="navButton" onclick="location.href='http://www.leshorts.com/?p=portfolio';"> On Parle de Nous</div>
		<div class="navButton" onclick="location.href='http://www.leshorts.com/?p=contact';"> Contact</div>
					
	</div>
		
</div>

<div class="block-content" id="block-aboutus">
	
	<div id="aboutus-header">
		
		<div id="aboutus-header-title">
				
			- Notre Domaine - 
				
		</div>
		
	</div>
	
</div>

<div class="block-content" id="block-wines">
	
</div>

<div id="block-contact"></div>

</body>

</html>