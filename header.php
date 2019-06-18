<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<!-- Фавикон -->
	<link rel="icon" href="/favicon.png" type="image/png">
	
	<script src="/wp-content/themes/twentytwelve/js/jquery.min.js"></script>
	<script src="/wp-content/themes/twentytwelve/js/effects.js"></script>
<!-- Bootstrap -->
	<link rel="stylesheet" href="/wp-content/themes/twentytwelve/css/bootstrap.min.css">
	<script src="/wp-content/themes/twentytwelve/js/bootstrap.min.js"></script>

	<link id="size-stylesheet" rel="stylesheet" type="text/css" href="/wp-content/themes/twentytwelve/css/custom.css" />
	 <?php if ( is_page(93) ): //Change this number to id of page ?>
     <link rel="stylesheet" href="/wp-content/terms_and_con.css" />
   <?php endif; ?>
<!--wow-->
	<link rel="stylesheet" href="/wp-content/themes/twentytwelve/css/animate.css">
	<script src="/wp-content/themes/twentytwelve/js/wow.min.js"></script>
<!-- Slider slick -->	
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<script type="text/javascript" src="slick/slick.min.js"></script>
<!--ЛайтБокс-->
	<link rel="stylesheet" type="text/css" href="/resource/lightbox.css" media="screen,tv" />
	<script type="text/javascript" charset="UTF-8" src="/resource/lightbox_plus.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn0t3p1gZe8hBIcOrOF-Y53lQFq1WE7cU"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 17,
					scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(55.77724107, 37.50389950), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"stylers":[{"hue":"#baf4c4"},{"saturation":10}]},{"featureType":"water","stylers":[{"color":"#effefd"}]},{"featureType":"all","elementType":"labels","stylers":[{"visibility":"on"}]},{featureType:"administrative",elementType:"labels",stylers:[{visibility:"on"}]},{featureType:"road",elementType:"all",stylers:[{visibility:"on"}]},{featureType:"transit",elementType:"all",stylers:[{visibility:"on"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
				var image = new google.maps.MarkerImage('/wp-content/uploads/logo.png',      
								      new google.maps.Size(138, 104),      
								      new google.maps.Point(0,0),      
								      new google.maps.Point(70,60));
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(55.77724107, 37.50389950),
                    map: map,
                    icon: image,
                    title: 'Аргус-Эко'
                });
            }
        </script>

<!-- animateNumber -->
<script type="text/javascript" src="/wp-content/themes/twentytwelve/js/jquery.viewportchecker.js"></script>
<script type="text/javascript" src="/wp-content/themes/twentytwelve/js/jquery.animateNumber.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139943574-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139943574-1');
</script>
</head>

<body <?php body_class(); ?>  >
	<div id="main" class="wrapper">